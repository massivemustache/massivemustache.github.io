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

          <nav class="footer-col" aria-label="Games">
            <span class="footer-heading">Games</span>
            <?php foreach ($GAMES as $nav_slug => $nav_g): ?>
              <a href="<?= game_url($nav_slug) ?>"><?= e($nav_g['title']) ?></a>
            <?php endforeach; ?>
          </nav>

          <nav class="footer-col" aria-label="Info">
            <span class="footer-heading">Info</span>
            <a href="/privacy/">Privacy Policy</a>
            <a href="/terms/">Terms of Service</a>
            <a href="/account-deletion/">Account Deletion</a>
          </nav>

          <div class="footer-col">
            <span class="footer-heading">Follow us</span>
            <?php render_socials($SITE['socials']); ?>
            <a class="js-contact-link footer-mail" href="#">Contact</a>
          </div>
        </div>
        <div class="shell footer-bottom">© <?= date('Y') ?> <?= e($SITE['name']) ?></div>
      </footer>
    </div>
  </body>
</html>
