<?php
$label = $args['label'];
$description = $args['description'];
$requirements = $args['requirements'];
?>

<?php ob_start(); ?>
<div class="modality-accordion">
  <h4 class="modality-accordion__title">Dirigido a:</h4>
  <p class="modality-accordion__desc"><?= esc_attr($description) ?></p>
  <h4 class="modality-accordion__subtitle">Requisitos:</h4>
  <ol class="modality-accordion__list">
    <?php foreach ($requirements as $j => $requirement) { ?>
      <li class="modality-accordion__list--item">
        <div class="modality-accordion__list--item--number">
          <?= $j + 1 ?>
        </div>
        <span class="modality-accordion__list--item--text">
          <?= esc_attr($requirement) ?>
        </span>
      </li>
    <?php } ?>
  </ol>

</div>
<?php
$content = ob_get_clean();
?>

<?php
get_template_part(COMMON_CONTENT_PATH, 'accordion', [
  'label' => $label,
  'content' => $content,
  'variant' => 'filled',
]); ?>
