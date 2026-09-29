<?php
/*
 * Studio-wide settings: name, tagline and social profiles.
 * Social links are rendered in the header, footer and on the home page.
 * Order here = order on the page. `icon` must exist in _includes/icons.php.
 */
return [
  'name'        => 'Massive Mustache',
  'tagline'     => 'Indie game studio',
  'description' => 'Massive Mustache is an indie studio passionate about digital and board games. We make card games with character, from cozy forest duels to neon-lit gang wars.',

  'socials' => [
    ['label' => 'X',         'icon' => 'x',         'url' => 'https://x.com/MassiveMGames'],
    ['label' => 'Facebook',  'icon' => 'facebook',  'url' => 'https://www.facebook.com/profile.php?id=61594934184450'],
    ['label' => 'Instagram', 'icon' => 'instagram', 'url' => 'https://www.instagram.com/massive.mustache/'],
    ['label' => 'YouTube',   'icon' => 'youtube',   'url' => 'https://www.youtube.com/@MassiveMustacheGames'],
  ],
];
