<?php
$programs = get_field('porgrams');
$title = $programs['title'] ?? 'Nuestros programas están pensados para ti.';
$lists = $programs['lists'] ?? [];
?>

<?php if (!empty($programs) && is_array($programs)): ?>
<section class="programs">
  <div class="x-container x-container--pad-213 programs__wrapper">
    <h2 class="programs__title"><?php echo esc_html($title); ?></h2>

    <div class="post-swiper-desktop switch-pagination-navigation" data-width="compact">
      <div class="swiper-container">
        <div class="swiper-wrapper programs__cards">
          <?php foreach ($lists as $program):
            $image = $program['image']['url'] ?? '';
            $alt = $program['image']['alt'] ?? $program['title'] ?? '';
            $title_item = $program['title'] ?? '';
            $desc = $program['description'] ?? '';
            $link = $program['link']['url'] ?? '#';
            $link_title = $program['link']['title'] ?? 'Ver carreras';
            $link_target = $program['link']['target'] ?? '_self';
          ?>
          <div class="swiper-slide">
            <article class="programs__card">
              <?php if ($image): ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>"
                class="programs__card--img" />
              <?php endif; ?>
              <div class="programs__card--content">
                <h3 class="programs__card--content__title"><?php echo esc_html($title_item); ?></h3>
                <p class="programs__card--content__description"><?php echo esc_html($desc); ?></p>
                <?php if (!empty($link)): ?>
                <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>"
                  class="btn btn-primary programs__card--content__cta">
                  <?php echo esc_html($link_title); ?>
                  <i>
                    <svg class="icon icon--arrow" width="24" height="24">
                      <use xlink:href="#arrow-right"></use>
                    </svg>
                  </i>
                </a>
                <?php endif; ?>
              </div>
            </article>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="swiper-navigation">
        <div class="post-swiper-button-prev"></div>
        <div class="post-swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
