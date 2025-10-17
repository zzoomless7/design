<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter','ui-sans-serif','system-ui'] }, colors: { brand: { 500: '#6366f1', 600:'#4f46e5' } } } } }</script>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-cyan-400 via-indigo-500 to-cyan-400 min-h-screen">
  <div class="backdrop-blur-md/2">
    <nav class="w-full">
      <div class="max-w-5xl mx-auto px-4 py-4">
        <div class="text-white font-semibold text-lg">Resedința Budas</div>
      </div>
    </nav>
    <header class="text-white">
      <div class="max-w-5xl mx-auto px-4 py-12">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Politica de Confidențialitate</h1>
        <p class="mt-3 text-white/80">Actualizată pentru standarde moderne de protecție a datelor.</p>
      </div>
    </header>
    <main class="max-w-5xl mx-auto px-4 pb-16">
      <div class="bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl p-6 md:p-10">
        <article class="prose max-w-none prose-indigo">
          <?php echo $content; ?>
        </article>
      </div>
    </main>
    <footer class="text-center text-white/80 py-6">© <?php echo date('Y'); ?> Resedința Budas</footer>
  </div>
</body>
</html>
