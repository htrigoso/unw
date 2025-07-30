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
          <div class="swiper-slide">
            <?php get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
              'img_desktop' => $desktop,
              'img_mobile'  => $mobile,
              'alt'         => $alt,
              'title'       => $title,
              'breadcrumbs' => $slide_breadcrumbs
            ]); ?>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
<?php endif; ?>
