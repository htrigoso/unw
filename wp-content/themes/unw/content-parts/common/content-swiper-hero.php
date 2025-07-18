<?php
$slider_group = $args['sliders'] ?? [];
$slides = $slider_group['list_of_files'] ?? [];
$base_breadcrumbs = $args['base_breadcrumbs'] ?? [];
$extra_class = $args['extra_class'] ?? '';
if (!empty($slides)) :
?>
<section class="hero-swiper <?php echo esc_attr($extra_class); ?>">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">

      <?php foreach ($slides as $slide) :
        $desktop  = $slide['images']['desktop']['url'] ?? '';
        $mobile   = $slide['images']['mobile']['url'] ?? '';
        $alt      = $slide['images']['desktop']['alt'] ?? 'Slide Carrera';
        $title    = $slide['title'] ?? '';
        $label    = $slide['label'] ?? '';

        $slide_breadcrumbs = $base_breadcrumbs;
        if (isset($label)) {
          $slide_breadcrumbs[] = ['label' => $label];
        }
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
        <div class="hero__wrapper">
          <div class="x-container hero__container">
            <article class="hero__content">
              <h1 class="hero__content--title">
                <?php echo esc_html($title); ?>
              </h1>
              <?php
              get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
                'breadcrumb' => $slide_breadcrumbs
              ]);
              ?>
            </article>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<?php endif; ?>
