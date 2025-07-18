<?php
$tabs_items = get_field('tabs');
$tabs = [];
if ($tabs_items) {
  foreach ($tabs_items as $item) {
    $tabs[] = [
      'id'    => $item->ID,
      'label' => $item->post_title,
      'target' => sanitize_title($item->post_title)
    ];
  }
}

?>

<div class="faculty-tabs">
  <div class="x-container faculty-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
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
