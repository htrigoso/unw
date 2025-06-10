<?php
/**
 * Nav Menu API: Walker_Nav_Menu class
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 4.6.0
 */

/**
 * Core class used to implement an HTML list of nav menu items.
 *
 * @since 3.0.0
 *
 * @see Walker
 */
class Continental_Walker_Menu extends Walker_Nav_Menu {
	/**
	 * What the class handles.
	 *
	 * @since 3.0.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var array
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array(
		'parent' => 'menu_item_parent',
		'id'     => 'db_id',
	);

  /**
   * Classname added to the nav menu items.
   * @var string
   */
  public $class_name = null;

  /**
   * Menu type
   * @var string
   */
  public $menu_type = false;

  /**
   * Constructor.
   */
  public function __construct($class_name, $menu_type = '') {
    $this->class_name = $class_name;
    $this->menu_type = $menu_type;
  }

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu', $this->class_name . '__sub-menu' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
	 *              to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output            Used to append additional content (passed by reference).
	 * @param WP_Post  $data_object       Menu item data object.
	 * @param int      $depth             Depth of menu item. Used for padding.
	 * @param stdClass $args              An object of wp_nav_menu() arguments.
	 * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
	 */
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$menu_item = $data_object;

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		$classes[] = $this->class_name . '__item';
		$classes[] = 'menu-item-' . $menu_item->ID;
    $classes[] = 'menu-item-depth-' . $depth;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param WP_Post  $menu_item Menu item data object.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string[] $classes   Array of the CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id   The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item The current menu item.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
		$atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
		if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $menu_item->xfn;
		}
		$atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
		$atts['aria-current'] = $menu_item->current ? 'page' : '';
		$atts['class'] = implode(' ', [
      $this->class_name . '__link',
      'menu-link-depth-' . $depth,
    ]);

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria-current The aria-current attribute.
		 * }
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title     The menu item's title.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

		$item_output  = $args->before;

    // Add back button before link
    if ( $depth > 0 && $this->isMobileMenu() && $this->isTitleOrSubTitle($classes) ) {
      $item_output .= $this->get_btn_back();
    }

    $item_output .=   '<a' . $attributes . '>';

    // Add link title.
    if ( in_array('menu-item-extra-link', $classes) ) {
      $item_output .=     '<span>' . $title . '</span>';
    } else {
      $item_output .=     $args->link_before . $title . $args->link_after;
    }

    // Icon arrow if has submenu and is navbar.
    if ( in_array('menu-item-has-children', $classes) && $this->isNavbarMenu() ) {
      $item_output .= $this->get_navbar_arrow_icon();
    }

    // Icon arrow if has submenu and is mobile.
    if ( in_array('menu-item-has-children', $classes) && $this->isMobileMenu() ) {
      $item_output .= $this->get_mobile_arrow_icon();
    }

    // Icon if menu-item-extra-link
    if ( in_array('menu-item-extra-link', $classes) ) {
      $item_output .= $this->get_extra_arrow_icon();
    }

		$item_output .=   '</a>';

    // Add close button after link
    if ( $depth > 0 && $this->isMobileMenu() && $this->isTitleOrSubTitle($classes) ) {
      $item_output .= $this->get_btn_close();
    }

		// $item_output .= $this->inner === false ? '</div>' : '';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $menu_item   Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 * @since 5.9.0 Renamed `$item` to `$data_object` to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output      Used to append additional content (passed by reference).
	 * @param WP_Post  $data_object Menu item data object. Not used.
	 * @param int      $depth       Depth of page. Not Used.
	 * @param stdClass $args        An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}

  private function isNavbarMenu() {
    return $this->menu_type === 'navbar-menu';
  }

  private function isMobileMenu() {
    return $this->menu_type === 'mobile-menu';
  }

  private function isTitleOrSubTitle($classes) {
    return in_array('menu-item-title', $classes) || in_array('menu-item-sub-title', $classes);
  }

  private function get_btn_back() {
    return '<button type="button" class="btn-icon ' . $this->class_name . '__item-back">' . $this->get_back_arrow_icon() . '</button>';
  }

  private function get_btn_close() {
    return '<button type="button" class="btn-icon ' . $this->class_name . '__item-close">' . $this->get_close_icon() . '</button>';
  }

  private function get_back_arrow_icon() {
    return '<i class="icon"><svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.16999 6.99998L7.29999 2.86998C7.51729 2.65139 7.63925 2.3557 7.63925 2.04748C7.63925 1.73926 7.51729 1.44357 7.29999 1.22498C7.19154 1.11563 7.0625 1.02884 6.92033 0.969607C6.77816 0.910377 6.62567 0.879883 6.47166 0.879883C6.31765 0.879883 6.16516 0.910377 6.02299 0.969607C5.88082 1.02884 5.75178 1.11563 5.64333 1.22498L0.696661 6.17165C0.587311 6.2801 0.500518 6.40914 0.441288 6.55131C0.382057 6.69348 0.351562 6.84597 0.351562 6.99998C0.351562 7.15399 0.382057 7.30648 0.441288 7.44865C0.500518 7.59082 0.587311 7.71986 0.696661 7.82831L5.64333 12.8333C5.75234 12.9414 5.88163 13.027 6.02377 13.085C6.16591 13.1431 6.31812 13.1725 6.47166 13.1716C6.6252 13.1725 6.77741 13.1431 6.91955 13.085C7.0617 13.027 7.19098 12.9414 7.29999 12.8333C7.51729 12.6147 7.63925 12.319 7.63925 12.0108C7.63925 11.7026 7.51729 11.4069 7.29999 11.1883L3.16999 6.99998Z" fill="currentColor"/></svg></i>';
  }

  private function get_navbar_arrow_icon() {
    return '<i class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9997 9.1697C16.8123 8.98345 16.5589 8.87891 16.2947 8.87891C16.0305 8.87891 15.7771 8.98345 15.5897 9.1697L11.9997 12.7097L8.4597 9.1697C8.27234 8.98345 8.01889 8.87891 7.7547 8.87891C7.49052 8.87891 7.23707 8.98345 7.0497 9.1697C6.95598 9.26266 6.88158 9.37326 6.83081 9.49512C6.78004 9.61698 6.75391 9.74769 6.75391 9.8797C6.75391 10.0117 6.78004 10.1424 6.83081 10.2643C6.88158 10.3861 6.95598 10.4967 7.0497 10.5897L11.2897 14.8297C11.3827 14.9234 11.4933 14.9978 11.6151 15.0486C11.737 15.0994 11.8677 15.1255 11.9997 15.1255C12.1317 15.1255 12.2624 15.0994 12.3843 15.0486C12.5061 14.9978 12.6167 14.9234 12.7097 14.8297L16.9997 10.5897C17.0934 10.4967 17.1678 10.3861 17.2186 10.2643C17.2694 10.1424 17.2955 10.0117 17.2955 9.8797C17.2955 9.74769 17.2694 9.61698 17.2186 9.49512C17.1678 9.37326 17.0934 9.26266 16.9997 9.1697Z" fill="currentColor"/></svg></i>';
  }

  private function get_mobile_arrow_icon() {
    return '<i class="icon"><svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.30197 6.17165L2.3553 1.22498C2.24684 1.11563 2.11781 1.02884 1.97564 0.969607C1.83347 0.910377 1.68098 0.879883 1.52697 0.879883C1.37295 0.879883 1.22046 0.910377 1.07829 0.969607C0.936124 1.02884 0.80709 1.11563 0.698633 1.22498C0.48134 1.44357 0.359375 1.73926 0.359375 2.04748C0.359375 2.3557 0.48134 2.65139 0.698633 2.86998L4.82863 6.99998L0.698633 11.13C0.48134 11.3486 0.359375 11.6443 0.359375 11.9525C0.359375 12.2607 0.48134 12.5564 0.698633 12.775C0.807646 12.8831 0.936932 12.9687 1.07908 13.0267C1.22122 13.0848 1.37343 13.1142 1.52697 13.1133C1.68051 13.1142 1.83271 13.0848 1.97486 13.0267C2.117 12.9687 2.24629 12.8831 2.3553 12.775L7.30197 7.82831C7.41132 7.71986 7.49811 7.59082 7.55734 7.44865C7.61657 7.30648 7.64706 7.15399 7.64706 6.99998C7.64706 6.84597 7.61657 6.69348 7.55734 6.55131C7.49811 6.40914 7.41132 6.2801 7.30197 6.17165Z" fill="currentColor"/></svg></i>';
  }

  private function get_extra_arrow_icon() {
    return '<i class="icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.9333 5.51667C14.8487 5.31304 14.6869 5.15123 14.4833 5.06667C14.3831 5.02397 14.2755 5.00132 14.1666 5H5.83328C5.61227 5 5.40031 5.0878 5.24403 5.24408C5.08775 5.40036 4.99995 5.61232 4.99995 5.83333C4.99995 6.05435 5.08775 6.26631 5.24403 6.42259C5.40031 6.57887 5.61227 6.66667 5.83328 6.66667H12.1583L5.24162 13.575C5.16351 13.6525 5.10151 13.7446 5.05921 13.8462C5.0169 13.9477 4.99512 14.0567 4.99512 14.1667C4.99512 14.2767 5.0169 14.3856 5.05921 14.4871C5.10151 14.5887 5.16351 14.6809 5.24162 14.7583C5.31908 14.8364 5.41125 14.8984 5.5128 14.9407C5.61435 14.9831 5.72327 15.0048 5.83328 15.0048C5.94329 15.0048 6.05221 14.9831 6.15376 14.9407C6.25531 14.8984 6.34748 14.8364 6.42495 14.7583L13.3333 7.84167V14.1667C13.3333 14.3877 13.4211 14.5996 13.5774 14.7559C13.7336 14.9122 13.9456 15 14.1666 15C14.3876 15 14.5996 14.9122 14.7559 14.7559C14.9122 14.5996 14.9999 14.3877 14.9999 14.1667V5.83333C14.9986 5.72444 14.976 5.61685 14.9333 5.51667Z" fill="currentColor"/></svg></i>';
  }

  private function get_close_icon() {
    return '<i class="icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.94126 8.00012L13.1413 3.80679C13.2668 3.68125 13.3373 3.51099 13.3373 3.33346C13.3373 3.15592 13.2668 2.98566 13.1413 2.86012C13.0157 2.73459 12.8455 2.66406 12.6679 2.66406C12.4904 2.66406 12.3201 2.73459 12.1946 2.86012L8.00126 7.06012L3.80793 2.86012C3.68239 2.73459 3.51213 2.66406 3.33459 2.66406C3.15706 2.66406 2.9868 2.73459 2.86126 2.86012C2.73573 2.98566 2.6652 3.15592 2.6652 3.33346C2.6652 3.51099 2.73573 3.68125 2.86126 3.80679L7.06126 8.00012L2.86126 12.1935C2.79878 12.2554 2.74918 12.3292 2.71533 12.4104C2.68149 12.4916 2.66406 12.5788 2.66406 12.6668C2.66406 12.7548 2.68149 12.8419 2.71533 12.9232C2.74918 13.0044 2.79878 13.0781 2.86126 13.1401C2.92324 13.2026 2.99697 13.2522 3.07821 13.2861C3.15945 13.3199 3.24659 13.3373 3.33459 13.3373C3.4226 13.3373 3.50974 13.3199 3.59098 13.2861C3.67222 13.2522 3.74595 13.2026 3.80793 13.1401L8.00126 8.94012L12.1946 13.1401C12.2566 13.2026 12.3303 13.2522 12.4115 13.2861C12.4928 13.3199 12.5799 13.3373 12.6679 13.3373C12.7559 13.3373 12.8431 13.3199 12.9243 13.2861C13.0056 13.2522 13.0793 13.2026 13.1413 13.1401C13.2037 13.0781 13.2533 13.0044 13.2872 12.9232C13.321 12.8419 13.3385 12.7548 13.3385 12.6668C13.3385 12.5788 13.321 12.4916 13.2872 12.4104C13.2533 12.3292 13.2037 12.2554 13.1413 12.1935L8.94126 8.00012Z" fill="currentColor"/></svg></i>';
  }
}
