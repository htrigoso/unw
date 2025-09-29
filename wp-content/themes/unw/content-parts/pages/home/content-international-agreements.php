<?php
$international = get_field('international-agreements');
$countries = $international['countries'] ?? [];
?>

<?php if (!empty($international) && !empty($countries)) : ?>
  <section class="international-agreements">
    <div class="x-container x-container--pad-213">
      <div class="international-agreements__wrapper">

        <?php if (!empty($international['title'])) : ?>
          <h2 class="international-agreements__title"><?php echo esc_html($international['title']); ?></h2>
        <?php endif; ?>

        <?php if (!empty($international['descripcion'])) : ?>
          <p class="international-agreements__subtitle">
            <?php echo wp_kses_post($international['descripcion']); ?>
          </p>
        <?php endif; ?>

        <div class="swiper-container swiper-agreements" style="width: auto;">
          <div class="swiper-wrapper international-agreements__items">
            <?php foreach ($countries as $country_post) : ?>
              <?php
              $country = [
                'name' => get_the_title($country_post),
                'file' => get_the_post_thumbnail_url($country_post->ID, 'full'),
              ];
              ?>
              <div class="swiper-slide international-agreements__item">
                <?php
                get_template_part(COMMON_CONTENT_PATH, 'country-card', [
                  'country' => $country
                ]);
                ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-navigation">
            <div class="swiper-primary-button-prev"></div>
            <div class="swiper-primary-button-next"></div>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php endif; ?>
