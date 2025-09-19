<?php
/**
 * Template Name: Defensoría Universitaria
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
        <img src="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/defensoria-universitaria.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/defensoria-universitaria.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/defensoria-universitaria.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Defensoría Universitaria</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a
                href="<?= home_url("/servicios-universitarios/") ?>" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Defensoría
                Universitaria</a></div>
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
                  <a href="#formularios"
                    class="link_item_tab w-inline-block">
                    <div>Formularios de Atención</div>
                  </a>
                  <a href="#modalidades"
                    class="link_item_tab w-inline-block">
                    <div>Canales de Atención</div>
                  </a>
                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - INICIO -->
                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - FIN -->
                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">

                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->
                        <div class="clase_para_wordpress richt_text" id="presentacion">
                          <h2>Presentación</h2>
                          <p style="text-align: left;">La Defensoría Universitaria es el órgano encargado de la
                            tramitación de reclamos, quejas, sugerencias o consultas relacionadas con la afectación de
                            derechos individuales de los miembros que conforman la comunidad universitaria (estudiantes,
                            docentes y egresados). Atiende los reclamos o quejas relacionadas con la prestación del
                            servicio educativo superior universitario, velando de esta forma por el mantenimiento del
                            principio de autoridad responsable.</p>
                          <p style="text-align: left;">El ejercicio de las atribuciones antes señaladas se ejerce
                            siempre que los hechos materia de reclamo o queja no sean de competencia de otro órgano
                            universitario o entidad competente.</p>
                          <p style="text-align: left;">El mantenimiento del principio de autoridad responsable
                            considera, por parte de la Defensoría Universitaria, un conjunto de acciones en favor de los
                            miembros de la comunidad universitaria, acordes con la legalidad de las facultades o
                            atribuciones de los órganos universitarios.</p>
                          <h3><span style="color: #00b7bd;">Formulario de atención virtual</span></h3>
                          <p><a href="https://formulariovirtualdefensoriauniversitaria.uwiener.edu.pe/" target="_blank"
                              rel="noopener noreferrer" title="Ver formulario">Ver formulario</a></p>
                        </div>
                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->

                        <div class="content_section pr">
                          <div id="formularios" class="seccion_defensoriauni">
                            <div class="title_section ">
                              <h4 class="h3_interna_title verde _20">Formularios de atención<br></h4>
                            </div>
                            <div class="w-layout-grid grilla _3-col defensoriauni">
                              <a title="Descargar Formulario de atención DU (Denuncia por Hostigamiento Sexual)"
                                href="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/Formato-de-Denuncia-Casos-de-Hostigamiento-Sexual-2025.pdf' ?>"
                                target="_blank" class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Formulario de atención DU (Denuncia por Hostigamiento Sexual)</h4>
                                <div class="box_descargar"><img
                                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>"
                                    alt="" class="icon paddingright">
                                  <div class="btn-legacy text">Descargar</div>
                                </div>
                              </a>
                              <a title="Descargar Formulario de atención DU (Reclamo-Queja-Denuncia)"
                                href="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/FORMULARIO-DE-ATENCION-DEFENSORIA-RECLAMO-DENUNCIA-QUEJA-2025-.docx.pdf' ?>"
                                target="_blank" class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Formulario de atención DU (Reclamo-Queja-Denuncia)</h4>
                                <div class="box_descargar"><img
                                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>"
                                    alt="" class="icon paddingright">
                                  <div class="btn-legacy text">Descargar</div>
                                </div>
                              </a>
                              <a title="Descargar Formulario de atención DU (Consulta/Sugerencia)"
                                href="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/FORMULARIO-DE-ATENCION-CONSULTA-Y-SUGERENCIA-2025.pdf' ?>"
                                target="_blank" class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Formulario de atención DU (Consulta/Sugerencia)</h4>
                                <div class="box_descargar"><img
                                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>"
                                    alt="" class="icon paddingright">
                                  <div class="btn-legacy text">Descargar</div>
                                </div>
                              </a>
                            </div>
                            <div class="title_section seccion_defensoriauni">
                              <h4 class="h3_interna_title verde _20">Normativa<br></h4>
                            </div>
                            <div class="w-layout-grid grilla _3-col defensoriauni">
                              <a title="Descargar Reglamento DU 2024 (16.07.2024)"
                                href="<?= UPLOAD_MIGRATION_PATH . '/defensoria-universitaria/UPNW-GLE-REG-002_Defensoria_Universitaria_V03.pdf' ?>"
                                target="_blank" class="item_serv_university w-inline-block">
                                <h4 class="h4_light">Reglamento DU 2024 (16.07.2024)</h4>
                                <div class="box_descargar"><img
                                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>"
                                    alt="" class="icon paddingright">
                                  <div class="btn-legacy text">Descargar</div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="content_section pr">
                          <div id="modalidades" class="seccion_defensoriauni">
                            <div class="title_section">
                              <h3 class="h3_interna_title">Canales de atención<br></h3>
                              <div class="line"></div>
                            </div>
                            <p>La Defensoría Universitaria cuenta con tres canales de atención disponibles para la
                              Comunidad Universitaria (estudiantes, docentes, egresados y personal administrativo):</p>
                            <div class="w-layout-grid grilla margintop defensoriauni">
                              <div class="item_serv_university flextop fondoverde">
                                <h4>Atención presencial</h4>
                                <div class="richt_text w-richtext">
                                  <h5>Local 1:</h5>
                                  <p>Cuarto Piso, Oficina “Defensor Universitario”.<br>Jr. Larrabure y Unanue N° 110,
                                    Urb. Santa Beatriz, Lima-Perú.<br>(Ref. Altura cuadra 4 Av. Arequipa / Parque
                                    Washington).</p>
                                  <h5>Horario:</h5>
                                  <p>Lunes, martes y jueves: 9:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 6:00 p.m.</p>
                                </div>
                              </div>
                              <div class="item_serv_university flextop fondoverde">
                                <h4>Atención virtual</h4>
                                <div class="richt_text w-richtext">
                                  <h5>Horario</h5>
                                  <p>Miércoles y viernes de 9:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 6:00 p.m. Los correos
                                    o formularios recibidos fuera de dicho horario tendrán atención al día siguiente
                                    hábil.</p>
                                  <h5></h5>
                                  <p>Mediante correo electrónico dirigido
                                    a:<br>defensoria.universitaria@uwiener.edu.pe<br><br>Mediante ingreso a la
                                    web:<br>Descargando los “formularios de atención”.</p>
                                </div>
                              </div>
                              <div class="item_serv_university flextop fondoverde">
                                <h4>Atención telefónica</h4>
                                <div class="richt_text w-richtext">
                                  <h5>Teléfono:</h5>
                                  <p>Para consultas y seguimiento de las denuncias o reclamos se podrán comunicar al
                                    siguiente número fijo: (01) 706 5555 - Anexo: 3239</p>
                                  <h5>Horario:</h5>
                                  <p>De lunes, martes y jueves.<br><br>De 9:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 6:00
                                    p.m.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                      </div>
                      <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - FIN -->




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
