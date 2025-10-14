<?php
$slider = get_field('slider');
?>

<?php if (!empty($slider)) : ?>
<div class="carousel post-swiper">
  <div class="swiper-container">
    <div class="swiper-wrapper carousel__list">
      <?php foreach ($slider as $slide) : ?>
      <?php
            $image_url = esc_url($slide['image']['url']);
            $image_alt = esc_attr($slide['image']['alt']) ?: 'Slide image';
            $description = wp_kses_post($slide['description']);
          ?>
      <div class="swiper-slide carousel__item">
        <article class="carousel__content">
          <img src="<?=placeholder() ?>" data-src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"
            class="carousel__content--image lazyload" />
          <p class="carousel__content--description"><?php echo $description; ?></p>
        </article>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="carousel__swiper-navigation">
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
<?php endif; ?>