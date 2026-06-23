<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Cirrus UI</title>
  <link rel="stylesheet" href="https://unpkg.com/cirrus-ui">
  <style>body{background:linear-gradient(135deg,#06b6d4 0%, #6366f1 100%);} .content{max-width: 1000px; margin:0 auto;} .card{box-shadow:0 25px 60px rgba(0,0,0,.3); border-radius:16px;} header{color:white; padding:3rem 0;}</style>
</head>
<body>
  <header>
    <div class="content">
      <h1 class="title">Politica de Confidențialitate</h1>
      <p class="subtitle">Cirrus UI — modular și modern.</p>
    </div>
  </header>
  <main class="content">
    <div class="card p-4">
      <?php echo $content; ?>
    </div>
    <p class="u-text-center" style="color:white; padding:2rem 0;">© <?php echo date('Y'); ?> Resedința Budas</p>
  </main>
</body>
</html>
