<?php
$infrastructure = $args['infrastructure'] ?? null;
$infra_items = $infrastructure['list'] ?? [];
?>

<?php if (wp_is_nonempty_array($infra_items)) : ?>
  <section class="infrastructure" aria-labelledby="infrastructure-title">
    <div class="infrastructure__wrapper">
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

      <?php
      global $post;
      $original_post = $post;
      $gallery_items = [];

      foreach ($infra_items as $item) {
        if (!($item instanceof WP_Post)) continue;
        $post = $item;
        setup_postdata($post);

        $gallery_items[] = [
          'title'       => get_the_title(),
          'description' => get_the_excerpt(),
          'photo'       => get_the_post_thumbnail_url(null, 'full') ?: get_template_directory_uri() . '/upload/careers/infra/default.jpg',
        ];
      }
      wp_reset_postdata();
      $post = $original_post;
      ?>

      <div class="infrastructure__content">
        <?php
        get_template_part(COMMON_CONTENT_PATH, 'infra-gallery', [
          'items'           => $gallery_items,
          'swiper_id'       => 'infra-swiper',
          'modal_id'        => 'infra-details-modal',
          'modal_swiper_id' => 'infra-modal-swiper'
        ]);
        ?>
      </div>
    </div>
  </section>
<?php endif; ?>
