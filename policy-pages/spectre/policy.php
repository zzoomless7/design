<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Spectre.css</title>
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  <style>body{background:linear-gradient(135deg,#3b82f6 0%, #06b6d4 100%);} .glass{backdrop-filter: blur(10px); background: rgba(255,255,255,.08);} .card{box-shadow:0 25px 60px rgba(0,0,0,.25);} header{color:white; padding:3rem 0;}</style>
</head>
<body>
  <header class="glass">
    <div class="container grid-lg">
      <h1>Politica de Confidențialitate</h1>
      <p>Elegant, modern, bazat pe Spectre.css</p>
    </div>
  </header>
  <main class="container grid-lg">
    <div class="card">
      <div class="card-body">
        <?php echo $content; ?>
      </div>
    </div>
  </main>
  <footer class="glass text-center" style="padding:1rem; color:white; margin-top:2rem;">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
