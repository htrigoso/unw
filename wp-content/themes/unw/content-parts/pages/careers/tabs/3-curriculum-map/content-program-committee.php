<?php
$content = "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>";

$commmittees = [
  [
    'img' => UPLOAD_PATH . '/checker-bg.svg',
    'title' => 'Nombre Apellido',
    'position' => 'Cargo',
    'extract' => '<p>Extracto corto sobre experiencia profesional. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
  ],
  [
    'img' => UPLOAD_PATH . '/checker-bg.svg',
    'title' => 'Nombre Apellido',
    'position' => 'Cargo',
    'extract' => '<p>Extracto corto sobre experiencia profesional. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
  ],
  [
    'img' => UPLOAD_PATH . '/checker-bg.svg',
    'title' => 'Nombre Apellido',
    'position' => 'Cargo',
    'extract' => '<p>Extracto corto sobre experiencia profesional. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
  ],
  [
    'img' => UPLOAD_PATH . '/checker-bg.svg',
    'title' => 'Nombre Apellido',
    'position' => 'Cargo',
    'extract' => '<p>Extracto corto sobre experiencia profesional. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
  ],
  [
    'img' => UPLOAD_PATH . '/checker-bg.svg',
    'title' => 'Nombre Apellido',
    'position' => 'Cargo',
    'extract' => '<p>Extracto corto sobre experiencia profesional. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
  ]
]

?>
<section class="program-committee">
  <h3 class="program-committee__title">Comité Consultivo</h3>
  <div class="program-committee__content" data-content="paragraph">
    <?php echo wp_kses_post($content); ?>
  </div>
  <div class="program-committee__slides">
    <div class="program-committee-swiper post-swiper" data-width="compact">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($commmittees as $commmittee): ?>
            <?php ?>
            <div class="swiper-slide program-committee-swiper__slide">
              <div class="program-committee__card">
                <img src="<?= $commmittee['img'] ?>" alt="" class="program-committee__card--img" />
                <div class="program-committee__card__content">
                  <h4 class="program-committee__card--title"><?= $commmittee['title'] ?></h4>
                  <span class="program-committee__card--position"><?= $commmittee['position'] ?></span>
                  <div class="program-committee__card--extract" data-content="paragraph">
                    <?php echo wp_kses_post($commmittee['extract']); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="swiper-navigation" data-size="absolute">
        <div class="swiper-primary-button-prev" data-size="absolute"></div>
        <div class="swiper-primary-button-next" data-size="absolute"></div>
        <div class="swiper-counter" data-size="absolute">
          <div class="swiper-pagination" data-size="absolute"></div>
        </div>
      </div>
    </div>
  </div>
</section>
