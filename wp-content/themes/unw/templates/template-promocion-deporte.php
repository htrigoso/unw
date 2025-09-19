<?php

/**
 * Template Name: Promoción Deporte
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
        <img src="<?= UPLOAD_MIGRATION_PATH . '/promocion-cultural/DBU.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/promocion-cultural/DBUp-500.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/promocion-cultural/DBU.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center">
          <div id="presenta_vf" class="container">
            <h2 class="categoria_page serv_uni">Bienestar Estudiantil</h2>
            <h1 class="h1_carreras medium">Promoción del deporte</h1>
          </div>
        </div>


        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 1 - INICIO -->
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga">
              <a href="<?= home_url("/") ?>" class="link miga">Inicio /</a>
              <a href="<?= home_url("/servicios-universitarios/bienestar-estudiantil/") ?>" class="link miga">Bienestar Estudiantil / </a>
              <a href="#" aria-current="page" class="link miga w--current">Promoción del deporte</a>
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
                  <a href="#horarios_vf" data-w-id="95d7b19d-3e88-b190-6c89-bc9a5e51180c" class="link_item_tab w-inline-block">
                    <div>Horarios de Atención</div>
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
                          <h3>Presentación</h3>
                          <p><br></p>
                          <p>Propicia la recreación y la vida saludable, contribuyendo al desarrollo de la salud física y mental del alumno. El deporte formativo se brinda a través de los talleres deportivos, mientras que el competitivo con los entrenamientos de nuestros seleccionados deportivos.</p>
                          <p><br></p>
                          <ul>
                            <li><span style="color: #33cccc;">Actividades Internas</span><br>
                              <strong>-Talleres Deportivos:</strong> Basquetbol, Futsal damas-varones, Karate, Voleibol mixto y Taekwondo<br>
                              <strong>-Entrenamiento de selecciones deportivas:</strong> Basquetbol (damas-varones), Futsal (damas-varones), Karate (damas varones), Voleibol (damas-varones) y Taekwondo<br>
                              <strong>-Campeonato Intercachimbos:</strong> se organiza en el primer semestre académico y participan los ingresantes de cada año.<br>
                              <strong>-Campeonato Interfacultades:</strong> se realiza en el segundo semestre académico y participan estudiantes que pertenecen a la misma Escuela o Facultad.
                            </li>
                            <li><span style="color: #33cccc;">Actividades Externas</span><br>
                              -Juegos Deportivos Universitarios Nacionales<br>
                              -Campeonatos Nacionales Universitarios<br>
                              -Campeonato Metropolitano Universitario</li>
                            <li><span style="color: #33cccc;">Inscripción</span><br>
                              Los estudiantes interesados en los talleres deportivos deben registrarse a través del link de inscripción publicado en la sección Vida Universitaria, en WienerNet y deben hacerlo dentro de los plazos establecidos. Una vez validada la inscripción, se envía por correo el link de acceso a la plataforma de clase.<br>
                              <a href="https://intranet.uwiener.edu.pe/" target="_blank" rel="noopener">VER HORARIOS&nbsp;</a>
                            </li>
                          </ul>
                        </div>
                        <div id="horarios_vf" class="content_section">
                          <div class="contact_box">
                            <h4 class="h4_verde"><strong>Horario de atención&nbsp;</strong><br></h4>
                            <div class="item_user_contacto ">
                              <div class="w-richtext">
                                <p>Lunes a viernes de 09:00 am a 6:00 pm<br></p>
                              </div>
                            </div>
                            <h4 class="h4_verde"><strong>Informes</strong></h4>
                            <div class="item_user_contacto informes">
                              <div class="item_contact"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>" alt="" class="icon_contact">
                                <div>vida.universitaria@uwiener.edu.pe</div>
                              </div>
                            </div>
                          </div>
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
                              <div class="item_contact"><img src="https://assets.website-files.com/5e14b299ed73794253b5000e/5e31ec3ded055587e15d2d4f_icon_mail.svg" alt="" class="icon_contact">
                                <div class="w-dyn-bind-empty"></div>
                              </div>
                              <div class="item_contact w-condition-invisible"><img src="https://assets.website-files.com/5e14b299ed73794253b5000e/5e31ec3ded055587e15d2d4f_icon_mail.svg" alt="" class="icon_contact">
                                <div class="w-dyn-bind-empty"></div>
                              </div>
                              <div class="item_contact"><img src="https://assets.website-files.com/5e14b299ed73794253b5000e/5e31ec3d5be31edb1566412e_icon_pnone.svg" alt="" class="icon_contact">
                                <div>706 5555 anexo 3211</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="content_section w-condition-invisible"><a href="https://assets.website-files.com/5e14b299ed73794253b5000e/5eaae3b9efa915ca5d6b5451_Talleres%20deportivos%202020-I.pdf" target="_blank" class="btn-legacy w-button">VER HORARIOS DE TALLERES DEPORTIVOS 2020<br></a>
                          <div class="legal marrgintop">La programación de los talleres virtuales 2020-II se estará informando próximamente.</div>
                        </div>
                        <div class="content_section w-condition-invisible"><a href="https://assets.website-files.com/5e14b299ed73794253b5000e/5eaae3b8357f3150d4d13881_Talleres%20art%C3%ADsticos%202020-I.pdf" target="_blank" class="btn-legacy w-button">VER HORARIOS DE TALLERES ARTÍSTICOS 2020<br></a>
                          <div class="legal marrgintop">La programación de los talleres virtuales 2020-II se estará informando próximamente.</div>
                        </div>
                        <div class="content_section">
                          <div class="legal marrgintop">WienerNet: Servicios adicionales &gt; Bienestar universitario &gt; Vida universitaria</div>
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
