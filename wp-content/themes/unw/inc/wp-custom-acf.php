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
  }
});
