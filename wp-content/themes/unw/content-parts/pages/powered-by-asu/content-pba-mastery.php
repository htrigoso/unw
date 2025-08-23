<?php
$network = get_field('network');

?>

<section class="pba-mastery">
  <div class="x-container x-container--pad-213 pba-mastery__wrapper">
    <?php if (!empty($network['master_programs'])): ?>
      <h2 class="pba-mastery__title"><?php echo esc_html($network['master_programs']['title']); ?></h2>
      <div class="pba-mastery__content">
        <p class="pba-mastery__content--desc"><?php echo $network['master_programs']['description']; ?></p>
        <div class="pba-mastery__content--cards">
          <?php foreach ($network['master_programs']['logos'] as $program): ?>
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
        <h4 class="pba-mastery__more--title">1 MAESTRÍA EN UN AÑO</h4>
        <p class="pba-mastery__more--desc">
          Durante el último año de tu carrera de pregrado, cursas 4 asignaturas de Arizona State University integradas a tu plan de estudios.
          <br />
          Estas se convalidan para que, <strong>con solo 1 año adicional, obtengas tu maestría en Arizona State University.</strong>
        </p>
      </div>
    </div>
  </div>
</section>
