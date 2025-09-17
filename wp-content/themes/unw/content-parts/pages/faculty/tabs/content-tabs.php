<?php
$current_facultad = get_queried_object();

// En taxonomías el ID es "term_id"
$current_id = $current_facultad && isset($current_facultad->term_id) ? $current_facultad->term_id : null;

// Obtener todas las facultades (términos de la taxonomía)
$tabs_items = get_terms(array(
    'taxonomy'   => 'facultad',
    'hide_empty' => false,
));

$tabs = [];
if (!is_wp_error($tabs_items) && $tabs_items) {
  foreach ($tabs_items as $item) {
    $tabs[] = [
      'id'     => $item->term_id,
      'label'  => $item->name,
      'url'    => esc_url(get_term_link($item)),
      'target' => sanitize_title($item->slug),
    ];
  }
}
?>

<div class="faculty-tabs">
  <div class="x-container faculty-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs'   => $tabs,
      'is_url'     => true,
      'active_id'  => $current_id,
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="faculty-tabs__content">
      <div class="tab__content" role="tabpanel">
        <?php
        get_template_part(
          FACULTY_CONTENT_TAB_PATH . 'content-faculty',
          null,
          [
            'id' => $current_id,
          ]
        );
        ?>
      </div>
    </div>
  </div>
</div>