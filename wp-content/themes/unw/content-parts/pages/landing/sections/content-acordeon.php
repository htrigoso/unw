<?php

$data = get_query_var('section_data', null);
$title = $data['title'] ?? 'Preguntas Frecuentes';
$faq_raw = $data['cards'] ?? null;
$faq = is_iterable($faq_raw) ? $faq_raw : [];
?>
<section class="landing-faq">
  <div class="x-container x-container--pad-213">
    <h2 class="faq-section__title">
      <span><?= esc_html($title); ?></span>
    </h2>

    <div class="dynamic-accordion">
      <?php foreach ($faq as $item) :
        $label = get_value_or_default($item['title']);
        $content = get_value_or_default($item['content']);

        get_template_part(
          COMMON_CONTENT_PATH,
          'accordion',
          [
            'label'   => $label,
            'content' => $content,
          ]
        );
      endforeach; ?>
    </div>
  </div>
</section>
