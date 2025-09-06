<?php
$current_facultad = get_queried_object();
$current_id = $current_facultad && isset($current_facultad->ID) ? $current_facultad->ID : null;

$tabs_items = get_posts(array(
    'post_type'      => 'facultad',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
));



$tabs = [];
if ($tabs_items) {
  foreach ($tabs_items as $item) {
    $tabs[] = [
      'id'    => $item->ID,
      'label' => $item->post_title,
      'url'  => esc_url(get_permalink($item->ID)),
      'target' => sanitize_title($item->post_title),
    ];
  }
}

?>

<div class="faculty-tabs">
  <div class="x-container faculty-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs,
       'is_url' => true,
      'active_id' => $current_id,
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="faculty-tabs__content">

      <div class="tab__content" role="tabpanel">
        <?php
          get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty', null, [
              'id'=> $current_id,
            ]);
          ?>
      </div>

    </div>
  </div>
</div>
