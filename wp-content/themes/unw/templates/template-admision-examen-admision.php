<?php

/**
 * Template Name: Examen de Admisión
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
      <img
        src="<?= UPLOAD_MIGRATION_PATH . '/admision-examen-admision/banneradmision.png' ?>"
        alt="" sizes="100vw"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/admision-examen-admision/banneradmision500.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/admision-examen-admision/banneradmision.png' ?> 2880w"
        class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h4 class="categoria_page hide">Regresar</h4>
          <h2 class="h1_carreras">Admisión UWiener</h2>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio&nbsp;/</a><a href="#" class="link miga">Admisión&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Examen de Admisión</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="container full">
          <div class="_2-col">
            <div class="col-1">
              <div class="tabs_menu notab">
                <div class="wrapper_collection w-dyn-list">
                  <div role="list" class="collection_list admin w-dyn-items">
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/beca18/") ?>" aria-current="page" class="link_item_tab w-inline-block">
                        <div>Beca 18</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/convalidacion/") ?>" aria-current="page" class="link_item_tab w-inline-block">
                        <div>Graduado / Titulado Universidad</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/") ?>" aria-current="page" class="link_item_tab w-inline-block">
                        <div>Extraordinaria</div>
                      </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                      <a href="<?= home_url("/admision/examen-de-admision/") ?>" aria-current="page" class="link_item_tab w-inline-block w--current">
                        <div>Examen de Admisión</div>
                      </a>
                    </div>
                  </div>
                </div>
                <a href="../recursos/plantilla-admin.html" class="link_item_tab hide w-inline-block">
                  <div>Examen de Admisión</div>
                </a>
              </div>
              <div class="examen notab">
                <div class="text_18 bold dark">Admisión</div>
                <div class="date_exam notab">
                  <div class="number_date">
                    <h2 class="_24 carrera">2026</h2>
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
                        <h2 class="h3_interna_title">Examen de Admisión</h2>
                        <div class="line"></div>
                      </div>
                      <div class="clase_para_wordpress richt_text">
                        <h3>Requisitos</h3>
                        <ul>
                          <li>2 copias simples del DNI.</li>
                          <li>Certificado de estudios secundarios visado por la Ugel (original y/o copia legalizada).</li>
                          <li>2 fotos tamaño carné en fondo blanco.</li>
                        </ul>
                        <p><!--


<h3>Resultados admisión del 2024-II</h3>




<p style="text-align: left;">El examen de admisión se lleva a cabo en las fechas y horas programadas, publicadas o comunicadas a los postulantes oportunamente.</p>


<a class="btn pdt w-button" href="https://intranet.uwiener.edu.pe/univwiener/portales/admision/resultado-admision.asp" target="_blank" rel="noopener">Resultados admisión del 2024-II</a> -->
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- INICIO -->
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
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_PATH . '/migration/solicitar.svg'; ?>" alt="Formulario General">
</a>
<?php get_footer(); ?>
