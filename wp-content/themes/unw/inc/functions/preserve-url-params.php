<?php
/**
 * Preservar parámetros de URL en formularios
 *
 * @param array $exclude_params Parámetros a excluir (además de 's')
 * @return void
 */
function preserve_url_params($exclude_params = []) {
  // Siempre excluir 's' (parámetro de búsqueda)
  $exclude_params[] = 's';

  foreach ($_GET as $param => $value) {
    if (!in_array($param, $exclude_params) && !empty($value)) {
      $sanitized_value = sanitize_text_field(wp_unslash($value));
      echo '<input type="hidden" name="' . esc_attr($param) . '" value="' . esc_attr($sanitized_value) . '" />';
    }
  }
}