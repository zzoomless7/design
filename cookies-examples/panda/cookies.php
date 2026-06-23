<?php
// Panda CSS (preset of CSS-in-JS) - static approximation using CSS variables
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Panda CSS</title>
  <style>
    :root {
      --bg: #0b1020;
      --panel: #0f172a;
      --text: #e2e8f0;
      --muted: #94a3b8;
      --primary: #7c3aed;
    }
    body { background: var(--bg); color: var(--text); font-family: Inter, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; padding: 24px; }
    .card { background: var(--panel); border: 1px solid #1e293b; border-radius: 12px; padding: 20px; max-width: 900px; box-shadow: 0 1px 2px rgba(0,0,0,.3); }
    .muted { color: var(--muted); }
    .btn { display:inline-block; padding: 8px 12px; border-radius: 8px; text-decoration:none; border:1px solid #334155; color: var(--text); }
    .btn-primary { background: var(--primary); border-color: var(--primary); color: white; }
  </style>
</head>
<body>
  <h1>Politica de Cookies</h1>
  <div class="muted">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>

  <div class="card" style="margin-top:16px;">
    <h2>Ce sunt cookie-urile?</h2>
    <p>Fișiere text care susțin funcționalități și analiză.</p>

    <h3>Tipuri</h3>
    <ul>
      <li>Necesare</li>
      <li>Analitice</li>
      <li>Funcționale</li>
      <li>Marketing</li>
    </ul>

    <h3>Gestionare</h3>
    <p>Controlați preferințele în browser.</p>
    <div style="display:flex; gap:8px; margin-top:8px;">
      <a class="btn btn-primary" href="#accept">Accept toate</a>
      <a class="btn" href="#preferinte">Preferințe</a>
      <a class="btn" href="#respinge">Respinge neesențiale</a>
    </div>
  </div>
</body>
</html>
