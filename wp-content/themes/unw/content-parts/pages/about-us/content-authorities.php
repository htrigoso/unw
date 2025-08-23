<?php
$authorities = get_field('authorities');
if ( $authorities && is_array($authorities) ) :
?>
<section class="us-authorities">
  <div class="x-container x-container--pad-213 us-authorities__wrapper">
    <h3 class="us-authorities__title">
      <?= esc_html($authorities['title']); ?>
    </h3>
    <div class="authorities-swiper post-swiper" data-width="compact">
      <div class="swiper-container">
        <ul class="swiper-wrapper authorities-swiper__list">
          <?php foreach ($authorities['list'] as $card) : ?>
          <li class="swiper-slide authorities-swiper__item">
            <div class="authorities-card">
              <div class="authorities-card__header">
                <img src="<?= esc_url($card['image']['url']); ?>" alt="<?= esc_attr($card['image']['alt']); ?>"
                  class="authorities-card__img" />
              </div>
              <div class="authorities-card__body">
                <h4 class="authorities-card__body--name"><?= esc_html($card['name']); ?></h4>
                <span class="authorities-card__body--role"><?= esc_html($card['rol']); ?></span>
                <p class="authorities-card__body--desc"><?= esc_html($card['description']); ?></p>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="authorities-swiper__navigation">
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
  </div>
</section>
<?php endif; ?>