<?php
/**
 * Funciones personalizadas para RankMath SEO
 *
 * @package UNW
 */

/**
 * Obtiene el título personalizado para las carreras
 *
 * @param string $title El título original
 * @return string El título modificado
 */
function custom_rank_math_title($title) {
    // Verificar si estamos en un post type 'carreras'
    if (!is_singular('carreras')) {
        return $title;
    }

    // Obtener el ID del post actual
    $post_id = get_carrera_id_from_query();
    if (!$post_id) {
        return $title;
    }

    // Obtener el post
    $post = get_post($post_id);
    if (!$post) {
        return $title;
    }

    return generate_seo_title($post, $title);
}

/**
 * Obtiene la descripción personalizada para las carreras y facultades
 *
 * @param string $description La descripción original
 * @return string La descripción modificada
 */
function custom_rank_math_description($description) {
    // Verificar si estamos en una facultad
    $faculty_description = get_faculty_description();
    if ($faculty_description) {
        return $faculty_description;
    }

    // Verificar si estamos en un post type 'carreras'
    if (!is_singular('carreras')) {
        return $description;
    }

    // Obtener el ID del post actual
    $post_id = get_carrera_id_from_query();
    if (!$post_id) {
        return $description;
    }

    // Obtener el post
    $post = get_post($post_id);
    if (!$post) {
        return $description;
    }

    return generate_seo_description($post, $description);
}

/**
 * Obtiene el ID de la carrera basado en los query vars actuales
 *
 * @return int|false ID del post o false si no se encuentra
 */
function get_carrera_id_from_query() {
    $carrera_slug = get_query_var('carrera_slug');
    $modalidad_slug = get_query_var('modalidad_slug');

    return get_carrera_id_by_slug_and_modalidad($carrera_slug, $modalidad_slug);
}

/**
 * Genera el título SEO para una carrera
 *
 * @param WP_Post $post El post de la carrera
 * @param string $default_title El título por defecto
 * @return string El título SEO
 */
function generate_seo_title($post, $default_title) {
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
    return sprintf(
        '%s | %s',
        get_the_title($post->ID),
        get_bloginfo('name')
    );
}

/**
 * Genera la descripción SEO para una carrera
 *
 * @param WP_Post $post El post de la carrera
 * @param string $default_description La descripción por defecto
 * @return string La descripción SEO
 */
function generate_seo_description($post, $default_description) {
    $rank_math_description = get_post_meta($post->ID, 'rank_math_description', true);
    if (!empty($rank_math_description)) {
        return \RankMath\Helper::replace_vars($rank_math_description, $post);
    }

    return $default_description;
}

/**
 * Obtiene la descripción personalizada para una facultad
 *
 * @return string|false La descripción de la facultad o false si no aplica
 */
function get_faculty_description() {
    $term = unw_get_faculty_term();
    if (!$term) {
        return false;
    }

    // Intentar obtener la descripción personalizada de Rank Math
    $custom_desc = get_term_meta($term->term_id, 'rank_math_description', true);
    if ($custom_desc) {
        return $custom_desc;
    }

    // Usar la descripción de la taxonomía si existe
    if (!empty($term->description)) {
        return $term->description;
    }

    // Fallback con descripción generada
    return sprintf(
        'Descubre todas las carreras de la facultad de %s en UNW.',
        $term->name
    );
}

// Hooks
add_filter('rank_math/frontend/title', 'custom_rank_math_title', 10, 1);
add_filter('rank_math/frontend/description', 'custom_rank_math_description', 10, 1);
