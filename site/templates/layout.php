<?php
/**
 * The frame of every page: $title, $description, $page (home, privacy, support, not-found),
 * $content (the page's own HTML), $index (false: noindex).
 */
$index ??= true;
$url = $origin.$path;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="referrer" content="no-referrer">
<?php if (!$index) { ?>
<meta name="robots" content="noindex">
<?php } ?>
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
<?php if ($index) { ?>
<link rel="canonical" href="<?= htmlspecialchars($url) ?>">
<?php } ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($description) ?>">
<?php if ($index) { ?>
<meta property="og:url" content="<?= htmlspecialchars($url) ?>">
<?php } ?>
<meta property="og:image" content="<?= htmlspecialchars($origin) ?>/images/mac-session.jpg">
<link rel="icon" type="image/png" href="/images/icon.png">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="stylesheet" href="/css/site.css">
<link rel="stylesheet" href="/css/credits.css">
</head>
<body class="page-<?= $page ?>">
<header class="bar">
  <a class="brand" href="/"><img src="/images/icon.png" alt="" width="28" height="28"> DevShare</a>
  <nav>
    <a href="/#how">How it works</a>
    <a href="/support"<?= 'support' === $page ? ' aria-current="page"' : '' ?>>Support</a>
    <a href="/privacy"<?= 'privacy' === $page ? ' aria-current="page"' : '' ?>>Privacy</a>
  </nav>
</header>
<?= $content ?>
<footer class="foot">
  <nav><a href="/privacy">Privacy</a> · <a href="/privacy#rights">GDPR</a> · <a href="/support">Support</a> · <a href="https://github.com/glitchr-studio/devshare-join/tree/main/demo">Demo projects</a></nav>
<?php require __DIR__.'/credits.php'; ?>
</footer>
</body>
</html>
