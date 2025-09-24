<?php
/**
 * Template Name: Politicas de privacidad
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

    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="" srcset="<?= UPLOAD_MIGRATION_PATH . '/migration/shared/pixel.png' ?>" sizes="100vw" alt=""
        class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras"><?= get_the_title(); ?></h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a href="#"
              aria-current="page" class="link miga w--current"><?= get_the_title(); ?></a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="info_universidad">
              <div id="w-node-e5aebbeb63fe-aa88130f" class="item_info privacidad">
                <div class="text_privacidad">
                  <?php the_content();?>
                </div>
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
