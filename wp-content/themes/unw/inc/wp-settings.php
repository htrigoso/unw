<?php

define('ROOTPATH', __DIR__);
define('BASE_URL', get_bloginfo('url'));
define('THEME_PATH', get_template_directory_uri());
define('UPLOAD_PATH', get_template_directory_uri() . '/upload');
define('ASSETS_PATH', get_template_directory_uri() . '/assets');
define('ALLOW_UNFILTERED_UPLOADS', true);
define('ALLOW_GZIP', false);
define('COMMON_CONTENT_PATH', 'content-parts/common/content');
define('HOME_CONTENT_PATH', 'content-parts/pages/home/content');
define('NEWS_CONTENT_PATH', 'content-parts/pages/news/content');
define('NEWS_DETAIL_CONTENT_PATH', 'content-parts/pages/news-detail/content');
define('EVENT_DETAIL_CONTENT_PATH', 'content-parts/pages/event-detail/content');
define('EVENTS_CONTENT_PATH', 'content-parts/pages/events/content');
define('BLOG_CONTENT_PATH', 'content-parts/pages/blog/content');
define('BLOG_DETAIL_CONTENT_PATH', 'content-parts/pages/blog-detail/content');
define('PBA_CONTENT_PATH', 'content-parts/pages/powered-by-asu/content');
define('SEARCH_CONTENT_PATH', 'content-parts/pages/search/content');

define('GENERAL_CONTENT_PATH', 'content-parts/content');

define('CAREERS_TABS_PATH', 'content-parts/pages/careers/tabs/content');
define('ADMISSION_TABS_PATH', 'content-parts/pages/admission/tabs/content');
define('FACULTY_TABS_PATH', 'content-parts/pages/faculty/tabs/content');
define('NEWS_TABS_PATH', 'content-parts/pages/news/tabs/content');

define('CAREERS_HERO_CONTENT_PATH', 'content-parts/pages/careers/hero/content');
define('CAREERS_CONTENT_TAB_PATH', 'content-parts/pages/careers/tabs/');
define('ADMISSION_CONTENT_TAB_PATH', 'content-parts/pages/admission/tabs/');
define('FACULTY_CONTENT_TAB_PATH', 'content-parts/pages/faculty/tabs/');
define('NEWS_CONTENT_TAB_PATH', 'content-parts/pages/news/tabs/');

set_query_var( 'NAVBAR_COLOR', false );
set_query_var( 'MENU_COLOR', false );
set_query_var( 'FOOTER_COLOR', false );


/**
 * globals
 */


/**
 * remove scripts from <head>
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );


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
 * hide admin menu on front-end part
 */
add_filter('show_admin_bar', 'hide_admin_bar');
function hide_admin_bar() {
    return false;
}


/**
 * set content type for an email
 * @param [type] $content_type [description]
 */
function set_content_type( $content_type = 'text/html' ) {
    return $content_type;
}

function set_html_content_type() {
    return $content_type;
}

add_filter( 'wp_mail_content_type','set_mail_content_type' );
function set_mail_content_type() {
    return 'text/html';
}


/**
 * remove all dashboard widgets
 */
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}


/**
 * hide admin menu items
 */
//add_action( 'admin_init', 'remove_menu_pages' );
function remove_menu_pages() {
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('upload.php'); // Media
	remove_menu_page('link-manager.php'); // Links
	remove_menu_page('edit-comments.php'); // Comments
	remove_menu_page('edit.php?post_type=page'); // Pages
	remove_menu_page('plugins.php'); // Plugins
	remove_menu_page('themes.php'); // Appearance
	remove_menu_page('users.php'); // Users
	remove_menu_page('tools.php'); // Tools
	remove_menu_page('options-general.php'); // Settings
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('upload.php'); // Media
}


/**
 * register navigation menu
 */
