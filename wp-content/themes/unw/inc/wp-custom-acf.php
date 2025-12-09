<?php
add_action('acf/init', function() {
  if( function_exists('acf_register_block_type') ) {

    acf_register_block_type([
      'name'            => 'accordion',
      'title'           => __('Accordion'),
      'description'     => __('Bloque de Accordion reutilizable con ACF'),
      'render_template' => 'template-parts/components/accordion.php',
      'category'        => 'layout',
      'icon'            => 'menu-alt',
      'keywords'        => ['accordion', 'tabs', 'toggle'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);

    acf_register_block_type([
      'name'            => 'cards',
      'title'           => __('Cards'),
      'description'     => __('Bloque de Cards reutilizable con ACF'),
      'render_template' => 'template-parts/components/cards.php',
      'category'        => 'layout',
      'icon'            => 'menu-alt',
      'keywords'        => ['cards', 'tabs', 'toggle'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);
     // Bloque Sidebar
    acf_register_block_type([
      'name'            => 'sidebar',
      'title'           => __('Sidebar'),
      'description'     => __('Bloque de Sidebar personalizado con ACF'),
      'render_template' => 'template-parts/components/sidebar.php',
      'category'        => 'layout',
      'icon'            => 'columns',
      'keywords'        => ['sidebar', 'aside', 'column'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);

    // Bloque Sidebar
    acf_register_block_type([
      'name'            => 'contact',
      'title'           => __('Contacto'),
      'description'     => __('Bloque de Contacto personalizado con ACF'),
      'render_template' => 'template-parts/components/contact.php',
      'category'        => 'layout',
      'icon'            => 'columns',
      'keywords'        => ['contact', 'form', 'information'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);
  }
});



add_filter('acf/fields/flexible_content/layout_title/name=sections', function($title, $field, $layout, $i) {

    $preview_images = [
        'section-hero'   => get_template_directory_uri() . '/assets/images/sections/section-1.png',
        'section-content'   => get_template_directory_uri() .'/assets/images/sections/section-2.png',
        'section-grid-card'   => get_template_directory_uri() . '/assets/images/sections/section-3.png',
        'section-carousel'   => get_template_directory_uri() . '/assets/images/sections/section-4.png',
        'section-image'      => get_template_directory_uri() . '/assets/images/sections/section-5.png',
        'section-grid-card-v2'      => get_template_directory_uri() . '/assets/images/sections/section-6.png',
        'section-grid-card-v3'      => get_template_directory_uri() . '/assets/images/sections/section-7.png',
        'section-acordeon'      => get_template_directory_uri() . '/assets/images/sections/section-8.png',
    ];

     if (isset($preview_images[$layout['name']])) {
        $img_url = esc_url($preview_images[$layout['name']]);

        $preview = '
        <span class="acf-layout-preview">
            <img class="thumbnail" src="' . $img_url . '" />
            <span class="acf-tooltip-img">
                <img src="' . $img_url . '" />
            </span>
        </span> ' . $title;
    }

    return $preview;
}, 10, 4);


add_action('admin_enqueue_scripts', function() {
    wp_enqueue_style('acf-layout-preview', get_template_directory_uri() . '/assets/css/acf-layout-preview.css');
});


/**
 * Oculta el campo "Contenido completo" y su acordeón padre "Contenido"
 * solo en el post type 'novedades'
 */
add_action('acf/input/admin_head', function() {
    global $post;

    if (isset($post) && $post->post_type === 'novedades') {
        ?>
<style>
/* Oculta el acordeón con name="contenido" */
[data-name="contenido"] {
  display: none !important;
}

/* Por si el campo 'content' queda fuera del acordeón */
[data-name="content"] {
  display: none !important;
}
</style>
<?php
    }
});


function is_whatsapp_blocked($wa_config) {
    global $post;

    if (!($post instanceof WP_Post)) {
        return false;
    }

    $blocked_pages = $wa_config['block_pages'] ?? [];

    if (!empty($blocked_pages) && is_array($blocked_pages)) {
        foreach ($blocked_pages as $blocked_page) {
            if ($blocked_page instanceof WP_Post && $blocked_page->ID === $post->ID) {
                return true;
            }
        }
    }

    return false;
}