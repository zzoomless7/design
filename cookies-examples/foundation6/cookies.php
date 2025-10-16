<?php
// Foundation 6 Cookie Policy Page
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Foundation 6</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" integrity="sha256-fkzS4C5iL1dNhqXr8BJu7nco2vGg/vTp94agq+PiWfQ=" crossorigin="anonymous">
  <style>
    .cookie-section { margin-bottom: 2rem; }
    .cookie-meta { color: #666; font-size: 0.9rem; }
  </style>
</head>
<body>
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">Politica de Cookies</li>
      </ul>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell large-10 large-offset-1">
        <div class="callout primary">
          <h1 class="h3">Politica privind modulele cookie</h1>
          <p class="cookie-meta">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
        </div>

        <div class="cookie-section">
          <h2 class="h4">Ce sunt cookie-urile?</h2>
          <p>Cookie-urile sunt fișiere text mici stocate pe dispozitivul dvs. atunci când vizitați un site web. Ele ne ajută să oferim o experiență mai bună, să analizăm traficul și să personalizăm conținutul.</p>
        </div>

        <div class="cookie-section">
          <h2 class="h4">Tipuri de cookie-uri</h2>
          <ul>
            <li>Necesare – esențiale pentru funcționarea site-ului.</li>
            <li>Analitice – ne ajută să înțelegem modul de utilizare a site-ului.</li>
            <li>Funcționale – rețin preferințele dvs.</li>
            <li>Marketing – utilizate pentru publicitate personalizată.</li>
          </ul>
        </div>

        <div class="cookie-section">
          <h2 class="h4">Cum folosim cookie-urile</h2>
          <p>Folosim cookie-uri pentru autentificare, reținerea preferințelor, măsurarea performanței și îmbunătățirea conținutului.</p>
        </div>

        <div class="cookie-section">
          <h2 class="h4">Gestionarea cookie-urilor</h2>
          <p>Puteți controla și/sau șterge cookie-urile din setările browserului. Rețineți că dezactivarea cookie-urilor esențiale poate afecta funcționarea site-ului.</p>
          <div class="button-group">
            <a class="button success" href="#accept">Accept toate</a>
            <a class="button warning" href="#preferinte">Preferințe</a>
            <a class="button alert" href="#respinge">Respinge neesențiale</a>
          </div>
        </div>

        <div class="callout secondary">
          <h2 class="h5">Contact</h2>
          <p>Pentru întrebări, ne puteți scrie la <a href="mailto:privacy@example.com">privacy@example.com</a>.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
