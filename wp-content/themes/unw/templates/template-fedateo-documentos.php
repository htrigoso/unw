<?php

/**
 * Template Name: Fedateo de documentos
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
            <h1 class="h1_carreras">Fedateo de documentos</h1>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="/" class="link miga">Inicio /</a><a href="<?= home_url("/servicios-universitarios/secretaria-general/") ?>" class="link miga ">Secretaria General&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Fedateo de documentos</a></div>
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
                            <p>El procedimiento de fedateo es la verificación y validación de la copia que el alumno presenta, para dar fe que es idéntica a su documento original.</p>
                          </div>
                        </div>
                        <div id="sec-2" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS REQUISITOS QUE DEBO CUMPLIR?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>Documento original y una copia</li>
                                <li>Pago de derecho</li>
                                <li>Solicitud</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="sec-3" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁLES SON LOS PASOS PARA REALIZAR EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul>
                                <li>Pagar derechos en Caja</li>
                                <li>En Secretaria General, presentar solicitud y recibo de pago.</li>
                                <li>Recoger los documentos en Secretaría General luego de un día hábil.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div id="sec-4" class="content_section mt paddingright">
                          <div class="richt_text w-richtext">
                            <h5><strong>¿CUÁNTO DEMORA EL TRÁMITE?</strong></h5>
                            <div class="clase_para_wordpress richt_text">
                              <ul role="list">
                                <li>15 días hábiles para la entrega del documento virtual.</li>
                                <li>15 días hábiles para la entrega del documento físico.</li>
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
                                    <h4 class="h4_faq">¿Qué diferencia hay entre fedateo y autenticación?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Fedateo es la certificación de que una copia es fiel del original, que lleva la firma del Secretario General; es el símil a una legalización en una notaría. Autenticación es la certificación, mediante la firma del Secretario General en el documento original, que validad la originalidad del documento y las firmas de las autoridades que lo suscriben</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Solo presento la copia para fedatear mi documento?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Traer copia y documento original para validar el contenido.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Puede acudir otra persona a recoger mi fedateo?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Si, pero debe presentar una carta poder simple con huella digital y copia del DNI del apoderado y poderdante.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Cuánto tiempo tengo para recoger mi fedateo?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>El plazo es de 90 días, luego no habrá lugar a reclamo.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Puedo fedatear mi DNI?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>No, solo documentos de la universidad.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Cuánto tiempo de validez tiene el fedateo?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Depende de la entidad que solicita el documento.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div role="listitem" class="w-dyn-item">
                                <div class="acordeon">
                                  <div class="trigger_acordeon">
                                    <h4 class="h4_faq">¿Qué documentos se pueden fedatear?</h4>
                                    <div class="icon_box"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down"></div>
                                  </div>
                                  <div class="content_acordeon" style="height: 0px;">
                                    <div class="content_section">
                                      <div class="w-richtext">
                                        <p>Se puede fedatear las copias de todo documento que haya sido expedido por la universidad.</p>
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
                                <a href="<?= home_url("/secretaria-general/fedateo-de-documentos/") ?>" class="item_serv_university w-inline-block w--current">
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
                        <h4 class="h4_verde">Contacto</h4>
                        <div class="item_contact last"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>" alt="" class="icon_contact">
                          <div>karla.sonco@uwiener.edu.pe</div>
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
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_PATH . '/migration/solicitar.svg'; ?>" alt="Formulario General">
</a>
<?php get_footer(); ?>
