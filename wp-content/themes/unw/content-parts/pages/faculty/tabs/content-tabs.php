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
      <?php foreach ($tabs as $i => $tab): ?>
      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
        role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
        <?php
          get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty', null, [
              'id'=> $tab['id']
            ]);
          ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
