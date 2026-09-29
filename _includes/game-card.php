<?php
/*
 * One game tile (home page grid + "more games" on game pages).
 * Expects: $slug, $g  (from $GAMES), optional $card_heading_level (default 3)
 */
$card_heading_level = $card_heading_level ?? 3;
$primary_store = null;
foreach ($g['stores'] ?? [] as $s) {
  if (!empty($s['url'])) { $primary_store = $s; break; }
}
?>
<article class="game-card status-<?= e($g['status']) ?>" id="<?= e($slug) ?>" style="<?= game_theme_style($g) ?>">
  <a class="game-card-media" href="<?= game_url($slug) ?>" tabindex="-1" aria-hidden="true">
    <img src="<?= e(thumb($g['capsule'])) ?>" alt="" loading="lazy" />
    <?php if (empty($g['capsule_has_title'])): ?>
      <img class="game-card-logo" src="<?= e($g['logo']) ?>" alt="" loading="lazy" />
    <?php endif; ?>
    <span class="status-pill"><?= e($g['status_label']) ?></span>
  </a>
  <div class="game-card-body">
    <p class="game-card-genre"><?= e($g['genre']) ?></p>
    <h<?= $card_heading_level ?> class="game-card-title"><a href="<?= game_url($slug) ?>"><?= e($g['title']) ?></a></h<?= $card_heading_level ?>>
    <p class="game-card-text"><?= e($g['description'][0] ?? $g['tagline']) ?></p>
    <div class="game-card-actions">
      <a class="button button-accent" href="<?= game_url($slug) ?>">Explore the game <?= icon('arrow') ?></a>
      <?php if ($primary_store): ?>
        <a class="button button-ghost" href="<?= e($primary_store['url']) ?>" target="_blank" rel="noreferrer"><?= icon($primary_store['type']) ?> <?= e(str_replace(['Get it on ', 'Wishlist on '], '', $primary_store['label'])) ?></a>
      <?php endif; ?>
    </div>
  </div>
</article>
