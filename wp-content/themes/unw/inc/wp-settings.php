<?php
/**
 * Define vars & constants
 *
 * @package Wp_Settings
 */

define( 'ROOTPATH', realpath( __DIR__ . '/..' ) );
define( 'PRODUCTION_ASSETS_PATH', realpath( __DIR__ . '/../build' ) );
define( 'STAGE', is_dir( PRODUCTION_ASSETS_PATH ) ? 'production' : 'development' );
define( 'BASE_URL', get_bloginfo( 'url' ) );
define( 'THEME_PATH', get_template_directory_uri() );
define( 'UPLOAD_PATH', get_template_directory_uri() . '/upload' );
define( 'ALLOW_UNFILTERED_UPLOADS', true );
define( 'ALLOW_GZIP', false );

set_query_var( 'NAVBAR_COLOR', false );
set_query_var( 'MENU_COLOR', false );
set_query_var( 'FOOTER_COLOR', false );

add_theme_support( 'post-thumbnails' );

/**
 * Register navigation menu
 */
add_action( 'after_setup_theme', 'theme_setting' );
function theme_setting() {
  register_nav_menus( array(
    'navbar_menu' => __( 'Navbar Menu', 'navbar_menu' ),
    'mobile_menu' => __( 'Mobile Menu', 'mobile_menu' ),
    'footer_menu' => __( 'Footer Menu', 'footer_menu' ),
  ));
}

/**
 * Remove CSS
 */
add_action( 'wp_enqueue_scripts', 'wp_remove_assets', 100 );
function wp_remove_assets() {
  if ( is_user_logged_in() ) {
      return;
  }

  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' );
  wp_dequeue_style( 'storefront-gutenberg-blocks' );
  wp_dequeue_style( 'wpml-tm-admin-bar' );

  wp_deregister_style( 'svg-attachment.css' );
}


add_action( 'wp_print_styles', 'wp_deregister_styles', 100 );
function wp_deregister_styles() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wpml-tm-admin-bar' );
}

/**
 * Hide admin menu on front-end part
 */
add_filter('show_admin_bar', 'hide_admin_bar');
function hide_admin_bar() {
  return false;
}


////////////////////////////////////////////////////////////////////////////////





function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Evento', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}

function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
  <p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Convertir en evento', 'sm-textdomain' )?>
        </label>

    </div>
  </p>

    <?php
}

add_action( 'add_meta_boxes', 'sm_custom_meta' );


function sm_meta_save( $post_id ) {
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
    return;
  }
    if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
    } else {
        update_post_meta( $post_id, 'meta-checkbox', '' );
    }
}
add_action( 'save_post', 'sm_meta_save' );

function add_the_table_button( $buttons ) {
  if ( ( $key = array_search( 'wp_adv', $buttons ) ) !== false ) {
    unset($buttons[$key]);
  }
  array_push( $buttons, 'table', 'separator', 'wp_adv' );
  return $buttons;
}
add_filter( 'mce_buttons', 'add_the_table_button' );

function add_table_in_editor( $plugins ) {
  $plugins['table'] = get_stylesheet_directory_uri() . '/assets/js/table.min.js';
  return $plugins;
}
add_filter( 'mce_external_plugins', 'add_table_in_editor' );
