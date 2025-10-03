<?php

$data = get_query_var('section_data', null);
$title = $data['title'] ?? '';
$cards = $data['cards'] ?? [];
$cta = $data['cta'] ?? [];
?>

<?php if (!empty($title) && !empty($cards)) : ?>
  <section class="grid-cards-v3">
    <div class="x-container x-container--pad-213">
      <div class="grid-cards-v3__wrapper">
        <h2 class="grid-cards-v3__title"><?php echo esc_html($title); ?></h2>

        <div class="grid-cards-v3__items">
          <?php foreach ($cards as $card) :
            $icon = $card['icon'] ?? null;
            $content = $card['content'] ?? '';
          ?>
            <article class="grid-cards-v3__item">
              <?php if ($icon) : ?>
                <img
                  src="<?= placeholder() ?>"
                  data-src="<?php echo esc_url($icon['url']); ?>"
                  alt="<?php echo esc_attr($icon['alt']); ?>"
                  class="lazyload grid-cards-v3__icon"
                  loading="lazy"
                  width="auto"
                  height="42" />
              <?php endif; ?>

              <div class="grid-cards-v3__description" data-content="paragraph">
                <?php
                echo wp_kses_post($content);
                ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <?php if (!empty($cta['title']) && !empty($cta['url'])) : ?>
          <div class="grid-cards-v3__cta-wrapper">
            <a href="<?php echo esc_url($cta['url']); ?>" class="btn btn-primary grid-cards-v3__cta-btn">
              <?php echo esc_html($cta['title']); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
