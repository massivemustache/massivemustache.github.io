<?php
/*
 * Generic game page. Used by /<slug>/index.php:
 *   <?php $game_slug = 'gangsofnightglade';
 *   include __DIR__ . '/../_includes/game-page.php';
 * All content comes from _data/games.php.
 */
require_once __DIR__ . '/functions.php';

if (empty($game_slug) || !isset($GAMES[$game_slug])) {
  http_response_code(404);
  exit('Game not found');
}
$g = $GAMES[$game_slug];

$page_title       = $g['title'] . ' | ' . $SITE['name'];
$page_description = $g['title'] . ' – ' . rtrim($g['tagline'], '.') . '. ' . ($g['description'][0] ?? '');
$body_class       = 'game-page game-' . $game_slug;
$body_style       = game_theme_style($g);
$og_image         = $g['capsule'];
$current_game     = $game_slug;

$hero_image = !empty($g['capsule_has_title']) ? $g['capsule'] : ($g['screenshots'][1]['src'] ?? $g['capsule']);

include __DIR__ . '/header.php';
?>
        <section class="hero game-hero" aria-labelledby="game-title">
          <div class="shell hero-content">
            <div class="identity">
              <img class="game-logo" src="<?= e($g['logo']) ?>" alt="<?= e($g['title']) ?>" />
              <div class="game-meta">
                <span class="status-pill"><?= e($g['status_label']) ?></span>
                <span><?= e($g['genre']) ?></span>
              </div>
              <h1 id="game-title" class="game-tagline"><?= e($g['tagline']) ?></h1>
              <?php foreach ($g['description'] as $p): ?>
                <p class="game-copy"><?= e($p) ?></p>
              <?php endforeach; ?>
              <div class="actions">
                <?php render_store_buttons($g); ?>
                <?php if (!empty($g['press_kit'])): ?>
                  <a class="button button-secondary" href="<?= e($g['press_kit']) ?>">Press kit</a>
                <?php endif; ?>
              </div>
            </div>

            <div class="hero-preview">
              <div class="preview-frame">
                <img src="<?= e($hero_image) ?>" alt="<?= e($g['title']) ?> key art" />
              </div>
            </div>
          </div>
        </section>

        <section class="game-section" aria-labelledby="features-title">
          <div class="shell">
            <p class="section-kicker">Features</p>
            <h2 id="features-title" class="visually-hidden">Features</h2>
            <ul class="feature-list" aria-label="<?= e($g['title']) ?> features">
              <?php foreach ($g['features'] as $f): ?>
                <li><?= e($f) ?></li>
              <?php endforeach; ?>
            </ul>

            <?php if (!empty($g['cards'])): ?>
              <div class="cards-showcase" aria-labelledby="cards-title">
                <div class="section-head">
                  <div>
                    <p class="section-kicker">Cards</p>
                    <h2 id="cards-title"><?= e($g['cards_title'] ?? 'The cards.') ?></h2>
                  </div>
                </div>
                <div class="card-fan">
                  <?php foreach ($g['cards'] as $i => $card): ?>
                    <img src="<?= e($card) ?>" alt="" loading="lazy" style="--i: <?= $i ?>; --n: <?= count($g['cards']) ?>;" />
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php if (!empty($g['videos'])): ?>
              <div class="videos" aria-labelledby="videos-title">
                <div class="section-head">
                  <div>
                    <p class="section-kicker">Videos</p>
                    <h2 id="videos-title">Watch the game in motion.</h2>
                  </div>
                </div>
                <div class="video-grid">
                  <?php foreach ($g['videos'] as $i => $v):
                    $fallback = $g['screenshots'][$i % max(1, count($g['screenshots']))]['src'] ?? $g['capsule']; ?>
                    <article class="video-card" data-youtube-card>
                      <iframe
                        width="560" height="315"
                        src="https://www.youtube.com/embed/<?= e($v['youtube']) ?>"
                        title="<?= e($v['title']) ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        loading="lazy"
                        data-fallback-image="<?= e(thumb($fallback)) ?>"
                        data-video-title="<?= e($v['title']) ?>"
                        data-watch-url="https://www.youtube.com/watch?v=<?= e($v['youtube']) ?>"
                        data-youtube-iframe
                      ></iframe>
                    </article>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>

            <?php if (!empty($g['screenshots'])): ?>
              <div class="gallery" aria-labelledby="gallery-title">
                <div class="section-head">
                  <div>
                    <p class="section-kicker">Screenshots</p>
                    <h2 id="gallery-title"><?= e($g['screenshots_title'] ?? 'Screenshots.') ?></h2>
                  </div>
                </div>
                <div class="gallery-grid" data-screenshot-gallery>
                  <?php foreach ($g['screenshots'] as $shot): ?>
                    <a class="screenshot" href="<?= e($shot['src']) ?>" data-gallery-item>
                      <img src="<?= e(thumb($shot['src'])) ?>" alt="<?= e($shot['alt']) ?>" loading="lazy" />
                    </a>
                  <?php endforeach; ?>
                </div>
                <dialog class="gallery-lightbox" data-gallery-lightbox aria-label="Screenshots gallery">
                  <button class="lightbox-close" type="button" data-gallery-close aria-label="Close gallery"></button>
                  <div class="lightbox-stage">
                    <button class="lightbox-nav lightbox-prev" type="button" data-gallery-prev aria-label="Previous screenshot"><span aria-hidden="true"></span></button>
                    <figure class="lightbox-figure"><img data-gallery-image alt="" /></figure>
                    <button class="lightbox-nav lightbox-next" type="button" data-gallery-next aria-label="Next screenshot"><span aria-hidden="true"></span></button>
                  </div>
                  <div class="lightbox-dots" data-gallery-dots aria-label="Choose screenshot"></div>
                </dialog>
              </div>
            <?php endif; ?>
          </div>
        </section>

        <?php if (!empty($g['stores'])): ?>
        <section class="cta" aria-labelledby="cta-title">
          <div class="shell">
            <div class="cta-panel">
              <p class="section-kicker"><?= e($g['status_label']) ?></p>
              <h2 id="cta-title"><?= $g['status'] === 'out-now' ? 'Get ' . e($g['title']) . ' today.' : 'Keep an eye on ' . e($g['title']) . '.' ?></h2>
              <p>
                <?= $g['status'] === 'out-now'
                  ? 'Available now on ' . e($g['platforms']) . '.'
                  : 'Follow us for news, sneak peeks and the release date.' ?>
              </p>
              <div class="actions store-actions">
                <?php render_store_buttons($g); ?>
              </div>
              <?php if ($g['status'] !== 'out-now'): ?>
                <?php render_socials($SITE['socials'], 'social-links cta-socials'); ?>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php $others = array_diff_key($GAMES, [$game_slug => true]); if ($others): ?>
        <section class="games more-games" aria-labelledby="more-title">
          <div class="shell">
            <div class="section-head">
              <div>
                <p class="section-kicker">More from <?= e($SITE['name']) ?></p>
                <h2 id="more-title">Other games.</h2>
              </div>
            </div>
            <div class="game-grid">
              <?php foreach ($others as $slug => $g) { include __DIR__ . '/game-card.php'; } ?>
            </div>
          </div>
        </section>
        <?php endif; ?>
<?php include __DIR__ . '/footer.php'; ?>
