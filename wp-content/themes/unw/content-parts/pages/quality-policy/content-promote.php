<?php
$promote = get_field('promote');

if ($promote && is_array($promote)) :
?>
<section class="promote">
  <div class="x-container x-container--pad-213 promote__wrapper">
    <h2 class="promote__title"><?= esc_html($promote['title']); ?></h2>
    <div class="promote-swiper post-swiper">
      <div class="swiper-container">
        <ul class="swiper-wrapper promote-swiper__list">
          <?php foreach ($promote['list'] as $card) : ?>
          <li class="swiper-slide promote-swiper__item">
            <div class="promote-card">
              <div>
                <img class="promote-card__icon" src="<?= esc_url($card['icon']['url']); ?>"
                  alt="<?= esc_attr($card['icon']['alt']); ?>" aria-hidden="true">
              </div>
              <span class="promote-card__title"><?= esc_html($card['title']); ?></span>
              <p class="promote-card__description"><?= esc_html($card['description']); ?></p>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>