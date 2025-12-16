<?php


/**
 * Genera <link rel="preload"> para un array de imágenes, aceptando una URL base y una opcional para desktop.
 *
 * La función asume atributos fijos:
 * - La URL base (móvil) usará `fetchpriority="high"`.
 * - La URL de desktop usará `media="(min-width: 768px)"`.
 *
 * @param array $image_sets Array de imágenes. Cada elemento puede contener 'url' y/u 'url_desktop'.
 * Ejemplo:
 * [
 * ['url' => 'link/a/imagen-movil.jpg', 'url_desktop' => 'link/a/imagen-desktop.jpg'],
 * ['url' => 'link/a/otra-imagen-general.jpg']
 * ]
 * @param bool  $echo       Si es true, imprime el HTML; si es false, lo devuelve como string.
 * @return string
 */
function uw_preload_responsive_images( array $image_sets = [], bool $echo = true ): string {
	if (empty($image_sets)) {
		return '';
	}

	$output = '';

	foreach ( $image_sets as $set ) {
		$img_mobile  = $set['url'] ?? '';
		$img_desktop = $set['url_desktop'] ?? '';

		if ($img_mobile) {
			$output .= sprintf(
				'<link rel="preload" as="image" href="%s"  fetchpriority="high" type="image/webp" media="(max-width: 767px)">' . "\n",
				esc_url($img_mobile)
			);
		}

		if ( $img_desktop ) {
			$output .= sprintf(
				'<link rel="preload" as="image" href="%s"  fetchpriority="high" media="(min-width: 768px)" type="image/webp">' . "\n",
				esc_url($img_desktop)
			);
		}
	}

	if ($echo && $output) {
		echo $output;
	}

	return $output;
}

/**
 * Extract images for preload from a list of items.
 * @param array $items List of items.
 * @param string $image_key Key for image data.
 * @param string|null $type_filter Optional type filter.
 * @return array Array of preload images (only first item).
 */
function get_images_to_preload($items, $image_key, $type_filter = null) {
	if (empty($items) || !is_array($items)) {
		return [];
	}

	$filtered_items = $type_filter
		? array_filter($items, fn($item) => isset($item[$image_key]['type']) && strtolower($item[$image_key]['type']) === $type_filter)
		: $items;

	// Return only first item
	$first_item = reset($filtered_items);

	if (!$first_item) {
		return [];
	}

	return [[
		'url' => $first_item[$image_key]['mobile']['url'] ?? null,
		'url_desktop' => $first_item[$image_key]['desktop']['url'] ?? null,
	]];
}

/**
 * Extract single image for preload.
 * @param array $image_source Image data.
 * @return array Array of preload images.
 */
function get_single_image_to_preload($image_source) {
	if (empty($image_source) || !is_array($image_source)) {
		return [];
	}
	return [[
		'url' => $image_source['mobile']['url'] ?? null,
		'url_desktop' => $image_source['desktop']['url'] ?? null,
	]];
}

/**
 * Get current term ID from queried object.
 * @return int Term ID or 0 if not on taxonomy page.
 */
function get_current_term_id() {
	$obj = get_queried_object();

	if ($obj && isset($obj->term_id)) {
		return (int) $obj->term_id;
	}

	return 0;
}

/**
 * Handle special case for template-all-careers.
 * @return array Array of preload images.
 */
function preload_all_careers_images() {
	$current_id_term = get_current_term_id();
	$image_source = $current_id_term == 0
		? get_field('hero')['images'] ?? []
		: get_field('images', 'facultad_' . $current_id_term) ?? [];

	return get_single_image_to_preload($image_source);
}

/**
 * Process images and preload if valid.
 * @param array $images Images to preload.
 */
function preload_if_valid($images) {
	if (!empty($images) && is_array($images)) {
		uw_preload_responsive_images(array_filter($images, fn($img) => !is_null($img['url']) || !is_null($img['url_desktop'])));
	}
}

/**
 * Genera preloads de imágenes críticas según el template/post type actual.
 * Llama esta función directamente en header.php para máximo control.
 * Optimizado: detección directa sin foreach, solo ejecuta el código del template activo.
 */
function uw_generate_critical_image_preloads() {
	// 1. Detectar template activo primero (early detection)
	$current_template = get_page_template_slug();

	// 2. Page templates - detección directa por template
	if ($current_template) {
		// Special case: template-all-careers
		if ($current_template === 'templates/template-all-careers.php') {
			$images = preload_all_careers_images();
			preload_if_valid($images);
			return;
		}

		// Home template (list)
		if ($current_template === 'templates/template-home.php') {
			$data = get_field('hero');
			$images = get_images_to_preload($data['list'] ?? [], 'images');
			preload_if_valid($images);
			return;
		}

		// Templates con single image - switch optimizado
		$single_image_config = match($current_template) {
			'templates/template-about-us.php' => ['field' => 'hero', 'image_key' => 'images'],
			'templates/template-admission-convalidation.php' => ['field' => 'Hero', 'image_key' => 'images'],
			'templates/template-admission-pregrado.php' => ['field' => 'Hero', 'image_key' => 'images'],
			'templates/template-admission-traslado.php' => ['field' => 'Hero', 'image_key' => 'images'],
			'templates/template-blog.php' => ['field' => 'hero-slide', 'image_key' => 'images'],
			'templates/template-our-history.php' => ['field' => 'hero', 'image_key' => 'images'],
			'templates/template-powered-by-asu.php' => ['field' => 'slide-hero', 'image_key' => 'images'],
			'templates/template-quality-policy.php' => ['field' => 'hero', 'image_key' => 'images'],
			default => null
		};

		if ($single_image_config) {
			$data = get_field($single_image_config['field']);
			$images = get_single_image_to_preload($data[$single_image_config['image_key']] ?? []);
			preload_if_valid($images);
			return;
		}
	}

	// 3. Post type archives - detección directa
	if (is_post_type_archive('eventos')) {
		$data = get_field('hero-events', 'option');
		$images = get_images_to_preload($data ?? [], 'images');
		preload_if_valid($images);
		return;
	}

	if (is_post_type_archive('novedades')) {
		$data = get_field('hero-news', 'option');
		$images = get_single_image_to_preload($data['images'] ?? []);
		preload_if_valid($images);
		return;
	}

	// 4. Singular post types - detección directa
	if (is_singular('carreras')) {
		$data = get_field('sliders');
		$images = get_images_to_preload($data['list_of_files'] ?? [], 'images', 'imagen');
		preload_if_valid($images);
		return;
	}

	if (is_singular('eventos')) {
		$data = get_field('list_of_files');
		$images = get_images_to_preload($data ?? [], 'imagen');
		preload_if_valid($images);
		return;
	}

	if (is_singular('facultad')) {
		$data = get_field('hero_slider');
		$images = get_images_to_preload($data['list_of_files'] ?? [], 'images', 'imagen');
		preload_if_valid($images);
		return;
	}
}



add_action('init', function() {
    if (get_transient('auto_sitemap_check') === 'done') {
        return;
    }

    $sitemap_url = home_url('/sitemap_index.xml');
    $response = wp_remote_get($sitemap_url, ['timeout' => 5]);

    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
        flush_rewrite_rules();
        error_log('🧭 Rank Math sitemap se regeneró automáticamente (fallo detectado).');
    }

    set_transient('auto_sitemap_check', 'done', DAY_IN_SECONDS);
});
