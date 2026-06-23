<?php
// Bulma Cookie Policy Page
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Bulma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" integrity="sha256-fS3lr7fA9k9iQpZ1nMskl0k3S3t3XNK7ZJ3Qei5E1a8=" crossorigin="anonymous">
</head>
<body>
  <section class="hero is-primary">
    <div class="hero-body">
      <p class="title">Politica de Cookies</p>
      <p class="subtitle">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="content">
        <h2>Ce sunt cookie-urile?</h2>
        <p>Cookie-urile sunt fișiere text stocate pe dispozitiv pentru a îmbunătăți experiența de navigare.</p>

        <h2>Tipuri de cookie-uri</h2>
        <ul>
          <li><strong>Necesare:</strong> asigură funcții de bază.</li>
          <li><strong>Analitice:</strong> ne ajută să înțelegem utilizarea site-ului.</li>
          <li><strong>Funcționale:</strong> salvează preferințe.</li>
          <li><strong>Marketing:</strong> publicitate personalizată.</li>
        </ul>

        <h2>Cum folosim cookie-urile</h2>
        <p>Le utilizăm pentru autentificare, analize și personalizare.</p>

        <h2>Gestionare</h2>
        <p>Puteți configura browserul să accepte sau să respingă cookie-uri. Dezactivarea anumitor cookie-uri poate afecta funcționalitatea.</p>
        <div class="buttons">
          <a class="button is-success" href="#accept">Accept toate</a>
          <a class="button is-link" href="#preferinte">Preferințe</a>
          <a class="button is-danger is-light" href="#respinge">Respinge neesențiale</a>
        </div>

        <h2>Contact</h2>
        <p>Scrieți-ne la <a href="mailto:privacy@example.com">privacy@example.com</a>.</p>
      </div>
    </div>
  </section>
</body>
</html>
