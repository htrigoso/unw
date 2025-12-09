<?php

/**
 * Template Name: Landing Template
 */

set_query_var('ASSETS_CHUNK_NAME', 'landing');
set_query_var('NAVBAR_COLOR', '');
get_header();

get_template_part(GENERAL_CONTENT_PATH, 'navbar');
?>

<main>
  <?php if (have_rows('sections')): ?>
  <?php while (have_rows('sections')): the_row(); ?>
  <?php
      // Detecta el layout actual
      $layout = get_row_layout();
      $data = get_row(true); // Obtener toda la data del repeater actual

      // Pasar data a todos los templates mediante query_var
      set_query_var('section_data', $data);

      // Map de layouts a sus templates
      $template_map = [
        'section-hero' => 'hero',
        'section-content' => 'content',
        'section-grid-card' => 'grid-card-v1',
        'section-carousel' => 'carousel',
        'section-image' => 'image',
        'section-grid-card-v2' => 'grid-card-v2',
        'section-grid-card-v3' => 'grid-card-v3',
        'section-acordeon' => 'acordeon',
      ];

      if (isset($template_map[$layout])) {
        get_template_part(LANDING_CONTENT_PATH, $template_map[$layout]);
      } else {
        // Debug mode (remover en producción)
        if (defined('WP_DEBUG') && WP_DEBUG) {
          echo "<!-- Layout no reconocido: " . esc_html($layout) . " -->";
        }
      }
      ?>
  <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>