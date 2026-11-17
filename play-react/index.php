<?php
/*
 * /play-react/ — one link for socials: sends the visitor to the store of their platform.
 *   Android, Chromebook → Google Play (in the Instagram / Facebook / TikTok in-app browsers the market:// link,
 *                         which opens the Play Store app where an https link would stay in the web view)
 *   iPhone / iPad       → Steam until the App Store link exists (set APP_STORE below)
 *   HarmonyOS NEXT      → the Re:act page (no Google Play there)
 *   Windows, Mac, rest  → Steam
 * Link-preview bots get a page with Re:act's own card (og: tags). iPadOS reports itself as a Mac, so a Mac
 * visitor gets the same page, whose script tells an iPad (touch) apart.
 */
const PACKAGE     = 'games.massivemustache.react';
const GOOGLE_PLAY = 'https://play.google.com/store/apps/details?id=' . PACKAGE;
const PLAY_APP    = 'market://details?id=' . PACKAGE;
const STEAM       = 'https://store.steampowered.com/app/5216560/React/';
const APP_STORE   = '';   // App Store link, once Re:act is there
const GAME_PAGE   = '/react/';
const SITE        = 'https://massivemustache.games';

$ios_target = APP_STORE !== '' ? APP_STORE : STEAM;
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

// The answer depends on the device: never cache it.
header('Cache-Control: no-store, private');
header('X-LiteSpeed-Cache-Control: no-cache');
header('Vary: User-Agent');

function go(string $url): never
{
  header('Location: ' . $url, true, 302);
  exit;
}

// Named previewers and "…bot/1.0"; a bare "bot" would also catch Cubot phones.
$is_bot = (bool) preg_match('/bot\/|crawl|spider|facebookexternalhit|Facebot|Twitterbot|Slackbot|Discordbot|LinkedInBot|TelegramBot|WhatsApp|Embedly|Pinterest|redditbot|Bytespider|SkypeUriPreview|Iframely/i', $ua);

if (!$is_bot) {
  if (preg_match('/Android/i', $ua)) {
    go(preg_match('/Instagram|FBAN|FBAV|FB_IAB|musical_ly|BytedanceWebview|TikTok/i', $ua) ? PLAY_APP : GOOGLE_PLAY);
  }
  if (preg_match('/CrOS/i', $ua)) go(GOOGLE_PLAY);
  if (preg_match('/iPhone|iPad|iPod/i', $ua)) go($ios_target);
  if (preg_match('/OpenHarmony|HarmonyOS/i', $ua)) go(GAME_PAGE);
  if (!preg_match('/Macintosh/i', $ua)) go(STEAM);
}

// A link-preview bot, a Mac or an iPad: a card for the bot, the script picks the store for a person.
$e = fn(string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
$js = fn(string $s): string => json_encode($s, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
$title = 'Re:act – a rhythm game you fly';
$description = 'Every stone, every pane of ice, every turn lands on the beat. Wishlist Re:act on Steam, play it on Android.';
$image = SITE . '/assets/games/react/capsule.jpg';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <title><?= $e($title) ?></title>
    <meta name="description" content="<?= $e($description) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $e(SITE . '/play-react/') ?>" />
    <meta property="og:title" content="<?= $e($title) ?>" />
    <meta property="og:description" content="<?= $e($description) ?>" />
    <meta property="og:image" content="<?= $e($image) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?= $e($image) ?>" />
<?php if (!$is_bot): ?>
    <script>
      location.replace(navigator.maxTouchPoints > 1 ? <?= $js($ios_target) ?> : <?= $js(STEAM) ?>);
    </script>
    <noscript><meta http-equiv="refresh" content="0; url=<?= $e(STEAM) ?>" /></noscript>
<?php endif; ?>
    <style>body { margin: 0; background: #0b0a10; color: #fff6e6; font: 16px system-ui, sans-serif; display: grid; place-items: center; min-height: 100vh; } a { color: #2fd3c0; margin: 0 12px; }</style>
  </head>
  <body>
    <p>
      <a href="<?= $e(STEAM) ?>">Re:act on Steam</a>
      <a href="<?= $e(GOOGLE_PLAY) ?>">Re:act on Google Play</a>
    </p>
  </body>
</html>
