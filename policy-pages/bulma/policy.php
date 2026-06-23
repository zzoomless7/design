<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Bulma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root { --grad: linear-gradient(135deg,#00d1b2 0%, #485fc7 100%); }
    body { font-family: 'Poppins',sans-serif; background: var(--grad); }
    .glass { background: rgba(255,255,255,.1); backdrop-filter: blur(10px); }
    .box { box-shadow: 0 20px 50px rgba(10,10,10,.25); }
  </style>
</head>
<body>
<section class="hero is-medium is-bold glass">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-white">Politica de Confidențialitate</h1>
      <h2 class="subtitle has-text-white-bis">Claritate legală într-o prezentare premium.</h2>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="box">
      <div class="content is-medium">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
<footer class="footer glass">
  <div class="content has-text-centered has-text-white">© <?php echo date('Y'); ?> Resedința Budas</div>
</footer>
</body>
</html>
