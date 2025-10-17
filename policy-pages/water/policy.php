<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Water.css</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <style>body{background:linear-gradient(135deg,#06b6d4 0%, #3b82f6 100%);} main{max-width: 900px; margin: 0 auto;} .card{background:#fff; border-radius:16px; padding:2rem; box-shadow:0 25px 60px rgba(0,0,0,.3);} header{color:white; padding:3rem 0; text-align:center;}</style>
</head>
<body>
  <header>
    <h1>Politica de Confidențialitate</h1>
    <p>Water.css — fără clase, stil fluid premium.</p>
  </header>
  <main>
    <section class="card">
      <?php echo $content; ?>
    </section>
    <p style="text-align:center; color:white;">© <?php echo date('Y'); ?> Resedința Budas</p>
  </main>
</body>
</html>
