<?php
// Spectre.css - using CDN
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Spectre.css</title>
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
</head>
<body>
  <header class="navbar">
    <section class="navbar-section">
      <a class="navbar-brand mr-2" href="#">Politica de Cookies</a>
    </section>
    <section class="navbar-section">
      <span class="label">Ultima actualizare: <?php echo date('Y-m-d'); ?></span>
    </section>
  </header>

  <main class="container grid-lg">
    <div class="columns">
      <div class="column col-8 col-mx-auto">
        <div class="card">
          <div class="card-header">
            <div class="card-title h5">Ce sunt cookie-urile?</div>
          </div>
          <div class="card-body">
            Fișiere text stocate pe dispozitiv pentru funcționalități și analiză.
            <h6 class="mt-2">Tipuri</h6>
            <ul>
              <li>Necesare</li>
              <li>Analitice</li>
              <li>Funcționale</li>
              <li>Marketing</li>
            </ul>
            <h6>Gestionare</h6>
            <p>Puteți controla preferințele în browser.</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="#accept">Accept toate</a>
            <a class="btn" href="#preferinte">Preferințe</a>
            <a class="btn btn-link" href="#respinge">Respinge neesențiale</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
