<?php
/**
 * Template Name: Centro Odontológico
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'backup'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">
    <div class="cover_img_page center">
      <div class="overlay">
      </div>
      <img src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/centro-odontologico.png' ?>"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/centro-odontologico.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/centro-odontologico.png' ?> 1920w"
        sizes="100vw" alt="" class="img_cover left">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page serv_uni">
            Centros Wiener
          </h2>
          <h1 class="h1_carreras small opacity0">
            Centro Odontológico </h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga">
            <a class="link miga" href="https://www.uwiener.edu.pe/">
              Inicio /
            </a>
            <a class="link miga" href="https://www.uwiener.edu.pe/centros-wiener/">
              Centros Wiener /
            </a>
            <a class="link miga w--current" href="#">
              Centro Odontológico </a>
          </div>
        </div>
      </div>

    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="container full">
          <div class="_2-col">
            <div class="col-1 full">
              <div class="tabs_menu notab serv_uni centros">
                <a class="link_item_tab w-inline-block w--current" href="#presentacion_centro">
                  <div>Presentación</div>
                </a>

                <a class="link_item_tab w-inline-block" href="#infraestructura_centros">
                  <div>
                    Infraestructura
                  </div>
                </a>
                <a class="link_item_tab w-inline-block" href="#especialidades_centros">
                  <div>
                    Especialidades </div>
                </a>
                <a class="link_item_tab w-inline-block" href="#nuestros-pacientes_centros">
                  <div>
                    Nuestros pacientes </div>
                </a>

                <a class="link_item_tab w-inline-block" href="#entrega-de-resultados_centros">
                  <div>
                    Entrega de resultados </div>
                </a>




                <a class="link_item_tab w-inline-block" href="#servicios_centros">
                  <div>
                    Servicios
                  </div>
                </a>


                <a class="link_item_tab w-inline-block" href="#staff_centros">
                  <div>
                    Staff de profesionales
                  </div>
                </a>
                <a class="link_item_tab w-inline-block" href="#galeria_centros">
                  <div>
                    Galería de fotos
                  </div>
                </a>
                <a class="link_item_tab w-inline-block" href="#contacto_centros">
                  <div>
                    Contacto
                  </div>
                </a>
              </div>
            </div>
            <div class="col-1 full">
              <div class="info_content_tab full-right mbottom">
                <div class="section_tab _2-col nopadding" id="presentacion_centro">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Presentación </h2>
                        <div class="line">
                        </div>
                        <div class="">
                          <p class="prf_centro">
                            El Centro odontológico docente asistencial de la Universidad Privada Norbert Wiener se crea
                            en Setiembre 2006, brinda servicios odontológicos con altos estándares de calidad, con el
                            respaldo de la certificación ISO 9001, versión 2015, así aseguramos el desarrollo de los
                            procesos de manera eficiente y con calidez en la atención. <br>
                          </p>
                        </div>
                      </div>

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Misión </h2>
                        <div class="line">
                        </div>
                        <div class="">
                          <p class="prf_centro">
                            Brindar servicios odontológicos de calidad, desarrollando una experiencia educativa que
                            supere las expectativas del cliente interno y externo, a través de una atención
                            personalizada, humanizada e integral. <br>
                          </p>
                        </div>
                      </div>

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Visión </h2>
                        <div class="line">
                        </div>
                        <div class="">
                          <p class="prf_centro">
                            Ser el Centro Odontológico Universitario líder, de referencia a nivel nacional, reconocido
                            por su atención de calidad con calidez al servicio de la sociedad. <br>
                          </p>
                        </div>
                      </div>

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Certificación ISO 9001: 2015 </h2>
                        <div class="line">
                        </div>
                        <div class="info_centro_2col">
                          <p class="prf_centro">
                            El Centro Odontológico es una Institución Prestadora de Servicios de Salud (IPRESS) de
                            categoría I-3 y cuenta con la certificación ISO 9001: 2015. <br>
                          </p>
                          <div class="certificado_block">
                            <img alt="" class="logo_iso" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/logo_iso_black.svg' ?>">
                            <div class="legal">
                            </div>

                          </div>
                        </div>
                      </div>


                      <div class="content_section">
                        <div class="clase_para_wordpress ">
                          <h2>Facultad de Ciencias de la Salud</h2>
                          [linea]

                          <span style="color: #00b7bd;"><strong>Carrera Odontología</strong></span>
                          <p style="text-align: left;">El Centro Odontológico recibe a estudiantes de pregrado de 4to a
                            9no ciclo para sus prácticas clínicas. Las prácticas de los estudiantes de 4to a 7mo ciclo
                            corresponden a preclínicas y de 8vo a 9no ciclo corresponde a clínicas integrales (Adulto y
                            Niño).</p>
                          <p style="text-align: left;">Nuestros residentes de segundas especialidades realizan prácticas
                            clínicas en el Centro Odontológico durante todos los ciclos que comprenda su formación.</p>
                          <p style="text-align: left;"><a href="https://www.uwiener.edu.pe/carreras/odontologia/">Ver
                              carrera</a></p>
                          &nbsp;
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="section_tab _2-col" id="infraestructura_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Infraestuctura y equipamiento
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Centro de Radiología <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p class="ql-align-justify"><span
                                    style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con 7 equipos
                                    de rayos X periapical. La radiografía dental ayuda a diagnosticar enfermedades y
                                    lesiones en los dientes y tejidos de soporte que en un examen visual no son
                                    visibles.</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Tomógrafo Digital, Panorámico Cefalométrico <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con un
                                    equipo 3 en 1 tomografías de campo pequeño mediano y amplio utilizado para
                                    diagnósticos para endodoncia, ortodoncia, implantología, rehabilitación oral,
                                    cirugías bucales, etc., y panorámicas y cefalométricas de todo tipo y Microscopios
                                    Dentales</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Microscopios Dentales <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p class="ql-align-justify"><span
                                    style="background-color: transparent; color: rgb(0, 0, 0);">Los microscopios
                                    dentales ofrecen una profundidad y una visión de campo más amplia que los equipos
                                    dentales tradicionales, lo cual permite realizar un diagnóstico más preciso y
                                    acertado en los tratamientos endodónticos.</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              RVG <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p class="ql-align-justify"><span
                                    style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con 2 sensores
                                    RVG que permiten la toma de radiografías periapicales digitales que en comparación a
                                    los equipos convencionales producen una menor dosis de radiación frente a la
                                    exposición lo cual es beneficioso para el paciente y doctor.</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Autoclave <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p class="ql-align-justify"><span
                                    style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con
                                  </span><span style="background-color: transparent; color: rgb(0, 0, 255);">un
                                    área</span><span style="background-color: transparent; color: rgb(0, 0, 0);"> de
                                    esterilización mediante autoclave Clase B que son indicadas para centro de
                                    odontología e instrumental odontológico.&nbsp;</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="especialidades_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Especialidades </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación oral <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                La Especialidad de Rehabilitación Oral desarrolla actividades clínicas bajo el principio
                                de la Odontología basada en evidencia científica, que incluye áreas de diagnóstico,
                                planificación y tratamientos rehabilitadores convencionales y actuales, empleando
                                tecnología de vanguardia. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Endodoncia <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                La Especialidad de Endodoncia se encarga de mantener la salud, prevenir, tratar las
                                enfermedades del complejo pulpodentinario. En nuestro Centro Odontológico contamos con
                                todas las herramientas tecnológicas y la base científica para solucionar estos casos de
                                forma eficaz. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Odontopediatría <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                La Especialidad de Odontopediatría tiene como objetivo realizar actividades clínicas
                                basados en evidencia científica a nivel preventivo y restaurador del paciente pediátrico
                                desde el nacimiento hasta la adolescencia. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Ortodoncia y ortopedia maxilar <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                La Especialidad de Ortodoncia y Ortopedia Maxilar tiene como finalidad diagnosticar de
                                manera oportuna las alteraciones craneomandibulares realizando procedimientos
                                preventivos e interceptivos con un plan de tratamiento de manera secuencial y
                                sistemática de maloclusiones de leve, mediana y alta complejidad. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Odontología Restauradora y estética <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                La Especialidad de Odontología Restauradora y Estética permite diagnosticar, planificar
                                y realizar restauraciones estéticas directas e indirectas y devolver la sonrisa teniendo
                                en consideración la oclusión del paciente. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="nuestros-pacientes_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              Nuestros pacientes </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Paciente particular -
                                corporativo</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Paciente particular -
                                externo</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Docente asistencial </span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="entrega-de-resultados_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              Entrega de resultados </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Para
                                radiografías periapicales: El resultado se entrega en físico al alumno o
                                paciente.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Para
                                radiografías RVG: El resultado es digital. Se envía a salas clínicas por circuito
                                cerrado.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Para
                                radiografías panorámicas y cefalométricas: El resultado se puede entregar físicamente
                                mediante impresión o se puede enviar por correo.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Para
                                tomografías: El resultado se entrega en USB.</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="servicios_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Servicios
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="itemservicios centro">
                          <ul class="" role="list">
                            <li>
                              <div>
                                Diagnóstico </div>
                            </li>
                            <li>
                              <div>
                                Radiología </div>
                            </li>
                            <li>
                              <div>
                                Operatoria dental </div>
                            </li>
                            <li>
                              <div>
                                Periodoncia </div>
                            </li>
                            <li>
                              <div>
                                Rehabilitación oral </div>
                            </li>
                            <li>
                              <div>
                                Endodoncia </div>
                            </li>
                            <li>
                              <div>
                                Odontopediatría </div>
                            </li>
                            <li>
                              <div>
                                Cirugía bucal </div>
                            </li>
                            <li>
                              <div>
                                Ortodoncia y ortopedia maxilar </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="staff_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Staff de Profesionales
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="director_centro">
                          <img alt="" class="director_img" loading="lazy" src="">
                          <div class="director_info">
                            <h4 class="director_centro_name">
                              Directora del Centro Odontológico </h4>
                            <div class="director_cargo">
                              Dra. Brenda Vergara Pinto </div>
                            <div class="director_name">
                              Especialista en rehabilitación oral, Doctora en Salud Pública, Maestra en Gerencia en
                              Servicios de Salud, con experiencia en gerencia en el área de salud, práctica clínica.
                            </div>
                          </div>

                        </div>
                        <a class="btn w-button" data-ix="openmodalcentros" href="#"
                          style="transition: color 0.15s, background-color 0.2s;">
                          Ver todo el Staff
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section_tab _2-col" id="galeria_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Galería de fotos
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_infra mtop">
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-1.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria0.jpg",
                                "origFileName": "enfermeria0.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-1.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-5.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria1.jpg",
                                "origFileName": "enfermeria1.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-5.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-6.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria2.jpg",
                                "origFileName": "enfermeria2.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-6.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-3.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria3.jpg",
                                "origFileName": "enfermeria3.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-3.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-4.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria4.jpg",
                                "origFileName": "enfermeria4.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-4.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                          <a class="item_img mobile w-inline-block w-lightbox" href="#">
                            <img alt="" class="img_light_box" loading="lazy"
                              src="<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-2.png' ?>">
                            <script class="w-json" type="application/json">
                            {
                              "items": [{
                                "type": "image",
                                "_id": "5fa5e35ca18867dfad8a8079",
                                "fileName": "enfermeria5.jpg",
                                "origFileName": "enfermeria5.jpg",
                                "width": 284,
                                "height": 173,
                                "fileSize": 70229,
                                "url": "<?= UPLOAD_MIGRATION_PATH . '/centro-odontologico/odontologia-2.png' ?>"
                              }],
                              "group": "img_centro"
                            }
                            </script>

                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section_tab _2-col" id="contacto_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="contact-2col">

                          <div class="contact_box">
                            <h4 class="h4_verde">
                              Contacto </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/contact_black.svg' ?>">
                                <div>
                                  Lunes a Sábado de 8:00 a.m. a 10:00 p.m. </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/contact_black.svg' ?>">
                                <div>
                                  Av. Arequipa 440 – Cercado de Lima </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/phone_black.svg' ?>">
                                <div>
                                  (01)706-5555 Anexo 3132 </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>">
                                <div>
                                  centro.odontologico@uwiener.edu.pe </div>

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
      <div class="modal-centros">
        <div class="cerrar-modal" data-ix="closemodalcentros"
          style="transition: transform 0.2s, -webkit-transform 0.2s;">
          <div class="p-16 blanco">
            Cerrar
          </div>
          <img alt="" class="icon-cerrar"
            src="<?= UPLOAD_MIGRATION_PATH . '/shared/cerrar-blanco.svg' ?>">

        </div>
        <div class="contenido_gridstaff">
          <h3 class="h3_verde">
            Staff de Profesionales
          </h3>
          <div class="w-layout-grid gridstaff">
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ADRIANZEN ACURIO, CÉSAR AUGUSTO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  AGUIRRE MORALES, ANITA KORI </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ALVAN SUASNABAR PABLO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ARAUZO SINCHEZ, CARLOS JAVIER </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ARAUJO FARJE JESSICA JAZMIN </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ASCANOA OLAZO, JIMMY ANTONIO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  BAMONDE SEGURA LEYLA KATHERIN </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  BOURONCLE SACIN, JORGE ENRIQUE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  CESPEDES PORRAS, JACQUELINE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  CHANAME MARIN, ANN ROSEMARY </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  DEL CASTILLO AYQUIPA, ARMANDO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GARAVITO CHANG, ENNA LUCILA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GIL CUEVA SILVIA LILIANA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GIRANO CASTAÑOS, JORGE ALBERTO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GOMEZ CARRION, CHRISTIAN ESTEBAN </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GUEVARA SOTOMAYOR, JUAN CESAR </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  GUILLEN GALARZA, CARLOS ENRIQUE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HAMAMOTO ICHIKAWA, JESSICA MARIA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUACHILLO CEVALLOS MARIA DEL PILAR </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUAPAYA PISCONTE GIAN VIVIANA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUAMANI CANTORAL, JUAN EDUARDO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUAMANI CAQUIAMARCA, YULIANA ESTHER </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUAYLLAS PAREDES, BETZABE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  HUILLCA CASTILLO, NANCY ESTEFANIA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ITURRIA REATEGUI, INGRID ROSA ISABEL </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  LLERENA MEZA,VERONICA JANICE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  LOAYZA RODRIGUEZ LUIS </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  LUJAN LARREATEGUI HAYDEÉ GIOVANNA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MACHCO PASMIÑO HERIBERTO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MARROQUIN GARCIA, LORENZO ENRIQUE </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MENACHO ANGELES, GREGORIO LORENZO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MEZZICH GALVEZ, JORGE LUIS </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MORANTE MATURANA, SARA ANGELICA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  MUÑOZ REYES MIRIAM </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  OLIVA ESPINOZA, ADELA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  PARI ZACARÍAS GERARDO JAVIER </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  PODESTA RODRIGUEZ KARINA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ROBLES MONTESINOS, ADA OLINDA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  ROJAS ORTEGA, RAUL ANTONIO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  SCHWAN SILVA IGNACIO SEGUNDO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  SOTO VARGAS, KARINA JANETH </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  SOTOMAYOR LEON, GINO AURELIO </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  SOTOMAYOR WOOLCOTT PEGGI MARGREP </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  VERGARA PINTO, BRENDA ROXANA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  VILCHEZ BELLIDO, DINA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  VILLACORTA MOLINA, MARIELA ANTONIETA </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  VELASQUEZ VELASQUEZ ROXANA PILAR </div>
                <div class="cargostaff">
                </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  VERÓNICA LLERENA ​ </div>
                <div class="cargostaff">
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
