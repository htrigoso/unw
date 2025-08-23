<?php
$title = $args['title'] ?? 'Preguntas Frecuentes';
// (Title, description) []
$faq = $args['faq'] ?? [];
?>

<div class="faq-section">
  <h2 class="faq-section__title">
    <i>
      <svg width="32" height="32">
        <use xlink:href="#question-mark"></use>
      </svg>
    </i>
    <span><?= esc_html($title); ?></span>
  </h2>
  <div class="dynamic-accordion">
    <?php foreach ($faq as $item) {
      get_template_part(COMMON_CONTENT_PATH, 'accordion', [
        'label' => $item['title'],
        'content' => $item['description'],
      ]);
    } ?>
  </div>
</div>
