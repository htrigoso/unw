<?php
/**
 * Template Name: Registros Académicos
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
    <div class="info_page">
      <div class="cover_img_page center">
        <div class="overlay"></div>
        <img src="<?= UPLOAD_MIGRATION_PATH . '/registros-academicos/registros_academicos.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/registros-academicos/registros_academicos.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/registros-academicos/registros_academicos.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Registros Académicos</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
                href="https://www.uwiener.edu.pe/servicios-universitarios/" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Registros
                Académicos</a></div>
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

                  <a href="#servregistros"
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
                          <p style="text-align: left;">La Oficina de Registros Académicos proporciona orientación
                            permanente al alumno en sus trámites. Suscribe, con la Secretaría General, los documentos
                            oficiales que tienen carácter fidedigno ante cualquier situación legal, académica o
                            administrativa.</p>
                          <p><br></p>
                          <p style="text-align: left;">Consulta la información de todos los trámites que puedes
                            realizar.</p>
                        </div>
                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->


                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                      </div>
                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - FIN -->



                      <div id="servregistros" class="content_section ">
                        <div class="wrapper_collection mt auto w-dyn-list">
                          <div role="list" class="collection_list gilla _3-col registrosacademicos w-dyn-items">
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de promedio ponderado"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-promedio-ponderado/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de promedio ponderado</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Duplicado de record de notas histórico"
                                href="https://www.uwiener.edu.pe/registros-academicos/duplicado-de-record-de-notas-historico/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Duplicado de record de notas histórico</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de estudios"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-estudios/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de estudios</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de horas por curso"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-horas-por-curso/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de horas por curso</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Historial académico"
                                href="https://www.uwiener.edu.pe/registros-academicos/historial-academico/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Historial académico</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Certificado de estudios por ciclo"
                                href="https://www.uwiener.edu.pe/registros-academicos/certificado-de-estudios-por-ciclo/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Certificado de estudios por ciclo</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Modificación de sus datos en el sistema y/o foto"
                                href="https://www.uwiener.edu.pe/registros-academicos/modificacion-de-sus-datos-en-el-sistema-y-o-foto/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Modificación de sus datos en el sistema y/o foto</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Traslado interno"
                                href="https://www.uwiener.edu.pe/registros-academicos/traslado-interno/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Traslado interno</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Usuario clave"
                                href="https://www.uwiener.edu.pe/registros-academicos/usuario-clave/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Usuario clave</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Reserva de matrícula"
                                href="https://www.uwiener.edu.pe/registros-academicos/reserva-de-matricula-2/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Reserva de matrícula</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Reserva de matrícula"
                                href="https://www.uwiener.edu.pe/registros-academicos/reserva-de-matricula/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Reserva de matrícula</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Anulación de matrícula"
                                href="https://www.uwiener.edu.pe/registros-academicos/anulacion-de-matricula/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Anulación de matrícula</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Retiro de cursos"
                                href="https://www.uwiener.edu.pe/registros-academicos/retiro-de-cursos/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Retiro de cursos</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Certificación de aprendizaje, habilidades y conocimiento – Inglés/Informática"
                                href="https://www.uwiener.edu.pe/registros-academicos/certificacion-de-aprendizaje-habilidades-y-conocimiento-ingles-informatica/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Certificación de aprendizaje, habilidades y conocimiento –
                                  Inglés/Informática</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de ingreso"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-ingreso/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de ingreso</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Record de notas"
                                href="https://www.uwiener.edu.pe/registros-academicos/record-de-notas/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Record de notas</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Plan de estudios"
                                href="https://www.uwiener.edu.pe/registros-academicos/plan-de-estudios/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Plan de estudios</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de quinto superior"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-quinto-superior/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de quinto superior</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de tercio superior"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-tercio-superior/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de tercio superior</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia para estudiante del exterior"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-para-estudiante-del-exterior/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia para estudiante del exterior</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Constancia de matrícula"
                                href="https://www.uwiener.edu.pe/registros-academicos/constancia-de-matricula/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Constancia de matrícula</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Trámite para realizar el proceso de sustentación – Parte II"
                                href="https://www.uwiener.edu.pe/registros-academicos/tramite-para-realizar-el-proceso-de-sustentacion-parte-ii/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Trámite para realizar el proceso de sustentación – Parte II</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Duplicado carné universitario"
                                href="https://www.uwiener.edu.pe/registros-academicos/duplicado-carne-universitario/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Duplicado carné universitario</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                            <div role="listitem" class="collection_item serv_univer w-dyn-item">
                              <a title="Ver más sobre Carné de medio pasaje"
                                href="https://www.uwiener.edu.pe/registros-academicos/carne-de-medio-pasaje/"
                                class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Carné de medio pasaje</h4>
                                <div class="btn-legacy text">Ver más</div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="contact_box contact">
                    <h4 class="h4_verde">Informes</h4>
                    <div class="item_user_contacto">
                      <div class="contact_name"></div>
                      <div class="contact_cargo">Registros Académicos</div>
                      <div class="item_contact last">
                        <img src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>"
                          alt="" class="icon_contact">
                        <div>registrosacademicos@uwiener.edu.pe</div>
                      </div>
                    </div>

                    <div class="item_user_contacto ">
                      <h4 class="h4_verde"><strong>Horario de atención:</strong><br></h4>
                      <div class="text-maxwidth">Lunes a viernes: 9:00 am a 6:00 pm / Sábados: 9:00 am a 12:00 pm</div>
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
