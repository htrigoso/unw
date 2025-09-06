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
    <div class="modal-comunidad">
      <div class="banner-info-comu">
        <div class="content-comunidad w-container">
          <div class="content-intranet">
            <h3>Intranet</h3>
            <div class="content-botones"><a href="#" class="btn white intranet w-button">Portal para Estudiantes</a><a
                href="#" class="btn white intranet w-button">Portal para Docentes</a><a href="#"
                class="btn white intranet w-button">Portal para Administración</a><a href="#"
                class="btn-2 intra none w-button">Portal para Egresados</a></div>
          </div>
          <div class="titulares-comu"><img
              src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb4beacf78568206ef8ca8d_cerrar-blanco.svg"
              alt="" class="img-cerrar ico-blanco" data-ix="cerrar-comunidad" style="transition: all;">
            <h3>Comunidad</h3>
          </div>
          <div>
            <div class="menu-comunidad">
              <div class="menu-izq">
                <ul role="list" class="items-menu-comu">
                  <li class="item-comunidad" data-ix="mostrar-comunidad" style="transition: all;">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad" data-ix="mostar-submenu" style="transition: 0.3s;">Servicios Wiener
                      </div>
                    </a>
                  </li>
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad" data-ix="mostrar-sub-su" style="transition: 0.3s;">Servicios
                        Universitarios</div>
                    </a>
                  </li>
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad small" data-ix="esconder-sw" style="transition: 0.3s;">Blog</div>
                    </a>
                  </li>
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad" data-ix="esconder-sw" style="transition: 0.3s;">Bolsa de Trabajo</div>
                    </a>
                  </li>
                  <li class="item-comunidad" data-ix="esconder-sw" style="transition: all;">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad">Contáctanos</div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="menu-izq-movil">
                <ul role="list" class="items-menu-comu">
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad" data-ix="mobil-menu-sw" style="transition: 0.3s;">Servicios Wiener
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="submenu-drc-movil" data-ix="mouse-out" style="transition: all;">
                  <ul role="list" class="items-menu-comu">
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Centro de Terapia Física y Rehabilitación</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Centro de Información del Medicamento</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Centro Odontológico</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Wiener Ambiental</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Unidad Académica de Estudios Generales</div>
                      </a>
                    </li>
                  </ul>
                </div>
                <ul role="list" class="items-menu-comu">
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad" data-ix="mobil-menu-su" style="transition: 0.3s;">Servicios
                        Universitarios</div>
                    </a>
                  </li>
                </ul>
                <div class="submenu_su_mobil" data-ix="mouse-out" style="transition: all;">
                  <ul role="list" class="items-menu-comu">
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Oficina de Admisión y Registros Académicos</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Secretaría General</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Dirección de Bienestar Universitario</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Centro de Investigación</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Defensoría Universitaria</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Centro de Idiomas</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Biblioteca</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Transparencia</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Repositorio Institucional</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">Gestor de contenidos Runachay</div>
                      </a>
                    </li>
                    <li class="item-submenu">
                      <a href="#" class="link-comunidad w-inline-block">
                        <div class="p-18 sub-menu">InfoWiener</div>
                      </a>
                    </li>
                  </ul>
                </div>
                <ul role="list" class="items-menu-comu">
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad small">Blog</div>
                    </a>
                  </li>
                  <li class="item-comunidad">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad">Bolsa de Trabajo</div>
                    </a>
                  </li>
                  <li class="item-comunidad" data-ix="esconder-sw" style="transition: all;">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 comunidad">Contáctanos</div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="submenu-drc" data-ix="mouse-out" style="transition: all;">
                <ul role="list" class="items-menu-comu">
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Centro de Terapia Física y Rehabilitación</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Centro de Información del Medicamento</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Centro Odontológico</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Wiener Ambiental</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Unidad Académica de Estudios Generales</div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="submenu_su" data-ix="mouse-out" style="transition: all;">
                <ul role="list" class="items-menu-comu">
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Oficina de Admisión y Registros Académicos</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Secretaría General</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Dirección de Bienestar Universitario</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Centro de Investigación</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Defensoría Universitaria</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Centro de Idiomas</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Biblioteca</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="https://intranet.uwiener.edu.pe/univwiener/transparencia/presentacion.asp" target="_blank"
                      class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Transparencia</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="http://repositorio.uwiener.edu.pe/xmlui/" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Repositorio Institucional</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="#" class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">Gestor de contenidos Runachay</div>
                    </a>
                  </li>
                  <li class="item-submenu">
                    <a href="https://intranet.uwiener.edu.pe/univwiener/infowiener.aspx"
                      class="link-comunidad w-inline-block">
                      <div class="p-18 sub-menu">InfoWiener</div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content-contacto">
            <div class="contac-column central">
              <div class="p-16 blanco"><span class="p-14 blanco">Central de informes:<br></span>(01) 706-5100</div>
            </div>
            <div class="contac-column">
              <div class="p-16 blanco"><span class="p-14 blanco">Email:<br></span>info@uwiener.edu.pe</div>
            </div>
            <div class="contac-column">
              <div class="p-14 blanco t-social">Síguenos en:</div>
              <div class="icon-social"><a href="https://www.facebook.com/uwiener/" target="_blank"
                  class="link-icon w-inline-block"><img
                    src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb224fa4e4584303704b84c_fb-icon-white.svg"
                    alt=""></a><a href="https://www.youtube.com/user/uwiener" target="_blank"
                  class="link-icon w-inline-block"><img
                    src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb224fa2da2ad4cde5507b8_yt-icon-white.svg"
                    alt=""></a><a href="https://pe.linkedin.com/school/universidadnorbertwiener/" target="_blank"
                  class="link-icon w-inline-block"><img
                    src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb224fbdfaff51dc236a34b_link-icon-white.svg"
                    alt=""></a><a href="https://www.instagram.com/u.wiener/" target="_blank"
                  class="link-icon w-inline-block"><img
                    src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb224fadfaff518cc36a34a_inst-icon-white.svg"
                    alt=""></a></div>
            </div>
            <div class="contac-column">
              <div class="p-14 blanco t-social">Conversa con nosotros</div>
              <div class="wsp-item"><a href="https://api.whatsapp.com/send?phone=51951296667" target="_blank"
                  class="wsp-link w-inline-block"><img
                    src="https://assets.website-files.com/5cb0bebddf9044906507faf0/5cb4b0dfb097ed1ed00a25cb_icon-wsp.svg"
                    alt="">
                  <div class="p-18 comu">997535372</div>
                </a></div>
            </div>
          </div>
          <div class="direccion-uni">
            <div class="p-14 blanco">Av. Arequipa 440 con Jr. Larrabure y Unanue 110. Urb. Santa Beatriz<br>Av. Petit
              Thouars 2021, Lince<br></div>
          </div>
        </div>
      </div>
      <div class="banner_comu">
        <div class="titular-banner">
          <div class="cerar-comunidad" data-ix="cerrar-comunidad" style="transition: all;">
            <div class="p-14 cerrar">Cerrar</div><img
              src="https://assets.website-files.com/5e14b299ed73794253b5000e/5e14ef04b86f101b6b8ca790_cerrar-icon.svg"
              alt="" class="img-cerrar">
          </div>
          <div class="cuadro_prueba-2">
            <div class="profezio_titulo-2">
              <h2 class="prueba-aptitud-2">Examen de<br>Admisión Pregrado</h2>
            </div>
            <div class="texto-2-columnos">
              <div class="tu_cuadro">
                <h2 class="_24-2">17</h2>
              </div>
              <div class="texto_big">
                <h2 class="mes-2">MAR.</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="img-banner"><img
            src="https://assets.website-files.com/5e14b299ed73794253b5000e/5e14ef04b86f10545e8ca789_foto-comunidad.png"
            alt="" class="image-4"></div>
      </div>
    </div>
    <div class="cover_img_page center">
      <div class="overlay">
      </div>
      <img src="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Terapia-Física-y-Rehabilitación.png"
        srcset="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Terapia-Física-y-Rehabilitación.png 500w, https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Terapia-Física-y-Rehabilitación.png 1920w"
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
            <a class="link miga" href="https://www.uwiener.edu.pe/">
              Inicio /
            </a>
            <a class="link miga" href="https://www.uwiener.edu.pe/centros-wiener/">
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
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/staff.svg">
                              <div>
                                Staff de profesionales<br>con amplia experiencia <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/icon_docente.svg">
                              <div>
                                Precios muy competentes al alcance tanto de alumnos como de colaboradores de la
                                corporación Wiener – Carrión <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/seguimiento.svg">
                              <div>
                                Ubicación Céntrica <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/calidez.svg">
                              <div>
                                Calidez de atención<br>diferenciada <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/seguimiento.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
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
                          &nbsp;
                          <ul>
                            <li style="text-align: left;">10% de descuento en paquete de 10 sesiones</li>
                            <li style="text-align: left;">10% de descuento en paquete de 5 sesiones</li>
                          </ul>
                          &nbsp;
                          <p style="text-align: left;"><strong><span style="color: #00babe;">Agenda una evaluación
                                Fisioterapéutica*</span></strong></p>
                          &nbsp;
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
                        <a class="btn w-button" data-ix="openmodalcentros" href="#"
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
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/contact_black.svg">
                                <div>
                                  Lunes a sábado de 8:00 a. m. a 2:00 p. m. </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/contact_black.svg">
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
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/phone_black-2.svg">
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
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/arroba_black-1.svg">
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
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/ubicacion-2.png">
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
            src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/cerrar-blanco.svg">

        </div>
        <div class="contenido_gridstaff">
          <h3 class="h3_verde">
            Staff de Profesionales
          </h3>
          <div class="w-layout-grid gridstaff">
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_check.svg">
              <div class="userstaf">
                <div class="nombrestaff">
                  Mg. Julio César Granados Carrera </div>
                <div class="cargostaff">
                  Fisioterapia en Neurorehabilitación </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_check.svg">
              <div class="userstaf">
                <div class="nombrestaff">
                  Dra. Rosa Vicenta Rodríguez García </div>
                <div class="cargostaff">
                  Fisioterapia en Adulto Mayor </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_check.svg">
              <div class="userstaf">
                <div class="nombrestaff">
                  Mg. Santos Lucio Chero Pisfil </div>
                <div class="cargostaff">
                  Fisioterapia Cardiorrespiratoria </div>
              </div>

            </div>
            <div class="itemstaf">
              <img alt="" class="icon paddingright" loading="lazy"
                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_check.svg">
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
