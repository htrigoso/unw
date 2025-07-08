<?php

class Desktop_Menu_Walker extends Walker_Nav_Menu {

    private $parent_item = null;
    private $child_titles = array();
    private $child_index = 0;

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ( $depth === 0 ) {
            $output .= "\n$indent<nav class=\"main-submenu-wrapper\">\n";
            $output .= "$indent\t<div class=\"main-submenu-wrapper__content\">\n";
            // Marcador temporal para insertar super-tab después
            $output .= "<!--SUPER_TAB_PLACEHOLDER-->\n";
            $output .= "$indent\t\t<ul class=\"sub-menu sub-menu-parent\">\n";
        } else {
            $output .= "\n$indent<ul class=\"sub-menu\">\n";
        }
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        $output .= "$indent</ul>\n";

        if ( $depth === 0 ) {
            // Generar super-tab
            $super_tab_content = '';
            if ( $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
                $super_tab_content .= "$indent\t\t<div class=\"super-tab\">\n";
                foreach ( $this->child_titles as $index => $button_title ) {
                    $super_tab_content .= "$indent\t\t\t<button data-id=\"{$index}\">{$button_title}</button>\n";
                }
                $super_tab_content .= "$indent\t\t</div>\n";
            }

            // Reemplazar el marcador con el contenido del super-tab
            $output = str_replace("<!--SUPER_TAB_PLACEHOLDER-->\n", $super_tab_content, $output);

            $output .= "$indent\t</div>\n";
            $output .= "$indent</nav>\n";
        }
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ( in_array( 'menu-item-has-children', $classes ) && $depth === 0 ) {
            $this->parent_item = $item;
            $this->child_titles = array(); // reinicia
            $this->child_index = 0; // reinicia contador
        }

        if ( $depth === 1 && $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
            $this->child_titles[] = $item->title;
        }

        if ( $depth === 0 ) {
            $classes[] = 'menu-item-parent-page';
        }

        $class_names = join( ' ', array_filter( $classes ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id_attr = '';
        if ( $depth === 1 && $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
            $id_attr = ' id="' . $this->child_index . '"';
            $this->child_index++;
        }

        $output .= $indent . '<li' . $class_names . $id_attr .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $link_classes = array();
        if ( $depth === 0 && in_array( 'menu-item-has-children', $classes ) ) {
            $link_classes[] = 'has-link-parent';
            $atts['href'] = 'javascript:void(0)';
        }

        if ( ! empty( $link_classes ) ) {
            $atts['class'] = implode( ' ', $link_classes );
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output  = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
