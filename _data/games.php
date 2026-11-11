<?php
/*
 * ─────────────────────────────────────────────────────────────────────
 *  GAMES — single source of truth for the whole site.
 * ─────────────────────────────────────────────────────────────────────
 *  Order here = order on the home page (newest first).
 *
 *  HOW TO ADD A NEW GAME
 *  1. Put its images in /assets/games/<slug>/
 *       logo.png            title/logo with transparent background
 *       capsule.jpg         wide key art for the home-page card (≈ 16:9)
 *       backdrop.jpg        background of the game page (no text on it)
 *       screenshots/shot-01.jpg + shot-01-thumb.jpg (960px wide) …
 *  2. Copy one of the entries below and edit it.
 *  3. Create /<slug>/index.php with two lines (copy e.g. /gangsofnightglade/index.php
 *     and change the slug).
 *  That's it — home page, navigation and footer pick it up automatically.
 *
 *  status: 'out-now' | 'coming-soon' | 'in-development'
 *  stores: type = 'steam' | 'google-play' | 'app-store' | 'itch' | 'link'
 *          leave 'url' empty ('') to show a disabled "coming soon" button.
 *  theme:  accent colours used for buttons, pills and glows on the game page.
 *  legal:  optional legal pages of the game, kind = 'privacy' | 'terms' | 'account-deletion'
 *          (listed under the game in the footer and at the bottom of its page).
 *  i18n:   optional translations, e.g. 'pl' => [fields that replace the English ones];
 *          the game page then has an EN / PL switch (?lang=pl). Interface strings: _data/ui.php.
 * ─────────────────────────────────────────────────────────────────────
 */
