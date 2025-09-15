<?php

/**
 * Template Name: Secretaria General
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
        <img src="<?= UPLOAD_MIGRATION_PATH . '/secretaria-general/secretaria-general.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/secretaria-general/secretaria-general.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/secretaria-general/secretaria-general.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Secretaría General</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
                href="https://www.uwiener.edu.pe/servicios-universitarios/" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Secretaría
                General</a></div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni secretaria">
                  <a href="#presentacion"
                    class="link_item_tab w-inline-block">
                    <div>Presentación</div>
                  </a>


                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - INICIO -->
                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - FIN -->


                  <a href="#servsecretaria"
                    class="link_item_tab w-inline-block">
                    <div>Servicios</div>
                  </a>
                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full" id="presentacion">

                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->
                        <div class="clase_para_wordpress richt_text">
                          <h2>Presentación</h2>
                          <p style="text-align: left;">La Secretaría General es un órgano que brinda soporte académico y
                            administrativo a la estructura orgánica de la Universidad: Directorio, Rectorado,
                            Vicerrectorado, Decanatos, Escuelas Académico Profesionales y direcciones administrativas.
                            Brinda además el soporte administrativo a los docentes y alumnos. Actúa como enlace entre
                            los órganos de dirección superior y las unidades académicas y administrativas.</p>
                          <p><br></p>
                          <p style="text-align: left;">La Secretaría General tiene la función de fedataria de los
                            documentos que elaboran y emiten las autoridades de la Universidad. Comunica oficialmente
                            las decisiones superiores y da curso a las peticiones e informes del resto de las unidades.
                          </p>
                        </div>
                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->


                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                      </div>
                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - FIN -->

                      <div id="servsecretaria" class="content_section">
                        <div class="wrapper_collection mt auto w-dyn-list">
                          <div role="list" class="collection_list gilla _3-col w-dyn-items">
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Autenticación de documentos"
                                href="https://www.uwiener.edu.pe/secretaria-general/autenticacion-de-documentos/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Autenticación de documentos</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Autenticación de sílabos"
                                href="https://www.uwiener.edu.pe/secretaria-general/autenticacion-de-silabos/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Autenticación de sílabos</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Duplicado de documentos"
                                href="https://www.uwiener.edu.pe/secretaria-general/duplicado-de-documentos/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Duplicado de documentos</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Fedateo de documentos"
                                href="https://www.uwiener.edu.pe/secretaria-general/fedateo-de-documentos/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Fedateo de documentos</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de grado académico, título profesional u otros"
                                href="https://www.uwiener.edu.pe/secretaria-general/constancia-de-grado-academico-titulo-profesional-u-otros/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de grado académico, título profesional u otros</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Duplicado de grado académico/título profesional"
                                href="https://www.uwiener.edu.pe/secretaria-general/duplicado-de-grado-academico-titulo-profesional/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Duplicado de grado académico/título profesional</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Expedición de diploma de grado académico/título profesional"
                                href="https://www.uwiener.edu.pe/secretaria-general/expedicion-de-diploma-de-grado-academico-titulo-profesional/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Expedición de diploma de grado académico/título profesional</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Cronograma de sustentaciones"
                                href="https://www.uwiener.edu.pe/secretaria-general/cronograma-de-sustentaciones/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Cronograma de sustentaciones</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
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
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
