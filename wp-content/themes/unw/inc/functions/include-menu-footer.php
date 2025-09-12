<?php
class Custom_Menu_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_names . '>';

        // Si el enlace es "#", mostramos un <h4>
        if ($item->url === '#') {
            $output .= '<h4 class="menu-heading">' . esc_html($item->title) . '</h4>';
        } else {
            $attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url)        ? ' href="' . esc_attr($item->url) . '"' : '';

            $output .= '<a' . $attributes . '>' . esc_html($item->title) . '</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = []) {
        $output .= "</li>\n";
    }
}
