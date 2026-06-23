<?php
/**
 * Policy content loader: fetches, extracts, sanitizes and caches remote HTML.
 */

if (!function_exists('get_policy_content')) {
    function get_policy_content(string $sourceUrl, int $cacheTtlSeconds = 43200): string
    {
        $cacheDir = __DIR__ . '/../cache';
        if (!is_dir($cacheDir)) {
            @mkdir($cacheDir, 0775, true);
        }

        $cacheKey = 'policy_' . md5($sourceUrl) . '.html';
        $cachePath = $cacheDir . '/' . $cacheKey;

        // Serve from cache if fresh
        if (file_exists($cachePath) && (time() - filemtime($cachePath) < $cacheTtlSeconds)) {
            $cached = @file_get_contents($cachePath);
            if (is_string($cached) && $cached !== '') {
                return $cached;
            }
        }

        $html = fetch_remote_html($sourceUrl);
        if (!is_string($html) || $html === '') {
            // Fallback to stale cache if available
            if (file_exists($cachePath)) {
                $stale = @file_get_contents($cachePath);
                if (is_string($stale) && $stale !== '') {
                    return $stale;
                }
            }
            return '<div class="policy-error">Nu am putut încărca politica de confidențialitate.</div>';
        }

        $content = extract_main_content($html, $sourceUrl);
        $content = sanitize_policy_html($content, $sourceUrl);

        // Write to cache (best-effort)
        @file_put_contents($cachePath, $content);

        return $content;
    }
}

if (!function_exists('fetch_remote_html')) {
    function fetch_remote_html(string $url): ?string
    {
        // Prefer cURL if available for robustness
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS => 5,
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_USERAGENT => 'PolicyLoader/1.0 (+https://example.com) PHP/' . PHP_VERSION,
                CURLOPT_HTTPHEADER => [
                    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                    'Accept-Language: ro-RO,ro;q=0.9,en-US;q=0.8,en;q=0.7',
                ],
            ]);
            $result = curl_exec($ch);
            $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $err = curl_error($ch);
            curl_close($ch);
            if ($result !== false && $httpCode >= 200 && $httpCode < 400) {
                return $result;
            }
        }

        // Fallback to file_get_contents
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'timeout' => 15,
                'ignore_errors' => true,
                'header' => [
                    'User-Agent: PolicyLoader/1.0 PHP/' . PHP_VERSION,
                    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                    'Accept-Language: ro-RO,ro;q=0.9,en-US;q=0.8,en;q=0.7',
                ],
            ],
        ]);
        $result = @file_get_contents($url, false, $context);
        if ($result !== false) {
            return $result;
        }

        return null;
    }
}

if (!function_exists('extract_main_content')) {
    function extract_main_content(string $html, string $baseUrl): string
    {
        $internalErrors = libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        // Try to handle UTF-8 properly
        $htmlToLoad = $html;
        if (stripos($html, '<meta charset') === false) {
            $htmlToLoad = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $html;
        }
        $dom->loadHTML($htmlToLoad);
        libxml_clear_errors();
        libxml_use_internal_errors($internalErrors);

        // Remove script and style upfront
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('//script|//style|//noscript') as $node) {
            $node->parentNode?->removeChild($node);
        }

        $candidates = [];
        // Priority targets
        $paths = [
            '//main',
            '//*[@role="main"]',
            '//article',
            '//*[@id="content" or contains(@class, "content") or contains(@class, "container")]',
        ];
        foreach ($paths as $path) {
            foreach ($xpath->query($path) as $node) {
                $len = text_length($node);
                if ($len > 400) { // heuristics: ensure substantial content
                    $candidates[] = $node;
                }
            }
        }

        if (empty($candidates)) {
            // Fallback: largest block element by text length
            $maxNode = null;
            $maxLen = 0;
            foreach ($xpath->query('//body//*[self::div or self::section or self::main or self::article]') as $node) {
                $len = text_length($node);
                if ($len > $maxLen) {
                    $maxLen = $len;
                    $maxNode = $node;
                }
            }
            $target = $maxNode ?? $dom->getElementsByTagName('body')->item(0);
        } else {
            // Choose the largest among candidates
            $target = null;
            $maxLen = -1;
            foreach ($candidates as $node) {
                $len = text_length($node);
                if ($len > $maxLen) {
                    $maxLen = $len;
                    $target = $node;
                }
            }
        }

        if (!$target) {
            return '';
        }

        // Normalize relative URLs in links and images
        absolutize_urls($target, $baseUrl);

        return inner_html($target);
    }
}

