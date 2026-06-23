<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — MVP.css</title>
  <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css">
  <style>body{background:linear-gradient(135deg,#22c55e 0%, #0ea5e9 100%);} main{max-width: 980px; margin: 0 auto;} header{color:white; padding:3rem 0; text-align:center;} article{background:#fff; padding:2rem; border-radius:16px; box-shadow:0 25px 60px rgba(0,0,0,.3);}</style>
</head>
<body>
  <header>
    <h1>Politica de Confidențialitate</h1>
    <p>MVP.css: frumos din start, fără efort.</p>
  </header>
  <main>
    <article>
      <?php echo $content; ?>
    </article>
    <p style="text-align:center; color:white;">© <?php echo date('Y'); ?> Resedința Budas</p>
  </main>
</body>
</html>
