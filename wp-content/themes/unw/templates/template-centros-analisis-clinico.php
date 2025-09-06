<?php
/**
 * Template Name: Centros de Análisis Clínicos
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'backup'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class=" main_container">
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
      <img src="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Análisis-Clínicos.png"
        srcset="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Análisis-Clínicos.png 500w, https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Centro-de-Análisis-Clínicos.png 1920w"
        sizes="100vw" alt="" class="img_cover left">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page serv_uni">
            Centros Wiener
          </h2>
          <h1 class="h1_carreras small opacity0">
            Centro de Análisis Clínicos </h1>
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
              Centro de Análisis Clínicos </a>
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
                <a class="link_item_tab w-inline-block" href="#presentacion_centro">
                  <div>Presentación</div>
                </a>
                <a class="link_item_tab w-inline-block" href="#beneficios_centros">
                  <div>
                    Beneficios
                  </div>
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
                <a class="link_item_tab w-inline-block" href="#lista-de-precios_centros">
                  <div>
                    Lista de precios </div>
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
                            Desde el año 2015 el Centro de análisis clínicos de la Universidad Privada Norbert Wiener
                            brinda el servicio de toma de muestra, procesamiento y entrega de resultados de muestras
                            clínicas en términos de calidad, precisión y calidez en la atención de sus
                            pacientes.<br><br>El Centro de análisis clínicos cuenta con espacios para el desarrollo de
                            trabajos de investigación para los alumnos de los últimos ciclos (9no y 10mo ciclo). <br>
                          </p>
                        </div>
                      </div>


                      <div class="content_section">
                        <div class="clase_para_wordpress ">
                          <h2 style="text-align: left;">Facultad de Ciencias de la Salud</h2>
                          <p style="text-align: left;">[linea]</p>
                          <p style="text-align: left;"><span style="color: #00b7bd;"><strong>Tecnología Médica en
                                Laboratorio Clínico y Anatomía Patológica</strong></span></p>
                          <p style="text-align: left;">Formamos profesionales altamente especializados con un enfoque
                            humanista y científico que desarrollan pruebas biológicas y biofísicas que ayudan a
                            analizar, diagnosticar, prevenir y tratar diversas enfermedades.</p>
                          <a
                            href="https://www.uwiener.edu.pe/carreras/tecnologia-medica-en-laboratorio-clinico-y-anatomia-patologica">Ver
                            Carrera</a>
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
                            Beneficios de nuestro Centro de Análisis Clínicos </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="w-layout-grid grilla_centros">
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-6.svg">
                              <div>
                                Staff de profesionales con amplia experiencia <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-4.svg">
                              <div>
                                Precios muy competentes al alcance tanto de los alumnos como de colaboradores de la
                                corporación Wiener – Carrión <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-5.svg">
                              <div>
                                Ubicación Céntrica <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-3.svg">
                              <div>
                                Prontitud en la entrega de resultados <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-1.svg">
                              <div>
                                Calidez de atención diferenciada <br>
                              </div>

                            </div>
                          </div>
                          <div class="item_grilla mw">
                            <div class="col-item title">
                              <img alt="" class="img_grilla_item img_grilla_centros"
                                src="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/icono-centro-analisis-2.svg">
                              <div>
                                Seguimiento personalizado al paciente <br>
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
                            Infraestuctura y equipamiento
                          </h2>
                          <div class="line">
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Amplios espacios <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Amplios espacios
                                    distribuidos por especialidades: Bioquímica, Hematología, Inmunología,
                                    Microbiología.</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Procesamiento de muestras <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con el
                                    equipamiento necesario para el procesamiento de muestras para el apoyo diagnóstico y
                                    prevención de enfermedades.</span></p> <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Especialistas e investigadores <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div class="clase_para_wordpress">
                                <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Contamos con un
                                    staff de profesionales especialistas e investigadores pertenecientes a la plana
                                    docente de la Carrera de Laboratorio Clínico y Anatomía Patológica.</span></p>
                                <p><br></p>
                                <p><br></p> <br>
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
                              Bioquímica <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Estudio de la composición química de los fluidos Humanos. Las Pruebas Generales en esta
                                área son: Glucosa, Colesterol, Triglicéridos, Transaminasas (TGO y TGP), perfiles
                                Hepático y lipídico. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Hematología <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Estudio e investigación de la sangre y los órganos hematopoyéticos. Las Pruebas
                                Generales en esta área son: Hemograma Completo, Hemoglobina, Hematocrito, Recuento de
                                Plaquetas, Tiempo de Sangría, Tiempo de Coagulación, Tiempo de Protrombina, Velocidad de
                                sedimentación, Recuento de Reticulocitos. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Imnuno Hematología <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Parte de la hematología, estudia los procesos inmunitarios que tienen lugar en el
                                organismo en relación con los elementos sanguíneos. La prueba General en esta área es:
                                Grupo Sanguíneo. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Uroanálisis <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Consiste en una serie de exámenes efectuados sobre la orina. La prueba en esta área es:
                                Examen de Orina Completo. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Inmunología <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Estudia específicamente la inmunidad, que corresponde a la capacidad natural o adquirida
                                por el cuerpo humano para luchar contra un agente patógeno. Las pruebas Generales en
                                esta área son: Prueba rápida VIH 1 y 2, HCG sub Beta. <br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="acordeon">
                          <div class="trigger_acordeon" data-w-id="2b387c3c-a003-77f8-efb0-866238f53969">
                            <h4 class="h4_admin centros">
                              Parasitología <br>
                            </h4>
                            <div class="icon_box admin">
                              <img alt="" class="arrow_down"
                                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg">
                            </div>
                          </div>
                          <div class="content_acordeon" style="height: 0px;">
                            <div class="content_section">
                              <div>
                                Es la expedición de la biología que estudia el fenómeno del parasitismo. Por un lado,
                                estudia a los organismos vivos parásitos y la relación de ellos con sus hospedadores y
                                el medio ambiente. Las pruebas Generales en esta área son: Examen parasitológico, Examen
                                parasitológico seriado (X3), Thevenon, Reacción inflamatoria en heces Test de Graham.
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="section_tab _2-col" id="lista-de-precios_centros">
                  <div class="content_seccion_tab full">
                    <div class="info_section full">
                      <div class="info_section full">
                        <div class="content_section">
                          <div class="title_section">
                            <h2 class="h3_interna_title">
                              Lista de precios </h2>
                            <div class="line">
                            </div>
                          </div>
                        </div>
                        <div class="clase_para_wordpress ">
                          <h3 style="text-align: left;">Promociones</h3>
                          <h4 style="text-align: left;"><span style="color: #00b7bd;">Lista de precios</span></h4>
                          <ul style="text-align: left;">
                            <li><span style="font-weight: 400;">Particular - Corporativo: Para administrativos de la
                                corporación Wiener – Carrión</span></li>
                            <li><span style="font-weight: 400;">Alumnos de clínica Odontológica e Ingresantes</span>
                            </li>
                          </ul>
                          <a href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/analisis_clinicos_precios.pdf"
                            target="_blank" rel="noopener">Descargar lista de precios</a>

                          &nbsp;

                          &nbsp;
                          <h4 style="text-align: left;"><span style="color: #00b7bd;"><strong>Entrega de
                                resultados</strong></span></h4>
                          <ul>
                            <li style="text-align: left;"><span style="font-weight: 400;">Entrega vía correo
                                electrónico</span></li>
                            <li style="text-align: left;"><span style="font-weight: 400;">Entrega física</span></li>
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
                              Dr. Juan Carlos Benites Azabache </h4>
                            <div class="director_cargo">
                              Director del Centro de Análisis Clínicos </div>
                            <div class="director_name">
                              Doctor en Educación, Tecnólogo Médico especialista en Microbiología. </div>
                          </div>

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
                              Solicitud de análisis y orientación </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/contact_black-1.svg">
                                <div>
                                  Lunes a viernes de 9:00 a.m.a 8:00 p.m. </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/contact_black-2.svg">
                                <div>
                                  Sábados de 9:00 a.m. a 6:00 p.m. </div>

                              </div>

                            </div>
                          </div>

                          <div class="contact_box">
                            <h4 class="h4_verde">
                              Ubicación </h4>
                            <div class="item_user_contacto last">
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/ubicacion-3.png">
                                <div>
                                  Av. Arequipa 440 – Cercado de Lima </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/phone_black-2.svg">
                                <div>
                                  (01) 706-5555 Anexo 3111 </div>

                              </div>
                              <div class="item_contact">
                                <img alt="" class="icon_contact" loading="lazy"
                                  src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/arroba_black-1.svg">
                                <div>
                                  analisis.clinicos@uwiener.edu.pe </div>

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
        </div>
      </div>
    </div>

</main>
<?php get_footer(); ?>