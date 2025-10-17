<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Pico.css</title>
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.13/css/pico.min.css">
  <style>body{background:linear-gradient(160deg,#0891b2 0%, #7c3aed 100%);} main{max-width: 980px; margin: 0 auto;} header{color:white; padding:3rem 0;}</style>
</head>
<body>
  <header>
    <main>
      <hgroup>
        <h1>Politica de Confidențialitate</h1>
        <p>Minimal, elegant, Pico.css.</p>
      </hgroup>
    </main>
  </header>
  <main>
    <article class="contrast" style="border-radius:16px; box-shadow:0 25px 60px rgba(0,0,0,.35);">
      <?php echo $content; ?>
    </article>
    <footer class="container" style="text-align:center; color:white; padding:2rem 0;">© <?php echo date('Y'); ?> Resedința Budas</footer>
  </main>
</body>
</html>
