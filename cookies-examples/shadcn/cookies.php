<?php
// shadcn/ui (Tailwind + Radix primitives) - static HTML approximation using Tailwind
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Politica de Cookies • shadcn/ui</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-50 text-neutral-900">
  <header class="border-b bg-white">
    <div class="max-w-4xl mx-auto px-4 py-6">
      <h1 class="text-2xl font-semibold tracking-tight">Politica de Cookies</h1>
      <p class="text-sm text-neutral-500">Ultima actualizare: <?php echo date('Y-m-d'); ?></p>
    </div>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-8">
    <article class="bg-white border rounded-lg p-6 shadow-sm space-y-6">
      <section>
        <h2 class="text-xl font-semibold">Ce sunt cookie-urile?</h2>
        <p class="text-neutral-700">Fișiere text ce permit funcții, personalizare și analiză.</p>
      </section>
      <section>
        <h3 class="text-lg font-medium">Tipuri</h3>
        <ul class="list-disc list-inside text-neutral-700">
          <li>Necesare</li>
          <li>Analitice</li>
          <li>Funcționale</li>
          <li>Marketing</li>
        </ul>
      </section>
      <section>
        <h3 class="text-lg font-medium">Gestionare</h3>
        <p class="text-neutral-700">Controlați preferințele din browser.</p>
        <div class="flex gap-3">
          <a class="inline-flex items-center justify-center rounded-md bg-black px-4 py-2 text-sm font-medium text-white hover:bg-black/90" href="#accept">Accept toate</a>
          <a class="inline-flex items-center justify-center rounded-md bg-neutral-100 px-4 py-2 text-sm font-medium hover:bg-neutral-200" href="#preferinte">Preferințe</a>
          <a class="inline-flex items-center justify-center rounded-md border px-4 py-2 text-sm font-medium hover:bg-neutral-50" href="#respinge">Respinge neesențiale</a>
        </div>
      </section>
    </article>
  </main>
</body>
</html>
