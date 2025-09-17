<?php

/**
 * Template Name: Beca 18
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
get_header();
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <div class="main_container">
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="<?= UPLOAD_MIGRATION_PATH . '/admision-beca18/Banner-seccion-beca18-web1920x400-d.png' ?>" alt=""
        sizes="100vw"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/admision-beca18/Banner-seccion-beca18-web2-m2.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/admision-beca18/Banner-seccion-beca18-web1920x400-d.png' ?> 2880w"
        class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h4 class="categoria_page hide">Regresar</h4>
          <h2 class="h1_carreras">Admisión UWiener</h2>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio&nbsp;/</a><a href="#"
              class="link miga">Admisión&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Beca
              18</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="container full">
          <div class="_2-col">
            <div class="col-1 full">
              <div class="tabs_menu notab">
                <div class="wrapper_collection w-dyn-list">
                  <div role="list" class="collection_list admin w-dyn-items">
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/beca18/") ?>" aria-current="page"
                        class="link_item_tab w-inline-block w--current">
                        <div>Beca 18</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/convalidacion/") ?>" aria-current="page"
                        class="link_item_tab w-inline-block">
                        <div>Graduado / Titulado Universidad</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/") ?>" aria-current="page" class="link_item_tab w-inline-block">
                        <div>Extraordinaria</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/examen-de-admision/") ?>" aria-current="page"
                        class="link_item_tab w-inline-block">
                        <div>Examen de Admisión</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="info_content_tab full-right">
                <div class="section_tab _2-col">
                  <div class="content_seccion_tab">
                    <div class="info_section nopadding">
                      <div class="title_section">
                        <h2 class="h3_interna_title">Beca 18</h2>
                        <div class="line"></div>
                      </div>
                      <div class="clase_para_wordpress richt_text">
                        <h3>
                          ¡Etapa Finalizada!<br>
                        </h3>
                        <p>
                          ¡Gracias por tu interés en <strong>Beca 18</strong> con la Universidad Norbert Wiener!
                        </p>
                        <p>
                          La etapa de postulación ha concluido.
                        </p>
                        <p>
                          Estamos trabajando para traerte pronto novedades emocionantes sobre futuras oportunidades y
                          cómo podemos seguir apoyándote en tu camino hacia una educación de calidad.
                        </p>
                        <p>
                          <strong>¡Mantente atento a nuestras actualizaciones!</strong>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="">
                    Formulario
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
<?php get_footer(); ?>