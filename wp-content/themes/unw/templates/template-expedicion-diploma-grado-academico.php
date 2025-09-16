<?php

/**
 * Template Name: Expedición de diploma de grado académico/ título profesional
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
            <h1 class="h1_carreras">Expedición de diploma de grado académico/título profesional</h1>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="/" class="link miga">Inicio /</a><a href="<?= home_url("/servicios-universitarios/secretaria-general/") ?>" class="link miga ">Secretaria General&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Expedición de diploma de grado académico/título profesional</a></div>
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
                  <a href="#sec-2" data-w-id="6ebc11f9-0aa8-9fc3-cafc-45c06e87b880" class="link_item_tab w-inline-block">
                    <div>¿Cuáles son los requisitos que debo cumplir?</div>
                  </a>
                  <a href="#sec-3" data-w-id="6f9836f4-2508-ff78-6210-5553392f4a6e" class="link_item_tab w-inline-block">
                    <div>¿Cuáles son los pasos para realizar el trámite?</div>
                  </a>
                  <a href="#sec-4" data-w-id="c40e9bae-f030-4540-ff26-72f5ea2f6e67" class="link_item_tab w-inline-block">
                    <div>¿Cuánto demora el trámite?</div>
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
                            <h2>Presentación</h2>
                            <p><br></p>
                            <p>Emisión de un diploma de Grado o Título Profesional o de Especialidad, siempre que cumpla con las formalidades y requisitos establecidos por la ley y los reglamentos internos.</p>
                          </div>
                        </div>
                        <div id="sec-2" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS REQUISITOS QUE DEBO CUMPLIR?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              Carpeta de Grados y Títulos completa, de acuerdo a los requisitos que se proporcionan en cada PA (Programa Académico). </div>
                          </div>
                        </div>

                        <div id="sec-3" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS PASOS PARA REALIZAR EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>Se valida que los registros y documentos estén completos, según lo establecido por la ley y los reglamentos de Sunedu y de la Universidad.</li>
                                <li>Se elabora la Resolución Rectoral y se solicita la elaboración del diploma correspondiente.</li>
                                <li>Se envía un oficio a Sunedu, a fin de registrar en su base de datos los grados y títulos otorgados por la Universidad.</li>
                                <li>Se remite un correo a los interesados a fin de que pase a recabar su grado académico y/o título profesional correspondiente.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="sec-4" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁNTO DEMORA EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              30 días hábiles desde que ingresa la carpeta a la Oficina de Grados y Títulos hasta que se informa al interesado que puede recabar su diploma. </div>
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
                                    <h4 class="h4_faq">¿El expediente ya ingresó al área?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Se informa si tenemos el expediente y cuándo fue la fecha de ingreso, desde ahí se consideran los 30 días hábiles para culminar el trámite.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿En cuánto tiempo estará mi grado o título?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>30 días hábiles desde que ingresa la carpeta a la Oficina de Grados y Títulos hasta que se informa al interesado que puede recabar su diploma.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿El grado o título ya se encuentra registrado en la Sunedu?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>La Sunedu se toma de 10 a 15 días hábiles en registrar los grados y títulos. La universidad envía el oficio un día antes de enviar el correo a los usuarios, a fin de que se acerquen a recoger sus diplomas.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Cómo me entero si ya está mi diploma?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>La oficina de Grados y Títulos remite correo electrónico a los interesados.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Hay alguna formalidad para la entrega del diploma? ¿Se hace una ceremonia?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>No existe formalidad. Respecto a la ceremonia o actividad, la información se solicita a la Escuela.</p>
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
                                <a href="<?= home_url("/secretaria-general/expedicion-de-diploma-de-grado-academico-titulo-profesional/") ?>" class="item_serv_university w-inline-block w--current">
                                  <h4 class="h4_light">Expedición de diploma de grado académico/título profesional</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a href="<?= home_url("/secretaria-general/cronograma-de-sustentaciones/") ?>" class="item_serv_university w-inline-block ">
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
                    <div class="contact_box">
                      <div class="">
                        <h4 class="h4_verde">Contacto - Bachiller</h4>
                        <div class="item_contact last"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_mail.svg" alt="" class="icon_contact">
                          <div>gradosytitulos_central@uwiener.edu.pe</div>
                        </div>
                      </div>

                      <div class="item_box">
                        <h4 class="h4_verde">Contacto - Título Profesional: Odontología, Nutrición y Derecho y Ciencias Políticas</h4>
                        <div class="item_contact last"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_mail.svg" alt="" class="icon_contact">
                          <div>sustentaciones_pregrado_gyt@uwiener.edu.pe</div>
                        </div>
                      </div>

                      <div class="item_box">
                        <h4 class="h4_verde">Contacto - Título Profesional: Farmacia y Bioquímica, Medicina Humana, Psicología, Tecnología Médica, Enfermería y Obstetricia</h4>
                        <div class="item_contact last"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_mail.svg" alt="" class="icon_contact">
                          <div>gyt_cienciasdelasalud@uwiener.edu.pe</div>
                        </div>
                      </div>

                      <div class="item_box">
                        <h4 class="h4_verde">Contacto - Ingenierías y negocios</h4>
                        <div class="item_contact last"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_mail.svg" alt="" class="icon_contact">
                          <div>gyt_ingenieriaynegocios@uwiener.edu.pe</div>
                        </div>
                      </div>

                      <div class="item_box">
                        <h4 class="h4_verde">Contacto - Sustentaciones programas de Posgrado</h4>
                        <div class="item_contact"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_pnone.svg" alt="" class="icon_contact">
                          <div>+51 947 318 857</div>
                        </div>
                        <div class="item_contact last"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_mail.svg" alt="" class="icon_contact">
                          <div>posgrado_expedientesgyt@uwiener.edu.pe</div>
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