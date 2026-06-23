<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Materialize</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    body{background: linear-gradient(135deg,#ef4444 0%, #f59e0b 50%, #10b981 100%);} nav, footer{backdrop-filter: blur(10px); background: rgba(0,0,0,.3);} .card{border-radius:16px; box-shadow: 0 20px 60px rgba(0,0,0,.3);} 
  </style>
</head>
<body>
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Resedința Budas</a>
    </div>
  </nav>
  <div class="section">
    <div class="container">
      <h1 class="white-text">Politica de Confidențialitate</h1>
      <p class="white-text text-lighten-2">Construită în Materialize, stil modern și aerisit.</p>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Informații</span>
        <div>
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>
  <footer class="page-footer transparent">
    <div class="footer-copyright">
      <div class="container">© <?php echo date('Y'); ?> Resedința Budas</div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
