<?php
/*
 * Shared helpers + data loading. Included once by header.php.
 */
if (defined('MM_BOOTSTRAPPED')) return;
define('MM_BOOTSTRAPPED', true);
define('MM_ROOT', dirname(__DIR__));

$SITE  = require MM_ROOT . '/_data/site.php';
$GAMES = require MM_ROOT . '/_data/games.php';
$UI    = require MM_ROOT . '/_data/ui.php';
$LANG  = 'en';   // page language; a page that has Polish calls select_lang() before the header

require_once __DIR__ . '/icons.php';

/** HTML-escape. */
function e($value): string
{
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Picks the page language from ?lang= among the ones the page supports (default English). */
function select_lang(array $supported): string
{
  global $LANG;
  $wanted = $_GET['lang'] ?? 'en';
  $LANG = in_array($wanted, $supported, true) ? $wanted : 'en';
  return $LANG;
}

/** Interface string in the page language (_data/ui.php), English when missing. */
function ui(string $key): string
{
  global $UI, $LANG;
  return $UI[$LANG][$key] ?? $UI['en'][$key] ?? $key;
}

/** Interface string with %s filled in. */
function ui_f(string $key, string ...$args): string
{
  return sprintf(ui($key), ...$args);
}

/** URL of a page in a language: English is the bare path, others add ?lang=. */
function lang_url(string $path, string $lang): string
{
  return $lang === 'en' ? $path : $path . '?lang=' . rawurlencode($lang);
}

/** Languages of a game page: English plus every key of its 'i18n'. */
function game_langs(array $game): array
{
  return array_merge(['en'], array_keys($game['i18n'] ?? []));
}

/** A game's data in the page language: its 'i18n' entry replaces the English fields it lists. */
function localize_game(array $game): array
{
  global $LANG;
  return array_replace($game, $game['i18n'][$LANG] ?? []);
}

/** Public URL of a game page, in the page language when the game has it. */
function game_url(string $slug): string
{
  global $GAMES, $LANG;
  $path = '/' . rawurlencode($slug) . '/';
  return isset($GAMES[$slug]['i18n'][$LANG]) ? lang_url($path, $LANG) : $path;
}

/** EN / PL switch linking the same page in each language. */
function render_lang_toggle(string $path, array $langs): void
{
  global $LANG;
  if (count($langs) < 2) return;
  echo '<div class="lang-toggle" aria-label="' . e(ui('language')) . '">';
  foreach ($langs as $l) {
    $active = $l === $LANG;
    echo '<a href="' . e(lang_url($path, $l)) . '" hreflang="' . e($l) . '"' . ($active ? ' class="is-active" aria-current="true"' : '') . '>'
      . e(strtoupper($l)) . '</a>';
  }
  echo '</div>';
}

/** A game's legal pages as [label, href], in the page language when the page exists in it. */
function game_legal_links(array $game): array
{
  global $LANG;
  $labels = ['privacy' => 'privacy_policy', 'terms' => 'terms', 'account-deletion' => 'account_deletion'];
  $lang = isset($game['i18n'][$LANG]) ? $LANG : 'en';
  $links = [];
  foreach ($game['legal'] ?? [] as $page) {
    $links[] = [ui($labels[$page['kind']] ?? $page['kind']), lang_url($page['url'], $lang)];
  }
  return $links;
}

/** Store name for short buttons (game cards). */
function store_name(array $store): string
{
  $names = ['steam' => 'Steam', 'google-play' => 'Google Play', 'app-store' => 'App Store', 'itch' => 'itch.io'];
  return $names[$store['type'] ?? ''] ?? $store['label'];
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
  global $SITE;
  echo '<div class="' . e($class) . '" aria-label="' . e(ui('social_links')) . '">';
  foreach ($socials as $s) {
    echo '<a class="social-link" href="' . e($s['url']) . '" target="_blank" rel="noreferrer" aria-label="' . e(ui_f('on_social', $SITE['name'], $s['label'])) . '" title="' . e($s['label']) . '">'
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
        . ' <small>' . e(ui('soon')) . '</small></span>';
    } else {
      echo '<a class="button button-primary store-button" href="' . e($store['url']) . '" target="_blank" rel="noreferrer">'
        . $icon . $label . '</a>';
    }
  }
}
