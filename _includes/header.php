<?php
require_once __DIR__ . '/functions.php';

$page_title       = $page_title ?? $SITE['name'];
$page_description = $page_description ?? $SITE['description'];
$html_lang        = $html_lang ?? 'en';
$body_class       = $body_class ?? '';
$body_style       = $body_style ?? '';
$og_image         = $og_image ?? '/assets/big_logo.png';
$current_game     = $current_game ?? null;
?><!doctype html>
<html lang="<?= e($html_lang) ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= e($page_description) ?>" />
    <meta name="referrer" content="strict-origin-when-cross-origin" />
    <meta property="og:title" content="<?= e($page_title) ?>" />
    <meta property="og:description" content="<?= e($page_description) ?>" />
    <meta property="og:image" content="<?= e($og_image) ?>" />
    <meta name="theme-color" content="#0b0a10" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon_16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon_32.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/favicon_180.png" />
    <link rel="stylesheet" href="/assets/css/styles.css?v=<?= @filemtime(MM_ROOT . '/assets/css/styles.css') ?: '1' ?>" />
    <script src="/assets/js/main.js?v=<?= @filemtime(MM_ROOT . '/assets/js/main.js') ?: '1' ?>" defer></script>
    <title><?= e($page_title) ?></title>
  </head>
  <body class="<?= e($body_class) ?>"<?= $body_style !== '' ? ' style="' . $body_style . '"' : '' ?>>
    <div class="page">
      <header class="topbar">
        <div class="shell nav">
          <a class="nav-brand" href="/" aria-label="<?= e($SITE['name']) ?> home">
            <img src="/assets/big_logo_transparent.png" alt="" width="44" height="44" />
            <span><?= e($SITE['name']) ?></span>
          </a>
          <nav class="nav-links" aria-label="Main navigation">
            <?php foreach ($GAMES as $nav_slug => $nav_g): ?>
              <a href="<?= game_url($nav_slug) ?>"<?= $current_game === $nav_slug ? ' aria-current="page"' : '' ?>><?= e($nav_g['short_title'] ?? $nav_g['title']) ?></a>
            <?php endforeach; ?>
            <a href="/#contact">Contact</a>
          </nav>
          <?php render_socials($SITE['socials'], 'social-links nav-socials'); ?>
        </div>
      </header>

      <main id="top">