add_action( 'after_setup_theme', 'theme_setting' );
function theme_setting() {
    add_theme_support('post-thumbnails');
    add_image_size( 'category-thumb', 160, 157, true );
    register_nav_menus( array(
        'navbar_menu' => __( 'Navbar Menu', 'navbar_menu' ),
        'mobile_menu' => __( 'Mobile Menu', 'mobile_menu' ),
        'footer_menu' => __( 'Footer Menu', 'footer_menu' ),
    ));
}


/**
 * add <br> to TinyMCE
 */
add_filter( 'tiny_mce_before_init', 'my_switch_tinymce_p_br' );
function my_switch_tinymce_p_br( $settings ) {
    $settings['forced_root_block'] = false;
    return $settings;
}


/**
 * TinyMCE Advanced POlugin: Customize mce editor font sizes
 */
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );
function wpex_mce_text_sizes( $initArray ){
    $initArray['fontsize_formats'] = "9px 10px 11px 12px 13px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px";
    return $initArray;
}


/**
 * enable uploading svg files
 */
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}



/**
 * add admin style
 */
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/style-admin.css', false, '1.0.0' );
}


// add_filter('pre_post_link', 'filter_post_link', 10, 2);
function filter_post_link($permalink, $post) {
	if ( $post->post_type != 'post' ) {
        return $permalink;
    }

	return 'blog'.$permalink;
}


// add_action( 'generate_rewrite_rules', 'add_blog_rewrites' );
function add_blog_rewrites( $wp_rewrite ) {
	$wp_rewrite->rules = [
		'blog/([^/]+)/?$' => 'index.php?name=$matches[1]',
		'blog/[^/]+/attachment/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
		'blog/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
		'blog/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
		'blog/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
		'blog/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
		'blog/([^/]+)/trackback/?$' => 'index.php?name=$matches[1]&tb=1',
		'blog/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
		'blog/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?name=$matches[1]&feed=$matches[2]',
		'blog/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?name=$matches[1]&paged=$matches[2]',
		'blog/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?name=$matches[1]&cpage=$matches[2]',
		'blog/([^/]+)(/[0-9]+)?/?$' => 'index.php?name=$matches[1]&page=$matches[2]',
		'blog/[^/]+/([^/]+)/?$' => 'index.php?attachment=$matches[1]',
		'blog/[^/]+/([^/]+)/trackback/?$' => 'index.php?attachment=$matches[1]&tb=1',
		'blog/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
		'blog/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?attachment=$matches[1]&feed=$matches[2]',
		'blog/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?attachment=$matches[1]&cpage=$matches[2]',
	] + $wp_rewrite->rules;
}


add_action( 'pre_get_posts', 'custom_pre_get_posts' );
function custom_pre_get_posts( $query ) {
    if ( ! $query->is_main_query() || $query->is_admin() ) {
        return false;
    }

    if ( $query->is_category() ) {
        $query->set( 'post_type', 'post' );
        $query->set( 'posts_per_page', 6 );
    }

    return $query;
}

function custom_acf_accordion_styles() {
    echo '<style>
        .acf-field.acf-accordion .acf-label.acf-accordion-title {
            background-color: #07c8cc;
            color: #ffffff;
            font-weight: bold;
        }

        .acf-field.acf-accordion .acf-label.acf-accordion-title:hover {
            background-color: #05b0b4;
        }
    </style>';
}
add_action('admin_head', 'custom_acf_accordion_styles');


function desactivar_editor_en_paginas($post) {
  // ID de la página a ocultar el editor (cámbialo por el tuyo)
  $id_pagina = 602;

  if ($post->ID === $id_pagina) {
    remove_post_type_support('page', 'editor');
  }
}
add_action('edit_form_after_title', 'desactivar_editor_en_paginas');




add_action('init', function() {
  remove_post_type_support('post', 'editor');
});


function unw_remove_editor_from_specific_page() {
  // Reemplaza 42 con el ID de tu página
  $page_id = 16;

  if (isset($_GET['post']) || isset($_POST['post'])) {
    $post_id = $_GET['post'] ?? $_POST['post'];
    if ($post_id == $page_id) {
      remove_post_type_support('page', 'editor');
    }
  }
}
add_action('admin_init', 'unw_remove_editor_from_specific_page');
