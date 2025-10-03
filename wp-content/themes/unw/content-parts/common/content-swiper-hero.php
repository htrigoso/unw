<?php
$slider_group = $args['sliders'] ?? [];
$slides = $slider_group['list_of_files'] ?? [];
$base_breadcrumbs = $args['base_breadcrumbs'] ?? [];
$extra_class = $args['extra_class'] ?? '';
$variant = $args['variant'] ?? 'standard';
$title_sec = $args['title_sec'] ?? '';
if (!empty($slides)) :

?>
<section class="hero-swiper <?php echo esc_attr($extra_class); ?>">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <?php

      foreach ($slides as $index => $slide) :
          $desktop  = $slide['images']['desktop']['url'] ?? '';
          $mobile   = $slide['images']['mobile']['url'] ?? '';
          $alt      = $slide['images']['desktop']['alt'] ?? 'Slide Carrera';
          $type     = $slide['images']['type'] ?? '';
          $title    = $slide['title'] ?? $slider_group['title'];
          $label    = $slide['label'] ?? '';

          $slide_breadcrumbs = $base_breadcrumbs;

          if(!empty($title_sec)) {
            $slide_breadcrumbs[] = ['label' => $title_sec];
          }else {
            $slide_breadcrumbs[] =  ['label' => $label];
          }
        ?>
      <div data-index="<?=$index?>" class="swiper-slide">
        <?php

        get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
              'img_desktop' => $desktop,
              'img_mobile'  => $mobile,
              'alt'         => $alt,
              'title'       => $title,
              'breadcrumbs' => $slide_breadcrumbs,
              'type'        => $type,
              'variant'     => $variant,
              'index'       => $index
            ]);
        ?>
      </div>
      <?php endforeach; ?>
    </div>
    <?php if (count($slides) > 1) : ?>
    <div class="swiper-pagination"></div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
