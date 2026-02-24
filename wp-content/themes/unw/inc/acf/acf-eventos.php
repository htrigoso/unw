<?php
/**
 * ACF Fields para Eventos - Configuración de Modalidad y Carreras
 * Agrega campos de configuración al grupo event_info existente
 */

add_action('acf/init', 'add_acf_eventos_config_fields');

function add_acf_eventos_config_fields() {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  // Agregar campos de configuración al grupo event_info existente
  acf_add_local_field_group([
    'key' => 'group_eventos_config',
    'title' => 'Configuración del Formulario',
    'fields' => [
      [
        'key' => 'field_event_conf_accordion',
        'label' => 'Configuración del Formulario',
        'name' => 'accordion_config',
        'type' => 'accordion',
        'open' => 1,
        'multi_expand' => 1,
        'endpoint' => 0,
      ],
      [
        'key' => 'field_event_conf_group',
        'label' => 'Configuración del Evento',
        'name' => 'conf_event',
        'type' => 'group',
        'layout' => 'block',
        'sub_fields' => [
          [
            'key' => 'field_event_conf_type',
            'label' => 'Modalidad',
            'name' => 'type',
            'type' => 'radio',
            'choices' => [
              'Presencial' => 'Presencial',
              'Virtual' => 'Virtual',
            ],
            'default_value' => 'Presencial',
            'layout' => 'vertical',
            'required' => 1,
          ],
          [
            'key' => 'field_event_conf_code_presencial',
            'label' => 'Código del Evento Presencial',
            'name' => 'code_event_presencial',
            'type' => 'text',
            'required' => 0,
            'conditional_logic' => [
              [
                [
                  'field' => 'field_event_conf_type',
                  'operator' => '==',
                  'value' => 'Presencial',
                ],
              ],
            ],
          ],
          [
            'key' => 'field_event_conf_code_virtual',
            'label' => 'Código del Evento Virtual',
            'name' => 'code_event_virtual',
            'type' => 'text',
            'required' => 0,
            'conditional_logic' => [
              [
                [
                  'field' => 'field_event_conf_type',
                  'operator' => '==',
                  'value' => 'Virtual',
                ],
              ],
            ],
          ],
          [
            'key' => 'field_event_conf_selected_careers',
            'label' => 'Seleccionar Carrera',
            'name' => 'selected_careers',
            'type' => 'post_object',
            'post_type' => ['carreras', 'carreras-a-distancia'],
            'multiple' => 1,
            'return_format' => 'id',
            'ui' => 1,
            'allow_null' => 1,
            'instructions' => '(Por defecto están todas marcas)',
          ],
        ],
      ],
      [
        'key' => 'field_event_conf_accordion_end',
        'label' => 'Endpoint',
        'type' => 'accordion',
        'endpoint' => 1,
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'eventos',
        ],
      ],
    ],
    'menu_order' => 1,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active' => true,
  ]);
}

/**
 * Filtra las opciones de carreras disponibles según la modalidad seleccionada
 */
add_filter('acf/fields/post_object/query/name=selected_careers', 'filter_careers_query_by_modality', 10, 3);

function filter_careers_query_by_modality($args, $field, $post_id) {
  // Obtener la modalidad actual del evento desde el grupo conf_event
  $conf_event = get_field('conf_event', $post_id);
  $modality = $conf_event['type'] ?? 'Presencial';

  // Ajustar el query según la modalidad
  if ($modality === 'Virtual') {
    $args['post_type'] = ['carreras-a-distancia'];
  } else {
    $args['post_type'] = ['carreras'];
  }

  // Solo mostrar carreras publicadas
  $args['post_status'] = 'publish';

  return $args;
}

/**
 * Agrega JavaScript para limpiar las carreras seleccionadas cuando cambia la modalidad
 */
add_action('acf/input/admin_footer', 'add_acf_eventos_clear_careers_script');

function add_acf_eventos_clear_careers_script() {
  // Solo ejecutar en la página de edición de eventos
  $screen = get_current_screen();
  if (!$screen || $screen->post_type !== 'eventos') {
    return;
  }
  ?>
<script type="text/javascript">
(function($) {
  if (typeof acf === 'undefined') return;

  // Esperar a que ACF esté listo
  acf.addAction('ready', function() {
    // Buscar el campo de modalidad
    var modalityField = acf.getField('field_event_conf_type');

    if (!modalityField) return;

    // Variable para guardar la modalidad anterior
    var previousModality = modalityField.val();

    // Escuchar cambios en el campo de modalidad
    modalityField.on('change', function() {
      var currentModality = modalityField.val();

      // Solo limpiar si realmente cambió
      if (previousModality !== currentModality) {
        // Buscar el campo de carreras
        var careersField = acf.getField('field_event_conf_selected_careers');

        if (careersField) {
          // Limpiar las carreras seleccionadas
          careersField.val(null);

          console.log('Modalidad cambiada de "' + previousModality + '" a "' + currentModality +
            '". Carreras limpiadas.');
        }

        // Actualizar la modalidad anterior
        previousModality = currentModality;
      }
    });
  });
})(jQuery);
</script>
<?php
}
