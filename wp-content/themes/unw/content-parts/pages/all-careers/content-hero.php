<?php
$hero_slide = $args['hero_slide'] ?? [];
?>

<section class="all-careers-hero">
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'hero-slide', $hero_slide);
  ?>

  <div class="x-container all-careers-hero__form__wrapper">
    <div class="all-careers-hero__form">
      <?php
      get_template_part(ALL_CAREERS_FORM_PATH, 'category-form', [
        'vertical_modality' => true,
        'position_form' => 'desktop'
      ]);
      ?>
    </div>
  </div>
</section>
