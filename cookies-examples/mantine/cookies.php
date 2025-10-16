<?php
// Mantine v7 - static CSS approximation via CDN
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Mantine v7</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mantine/core@7.12.2/styles.css" />
  <style>
    body { background: #f8f9fa; color: #212529; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Inter, Helvetica, Arial, sans-serif; padding: 24px; }
    .card { background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,.04); padding: 20px; max-width: 900px; }
    .btn { display:inline-block; padding: 8px 12px; border-radius: 6px; text-decoration:none; }
    .btn-primary { background:#228be6; color:#fff; }
    .btn-light { background:#f1f3f5; color:#212529; }
    .btn-outline { border:1px solid #dee2e6; color:#212529; }
  </style>
</head>
<body>
  <h1>Politica de Cookies</h1>
  <div style="color:#868e96">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>

  <div class="card" style="margin-top:16px;">
    <h2>Ce sunt cookie-urile?</h2>
    <p>Fișiere text stocate pe dispozitiv pentru a reține informații utile.</p>

    <h3>Tipuri</h3>
    <ul>
      <li>Necesare</li>
      <li>Analitice</li>
      <li>Funcționale</li>
      <li>Marketing</li>
    </ul>

    <h3>Gestionare</h3>
    <p>Preferințele pot fi setate în browser.</p>
    <div style="display:flex; gap:8px; margin-top:8px;">
      <a class="btn btn-primary" href="#accept">Accept toate</a>
      <a class="btn btn-light" href="#preferinte">Preferințe</a>
      <a class="btn btn-outline" href="#respinge">Respinge neesențiale</a>
    </div>
  </div>
</body>
</html>
