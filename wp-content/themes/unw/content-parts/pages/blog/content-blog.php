<?php
$paged          = get_query_var('paged') ?: 1;
$search_term    = get_query_var('s') ?: '';
$posts_per_page = 20;

// Detectar contexto actual (categoría o tag)
$current_object = get_queried_object();
$taxonomy_type  = null;
$term_id        = 0;

if (is_category()) {
  $taxonomy_type = 'category';
  $term_id       = $current_object->term_id;
} elseif (is_tag()) {
  $taxonomy_type = 'tag';
  $term_id       = $current_object->term_id;
}

// Configurar query
$args = [
  'post_type'      => 'post',
  'posts_per_page' => $posts_per_page,
  'paged'          => $paged,
  'post_status'    => 'publish',
];

// Aplicar filtros de taxonomía
if ($taxonomy_type === 'category') {
  $args['cat'] = $term_id;
} elseif ($taxonomy_type === 'tag') {
  $args['tag_id'] = $term_id;
}

// Aplicar búsqueda
if ($search_term) {
  $args['s'] = $search_term;
}

$wp_query = new WP_Query($args);

$cta      = get_field('cta');
?>

<section class="blog">
  <div class="x-container x-container--pad-213">
    <div class="blog__wrapper">

      <!-- Buscador -->
      <div class="blog-search">
        <?php get_template_part(BLOG_CONTENT_PATH, 'search-form'); ?>
      </div>

      <!-- Tabs dinámicos -->

      <div class="blog__tabs">
        <?php

          // $tabs = is_tag() ? get_tag_tabs() : get_category_tabs();

          // get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
          //   'nav_tabs'         => $tabs,
          //   'is_url'           => true,
          //   'active_id'        => $term_id,
          //   'show_icon_remove' => true,
          //   'show_controls'=>true
          // ]);
          ?>
      </div>


      <!-- Contenido -->
      <div class="blog-content">
        <div class="blog-content__results">

          <?php if ($wp_query->have_posts()) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <?php
              $categories = get_post_category_names(get_the_ID());
              $first_category = !empty($categories) ? $categories[0]['name'] : '';

              get_template_part(COMMON_CONTENT_PATH, 'entry-card', [
                'image'   => get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: UPLOAD_PATH . '/default-image.jpg',
                'title'   => get_the_title(),
                'date'    => get_the_date('j') . ' de ' . get_the_date('F') . ' del ' . get_the_date('Y'),
                'content' => get_the_excerpt(),
                'href'    => get_permalink(),
                'tags'    => $categories,
                'content_type' => 'Blog',
                'content_id' => get_the_ID(),
                'category_tag' => $first_category,
              ]);
              ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p>No se encontraron resultados para tu búsqueda.</p>
          <?php endif; ?>
        </div>

        <!-- Paginación -->
        <?php
        get_template_part(GENERAL_CONTENT_PATH, 'pagination', [
          'search_term' => $search_term,
          'wp_query'    => $wp_query,
        ]);
        ?>

        <!-- CTA Newsletter -->
        <?php if (!empty($cta['link'])) :
          $link = $cta['link']; ?>
        <div class="blog-newsletter">
          <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary-one btn-sm blog-newsletter__btn"
            target="<?php echo esc_attr($link['target']); ?>">
            <?php echo esc_html($link['title']); ?>
            <i>
              <svg class="icon" width="32" height="32">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </i>
          </a>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
