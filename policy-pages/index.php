<?php
$pages = [
  'Bootstrap' => 'bootstrap/policy.php',
  'Tailwind' => 'tailwind/policy.php',
  'Bulma' => 'bulma/policy.php',
  'Foundation' => 'foundation/policy.php',
  'Semantic UI' => 'semantic-ui/policy.php',
  'UIkit' => 'uikit/policy.php',
  'Materialize' => 'materialize/policy.php',
  'Pure.css' => 'purecss/policy.php',
  'Milligram' => 'milligram/policy.php',
  'Skeleton' => 'skeleton/policy.php',
  'Tachyons' => 'tachyons/policy.php',
  'Spectre.css' => 'spectre/policy.php',
  'Primer' => 'primer/policy.php',
  'Pico.css' => 'pico/policy.php',
  'Water.css' => 'water/policy.php',
  'MVP.css' => 'mvp/policy.php',
  'Simple.css' => 'simplecss/policy.php',
  'new.css' => 'newcss/policy.php',
  'Sakura.css' => 'sakura/policy.php',
  'Cirrus UI' => 'cirrus/policy.php',
];
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerie — 20 Politica de Confidențialitate</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter','ui-sans-serif','system-ui'] }, colors: { brand: { 500:'#6366f1', 600:'#4f46e5' } } } } }</script>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-cyan-400 via-indigo-500 to-cyan-400">
  <header class="text-white">
    <div class="max-w-6xl mx-auto px-4 py-12">
      <h1 class="text-4xl md:text-5xl font-extrabold">20 Design-uri — Politica de Confidențialitate</h1>
      <p class="mt-3 text-white/80">Fiecare variantă folosește un framework/estetică diferită.</p>
    </div>
  </header>
  <main class="max-w-6xl mx-auto px-4 pb-16">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($pages as $name => $href): ?>
        <a href="<?= htmlspecialchars($href, ENT_QUOTES) ?>" class="group block rounded-2xl bg-white/95 backdrop-blur-xl shadow-2xl p-6 hover:-translate-y-1 hover:shadow-3xl transition transform">
          <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-900 group-hover:text-brand-600"><?= htmlspecialchars($name) ?></h2>
            <svg class="w-6 h-6 text-gray-400 group-hover:text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
          </div>
          <p class="mt-2 text-sm text-gray-600">Vezi varianta cu <strong><?= htmlspecialchars($name) ?></strong>.</p>
        </a>
      <?php endforeach; ?>
    </div>
    <p class="mt-10 text-center text-white/90">© <?= date('Y') ?> Resedința Budas</p>
  </main>
</body>
</html>
