<?php
$quote = get_field('quote');
if ( $quote && is_array($quote) ) :
?>

<section class="us-quote">
  <div class="x-container x-container--pad-213 us-quote__wrapper">
    <h3 class="us-quote__title"><?= $quote['title']; ?></h3>
    <div class="us-quote__card">
      <div class="us-quote__card__right">
        <picture class="us-quote__card__picture">
          <source srcset="<?= $quote['us-quote']['image']['desktop']['url']; ?>" media="(min-width: 768px)" />
          <img src="<?= $quote['us-quote']['image']['mobile']['url']; ?>"
            alt="<?= esc_attr($quote['us-quote']['image']['mobile']['alt']); ?>" class="us-quote__card__img" />
        </picture>
      </div>
      <div class="us-quote__card__left">
        <p class="us-quote__card__desc"><?= $quote['us-quote']['description']; ?></p>
        <p class="us-quote__card__name"><?= $quote['us-quote']['name']; ?></p>
        <span class="us-quote__card__year"><?= $quote['us-quote']['years']; ?></span>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>