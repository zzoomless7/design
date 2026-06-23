<?php
// Open Props Cookie Policy Page
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Open Props</title>
  <link rel="stylesheet" href="https://unpkg.com/open-props/normalize.min.css">
  <link rel="stylesheet" href="https://unpkg.com/open-props/open-props.min.css">
  <style>
    :root {
      --brand: var(--indigo-6);
    }
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif; background: var(--gray-1); color: var(--gray-12); }
    header { background: white; border-bottom: 1px solid var(--gray-4); }
    .container { max-width: 70ch; margin-inline: auto; padding-inline: var(--size-4); }
    .prose { line-height: 1.7; }
    .card { background: white; border: 1px solid var(--gray-4); border-radius: var(--radius-3); box-shadow: var(--shadow-2); padding: var(--size-5); }
    .btn { display:inline-block; padding: var(--size-2) var(--size-3); border-radius: var(--radius-2); border: 1px solid var(--gray-5); text-decoration:none; }
    .btn-primary { background: var(--brand); color: white; border-color: var(--brand); }
    .btn-ghost { background: transparent; color: var(--gray-12); }
    .stack { display: grid; gap: var(--size-4); }
  </style>
</head>
<body>
  <header>
    <div class="container" style="padding-block: var(--size-5)">
      <h1 style="margin:0">Politica de Cookies</h1>
      <p class="prose" style="margin:0; color: var(--gray-8)">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </header>

  <main class="container" style="padding-block: var(--size-7)">
    <article class="card stack">
      <section class="stack">
        <h2>Ce sunt cookie-urile?</h2>
        <p class="prose">Cookie-urile sunt fișiere text mici care ajută site-urile să funcționeze corect și eficient.</p>
      </section>
      <section class="stack">
        <h2>Tipuri</h2>
        <ul class="prose">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>
      </section>
      <section class="stack">
        <h2>Gestionare</h2>
        <p class="prose">Puteți controla cookie-urile din setările browserului dvs.</p>
        <div class="stack" style="grid-auto-flow: column; justify-content: start;">
          <a class="btn btn-primary" href="#accept">Accept toate</a>
          <a class="btn" href="#preferinte">Preferințe</a>
          <a class="btn btn-ghost" href="#respinge">Respinge neesențiale</a>
        </div>
      </section>
      <section class="stack">
        <h2>Contact</h2>
        <p class="prose">Ne puteți scrie la <a href="mailto:privacy@example.com">privacy@example.com</a>.</p>
      </section>
    </article>
  </main>
</body>
</html>
