<?php
$programs = [
  [
    'image' => 'program-1.jpg',
    'title' => 'Pregrado Presencial',
    'description' => 'Estudia en nuestros campus y vive la experiencia universitario completa.',
    'url' => '#'
  ],
  [
    'image' => 'program-2.jpg',
    'title' => 'Pregrado 100% Virtual',
    'description' => 'Diseñado para personas que trabajan y pueden conectarse de manera remota.',
    'url' => '#'
  ],
  [
    'image' => 'program-3.jpg',
    'title' => 'Posgrado',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
    'url' => '#'
  ],
  [
    'image' => 'program-4.jpg',
    'title' => 'Wiener Idiomas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
    'url' => '#'
  ],
  [
    'image' => 'program-4.jpg',
    'title' => 'Wiener Idiomas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
    'url' => '#'
  ],
  [
    'image' => 'program-4.jpg',
    'title' => 'Wiener Idiomas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
    'url' => '#'
  ],
  [
    'image' => 'program-4.jpg',
    'title' => 'Wiener Idiomas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
    'url' => '#'
  ]
];
?>

<section class="programs">
  <div class="x-container x-container--pad-213 programs__wrapper">
    <h2 class="programs__title">Nuestros programas están pensados para ti.</h2>

    <div class="post-swiper-desktop switch-pagination-navigation">
      <div class="swiper-container">
        <div class="swiper-wrapper programs__cards">
          <?php foreach ($programs as $program): ?>
            <div class="swiper-slide">
              <article class="programs__card">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/upload/home/programs/<?php echo esc_attr($program['image']); ?>"
                  alt="<?php echo esc_attr($program['title']); ?>"
                  class="programs__card--img" />
                <div class="programs__card--content">
                  <h3 class="programs__card--content__title"><?php echo esc_html($program['title']); ?></h3>
                  <p class="programs__card--content__description">
                    <?php echo esc_html($program['description']); ?>
                  </p>
                  <a href="<?php echo esc_url($program['url']); ?>" class="btn btn-primary programs__card--content__cta">
                    Ver carreras
                    <i>
                      <svg class="icon icon--arrow" width="24" height="24">
                        <use xlink:href="#arrow-right"></use>
                      </svg>
                    </i>
                  </a>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="swiper-navigation">
        <div class="post-swiper-button-prev"></div>
        <div class="post-swiper-button-next"></div>
      </div>
    </div>
  </div>
  </div>
</section>
