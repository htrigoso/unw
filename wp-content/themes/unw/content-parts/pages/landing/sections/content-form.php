<section class="x-container x-container--pad-213 content-form-section">
  <?php
  // Obtener la data pasada por set_query_var
  $data = get_query_var('section_data');
  get_template_part(COMMON_CONTENT_PATH, 'more-info-form', [
    'shadow_box' => true,
    'form_id' => $data['form_id'] ?? 'form-general-mobile',
    'form_type'=> $data['form_id'] ?? 'form-general-mobile',
  ]);
  ?>
</section>
