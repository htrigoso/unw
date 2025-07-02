<?php
$infrastructure = $args['infrastructure'] ?? null;
$infra_items = $infrastructure['list'] ?? [];
?>

<?php if (!empty($infra_items) && is_array($infra_items)): ?>
<section class="infrastructure" aria-labelledby="infrastructure-title">
  <div class="infrastructure__wrapper">

    <!-- Header -->
    <header class="infrastructure__header">
      <h2 id="infrastructure-title" class="infrastructure__title">
        <?php echo esc_html($infrastructure['title'] ?? 'Infraestructura Especializada'); ?>
      </h2>
      <?php if (!empty($infrastructure['description'])): ?>
      <div class="infrastructure__description">
        <?php echo wp_kses_post(wpautop($infrastructure['description'])); ?>
      </div>
      <?php endif; ?>
    </header>

    <!-- Content -->
    <div class="infrastructure__content">
      <div class="post-swiper-desktop" data-width="wide">
        <div class="swiper-container">
          <ul class="swiper-wrapper infrastructure__list">
            <?php
            global $post;
            $original_post = $post;

            foreach ($infra_items as $item):
              if (!($item instanceof WP_Post)) continue;

              $post = $item;
              setup_postdata($post);

              $title = get_the_title();
              $photo = get_the_post_thumbnail_url(null, 'full') ?: get_template_directory_uri() . '/upload/careers/infra/default.jpg';
              $excerpt = get_the_excerpt();
            ?>
            <li class="swiper-slide infrastructure__item">
              <article class="infrastructure-card">
                <div class="infrastructure-card__image">
                  <img width="128" height="128" src="<?php echo esc_url($photo); ?>"
                    alt="Foto de <?php echo esc_attr($title); ?>" />
                </div>
                <div class="infrastructure-card__body">
                  <h3 class="infrastructure-card__name"><?php echo esc_html($title); ?></h3>
                  <?php if (!empty($excerpt)): ?>
                  <p class="infrastructure-card__description"><?php echo esc_html($excerpt); ?></p>
                  <?php endif; ?>
                </div>
              </article>
            </li>
            <?php endforeach;

            wp_reset_postdata();
            $post = $original_post;
            ?>
          </ul>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>
