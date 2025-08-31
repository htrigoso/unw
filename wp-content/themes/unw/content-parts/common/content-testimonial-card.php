<?php
$testimonial = $args['testimonial'];

// Imagen puede venir como string (custom) o como array (de ACF tipo imagen)
$image_url = $testimonial['image'] ?? '';
?>

<article class="testimonial__card">
  <?php if ($image_url): ?>
  <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($image_url); ?>"
    alt="<?php echo esc_attr($testimonial['title']); ?>" class="testimonial__card--img lazyload" />
  <?php endif; ?>

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