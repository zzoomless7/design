<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Foundation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css">
  <style>
    body{background: radial-gradient(1200px 600px at 10% 10%, #0ea5e930, transparent), linear-gradient(135deg,#3b82f6 0%,#0ea5e9 100%);} 
    .card{box-shadow: 0 20px 50px rgba(0,0,0,.25);}
    .glass{backdrop-filter: blur(12px); background: rgba(255,255,255,.1);}
  </style>
</head>
<body>
  <div class="top-bar glass">
    <div class="top-bar-left"><strong class="text-white">Resedința Budas</strong></div>
  </div>
  <header class="grid-container text-white" style="padding:3rem 0;">
    <h1 class="h2" style="color:white;">Politica de Confidențialitate</h1>
    <p style="color:rgba(255,255,255,.85);">Concepută cu Foundation pentru claritate și eleganță.</p>
  </header>
  <main class="grid-container">
    <div class="grid-x grid-margin-x align-center">
      <div class="cell large-10">
        <div class="card">
          <div class="card-section">
            <div class="callout secondary" style="border:none;background:transparent;">
              <?php echo $content; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="grid-container glass" style="padding:1rem; margin-top:2rem; color:white;">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
