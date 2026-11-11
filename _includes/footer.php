      </main>

      <footer class="footer">
        <div class="shell footer-grid">
          <div class="footer-brand">
            <img src="/assets/big_logo_transparent.png" alt="<?= e($SITE['name']) ?> logo" width="64" height="64" />
            <div>
              <strong><?= e($SITE['name']) ?></strong>
              <span><?= e($SITE['tagline']) ?></span>
            </div>
          </div>

          <nav class="footer-col" aria-label="<?= e(ui('games')) ?>">
            <span class="footer-heading"><?= e(ui('games')) ?></span>
            <?php foreach ($GAMES as $nav_slug => $nav_g): ?>
              <a href="<?= game_url($nav_slug) ?>"><?= e($nav_g['title']) ?></a>
            <?php endforeach; ?>
          </nav>

          <nav class="footer-col" aria-label="<?= e(ui('info')) ?>">
            <span class="footer-heading"><?= e(ui('info')) ?></span>
            <?php foreach ($GAMES as $nav_g): $nav_legal = game_legal_links($nav_g); if ($nav_legal): ?>
              <span class="footer-subheading"><?= e($nav_g['title']) ?></span>
              <?php foreach ($nav_legal as [$nav_label, $nav_href]): ?>
                <a href="<?= e($nav_href) ?>"><?= e($nav_label) ?></a>
              <?php endforeach; ?>
            <?php endif; endforeach; ?>
          </nav>

          <div class="footer-col">
            <span class="footer-heading"><?= e(ui('follow_us')) ?></span>
            <?php render_socials($SITE['socials']); ?>
            <a class="js-contact-link footer-mail" href="#"><?= e(ui('contact')) ?></a>
          </div>
        </div>
        <div class="shell footer-bottom">© <?= date('Y') ?> <?= e($SITE['name']) ?></div>
      </footer>
    </div>
  </body>
</html>
