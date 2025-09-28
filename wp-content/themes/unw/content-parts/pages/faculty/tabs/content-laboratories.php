<?php
$postId = $args['id'];
$infrastructure = get_field('infrastructure', $postId);

$card_items = $infrastructure['list'];
?>

<section class="laboratories">
  <h2 class="laboratories--title"><?= esc_html($infrastructure['title']); ?></h2>

  <p class="laboratories--description">
    <?= esc_html($infrastructure['description']); ?>
  </p>

  <div class="laboratories-swiper post-swiper-desktop switch-pagination-navigation" data-width="compact">
    <div class="swiper-container">
      <div class="swiper-wrapper laboratories__list">
        <?php
        if ($card_items) :
          foreach ($card_items as $i => $item) :
            $post_id = $item->ID;
            $title = get_the_title($post_id);
            $excerpt = get_the_excerpt($post_id);
            $photo = get_the_post_thumbnail_url($post_id, 'full') ?: UPLOAD_PATH . '/careers/infra/default.jpg';

            $slides =  get_field('list', $post_id);

            $modal_id = 'laboratories-modal-' . $i
        ?>
        <div class="swiper-slide laboratories__item" data-modal-target="<?= $modal_id ?>">
          <?php
              get_template_part(COMMON_CONTENT_PATH, 'infra-card', [
                'title' => esc_html($title),
                'excerpt' => esc_html($excerpt),
                'photo' => esc_url($photo),
              ]);
              ?>
        </div>

        <?php
            ob_start();
            ?>
        <div class="laboratories-modal__content">
          <div class="laboratories-modal-swiper post-swiper">
            <div class="swiper-container">

              <?php if (!empty($slides) && is_array($slides)) : ?>
              <div class="swiper-wrapper laboratories-modal__list">
                <?php foreach ($slides as $slide) : ?>
                <div class="swiper-slide">
                  <article class="laboratories-modal__card">
                    <?php if (!empty($slide['image']['url'])) : ?>
                    <img src="<?php echo esc_url($slide['image']['url']); ?>"
                      alt="<?php echo esc_attr($slide['image']['alt'] ?? ''); ?>"
                      class="laboratories-modal__card--img" />
                    <?php endif; ?>

                    <?php if (!empty($slide['title'])) : ?>
                    <p class="laboratories-modal__card--desc">
                      <?php echo esc_html($slide['title']); ?>
                    </p>
                    <?php endif; ?>
                  </article>
                </div>
                <?php endforeach; ?>
              </div>

              <div class="swiper-navigation" data-size="responsive">
                <div class="swiper-primary-button-prev" data-size="responsive"></div>
                <div class="swiper-primary-button-next" data-size="responsive"></div>
              </div>

              <?php else : ?>
              <div class="laboratories-modal__empty">
                <p>No hay laboratorios disponibles en este momento.</p>
              </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
        <?php
            $content = ob_get_clean();
            ?>
        <?php
            get_template_part(COMMON_CONTENT_PATH, 'modal', [
              'content' => $content,
              'id' => $modal_id,
              'class' => 'laboratories-modal'
            ]);
            ?>
        <?php
          endforeach;
        endif;
        ?>
      </div>
    </div>
    <div class="swiper-navigation">
      <div class="swiper-primary-button-prev"></div>
      <div class="swiper-primary-button-next"></div>
    </div>
  </div>

  <div class="laboratories__more">
    <button class="btn btn-primary-one laboratories__more--btn">
      Ver más fotos
    </button>
  </div>
</section>