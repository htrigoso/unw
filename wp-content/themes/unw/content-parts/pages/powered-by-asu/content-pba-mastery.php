<?php
$mastery = get_field('mastery');
if(!isset($mastery )&& !is_array($mastery)){
  return;
}
?>
<section class="pba-mastery">
  <div class="x-container x-container--pad-213 pba-mastery__wrapper">
    <?php if (!empty($mastery['master_programs'])): ?>
    <h2 class="pba-mastery__title"><?php echo esc_html($mastery['master_programs']['title']); ?></h2>
    <div class="pba-mastery__content">
      <p class="pba-mastery__content--desc"><?php echo $mastery['master_programs']['description']; ?></p>
      <div class="pba-mastery__content--cards">
        <?php foreach ($mastery['master_programs']['logos'] as $program): ?>
        <div class="pba-mastery__content--card">
          <img src="<?php echo esc_url($program['logo']['url']); ?>"
            alt="<?php echo esc_attr($program['logo']['alt'] ?? ''); ?>">
          <span><?php echo esc_html($program['description']); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
    <div class="pba-mastery__more">
      <div class="pba-mastery__more-card">
        <h4 class="pba-mastery__more--title"><?= esc_html($mastery['master']['title'])?></h4>
        <p class="pba-mastery__more--desc">
          <?= nl2br(wp_kses_post($mastery['master']['description']));?>
        </p>
      </div>
    </div>
  </div>
</section>
