<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$page_title  = $page_title  ?? SITE_NAME;
$page_desc   = $page_desc   ?? 'FacadeFields is a family-run working farm supplying fresh, seasonally grown produce and farm services to the local community.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= h($page_title) ?> | <?= h(SITE_NAME) ?></title>
<meta name="description" content="<?= h($page_desc) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a href="#main" class="skip-link">Skip to content</a>

<header class="site-header">
  <div class="container">
    <a href="index.php" class="logo">Maturas<span>Sas</span></a>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="mainNav">
      <span></span><span></span><span></span>
    </button>

    <nav class="main-nav" id="mainNav">
      <ul>
        <?php foreach ($GLOBALS['nav_links'] as $file => $label): ?>
          <li><a href="<?= h($file) ?>" class="<?= trim(nav_active($file)) ?>"><?= h($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>

<main id="main">
