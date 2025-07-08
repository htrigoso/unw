<?php

class Desktop_Menu_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ( $depth === 0 ) {
            $output .= "\n$indent<nav class=\"main-submenu-wrapper\">\n";
            $output .= "$indent\t<div class=\"main-submenu-wrapper__content\">\n";
            $output .= "$indent\t\t<ul class=\"sub-menu sub-menu-parent\">\n";
        } else {
            $output .= "\n$indent<ul class=\"sub-menu\">\n";
        }
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        $output .= "$indent</ul>\n";

        if ( $depth === 0 ) {
            $output .= "$indent\t</div>\n";
            $output .= "$indent</nav>\n";
        }
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ( in_array( 'menu-item-has-children', $classes ) ) {
            $classes[] = 'menu-item-has-children';
        }

        // ✅ Agrega clase a TODOS los <li> de nivel 0
        if ( $depth === 0 ) {
            $classes[] = 'menu-item-parent-page';
        }

        $class_names = join( ' ', array_filter( $classes ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li' . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $link_classes = array();
        if ( $depth === 0 && in_array( 'menu-item-has-children', $classes ) ) {
            $link_classes[] = 'has-link-parent';
        }

        if ( ! empty( $link_classes ) ) {
            $atts['class'] = implode( ' ', $link_classes );
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        if ( $depth === 0 && in_array( 'menu-item-has-children', $classes ) ) {
            $atts['href'] = 'javascript:void(0)';
        }

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                if ( 'href' === $attr && $value === 'javascript:void(0)' ) {
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                } else {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
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
