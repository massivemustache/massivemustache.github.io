# massivemustache.github.io
Public page of Massive Mustache (PHP, hosted on cPanel).

## Local preview
Needs PHP (`brew install php`). From this folder:

    ./scripts/serve.sh        # or: php -S localhost:8000

Open http://localhost:8000

## Structure
- `_data/site.php` – studio name, description, social links
- `_data/games.php` – **all games** (texts, images, videos, stores, colours)
- `_includes/` – header, footer, game page template, game card, icons
- `<slug>/index.php` – one tiny file per game page
- `assets/games/<slug>/` – images of a game

## Adding a game
1. Images → `assets/games/<slug>/` (`logo.png`, `capsule.jpg`, `backdrop.jpg`, `screenshots/shot-01.jpg` + `shot-01-thumb.jpg`, …)
2. Copy an entry in `_data/games.php` and edit it (first entry = newest = featured on the home page).
3. Copy `gangsofnightglade/index.php` to `<slug>/index.php` and change `$game_slug`.
