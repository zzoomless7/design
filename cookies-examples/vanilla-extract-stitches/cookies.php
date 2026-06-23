<?php
// Vanilla Extract / Stitches - static approximation using custom properties
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Vanilla Extract / Stitches</title>
  <style>
    :root { --bg:#fff; --text:#111; --muted:#666; --primary:#0ea5e9; --border:#e5e7eb; }
    @media (prefers-color-scheme: dark) {
      :root { --bg:#0b1020; --text:#e2e8f0; --muted:#94a3b8; --primary:#22d3ee; --border:#1f2937; }
    }
    body { background: var(--bg); color: var(--text); font-family: Inter, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; padding: 24px; }
    .card { background: var(--bg); border: 1px solid var(--border); border-radius: 12px; padding: 20px; max-width: 900px; box-shadow: 0 1px 2px rgba(0,0,0,.06); }
    .muted { color: var(--muted); }
    .btn { display:inline-block; padding: 8px 12px; border-radius: 8px; text-decoration:none; border:1px solid var(--border); color: var(--text); }
    .btn-primary { background: var(--primary); border-color: var(--primary); color: white; }
  </style>
</head>
<body>
  <h1>Politica de Cookies</h1>
  <div class="muted">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>

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
