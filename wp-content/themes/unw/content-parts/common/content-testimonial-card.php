<?php
$testimonial = $args['testimonial'];
?>
<article class="testimonial__card">
  <img
    src="<?php echo get_template_directory_uri(); ?>/upload/home/testimonial/<?php echo esc_attr($testimonial['image']); ?>"
    alt="<?php echo esc_attr($testimonial['title']); ?>"
    class="testimonial__card--img" />
  <div class="testimonial__card--content">
    <h3 class="testimonial__card--content__title"><?php echo esc_html($testimonial['title']); ?></h3>
    <p class="testimonial__card--content__description">
      <?php echo esc_html($testimonial['description']); ?>
    </p>
    <span class="testimonial__card--content__name">
      <?php echo esc_html($testimonial['name']); ?>
    </span>
    <span>
      <?php echo esc_html($testimonial['footer']); ?>
    </span>
  </div>
</article>
