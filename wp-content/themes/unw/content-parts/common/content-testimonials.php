<?php
$title = $args['title'] ?? 'Testimonios';
// Name, title, description, footer, image
$testimonial_posts = $args['testimonials'] ?? [];

if (is_array($testimonial_posts) && !empty($testimonial_posts)) :
?>
<section class="testimonials">
  <div class="testimonials__wrapper">
    <h2 class="testimonials__title"><?= wp_kses_post($title); ?></h2>
    <div class="testimonials-swiper post-swiper switch-pagination-navigation" data-width="compact">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($testimonial_posts as $testimonial_data) :?>
          <div class="swiper-slide">
            <?php get_template_part(COMMON_CONTENT_PATH, 'testimonial-card', [
                  'testimonial' => $testimonial_data
                ]); ?>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-navigation">
        <div class="swiper-primary-button-prev"></div>
        <div class="swiper-primary-button-next"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
