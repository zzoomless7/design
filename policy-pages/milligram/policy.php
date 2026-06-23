<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Milligram</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
  <style>
    body{background: radial-gradient(1200px 600px at 20% 0%, rgba(99,102,241,.25), transparent), linear-gradient(135deg,#0ea5e9 0%, #22c55e 100%);} .container{max-width: 1000px;} .card{background:#fff; border-radius: 16px; padding: 2.5rem; box-shadow: 0 25px 50px rgba(2,6,23,.3);} .hero{color:white; padding:3rem 0;}
  </style>
</head>
<body>
  <section class="hero">
    <div class="container">
      <h1>Politica de Confidențialitate</h1>
      <p>Milligram modern, focus pe tipografie.</p>
    </div>
  </section>
  <main class="container">
    <div class="card">
      <article>
        <?php echo $content; ?>
      </article>
    </div>
  </main>
  <footer class="container" style="padding:2rem 0; color:white; text-align:center;">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
