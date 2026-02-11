<?php
/**
 * Funciones auxiliares para manejar carreras en formularios de eventos
 */

/**
 * Obtiene las carreras filtradas según la configuración del evento
 *
 * @param int $event_id ID del evento
 * @param string $type_event Modalidad del evento (Presencial/Virtual)
 * @return array Array con carreras filtradas agrupadas por modalidad
 */
function get_event_filtered_careers($event_id = null, $type_event = 'Presencial') {
  if (!$event_id) {
    $event_id = get_the_ID();
  }

  $conf_event = get_field('conf_event', $event_id) ?: [];
  $selected_careers = $conf_event['selected_careers'] ?? [];

  // Determinar la modalidad
  $modalidad = ($type_event === 'Virtual') ? 'virtual' : 'pregrado';

  // Si NO se seleccionaron carreras -> mostrar TODAS las carreras
  if (empty($selected_careers)) {
    return get_carreras();
  }

  // Si se seleccionaron carreras -> filtrar solo esas
   return get_specific_careers($selected_careers, $modalidad);
}

/**
 * Obtiene todas las carreras de una modalidad específica
 *
 * @param string $modalidad 'pregrado' o 'virtual'
 * @return array Carreras agrupadas por facultad
 */
function get_all_careers_by_modality($modalidad = 'pregrado') {
  $post_type = ($modalidad === 'virtual') ? 'carreras-a-distancia' : 'carreras';
  $taxonomy = ($modalidad === 'virtual') ? 'categoria-carrera-distancia' : 'categoria-carrera';

  $all_carreras = get_posts([
    'post_type'              => $post_type,
    'posts_per_page'         => -1,
    'post_status'            => 'publish',
    'orderby'                => 'title',
    'order'                  => 'ASC',
    'fields'                 => 'ids',
    'no_found_rows'          => true,
    'update_post_term_cache' => true,
    'update_post_meta_cache' => false,
  ]);

  $result = [];

  foreach ($all_carreras as $id) {
    $title = get_the_title($id);
    $slug = get_post_field('post_name', $id);

    // Obtener facultad
    $facultades = get_the_terms($id, $taxonomy);
    $facultad = ($facultades && !is_wp_error($facultades)) ? $facultades[0]->name : 'Sin facultad';

    // Código CRM
    $code = ($modalidad === 'pregrado')
      ? get_post_meta($id, 'crm_code', true)
      : get_post_meta($id, 'crm_code_virtual', true);

    $result[$facultad][] = [
      'id'        => $id,
      'slug'      => $slug,
      'title'     => $title,
      'modalidad' => $modalidad,
      'code'      => $code,
    ];
  }

  return $result;
}

/**
 * Obtiene solo las carreras específicas seleccionadas
 *
 * @param array $career_ids Array de IDs de carreras
 * @param string $modalidad 'pregrado' o 'virtual'
 * @return array Carreras agrupadas por modalidad y facultad
 */
function get_specific_careers($career_ids, $modalidad = 'pregrado') {
  if (empty($career_ids)) {
    return [];
  }

  $filtered_careers = [$modalidad => []];

  foreach ($career_ids as $career_id) {
    // Verificar que la carrera existe y está publicada
    if (get_post_status($career_id) !== 'publish') {
      continue;
    }

    // Determinar la taxonomía según el post_type de la carrera
    $post_type = get_post_type($career_id);
    $taxonomy = ($post_type === 'carreras-a-distancia') ? 'categoria-carrera-distancia' : 'categoria-carrera';

    $title = get_the_title($career_id);
    $slug = get_post_field('post_name', $career_id);
    $facultades = get_the_terms($career_id, $taxonomy);
    $facultad = ($facultades && !is_wp_error($facultades)) ? $facultades[0]->name : 'Sin facultad';

    // Código CRM según el tipo de carrera
    $code = ($post_type === 'carreras-a-distancia')
      ? get_post_meta($career_id, 'crm_code_virtual', true)
      : get_post_meta($career_id, 'crm_code', true);

    $filtered_careers[$modalidad][$facultad][] = [
      'id'        => $career_id,
      'slug'      => $slug,
      'title'     => $title,
      'modalidad' => $modalidad,
      'code'      => $code,
    ];
  }

  return $filtered_careers;
}

/**
 * Obtiene el código CRM de la carrera única seleccionada
 * (Solo cuando hay una sola carrera seleccionada)
 *
 * @param int $event_id ID del evento
 * @param string $type Modalidad del evento (Presencial/Virtual)
 * @return string|null Código CRM o null si no aplica
 */
function get_event_single_career_code($event_id = null, $type = 'Presencial') {
  if (!$event_id) {
    $event_id = get_the_ID();
  }

  $conf_event = get_field('conf_event', $event_id) ?: [];
  $selected_careers = $conf_event['selected_careers'] ?? [];

  // Solo retornar código si hay exactamente una carrera seleccionada
  if (empty($selected_careers) || count($selected_careers) !== 1) {
    return null;
  }

  $career_id = $selected_careers[0];
  $modalidad = ($type === 'Virtual') ? 'virtual' : 'pregrado';

  // Código CRM
  $code = ($modalidad === 'pregrado')
    ? get_post_meta($career_id, 'crm_code', true)
    : get_post_meta($career_id, 'crm_code_virtual', true);

  return $code ?: null;
}

/**
 * Verifica si el formulario del evento debe mostrar el selector de carreras
 *
 * @param int $event_id ID del evento
 * @return bool True si debe mostrar el selector, False si es campo oculto
 */
function event_should_show_career_selector($event_id = null) {
  if (!$event_id) {
    $event_id = get_the_ID();
  }

  $conf_event = get_field('conf_event', $event_id) ?: [];
  $selected_careers = $conf_event['selected_careers'] ?? [];

  // Si hay exactamente una carrera, NO mostrar selector (será campo oculto)
  if (!empty($selected_careers) && count($selected_careers) === 1) {
    return false;
  }

  // En cualquier otro caso, mostrar el selector
  return true;
}
