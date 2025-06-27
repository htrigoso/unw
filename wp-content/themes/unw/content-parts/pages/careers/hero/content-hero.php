<?php
$slider_group = $args['sliders'] ?? [];
$slides = $slider_group['list_of_files'] ?? [];
if (!empty($slides)) :
?>
<section class="hero careers-hero-swiper">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">

      <?php foreach ($slides as $slide) :
        $desktop = $slide['images']['desktop']['url'] ?? '';
        $mobile  = $slide['images']['mobile']['url'] ?? '';
        $alt     = $slide['images']['desktop']['alt'] ?? 'Slide Carrera';
      ?>
      <div class="swiper-slide swiper-hero__slide">
        <picture class="swiper-hero__picture">
          <?php if ($desktop): ?>
          <source srcset="<?php echo esc_url($desktop); ?>" media="(min-width: 768px)" />
          <?php endif; ?>
          <?php if ($mobile): ?>
          <img src="<?php echo esc_url($mobile); ?>" alt="<?php echo esc_attr($alt); ?>"
            class="swiper-hero__picture--img" />
          <?php endif; ?>
        </picture>
      </div>
      <?php endforeach; ?>

      <div class="hero__wrapper">
        <div class="x-container hero__container">
          <article class="hero__content">
            <h1 class="hero__content--title">
              <?php echo esc_html(get_the_title()); ?>
            </h1>
            <?php
            get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
              'breadcrumb' => [
                ['label' => 'Inicio', 'href' => home_url('/')],
                ['label' => 'Ciencias de la Salud', 'href' => '/salud'],
                ['label' => get_the_title()]
              ]
            ]);
            ?>
          </article>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<?php endif; ?>