<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Skeleton</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <style>
    body{background: linear-gradient(135deg,#0ea5e9 0%, #8b5cf6 100%);} .wrapper{max-width: 900px; margin:0 auto;} .card{background:#fff; border-radius: 16px; padding: 2rem; box-shadow: 0 25px 50px rgba(0,0,0,.25);}
    header{color:white; padding:3rem 0;}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Politica de Confidențialitate</h1>
      <p>Skeleton simplu cu estetică premium.</p>
    </div>
  </header>
  <main class="container">
    <div class="card">
      <article>
        <?php echo $content; ?>
      </article>
    </div>
  </main>
  <footer class="container" style="padding:1.5rem 0; color:white; text-align:center;">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
