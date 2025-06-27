<?php
$malla_curricular = $args['malla_curricular'] ?? null;

$dot_colors = ['purple', 'gray', 'blue', 'orange', 'dark-blue'];
$lists = $malla_curricular['lists'] ?? [];
$link = $malla_curricular['link'] ?? null;
?>

<section class="program-curriculum" aria-labelledby="program-curriculum-title">
  <div class="program-curriculum__wrapper">
    <div class="program-curriculum__header">
      <h1 id="program-curriculum-title" class="program-curriculum__title">
        <?php echo esc_html($malla_curricular['title'] ?? 'Malla Curricular'); ?>
      </h1>
      <div class="program-curriculum__description">
        <?php echo wp_kses_post(wpautop($malla_curricular['content'] ?? '')); ?>
      </div>
    </div>

    <div class="program-curriculum__content" aria-label="Listado de cursos por ciclo">
      <div class="post-swiper">
        <div class="swiper-container">
          <ul class="swiper-wrapper program-curriculum__cycles-list">
            <?php foreach ($lists as $list): ?>
            <div class="swiper-slide">
              <li class="program-curriculum__cycles-item">
                <article class="cycle-card">
                  <div class="cycle-card__wrapper">
                    <header class="cycle-card__header">
                      <?php if (!empty($list['icon']['url'])): ?>
                      <img class="cycle-card__header-icon" width="80" height="80"
                        src="<?php echo esc_url($list['icon']['url']); ?>" alt="" />
                      <?php endif; ?>
                    </header>
                    <div class="cycle-card__content">
                      <ul class="cycle-card__list">
                        <?php foreach ($list['courses'] as $i => $course):
                            $dot_color = $dot_colors[$i % count($dot_colors)];
                            $thumbnail_url = get_the_post_thumbnail_url($course->ID, 'full');
                          ?>
                        <li class="cycle-card__item">
                          <span class="dot dot--<?php echo $dot_color; ?>" aria-hidden="true"></span>
                          <div class="cycle-card__course">
                            <?php if (!empty($thumbnail_url)): ?>
                            <img class="cycle-card__course-icon" src="<?php echo esc_url($thumbnail_url); ?>" alt="" />
                            <?php endif; ?>
                            <p class="cycle-card__course-name"><?php echo esc_html($course->post_title ?? ''); ?></p>
                          </div>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </article>
              </li>
            </div>
            <?php endforeach; ?>
          </ul>
          <div class="swiper-pagination"></div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </div>

    <?php if (!empty($link['url']) && !empty($link['title'])): ?>
    <div class="program-curriculum__footer">
      <a class="btn btn-primary" href="<?php echo esc_url($link['url']); ?>"
        target="<?php echo esc_attr($link['target'] ?? '_self'); ?>">
        <?php echo esc_html($link['title']); ?>
        <svg width="24" height="24" aria-hidden="true">
          <use xlink:href="#arrow-down"></use>
        </svg>
      </a>
    </div>
    <?php endif; ?>
</section>
