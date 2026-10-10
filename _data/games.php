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
 * ─────────────────────────────────────────────────────────────────────
 */
return [

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
  ],

];
