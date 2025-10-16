<?php
// DaisyUI 4 (Tailwind-based) Cookie Policy Page
?><!doctype html>
<html lang="ro" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • DaisyUI 4</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-base-200">
  <div class="navbar bg-base-100 shadow-sm">
    <div class="container mx-auto px-4">
      <a class="btn btn-ghost normal-case text-xl">Politica de Cookies</a>
      <span class="ml-auto opacity-70 text-sm">Ultima actualizare: <?php echo date('Y-m-d'); ?></span>
    </div>
  </div>

  <main class="container mx-auto px-4 py-8">
    <div class="card bg-base-100 shadow-md">
      <div class="card-body space-y-4">
        <h2 class="card-title">Ce sunt cookie-urile?</h2>
        <p>Cookie-urile sunt fișiere text care ajută la furnizarea de funcționalități și analiză.</p>

        <h3 class="text-lg font-semibold">Tipuri de cookie-uri</h3>
        <ul class="list-disc list-inside">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>

        <h3 class="text-lg font-semibold">Gestionare</h3>
        <p>Puteți configura preferințele direct din browser.</p>

        <div class="card-actions justify-end">
          <a class="btn btn-primary" href="#accept">Accept toate</a>
          <a class="btn" href="#preferinte">Preferințe</a>
          <a class="btn btn-ghost" href="#respinge">Respinge neesențiale</a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
