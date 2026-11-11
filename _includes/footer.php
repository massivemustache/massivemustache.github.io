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
            <a href="/privacy/"><?= e(ui('privacy_policy')) ?></a>
            <?php foreach ($GAMES as $nav_g): if (!empty($nav_g['privacy'])): ?>
              <a href="<?= e(lang_url($nav_g['privacy'], isset($nav_g['i18n'][$LANG]) ? $LANG : 'en')) ?>"><?= e(ui_f('game_privacy', $nav_g['title'])) ?></a>
            <?php endif; endforeach; ?>
            <a href="/terms/"><?= e(ui('terms')) ?></a>
            <a href="/account-deletion/"><?= e(ui('account_deletion')) ?></a>
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
