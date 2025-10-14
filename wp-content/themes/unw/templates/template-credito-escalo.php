<?php

/**
 * Template Name: Crédito Escalo
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
        <img src="<?= UPLOAD_MIGRATION_PATH . '/credito-escalo/1920x400_credito-escalo.jpg' ?>" srcset="<?= UPLOAD_MIGRATION_PATH . '/credito-escalo/500x250_credito-escalo.jpg' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/credito-escalo/1920x400_credito-escalo.jpg' ?> 1920w" sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center">
          <div id="presenta_vf" class="container">
            <h2 class="categoria_page serv_uni">Becas Externas</h2>
            <h1 class="h1_carreras medium">Crédito Escalo</h1>
          </div>
        </div>


        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 1 - INICIO -->
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga">
              <a href="<?= home_url("/") ?>" class="link miga">Inicio /</a>
              <a href="<?= home_url("/servicios-universitarios/becas/") ?>" class="link miga">Becas / </a>
              <a href="#" aria-current="page" class="link miga w--current">Crédito Escalo</a>
            </div>
          </div>
        </div>
        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 1 - FIN -->


      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni secretaria ">
                  <a href="#presenta_vf" data-w-id="c5ef7b79-b214-6624-2e01-b6c207b8dcf9" class="link_item_tab w-inline-block">
                    <div>Presentación</div>
                  </a>
                  <a href="#" class="link_item_tab hide w-inline-block">
                    <div>Prewiener</div>
                  </a>
                </div>
              </div>
              <div class="col-1 full">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section">
                        <!-- <div class="clase_para_wordpress richt_text"> -->
                        <div class="contenido-becas">
                          <p>Contamos con un convenio con la reconocida asociación sin fines de lucro peruana ESCALO. Gracias a esta alianza, los estudiantes de la Universidad Norbert Wiener que se encuentren a partir del 6° ciclo podrán aplicar al programa de financiamiento educativo Crédito ESCALO. Este crédito educativo, es un programa de ESCALO diseñado para apoyar el desarrollo académico de estudiantes en el Perú. Es importante destacar que ESCALO, como entidad responsable, es la encargada de evaluar y seleccionar a los postulantes que cumplan con los requisitos para acceder al crédito.</p>
                          <p>Para más información sobre el proceso de postulación y requisitos, te invitamos a visitar el sitio web de <a href="https://escalo.pe/creditos/" target="_blank" rel="noopener">ESCALO.</a></p>
                        </div>
                        <div class="content_section w-condition-invisible">
                          <div class="contact_box hide">
                            <h4 class="h4_verde">Horarios de atención</h4>
                            <div class="item_user_contacto">
                              <div class="w-dyn-bind-empty"></div>
                              <div class="w-richtext">
                                <p>De lunes a viernes: de 09:00 a 18:00<br>h<br></p>
                              </div>
                            </div>
                            <div class="item_user_contacto">
                              <div class="w-dyn-bind-empty"></div>
                              <div class="w-dyn-bind-empty w-richtext"></div>
                            </div>
                            <div class="item_user_contacto">
                              <div class="contact_name w-dyn-bind-empty"></div>
                              <div class="w-dyn-bind-empty w-richtext"></div>
                            </div>
                            <h4 class="h4_verde">Informes</h4>
                            <div class="item_user_contacto informes">
                              <div class="item_contact"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>" alt="" class="icon_contact">
                                <div class="w-dyn-bind-empty"></div>
                              </div>
                              <div class="item_contact w-condition-invisible"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>" alt="" class="icon_contact">
                                <div class="w-dyn-bind-empty"></div>
                              </div>
                              <div class="item_contact"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/phone_black.svg' ?>" alt="" class="icon_contact">
                                <div>706 5555 anexo 3211</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="content_section w-condition-invisible"><a href="https://assets.website-files.com/5e14b299ed73794253b5000e/5eaae3b9efa915ca5d6b5451_Talleres%20deportivos%202020-I.pdf" target="_blank" class="btn w-button">VER HORARIOS DE TALLERES DEPORTIVOS 2020<br></a>
                          <div class="legal marrgintop">La programación de los talleres virtuales 2020-II se estará informando próximamente.</div>
                        </div>
                        <div class="content_section w-condition-invisible"><a href="https://assets.website-files.com/5e14b299ed73794253b5000e/5eaae3b8357f3150d4d13881_Talleres%20art%C3%ADsticos%202020-I.pdf" target="_blank" class="btn w-button">VER HORARIOS DE TALLERES ARTÍSTICOS 2020<br></a>
                          <div class="legal marrgintop">La programación de los talleres virtuales 2020-II se estará informando próximamente.</div>
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
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
