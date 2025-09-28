<?php



function custom_news_category_rewrite() {
    // Obtener todas las categorías existentes
    $terms = get_terms(array(
        'taxonomy' => 'categoria_novedad',
        'hide_empty' => false
    ));

    // Crear reglas solo para categorías que existen
    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            add_rewrite_rule(
                '^noticias/' . $term->slug . '/?$',
                'index.php?categoria_novedad=' . $term->slug,
                'top'
            );
        }
    }
}
add_action('init', 'custom_news_category_rewrite');


// Regenerar reglas cuando se modifica una categoría
function custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action('created_categoria_novedad', 'custom_flush_rewrite_rules');
add_action('edited_categoria_novedad', 'custom_flush_rewrite_rules');
add_action('delete_categoria_novedad', 'custom_flush_rewrite_rules');
