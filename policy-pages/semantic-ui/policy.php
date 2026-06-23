<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Semantic UI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
  <style>
    body{background: linear-gradient(135deg,#22c55e 0%, #06b6d4 100%);} .glass{backdrop-filter: blur(10px); background: rgba(255,255,255,.08);} .ui.segment{box-shadow: 0 20px 45px rgba(0,0,0,.25)!important;}
  </style>
</head>
<body>
  <div class="ui menu inverted glass">
    <div class="ui container">
      <a class="header item">Resedința Budas</a>
    </div>
  </div>
  <div class="ui vertical segment" style="color:white;">
    <div class="ui container" style="padding:3rem 0;">
      <h1 class="ui inverted header">Politica de Confidențialitate</h1>
      <p class="ui inverted">Prezentare premium în Semantic UI.</p>
    </div>
  </div>
  <div class="ui container" style="margin-bottom:3rem;">
    <div class="ui raised very padded segment">
      <div class="ui content">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
  <div class="ui inverted vertical footer segment glass">
    <div class="ui center aligned container">© <?php echo date('Y'); ?> Resedința Budas</div>
  </div>
</body>
</html>
