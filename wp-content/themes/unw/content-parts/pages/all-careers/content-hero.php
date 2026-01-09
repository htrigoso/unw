<?php
$hero_slide = $args['hero_slide'] ?? [];
$current_post_type = get_post_type();
?>

<section class="all-careers-hero">
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'hero-slide', $hero_slide);
  ?>

  <?php
  $hide_careers_form = get_field('careers_hide_form', 'options');
  if (!$hide_careers_form) :
  ?>
  <div class="x-container all-careers-hero__form__wrapper">
    <div class="all-careers-hero__form">
      <?php
       if(is_page('carreras-uwiener') || $current_post_type == 'carreras') {
           get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-pregrado', [
            'vertical_modality' => true,
            'position_form' => 'desktop'
          ]);
       }

       if(is_page('carreras-a-distancia')) {
          get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-distancia-base', [
            'vertical_modality' => true,
            'position_form' => 'desktop'
          ]);
       }

       if($current_post_type == 'carreras-a-distancia') {
         get_template_part(ALL_CAREERS_FORMS_PATH, 'category-form-distancia', [
            'vertical_modality' => true,
            'position_form' => 'desktop'
          ]);
       }
      ?>
    </div>
  </div>
  <?php endif; ?>
</section>
