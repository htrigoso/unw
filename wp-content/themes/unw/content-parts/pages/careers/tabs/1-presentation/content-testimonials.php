<?php
$testimonials_info = $args['testimonials_info'] ?? null;

// Validación sólida
if (
  is_array($testimonials_info) &&
  !empty($testimonials_info['testimonials']) &&
  is_array($testimonials_info['testimonials'])
) :
  $title = $testimonials_info['title'] ?? 'Testimonios';
  $testimonial_posts = $testimonials_info['testimonials'];
?>
  <section class="testimonial">
    <div class="testimonial__wrapper">
      <h2 class="testimonial__title"><?= wp_kses_post($title); ?></h2>

      <div class="post-swiper" data-width="wide">
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
      </div>
    </div>
  </section>
<?php endif; ?>
