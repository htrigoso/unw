<?php
$teaching_staff = $args['teaching_staff'] ?? null;
?>

<?php if (!empty($teaching_staff)): ?>
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
        <div class="staff-swiper post-swiper switch-pagination-navigation" data-width="compact">
          <div class="swiper-container">
            <ul class="swiper-wrapper">
              <?php foreach ($teaching_staff['staff'] as $teacher): ?>
                <?php
                $id = $teacher->ID;
                $name = get_the_title($id);
                $photo = get_the_post_thumbnail_url($id, 'full') ?: get_template_directory_uri() . '/upload/careers/staff/staff.jpg';
                $profile = get_field('teacher_profile', $id);
                $role = $profile['academic_title'] ?? '';
                $bio_list = $profile['academic_profile'] ?? [];
                ?>
                <li class="swiper-slide">
                  <article class="teacher-card">
                    <div class="teacher-card__header">
                      <img class="teacher-card__photo lazyload" src="<?=placeholder() ?>" data-src="<?php echo esc_url($photo); ?>"
                        alt="Foto de <?php echo esc_attr($name); ?>" />
                    </div>
                    <div class="teacher-card__content">
                      <h3 class="teacher-card__name"><?php echo esc_html($name); ?></h3>
                      <p class="teacher-card__role"><?php echo esc_html($role); ?></p>

                      <?php if (!empty($bio_list)): ?>
                        <ul class="teacher-card__details">
                          <?php foreach ($bio_list as $item): ?>
                            <?php if (!empty($item['title'])): ?>
                              <li class="teacher-card__details__item">
                                <?php echo esc_html($item['title']); ?>
                              </li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </article>
                </li>
              <?php endforeach; ?>
            </ul>
            <div class="swiper-navigation">
              <div class="swiper-primary-button-prev"></div>
              <div class="swiper-primary-button-next"></div>
              <div class="swiper-counter">
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
