<?php
$testimonial_data = get_field('testimonials');

$testimonial_posts = $testimonial_data['testimonials'] ?? [];

?>

<?php if (!empty($testimonial_data) && is_array($testimonial_data)): ?>
<section class="testimonial">
  <div class="x-container x-container--pad-213">
    <div class="testimonial__wrapper">
      <h2 class="testimonial__title">
        <?php echo esc_html($testimonial_data['title'] ?? 'Experiencias U. Wiener'); ?>
      </h2>

      <div class="post-swiper testimonial-swiper switch-pagination-navigation">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($testimonial_posts as $testimonial_post) :
              $info = get_field('info-testimonio', $testimonial_post->ID);
              $testimonial_data = [
                'name'        => get_the_title($testimonial_post),
                'title'       => $info['program_name'] ?? '',
                'description' => $info['testimonial_text'] ?? '',
                'footer'      => $info['institution_name'] ?? '',
                'image'       => get_the_post_thumbnail_url($testimonial_post->ID, 'full') ?: '',
              ];
            ?>
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
          <div class="post-swiper-button-prev"></div>
          <div class="post-swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>