<?php
// Bootstrap 5 - using CDN
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Bootstrap 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
  <nav class="navbar bg-white border-bottom">
    <div class="container">
      <span class="navbar-brand mb-0 h1">Politica de Cookies</span>
      <small class="text-muted">Ultima actualizare: <?php echo date('Y-m-d'); ?></small>
    </div>
  </nav>

  <main class="container py-4">
    <div class="card shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Ce sunt cookie-urile?</h2>
        <p class="card-text">Fișiere text stocate pe dispozitiv pentru funcționalități și analiză.</p>

        <h3>Tipuri</h3>
        <ul>
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>

        <h3>Gestionare</h3>
        <p>Puteți controla preferințele în browser.</p>
        <div class="d-flex gap-2">
          <a class="btn btn-primary" href="#accept">Accept toate</a>
          <a class="btn btn-outline-secondary" href="#preferinte">Preferințe</a>
          <a class="btn btn-light" href="#respinge">Respinge neesențiale</a>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
