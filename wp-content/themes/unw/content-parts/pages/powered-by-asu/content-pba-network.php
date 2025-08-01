<?php
$network = get_field('network');

?>

<section class="pba-network">
  <div class="x-container x-container--pad-213 pba-network__wrapper">
    <div class="pba-network__card">
      <div class="pba-network__card--content">
        <p class="pba-network__card--text">
          <?php echo nl2br($network['title']); ?>
        </p>
      </div>
      <div class="pba-network__card--image">
        <img src="<?php echo esc_url($network['image']['url']); ?>"
          alt="<?php echo esc_attr($network['image']['alt'] ?? ''); ?>">
      </div>
    </div>

    <?php if (!empty($network['master_programs'])): ?>
    <div class="pba-network__mastering">
      <div class="pba-network__mastering--content">
        <h3 class="pba-network__mastering--title"><?php echo esc_html($network['master_programs']['title']); ?></h3>
        <p><?php echo $network['master_programs']['description']; ?></p>
      </div>
      <div class="pba-network__mastering--cards">
        <?php foreach ($network['master_programs']['logos'] as $program): ?>
        <div class="pba-network__mastering--card">
          <img src="<?php echo esc_url($program['logo']['url']); ?>"
            alt="<?php echo esc_attr($program['logo']['alt'] ?? ''); ?>">
          <span><?php echo esc_html($program['description']); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
