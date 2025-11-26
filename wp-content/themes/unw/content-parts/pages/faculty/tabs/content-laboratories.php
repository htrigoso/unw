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
    <div class="swiper-container" data-type-component="swiper">
      <div class="swiper-wrapper laboratories__list">
        <?php
        if ($card_items) :
          foreach ($card_items as $i => $item) :
            $post_id = $item->ID;
            $title = get_the_title($post_id);
            $excerpt = get_the_excerpt($post_id);
            $photo = get_the_post_thumbnail_url($post_id, 'full') ?: UPLOAD_PATH . '/careers/infra/default.jpg';

            $slides =  get_field('list', $post_id);
            $modal_id = 'laboratories-modal-' . $i;

            foreach ($slides as $slide) {
              $formatted_slides[] = [
                'image' => $slide['image']['url'] ?? '',
                'alt'   => $slide['image']['alt'] ?? '',
                'title' => $slide['title'] ?? ''
              ];
            }
        ?>
            <div class="swiper-slide laboratories__item" data-modal-target="<?= $modal_id ?>">
              <?php
              get_template_part(COMMON_CONTENT_PATH, 'infra-card', [
                'title' => esc_html($title),
                'description' => esc_html($excerpt),
                'photo' => esc_url($photo),
              ]);
              ?>
            </div>

            <?php
            get_template_part(COMMON_CONTENT_PATH, 'details-modal', [
              'id' => $modal_id,
              'slides' => $formatted_slides,
              'swiper_id' => 'laboratories-modal-swiper'
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
