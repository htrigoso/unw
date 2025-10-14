<?php
$teaching_staff = $args['teaching_staff'] ?? null;
?>

<?php if (wp_is_nonempty_array($teaching_staff['staff'])): ?>
  <section class="teaching-staff" aria-labelledby="teaching-staff-title">
    <div class="teaching-staff__wrapper">

      <!-- Header -->
      <header class="teaching-staff__header">
        <h2 id="teaching-staff-title" class="teaching-staff__title">Plana Docente</h2>

        <?php if (!empty($teaching_staff['description'])): ?>
          <div class="teaching-staff__description">
            <?php echo wp_kses_post(wpautop($teaching_staff['description'])); ?>
          </div>
        <?php endif; ?>
      </header>

      <!-- Content -->
      <div class="teaching-staff__content">
        <div class="staff-swiper post-swiper" data-width="compact">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($teaching_staff['staff'] as $teacher): ?>
                <?php
                $id = $teacher->ID;
                $name = get_the_title($id);
                $photo = get_the_post_thumbnail_url($id, 'full');
                $profile = get_field('teacher_profile', $id);
                $role = $profile['academic_title'] ?? '';
                $bio = $profile['academic_profile'] ?? null;
                ?>
                <div class="swiper-slide staff-swiper__slide">
                  <article class="teacher-card">
                    <div class="teacher-card__header">
                      <?php
                      if (!empty($photo)) {
                      ?>
                        <img class="teacher-card__photo lazyload" src="<?= placeholder() ?>"
                          data-src="<?php echo esc_url($photo); ?>" alt="Foto de <?php echo esc_attr($name); ?>" />
                      <?php } ?>
                    </div>
                    <div class="teacher-card__content">
                      <h3 class="teacher-card__name"><?php echo esc_html($name); ?></h3>
                      <div class="teacher-card__role"><?php echo esc_html($role); ?></div>


                      <div class="teacher-card__details" data-content="paragraph">
                        <?php
                        echo wp_kses_post($bio);
                        ?>
                      </div>

                    </div>
                  </article>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="swiper-navigation" data-size="absolute">
            <div class="swiper-primary-button-prev" data-size="absolute"></div>
            <div class="swiper-primary-button-next" data-size="absolute"></div>
            <div class="swiper-counter" data-size="absolute">
              <div class="swiper-pagination" data-size="absolute"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
