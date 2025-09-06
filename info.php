<?php
/**
 * set-thumbs-cursos.php
 * Ejecuta: http://tu-sitio.local/set-thumbs-cursos.php (logueado como admin)
 */
require __DIR__ . '/wp-load.php';

/* ========== CONFIG ========== */
// 👉 Pon aquí la URL de la imagen a usar
$THUMBNAIL_URL = 'http://unw.loc/wp-content/uploads/2025/09/icon-212.png';

// 👉 Solo 3 registros de ejemplo (luego tú completas el array)
 
$titulos = [
  'Inglés I',
  'Inglés II (virtual)',
  'DESARROLLO HUMANO Y SOCIAL',
  'Manejo del Estrés para el Bienestar',
  'Fundamentos del Bienestar',
  'Impacto de la Actividad Física en la Salud y Enfermedad',
  'Determinantes Sociales de Salud y Conductas de Salud',
  'Salud Ambiental y Urbana',
  'Métodos de Investigación para Profesionales de Salud',
  'La Dieta Occidental',
  'Antropología Médica: Cultura y Salud',
  'estructura  y  función del cuerpo humano',
  'prácticas en enfermería I',
  'estilo de vida, salud y medio ambiente',
  'sistema musculoesquelético',
  'sistema nervioso y endocrino',
  'sistema cardiorespiratorio',
  'sistema tegumentario',
  'práctica en enfermería III',
  'sistema urinario y reproductivo',
  'sistema digestivo',
  'mecanismos de agresión y defensa III',
  'prevención y promoción de la salud',
  'salud del niño y adolescente',
  'salud de la mujer y neonato',
  'ciencia y descubrimiento',
  'gestión clínica y hospitalaria',
  'salud del adulto',
  'salud del adulto mayor',
  'salud comunitaria y familiar',
  'cuidados paliativos y del fin de la vida',
  'fundamentos químicos i',
  'fundamentos químicos ii',
  'so i - circulación, respiración, eliminación, y equilibrio ácido-básico',
  'instrumentación y química analítica',
  'biofarmacia y farmacocinética',
  'so ii - digestión, absorción, reprodución, y control endocrino',
  'terapéutica farmacológica i',
  'so iii- soporte, movimiento, y control neural',
  'prevención y promoción de la salud',
  'terapéutica farmacológica II',
  'laboratorio y diagnóstico I',
  'ciencia y descubrimiento',
  'tecnologías biomédicas',
  'procesos celulares y moleculares II',
  'estructura y función del cuerpo humano',
  'procesos celulares y moleculares II',
  'bases de la terapéutica farmacológica',
  'mecanismos de agresión y defensa I',
  'prácticas médicas III',
  'mecanismos de agresión y defensa II',
  'prácticas médicas IV',
  'prevención y promoción de la salud',
  'mecanismos de agresión y defensa III',
  'salud del niño y del adolescente',
  'ciencia y descubrimiento',
  'tecnologías biomédicas',
  'prácticas en nutrición i',
  'interacción droga-nutriente',
  'nutrición comunitaria y social',
  'nutrición y dietoterapia materno-infantil',
  'prevención y promoción de la salud',
  'prácticas en servicios de alimentación y nutrición',
  'nutrición y dietoterapia del adulto',
  'nutrición y dietoterapia del niño y del adolescente',
  'ciencia y descubrimiento',
  'transtornos de la conducta alimentaria',
  'nutrición y dietoterapia del adulto mayor',
  'mercadotecnia en nutrición',
  'nutrición, actividad física y deporte',
  'soporte enteral y parenteral',
  'nutrigenómica',
  'prácticas integradas en dietoterapia',
  'aspectos sociales de la sexualidad, género y embarazo',
  'nutrición en la salud sexual y reproductiva',
  'prevención y promoción de la salud',
  'ciencia y descubrimiento',
  'tecnologías de la información en salud',
  'prácticas en odontología i',
  'estructura y función del complejo orofacial i',
  'mecanismos de agresión y defensa en el complejo orofacial i',
  'nutrición para la salud oral',
  'prevención y promoción de la salud',
  'tecnologías biomédicas',
  'ciencia y descubrimiento',
  'mercadotecnia en odontología',
  'bases estructurales y funcionales del comportamiento humano',
  'introducción a la práctica de la psicología',
  'desarrollo del niño y del adolescente',
  'teorías psicológicas del comportamiento humano',
  'procesos psicológicos i',
  'desarrollo del adulto y del adulto mayor',
  'sexualidad humana',
  'psicopatología del adulto i',
  'psicofarmacología',
  'neurociencia del aprendizaje',
  'prevención y promoción de la salud',
  'psicopatología del adulto ii',
  'gestión del talento humano',
  'ciencia y descubrimiento',
  'procesos psicopatológicos en niños y adolescentes',
  'consejería psicológica',
  'intervenciones en salud',
  'intervenciones grupales y comunitarias',
  'sistemas orgánicos',
  'prevención y promoción de la salud',
  'ciencia y descubrimiento',
  'inmunología clínica',
  'tecnologías biomédicas',
  'sistema nervioso',
  'sistema cardiorrespiratorio',
  'sistema urogenital',
  'lesión e inflamación',
  'ciencia y descubrimiento',
  'fisioterapia respiratoria y cardiovascular',
  'cuidados paleativos y del fin de vida',
  'conceptos fundamentales del derecho',
  'filosofía del derecho y la sociología jurídica',
  'liderazgo y habilidades jurídicas',
  'comunicación de alto impacto',
  'derecho comercial',
  'ética y responsabilidad profesional del abogado',
  'organización del derecho internacional',
  'psicología del conflicto',
  'mediación',
  'negociación',
  'arbitraje',
  'introducción a la ética',
  'introducción a la ingeniería',
  'principios de programación',
  'estadística',
  'análisis de estructura de datos y algoritmos',
  'inglés iii',
  'programación orientada a objetos y estructura de datos',
  'base de datos',
  'matemática discreta',
  'fundamentos de sistemas computacionales',
  'álgebra lineal',
  'introducción a los lenguajes de programación',
  'física ii',
  'sistemas operativos y programación',
  'software i: proceso personal y calidad',
  'arquitectura de computadoras',
  'arquitectura tecnológica en la nube',
  'investigación e innovación',
  'redes de computadoras',
  'software ii: diseño y proceso',
  'software iii: construcción y transición',
  'ingeniería de software seguro',
  'desarrollo de aplicaciones web',
  'software iv: inicio y elaboración',
  'desarrollo de aplicaciones móviles',
  'software v: procesos y gestión de proyectos',
  'agilidad en el software',
  'principios de los sistemas de software distribuido',
  'validación y pruebas de software',
  'gestión de proyectos, procesos y calidad del software',
  'computación distribuida',
  'integración de software e ingeniería',
  'emprendimiento tecnológico',
  'química general',
  'estructura y propiedades de los materiales',
  'probabilidad y estadística para ingenieros',
  'comunicación de alto impacto',
  'inglés iv',
  'física i',
  'álgebra lineal',
  'química industrial',
  'física ii',
  'economía empresarial',
  'estadística aplicada',
  'estática',
  'análisis económico para ingenieros',
  'gestión de procesos de negocios',
  'análisis y diseño del trabajo',
  'control de la producción',
  'investigación operativa ii',
  'gestión y control de la calidad',
  'ingeniería de sistemas de información',
  'gestión de proyectos',
  'distribución de planta y sistemas productivos',
  'ergonomía y seguridad ocupacional',
  'simulación de procesos industriales',
  'gestión del riesgo y administración de la ingeniería',
  'gestión desde la contabilidad global',
  'análisis de datos y transformación digital',
  'liderazgo y desarrollo personal',
  'marketing digital para mercados globales',
  'cadena de suministros y logística internacional',
  'introducción a la administración',
  'informática para los negocios',
  'diseño organizacional',
  'comportamiento organizacional',
  'contabilidad general',
  'gestión de stakeholders',
  'creatividad e innovación empresarial',
  'matemática financiera',
  'microeconomía',
  'liderazgo',
  'innovación en la sociedad',
  'macroeconomía',
  'fundamentos del marketing',
  'finanzas',
  'innovación y liderazgo organizacional',
  'prácticas preprofesionales',
  'gestión de la cadena de suministros',
  'análisis contable y financiero',
  'ética empresarial',
  'gestión de riesgos globales',
  'big data en la economía global',
  'comercio internacional',
  'análisis de datos y transformación digital',
  'negociación en entornos globales',
  'destinos turísticos del mundo',
  'fundamentos de gastronomía',
  'informática para los negocios',
  'turismo y desarrollo sostenible',
  'análisis de datos y transformación digital',
  'big data en la economía global',
  'liderazgo y desarrollo personal',
  'INTRODUCCIÓN A LA ÉTICA',
  'informática para los negocios',
  'comportamiento del consumidor',
  'estrategias de producto y gestión de marca',
  'estrategias de segmentación y posicionamiento',
  'marketing digital y analítica web',
  'estrategias de comunicación',
  'inteligencia de negocio',
  'publicidad y promoción de ventas',
  'marketing internacional',
  'análisis de datos y transformación digital',
  'informática para los negocios',
  'elementos de comunicación intercultural',
  'principios de marketing para organizaciones globales',
  'filosofía de la ciencia',
  'innovación y liderazgo organizacional',
  'análisis contable y financiero',
  'finanzas para organizaciones globales',
  'introducción al comercio internacional',
  'ética empresarial',
  'big data en la economía global',
  'mercados en una economía global',
  'negocios globales y desarrollo profesional',
  'negociación en entornos globales',
  'comercio internacional',
  'gestión del entorno global',
  'gestión de la cadena de suministros',
  'análisis de datos y transformación digital',
  'liderazgo y desarrollo personal',
  'análisis contable y financiero',
  'análisis de datos y transformación digital',
  'liderazgo y desarrollo personal',
  'gestión de procesos de negocios',
];

