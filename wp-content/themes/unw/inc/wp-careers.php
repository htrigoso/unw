<?php
function render_html_all_careers($args = []) {

    // Valores por defecto
    $defaults = [
        'current_faculty_id' => 0,
        'post_type'          => 'carreras',
        'taxonomy'           => 'categoria-carrera',
        'title_global'       => 'Carreras',
    ];

    // Mezclamos defaults con los valores recibidos
    $args = wp_parse_args($args, $defaults);

    extract($args);
    // Ahora tienes disponibles:
    // $current_faculty_id, $post_type, $taxonomy, $title_global

    $base_url = $post_type === 'carreras'
        ? home_url('/carreras-uwiener')
        : home_url('/carreras-a-distancia');

    // 👉 Hero
    $hero_img_desktop = null;
    $hero_img_mobile  = null;
    $hero_title       = null;

    if ($current_faculty_id == 0) {
        $hero_data = get_field('hero');
        if (!empty($hero_data)) {
            $hero_title       = $hero_data['title'] ?? '';
            $hero_img_desktop = $hero_data['images']['desktop']['url'] ?? '';
            $hero_img_mobile  = $hero_data['images']['mobile']['url'] ?? '';
        }
    } else {
        $images = get_field('hero_slider', $taxonomy . '_' . $current_faculty_id);

        if (!empty($images['list_of_files'])) {
            $first_file = $images['list_of_files'][0] ?? null;
            if ($first_file && !empty($first_file['images'])) {
                $hero_img_desktop = $first_file['images']['desktop']['url'] ?? '';
                $hero_img_mobile  = $first_file['images']['mobile']['url'] ?? '';
            }

            $term_obj = get_term($current_faculty_id, $taxonomy);
            if (empty($hero_title) && $term_obj && !is_wp_error($term_obj)) {
                $hero_title = $term_obj->name;
            }
        }
    }

    // 👉 Query de carreras
    $query_args = [
        'post_type'      => $post_type,
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    ];

    if ($current_faculty_id > 0) {
        $query_args['tax_query'] = [[
            'taxonomy' => $taxonomy,
            'field'    => 'term_id',
            'terms'    => (int) $current_faculty_id,
        ]];
    }

    $careers_query = new WP_Query($query_args);

    // 👉 Tabs
    $facultades = get_terms([
        'taxonomy'   => $taxonomy,
        'hide_empty' => true,
    ]);

    $tabs = [[
        'id'     => 0,
        'label'  => 'Todas las carreras',
        'status' => true,
        'target' => 'todas-las-carreras',
        'url'    => $base_url . '/',
    ]];

    if (!is_wp_error($facultades) && !empty($facultades)) {
        foreach ($facultades as $facultad) {
            $tabs[] = [
                'id'     => $facultad->term_id,
                'label'  => $facultad->name,
                'target' => $facultad->slug,
                'status' => true,
                 'url'    => $base_url . '/' . $facultad->slug,
            ];
        }
    }

    // 👉 Breadcrumb
    $breadcrumb = [
        ['label' => 'Inicio', 'href' => home_url('/')],
        ['label' => $title_global, 'href' => home_url("/$post_type/")],
    ];

    if ($current_faculty_id > 0) {
        $term_obj = get_term($current_faculty_id, $taxonomy);
        if ($term_obj && !is_wp_error($term_obj)) {
            $breadcrumb[] = [
                'label' => $term_obj->name,
                'href'  => '',
            ];
        }
    }

    // 👉 Render hero
    get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
        'img_desktop' => $hero_img_desktop,
        'img_mobile'  => $hero_img_mobile,
        'alt'         => $hero_title,
        'title'       => $hero_title,
        'breadcrumbs' => $breadcrumb,
        'variant'     => 'primary'
    ]);

    // 👉 Render tabs
    get_template_part(ALL_CAREERS_TABS_PATH, 'tabs', [
        'tabs'              => $tabs,
        'mode'              => $post_type === 'carreras-a-distancia' ? 'virtual' : 'presencial',
        'current_faculty_id'=> $current_faculty_id,
        'careers_posts'     => $careers_query->posts,
    ]);
}