return [

  // ───────────────────────────── Re:act
  'react' => [
    'title'        => 'Re:act',
    'short_title'  => 'Re:act',
    'genre'        => 'Rhythm flight game',
    'tagline'      => 'A rhythm game you fly.',
    'status'       => 'coming-soon',
    'status_label' => 'Coming soon',
    'platforms'    => 'PC (Steam), Android (Google Play), iOS (App Store)',

    'logo'     => '/assets/games/react/logo.png',
    'capsule'  => '/assets/games/react/capsule.jpg',
    'capsule_has_title' => true,
    'backdrop' => '/assets/games/react/backdrop.jpg',

    'theme' => [
      'accent'    => '#2fd3c0',   // crystal teal (logo edges, ship trail)
      'accent_2'  => '#e5262d',   // red stone
      'on_accent' => '#03201c',
    ],

    'description' => [
      'Re:act is a rhythm game where you fly a crystal ship down a tunnel. Every stone, every pane of ice, every turn lands on the beat, so the music tells you what’s coming.',
      'Each level is composed together with its own track. The first run is chaos, by the third you start to hear it, and then it clicks: you thread holes, smash ice and ride the drop like a song you know by heart. Crash? Rewind time and fly it again.',
    ],
    'features' => [
      'Hand-crafted levels, each composed with its own music',
      'Tunnels, lines, mirrors, black holes, triangles and rings',
      'Each music genre gets a look of its own',
      'Rewind instead of restart: a crash is just another take',
    ],

    'videos' => [
      ['youtube' => 'uE6L6oVf5x4', 'title' => 'Re:act – Trailer'],
    ],

    'screenshots_title' => 'Everything on the beat.',
    'screenshots' => [
      ['src' => '/assets/games/react/screenshots/shot-01.jpg', 'alt' => 'A stone with a gap swinging round in a tunnel of colourful Spanish tiles'],
      ['src' => '/assets/games/react/screenshots/shot-02.jpg', 'alt' => 'The ship on a narrow road with red hexagon stones shattering ahead'],
      ['src' => '/assets/games/react/screenshots/shot-03.jpg', 'alt' => 'An orange stone with a notch in the white crystal tunnel'],
      ['src' => '/assets/games/react/screenshots/shot-04.jpg', 'alt' => 'Two ships flying through glowing rings among butterflies'],
      ['src' => '/assets/games/react/screenshots/shot-05.jpg', 'alt' => 'A road through red spikes under a skull poster in the rock world'],
      ['src' => '/assets/games/react/screenshots/shot-06.jpg', 'alt' => 'A football-field road between two hexagon stones'],
      ['src' => '/assets/games/react/screenshots/shot-07.jpg', 'alt' => 'Flying through confetti and clouds towards the goalposts'],
      ['src' => '/assets/games/react/screenshots/shot-08.jpg', 'alt' => 'The ship’s path curving round black holes, seen from above'],
    ],

    // Google Play and App Store links come later: an empty url shows a disabled "soon" button.
    'stores' => [
      ['type' => 'steam',       'label' => 'Wishlist on Steam',         'url' => 'https://store.steampowered.com/app/5216560/React/'],
      ['type' => 'google-play', 'label' => 'Get it on Google Play',     'url' => ''],
      ['type' => 'app-store',   'label' => 'Download on the App Store', 'url' => ''],
    ],

    'legal' => [
      ['kind' => 'privacy', 'url' => '/react/privacy/'],
    ],
    'press_kit' => '',

    // Polish version of the page (/react/?lang=pl): these fields replace the English ones.
    'i18n' => [
      'pl' => [
        'genre'        => 'Gra rytmiczna o lataniu',
        'tagline'      => 'Muzyka, przez którą lecisz.',
        'status_label' => 'Wkrótce',
        'description' => [
          'Re:act to gra rytmiczna, w której lecisz kryształowym statkiem przez tunel. Każdy kamień, każda tafla lodu, każdy zakręt wypada na beat, więc muzyka podpowiada ci, co nadlatuje.',
          'Każdy poziom powstał razem z własnym utworem. Pierwszy przelot to chaos, przy trzecim zaczynasz to słyszeć, a potem wszystko się układa: trafiasz w otwory, rozbijasz lód i wlatujesz w drop jak w piosenkę, którą znasz na pamięć. Rozbicie? Cofasz czas i lecisz jeszcze raz.',
        ],
        'features' => [
          'Ręcznie projektowane poziomy, każdy skomponowany razem z własną muzyką',
          'Tunele, linie, lustra, czarne dziury, trójkąty i pierścienie',
          'Każdy gatunek muzyki ma własny wygląd',
          'Cofanie czasu zamiast restartu: rozbicie to tylko kolejne podejście',
        ],
        'videos' => [
          ['youtube' => 'uE6L6oVf5x4', 'title' => 'Re:act – zwiastun'],
        ],
        'screenshots_title' => 'Wszystko na beat.',
        'screenshots' => [
          ['src' => '/assets/games/react/screenshots/shot-01.jpg', 'alt' => 'Kamień z otworem obracający się w tunelu z kolorowych hiszpańskich kafli'],
          ['src' => '/assets/games/react/screenshots/shot-02.jpg', 'alt' => 'Statek na wąskiej drodze, przed nim pękają czerwone sześciokątne kamienie'],
          ['src' => '/assets/games/react/screenshots/shot-03.jpg', 'alt' => 'Pomarańczowy kamień z wcięciem w białym kryształowym tunelu'],
          ['src' => '/assets/games/react/screenshots/shot-04.jpg', 'alt' => 'Dwa statki lecą przez świecące pierścienie wśród motyli'],
          ['src' => '/assets/games/react/screenshots/shot-05.jpg', 'alt' => 'Droga między czerwonymi kolcami pod plakatem z czaszką w świecie rocka'],
          ['src' => '/assets/games/react/screenshots/shot-06.jpg', 'alt' => 'Droga jak boisko między dwoma sześciokątnymi kamieniami'],
          ['src' => '/assets/games/react/screenshots/shot-07.jpg', 'alt' => 'Przelot przez konfetti i chmury w stronę bramki'],
          ['src' => '/assets/games/react/screenshots/shot-08.jpg', 'alt' => 'Tor statku krążący wokół czarnych dziur, widok z góry'],
        ],
        'stores' => [
          ['type' => 'steam',       'label' => 'Dodaj do listy życzeń na Steamie', 'url' => 'https://store.steampowered.com/app/5216560/React/'],
          ['type' => 'google-play', 'label' => 'Pobierz z Google Play',          'url' => ''],
          ['type' => 'app-store',   'label' => 'Pobierz z App Store',            'url' => ''],
        ],
      ],
    ],
  ],

  // ───────────────────────────── Gangs of Nightglade
  'gangsofnightglade' => [
    'title'        => 'Gangs of Nightglade',
    'short_title'  => 'Gangs of Nightglade',
    'genre'        => 'Cyberpunk poker-based card battler',
    'tagline'      => 'A cyberpunk poker-based card battler.',
    'status'       => 'coming-soon',
    'status_label' => 'Coming soon',
    'platforms'    => 'PC (Steam)',

    'logo'     => '/assets/games/gangsofnightglade/logo.png',
    'capsule'  => '/assets/games/gangsofnightglade/capsule.jpg',
    'capsule_has_title' => true,   // capsule already shows the logo → don't overlay it on the home card
    'backdrop' => '/assets/games/gangsofnightglade/backdrop.jpg',

    'theme' => [
      'accent'    => '#35d6ff',   // neon cyan (title)
      'accent_2'  => '#c04bff',   // neon purple
      'on_accent' => '#06121a',   // text colour on accent buttons
    ],

    'description' => [
      'Gangs of Nightglade is a cyberpunk poker-based card battler set in the neon-soaked streets of Nightglade.',
      'Build strong hands, put your crew on the board and use every character’s special ability to outplay rival gangs, one tense card battle at a time.',
    ],
    'features' => [
      'Poker-style hands meet tactical card battles',
      'A crew of characters with unique special abilities',
      'Story mode with a gritty cyberpunk cast',
      'Multiplayer for head-to-head showdowns',
    ],

    // Optional: row of card art shown on the game page.
    'cards_title' => 'Meet the crew.',
    'cards' => [
      '/assets/games/gangsofnightglade/cards/card-01.webp',
      '/assets/games/gangsofnightglade/cards/card-02.webp',
      '/assets/games/gangsofnightglade/cards/card-03.webp',
      '/assets/games/gangsofnightglade/cards/card-04.webp',
      '/assets/games/gangsofnightglade/cards/card-05.webp',
      '/assets/games/gangsofnightglade/cards/card-06.webp',
      '/assets/games/gangsofnightglade/cards/card-07.webp',
      '/assets/games/gangsofnightglade/cards/card-08.webp',
    ],

    'videos' => [
      // ['youtube' => 'VIDEO_ID', 'title' => 'Gangs of Nightglade – Trailer'],
    ],

    'screenshots_title' => 'Welcome to Nightglade.',
    'screenshots' => [
      ['src' => '/assets/games/gangsofnightglade/screenshots/shot-01.jpg', 'alt' => 'Gangs of Nightglade main menu'],
      ['src' => '/assets/games/gangsofnightglade/screenshots/shot-02.jpg', 'alt' => 'Card battle on a subway platform with a unit’s special ability'],
      ['src' => '/assets/games/gangsofnightglade/screenshots/shot-03.jpg', 'alt' => 'Story scene in the crew’s hideout'],
      ['src' => '/assets/games/gangsofnightglade/screenshots/shot-04.jpg', 'alt' => 'Cards played across the board'],
      ['src' => '/assets/games/gangsofnightglade/screenshots/shot-05.jpg', 'alt' => 'Story scene with a holographic call'],
    ],

    'stores' => [
      ['type' => 'steam', 'label' => 'Wishlist on Steam', 'url' => 'https://store.steampowered.com/app/5357260/Gangs_of_Nightglade/'],
    ],

    'press_kit' => '',   // e.g. '/gangsofnightglade/press/'
  ],

  // ───────────────────────────── BrightGlade Tales
  'brightgladetales' => [
    'title'        => 'BrightGlade Tales',
    'short_title'  => 'BrightGlade Tales',
    'genre'        => 'Cozy forest card duel',
    'tagline'      => 'A cozy forest card duel.',
    'status'       => 'out-now',
    'status_label' => 'Out now',
    'platforms'    => 'PC (Steam), Android (Google Play)',

    'logo'     => '/assets/games/brightgladetales/logo.png',
    'capsule'  => '/assets/games/brightgladetales/screenshots/shot-02.jpg',
    'capsule_has_title' => false,
    'backdrop' => '/assets/games/brightgladetales/backdrop.jpg',

    'theme' => [
      'accent'    => '#f7bf55',   // warm gold
      'accent_2'  => '#83c85a',   // leaf green
      'on_accent' => '#1d1308',
    ],

    'description' => [
      'BrightGlade Tales is a cozy, forest-themed card game inspired by board games like Point City and Splendor.',
      'Gather resources, recruit units, complete missions, and compete for control of key locations to outmaneuver your opponent in a fast-paced, tactical duel.',
    ],
    'features' => [
      'Collect resources and chain smart plays',
      'Recruit charming forest units',
      'Complete missions for momentum',
      'Fight over key locations',
    ],

    'videos' => [
      ['youtube' => 'P7pgukjrl1c', 'title' => 'BrightGlade Tales – Final Trailer'],
      ['youtube' => 'jiIyk53i6M0', 'title' => 'BrightGlade Tales – first look'],
      ['youtube' => 'U8emIFtvRmQ', 'title' => 'BrightGlade Tales – gameplay'],
    ],

    'screenshots_title' => 'From the glade.',
    'screenshots' => [
      ['src' => '/assets/games/brightgladetales/screenshots/shot-01.jpg', 'alt' => 'BrightGlade Tales main menu'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-02.jpg', 'alt' => 'BrightGlade Tales gameplay board'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-03.jpg', 'alt' => 'Tactical card layout'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-04.jpg', 'alt' => 'Unit cards'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-05.jpg', 'alt' => 'Special action'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-06.jpg', 'alt' => 'Endgame board'],
      ['src' => '/assets/games/brightgladetales/screenshots/shot-07.jpg', 'alt' => 'BrightGlade Tales gameplay'],
    ],

    'stores' => [
      ['type' => 'steam',       'label' => 'Get it on Steam',       'url' => 'https://store.steampowered.com/app/4730950/BrightGlade_Tales/'],
      ['type' => 'google-play', 'label' => 'Get it on Google Play', 'url' => 'https://play.google.com/store/apps/details?id=games.massivemustache.brightgladtales&hl=en'],
    ],

    'press_kit' => '/brightgladetales/press/',

    // These pages stay at the site root: their URLs are registered in Google Play Console and Steamworks.
    'legal' => [
      ['kind' => 'privacy',          'url' => '/privacy/'],
      ['kind' => 'terms',            'url' => '/terms/'],
      ['kind' => 'account-deletion', 'url' => '/account-deletion/'],
    ],
  ],

];
