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
];
?>

<section class="programs">
  <div class="x-container">
    <div class="programs__wrapper">
      <h2 class="programs__title">Nuestros programas están pensados para ti.</h2>
      <div class="programs__cards--mobile">
        <?php foreach ($programs as $program): ?>
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
              <a href="<?php echo esc_url($program['url']); ?>" class="btn btn-primary programs__card--content__cta">Ver carreras</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="programs__cards--desktop">
        <div class="swiper-container programs__swiper">
          <div class="swiper-wrapper">
            <?php foreach ($programs as $program): ?>
              <div class="swiper-slide programs__card--slide">
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
                    <a href="<?php echo esc_url($program['url']); ?>" class="btn btn-primary programs__card--content__cta">Ver carreras</a>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
    </div>
  </div>
</section>
