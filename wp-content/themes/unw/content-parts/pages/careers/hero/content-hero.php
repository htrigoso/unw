<?php
$hero_images = [
  [
    'desktop' => get_template_directory_uri() . '/upload/careers/hero/hero-1-desktop.jpg',
    'mobile'  => get_template_directory_uri() . '/upload/careers/hero/hero-1-mobile.jpg',
    'alt'     => 'Farmacia y Bioquímica'
  ],
  [
    'desktop' => get_template_directory_uri() . '/upload/careers/hero/hero-2-desktop.png',
    'mobile'  => get_template_directory_uri() . '/upload/careers/hero/hero-2-mobile.png',
    'alt'     => 'Universidad Norbert Wiener'
  ],
];
?>

<section class="hero careers-hero-swiper">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <?php foreach ($hero_images as $img): ?>
      <div class="swiper-slide swiper-hero__slide">
        <picture class="swiper-hero__picture">
          <source srcset="<?php echo $img['desktop']; ?>" media="(min-width: 768px)" />
          <img src="<?php echo $img['mobile']; ?>" alt="<?php echo esc_attr($img['alt']); ?>"
            class="swiper-hero__picture--img" />
        </picture>
      </div>
      <?php endforeach; ?>
      <div class="hero__wrapper">
        <div class="x-container hero__container">
          <article class="hero__content">
            <h1 class="hero__content--title">
              Carrera de Farmacia y Bioquímica
            </h1>
            <?php
            get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', array(
              'breadcrumb' => [
                ['label' => 'Inicio', 'href' => home_url('/')],
                ['label' => 'Ciencias de la Salud', 'href' => '/salud'],
                ['label' => 'Farmacia y Bio.']
              ]
            ));
            ?>
          </article>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>