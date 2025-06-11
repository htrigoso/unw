<?php
/**
 * Include assets
 *
 * @package Include_Assets
 */

add_action( 'wp_footer', 'include_the_json_settings' );
function include_the_json_settings() {
	$settings = array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'themePath' => THEME_PATH,
		'siteUrl' => site_url(),
	);

	echo '<script id="themeSettings" type="application/json">';
	echo json_encode( $settings );
	echo '</script>';
}

add_action( 'admin_enqueue_scripts', 'admin_script' );

function admin_script() {
	wp_enqueue_script( 'admin-script', get_stylesheet_directory_uri() . '/assets/js/admin-script.js', array( 'jquery' ) );
  wp_enqueue_style('admin-style', get_stylesheet_directory_uri().'/assets/css/admin-style.css');
}

add_action( 'wp_enqueue_scripts', 'include_assets' );
function include_assets() {
	global $wp_query;

	$vars = $wp_query->query_vars;
	$theme_path = get_template_directory_uri();
	$project_config_json = file_get_contents( $theme_path . '/app.config.json' );
	$project_config = json_decode( $project_config_json, true );
	$dev_manifest_file = 'http://' . $project_config['host'] . ':' . $project_config['port'] . '/manifest.json';
	$prod_manifest_file = $theme_path . '/build/manifest.json';
	$manifestFilePath = STAGE === 'development' ? $dev_manifest_file : $prod_manifest_file;
	$manifest = json_decode( file_get_contents( $manifestFilePath ), true );
	$chunk_name = $vars['ASSETS_CHUNK_NAME'];

  wp_enqueue_script( 'jquery' );

	if ( ! empty( $manifest ) ) {
		foreach ( $manifest as $key => $value ) {
			$name = substr( $key, 0, strpos( $key, '.' ) );
			$ext = substr( strstr( $key, '.' ), strlen( '.' ) );
			$file_path = STAGE === 'production'
			? $theme_path . '/' . $value
			: 'http://' . $project_config['host'] . ':' . $project_config['port'] . '/' . $value;

			if ( ALLOW_GZIP ) {
				$file_path .= '.gz';
			}

			if ( ( strpos( $name, 'app' ) !== false ) || $name === $chunk_name ) {
				$ext === 'css' && wp_enqueue_style( 'preload-' . $name, $file_path, array(), false, 'all' );
				$ext === 'js' && wp_enqueue_script( $name, $file_path, array(), '', true );
			}

			$css_file_name = str_replace( 'css/', '', $name );
			$js_file_name = str_replace( 'js/', '', $name );
			$is_css_chunk = is_numeric( $css_file_name );
			$is_js_chunk = is_numeric( $js_file_name );

			( $ext === 'css' && $is_css_chunk ) && wp_enqueue_style( 'preload-' . $name, $file_path, array(), false, 'all' );
			( $ext === 'js' && $is_js_chunk ) && wp_enqueue_script( $name, $file_path, array(), '', true );
		}
	}

  /*New include*/
  $post_id = get_the_ID();
  $post_type = get_post_type($post_id);
  $post_config_json = file_get_contents( $theme_path . '/assets/json/'.$post_type.$post_id.'.json' );
  $post_config = json_decode( $project_config_json, true );
  //TO DO Mike
}

add_filter( 'style_loader_tag', 'preload_filter', 10, 3 );
function preload_filter( $html, $handle, $href ) {
	if ( strpos( $handle, 'preload-' ) !== false ) {
		$html = str_replace( "rel='stylesheet'", "rel='preload' href='" . $href . "' as='style' onload='this.onload=null;this.rel=\"stylesheet\"'", $html );
		$html .= '<noscript><link rel="stylesheet" href="' . $href . '"></noscript>';
	}

	return $html;

}
