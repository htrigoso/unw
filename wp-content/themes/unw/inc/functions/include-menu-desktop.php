<?php

class Desktop_Menu_Walker extends Walker_Nav_Menu {

    private $parent_item = null;
    private $child_titles = array();
    private $child_index = 0;
    private $skip_children = false;

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ( $depth === 0 ) {
            $output .= "\n$indent<nav class=\"main-submenu-wrapper\">\n";
            $output .= "$indent\t<div class=\"main-submenu-wrapper__content\">\n";
            $output .= "$indent\t\t<div class=\"main-submenu-wrapper__main\">\n";
            // Marcador temporal para insertar submenu-tab después
            $output .= "<!--SUPER_TAB_PLACEHOLDER-->\n";
            $output .= "$indent\t\t\t<ul class=\"sub-menu sub-menu-parent\">\n";
        } else if ( $depth >= 1 && !$this->skip_children ) {
            $output .= "\n$indent<ul class=\"sub-menu\">\n";
        }
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ( $depth === 0 ) {
            $output .= "$indent</ul>\n";

            // Generar submenu-tab
            $super_tab_content = '';
            if ( $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
                $super_tab_content .= "$indent\t\t\t<div class=\"submenu-tab has-active\">\n";
                foreach ( $this->child_titles as $index => $button_title ) {
                    $active_class = ($index === 0) ? 'is-active' : '';
                    $super_tab_content .= "$indent\t\t\t\t<button class=\"$active_class\" data-id=\"{$index}\">{$button_title}</button>\n";
                }
                $super_tab_content .= "$indent\t\t\t</div>\n";
            }

            // Reemplazar el marcador con el contenido del submenu-tab
            $output = str_replace("<!--SUPER_TAB_PLACEHOLDER-->\n", $super_tab_content, $output);

            $output .= "$indent\t\t</div>\n"; // Cierra .main-submenu-wrapper__main
            $output .= "$indent\t</div>\n";   // Cierra .main-submenu-wrapper__content
            $output .= "$indent</nav>\n";

            // Reset skip_children after closing main level
            $this->skip_children = false;
        } else if ( $depth >= 1 && !$this->skip_children ) {
            $output .= "$indent</ul>\n";
        }
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ( in_array( 'menu-item-has-children', $classes ) && $depth === 0 ) {
            $this->parent_item = $item;
            $this->child_titles = array();
            $this->child_index = 0;

            // Set skip_children flag if parent has sub-menu-parent-tab
            $this->skip_children = in_array( 'sub-menu-parent-tab', $item->classes );
        }

        if ( $depth === 1 && $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
            $this->child_titles[] = $item->title;
        }

        // Skip processing children when skip_children is true and depth >= 2
        if ( $this->skip_children && $depth >= 2 ) {
            return;
        }

        if ( $depth === 0 ) {
            $classes[] = 'menu-item-parent-page';
        }



        $classes = array_filter( $classes );
  $id_attr = '';
        // si es el primer hijo, agregar is-active
        if ( $depth === 1 && $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ) ) {
            if ( $this->child_index === 0 ) {
                $classes[] = 'is-active';
            }
            $id_attr = ' id="' . $this->child_index . '"';
            $this->child_index++;
        }

        $class_names = '';
        if ( ! empty( $classes ) ) {
            $class_names = ' class="' . esc_attr( join( ' ', $classes ) ) . '"';
        }

        $output .= $indent . '<li' . $class_names . $id_attr .'>';

        // Verificar si estamos en elementos de nivel 1 dentro de un parent con sub-menu-parent-tab
        $is_simple_title = ($depth === 1 && $this->parent_item && in_array( 'sub-menu-parent-tab', $this->parent_item->classes ));

        if ( $is_simple_title ) {
            // Mostrar el template part en lugar del h1
            $title_attr = ! empty( $item->attr_title ) ? $item->attr_title : $item->title;
            $title_attr = apply_filters( 'nav_menu_item_title', $title_attr, $item, $args, $depth );

            // Capturar la salida del template part
            ob_start();
            set_query_var('array_index_name', $title_attr);
            get_template_part(GENERAL_CONTENT_PATH, 'custom-submenu');
            $template_output = ob_get_clean();

            $output .= $template_output;
        } else {
            // Comportamiento normal con enlaces
            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
            $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

            $link_classes = array();
            if ( $depth === 0 && in_array( 'menu-item-has-children', $classes ) ) {
                $link_classes[] = 'has-link-parent';
                $atts['href'] = 'javascript:mela(0)';
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

            // Verificar si el URL es "#" para renderizar como h4
            if ( $item->url === '#' ) {
                $item_output .= '<h4'. (isset($atts['class']) ? ' class="' . esc_attr($atts['class']) . '"' : '') .'>';
                $item_output .= $args->link_before . $title . $args->link_after;
                $item_output .= '</h4>';
            } else {
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . $title . $args->link_after;
                $item_output .= '</a>';
            }

            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        // Skip closing elements that weren't opened
        if ( $this->skip_children && $depth >= 2 ) {
            return;
        }

        $output .= "</li>\n";
    }
}
