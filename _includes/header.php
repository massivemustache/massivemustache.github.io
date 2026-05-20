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
        </div>
      </header>

      <main id="top">
