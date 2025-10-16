<?php
// Windi CSS Cookie Policy Page (using CDN preset similar to Tailwind)
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Windi CSS</title>
  <script src="https://cdn.jsdelivr.net/npm/windicss-runtime-dom@0.1.5/dist/index.iife.js"></script>
  <style>
    /* minimal fallback in case runtime fails */
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif; background:#f8fafc; color:#0f172a; }
  </style>
</head>
<body class="bg-slate-50 text-slate-900">
  <header class="bg-white border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 py-6">
      <h1 class="text-2xl font-semibold">Politica de Cookies</h1>
      <p class="text-sm text-slate-500">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-8">
    <article class="bg-white rounded-lg shadow p-6 space-y-6">
      <section>
        <h2 class="text-xl font-semibold mb-2">Ce sunt cookie-urile?</h2>
        <p>Fișiere mici text care îmbunătățesc experiența de navigare și permit analiză.</p>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-2">Tipuri de cookie-uri</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-2">Gestionare</h2>
        <p>Puteți controla cookie-urile din setările browserului.</p>
        <div class="flex gap-3 mt-3">
          <a class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700" href="#accept">Accept toate</a>
          <a class="px-4 py-2 text-sm font-medium text-blue-700 bg-blue-50 rounded hover:bg-blue-100" href="#preferinte">Preferințe</a>
          <a class="px-4 py-2 text-sm font-medium text-slate-700 bg-slate-100 rounded hover:bg-slate-200" href="#respinge">Respinge neesențiale</a>
        </div>
      </section>
    </article>
  </main>
</body>
</html>
