<?php
$tags = get_the_tags();
$current_post_id = get_the_ID();

// --- ENTRADAS RELACIONADAS ("Te puede interesar") ---
$related_posts = [];
if (!empty($tags)) {
  $tag_ids = wp_list_pluck($tags, 'term_id');

  $args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => [$current_post_id],
    'tag__in' => $tag_ids,
    'ignore_sticky_posts' => true,
  ];

  $query = new WP_Query($args);
  if ($query->have_posts()) :
    while ($query->have_posts()) :
      $query->the_post();
      $related_posts[] = [
        "image" => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: UPLOAD_PATH . "/blog/cards/card-default.jpg",
        "title" => get_the_title(),
        "date" => get_the_date('F j, Y'),
        "content" => wp_trim_words(get_the_excerpt(), 25, '...'),
        "href" => get_permalink()
      ];
    endwhile;
    wp_reset_postdata();
  endif;
}

// --- MÁS LEÍDOS (por post_views_count) ---
$popular_posts = [];
$args_popular = [
  'post_type' => 'post',
  'posts_per_page' => 3,
  'meta_key' => 'post_views_count',
  'orderby' => 'meta_value_num',
  'order' => 'DESC',
  'post__not_in' => [$current_post_id],
  'ignore_sticky_posts' => true,
];

$popular_query = new WP_Query($args_popular);
if ($popular_query->have_posts()) :
  while ($popular_query->have_posts()) :
    $popular_query->the_post();
    $popular_posts[] = [
      "image" => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: UPLOAD_PATH . "/blog/cards/card-default.jpg",
      "title" => get_the_title(),
      "date" => get_the_date('F j, Y'),
      "content" => wp_trim_words(get_the_excerpt(), 25, '...'),
      "href" => get_permalink()
    ];
  endwhile;
  wp_reset_postdata();
endif;
?>

<div class="x-container">
  <section class="blog-detail">
    <article class="blog-detail__article">
      <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'entry-meta'); ?>

      <div class="x-container blog-detail__content">
        <div class="blog-detail__text" data-content="paragraph">
          <?php
          $contenido = get_field('content');
          if ($contenido) {
            echo $contenido;
          }
          ?>
        </div>

        <div class="blog-detail__actions">
          <?php if (!empty($tags)) : ?>
          <div class="blog-detail__tags">
            <?php foreach ($tags as $tag) : ?>
            <span class="blog-detail__tag"><?php echo esc_html($tag->name); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'social-meta'); ?>
        </div>
      </div>
    </article>

    <aside class="blog-detail__aside">
      <div class="blog-detail__aside-related">

        <?php if (!empty($related_posts)) : ?>
        <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'related-entries', [
            'title' => 'Te puede interesar',
            'related_posts' => $related_posts
          ]); ?>
        <?php endif; ?>

        <?php if (!empty($popular_posts)) : ?>
        <div class="blog-detail__aside-popular">
          <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'related-entries', [
            'title' => 'Los más leídos',
            'related_posts' => $popular_posts
          ]); ?>
        </div>
        <?php endif; ?>

      </div>
    </aside>
  </section>
</div>
