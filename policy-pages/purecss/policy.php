<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Pure.css</title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css">
  <style>
    body{background: linear-gradient(160deg,#14b8a6 0%, #6366f1 100%);} .glass{backdrop-filter: blur(8px); background: rgba(255,255,255,.1);} .card{background:#fff; border-radius:16px; padding:2rem; box-shadow:0 20px 50px rgba(0,0,0,.25);} .header{color:white; padding:3rem 0;}
  </style>
</head>
<body>
  <div class="glass">
    <div class="pure-g">
      <div class="pure-u-1">
        <div class="header">
          <div class="pure-u-1 pure-u-lg-2-3" style="margin:0 auto;">
            <h1>Politica de Confidențialitate</h1>
            <p>Prezentare minimală pe framework-ul Pure.css</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pure-g" style="margin-top:-2rem;">
    <div class="pure-u-1 pure-u-lg-5-6" style="margin:0 auto;">
      <div class="card">
        <article>
          <?php echo $content; ?>
        </article>
      </div>
    </div>
  </div>
  <div class="glass" style="margin-top:2rem; text-align:center; color:white; padding:1rem;">© <?php echo date('Y'); ?> Resedința Budas</div>
</body>
</html>
