<?php
require_once __DIR__ . '/../includes/policy_loader.php';
$url = 'https://resedintabudas.ro/legal/politica-de-confidentialitate.php';
$content = get_policy_content($url);
?><!doctype html>
<html lang="ro">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Politica de Confidențialitate — Tachyons</title>
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css">
</head>
<body class="bg-near-white">
  <header class="bg-washed-blue pv5">
    <div class="mw7 center ph3">
      <h1 class="f2 lh-title dark-blue">Politica de Confidențialitate</h1>
      <p class="dark-gray">Tachyons utilitar, layout curat.</p>
    </div>
  </header>
  <main class="mw7 center ph3">
    <section class="bg-white br3 shadow-5 pa4 mv4">
      <article class="lh-copy measure-wide">
        <?php echo $content; ?>
      </article>
    </section>
  </main>
  <footer class="tc gray pv4">© <?php echo date('Y'); ?> Resedința Budas</footer>
</body>
</html>
