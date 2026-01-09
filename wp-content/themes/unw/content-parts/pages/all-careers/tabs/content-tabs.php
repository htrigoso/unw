<?php
$mode = $args['mode'] ?? null;
$tabs = $args['tabs'] ?? [];
$current_faculty_id = $args['current_faculty_id'] ?? 0;
$careers_posts = $args['careers_posts'] ?? [];
$list_name = $mode === 'virtual' ? 'carreras_a_distancia' : 'carreras_pregrado';
$item_brand = $mode === 'virtual' ? 'Carrera a distancia' : 'Carrera presencial';

$current_post_type = get_post_type();

?>
<div class="all-careers-tabs">
  <?php
  $hide_careers_form = get_field('careers_hide_form', 'options');
  if (!$hide_careers_form) :
  ?>
  <div class="x-container x-container--pad-213 all-careers-tabs__form">
    <?php
     if(is_page('carreras-uwiener') || $current_post_type == 'carreras') {
           get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-pregrado', [
            'position_form' => 'mobile'
          ]);
       }

       if(is_page('carreras-a-distancia')) {
          get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-distancia-base', [
            'position_form' => 'mobile'
          ]);
       }

       if($current_post_type == 'carreras-a-distancia') {
         get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-distancia', [
            'position_form' => 'mobile'
          ]);
       }
    ?>
  </div>
  <?php endif; ?>
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
            'crm_code'    => $career->crm_code
          ];
        }
        get_template_part(ALL_CAREERS_TABS_PATH, 'body', ['cards' => $cards]);
        ?>
      </div>
    </div>
  </div>
</div>

<script data-no-delay>
/**
 * Datos de carreras para tracking de Incubeta
 * El tracking se ejecuta desde app/index.js mediante initViewItemListTracking()
 */
window.unwCareersData = {
  careers: <?php echo json_encode($careers_posts); ?>,
  listName: '<?php echo esc_js($list_name); ?>',
  itemBrand: '<?php echo esc_js($item_brand); ?>'
};
</script>
</script>
