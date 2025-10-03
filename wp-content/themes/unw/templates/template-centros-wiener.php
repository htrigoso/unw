<?php
/**
 * Template Name: Centros Wiener
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">
    <?php
          get_template_part('content-parts/components/info-cover');
        ?>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="clase_para_wordpress">
            </div>
            <?php
          $links = get_field('links');

          if ($links && is_array($links)) : ?>
            <div role="list" class="grid-3 w-dyn-items">
              <?php foreach ($links as $link) :
                // Datos básicos del centro
                $title = get_the_title($link->ID);
                $permalink = get_permalink($link->ID);

                // Opcional: si tienes un ACF con imagen destacada del centro
                $image = get_the_post_thumbnail_url($link->ID) ?: UPLOAD_MIGRATION_PATH . '/centros-wiener/default.png';
              ?>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box">
                    <img src="<?= esc_url($image) ?>" alt="<?= esc_attr($title) ?>" class="img_cover_carreras">
                  </div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright"><?= esc_html($title) ?></h4>
                    <a href="<?= esc_url($permalink) ?>" class="btn-legacy w-button">+ información</a>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_PATH . '/migration/solicitar.svg'; ?>" alt="Formulario General">
</a>
<?php get_footer(); ?>