/* ========== HELPERS ========== */
function arrimp_first_upper($s) {
  $s = trim((string)$s);
  if ($s === '') return $s;
  $s = mb_strtolower($s, 'UTF-8');
  return mb_strtoupper(mb_substr($s, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($s, 1, null, 'UTF-8');
}

/**
 * Buscar curso por slug del título (evitamos get_page_by_title deprecado).
 * Si no existe, lo crea y devuelve el ID.
 */
function get_or_create_curso_by_title($raw_title) {
  $title = arrimp_first_upper($raw_title);
  $slug  = sanitize_title($title);

  $q = new WP_Query([
    'post_type'      => 'curso',
    'name'           => $slug,
    'post_status'    => 'any',
    'fields'         => 'ids',
    'posts_per_page' => 1,
    'no_found_rows'  => true,
  ]);
  if (!empty($q->posts)) {
    return (int)$q->posts[0];
  }

  $id = wp_insert_post([
    'post_title'  => $title,
    'post_name'   => $slug,
    'post_type'   => 'curso',
    'post_status' => 'publish',
  ], true);

  return is_wp_error($id) ? 0 : (int)$id;
}

/**
 * Asignar imagen destacada a partir de una URL.
 * - Si la URL ya corresponde a un adjunto, lo reutiliza.
 * - Si no, descarga y registra en la librería.
 */
function set_thumbnail_from_url($post_id, $url) {
  if (empty($url) || empty($post_id)) return false;

  // Reusar si ya es un adjunto conocido
  $attach_id = attachment_url_to_postid($url);
  if ($attach_id) {
    $current = get_post_thumbnail_id($post_id);
    if ((int)$current === (int)$attach_id) return true; // ya está puesta
    set_post_thumbnail($post_id, $attach_id);
    return true;
  }

  // Incluir funciones de media si hiciera falta
  if ( ! function_exists('download_url') ) {
    require_once ABSPATH . 'wp-admin/includes/file.php';
  }
  if ( ! function_exists('media_handle_sideload') ) {
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';
  }

  // Descargar temporalmente
  $tmp = download_url($url);
  if (is_wp_error($tmp)) {
    error_log('[thumb-import] download_url error: ' . $tmp->get_error_message() . ' | URL: ' . $url);
    return false;
  }

  $filename = basename(parse_url($url, PHP_URL_PATH));
  $filetype = wp_check_filetype($filename, null);
  if (empty($filetype['ext'])) {
    $filename .= '.jpg'; // fallback si no detecta extensión
  }

  $file_array = [
    'name'     => $filename,
    'tmp_name' => $tmp,
  ];

  // Subir a la librería
  $attach_id = media_handle_sideload($file_array, $post_id, null);
  if (is_wp_error($attach_id)) {
    @unlink($tmp);
    error_log('[thumb-import] media_handle_sideload error: ' . $attach_id->get_error_message());
    return false;
  }

  set_post_thumbnail($post_id, $attach_id);
  return true;
}

/* ========== RUNNER ========== */
if ( ! is_user_logged_in() || ! current_user_can('manage_options') ) {
  wp_die('No autorizado');
}

$ok = 0; $fail = 0; $skipped = 0;
$target_attach = attachment_url_to_postid($THUMBNAIL_URL); // si ya existe en librería

foreach ($titulos as $raw_title) {
  $curso_id = get_or_create_curso_by_title($raw_title);
  if (!$curso_id) { $fail++; continue; }

  // Si ya tiene EXACTAMENTE esta imagen, saltar
  $current_thumb = get_post_thumbnail_id($curso_id);
  if ($current_thumb && $target_attach && (int)$current_thumb === (int)$target_attach) {
    $skipped++;
    continue;
  }

  $ok_set = set_thumbnail_from_url($curso_id, $THUMBNAIL_URL);
  if ($ok_set) $ok++; else $fail++;
}

echo "Actualización finalizada. OK: {$ok}, Ya tenían esa imagen: {$skipped}, Fallidos: {$fail}";