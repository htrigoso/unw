<?php

$certifications = get_field('certifications');
 if ( $certifications && is_array($certifications) ) :
?>

<section class="us-certifications">
  <div class="x-container x-container--pad-213 us-certifications__wrapper">
    <p class="us-certifications__label">
      <?= esc_html($certifications['title']); ?>
    </p>
    <h3 class="us-certifications__title">
      <?= esc_html($certifications['subtitle']); ?>
    </h3>
    <div class="certifications-swiper post-swiper">
      <div class="swiper-container">
        <div class="swiper-wrapper certifications-swiper__list">
          <?php foreach ($certifications['list'] as $group) : ?>
          <div class="swiper-slide certifications-swiper__item">

            <div class="certifications-card">
              <?php foreach ($group as $item) : ?>
              <div class="certifications-card__item">
                <div class="certifications-card__header">
                  <img src="<?= esc_url($item['icon']['url']); ?>" alt="<?= esc_attr($item['icon']['alt']); ?>"
                    aria-hidden="true" class="certifications-card__icon lazyload" />
                </div>
                <p class="certifications-card__desc">
                  <?= esc_html($item['description']); ?>
                </p>
              </div>
              <?php endforeach; ?>
            </div>

          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
