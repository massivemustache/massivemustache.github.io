<?php
/*
 * Brightglade Tales — Press Kit (PL / EN)
 * Language is switched with ?lang=pl  (default: en)
 *
 * ─────────────────────────────────────────────────────────────
 *  DOWNLOAD LINK: paste the Google Drive share link to the
 *  full press-kit .zip below. Leave empty to show "coming soon".
 * ─────────────────────────────────────────────────────────────
 */
$press_zip_url = 'https://drive.google.com/file/d/1OAXmZYpOu9DxrCO_qTR7VIACgWAP_blR/view?usp=sharing';

$lang = (isset($_GET['lang']) && $_GET['lang'] === 'pl') ? 'pl' : 'en';
$pl   = $lang === 'pl';
$html_lang = $lang;

$page_title = $pl
  ? 'Brightglade Tales — Press Kit | Massive Mustache'
  : 'Brightglade Tales — Press Kit | Massive Mustache';
$page_description = $pl
  ? 'Oficjalny press kit gry Brightglade Tales — przytulnej karcianki 1v1 studia Massive Mustache. Factsheet, zrzuty ekranu, zwiastun, loga i kontakt.'
  : 'Official press kit for Brightglade Tales, a cozy 1v1 card engine-builder by indie studio Massive Mustache. Factsheet, screenshots, trailer, logos and contact.';

$zip_href = $press_zip_url !== '' ? $press_zip_url : '#';

$STEAM = 'https://store.steampowered.com/app/4730950/BrightGlade_Tales/';
$SITE  = '/#brightglade';
$X     = 'https://x.com/MassiveMGames';
$YT    = 'https://www.youtube.com/@MassiveMustacheGames';

