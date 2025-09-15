<?php

add_action('wp_enqueue_scripts', function () {
  // Plantillas donde se requiere cargar los estilos y scripts
  $templates = [
    'template-centro-de-terapia-fisica-y-rehabilitacion.php',
    'template-centros-analisis-clinico.php',
    'template-centro-odontologico.php',
    'template-centro-de-idiomas.php',
    'template-centros-wiener.php',
    'template-servicios-universitarios.php',
    'template-becas.php',
    'template-responsabilidad-social.php',
    'template-registros-academicos.php',
    'template-secretaria-general.php',
    'template-bienestar-estudiantil.php',
    'template-direccion-de-empleabilidad-y-alumni.php',
    'template-defensoria-universitaria.php',
    'template-internacionalizacion.php',
    'template-trasparencia.php',
    'template-politicas-de-privacidad.php',

    'template-promocion-cultural.php',
    'template-promocion-deporte.php',
    'template-servicios-psicopedagogicos.php',
    'template-servicios-medicos.php',
    'template-autenticacion-documentos.php',
    'template-autenticacion-silabos.php',
    'template-duplicado-documentos.php',
    'template-fedateo-documentos.php',
    'template-fedateo-documentos.php',
    'template-constancia-grado-academico-otros.php',
    'template-duplicado-grado-academico.php',
    'template-expedicion-diploma-grado-academico.php',
    'template-cronograma-sustentaciones.php',
    'template-constancia-promedio-ponderado.php',
    'template-duplicado-record-notas.php',
    'template-constancia-estudios.php',
    'template-constancia-horas-curso.php',
    'template-historial-academico.php',
    'template-certificado-estudios-ciclo.php',
    'template-modificacion-datos-sistema-foto.php'
  ];

  $template_paths = array_map(fn($tpl) => 'templates/' . $tpl, $templates);

if (!is_page_template($template_paths)) {
  return;
}

  $base_dir = get_stylesheet_directory();
  $base_url = get_stylesheet_directory_uri();

  // Archivos a cargar
  $assets = [
    'webflow-style' => [
      'type' => 'style',
      'path' => '/assets/css/webflow.css',
    ],
    'stylemain-style' => [
      'type' => 'style',
      'path' => '/assets/css/style.css',
    ],
    'jquery-custom' => [
      'type' => 'script',
      'path' => '/assets/js/jquery.min.js',
      'deps' => [],
    ],
    'js-custom' => [
      'type' => 'script',
      'path' => '/assets/js/main.js',
      'deps' => [],
    ],
    'webflow-script' => [
      'type' => 'script',
      'path' => '/assets/js/webflow.js',
      'deps' => ['jquery-custom'],
    ],
  ];

  foreach ($assets as $handle => $asset) {
    $full_path = $base_dir . $asset['path'];
    $full_url  = $base_url . $asset['path'];

    // Si el archivo no existe, lo omitimos
    if (!file_exists($full_path)) {
      continue;
    }

    $version = filemtime($full_path);

    if ($asset['type'] === 'style') {
      wp_enqueue_style($handle, $full_url, [], $version);
    }

    if ($asset['type'] === 'script') {
      wp_enqueue_script($handle, $full_url, $asset['deps'], $version, true);
    }
  }
});
