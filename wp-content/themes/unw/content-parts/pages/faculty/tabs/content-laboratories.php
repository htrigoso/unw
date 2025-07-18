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
      <ul class="swiper-wrapper laboratories__list">
        <?php
        if ($card_items) :
          foreach ($card_items as $item) :
            $post_id = $item->ID;
            $title = get_the_title($post_id);
            $excerpt = get_the_excerpt($post_id);
            $photo = get_the_post_thumbnail_url($post_id, 'full') ?: get_template_directory_uri() . '/upload/careers/infra/default.jpg';
        ?>
            <li class="swiper-slide laboratories__item">
              <?php
              get_template_part(COMMON_CONTENT_PATH, 'infra-card', [
                'title' => esc_html($title),
                'excerpt' => esc_html($excerpt),
                'photo' => esc_url($photo),
              ]);
              ?>
            </li>
        <?php
          endforeach;
        endif;
        ?>
      </ul>
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-navigation">
      <div class="swiper-primary-button-prev"></div>
      <div class="swiper-primary-button-next"></div>
    </div>
  </div>
</section>
