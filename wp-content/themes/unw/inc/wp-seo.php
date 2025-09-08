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
				'<link rel="preload" as="image" href="%s" imagesizes="100vw" fetchpriority="high">' . "\n",
				esc_url($img_mobile)
			);
		}

		if ( $img_desktop ) {
			$output .= sprintf(
				'<link rel="preload" as="image" href="%s" imagesizes="100vw" media="(min-width: 768px)">' . "\n",
				esc_url($img_desktop)
			);
		}
	}

	if ($echo && $output) {
		echo $output;
	}

	return $output;
}


add_action('wp_head', function () {
    /**
     * Configuration for page templates and their image extraction logic.
     * @var array $config Map of template/post type to callback and parameters.
     */
    $config = [
        // Page templates with single image
        'page_templates_single' => [
            'templates/template-about-us.php' => [
                'field' => 'hero',
                'image_key' => 'images',
            ],
            'templates/template-admission-convalidation.php' => [
                'field' => 'Hero',
                'image_key' => 'images',
            ],
            'templates/template-admission-pregrado.php' => [
                'field' => 'Hero',
                'image_key' => 'images',
            ],
            'templates/template-admission-traslado.php' => [
                'field' => 'Hero',
                'image_key' => 'images',
            ],
            'templates/template-blog.php' => [
                'field' => 'hero-slide',
                'image_key' => 'images',
            ],
            'templates/template-our-history.php' => [
                'field' => 'hero',
                'image_key' => 'images',
            ],
            'templates/template-powered-by-asu.php' => [
                'field' => 'slide-hero',
                'image_key' => 'images',
            ],
            'templates/template-quality-policy.php' => [
                'field' => 'hero',
                'image_key' => 'images',
            ],
        ],
        // Page templates with image lists
        'page_templates_list' => [
            'templates/template-home.php' => [
                'field' => 'hero',
                'list_key' => 'list',
                'image_key' => 'images',
            ],
        ],
        // Singular post types
        'singular' => [
            'carreras' => [
                'field' => 'sliders',
                'list_key' => 'list_of_files',
                'image_key' => 'images',
                'type_filter' => 'imagen',
            ],
            'eventos' => [
                'field' => 'list_of_files',
                'image_key' => 'imagen',
            ],
            'facultad' => [
                'field' => 'hero_slider',
                'list_key' => 'list_of_files',
                'image_key' => 'images',
                'type_filter' => 'imagen',
            ],
        ],
        // Post type archives
        'archives' => [
            'eventos' => [
                'field' => 'hero-events',
                'option' => true,
                'image_key' => 'images',
            ],
            'novedades' => [
                'field' => 'hero-news',
                'option' => true,
                'image_key' => 'images',
                'single' => true,
            ],
        ],
        // Special case for template-all-careers
        'special' => [
            'templates/template-all-careers.php' => fn() => preload_all_careers_images(),
        ],
    ];

    /**
     * Extract images for preload from a list of items.
     * @param array $items List of items.
     * @param string $image_key Key for image data.
     * @param string|null $type_filter Optional type filter.
     * @return array Array of preload images.
     */
    function get_images_to_preload($items, $image_key, $type_filter = null) {
        if (empty($items) || !is_array($items)) {
            return [];
        }

        $filtered_items = $type_filter
            ? array_filter($items, fn($item) => isset($item[$image_key]['type']) && strtolower($item[$image_key]['type']) === $type_filter)
            : $items;

        return array_values(array_map(
            fn($item) => [
                'url' => $item[$image_key]['mobile']['url'] ?? null,
                'url_desktop' => $item[$image_key]['desktop']['url'] ?? null,
            ],
            $filtered_items
        ));
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

    // Process page templates with single images
    foreach ($config['page_templates_single'] as $template => $params) {
        if (is_page_template($template)) {
            $data = get_field($params['field']);
            $images = get_single_image_to_preload($data[$params['image_key']] ?? []);
            preload_if_valid($images);
            return;
        }
    }

    // Process page templates with image lists
    foreach ($config['page_templates_list'] as $template => $params) {
        if (is_page_template($template)) {
            $data = get_field($params['field']);
            $images = get_images_to_preload($data[$params['list_key']] ?? [], $params['image_key']);
            preload_if_valid($images);
            return;
        }
    }

    // Process singular post types
    foreach ($config['singular'] as $post_type => $params) {
        if (is_singular($post_type)) {
            $data = get_field($params['field']);
            $items = isset($params['list_key']) ? $data[$params['list_key']] ?? [] : $data;
            $images = get_images_to_preload($items, $params['image_key'], $params['type_filter'] ?? null);
            preload_if_valid($images);
            return;
        }
    }

    // Process post type archives
    foreach ($config['archives'] as $post_type => $params) {
        if (is_post_type_archive($post_type)) {
            $data = get_field($params['field'], $params['option'] ? 'option' : null);
            $images = $params['single'] ?? false
                ? get_single_image_to_preload($data[$params['image_key']] ?? [])
                : get_images_to_preload($data ?? [], $params['image_key']);
            preload_if_valid($images);
            return;
        }
    }

    // Process special case
    foreach ($config['special'] as $template => $callback) {
        if (is_page_template($template)) {
            $images = $callback();
            preload_if_valid($images);
            return;
        }
    }
}, 1);
