<?php
// NextUI 2 - static approximation using their CSS variables
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • NextUI 2</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@nextui-org/theme@2.2.11/dist/nextui.min.css" />
  <style>
    body { background: var(--nextui-background); color: var(--nextui-foreground); font-family: Inter, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; padding: 24px; }
    .card { background: var(--nextui-content1); border-radius: 12px; border: 1px solid var(--nextui-divider); padding: 20px; max-width: 900px; box-shadow: 0 1px 2px rgba(0,0,0,.04); }
    .btn { display:inline-block; padding: 8px 12px; border-radius: 8px; text-decoration:none; border:1px solid var(--nextui-divider); color: var(--nextui-foreground); }
    .btn-primary { background: var(--nextui-primary); color: var(--nextui-primary-foreground); border-color: var(--nextui-primary); }
  </style>
</head>
<body>
  <h1>Politica de Cookies</h1>
  <div style="opacity: .7;">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>

  <div class="card" style="margin-top:16px;">
    <h2>Ce sunt cookie-urile?</h2>
    <p>Fișiere text stocate pe dispozitiv pentru funcționalități și analiză.</p>

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
      <a class="btn" href="#preferinte">Preferințe</a>
      <a class="btn" href="#respinge">Respinge neesențiale</a>
    </div>
  </div>
</body>
</html>
