<?php
/**
 * Template Name: Centros Universitarios
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
    $acf_links = get_field('links');

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

              <?php
                              the_content();
                      ?>


              <h2 class="wp-block-heading">Servicios</h2>




            </div>
            <div role="list" class="grid-3 w-dyn-items">
              <?php if (!empty($acf_links['lists'])) : ?>
              <?php foreach ($acf_links['lists'] as $item) : ?>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">

                  <div class="img-carrera-box">
                    <?php if (!empty($item['is_link'])) : ?>
                    <!-- Caso con link directo -->
                    <?php if (!empty($item['image']['url'])) : ?>
                    <img src="<?= esc_url($item['image']['url']); ?>"
                      alt="<?= esc_attr($item['image']['alt'] ?? $item['title']); ?>" class="img_cover_carreras">
                    <?php endif; ?>
                    <?php else : ?>
                    <!-- Caso con page -->
                    <img src="<?= esc_url(get_the_post_thumbnail_url($item['page']->ID, 'large')); ?>"
                      alt="<?= esc_attr($item['page']->post_title); ?>" class="img_cover_carreras">
                    <?php endif; ?>
                  </div>

                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">
                      <?php if (!empty($item['is_link'])) : ?>
                      <?= esc_html($item['title']); ?>
                      <?php else : ?>
                      <?= esc_html($item['page']->post_title); ?>
                      <?php endif; ?>
                    </h4>

                    <?php if (!empty($item['is_link'])) : ?>
                    <a href="<?= esc_url($item['link']['url']); ?>" class="btn-legacy w-button"
                      target="<?= esc_attr($item['link']['target'] ?? '_self'); ?>">
                      + información
                    </a>
                    <?php else : ?>
                    <a href="<?= esc_url(get_permalink($item['page']->ID)); ?>" class="btn-legacy w-button">
                      + información
                    </a>
                    <?php endif; ?>
                  </div>

                </div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>


            </div>
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
