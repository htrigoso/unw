<?php

class Sidebar_Menu_Walker extends Walker_Nav_Menu {

  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $output .= "\n<ul class=\"sidebar__submenu-list\">\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $output .= "</ul>\n</div>\n"; // Cierra submenu-list y contenedor
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $has_children = in_array('menu-item-has-children', $classes);
    $class_names = implode(' ', $classes);

    $output .= '<li class="sidebar__menu-item ' . esc_attr($class_names) . '">';

    if ($has_children) {
      // No navegar, solo activar submenú
      $output .= '<a href="javascript:void(0)" class="sidebar__menu-link">';
      $output .= esc_html($item->title);
      $output .= '<svg width="24" height="24" aria-hidden="true"><use xlink:href="#forward"></use></svg>';
      $output .= '</a>';
      $output .= '<div class="sidebar__submenu">';
      $output .= '<button class="sidebar__submenu-back" aria-label="Regresar al menú anterior">';
      $output .= '<svg width="24" height="24" aria-hidden="true"><use xlink:href="#back"></use></svg>';
      $output .= esc_html($item->title);
      $output .= '</button>';
    } else {
      $output .= '<a href="' . esc_url($item->url) . '" class="sidebar__menu-link">' . esc_html($item->title) . '</a>';
    }
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $output .= "</li>\n";
  }
}
