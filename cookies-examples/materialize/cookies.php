<?php
// Materialize CSS - using CDN
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Materialize</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="grey lighten-5">
  <nav class="white z-depth-0">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo black-text">Politica de Cookies</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><span class="grey-text">Ultima actualizare: <?php echo date('Y-m-d'); ?></span></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container" style="margin-top: 2rem;">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Ce sunt cookie-urile?</span>
        <p>Fișiere text stocate pe dispozitiv pentru funcționalități și analiză.</p>
        <h6 style="margin-top:1rem;">Tipuri</h6>
        <ul class="browser-default">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>
        <h6 style="margin-top:1rem;">Gestionare</h6>
        <p>Puteți controla preferințele în browser.</p>
      </div>
      <div class="card-action">
        <a class="btn deep-purple" href="#accept">Accept toate</a>
        <a class="btn-flat" href="#preferinte">Preferințe</a>
        <a class="btn grey lighten-4 black-text" href="#respinge">Respinge neesențiale</a>
      </div>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
