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
                <?php
                get_template_part(COMMON_CONTENT_PATH, 'program-card', array(
                  'image' => $image,
                  'image_alt' => $alt,
                  'title' => $title_item,
                  'description' => $desc,
                  'link' => $link,
                  'link_title' => $link_title,
                  'link_target' => $link_target
                ));
                ?>
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
