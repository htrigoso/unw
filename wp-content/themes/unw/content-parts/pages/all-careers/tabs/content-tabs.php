<?php
// Term activo (ID) — intenta desde tu helper; si viene vacío, resuélvelo desde el slug actual.
$current_id = get_current_term_id();
if (!$current_id) {
  $slug_actual = get_current_facultad_slug(); // debe leer query var 'facultad'
  if ($slug_actual) {
    $term_obj = get_term_by('slug', $slug_actual, 'facultad');
    $current_id = ($term_obj && !is_wp_error($term_obj)) ? (int) $term_obj->term_id : 0;
  }
}

// Tabs (si vienen por $args)
$tabs = $args['tabs'] ?? [];

// Query por facultad (si no hay slug trae todas)
$facultad_slug   = get_current_facultad_slug();
$carreras_query  = get_carreras_by_facultad_filter($facultad_slug);

// Usar directamente los posts del query (sin re-duplicar por términos)
$carreras_posts = !empty($carreras_query->posts) ? $carreras_query->posts : [];
?>

<div class="all-careers-tabs">
  <div class="x-container all-careers-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs'  => $tabs,
      'is_url'    => true,
      'active_id' => $current_id,
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">
      <div class="tab__content" role="tabpanel" aria-labelledby="tab">
        <?php
        $cards = [];
        foreach ($carreras_posts as $carrera) {
          $img = get_the_post_thumbnail_url($carrera->ID, 'full');
          $cards[] = [
            'image'       => $img ?: UPLOAD_PATH . '/all-careers/default.jpg', // si no quieres default, elimina el fallback
            'image_alt'   => $carrera->post_title,
            'title'       => $carrera->post_title,
            'link'        => get_permalink($carrera->ID),
            'link_title'  => 'Ver carrera',
            'link_target' => '_blank',
          ];
        }

        get_template_part(ALL_CAREERS_TABS_PATH, 'body', ['cards' => $cards]);
        ?>
      </div>
    </div>
  </div>
</div>
