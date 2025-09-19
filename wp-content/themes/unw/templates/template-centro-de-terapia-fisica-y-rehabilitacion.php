<?php
/**
 * Template Name: Centro de Terapia Física y Rehabilitación
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
      <img src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/centro-de-terapia-fisica-y-rehabilitacion.png' ?>"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/centro-de-terapia-fisica-y-rehabilitacion.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/centro-de-terapia-fisica-y-rehabilitacion.png' ?> 1920w"
        sizes="100vw" alt="" class="img_cover left">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page serv_uni">
            Centros Wiener
          </h2>
          <h1 class="h1_carreras small opacity0">
            Centro de Terapia Física y Rehabilitación </h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga">
            <a class="link miga" href="<?= home_url("/") ?>">
              Inicio /
            </a>
            <a class="link miga" href="<?= home_url("/centros-wiener/") ?>">
              Centros Wiener /
            </a>
            <a class="link miga w--current" href="#">
              Centro de Terapia Física y Rehabilitación </a>
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
                <a class="link_item_tab w-inline-block" href="#beneficios_centros">
                  <div>
                    Beneficios
                  </div>
                </a>

                <a class="link_item_tab w-inline-block" href="#infraestructura_centros">
                  <div>
                    Infraestructura </div>
                </a>
                <a class="link_item_tab w-inline-block" href="#servicios_centros">
                  <div>
                    Servicios </div>
                </a>

                <a class="link_item_tab w-inline-block" href="#promociones_centros">
                  <div>
                    Promociones </div>
                </a>





                <a class="link_item_tab w-inline-block" href="#staff_centros">
                  <div>
                    Staff de profesionales
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
                            El Centro de Terapia Física y Rehabilitación de la Universidad Norbert Wiener nace como un
                            Centro Docente Asistencial en el que se fusionan los conocimientos y experiencias adquiridos
                            en la profesión de Tecnología Médica en Terapia Física y Rehabilitación para brindar una
                            atención integral de calidad en la prevención, diagnóstico y tratamiento a la población en
                            situación de disfunción musculoesquelética y discapacidad temporal o permanente, y favorecer
                            a este grupo humano en su integración a la sociedad.<br><br>En el 2007 se inaugura el
                            Centro, que fue equipado progresivamente hasta alcanzar la tecnología moderna con la que
                            cuenta actualmente, luego de realizar un análisis de las necesidades particulares del
                            proceso de enseñanza-aprendizaje de nuestros estudiantes.<br> <br>
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
                            Estamos enfocados en proporcionar servicios de Terapia Física y Rehabilitación de
                            excelencia, con métodos y técnicas de tratamientos basados en los conceptos científicos más
                            actuales. <br>
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
                            Crear un espacio de rehabilitación único que nos permita ser reconocidos en un futuro
                            próximo como la mejor alternativa de servicios de Terapia Física y Rehabilitación. <br>
                          </p>
                        </div>
                      </div>

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Objetivo </h2>
                        <div class="line">
                        </div>
                        <div class="">
                          <p class="prf_centro">
                            Facilitar el desarrollo, mantenimiento y recuperación de la máxima funcionalidad y movilidad
                            del individuo o grupo de personas a lo largo de su vida. <br>
                          </p>
                        </div>
                      </div>

                      <div class="content_section">
                        <div class="title_section">
                        </div>
                        <h2 class="h3_interna_title">
                          Carrera Tecnología Médica en Terapia Física y Rehabilitación </h2>
                        <div class="line">
                        </div>
                        <div class="">
                          <p class="prf_centro">
                            Desde que inician el primer ciclo, los alumnos toman contacto con los ambientes del Centro
                            de Terapia Física, en donde realizan sus prácticas de las diferentes asignaturas, siendo
                            permanentemente supervisados por cada Docente. <br>
                          </p>
                        </div>
                      </div>


                      <div class="content_section">
                        <div class="clase_para_wordpress ">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col">
                  <div class="content_seccion_tab full" id="beneficios_centros">
                    <div class="info_section full">
                      <div class="content_section">
                        <div class="title_section">
                          <h2 class="h3_interna_title">
                            Beneficios de nuestro Centro de Terapia Física y Rehabilitación </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_centros">
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/staff.svg' ?>">
                              <div>
                                Staff de profesionales<br>con amplia experiencia <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/icon_docente.svg' ?>">
                              <div>
                                Precios muy competentes al alcance tanto de alumnos como de colaboradores de la
                                corporación Wiener – Carrión <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/seguimiento.svg' ?>">
                              <div>
                                Ubicación Céntrica <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/calidez.svg' ?>">
                              <div>
                                Calidez de atención<br>diferenciada <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="<?= UPLOAD_MIGRATION_PATH . '/centro-terapia-fisica/seguimiento.svg' ?>">
                              <div>
                                Seguimiento personalizado<br>al paciente <br>
                              </div>

                            </div>
                          </div>
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
                            Infraestructura </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Hidroterapia <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Analgesia.<br>Anti inflamatorio.<br>Incrementar la movilidad articular.<br>Relajación
                                muscular. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Magnetoterapia <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Favorecer la regeneración del tejido óseo.<br>Procesos inflamatorios.<br>Patologías que
                                cursan con dolor local. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Laser <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Anti inflamatorio.<br>Anti edematoso.<br>Cicatriza las heridas y traumatismos en
                                diversos tejidos. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Electroterapia <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Disminución del dolor.<br>Estimulación nerviosa.<br>Estimula el aumento de la
                                musculatura y el mantenimiento de la masa muscular. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Sala de Ultrasonido <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Favorece la relajación muscular.<br>Disminuye la rigidez articular.<br>Ayuda a movilizar
                                el edema. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Gimnasio Terapéutico <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Es un espacio donde se realiza activación física para la salud trabajando diferentes
                                capacidades como fuerza, flexibilidad, coordinación, equilibrio movilidad, resistencia,
                                velocidad, entre otras. <br>
                              </div>
                            </div>
                          </div>
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
                            Servicios </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación neurológica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Tratamiento de las alteraciones y lesiones ocasionadas por algunas afecciones del
                                sistema nervioso central o periférico y que afectan al movimiento. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación traumatológica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Tratamiento de las lesiones producidas por un accidente, estas afectan el sistema
                                músculo esquelético, tales como musculares, óseas y en oportunidades también lesiones
                                nerviosas. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación lesiones deportivas <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Trata lesiones que desarrolla el deportista en su práctica de deporte habitual, consiste
                                en recuperar la funcionalidad del deportista y su readaptación lo antes posible para
                                limitar lo menos posible su entrenamiento y su vuelta a la actividad. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación pediátrica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Tratamiento y cuidado de los recién nacidos, niños que presentan alteraciones
                                congénitas, que afectan a su desarrollo o deficiencias motoras de origen neuromuscular
                                y/o músculo esquelético de manera que se pueda obtener el mayor nivel funcional posible.
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación reumatológica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Aliviar el dolor de los trastornos del aparato locomotor y del tejido conectivo, Abarca
                                un gran número de dolencias conocidas en conjunto como enfermedades reumáticas. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación Postural <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Tratamiento de alteraciones que van relacionados con las disfunciones musculo
                                esqueléticas y óseas, ocasionadas por la alteración de la biomecánica normal de la
                                columna vertebral. En la cuales se realiza el uso de diferentes técnicas manuales y
                                estiramientos globales para su mejoría. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación cardiorrespiratoria <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Tratamiento, prevención y estabilización de las diferentes enfermedades del aparato
                                respiratorio o cualquiera que interfiera en su correcto funcionamiento, con el fin de
                                mantener o mejorar la función respiratoria. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Rehabilitación Geriátrica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Dedicada a la aplicación de determinadas técnicas de fisioterapia sobre adultos mayores
                                en los diferentes procesos patológicos que pueden llevar a la disminución de sus
                                capacidades funcionales. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="section_tab _2-col" id="promociones_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              Promociones </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <p style="text-align: left;"><strong><span style="color: #00babe;">Paquete de
                                promociones</span></strong></p>
                          <ul>
                            <li style="text-align: left;">10% de descuento en paquete de 10 sesiones</li>
                            <li style="text-align: left;">10% de descuento en paquete de 5 sesiones</li>
                          </ul>
                          <p style="text-align: left;"><strong><span style="color: #00babe;">Agenda una evaluación
                                Fisioterapéutica*</span></strong></p>
                          <p style="text-align: left;"><span style="font-weight: 400;">*Es indispensable contar con un
                              previo diagnóstico médico, orden para terapia o con algún diagnóstico por imágenes.</span>
                          </p>
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
                        <div class="centro_coordinadores">
                          <div class="item_coordinador">
                            <ul class="list margintop" role="list">
                              <li class="item_list">
                                <div class="coordinador_name">
                                  Dra. Rosmy Gagliuffi </div>
                                <p class="coordinador_bio">
                                  Directora de la carrera de Terapia Física </p>
                              </li>
                            </ul>
                          </div>
                          <div class="item_coordinador">
                            <ul class="list margintop" role="list">
                              <li class="item_list">
                                <div class="coordinador_name">
                                  Mg. Pilar Huarcaya Sihuincha </div>
                                <p class="coordinador_bio">
                                  Coordinadora del Centro de Terapia Física </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <a class="btn-legacy w-button" data-ix="openmodalcentros" href="#"
                          style="transition: color 0.15s, background-color 0.2s;">
                          Ver todo el Staff
                        </a>
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
                              Horario </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/contact_black.svg' ?>">
                                <div>
                                  Lunes a sábado de 8:00 a. m. a 2:00 p. m. </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/contact_black.svg' ?>">
                                <div>
                                  Lunes a viernes de 2:00 p. m. a 8:00 p. m. </div>

                              </div>

                            </div>
                          </div>

                          <div class="contact_box">
                            <h4 class="h4_verde">
                              Teléfono </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/phone_black.svg' ?>">
                                <div>
                                  7065555 anexo 3113 </div>

                              </div>

                            </div>
                          </div>

                          <div class="contact_box">
                            <h4 class="h4_verde">
                              Citas en </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/arroba_black.svg' ?>">
                                <div>
                                  centro.terapiafisica@uwiener.edu.pe </div>

                              </div>

                            </div>
                          </div>

                          <div class="contact_box">
                            <h4 class="h4_verde">
                              Ubícanos en </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="<?= UPLOAD_MIGRATION_PATH . '/shared/ubicacion.png' ?>">
                                <div>
                                  Av. Arequipa 440, Lima </div>

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
                  Mg. Julio César Granados Carrera </div>
                <div class="cargostaff">
                  Fisioterapia en Neurorehabilitación </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  Dra. Rosa Vicenta Rodríguez García </div>
                <div class="cargostaff">
                  Fisioterapia en Adulto Mayor </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  Mg. Santos Lucio Chero Pisfil </div>
                <div class="cargostaff">
                  Fisioterapia Cardiorrespiratoria </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_check.svg' ?>">
              <div class="userstaf">
                <div class="nombrestaff">
                  Mg. Juan Américo Vera Arriola </div>
                <div class="cargostaff">
                  Terapia manual Ortopédica </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>