if (!function_exists('text_length')) {
    function text_length(DOMNode $node): int
    {
        return strlen(trim(preg_replace('/\s+/', ' ', $node->textContent ?? '')));
    }
}

if (!function_exists('inner_html')) {
    function inner_html(DOMNode $element): string
    {
        $html = '';
        foreach ($element->childNodes as $child) {
            $html .= $element->ownerDocument->saveHTML($child);
        }
        return $html;
    }
}

if (!function_exists('absolutize_urls')) {
    function absolutize_urls(DOMNode $root, string $base): void
    {
        if (!($root instanceof DOMElement)) {
            return;
        }
        $dom = $root->ownerDocument;
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('.//*[@src or @href]', $root) as $node) {
            if (!($node instanceof DOMElement)) continue;
            foreach (['src', 'href'] as $attr) {
                if ($node->hasAttribute($attr)) {
                    $val = trim($node->getAttribute($attr));
                    if ($val !== '' && !preg_match('#^([a-z]+:)?//#i', $val) && $val[0] !== '#') {
                        $node->setAttribute($attr, resolve_url($base, $val));
                    }
                }
            }
        }
    }
}

if (!function_exists('resolve_url')) {
    function resolve_url(string $base, string $rel): string
    {
        // If relative starts with '/', keep scheme+host from base
        $p = parse_url($base);
        if (!$p || empty($p['scheme']) || empty($p['host'])) {
            return $rel;
        }
        $scheme = $p['scheme'];
        $host = $p['host'];
        $port = isset($p['port']) ? ':' . $p['port'] : '';
        $basePath = isset($p['path']) ? $p['path'] : '/';
        $baseDir = preg_replace('#/[^/]*$#', '/', $basePath);

        if (str_starts_with($rel, '/')) {
            $path = $rel;
        } else {
            $path = $baseDir . $rel;
        }
        // Normalize ../ and ./
        $segments = [];
        foreach (explode('/', $path) as $seg) {
            if ($seg === '' || $seg === '.') continue;
            if ($seg === '..') {
                array_pop($segments);
            } else {
                $segments[] = $seg;
            }
        }
        $normalizedPath = '/' . implode('/', $segments);
        return $scheme . '://' . $host . $port . $normalizedPath;
    }
}

if (!function_exists('sanitize_policy_html')) {
    function sanitize_policy_html(string $html, string $baseUrl): string
    {
        $dom = new DOMDocument();
        $internalErrors = libxml_use_internal_errors(true);
        $dom->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $html);
        libxml_clear_errors();
        libxml_use_internal_errors($internalErrors);
        $xpath = new DOMXPath($dom);

        // Remove script/iframe/objects again just in case
        foreach ($xpath->query('//script|//iframe|//object|//embed') as $node) {
            $node->parentNode?->removeChild($node);
        }

        // Drop event handler attributes and javascript: URLs
        foreach ($xpath->query('//*[@*]') as $el) {
            if (!($el instanceof DOMElement)) continue;
            $attrsToRemove = [];
            foreach ($el->attributes as $attr) {
                $name = strtolower($attr->name);
                $value = trim($attr->value);
                if (str_starts_with($name, 'on')) {
                    $attrsToRemove[] = $name;
                }
                if (in_array($name, ['href','src'], true) && preg_match('#^\s*javascript:#i', $value)) {
                    $attrsToRemove[] = $name;
                }
            }
            foreach ($attrsToRemove as $n) {
                $el->removeAttribute($n);
            }
        }

        // Extract body innerHTML back
        $body = $dom->getElementsByTagName('body')->item(0);
        if (!$body) {
            return $html;
        }
        return inner_html($body);
    }
}
