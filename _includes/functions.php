<?php
/*
 * Shared helpers + data loading. Included once by header.php.
 */
if (defined('MM_BOOTSTRAPPED')) return;
define('MM_BOOTSTRAPPED', true);
define('MM_ROOT', dirname(__DIR__));

$SITE  = require MM_ROOT . '/_data/site.php';
$GAMES = require MM_ROOT . '/_data/games.php';

require_once __DIR__ . '/icons.php';

/** HTML-escape. */
function e($value): string
{
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Public URL of a game page. */
function game_url(string $slug): string
{
  return '/' . rawurlencode($slug) . '/';
}

/** Thumbnail for an image: uses "<name>-thumb.<ext>" when it exists, otherwise the image itself. */
function thumb(string $src): string
{
  $thumb = preg_replace('/(\.[a-z0-9]+)$/i', '-thumb$1', $src);
  return is_file(MM_ROOT . $thumb) ? $thumb : $src;
}

/** Inline CSS variables for a game's colour theme. */
function game_theme_style(array $game): string
{
  $t = $game['theme'] ?? [];
  $vars = [
    '--accent'    => $t['accent'] ?? '#f7bf55',
    '--accent-2'  => $t['accent_2'] ?? ($t['accent'] ?? '#f7bf55'),
    '--on-accent' => $t['on_accent'] ?? '#15100a',
  ];
  if (!empty($game['backdrop'])) {
    $vars['--backdrop'] = "url('" . $game['backdrop'] . "')";
  }
  $out = '';
  foreach ($vars as $k => $v) {
    $out .= $k . ': ' . $v . '; ';
  }
  return e(trim($out));
}

/** Social icon links (header / footer / home). */
function render_socials(array $socials, string $class = 'social-links'): void
{
  echo '<div class="' . e($class) . '" aria-label="Social links">';
  foreach ($socials as $s) {
    echo '<a class="social-link" href="' . e($s['url']) . '" target="_blank" rel="noreferrer" aria-label="Massive Mustache on ' . e($s['label']) . '" title="' . e($s['label']) . '">'
      . icon($s['icon']) . '</a>';
  }
  echo '</div>';
}

/** Store buttons for a game. Empty url → disabled "coming soon" button. */
function render_store_buttons(array $game): void
{
  foreach ($game['stores'] ?? [] as $store) {
    $icon = icon($store['type'] ?? 'link');
    $label = e($store['label']);
    if (empty($store['url'])) {
      echo '<span class="button button-primary store-button is-pending" aria-disabled="true">' . $icon . $label
        . ' <small>soon</small></span>';
    } else {
      echo '<a class="button button-primary store-button" href="' . e($store['url']) . '" target="_blank" rel="noreferrer">'
        . $icon . $label . '</a>';
    }
  }
}
