<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — new.css</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.3/new.min.css">
  <style>body{background:linear-gradient(160deg,#9333ea 0%, #06b6d4 100%);} main{max-width: 900px; margin: 0 auto;} header{color:white; padding:3rem 0; text-align:center;} article{background:#fff; border-radius:16px; padding:2rem; box-shadow:0 25px 60px rgba(0,0,0,.35);}</style>
</head>
<body>
  <header>
    <h1>Politica de Confidențialitate</h1>
    <p>new.css — defaulturi frumoase, zero clase.</p>
  </header>
  <main>
    <article>
      <?php echo $content; ?>
    </article>
    <p style="text-align:center; color:white;">© <?php echo date('Y'); ?> Resedința Budas</p>
  </main>
</body>
</html>
