<?php

/**
 * register option page
 */
add_action('acf/init', 'acf_options_init');
function acf_options_init()
{
  global $locale;

  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => 'General', 'unw',
      'menu_title' => 'Configuración ' . get_bloginfo('name'),
      'menu_slug' => 'website-general-settings',
      'capability' => 'publish_posts',
      'redirect' => false
    ));
    acf_add_options_sub_page(array(
      'page_title' => 'Encabezado', 'unw',
      'menu_title' => 'Encabezado', 'unw',
      'menu_slug' => 'website-header-settings',
      'parent_slug' => 'website-general-settings',
      'redirect' => false
    ));
    acf_add_options_sub_page(array(
      'page_title' => 'Pie de página', 'unw',
      'menu_title' => 'Pie de página', 'unw',
      'menu_slug' => 'website-footer-settings',
      'parent_slug' => 'website-general-settings',
      'redirect' => false
    ));
  }
}


