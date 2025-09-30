<?php
$career_field = $args['career_field'] ?? null;

?>

<?php if (!empty($career_field)): ?>
<section class="career-field">
  <?php if (!empty($career_field['title'])): ?>
  <h2 class="career-field__title"><?php echo esc_html($career_field['title']); ?></h2>
  <?php endif; ?>

  <?php if (!empty($career_field['description'])): ?>
  <div class="career-field__description" data-content="paragraph">
    <?php echo wp_kses_post(wpautop($career_field['description'])); ?>
  </div>
  <?php endif; ?>

  <?php if (!empty($career_field['options']) && is_array($career_field['options'])): ?>
  <ul class="career-field__list">
    <?php foreach ($career_field['options'] as $index => $area): ?>
    <li class="career-field__item">
      <div class="career-field__item-number">
        <?php echo $index + 1; ?>.
      </div>
      <h3 class="career-field__item-title"><?php echo esc_html($area['title'] ?? ''); ?></h3>
      <div class="career-field__item-description" data-content="paragraph">
        <?php echo wp_kses_post($area['description']); ?></div>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</section>
<?php endif; ?>
