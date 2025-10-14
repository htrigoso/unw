<?php
$title = $args['title'] ?? 'Testimonios';
// Name, title, description, footer, image
$testimonial_posts = $args['testimonials'] ?? [];
if (wp_is_nonempty_array($testimonial_posts)) {
?>
  <section class="testimonials">
    <div class="testimonials__wrapper">
      <h2 class="testimonials__title">
        <?php echo get_value_or_default($title, 'wp_kses_post', 'Titulo para testimonios'); ?>
      </h2>
      <div class="testimonials-swiper post-swiper" data-width="compact">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php
            foreach ($testimonial_posts as $testimonial_data) : ?>
              <div class="swiper-slide testimonials__item">
                <?php get_template_part(COMMON_CONTENT_PATH, 'testimonial-card', [
                  'testimonial' => $testimonial_data
                ]); ?>
              </div>
            <?php
            endforeach;
            ?>
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
<?php } ?>
