<?php
$purpose = get_field('purpose');

if ( $purpose && is_array($purpose) ) :
?>
<section class="us-purpose">
  <div class="x-container x-container--pad-213 us-purpose__wrapper">
    <span class="us-purpose__label"><?= $purpose['title']; ?></span>
    <h2 class="us-purpose__title"><?= $purpose['description']; ?></h2>

    <?php if ( !empty($purpose['list']) && is_array($purpose['list']) ) : ?>
      <div class="purpose-swiper post-swiper">
        <div class="swiper-container">
          <ul class="swiper-wrapper purpose-swiper__list">
            <?php foreach ($purpose['list'] as $item) : ?>
              <li class="swiper-slide purpose-swiper__item">
                <article class="purpose-card">
                  <img src="<?= $item['icon']['url']; ?>"
                       alt="<?= $item['icon']['alt'] ?? ''; ?>"
                       aria-hidden="true"
                       class="purpose-card__icon lazyload" />
                  <span class="purpose-card__title"><?= $item['title']; ?></span>
                  <p class="purpose-card__description"><?= $item['description']; ?></p>
                </article>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="purpose-swiper__navigation">
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
  </div>
</section>
<?php endif; ?>
