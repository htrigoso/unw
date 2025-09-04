<?php
$admission_info = $args['admission_info'] ?? null;
$admission_items = $admission_info['process'] ?? [];
?>

<?php if (!empty($admission_items) && is_array($admission_items)): ?>
<section class="admission" aria-labelledby="admission-title">
  <div class="admission__wrapper">

    <!-- Header -->
    <header class="admission__header">
      <div class="admission__header-content">
        <h2 id="admission-title" class="admission__title">
          <?php echo esc_html($admission_info['title'] ?? 'Proceso de Admisión'); ?>
        </h2>
        <?php if (!empty($admission_info['description'])): ?>
        <div class="admission__description" data-content="paragraph">
          <?php echo wp_kses_post(wpautop($admission_info['description'])); ?>
        </div>
        <?php endif; ?>
      </div>
      <?php if (!empty($admission_info['date'])):
          $date_parts = explode('/', $admission_info['date']);
          $day = $date_parts[0] ?? '';
          $month_number = $date_parts[1] ?? '';
          $month_label = '';
          if ($month_number) {
            $months = ['01' => 'ENERO', '02' => 'FEB', '03' => 'MAR', '04' => 'ABR', '05' => 'MAYO', '06' => 'JUN', '07' => 'JUL', '08' => 'AGO', '09' => 'SET', '10' => 'OCT', '11' => 'NOV', '12' => 'DIC'];
            $month_label = $months[$month_number] ?? strtoupper($month_number);
          }
        ?>
      <div class="admission__header-ad">
        <div class="admission__header-ad__title">
          <span>Admisión</span>
        </div>
        <div class="admission__header-ad__date">
          <span class="admission__header-ad__date--day"><?php echo esc_html($day); ?></span>
          <span class="admission__header-ad__date--month"><?php echo esc_html($month_label); ?></span>
        </div>
      </div>
      <?php endif; ?>
    </header>

    <!-- Content -->
    <div class="admission__content">
      <div class="admission-swiper post-swiper-desktop switch-pagination-navigation" data-width="compact">
        <div class="swiper-container">
          <ul class="swiper-wrapper admission__list">
            <?php
              global $post;
              $original_post = $post;

              foreach ($admission_items as $item):
                if (!($item instanceof WP_Post)) continue;

                $post = $item;
                setup_postdata($post);

                $title = get_the_title();
                $content =  apply_filters( 'the_content', get_the_content() );
                $link = get_field('link');
                $button_text = $link['title'] ?? 'Más información';
                $button_url = $link['url'] ?? '#';
                $button_target = $link['target'] ?? '_self';
              ?>
            <li class="swiper-slide admission__item">
              <article class="admission-card">
                <div class="admission-card__content">
                  <div class="admission-card__header">
                    <h3 class="admission-card__title"><?php echo esc_html($title); ?></h3>
                    <div class="admission-card__paragraph" data-content="paragraph">
                      <?php
                      the_content()
                      ?>
                    </div>
                  </div>
                  <?php if (!empty($button_url)): ?>
                  <div class="admission-card__footer">
                    <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"
                      class="btn btn-primary-outline-small">
                      <?php echo esc_html($button_text); ?>
                      <svg width="16" height="14" fill="none">
                        <use xlink:href="#arrow-right"></use>
                      </svg>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </article>
            </li>
            <?php endforeach;

              wp_reset_postdata();
              $post = $original_post;
              ?>
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