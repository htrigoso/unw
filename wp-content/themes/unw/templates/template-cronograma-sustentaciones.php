<?php

/**
 * Template Name: Cronograma de sustentaciones
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
    <div class="info_page">
      <div class="cover_img_page center">
        <div class="overlay"></div>
        <img
          src="<?= UPLOAD_MIGRATION_PATH . '/autenticacion-documentos/secretaria-General-1.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/autenticacion-documentos/secretaria-General-p-500-1.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/autenticacion-documentos/secretaria-General-1.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center">
          <div id="sec-1" class="container">
            <h2 class="categoria_page serv_uni">Secretaria General</h2>
            <h1 class="h1_carreras">Cronograma de sustentaciones</h1>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="/" class="link miga">Inicio /</a><a href="<?= home_url("/servicios-universitarios/secretaria-general/") ?>" class="link miga ">Secretaria General&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Cronograma de sustentaciones</a></div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni">
                  <a href="#sec-1" data-w-id="6ebc11f9-0aa8-9fc3-cafc-45c06e87b87d" class="link_item_tab w-inline-block">
                    <div>Presentación</div>
                  </a>
                  <a href="#sec-5" data-w-id="1be7f05f-6128-2ca2-10a8-ac070b36e03a" class="link_item_tab w-inline-block">
                    <div>Preguntas Frecuentes</div>
                  </a>
                </div>
              </div>
              <div class="col-1 full">
                <div class="info_content_tab full-right serv_university">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">
                        <div id="section_one" class="content_section mt paddingright">
                          <div class="clase_para_wordpress richt_text">
                            <p><strong>Presentación</strong></p>
                            <p>En esta sección podrás encontrar el cronograma actualizado de las sustentaciones programadas para la obtención del título profesional.<br>
                              La información se actualiza semanalmente e incluye los datos relevantes de cada sustentación: nombre del tesista, programa académico, fecha, hora, tema de investigación y link de ingreso.</p>
                            <p><strong><img draggable="false" role="img" class="emoji" alt="🔎" src="<?= UPLOAD_MIGRATION_PATH . '/cronograma-sustentaciones/1f50e.svg' ?>"> Consulta aquí las sustentaciones programadas:</strong><br>
                              <a href="<?= UPLOAD_MIGRATION_PATH . '/cronograma-sustentaciones/Sustentaciones-programadas-1-de-Setiembre-al-5-de-Setiembre-2025.xlsx' ?>" target="_blank" rel="noopener"><strong><img draggable="false" role="img" class="emoji" alt="📌" src="<?= UPLOAD_MIGRATION_PATH . '/cronograma-sustentaciones/1f4cc.svg' ?>"> Semana del 01/09/2025 al 05/09/2025</strong></a>
                            </p>
                          </div>
                        </div>



                        <div id="sec-5" class="content_section paddinright">
                          <div class="title_section mb">
                            <h3 class="h3_interna_title">Preguntas frecuentes</h3>
                            <div class="line"></div>
                          </div>
                          <div class="w-dyn-list">
                            <div role="list" class="w-dyn-items">

                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">1. ¿Cuándo recibiré el resultado de mi sustentación?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>El resultado se comunica inmediatamente al finalizar la sustentación.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">2. ¿Qué debo hacer si no puedo asistir a mi sustentación en la fecha programada?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Debes comunicarte inmediatamente con la coordinación de Grados y Títulos para justificar tu inasistencia y solicitar una reprogramación. Esta solicitud debe estar sustentada y se evaluará según el reglamento vigente.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>
                        <div id="section_faq" class="content_section">
                          <div class="title_section mb">
                            <h3 class="h3_interna_title">Otros servicios</h3>
                            <div class="line"></div>
                          </div>
                          <div class="wrapper_collection mt auto w-dyn-list">
                            <div role="list" class="collection_list gilla _3-col w-dyn-items">
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/autenticacion-de-documentos/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Autenticación de documentos</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/autenticacion-de-silabos/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Autenticación de sílabos</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/duplicado-de-documentos/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Duplicado de documentos</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/fedateo-de-documentos/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Fedateo de documentos</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/constancia-de-grado-academico-titulo-profesional-u-otros/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Constancia de grado académico, título profesional u otros</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/duplicado-de-grado-academico-titulo-profesional/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Duplicado de grado académico/título profesional</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/expedicion-de-diploma-de-grado-academico-titulo-profesional/") ?>" class="item_serv_university w-inline-block ">
                                  <h4 class="h4_light">Expedición de diploma de grado académico/título profesional</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/cronograma-de-sustentaciones/") ?>" class="item_serv_university w-inline-block w--current">
                                  <h4 class="h4_light">Cronograma de sustentaciones</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="info_section full"></div>
                    </div>
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
