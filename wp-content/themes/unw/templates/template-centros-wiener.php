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
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="<?= UPLOAD_MIGRATION_PATH . '/centros-wiener/banner-nosotros.jpg' ?>"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/centros-wiener/banner-nosotros.jpg' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/centros-wiener/banner-nosotros.jpg' ?> 1920w"
        sizes="100vw" alt="" class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras small"><strong>Centros Wiener</strong><br></h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a
              href="#" aria-current="page" class="link miga w--current">Centros Wiener</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="clase_para_wordpress">
            </div>
            <div role="list" class="grid-3 w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/centros-wiener/analisis-clinico.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Centro de Análisis Clínicos</h4><a
                      href="<?= home_url("/centros-wiener/centro-de-analisis-clinicos/") ?>"
                      class="btn-legacy w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/centros-wiener/centro-odontologico.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Centro Odontológico</h4><a
                      href="<?= home_url("/centros-wiener/centro-odontologico/") ?>" class="btn-legacy w-button">+
                      información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/centros-wiener/centro-de-terapia-fisica-y-rehabilitacion.png' ?>"
                      alt="" class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Centro de Terapia Física y Rehabilitación</h4><a
                      href="<?= home_url("/centros-wiener/centro-de-terapia-fisica-y-rehabilitacion/") ?>"
                      class="btn-legacy w-button">+ información</a>
                  </div>
                </div>
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
