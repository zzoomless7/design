<?php
// UnoCSS Cookie Policy Page (using uno.min.css preflight and attributify runtime)
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • UnoCSS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@unocss/reset/tailwind.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@unocss/runtime"></script>
  <style>
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif; }
  </style>
</head>
<body class="bg-gray-50 text-gray-900">
  <header class="bg-white border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 py-6">
      <h1 class="text-2xl font-semibold">Politica de Cookies</h1>
      <p class="text-sm text-gray-500">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-8">
    <article class="bg-white rounded-lg shadow p-6 space-y-6">
      <section>
        <h2 class="text-xl font-semibold mb-2">Ce sunt cookie-urile?</h2>
        <p>Fișiere text stocate pe dispozitiv care permit funcționalități și analiză.</p>
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
        <p>Puteți modifica preferințele din browser.</p>
        <div class="flex gap-3 mt-3">
          <a class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700" href="#accept">Accept toate</a>
          <a class="px-4 py-2 text-sm font-medium text-blue-700 bg-blue-50 rounded hover:bg-blue-100" href="#preferinte">Preferințe</a>
          <a class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200" href="#respinge">Respinge neesențiale</a>
        </div>
      </section>
    </article>
  </main>
</body>
</html>
