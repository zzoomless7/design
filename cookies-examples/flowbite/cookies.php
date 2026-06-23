<?php
// Flowbite (Tailwind-based) Cookie Policy Page
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • Flowbite</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-900">
  <header class="bg-white border-b">
    <div class="max-w-4xl mx-auto px-4 py-6">
      <h1 class="text-2xl font-semibold">Politica de Cookies</h1>
      <p class="text-sm text-gray-500">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-8">
    <article class="bg-white rounded-lg shadow-sm p-6 space-y-6">
      <section>
        <h2 class="text-xl font-semibold mb-2">Ce sunt cookie-urile?</h2>
        <p class="text-gray-700">Cookie-urile sunt fișiere text mici plasate pe dispozitivul dvs. pentru a reține informații. Folosite pentru îmbunătățirea experienței și analiză.</p>
      </section>

      <section>
        <h2 class="text-xl font-semibold mb-2">Tipuri de cookie-uri</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>
      </section>

      <section>
        <h2 class="text-xl font-semibold mb-2">Gestionare</h2>
        <p class="text-gray-700">Puteți controla cookie-urile din setările browserului.</p>
        <div class="flex gap-3 mt-3">
          <a class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700" href="#accept">Accept toate</a>
          <a class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-blue-700 bg-blue-50 rounded hover:bg-blue-100" href="#preferinte">Preferințe</a>
          <a class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200" href="#respinge">Respinge neesențiale</a>
        </div>
      </section>

      <section>
        <h2 class="text-xl font-semibold mb-2">Contact</h2>
        <p class="text-gray-700">Ne puteți scrie la <a class="text-blue-600 hover:underline" href="mailto:privacy@example.com">privacy@example.com</a>.</p>
      </section>
    </article>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.1/flowbite.min.js"></script>
</body>
</html>
