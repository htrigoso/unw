<?php
$infrastructure = $args['infrastructure'] ?? null;
$infra_items = $infrastructure['list'] ?? [];
?>

<?php if (wp_is_nonempty_array($infra_items)): ?>
<section class="infrastructure" aria-labelledby="infrastructure-title">
  <div class="infrastructure__wrapper">

    <!-- Header -->
    <header class="infrastructure__header">
      <h2 id="infrastructure-title" class="infrastructure__title">
        <?php echo esc_html($infrastructure['title'] ?? 'Infraestructura Especializada'); ?>
      </h2>
      <?php if (!empty($infrastructure['description'])): ?>
      <div class="infrastructure__description" data-content="paragraph">
        <?php echo wp_kses_post(wpautop($infrastructure['description'])); ?>
      </div>
      <?php endif; ?>
    </header>

    <!-- Content -->
    <div class="infrastructure__content">
      <div class="infra-swiper post-swiper-desktop switch-pagination-navigation" data-width="compact">
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
              <?php
                  get_template_part(COMMON_CONTENT_PATH, 'infra-card', [
                    'title' => $title,
                    'excerpt' => $excerpt,
                    'photo' => $photo,
                  ]);
                  ?>
            </li>
            <?php endforeach;

              wp_reset_postdata();
              $post = $original_post;
              ?>
          </ul>
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

  </div>
</section>
<?php endif; ?>