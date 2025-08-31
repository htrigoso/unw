<?php

$current_id = get_current_term_id();
$tabs = $args['tabs'] ?? [];
$carreras_query = get_carreras_by_facultad_filter(get_current_facultad_slug());
$facultad_carreras = [];
 foreach ($carreras_query->posts as $carrera) {
    $facultades = wp_get_post_terms($carrera->ID, 'facultad');
    if (!empty($facultades)) {
        foreach ($facultades as $facultad) {
            $facultad_carreras[] = $carrera;
        }
    }
}
?>

<div class="all-careers-tabs">
  <div class="x-container all-careers-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
        'nav_tabs' => $tabs,
        'is_url' => true,
        'active_id' => $current_id,
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">

      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
        role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">

        <?php
        $cards = [];
        foreach ($facultad_carreras as $carrera) {
            $cards[] = [
                'image' => get_the_post_thumbnail_url($carrera->ID, 'full') ?: UPLOAD_PATH . '/all-careers/default.jpg',
                'image_alt' => $carrera->post_title,
                'title' => $carrera->post_title,
                'link' => get_permalink($carrera->ID),
                'link_title' => 'Ver carrera',
                'link_target' => '_blank',
            ];
        }
        get_template_part(ALL_CAREERS_TABS_PATH, 'body', ['cards' => $cards]);
        ?>

      </div>

    </div>
  </div>
</div>