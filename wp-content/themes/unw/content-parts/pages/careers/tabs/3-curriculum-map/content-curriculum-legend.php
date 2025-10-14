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
        <img class="curriculum-legend__logo lazyload" src="<?php echo esc_url($curriculum_legend['icon']['url']); ?>"
          src="<?php echo esc_url($curriculum_legend['icon']['alt']); ?>" />
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
              $color_hex = '';


              if (!empty($option['color_faculty_hex']) && is_object($option['color_faculty_hex']) && !empty($option['color_faculty_hex']->ID)) {
                $color_hex = get_the_excerpt($option['color_faculty_hex']->ID);
              }
            ?>
        <li class="curriculum-legend__item">
          <div class="curriculum-legend__dot">
            <span class="dot" style="background-color:<?= esc_attr($color_hex) ?>"></span>
          </div>
          <?php echo esc_html($title); ?>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

      <?php if (!empty($curriculum_legend['notes'])): ?>
      <div class="curriculum-legend__notes">
        <?php foreach ($curriculum_legend['notes'] as $note): ?>
        <div class="curriculum-legend__note" data-content="paragraph">
          <?php echo wp_kses_post($note['content'] ?? ''); ?>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