include __DIR__ . '/../../_includes/header.php';
?>
        <section class="legal press" aria-labelledby="press-title">
          <div class="shell">

            <div class="press-topline">
              <p class="section-kicker"><?= $pl ? 'Press Kit' : 'Press Kit' ?></p>
              <div class="lang-toggle" aria-label="<?= $pl ? 'Wybór języka' : 'Language' ?>">
                <a href="?lang=en" class="<?= !$pl ? 'is-active' : '' ?>"<?= !$pl ? ' aria-current="true"' : '' ?>>EN</a>
                <a href="?lang=pl" class="<?= $pl ? 'is-active' : '' ?>"<?= $pl ? ' aria-current="true"' : '' ?>>PL</a>
              </div>
            </div>

            <div class="press-hero">
              <img class="press-banner" src="/brightgladetales/press/assets/logos/bt-logo-wide.png" alt="Brightglade Tales logo" />
              <h1 id="press-title">Brightglade Tales</h1>
              <p class="press-lead">
                <?= $pl
                  ? 'Przytulny karciany engine-builder 1v1 od niezależnego studia Massive Mustache. Wszystko, czego potrzebujesz, by opisać grę — factsheet, zrzuty ekranu, zwiastun, loga i kontakt — znajdziesz na tej stronie.'
                  : 'A cozy 1v1 card engine-builder from indie studio Massive Mustache. Everything you need to cover the game — factsheet, screenshots, trailer, logos and contact — is on this page.' ?>
              </p>
              <div class="press-actions">
                <a class="button button-primary<?= $press_zip_url === '' ? ' is-pending' : '' ?>" href="<?= htmlspecialchars($zip_href, ENT_QUOTES, 'UTF-8') ?>"<?= $press_zip_url !== '' ? ' target="_blank" rel="noreferrer"' : '' ?>>
                  <?= $pl ? 'Pobierz cały press kit (.zip)' : 'Download full press kit (.zip)' ?>
                </a>
                <a class="button button-secondary" href="<?= $STEAM ?>" target="_blank" rel="noreferrer">
                  <?= $pl ? 'Zobacz na Steam' : 'View on Steam' ?>
                </a>
              </div>
              <?php if ($press_zip_url === ''): ?>
              <p class="press-note"><?= $pl
                ? 'Link do pobrania pojawi się wkrótce — archiwum zawiera loga, ikony, zrzuty ekranu w pełnej rozdzielczości oraz zwiastun.'
                : 'The download link is coming soon — the archive contains logos, icons, full-resolution screenshots and the trailer.' ?></p>
              <?php else: ?>
              <p class="press-note"><?= $pl
                ? 'Loga, ikony, zrzuty ekranu w pełnej rozdzielczości i zwiastun w jednym archiwum.'
                : 'All logos, icons, full-resolution screenshots and the trailer in one archive.' ?></p>
              <?php endif; ?>
            </div>

            <!-- ===== Factsheet ===== -->
            <h2 class="press-h2"><?= $pl ? 'Factsheet' : 'Factsheet' ?></h2>
            <dl class="factsheet">
              <div><dt><?= $pl ? 'Tytuł' : 'Title' ?></dt><dd>Brightglade Tales</dd></div>
              <div><dt><?= $pl ? 'Studio' : 'Developer' ?></dt><dd>Massive Mustache</dd></div>
              <div><dt><?= $pl ? 'Siedziba' : 'Based in' ?></dt><dd><?= $pl ? 'Warszawa, Polska' : 'Warsaw, Poland' ?></dd></div>
              <div><dt><?= $pl ? 'Wydawca' : 'Publisher' ?></dt><dd><?= $pl ? 'Self-publishing' : 'Self-published' ?></dd></div>
              <div><dt><?= $pl ? 'Silnik' : 'Engine' ?></dt><dd>Unity</dd></div>
              <div><dt><?= $pl ? 'Gatunek' : 'Genre' ?></dt><dd><?= $pl ? 'Przytulny engine-builder 1v1' : 'Cozy 1v1 engine-builder' ?></dd></div>
              <div><dt><?= $pl ? 'Tryby gry' : 'Modes' ?></dt><dd><?= $pl ? 'Singleplayer vs AI, online 1v1 PvP' : 'Singleplayer vs AI, online 1v1 PvP' ?></dd></div>
              <div><dt><?= $pl ? 'Platformy' : 'Platforms' ?></dt><dd><?= $pl
                ? 'PC (Steam) — czerwiec 2026<br>Android — lipiec 2026<br>iOS — sierpień 2026'
                : 'PC (Steam) — June 2026<br>Android — July 2026<br>iOS — August 2026' ?></dd></div>
              <div><dt><?= $pl ? 'Data premiery' : 'Release date' ?></dt><dd><?= $pl ? 'Steam — czerwiec 2026' : 'Steam — June 2026' ?></dd></div>
              <div><dt><?= $pl ? 'Cena' : 'Price' ?></dt><dd><?= $pl
                ? 'PC (Steam): 6,99 USD<br>iOS i Android: ~4,99 USD'
                : 'PC (Steam): $6.99 USD<br>iOS &amp; Android: ~$4.99 USD' ?></dd></div>
              <div><dt><?= $pl ? 'Języki' : 'Languages' ?></dt><dd><?= $pl ? 'angielski, polski' : 'English, Polish' ?></dd></div>
              <div><dt><?= $pl ? 'Klasyfikacja wiekowa' : 'Age rating' ?></dt><dd><?= $pl
                ? 'PEGI 3 / ESRB Everyone (mobile 13+ ze względu na interakcję między graczami)'
                : 'PEGI 3 / ESRB Everyone (mobile 13+ due to player interaction)' ?></dd></div>
              <div><dt><?= $pl ? 'Kontakt dla prasy' : 'Press contact' ?></dt><dd><a href="mailto:marcin.lusa@massivemustache.games">marcin.lusa@massivemustache.games</a></dd></div>
              <div><dt><?= $pl ? 'Linki' : 'Links' ?></dt><dd>
                <a href="<?= $STEAM ?>" target="_blank" rel="noreferrer">Steam</a> ·
                <a href="<?= $SITE ?>"><?= $pl ? 'Strona' : 'Website' ?></a> ·
                <a href="<?= $X ?>" target="_blank" rel="noreferrer">X / Twitter</a>
              </dd></div>
            </dl>

            <!-- ===== Description: tagline / short / full ===== -->
            <h2 class="press-h2"><?= $pl ? 'Opis' : 'Description' ?></h2>

            <p class="section-kicker press-sublabel">Tagline</p>
            <p class="press-tagline"><?= $pl
              ? 'Karciany engine-builder 1v1 z obsadą rysunkowych leśnych stworków. Zbierz ekipę, pokrzyżuj plany rywala i przejmij krainę.'
              : 'A 1v1 card engine-builder with a cast of cartoon woodland critters. Hire your crew, wreck your rivals, and claim the land.' ?></p>

            <p class="section-kicker press-sublabel"><?= $pl ? 'Krótki opis' : 'Short description' ?></p>
            <p class="press-copy"><?= $pl
              ? 'Brightglade Tales to dynamiczna karcianka dla dwóch graczy o walce o wpływy w krainie Brightglade. Każda partia to krótka, intensywna potyczka (15–30 minut), w której nie tylko budujesz własną ekipę — aktywnie sabotujesz przeciwnika: niszczysz i kradniesz jego surowce, eliminujesz i przekupujesz jego drużynę. Obaj gracze ścigają się, by przejąć kontrolę nad jedną z trzech lokacji wylosowanych z talii na początku rozgrywki.'
              : "Brightglade Tales is a fast-paced two-player card game about the struggle for influence in the land of Brightglade. Every match is a short, intense skirmish (15–30 minutes) in which you don't just build your own crew — you actively sabotage your opponent: destroying and stealing their resources, eliminating and bribing their crew. Both players race to seize control of one of three locations, drawn at random from the deck at the start of the match." ?></p>

            <p class="section-kicker press-sublabel"><?= $pl ? 'Długi opis' : 'Full description' ?></p>
            <h3 class="press-h3"><?= $pl ? 'Cel gry' : 'Goal of the game' ?></h3>
            <p class="press-copy"><?= $pl
              ? 'Na stole leżą trzy lokacje wylosowane z talii. Wygrywa ten, kto pierwszy przejmie kontrolę nad jedną z nich — a do tego potrzebujesz odpowiedniej liczby Punktów Dominacji i drużyny o właściwym składzie. Brzmi prosto, ale przeciwnik ma dokładnie te same możliwości co ty, a karty na rynku są wspólne.'
              : 'Three locations drawn from the deck lie on the table. The winner is the first player to seize control of one of them — and to do that, you need to gather enough Dominance Points and assemble a crew with the right composition. Sounds simple, but your opponent has exactly the same options as you, and the cards on the market are shared.' ?></p>

            <h3 class="press-h3"><?= $pl ? 'Jak się gra' : 'How to play' ?></h3>
            <p class="press-copy"><?= $pl
              ? 'Rdzeń rozgrywki opiera się na trzech typach kart: <strong>Surowce</strong> — dobierane z rynku, napędzają twoje akcje; <strong>Drużyna</strong> — rekrutowana, by wykonywać misje i przejmować lokacje; <strong>Misje</strong> — źródło Punktów Dominacji i specjalnych efektów.'
              : 'The core gameplay loop revolves around three types of cards: <strong>Resources</strong> — drawn from the market to fuel your actions; <strong>Crew</strong> — recruited to carry out missions and seize locations; <strong>Missions</strong> — the source of Dominance Points and special effects.' ?></p>

            <h3 class="press-h3"><?= $pl ? 'Na misjach możesz' : 'On missions you can' ?></h3>
            <ul>
              <?php
              $missions = $pl ? [
                'kraść i niszczyć surowce przeciwnika',
                'zastraszać, eliminować, przekupywać i przejmować jego drużynę',
                'szkolić nowych rekrutów i przywracać postacie z odrzuconych kart',
                'poświęcać własną drużynę dla dodatkowych Punktów Dominacji',
                'niszczyć lokacje, o które toczy się walka',
              ] : [
                "steal and destroy your opponent's resources",
                'intimidate, eliminate, bribe, and take over their crew',
                'train new recruits and bring back members from discarded cards',
                'sacrifice your own crew for extra Dominance Points',
                'destroy the locations being contested',
              ];
              foreach ($missions as $m) echo "              <li>$m</li>\n";
              ?>
            </ul>

            <h3 class="press-h3"><?= $pl ? 'Rozgrywka pisze opowieść' : 'The gameplay writes the tale' ?></h3>
            <p class="press-copy"><?= $pl
              ? 'Nie ma scenariusza — historia każdej partii to ciąg decyzji: kogo zrekrutować, jakie misje podjąć, co ukraść przeciwnikowi. Każda rozgrywka to inna opowieść o intrydze, zdradzie i ryzykownych zagraniach w Brightglade.'
              : 'There is no script — the story of each match is a series of decisions: who to recruit, which missions to take on, what to steal from your opponent. Every game is a different tale of intrigue, betrayal, and risky plays in Brightglade.' ?></p>

            <!-- ===== Features ===== -->
            <h2 class="press-h2"><?= $pl ? 'Najważniejsze cechy' : 'Features' ?></h2>
            <ul class="feature-list" aria-label="<?= $pl ? 'Cechy gry' : 'Game features' ?>">
              <?php
              $features = $pl ? [
                'Karciany engine-builder dla dwóch graczy',
                'Buduj swój silnik, sabotując silnik rywala',
                'Ścigaj się o kontrolę nad jedną z trzech lokacji',
                'Przytulne, rysunkowe leśne stworki',
              ] : [
                'Engine-building card game for two players',
                "Build your engine while sabotaging your rival's",
                'Race to seize control of one of three locations',
                'Cartoon, cozy woodland critters',
              ];
              foreach ($features as $f) echo "              <li>$f</li>\n";
              ?>
            </ul>

            <!-- ===== Trailer & videos ===== -->
            <div class="videos" aria-labelledby="press-videos-title">
              <div class="section-head">
                <div>
                  <p class="section-kicker"><?= $pl ? 'Wideo' : 'Videos' ?></p>
                  <h2 id="press-videos-title" style="margin-bottom:0;"><?= $pl ? 'Zwiastun i samouczek' : 'Trailer & tutorial' ?></h2>
                </div>
                <p><?= $pl ? 'Finalny zwiastun oraz samouczek, prosto z YouTube.' : 'The final trailer plus the tutorial, straight from YouTube.' ?></p>
              </div>
              <div class="video-grid">
                <article class="video-card" data-youtube-card>
                  <iframe
                    width="560" height="315"
                    src="https://www.youtube.com/embed/P7pgukjrl1c"
                    title="Brightglade Tales — Trailer"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    data-fallback-image="/brightgladetales/press/assets/screenshots/shot-04.jpg"
                    data-video-title="<?= $pl ? 'Obejrzyj zwiastun Brightglade Tales na YouTube' : 'Watch the Brightglade Tales trailer on YouTube' ?>"
                    data-watch-url="https://www.youtube.com/watch?v=P7pgukjrl1c"
                    data-youtube-iframe
                  ></iframe>
                </article>
                <article class="video-card" data-youtube-card>
                  <iframe
                    width="560" height="315"
                    src="https://www.youtube.com/embed/jiIyk53i6M0"
                    title="Brightglade Tales — Tutorial"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    data-fallback-image="/brightgladetales/press/assets/screenshots/shot-01.jpg"
                    data-video-title="<?= $pl ? 'Obejrzyj samouczek Brightglade Tales na YouTube' : 'Watch the Brightglade Tales tutorial on YouTube' ?>"
                    data-watch-url="https://www.youtube.com/watch?v=jiIyk53i6M0"
                    data-youtube-iframe
                  ></iframe>
                </article>
              </div>
            </div>

            <!-- ===== Screenshots ===== -->
            <div class="gallery" aria-labelledby="press-gallery-title">
              <div class="section-head">
                <div>
                  <p class="section-kicker"><?= $pl ? 'Zrzuty ekranu' : 'Screenshots' ?></p>
                  <h2 id="press-gallery-title" style="margin-bottom:0;"><?= $pl ? 'Z głębi gladu' : 'From the glade' ?></h2>
                </div>
                <p><?= $pl
                  ? 'Kliknij obraz, by zobaczyć go w pełnym rozmiarze. Pliki w pełnej rozdzielczości są w archiwum press kitu.'
                  : 'Click any image to view it full size. Full-resolution files are in the press-kit archive.' ?></p>
              </div>
              <div class="gallery-grid" data-screenshot-gallery>
                <?php
                $shots = ['00','01','02','03','04','05','06','07'];
                foreach ($shots as $i => $s):
                ?>
                <a class="screenshot" href="/brightgladetales/press/assets/screenshots/shot-<?= $s ?>.jpg" data-gallery-item>
                  <img src="/brightgladetales/press/assets/screenshots/shot-<?= $s ?>-thumb.jpg" loading="lazy" alt="<?= $pl ? 'Brightglade Tales — zrzut ekranu ' : 'Brightglade Tales screenshot ' ?><?= $i + 1 ?>" />
                </a>
                <?php endforeach; ?>
              </div>
              <dialog class="gallery-lightbox" data-gallery-lightbox aria-label="<?= $pl ? 'Galeria zrzutów ekranu' : 'Screenshots gallery' ?>">
                <button class="lightbox-close" type="button" data-gallery-close aria-label="<?= $pl ? 'Zamknij galerię' : 'Close gallery' ?>"></button>
                <div class="lightbox-stage">
                  <button class="lightbox-nav lightbox-prev" type="button" data-gallery-prev aria-label="<?= $pl ? 'Poprzedni' : 'Previous screenshot' ?>"><span aria-hidden="true"></span></button>
                  <figure class="lightbox-figure"><img data-gallery-image alt="" /></figure>
                  <button class="lightbox-nav lightbox-next" type="button" data-gallery-next aria-label="<?= $pl ? 'Następny' : 'Next screenshot' ?>"><span aria-hidden="true"></span></button>
                </div>
                <div class="lightbox-dots" data-gallery-dots aria-label="<?= $pl ? 'Wybierz zrzut ekranu' : 'Choose screenshot' ?>"></div>
              </dialog>
            </div>

            <!-- ===== Logos & branding ===== -->
            <h2 class="press-h2"><?= $pl ? 'Logo i branding' : 'Logos & branding' ?></h2>
            <div class="brand-grid">
              <div class="brand-card">
                <img src="/brightgladetales/press/assets/logos/bt-logo.png" alt="Brightglade Tales logo" />
                <span><?= $pl ? 'Logo gry' : 'Game logo' ?></span>
              </div>
              <div class="brand-card">
                <img src="/brightgladetales/press/assets/logos/mm-logo.png" alt="Massive Mustache logo" />
                <span><?= $pl ? 'Logo studia' : 'Studio logo' ?></span>
              </div>
              <div class="brand-card">
                <img src="/brightgladetales/press/assets/icons/bt-icon.png" alt="Brightglade Tales app icon" />
                <span><?= $pl ? 'Ikona aplikacji' : 'App icon' ?></span>
              </div>
            </div>
            <p class="press-copy press-copy-small"><?= $pl
              ? 'Loga i ikony w pełnej rozdzielczości (przezroczyste PNG) znajdują się w pobieralnym press kicie.'
              : 'Logos and icons in full resolution (transparent PNG) are included in the downloadable press kit.' ?></p>

            <!-- ===== About the developer ===== -->
            <h2 class="press-h2"><?= $pl ? 'O twórcy' : 'About the developer' ?></h2>
            <p class="press-copy"><?= $pl
              ? 'Brightglade Tales zaczęło się od tego, że potrzebowałem mentalnej odskoczni od pracy w dużej firmie technologicznej, a miałem zbyt dużo twórczej energii, by ją zmarnować. Chciałem stworzyć przytulne, relaksujące miejsce z nutą taktycznego główkowania.'
              : 'I started Brightglade Tales because I needed a mental break from working at a big tech company, and I had too much creative energy to let it go to waste. I wanted to build a cozy, relaxing place with a touch of tactical thinking.' ?></p>
            <p class="press-copy"><?= $pl
              ? 'Od prawie 20 lat jestem programistą, w tym przez 5 lat w CD Projekt RED — przy Wiedźminie 3, a później przy Gwent: Thronebreaker — a potem przez lata w dużych firmach growych z segmentu social i casino. Po tym wszystkim chciałem zrobić coś małego, przytulnego, osobistego i tworzonego z serca. Brightglade Tales jest właśnie taką grą.'
              : "I've spent almost 20 years as a software engineer, including 5 years at CD Projekt RED — working on The Witcher 3 and later on Gwent: Thronebreaker — followed by years at large gaming companies in the social and casino space. After all that, I wanted to make something small, cozy, personal, and made from the heart. Brightglade Tales is that game." ?></p>
            <p class="press-copy"><?= $pl
              ? 'Świadomie ograniczyłem zakres. Po latach przy dużych produkcjach chciałem sprawdzić, co potrafię zbudować sam — wieczorami i w weekendy, bez zespołu, bez rozrastania się projektu. Małe nie znaczy płytkie — Brightglade Tales ma być zwarte, regrywalne i warte twojego czasu. Jestem pasjonatem gier planszowych i fanem cyfrowych adaptacji takich jak Neuroshima Hex, Dune czy Ascension — dlatego wybrałem ten format.'
              : "I deliberately kept the scope small. After years on large productions, I wanted to find out what I can build on my own — evenings and weekends, no team, no scope creep. Small doesn't mean shallow — Brightglade Tales is built to be tight, replayable, and worth your time. I'm passionate about board games and a fan of digital adaptations like Neuroshima Hex, Dune, and Ascension — that's why I picked this format." ?></p>

            <!-- ===== Contact ===== -->
            <div class="legal-callout">
              <p class="legal-callout-label"><?= $pl ? 'Kontakt dla prasy' : 'Press contact' ?></p>
              <p style="margin-bottom:10px;"><?= $pl
                ? 'W sprawie wywiadów, kluczy recenzenckich lub pytań — napisz:'
                : 'For interviews, review keys, or any questions, get in touch:' ?></p>
              <p style="margin-bottom:0;"><a href="mailto:marcin.lusa@massivemustache.games">marcin.lusa@massivemustache.games</a></p>
            </div>

            <a class="back-link" href="/"><?= $pl ? 'Powrót na stronę główną' : 'Back to the homepage' ?></a>

          </div>
        </section>
<?php include __DIR__ . '/../../_includes/footer.php'; ?>
