<?php
$curriculum_legend = $args['curriculum_legend'] ?? null;

$default_dot_colors = [
  'blue',
  'orange',
  'gray',
  'purple',
  'green',
  'blue-dark',
  'yellow',
  'pink',
];
?>

<?php if (!empty($curriculum_legend)): ?>
<section class="curriculum-legend" aria-labelledby="curriculum-legend-title">
  <div class="curriculum-legend__wrapper">
    <div class="curriculum-legend__header">
      <h2 id="curriculum-legend-title" class="curriculum-legend__title">
        <?php echo esc_html($curriculum_legend['title'] ?? 'Leyenda de Malla Curricular'); ?>
      </h2>
      <div class="curriculum-legend__description">
        <?php if (!empty($curriculum_legend['icon']['url'])): ?>
        <img class="curriculum-legend__logo" src="<?php echo esc_url($curriculum_legend['icon']['url']); ?>" alt="" />
        <?php endif; ?>
        <?php if (!empty($curriculum_legend['description'])): ?>
        <p class="curriculum-legend__paragraph">
          <?php echo $curriculum_legend['description']; ?>
        </p>
        <?php endif; ?>
      </div>
    </div>

    <div class="curriculum-legend__content">
      <?php if (!empty($curriculum_legend['options'])): ?>
      <ul class="curriculum-legend__list">
        <?php foreach ($curriculum_legend['options'] as $i => $option): ?>
        <?php
              $title = $option['title'] ?? '';
              $color = $option['color'] ?? $default_dot_colors[$i % count($default_dot_colors)];
              $class = 'dot--' . sanitize_html_class($color);
            ?>
        <li class="curriculum-legend__item">
          <div class="curriculum-legend__dot">
            <span class="dot <?php echo esc_attr($class); ?>"></span>
          </div>
          <?php echo esc_html($title); ?>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

      <?php if (!empty($curriculum_legend['notes'])): ?>
      <ul class="curriculum-legend__notes">
        <?php foreach ($curriculum_legend['notes'] as $note): ?>
        <li class="curriculum-legend__note">
          <?php echo esc_html($note['content'] ?? ''); ?>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
