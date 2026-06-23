<?php
// Ant Design - using Ant Design CSS (for static HTML approximation)
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Ant Design</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/antd@5.21.2/dist/reset.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/antd@5.21.2/dist/antd.min.css" />
  <style> body { padding: 24px; } </style>
</head>
<body>
  <div class="ant-typography">
    <h1 class="ant-typography">Politica de Cookies</h1>
    <div class="ant-typography" style="color:#888">Ultima actualizare: <?php echo date('Y-m-d'); ?></div>
  </div>

  <div class="ant-card ant-card-bordered" style="max-width: 900px; margin-top: 16px;">
    <div class="ant-card-body">
      <h2 class="ant-typography">Ce sunt cookie-urile?</h2>
      <p>Fișiere text mici stocate pe dispozitiv pentru a reține informații utile.</p>

      <h3 class="ant-typography">Tipuri</h3>
      <ul>
        <li>Necesare</li>
        <li>Analitice</li>
        <li>Funcționale</li>
        <li>Marketing</li>
      </ul>

      <h3 class="ant-typography">Gestionare</h3>
      <p>Puteți ajusta preferințele din browser.</p>
      <div class="ant-space" style="gap: 8px">
        <a class="ant-btn ant-btn-primary" href="#accept"><span class="ant-btn-icon"></span><span>Accept toate</span></a>
        <a class="ant-btn" href="#preferinte"><span>Preferințe</span></a>
        <a class="ant-btn ant-btn-default" href="#respinge"><span>Respinge neesențiale</span></a>
      </div>
    </div>
  </div>
</body>
</html>
