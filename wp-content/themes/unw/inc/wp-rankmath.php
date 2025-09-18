<?php
/**
 * Funciones para el manejo de SEO con RankMath
 */


// Funciones para Carreras
function get_carrera_seo_data($carrera_slug, $modalidad_slug) {
    // Obtener el ID correcto para esta combinación de slug y modalidad
    $post_id = get_carrera_id_by_slug_and_modalidad($carrera_slug, $modalidad_slug);
    if (!$post_id) {
        return false;
    }

    return get_post($post_id);
}

function get_carrera_title($post) {
    // 1. Verificar si hay título manual en Rank Math
    $rank_math_title = get_post_meta($post->ID, 'rank_math_title', true);
    if (!empty($rank_math_title)) {
        return \RankMath\Helper::replace_vars($rank_math_title, $post);
    }

    // 2. Si no hay título manual, usar plantilla personalizada
    if (class_exists('\RankMath\Helper')) {
        return \RankMath\Helper::replace_vars('%title% %sep% %sitename%', $post);
    }

    // 3. Fallback manual si Helper no está disponible
    return sprintf('%s | %s',
        get_the_title($post->ID),
        get_bloginfo('name')
    );
}

function get_carrera_description($post) {
    // Verificar si hay descripción personalizada
    $rank_math_description = get_post_meta($post->ID, 'rank_math_description', true);
    if (!empty($rank_math_description)) {
        return \RankMath\Helper::replace_vars($rank_math_description, $post);
    }

    // Si no hay descripción personalizada, devolver false para usar la por defecto
    return false;
}

// Funciones para Facultades
function get_faculty_title($term) {
    if (!$term) {
        return false;
    }

    // Intentar obtener título personalizado de Rank Math
    $custom_title = get_term_meta($term->term_id, 'rank_math_title', true);
    if (!empty($custom_title)) {
        if (class_exists('\RankMath\Helper')) {
            return \RankMath\Helper::replace_vars($custom_title, $term);
        }
        return $custom_title;
    }

    // Título por defecto
    return sprintf('Facultad de %s | %s',
        $term->name,
        get_bloginfo('name')
    );
}

function get_faculty_description($term) {
    if (!$term) {
        return false;
    }

    // Intentar obtener descripción personalizada de Rank Math
    $custom_desc = get_term_meta($term->term_id, 'rank_math_description', true);
    if ($custom_desc) {
        return $custom_desc;
    }

    // Usar la descripción de la taxonomía si existe
    if (!empty($term->description)) {
        return $term->description;
    }

    // Descripción por defecto
    return sprintf('Descubre todas las carreras de la facultad de %s en UNW.', $term->name);
}

// Funciones para Novedades
function get_novedad_description($post) {
    // Primero verificar si hay descripción personalizada en Rank Math
    $rank_math_description = get_post_meta($post->ID, 'rank_math_description', true);
    if (!empty($rank_math_description)) {
        return \RankMath\Helper::replace_vars($rank_math_description, $post);
    }

    // Si no hay descripción en Rank Math, usar el campo ACF content
    $content = get_field('content', $post->ID);
    if (!empty($content)) {
        $clean_content = wp_strip_all_tags($content);
        return substr($clean_content, 0, 157) . '...';
    }

    return false;
}

// Funciones para Eventos
function get_evento_description($post) {
    // Primero verificar si hay descripción personalizada en Rank Math
    $rank_math_description = get_post_meta($post->ID, 'rank_math_description', true);
    if (!empty($rank_math_description)) {
        return \RankMath\Helper::replace_vars($rank_math_description, $post);
    }

    // Si no hay descripción en Rank Math, usar el campo ACF event_content
    $content = get_field('event_content', $post->ID);

    if (!empty($content['content'])) {
        $clean_content = wp_strip_all_tags($content['content']);
        return substr($clean_content, 0, 157) . '...';
    }

    return false;
}

// Funciones Principales
function custom_rank_math_title($title) {
    // Manejar taxonomía de facultad
    $term = unw_get_faculty_term();
    if ($term) {
        $faculty_title = get_faculty_title($term);
        if ($faculty_title) {
            return $faculty_title;
        }
    }

    // Manejar carreras
    if (is_singular('carreras')) {
        $carrera_slug = get_query_var('carrera_slug');
        $modalidad_slug = get_query_var('modalidad_slug');

        $post = get_carrera_seo_data($carrera_slug, $modalidad_slug);
        if ($post) {
            return get_carrera_title($post);
        }
    }

    return $title;
}

function custom_rank_math_description($description) {
    global $post;

    // Manejar taxonomía de facultad
    $term = unw_get_faculty_term();
    if ($term) {
        $faculty_desc = get_faculty_description($term);
        if ($faculty_desc) {
            return $faculty_desc;
        }
    }

    // Manejar carreras
    if (is_singular('carreras')) {
        $carrera_slug = get_query_var('carrera_slug');
        $modalidad_slug = get_query_var('modalidad_slug');

        $post = get_carrera_seo_data($carrera_slug, $modalidad_slug);
        if ($post) {
            $carrera_desc = get_carrera_description($post);
            if ($carrera_desc) {
                return $carrera_desc;
            }
        }
    }

    // Manejar novedades
    if (is_singular('novedades')) {
        $novedad_desc = get_novedad_description($post);
        if ($novedad_desc) {
            return $novedad_desc;
        }
    }

    // Manejar eventos
    if (is_singular('eventos')) {
        $evento_desc = get_evento_description($post);
        if ($evento_desc) {
            return $evento_desc;
        }
    }

    return $description;
}


function add_custom_schema_data($data) {
    global $post;

    // Solo aplicar el tratamiento especial para carreras
    if (is_singular('carreras')) {
        $carrera_slug = get_query_var('carrera_slug');
        $modalidad_slug = get_query_var('modalidad_slug');
        $post = get_carrera_seo_data($carrera_slug, $modalidad_slug);

        if ($post) {
            // Actualizar cada esquema existente con el título y descripción correctos
            foreach ($data as $key => $schema) {
                if (is_array($schema)) {
                    $data[$key]['name'] = get_carrera_title($post);
                    $carrera_desc = get_carrera_description($post);
                    if ($carrera_desc) {
                        $data[$key]['description'] = $carrera_desc;
                    }
                }
            }
            return $data;
        }
    }

    // Para cualquier otro tipo de post, devolver los datos sin modificar
    return $data;
}
add_filter('rank_math/json_ld', 'add_custom_schema_data', 10, 1);

// Hooks
add_filter('rank_math/frontend/title', 'custom_rank_math_title', 10, 1);
add_filter('rank_math/frontend/description', 'custom_rank_math_description', 10, 1);