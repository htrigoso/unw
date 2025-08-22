<?php
$more = get_field('more');


if ($more && is_array($more)) :
?>
<section class="us-more">
  <div class="x-container x-container--pad-213 us-more__wrapper">
    <h3 class="us-more__title"><?php echo esc_html($more['title']); ?></h3>
    <div class="us-more__list">
      <?php foreach ($more['list'] as $card): ?>
        <a class="us-more__item" href="<?php echo esc_url($card['link']['url']); ?>"
           target="<?php echo esc_attr($card['link']['target']); ?>">
          <img class="us-more__item--image"
               src="<?php echo esc_url($card['image']['url']); ?>"
               alt="<?php echo esc_attr($card['image']['alt']); ?>">
          <div class="us-more__item--overlay">
            <div class="us-more__item--content">
              <h4 class="us-more__item--title"><?php echo esc_html($card['title']); ?></h4>
              <i class="us-more__item--icon">
                <svg width="24" height="24">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </i>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
