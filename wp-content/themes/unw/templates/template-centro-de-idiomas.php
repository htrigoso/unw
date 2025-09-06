<?php
/**
 * Template Name: Centros de Idiomas
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
        <div class="overlay">
        </div>
        <img src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Banner_Idiomas.png"
          srcset="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Banner_Idiomas_500x104.png 500w, https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Banner_Idiomas.png 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center" id="presentacion_vf">
          <div class="container" id="presentacion">
            <!-- <h2 class="categoria_page serv_uni">
                    Servicios Universitarios
                </h2> -->
            <h1 class="h1_carreras">
              Centro de Idiomas </h1>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga">
              <a class="link miga" href="https://www.uwiener.edu.pe/">
                Inicio /
              </a>
              <a aria-current="page" class="link miga w--current" href="#">
                Centro de Idiomas
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 top_fixed">
                <div class="tabs_menu notab serv_uni secretaria">
                  <a class="link_item_tab scroll large extra anipo w-inline-block"
                    data-w-id="8511d6dd-6d1b-ebb8-5839-904f62d78701" href="#presentacion">
                    <img alt="" class="point_anima" data-w-id="82b7e9b9-8b30-79e5-5dab-78f644308853"
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      style="opacity: 1;">
                    <div>
                      Presentación
                    </div>
                  </a>
                  <a class="link_item_tab scroll large extra anipo w-inline-block"
                    data-w-id="8511d6dd-6d1b-ebb8-5839-904f62d78704" href="#idiomas">
                    <img alt="" class="point_anima" data-w-id="b64035f1-da44-51ce-0707-5a3ce010d610"
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      style="opacity: 0;">
                    <div>
                      Idiomas
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">
                        <div class="content_section pr">
                          <div class="clase_para_wordpress link_normal richtidiomas w-richtext">
                            <!-- ichtidiomas w-richtext -->

                            <div class="wp-block-group">
                              <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                <h2 class="wp-block-heading has-text-align-left">Presentación</h2>



                                <p>El Centro de Idiomas de la Universidad Norbert Wiener, con más de 18 años de
                                  experiencia, se complace en anunciar su alianza con la Arizona State University (ASU),
                                  líder en innovación en EE.UU. durante 9 años consecutivos.</p>



                                <p></p>



                                <br>
                                <p>Esta colaboración refuerza nuestra misión de proporcionar educación de calidad
                                  mediante tecnologías innovadoras para el desarrollo de competencias lingüísticas y
                                  comunicativas.</p>



                                <p></p>
                              </div>
                            </div>



                            <div class="wp-block-group">
                              <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                <p>Nuestro enfoque pedagógico se basa en material de alta calidad, alineado con el Marco
                                  Común Europeo de Referencia para las lenguas (MCER), y ofrecemos apoyo académico
                                  sólido para asegurar el éxito de nuestros estudiantes.</p>
                              </div>
                            </div>



                            <p></p>



                            <p></p>



                            <div class="wp-block-group">
                              <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                <p><br><br></p>
                                <p>Destacamos que nuestro programa es 100% VIRTUAL, brindando flexibilidad y
                                  accesibilidad.</p>
                                <p></p>



                                <div class="wp-block-group">
                                  <div
                                    class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                  </div>
                                </div>



                                <p class="has-text-align-left"></p>



                                <br><br>
                                <h4>INGLÉS &amp; ASU</h4>



                                <p>Con nuestro programa de Inglés – ASU, tendrás acceso a una experiencia educativa
                                  integral que se adapta a tus necesidades y preferencias de aprendizaje. Aquí algunas
                                  de las características destacadas:</p>



                                <p> </p>



                                <br><br>
                                <ul>
                                  <li>Desarrollo a través de Canvas: El programa de Ingles + ASU se desarrolla a través
                                    de la plataforma Canvas, garantizando una experiencia educativa sólida y bien
                                    estructurada.</li>
                                  <li>Acompañamiento Orientador Educativo: Disfruta de un acompañamiento personalizado a
                                    través de los orientadores educativos dedicados que te guiarán en tu proceso de
                                    aprendizaje.</li>
                                  <li>Master Clases: Participa en master clases que complementan tu aprendizaje,
                                    centradas en objetivos específicos para desarrollar habilidades del idioma de manera
                                    interactiva y enfocada en el estudiante.</li>
                                  <li>Master Clases: Participa en master clases que complementan tu aprendizaje,
                                    centradas en objetivos específicos para desarrollar habilidades del idioma de manera
                                    interactiva y enfocada en el estudiante.</li>
                                  <li>Cursos desde Nivel 0 hasta Avanzado: Nuestros 14 cursos abarcan desde niveles
                                    básicos hasta avanzados, brindándote un camino completo de aprendizaje y crecimiento
                                    en el idioma inglés.</li>
                                </ul>



                                <p>Te invitamos a explorar esta experiencia educativa completa y efectiva que combina la
                                  innovación tecnológica con la calidad académica respaldada por Arizona State
                                  University.</p>



                                <br><br>
                                <h4> ORIENTADOR EDUCATIVO </h4>



                                <p>Con nuestro orientador educativo estarás acompañado en todo momento, y te ayudará a:
                                </p>



                                <br><br>
                                <ul>
                                  <li>Recibir información oportuna y significativa sobre tu progreso.</li>

                                  <li>Utilizar la plataforma y sus herramientas de la manera más eficiente.</li>

                                  <li>Resolver tus dudas y consultas sobre el uso de la plataforma.</li>
                                </ul>



                                <p></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="content_section pr" id="idiomas">
                          <div class="acordeon">
                            <div class="trigger_acordeon">
                              <h4 class="h4_admin">
                                INVERSIÓN </h4>
                              <div class="icon_box">
                                <img alt="" class="arrow_down"
                                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/flecha-link.svg">
                              </div>
                            </div>
                            <div class="content_acordeon" style="height: 0px;">
                              <div class="content_section">
                                <div class="clase_para_wordpress richtidiomas w-richtext">
                                  <h2 style="text-align: left;"><strong><b>INGLÉS-ASU</b></strong></h2>
                                  <p><img fetchpriority="high" decoding="async" class="alignnone  wp-image-5667"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Imagen-1-1-1.jpg"
                                      alt="" width="583" height="165"></p>
                                  <p>*El Centro de Idiomas Wiener ofrece descuentos a los alumnos Wiener en el idioma
                                    inglés.</p>
                                  <p>*El pago de matrícula se realiza en cada nivel (básico, intermedio y avanzado)</p>
                                  <p>*El pago de cuota se realiza de manera mensual</p>
                                  <p></p>
                                  <h2><strong><b>PORTUGUÉS- ALTISSIA</b></strong></h2>
                                  <p><img decoding="async" class="alignnone  wp-image-5668"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Imagen-2-1-1.jpg"
                                      alt="" width="569" height="161"></p>
                                  <p>*El Centro de Idiomas Wiener ofrece descuentos a los alumnos Wiener en el idioma
                                    portugués.</p>
                                  <p>*El pago de matrícula se realiza en cada nivel (elemental, pre-intermedio,
                                    intermedio y avanzado)</p>
                                  <p>*El pago de cuota se realiza de manera mensual</p>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="acordeon">
                            <div class="trigger_acordeon">
                              <h4 class="h4_admin">
                                PORTUGUÉS </h4>
                              <div class="icon_box">
                                <img alt="" class="arrow_down"
                                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/flecha-link.svg">
                              </div>
                            </div>
                            <div class="content_acordeon" style="height: 0px;">
                              <div class="content_section">
                                <div class="clase_para_wordpress richtidiomas w-richtext">
                                  <p>Nuestro Programa de Portugués, realizado en la plataforma Altissia, ofrece un
                                    aprendizaje interactivo. Con clases de reforzamiento semanales, enfocamos en el
                                    desarrollo de habilidades orales y uso práctico del idioma.</p>
                                  <p>Altissia, proporciona un entorno flexible para mejorar constantemente tus
                                    habilidades desde cualquier lugar.</p>
                                  <h4 style="text-align: left;"><strong>Niveles</strong></h4>
                                  <p><img decoding="async" class="alignnone wp-image-5669"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Imagen-3-1-1.jpg"
                                      alt="" width="523" height="148"></p>
                                  <h4 style="text-align: left;"><strong>Modalidades</strong></h4>
                                  <p><img loading="lazy" decoding="async" class="alignnone wp-image-5670"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Imagen-4-1-1.jpg"
                                      alt="" width="605" height="171"></p>
                                  <h4 style="text-align: left;"><strong>Certificaciones</strong></h4>
                                  <p style="text-align: left;"><strong>‍</strong>Al culminar cada nivel, el alumno puede
                                    iniciar el trámite para la obtención del certificado.</p>
                                  <p style="text-align: left;">Los certificados muestran el número total de horas por
                                    cada nivel según el idioma:</p>
                                  <p style="text-align: left;">Dicho documento es válido para el proceso de optar al
                                    grado académico en nuestra universidad (pregrado y posgrado)</p>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="acordeon">
                            <div class="trigger_acordeon">
                              <h4 class="h4_admin">
                                INGLÉS – ASU </h4>
                              <div class="icon_box">
                                <img alt="" class="arrow_down"
                                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/flecha-link.svg">
                              </div>
                            </div>
                            <div class="content_acordeon" style="height: 0px;">
                              <div class="content_section">
                                <div class="clase_para_wordpress richtidiomas w-richtext">
                                  <p>El respaldo de<strong><b><br>ASU</b></strong><br>refuerza nuestra misión de
                                    proporcionar educación de calidad a través de tecnologías innovadoras, con el
                                    objetivo de desarrollar las competencias lingüísticas y comunicativas de nuestros
                                    estudiantes. Buscamos potenciar la interculturalidad de nuestros alumnos en un mundo
                                    cada vez más globalizado.</p>
                                  <p>Nuestro enfoque pedagógico se basa en ofrecer material de alta calidad, alineado
                                    con el <strong><b>Marco Común Europeo de Referencia para las lenguas (MCER),
                                      </b></strong>que garantiza un proceso de aprendizaje efectivo y significativo.</p>
                                  <h4 style="text-align: left;"><strong>Niveles</strong></h4>
                                  <h4 style="text-align: left;"><img loading="lazy" decoding="async"
                                      class="alignnone  wp-image-5671"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Imagen-5-1-1.jpg"
                                      alt="" width="576" height="163"></h4>
                                  <h4 style="text-align: left;"><strong>Modalidades</strong></h4>
                                  <p><img loading="lazy" decoding="async" class="alignnone  wp-image-5672"
                                      src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Imagen-6-1.jpg" alt=""
                                      width="573" height="162"></p>
                                  <h4 style="text-align: left;"><strong>Certificación</strong></h4>
                                  <p style="text-align: left;">Al culminar cada nivel, el alumno puede iniciar el
                                    trámite para la obtención del certificado. Los certificados muestran el número total
                                    de horas por cada nivel según el idioma:</p>
                                  <p style="text-align: left;">Dicho documento es válido para el proceso de optar al
                                    grado académico en nuestra universidad (pregrado y posgrado)</p>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="contact_box servicioswiener">
                      <h4 class="h4_verde">
                        <strong>
                          Horario de atención </strong>
                        <br>
                      </h4>
                      <div class="item_user_contacto  ">
                        <div class="text-maxwidth _16">
                          De lunes a viernes de 9am a 6pm y sábados de 9am a 12pm. </div>
                      </div>
                      <h4 class="h4_verde">
                        <strong>
                          Sé parte del Centro de Idiomas de la UWiener </strong>
                        <br>
                      </h4>
                      <div class="item_user_contacto informes ">
                        <div class="text-maxwidth _16">
                          947861729 / 924958672<br>ventasidiomas@uwiener.edu.pe </div>
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
<?php get_footer(); ?>