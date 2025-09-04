<?php
// Normalizar $args
$args  = isset($args) && is_array($args) ? $args : [];

$title = isset($args['title']) ? $args['title'] : 'Preguntas Frecuentes';

// ACF puede devolver false en repeaters vacíos: aseguremos arreglo vacío
$faq_raw = $args['faq'] ?? null;
$faq     = is_iterable($faq_raw) ? $faq_raw : [];


?>
<?php if(wp_is_nonempty_array($faq)){ ?>
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
    <?php foreach ($faq as $item) :
       $label   = get_value_or_default($item['title']);
      $content =  get_value_or_default($item['description']);

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
<?php } ?>