<?php

/**
 * Template Name: Duplicado de grado académico/titulo profesional
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
            <h1 class="h1_carreras">Duplicado de grado académico/título profesional</h1>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="/" class="link miga">Inicio /</a><a href="<?= home_url("/servicios-universitarios/secretaria-general/") ?>" class="link miga ">Secretaria General&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Duplicado de grado académico/título profesional</a></div>
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
                            <p>Proceso mediante el cual se emite un nuevo diploma por motivos de pérdida, deterioro o mutilación, siempre que se cumpla con las formalidades y requisitos de seguridad previstos por la Universidad.</p>
                          </div>
                        </div>
                        <div id="sec-2" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS REQUISITOS QUE DEBO CUMPLIR?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>Solicitud del egresado por el WienerNet (Sofydoc)</li>
                                <li>Boleta original de pago por los siguientes derechos:</li>
                                <ol type="a">
                                  <li>Grado Académico</li>
                                  <li>Título Profesional</li>
                                </ol>
                                <li>Copia del DNI o CE.</li>
                                <li>Declaración jurada con firma legalizada de pérdida, robo o mutilación.</li>
                                <li>Devolución del diploma deteriorado o mutilado (según sea el caso).</li>
                                <li>01 fotografía tamaño pasaporte, a color en fondo blanco (no instantáneas / damas de vestir / varones saco y corbata).</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="sec-3" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS PASOS PARA REALIZAR EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>Pagar derechos en Caja.</li>
                                <li>En Secretaria General presentar solicitud y recibo de pago.
                                  El trámite tiene como tiempo máximo 30 días hábiles.</li>
                                <li>Una vez listo el diploma, se comunica al interesado mediante correo electrónico.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="sec-4" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁNTO DEMORA EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>30 días hábiles desde que ingresa la carpeta a la Oficina de Grados y Títulos hasta que se informa al interesado que puede recabar su diploma.</li>
                              </ul>
                            </div>
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
                                    <h4 class="h4_faq">¿Cómo es el trámite del duplicado?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Es un trámite que consiste en expedir un nuevo diploma, con los requisitos que exige la ley y la universidad.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Cuánto tiempo demora la expedición del duplicado de diploma?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Tiene una duración máxima de 30 días hábiles.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿El trámite es personal?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Sí, es personal, pero en caso el titular estuviera fuera de Lima o del país, se requiere un Poder.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Es obligatorio efectuar la denuncia en caso de pérdida?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Sí, la ley así lo exige (Ley 28626).</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Qué fecha se coloca en el nuevo diploma, la del original o del nuevo?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>En el anverso figuran los datos del diploma original; en el reverso figura la fecha del duplicado.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Se anula el número de registro?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Sí. Se anula el número de registro en la Sunedu y en el de la Universidad. Se genera un nuevo registro y se consigna así en el Libro de Duplicados.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Se puede corregir o rectificar datos en el diploma?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Sí, si es por orden judicial o administrativa. Se debe presentar documentos sustentatorios (sentencia judicial, acta notarial u otro), en caso corresponda, para proceder con la emisión del nuevo diploma. El trámite se sujeta a los requisitos para solicitar un duplicado, a excepción de la denuncia policial.</p>
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
                                <a href="<?= home_url("/secretaria-general/duplicado-de-grado-academico-titulo-profesional/") ?>" class="item_serv_university w-inline-block w--current">
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
