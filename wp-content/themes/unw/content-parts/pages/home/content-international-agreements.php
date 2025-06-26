<?php
$countries = [
  ['name' => 'Spain',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/1.svg'],
  ['name' => 'Mexico',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/2.svg'],
  ['name' => 'Colombia',    'file' => get_template_directory_uri() . '/upload/home/international-agreements/3.svg'],
  ['name' => 'Chile',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/4.svg'],
  ['name' => 'Italy',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/5.svg'],
  ['name' => 'Brazil',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/6.svg'],
  ['name' => 'Costa Rica',  'file' => get_template_directory_uri() . '/upload/home/international-agreements/7.svg'],
  ['name' => 'Ecuador',     'file' => get_template_directory_uri() . '/upload/home/international-agreements/8.svg'],
  ['name' => 'Spain',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/1.svg'],
  ['name' => 'Mexico',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/2.svg'],
  ['name' => 'Colombia',    'file' => get_template_directory_uri() . '/upload/home/international-agreements/3.svg'],
  ['name' => 'Chile',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/4.svg'],
  ['name' => 'Italy',       'file' => get_template_directory_uri() . '/upload/home/international-agreements/5.svg'],
  ['name' => 'Brazil',      'file' => get_template_directory_uri() . '/upload/home/international-agreements/6.svg'],
  ['name' => 'Costa Rica',  'file' => get_template_directory_uri() . '/upload/home/international-agreements/7.svg'],
  ['name' => 'Ecuador',     'file' => get_template_directory_uri() . '/upload/home/international-agreements/8.svg'],
];
?>

<section class="international-agreements">
  <div class="x-container x-container--pad-213">
    <div class="international-agreements__wrapper">

      <h2 class="international-agreements__title">Haz que tu educación cruce fronteras.</h2>
      <p class="international-agreements__subtitle">
        Explora los <strong>+90 Convenios Internacionales</strong> en universidades reconocidas alrededor del mundo:
      </p>

      <div class="swiper-container swiper-agreements">
        <div class="swiper-wrapper international-agreements__items">
          <?php foreach ($countries as $country): ?>
            <div class="swiper-slide international-agreements__item">
              <?php
              get_template_part(COMMON_CONTENT_PATH, 'country-card', array(
                'country' => $country
              ));
              ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
