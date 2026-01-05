<?php
function register_post_type_eventos() {
    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        'menu_name' => 'Eventos',
        'name_admin_bar' => 'Evento',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo evento',
        'new_item' => 'Nuevo evento',
        'edit_item' => 'Editar evento',
        'view_item' => 'Ver evento',
        'all_items' => 'Todos los eventos',
        'search_items' => 'Buscar eventos',
        'not_found' => 'No se encontraron eventos.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'eventos'),
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('eventos', $args);
}
add_action('init', 'register_post_type_eventos');



function eventos_featured_image_notice($content) {
    global $post;
    if ($post->post_type === 'eventos') {
        $content .= '<p><em>Recomendación: Sube una imagen de <strong>280x150 píxeles</strong></em></p>';
    }
    return $content;
}
add_filter('admin_post_thumbnail_html', 'eventos_featured_image_notice');

/**
 * Actualiza automáticamente el estado de eventos finalizados
 * basándose en la fecha y hora del evento
 */
function auto_update_event_status() {
    $args = array(
        'post_type' => 'eventos',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );

    $eventos = get_posts($args);

    foreach ($eventos as $evento) {
        // Obtener el grupo event_info completo
        $event_info = get_field('event_info', $evento->ID);

        if ($event_info && !empty($event_info['date'])) {
            $event_date = $event_info['date'];
            $event_time = !empty($event_info['time']) ? $event_info['time'] : '11:59 pm';

            // Combinar fecha y hora
            $event_datetime_string = $event_date . ' ' . $event_time;
            $current_datetime_string = current_time('d/m/Y g:i a');

            // Intentar parsear con formato d/m/Y (día/mes/año)
            $event_timestamp = DateTime::createFromFormat('d/m/Y g:i a', $event_datetime_string);

            // Si falla, intentar con formato m/d/Y (mes/día/año - formato americano)
            if (!$event_timestamp) {
                $event_timestamp = DateTime::createFromFormat('m/d/Y g:i a', $event_datetime_string);
            }

            $current_timestamp = DateTime::createFromFormat('d/m/Y g:i a', $current_datetime_string);

            if ($event_timestamp && $current_timestamp) {
                // Si la fecha y hora del evento ya pasaron, marcar como finalizado
                if ($event_timestamp <= $current_timestamp) {
                    // Actualizar solo el campo status sin modificar los otros campos del grupo
                    update_field('event_info_status', true, $evento->ID);
                }
            }
        }
    }
}

// Ejecutar la actualización automática en diferentes momentos
add_action('wp_loaded', 'auto_update_event_status');
add_action('save_post_eventos', 'auto_update_event_status');

/**
 * Obtiene eventos ordenados por fecha - próximos primero, finalizados al final
 *
 * @return array Array con los últimos 7 eventos ordenados
 */
function unw_sort_events_by_date() {
    $args = array(
        'post_type' => 'eventos',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );

    $events = get_posts($args);

    if (empty($events) || !is_array($events)) {
        return [];
    }

    $events = unw_apply_event_sorting($events);

    // Retornar solo los primeros 7 eventos
    return array_slice($events, 0, 7);
}

/**
 * Aplica ordenamiento a un array de eventos existente
 * Ordena por fecha - próximos primero, finalizados al final
 *
 * @param array $events Array de posts de eventos
 * @return array Array ordenado
 */
function unw_apply_event_sorting($events) {
    if (empty($events) || !is_array($events)) {
        return $events;
    }

    usort($events, function($a, $b) {
        $post_id_a = is_object($a) ? $a->ID : $a;
        $post_id_b = is_object($b) ? $b->ID : $b;

        $info_a = get_field('event_info', $post_id_a);
        $info_b = get_field('event_info', $post_id_b);

        $status_a = $info_a['status'] ?? false;
        $status_b = $info_b['status'] ?? false;

        // Eventos finalizados van al final
        if ($status_a && !$status_b) return 1;
        if (!$status_a && $status_b) return -1;

        // Ambos tienen el mismo estado, ordenar por fecha y hora
        $date_a = $info_a['date'] ?? '';
        $date_b = $info_b['date'] ?? '';
        $time_a = $info_a['time'] ?? '11:59 pm';
        $time_b = $info_b['time'] ?? '11:59 pm';

        // Intentar parsear con formato d/m/Y
        $datetime_a = DateTime::createFromFormat('d/m/Y g:i a', $date_a . ' ' . $time_a);
        if (!$datetime_a) {
            $datetime_a = DateTime::createFromFormat('m/d/Y g:i a', $date_a . ' ' . $time_a);
        }

        $datetime_b = DateTime::createFromFormat('d/m/Y g:i a', $date_b . ' ' . $time_b);
        if (!$datetime_b) {
            $datetime_b = DateTime::createFromFormat('m/d/Y g:i a', $date_b . ' ' . $time_b);
        }

        if (!$datetime_a || !$datetime_b) return 0;

        // Eventos más próximos primero (orden ascendente)
        return $datetime_a <=> $datetime_b;
    });

    return $events;
  }
