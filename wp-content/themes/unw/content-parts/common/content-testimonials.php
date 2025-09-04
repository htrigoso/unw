<?php
$title = $args['title'] ?? 'Testimonios';
// Name, title, description, footer, image
$testimonial_posts = $args['testimonials'] ?? [];
if(wp_is_nonempty_array($testimonial_posts)){
?>
<section class="testimonials">
  <div class="testimonials__wrapper">
    <h2 class="testimonials__title">
      <?php echo get_value_or_default($title, 'wp_kses_post', 'Titulo para testimonios'); ?>
    </h2>
    <div class="testimonials-swiper post-swiper switch-pagination-navigation" data-width="compact">

      <div class="swiper-container">
        <ul class="swiper-wrapper">
          <?php
          foreach ($testimonial_posts as $testimonial_data) : ?>
          <li class="swiper-slide">
            <?php get_template_part(COMMON_CONTENT_PATH, 'testimonial-card', [
                  'testimonial' => $testimonial_data
                ]); ?>
          </li>
          <?php
          endforeach;
          ?>
        </ul>
        <div class="swiper-navigation">
          <div class="swiper-primary-button-prev"></div>
          <div class="swiper-primary-button-next"></div>
          <div class="swiper-counter">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<?php }?>