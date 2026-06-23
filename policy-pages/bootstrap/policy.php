<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif; background: linear-gradient(135deg,#0ea5e9 0%, #6366f1 50%, #0ea5e9 100%); }
    .glass { backdrop-filter: blur(12px); background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18); }
    .card { box-shadow: 0 20px 45px rgba(2,6,23,.25); border: none; }
    .prose h1, .prose h2, .prose h3 { margin-top: 1.75rem; font-weight: 700; }
    .prose p { color: #334155; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark glass">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Resedința Budas</a>
  </div>
</nav>
<header class="py-5 text-white">
  <div class="container py-4">
    <h1 class="display-5 fw-bold">Politica de Confidențialitate</h1>
    <p class="lead opacity-75">Transparență, încredere și protecția datelor tale.</p>
  </div>
</header>
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card p-4 p-md-5">
        <article class="prose">
          <?php echo $content; ?>
        </article>
      </div>
    </div>
  </div>
</main>
<footer class="py-4 text-center text-white-50 glass">
  <div class="container">© <?php echo date('Y'); ?> Resedința Budas</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
