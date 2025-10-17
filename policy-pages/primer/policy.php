<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro" data-color-mode="light" data-light-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Primer</title>
  <link rel="stylesheet" href="https://unpkg.com/@primer/css@21.2.3/dist/primer.css">
  <style>body{background:linear-gradient(135deg,#0ea5e9 0%,#6366f1 100%);} .container-lg{max-width: 980px;} .Box{box-shadow: 0 20px 50px rgba(1,4,9,.3);} header{color:white; padding:3rem 0;}</style>
</head>
<body>
  <header>
    <div class="container-lg">
      <h1 class="f00-light">Politica de Confidențialitate</h1>
      <p class="color-fg-subtle">Primer design, inspirat de GitHub.</p>
    </div>
  </header>
  <main class="container-lg">
    <div class="Box Box--spacious">
      <div class="Box-body">
        <?php echo $content; ?>
      </div>
    </div>
  </main>
  <footer class="container-lg color-fg-on-emphasis" style="padding:1rem 0; color:white; text-align:center;">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
