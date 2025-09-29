<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$search_term = get_query_var('s') ?: '';
$posts_per_page = 20;
$wp_query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => $posts_per_page,
  's'              => $search_term,
  'paged'          => $paged,
]);
$cta = get_field('cta');
?>

<section class="blog">
  <div class="x-container x-container--pad-213">
    <div class="blog__wrapper">
      <div class="blog-search">
        <?php get_template_part(BLOG_CONTENT_PATH, 'search-form'); ?>
      </div>
      <div class="blog-content">
        <div class="blog-content__results">
          <?php if ($wp_query->have_posts()) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <?php
              // Obtener tags del post
              $tags = get_the_tags(get_the_ID());
              $tag_names = [];

              if ($tags && !is_wp_error($tags)) {
                foreach ($tags as $tag) {
                  $tag_names[] = $tag->name;
                }
              }

              $result = [
                'image'   => get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: UPLOAD_PATH . '/default-image.jpg',
                'title'   => get_the_title(),
                'date'    => get_the_date('j') . ' de ' . ucfirst(get_the_date('F')) . ' del ' . get_the_date('Y'),
                'content' => get_the_excerpt(),
                'href'    => get_permalink(),
                'tags'    => $tag_names,
              ];
              get_template_part(COMMON_CONTENT_PATH, 'entry-card', $result);
              ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p>No se encontraron resultados para tu búsqueda.</p>
          <?php endif; ?>
        </div>

        <?php get_template_part(GENERAL_CONTENT_PATH, 'pagination', [
          'search_term' => $search_term,
          'wp_query'    => $wp_query,
        ]);?>

        <div class="blog-newsletter">
          <?php if (!empty($cta['link'])) :
              $link = $cta['link'];
          ?>
            <a href="<?php echo esc_url($link['url']); ?>"
              class="btn btn-primary-one btn-sm blog-newsletter__btn"
              target="<?php echo esc_attr($link['target']); ?>">
              <?php echo esc_html($link['title']); ?>
              <i>
                <svg class="icon" width="32" height="32">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </i>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
