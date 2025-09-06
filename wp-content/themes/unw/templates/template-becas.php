<?php
/**
 * Template Name: Becas
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
    <div class="info_page">
      <div class="cover_img_page center">
        <div class="overlay"></div>
        <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/1920x400_jefatura-de-becas.jpg"
          srcset="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/500x250_jefatura-de-becas.jpg 500w, https://www.uwiener.edu.pe/wp-content/uploads/2025/07/1920x400_jefatura-de-becas.jpg 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div id="presentacion" class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Jefatura de Becas</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
                href="https://www.uwiener.edu.pe/servicios-universitarios/" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Jefatura de
                Becas</a></div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 top_fixed">
                <div class="tabs_menu notab serv_uni secretaria">


                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - INICIO -->
                  <!-- <a href="#serviciosu-becas-internas" data-w-id="serviciosu-becas-internas-webflow-enlace" class="link_item_tab scroll large extra anipo w-inline-block"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg" data-w-id="serviciosu-becas-internas-webflow-imagen" style="opacity:0" alt="" class="point_anima" />
                      <div>Programa de Becas Internas</div>
                    </a>

					<a href="#serviciosu-becas-externas" data-w-id="serviciosu-becas-externas-webflow-enlace" class="link_item_tab scroll large extra anipo w-inline-block"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg" data-w-id="serviciosu-becas-externas-webflow-imagen" style="opacity:0" alt="" class="point_anima" />
                      <div>Programa de Financiamiento Externo</div>
                    </a>

					<a href="#serviciosu-preguntas-frecuentes" data-w-id="serviciosu-preguntas-frecuentes-webflow-enlace" class="link_item_tab scroll large extra anipo w-inline-block"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg" data-w-id="serviciosu-preguntas-frecuentes-webflow-imagen" style="opacity:0" alt="" class="point_anima" />
                      <div>Preguntas Frecuentes</div>
                    </a>

					<a href="#serviciosu-contacto" data-w-id="serviciosu-contacto-frecuentes-webflow-enlace" class="link_item_tab scroll large extra anipo w-inline-block"><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg" data-w-id="serviciosu-contacto-frecuentes-webflow-imagen" style="opacity:0" alt="" class="point_anima" />
                      <div>Contáctanos</div>
                    </a> -->
                  <!-- <div class="tabs-becas manual"> -->
                  <a href="#presentacion" class="link_item_tab scroll large extra anipo w-inline-block active">
                    <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      class="point_anima" alt="Rombo activo">
                    <div>Presentación</div>
                  </a>

                  <a href="#serviciosu-becas-internas"
                    class="link_item_tab scroll large extra anipo w-inline-block inactive">
                    <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      class="point_anima" alt="Rombo inactivo">
                    <div>Programa de Becas Internas</div>
                  </a>

                  <a href="#serviciosu-becas-externas"
                    class="link_item_tab scroll large extra anipo w-inline-block inactive">
                    <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      class="point_anima" alt="Rombo inactivo">
                    <div>Programa de Financiamiento Externo</div>
                  </a>

                  <a href="#serviciosu-preguntas-frecuentes"
                    class="link_item_tab scroll large extra anipo w-inline-block inactive">
                    <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      class="point_anima" alt="Rombo inactivo">
                    <div>Preguntas Frecuentes</div>
                  </a>

                  <a href="#serviciosu-contacto" class="link_item_tab scroll large extra anipo w-inline-block inactive">
                    <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      class="point_anima" alt="Rombo inactivo">
                    <div>Contáctanos</div>
                  </a>
                  <!-- </div> -->
                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - FIN -->


                  <a href="#" class="link_item_tab hide w-inline-block">
                    <div>Prewiener</div>
                  </a>
                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">

                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->
                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->


                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                        <div class="content_section">
                          <div id="presentacion" class="contenido-becas">
                            <h2>Presentación</h2>
                            <p>La Universidad Norbert Wiener, a través de la Jefatura de Becas de la Gerencia de
                              Administración y Finanzas, impulsa el Programa de Becas con el objetivo de
                              <strong>reconocer, incentivar y desarrollar el talento</strong> de sus estudiantes. Este
                              programa facilita el acceso y continuidad de los estudios superiores, especialmente para
                              aquellos que, a pesar de contar con recursos económicos limitados, mantienen un alto
                              rendimiento académico. Las becas constituyen una <strong>ayuda financiera y un
                                reconocimiento al mérito</strong>, ofreciendo una oportunidad concreta de desarrollo
                              personal, académico y profesional.
                            </p>
                            <p>Desde la Jefatura de Becas ponemos a disposición de nuestros alumnos dos tipos de
                              programas de ayuda económica:</p>
                            <ul>
                              <li>Programa de Becas Internas.</li>
                              <li>Programa de Financiamiento Externo.</li>
                            </ul>
                            <p><br></p>
                          </div>
                          <div id="serviciosu-becas-internas" class="title_section">
                            <h3 class="h3_interna_title">Programa de Becas Internas</h3>
                            <div class="line"></div>
                          </div>
                          <div class="contenido-becas">
                            <p>La Jefatura de Becas realiza dos convocatorias al año (uno por cada periodo académico),
                              cuyas fechas son publicadas tanto en el Cronograma Académico de la UNW como en Wienernet.
                              El alumno podrá postular solo dentro de las fechas indicadas en cada convocatoria.</p>
                            <p>Para conocer detalles sobre los requisitos, deberá leer el reglamento de becas vigente de
                              la Universidad:</p>
                            <ul>
                              <li><a
                                  href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Resolucion-PE-029-2025-RPE-UPNW-2-2.pdf?_gl=1*14gaymt*_gcl_au*MTI5MjA3NDY1OS4xNzUxOTA3NDYx"
                                  target="_blank" rel="noopener">Reglamento de Becas.</a></li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>1. Becas de Excelencia Académica:</strong></p>
                            <ul>
                              <li>Beca “Alcibíades Horna Figueroa”.</li>
                              <li>Beca Honor al Mérito.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>2. Becas de Reconocimiento Institucional:</strong></p>
                            <ul>
                              <li>Beca de Reconocimiento a Deportistas de Alta Competencia.</li>
                              <li>Beca Total Especial de Reconocimiento a Deportistas de Alta<br>
                                Competencia.</li>
                              <li>Beca de Reconocimiento a Deportistas Wiener.</li>
                              <li>Beca de Reconocimiento Artístico.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>3. Beca por Situación Socioeconómica.</strong></p>
                            <p><strong>4. Beca “Ley N° 23585”.</strong></p>
                            <p><strong>5. Beca Responsabilidad Social.</strong></p>
                            <p><strong>6. Beca Inclusión.</strong></p>
                            <p><strong>7. Beca Perú.</strong></p>
                            <p>&nbsp;</p>
                          </div>
                          <div class="wrapper_collection mt auto w-dyn-list">
                            <!-- <h3 class="titulo_categoria_bienestar">Becas Externas</h3> -->
                            <!-- <div id="serviciosu-becas-externas" class="title_section">
								<h3 class="h3_interna_title">Becas Externas</h3>
                                <div class="line"></div>
                            </div> -->

                            <div id="serviciosu-becas-externas" class="title_section">
                              <!-- <h3 class="h3_interna_title">Becas Externas</h3> -->
                              <h3 class="h3_interna_title">Programa de Financiamiento Externo</h3>
                              <div class="line"></div>
                            </div>
                            <div class="contenido-becas">
                              <p>La Universidad Wiener, en su compromiso con el acceso inclusivo a la educación
                                superior, ha establecido alianzas estratégicas con diversas instituciones públicas y
                                privadas que ofrecen oportunidades educativas a través de&nbsp;<b>becas y créditos
                                  educativos.</b></p>
                            </div>

                            <div id="serviciosu-categoria-becas-externas" role="list"
                              class="collection_list gilla _3-col w-dyn-items">
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Becas y Créditos Pronabec"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/becas-y-creditos-pronabec/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Becas Externas</div> -->
                                  <h4 class="h4_light">Becas y Créditos Pronabec</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Becas Fondo Empleo"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/becas-fondo-empleo/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Becas Externas</div> -->
                                  <h4 class="h4_light">Becas Fondo Empleo</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Crédito Escalo"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/credito-escalo/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Becas Externas</div> -->
                                  <h4 class="h4_light">Crédito Escalo</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Fondo Perpetuo para la Educación – ASPERSUD"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/fondo-perpetuo-para-la-educacion-aspersud/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Becas Externas</div> -->
                                  <h4 class="h4_light">Fondo Perpetuo para la Educación – ASPERSUD</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Fundación Hipólito Unanue – FIHU"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/fundacion-hipolito-unanue-fihu/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Becas Externas</div> -->
                                  <h4 class="h4_light">Fundación Hipólito Unanue – FIHU</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                            </div>
                          </div>

                          <br><br>
                          <div id="serviciosu-preguntas-frecuentes" class="title_section">
                            <h3 class="h3_interna_title">Preguntas Frecuentes</h3>
                            <div class="line"></div>
                          </div>
                          <div class="contenido-becas">
                            <p><strong>1. ¿Qué cobertura tienen las becas internas?</strong></p>
                            <p>Las coberturas están condicionadas en base a la modalidad de beca elegida y a los
                              resultados de la evaluación del Comité de Becas, para mayor información revisar los
                              detalles de cada tipo de beca en el <a
                                href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Resolucion-PE-029-2025-RPE-UPNW-2-2.pdf"
                                target="_blank" rel="noopener"><b>Reglamento de Becas.</b></a></p>
                            <p>&nbsp;</p>
                            <p><strong>2. ¿Cuáles son los requisitos generales para postular al Programa de Becas
                                Internas?</strong></p>
                            <p>Los requisitos generales son los siguientes:</p>
                            <ul>
                              <li>Ser alumno de Pregrado (No aplican para ciclos de internado o prácticas
                                preprofesionales, a excepción de las becas normadas por ley).</li>
                            </ul>
                            <ul>
                              <li>Haber realizado el pago por mi derecho de postulación al programa de becas (costo
                                S/65.00).</li>
                            </ul>
                            <ul>
                              <li>No contar con deuda antes de su postulación al Programa de Becas vigente.</li>
                            </ul>
                            <ul>
                              <li>No haber desaprobado ningún curso el semestre académico anterior a la postulación, a
                                excepción de las Becas normadas por ley.</li>
                              <li>Cumplir con los requisitos específicos que exige cada modalidad de beca (de acuerdo
                                con el Reglamento de Becas).</li>
                            </ul>
                            <p>Recuerda que adicionalmente debes cumplir el requisito específico que tiene el tipo de
                              beca a la que deseas postular.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>3. ¿Cómo genero mi derecho de postulación al programa de Becas”? </strong></p>
                            <ul>
                              <li>Ingresa a través del WienerNet: En “Menú”, seguir la ruta: Trámites &gt; Generación de
                                pago de trámites &gt; Programa de Becas</li>
                              <li>Realiza el pago del trámite del Programa de Becas en los aplicativos y agentes de
                                bancos BCP, Scotiabank o billetera electrónica Yape (Opción trámites).</li>
                              <li>Ingresa a través del WienerNet: En “Menú”, seguir la ruta: Servicios Adicionales &gt;
                                Programa de Becas &gt; Seleccionar tipo de beca y leer y aceptar declaración jurada.
                              </li>
                            </ul>
                            <p><strong>&nbsp;Posterior al pago realizado:&nbsp;&nbsp;</strong></p>
                            <ul>
                              <li>Para las becas que deben pasar evaluación socioeconómica:&nbsp;&nbsp;Deberán ingresar
                                a la plataforma SABE; le llegará al estudiante una notificación al correo institucional,
                                detallando su usuario y contraseña&nbsp;para ingresar a la plataforma, a través de la
                                cual se llevará a cabo su evaluación socioeconómica.</li>
                            </ul>
                            <ul>
                              <li>Para las becas que no pasan por una evaluación socioeconómica: Sólo deberá subir los
                                documentos requeridos en el WienerNet de acuerdo con el tipo de beca.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>4. ¿Cuántos días tengo para efectuar mi proceso de postulación al programa de
                                becas?</strong></p>
                            <p>El estudiante tendrá un plazo de 4 días calendario para registrar la información
                              solicitada para su evaluación, y adjuntar los documentos exigibles como sustento, según su
                              modalidad de beca, en la plataforma SABE.</p>
                            <p>En el caso tu modalidad de beca no pase por evaluación socioeconómica, tendrás hasta el
                              ultimo día de postulación para subir tus documentos en Wienernet.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>5. ¿Qué es la plataforma SABE?</strong></p>
                            <p>SABE (Sistema de Administración de Beneficios Educativos) es una plataforma en línea
                              administrada por la ONG ESCALO, especialista en brindar oportunidades académicas, cuenta
                              con un equipo especializado en realizar evaluaciones socioeconómicas que ayudará a hacer
                              más ágil el proceso de postulación al Programa de Becas.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>6. ¿Cuánto tiempo dura el beneficio del Programa de Becas en caso de
                                obtenerla?</strong></p>
                            <p>La beca recibida sólo se aplica para el periodo académico de postulación; luego de ello
                              se tendrá que realizar todo el proceso nuevamente para la obtención de la Beca en ciclos
                              académicos futuros.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>7. En el caso que el postulante no haya podido entregar su expediente, ¿existe
                                alguna ampliación del proceso de recepción?</strong></p>
                            <p>No. Durante la etapa de postulación, el estudiante se compromete a presentar toda la
                              documentación solicitada en el plazo establecido. En caso de no completar su expediente
                              dentro del plazo establecido, el resultado se declarará como <em>Denegado </em>sin lugar a
                              reclamo.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>8. En caso de recibir una beca, ¿el estudiante asume alguna responsabilidad
                                adicional?</strong></p>
                            <p>A excepción de las becas reguladas por ley.&nbsp;Al recibir el beneficio de la beca, los
                              alumnos tienen el deber de cumplir con el Programa de Retribución de Horas del Programa de
                              Becas dentro de la Universidad, prestando servicios tutoriales, administrativos o
                              participando en eventos contemplados en el programa durante el semestre académico que goza
                              del beneficio (Título VII del Reglamento de Becas).</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>9. Si un estudiante becado por motivos personales no puede continuar con sus
                                estudios durante el semestre de postulación, ¿puede postergar el beneficio obtenido para
                                el siguiente ciclo?</strong></p>
                            <p>No. La beca es válida únicamente para el ciclo en que se realizó la postulación. La
                              postergación de estudios por cualquier índole conlleva la pérdida de la beca.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>10. ¿Si un estudiante postuló el año anterior y no fue beneficiado, puede volver
                                a presentarse?</strong></p>
                            <p>Efectivamente. Su postulación en años anteriores no invalida su postulación en una
                              siguiente oportunidad, siempre que cumpla con los requisitos de su modalidad de beca y
                              cumpla con presentar los documentos respectivos.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>11. ¿La Universidad Norbert Wiener cuenta con sistema de
                                recategorizaciones?</strong></p>
                            <p>La Universidad Norbert Wiener no tiene un sistema de recategorización, pues cuenta con el
                              Programa de Becas.</p>
                            <p>&nbsp;</p>
                            <p><strong>12. ¿De qué modo veo los resultados de mi postulación y cuándo es
                                aplicado?</strong></p>
                            <p>Los resultados de la evaluación serán comunicados al estudiante a través de su correo
                              electrónico institucional.</p>
                            <ul>
                              <li>En caso de las becas parciales, el estudiante Aprobado deberá abonar el concepto de
                                matrícula y primera cuota en su tarifa regular, en caso corresponda, a fin de concretar
                                su matrícula. La beca se reflejará en su cronograma de pagos a partir de la segunda
                                cuota.</li>
                              <li>En el caso de beca total, el estudiante Aprobado tendrá la opción de matricularse
                                directamente sin restricción de pagos.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>13. ¿Con quién podría conversar para aclarar algunas dudas adicionales?</strong>
                            </p>
                            <p style="font-weight: 400">Toda consulta adicional se puede realizar a través de nuestros
                              canales de atención:</p>
                            <p style="font-weight: 400"><strong>Programa de Becas Internas:</strong></p>
                            <ul>
                              <li style="font-weight: 400">Correo electrónico:&nbsp;<a
                                  href="mailto:becas@uwiener.edu.pe" target="_blank"
                                  rel="noopener">becas@uwiener.edu.pe</a></li>
                              <li style="font-weight: 400">Teléfono: 946 555 238</li>
                              <li style="font-weight: 400">WhatsApp:&nbsp;<a href="https://wa.me/51946555238"
                                  target="_blank" rel="noopener">+51946555238</a></li>
                            </ul>
                            <p>&nbsp;</p>
                            <p style="font-weight: 400"><strong>Programa de Financiamiento Externo:</strong></p>
                            <ul>
                              <li style="font-weight: 400">Correo electrónico:&nbsp;<a
                                  href="mailto:financiamiento.externo@uwiener.edu.pe" target="_blank"
                                  rel="noopener">financiamiento.externo@uwiener.edu.pe</a></li>
                              <li style="font-weight: 400">Teléfono: 924 727 011</li>
                              <li style="font-weight: 400">WhatsApp:&nbsp;<a href="https://wa.me/51924727011"
                                  target="_blank" rel="noopener">+51924727011</a></li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>El horario de atención es de lunes a viernes de 9:00 a.m. a 6.00 p.m.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>14. ¿Puedo postular si estoy cursando mi segunda carrera profesional?</strong>
                            </p>
                            <p>Puede postular a las becas a excepción de: Beca por Honor al mérito y Beca ¨Alcibíades
                              Horna¨</p>
                            <p>&nbsp;</p>
                            <p><strong>15. ¿Puedo presentar mis documentos de postulación por otro medio que no sea
                                Wienernet o SABE?&nbsp;</strong></p>
                            <p>No, no se recibirán documentos fuera de las plataformas Wienernet o Sabe, es decir: no de
                              manera física ni otros medios de comunicación.</p>
                            <p>&nbsp;</p>
                            <p><strong>16. ¿Puedo postular si no he cumplido con mi Programa de Retribución Horas el
                                semestre pasado?</strong></p>
                            <p>No. De acuerdo con lo establecido en el Reglamento del Programa de Becas, el
                              incumplimiento del Programa de Horas de Retribución es motivo de exclusión para la
                              postulación al siguiente programa de becas, a excepción de las becas reguladas por Ley N°
                              23585 y N° 30470.</p>
                            <p>&nbsp;</p>
                            <p><strong>17. ¿Puedo completar mis horas de retribución el siguiente semestre?</strong></p>
                            <p>No, las horas de retribución se deben cumplir únicamente en el semestre académico en el
                              que se otorgó el beneficio.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>18. ¿Si no me aprueban la Beca, puedo recuperar el importe pagado por derecho al
                                trámite del “Programa de Becas”?</strong></p>
                            <p>No, no se realizarán devoluciones de pagos.</p>
                            <p>&nbsp;</p>
                            <p><strong>19. Si cuento con un beneficio desde mi ingreso ¿la beca se aplica sobre ese
                                importe?</strong></p>
                            <p>No. El porcentaje de beca se aplica sobre precio regular. No es acumulativo, asimismo si
                              ya cuentas con otro beneficio económico vigente, se aplica el beneficio mayor.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>20. ¿Si deseo postular a una beca, debo presentar mis papeles a una trabajadora
                                social?</strong></p>
                            <p>Sí, únicamente por la Plataforma SABE, en caso su postulación requiera de una Evaluación
                              socioeconómica. El área no recibe documentos de manera física o a correos personales. Los
                              documentos solo se consignarán a través de nuestras Plataforma Wienernet o SABE (Escalo)
                              esto con el fin de salvaguardar la integridad e imparcialidad de la evaluación.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>21. ¿Puedo postular a una beca en cualquier momento del año? </strong></p>
                            <p>No. Solo se despliegan 2 convocatorias al año. Los estudiantes deben estar atentos a sus
                              correos institucionales y al cronograma académico, para así conocer las fechas de las
                              convocatorias vigentes.</p>
                            <p><strong>&nbsp;</strong></p>
                            <p><strong>22. ¿Si cuento con una Beca de la Universidad, puedo postular a algún programa de
                                Financiamiento Externo? </strong></p>
                            <p>Sí, para más información puede contactar al área de Becas.</p>
                            <p>&nbsp;</p>
                            <p><strong>23. ¿Hasta cuándo puedo hacer el pago de derecho de postulación al programa de
                                Becas? </strong></p>
                            <p>Debe realizar el pago antes de que cierre la convocatoria, no se aceptarán pagos al día
                              siguiente por ningún motivo.</p>
                            <p>&nbsp;</p>
                            <p><strong>24. ¿Puedo modificar el tipo de Beca al que deseo postular?</strong></p>
                            <p>No. Una vez realizado el registro, no podrá cambiarlo. El postulante es el único
                              responsable de determinar a qué tipo de Beca postula.</p>
                            <p>&nbsp;</p>
                          </div>
                          <div id="serviciosu-contacto" class="title_section">
                            <h3 class="h3_interna_title">Contáctanos</h3>
                            <div class="line"></div>
                          </div>
                          <div class="contenido-becas">
                            <p style="font-weight: 400">Toda consulta adicional se puede realizar a través de nuestros
                              canales de atención:</p>
                            <p style="font-weight: 400"><strong>Programa de Becas Internas:</strong></p>
                            <ul>
                              <li style="font-weight: 400">Correo electrónico:&nbsp;<a
                                  href="mailto:becas@uwiener.edu.pe" target="_blank"
                                  rel="noopener">becas@uwiener.edu.pe</a></li>
                              <li style="font-weight: 400">Teléfono: 946 555 238</li>
                              <li style="font-weight: 400">WhatsApp:&nbsp;<a href="https://wa.me/51946555238"
                                  target="_blank" rel="noopener">+51946555238</a></li>
                            </ul>
                            <p>&nbsp;</p>
                            <p style="font-weight: 400"><strong>Programa de Financiamiento Externo:</strong></p>
                            <ul>
                              <li style="font-weight: 400">Correo electrónico:&nbsp;<a
                                  href="mailto:financiamiento.externo@uwiener.edu.pe" target="_blank"
                                  rel="noopener">financiamiento.externo@uwiener.edu.pe</a></li>
                              <li style="font-weight: 400">Teléfono: 924 727 011</li>
                              <li style="font-weight: 400">WhatsApp:&nbsp;<a href="https://wa.me/51924727011"
                                  target="_blank" rel="noopener">+51924727011</a></li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>El horario de atención es de lunes a viernes de 9:00 a.m. a 6.00 p.m.</p>
                          </div>
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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      const elementos = document.querySelectorAll(".clase_para_wordpress");
      const acordeonPregunta = document.querySelectorAll(".trigger_acordeon");

      elementos.forEach(function(elemento) {
        const enlaces = elemento.querySelectorAll("a");
        const imagenes = elemento.querySelectorAll("img");
        let contador = 1; // Inicializamos el contador para las imágenes

        enlaces.forEach(function(enlace) {
          const textoEnlace = enlace.textContent;
          enlace.setAttribute("title", textoEnlace);
        });

        imagenes.forEach(function(imagen) {
          const textoImagen = "Imagen de servicios universitarios " + contador;
          imagen.setAttribute("alt", textoImagen);
          contador++; // Incrementamos el contador para la siguiente imagen
        });
      });

      // Procesar acordeones
      acordeonPregunta.forEach(function(acordeon) {
        const h4_admin = acordeon.querySelector(".h4_admin");
        if (h4_admin) {
          const textoH4 = h4_admin.textContent;
          acordeon.setAttribute("title", textoH4);
        }
      });
    });
    </script>

    <!-- Rombo Dinámico en el Sidebar de Menú - Hernán Chira -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tabs = document.querySelectorAll('.link_item_tab');

      tabs.forEach(tab => {
        // Solo afecta tabs que ya tengan active o inactive desde el HTML
        if (tab.classList.contains('active') || tab.classList.contains('inactive')) {
          tab.addEventListener('click', function() {
            tabs.forEach(t => {
              if (t.classList.contains('active') || t.classList.contains('inactive')) {
                t.classList.remove('active');
                t.classList.add('inactive');
              }
            });
            this.classList.add('active');
            this.classList.remove('inactive');
          });
        }
      });
    });
    </script>
  </div>
</main>
<?php get_footer(); ?>