<?php
$page_title = $page_title ?? 'Massive Mustache';
$page_description = $page_description ?? 'Massive Mustache - Indie developer passionate about digital and board games.';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="referrer" content="strict-origin-when-cross-origin" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon_16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon_32.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/favicon_180.png" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <script src="/assets/js/main.js" defer></script>
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
  </head>
  <body>
    <div class="page">
      <header class="topbar">
        <div class="shell nav" aria-label="Main navigation">
          <nav class="nav-links">
            <a href="/#brightglade">BrightGlade Tales</a>
            <a href="/#contact">Contact</a>
          </nav>
          <div class="social-links" aria-label="Social links">
            <a class="social-link" href="https://x.com/MassiveMGames" target="_blank" rel="noreferrer" aria-label="Massive Mustache on X">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231Zm-1.161 17.52h1.833L7.084 4.126H5.117l11.966 15.644Z"/></svg>
            </a>
            <a class="social-link" href="https://www.youtube.com/@MassiveMustacheGames" target="_blank" rel="noreferrer" aria-label="Massive Mustache on YouTube">
              <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814ZM9.545 15.568V8.432L15.818 12l-6.273 3.568Z"/></svg>
            </a>
          </div>
        </div>
      </header>

      <main id="top">
