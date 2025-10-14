<?php
$promote = get_field('promote');

if ($promote && is_array($promote)) :
?>
  <section class="promote">
    <div class="x-container x-container--pad-213 promote__wrapper">
      <h2 class="promote__title"><?= esc_html($promote['title']); ?></h2>
      <div class="promote-swiper post-swiper" data-width="compact">
        <div class="swiper-container">
          <div class="swiper-wrapper promote-swiper__list">
            <?php foreach ($promote['list'] as $card) : ?>
              <div class="swiper-slide promote-swiper__item">
                <article class="promote-card">
                  <div>
                    <img class="promote-card__icon lazyload" src="<?= placeholder() ?>"
                      data-src="<?= esc_url($card['icon']['url']); ?>" alt="<?= esc_attr($card['icon']['alt']); ?>"
                      aria-hidden="true">
                  </div>
                  <span class="promote-card__title"><?= esc_html($card['title']); ?></span>
                  <p class="promote-card__description"><?= esc_html($card['description']); ?></p>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="swiper-navigation" data-size="absolute">
          <div class="swiper-primary-button-prev" data-size="absolute"></div>
          <div class="swiper-primary-button-next" data-size="absolute"></div>
          <div class="swiper-counter" data-size="absolute">
            <div class="swiper-pagination" data-size="absolute"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
