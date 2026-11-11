<?php
require_once __DIR__ . '/_includes/functions.php';

$page_title       = $SITE['name'] . ' | Indie game studio';
$page_description = $SITE['description'];
$body_class       = 'home';

$featured_slug = array_key_first($GAMES);   // newest game = first in _data/games.php
$featured      = $GAMES[$featured_slug];

include __DIR__ . '/_includes/header.php';
?>
        <section class="hero studio-hero" aria-labelledby="hero-title">
          <div class="shell hero-content">
            <div class="identity">
              <img class="brand-mark" src="/assets/big_logo_transparent.png" alt="Massive Mustache logo" />
              <p class="eyebrow"><?= e($SITE['tagline']) ?></p>
              <h1 id="hero-title"><?= e($SITE['name']) ?></h1>
              <p class="lead"><?= e($SITE['description']) ?></p>
              <div class="actions">
                <a class="button button-primary" href="#games">Our games</a>
                <a class="button button-secondary" href="#contact">Get in touch</a>
              </div>
            </div>

            <a class="spotlight" href="<?= game_url($featured_slug) ?>" style="<?= game_theme_style($featured) ?>" aria-label="<?= e($featured['title']) ?>: <?= e($featured['status_label']) ?>">
              <span class="spotlight-label">Latest game</span>
              <span class="spotlight-frame">
                <img src="<?= e($featured['capsule']) ?>" alt="<?= e($featured['title']) ?> key art" />
              </span>
              <span class="spotlight-caption">
                <span><strong><?= e($featured['title']) ?></strong> <?= e($featured['tagline']) ?></span>
                <span class="status-pill"><?= e($featured['status_label']) ?></span>
              </span>
            </a>
          </div>
        </section>

        <section class="games" id="games" aria-labelledby="games-title">
          <div class="shell">
            <div class="section-head">
              <div>
                <p class="section-kicker">Our games</p>
                <h2 id="games-title">Games with character.</h2>
              </div>
              <p>Every game is a different world, but they share the same heart: tight rules, clever ideas and a world worth coming back to.</p>
            </div>
            <div class="game-grid">
              <?php foreach ($GAMES as $slug => $g) { include __DIR__ . '/_includes/game-card.php'; } ?>
            </div>
          </div>
        </section>

        <section class="studio" id="contact" aria-labelledby="studio-title">
          <div class="shell">
            <div class="studio-panel">
              <div>
                <p class="section-kicker">The studio</p>
                <h2 id="studio-title">Small studio, big mustache.</h2>
                <p class="lead">
                  Massive Mustache is an independent developer passionate about digital and board games.
                  Follow along for news, devlogs and new releases, or drop us a line.
                </p>
              </div>
              <div class="studio-links">
                <a class="button button-primary js-contact-link" href="#">Contact</a>
                <div class="social-pills">
                  <?php foreach ($SITE['socials'] as $s): ?>
                    <a class="social-pill" href="<?= e($s['url']) ?>" target="_blank" rel="noreferrer"><?= icon($s['icon']) ?><span><?= e($s['label']) ?></span></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include __DIR__ . '/_includes/footer.php'; ?>
