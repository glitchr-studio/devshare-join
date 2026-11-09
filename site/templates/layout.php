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
<link rel="stylesheet" href="/flow/css/flow.css">
<link rel="stylesheet" href="/css/site.css">
<link rel="stylesheet" href="/css/credits.css">
</head>
<body class="page-<?= $page ?>">
<div id="page" data-layout="<?= $page ?>">
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
  <nav class="foot-links">
    <a href="/privacy"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l7 3v5.5c0 4.2-2.9 7.8-7 9.5-4.1-1.7-7-5.3-7-9.5V6z"/></svg>Privacy</a><span class="sep" aria-hidden="true">・</span>
    <a href="/privacy#rights"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="14" rx="2"/><circle cx="9.5" cy="11" r="2"/><path d="M6.5 16c.5-1.6 1.6-2.4 3-2.4s2.5.8 3 2.4M14.5 10h3M14.5 13h3"/></svg>GDPR</a><span class="sep" aria-hidden="true">・</span>
    <a href="/support"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><path d="M9.6 9.5a2.5 2.5 0 1 1 3.4 2.3c-.6.3-1 .8-1 1.5v.4"/><circle cx="12" cy="16.6" r=".6" class="fill"/></svg>Support</a><span class="sep" aria-hidden="true">・</span>
    <a href="https://github.com/glitchr-studio/devshare-join/tree/main/demo"><svg viewBox="0 0 16 16" aria-hidden="true" class="mark"><path d="M8 0C3.58 0 0 3.58 0 8a8 8 0 0 0 5.47 7.59c.4.07.55-.17.55-.38v-1.34c-2.23.48-2.7-1.07-2.7-1.07-.36-.92-.89-1.17-.89-1.17-.73-.5.06-.49.06-.49.8.06 1.23.83 1.23.83.72 1.23 1.88.87 2.34.67.07-.52.28-.87.5-1.07-1.78-.2-3.65-.89-3.65-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.13 0 0 .67-.21 2.2.82a7.6 7.6 0 0 1 4 0c1.53-1.04 2.2-.82 2.2-.82.44 1.11.16 1.93.08 2.13.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48v2.2c0 .21.15.46.55.38A8 8 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>Demo projects</a>
  </nav>
<?php require __DIR__.'/credits.php'; ?>
</footer>
</div>
<div id="loader"></div>
<script src="/vendor/jquery.min.js"></script>
<script src="/flow/js/core.js"></script>
<script src="/flow/js/transparent.js"></script>
<script src="/flow/js/sticky.js"></script>
<script src="/js/site.js"></script>
</body>
</html>
