<?php
// Radix UI primitives - use their colors and basic styles via CDN reset
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Radix UI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@radix-ui/colors@3.0.0/sage.css" />
  <style>
    body { font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Inter, Helvetica, Arial, sans-serif; background: var(--sage-1); color: var(--sage-12); padding: 24px; }
    .card { background: white; border: 1px solid var(--sage-6); border-radius: 8px; box-shadow: 0 1px 2px rgba(0,0,0,.05); padding: 20px; max-width: 900px; }
    .btn { display:inline-block; padding: 8px 12px; border-radius: 6px; text-decoration:none; border:1px solid var(--sage-6); color: var(--sage-12); }
    .btn-primary { background: var(--sage-12); color: white; border-color: var(--sage-12); }
  </style>
</head>
<body>
  <h1>Politica de Cookies</h1>
  <div style="color: var(--sage-11)">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>

  <div class="card" style="margin-top:16px;">
    <h2>Ce sunt cookie-urile?</h2>
    <p>Fișiere text care ajută la funcționare și analiză.</p>

    <h3>Tipuri</h3>
    <ul>
      <li>Necesare</li>
      <li>Analitice</li>
      <li>Funcționale</li>
      <li>Marketing</li>
    </ul>

    <h3>Gestionare</h3>
    <p>Puteți gestiona cookie-urile din browser.</p>
    <div style="display:flex; gap:8px; margin-top:8px;">
      <a class="btn btn-primary" href="#accept">Accept toate</a>
      <a class="btn" href="#preferinte">Preferințe</a>
      <a class="btn" href="#respinge">Respinge neesențiale</a>
    </div>
  </div>
</body>
</html>
