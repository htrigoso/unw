<?php
$title = $args['title'] ?? 'Testimonios';
// Name, title, description, footer, image
$testimonial_posts = $args['testimonials'] ?? [];

if (is_array($testimonial_posts) && !empty($testimonial_posts)) :
?>
  <section class="testimonial">
    <div class="testimonial__wrapper">
      <h2 class="testimonial__title"><?= wp_kses_post($title); ?></h2>
      <div class="post-swiper" data-width="wide">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($testimonial_posts as $testimonial_data) : ?>
              <div class="swiper-slide">
                <?php get_template_part(COMMON_CONTENT_PATH, 'testimonial-card', [
                  'testimonial' => $testimonial_data
                ]); ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
