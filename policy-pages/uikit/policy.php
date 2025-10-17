<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro" uk-height-viewport>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — UIkit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.3/dist/css/uikit.min.css">
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.3/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.3/dist/js/uikit-icons.min.js"></script>
  <style>
    body{background: linear-gradient(135deg,#06b6d4 0%, #3b82f6 50%, #8b5cf6 100%);} .glass{backdrop-filter: blur(12px); background: rgba(255,255,255,.08);} .uk-card{box-shadow: 0 25px 50px rgba(0,0,0,.25);} 
  </style>
</head>
<body>
  <nav class="uk-navbar-container glass" uk-navbar>
    <div class="uk-navbar-left">
      <a href="#" class="uk-navbar-item uk-logo">Resedința Budas</a>
    </div>
  </nav>
  <header class="uk-section uk-section-large uk-light">
    <div class="uk-container">
      <h1 class="uk-heading-medium">Politica de Confidențialitate</h1>
      <p class="uk-text-lead">UIkit premium layout cu accent pe lizibilitate.</p>
    </div>
  </header>
  <main class="uk-section">
    <div class="uk-container uk-container-large">
      <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
        <article class="uk-article">
          <?php echo $content; ?>
        </article>
      </div>
    </div>
  </main>
  <footer class="uk-section glass uk-light uk-text-center">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
