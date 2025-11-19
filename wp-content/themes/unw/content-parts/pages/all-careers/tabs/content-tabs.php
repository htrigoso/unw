<?php
$mode = $args['mode'] ?? null;
$tabs = $args['tabs'] ?? [];
$current_faculty_id = $args['current_faculty_id'] ?? 0;
$careers_posts = $args['careers_posts'] ?? [];
?>
<div class="all-careers-tabs">
  <div class="x-container x-container--pad-213 all-careers-tabs__form">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'more-info-form', ['shadow_box' => true, 'responsive' => true]);
    ?>
  </div>
  <div class="x-container all-careers-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs'  => $tabs,
      'is_url'    => true,
      'active_id' => $current_faculty_id,
      'show_controls' => true
    ]);
    ?>
  </div>
  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">
      <div class="tab__content" role="tabpanel" aria-labelledby="tab">
        <?php
        $cards = [];
        foreach ($careers_posts as $career) {
          $img = get_the_post_thumbnail_url($career->ID, 'medium_large');
          $cards[] = [
            'image'       => $img,
            'image_alt'   => $career->post_title,
            'title'       => $career->post_title,
            'link'        => get_permalink($career->ID),
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
