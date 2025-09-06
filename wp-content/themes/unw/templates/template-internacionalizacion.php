<?php
/**
 * Template Name: Internacionalizacion
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
      <div id="section-1" class="cover_img_page padding">
        <div id="cabecera_carreras" class="overlay inter"></div>
        <img src="https://www.uwiener.edu.pe/wp-content/uploads/2022/03/banner-internacionalización-2022.png"
          srcset="https://www.uwiener.edu.pe/wp-content/uploads/2022/03/banner-internacionalización500x104_2022.png 500w, https://www.uwiener.edu.pe/wp-content/uploads/2022/03/banner-internacionalización-2022.png 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center">
          <div class="container">
            <div id="sec-1" class="title_carreras padding">
              <h1 class="h1_carreras">Internacionalizacion<br></h1>
            </div>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container flex"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a href="#"
              aria-current="page" class="link miga w--current">Internacionalización</a></div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 inter">
                <div class="tabs_menu notab serv_uni inter">
                  <a href="#sec-1" data-w-id="ca4b06c9-bf07-10ad-b570-05b753135480"
                    class="link_item_tab nocurrent inter anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="a2a2df0b-d4f8-6d6e-a81a-2fede10b929b" style="opacity: 1;" alt="" class="point_anima">
                    <div>Presentación</div>
                  </a>
                  <a href="#sec-2" data-w-id="ca4b06c9-bf07-10ad-b570-05b753135483"
                    class="link_item_tab nocurrent inter anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="ff95ca6e-f39d-9d53-1322-235ec178b9e1" style="opacity: 0;" alt="" class="point_anima">
                    <div>¿Qué tipo de movilidad puedo hacer?</div>
                  </a>


                  <a href="#sec-4" data-w-id="ca4b06c9-bf07-10ad-b570-05b753135486"
                    class="link_item_tab nocurrent inter anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="60950086-41ab-0774-5ef2-48380dd7d625" style="opacity: 0;" alt="" class="point_anima">
                    <div>Requisitos para postular</div>
                  </a>

                  <a href="#sec-5" data-w-id="ca4b06c9-bf07-10ad-b570-05b753135486"
                    class="link_item_tab nocurrent inter anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="60950086-41ab-0774-5ef2-48380dd7d625" style="opacity: 0;" alt="" class="point_anima">
                    <div>Pasos de Aplicación </div>
                  </a>

                  <a href="#sec-6" data-w-id="fa2fef97-2446-4fd6-de66-283f6f9509a3"
                    class="link_item_tab nocurrent inter anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="ab328130-3f16-e07d-2c61-afc55090ecd6" style="opacity: 0;" alt="" class="point_anima">
                    <div>Ver Convenios Internacionales</div>
                  </a>
                </div>
                <a href="#" class="btn icon center hide hide-all w-inline-block"><img
                    src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_download.svg" alt=""
                    class="btn_descargar">
                  <div>Convenios de <br>la Universidad</div>
                </a>
              </div>
              <div class="col-1 full nopadding">
                <div class="tab_info_carreras">
                  <div class="section_container internas pb-40">
                    <div class="content_section">
                      <div class="clase_para_wordpress">

                        <h2 class="wp-block-heading">Nosotros</h2>



                        <p>[linea]</p>



                        <p>La Jefatura de Internacionalización de la Universidad Norbert Wiener es una pieza fundamental
                          en el relacionamiento global y el desarrollo académico. Establece relaciones inter
                          institucionales con diferentes universidades, asociaciones y redes internacionales alrededor
                          del mundo, a fin de ofrecer una experiencia educativa global a la comunidad universitaria.</p>
                      </div>
                    </div>
                    <div class="content_section mt">
                      <div class="w-layout-grid grid-2 inter">
                        <div class="item_inter">
                          <div class="title_itemgrilla"><img
                              src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4094d83c88cbc4a4e45_icon_list.svg"
                              alt="" class="icon paddingright">
                            <h3 class="h3nomargen">Ofrecemos</h3>
                          </div>
                          <div class="clase_para_wordpress">
                            <ul>
                              <li><span style="background-color: transparent; color: rgb(0, 0, 0);">Asesoría y
                                  acompañamiento en el proceso de movilidad internacional estudiante y docente. </span>
                              </li>
                              <li><span style="background-color: transparent; color: rgb(0, 0, 0);">Información sobre
                                  ofertas de becas (de estudio) para oportunidades en el exterior. </span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item_inter">
                          <div class="title_itemgrilla"><img
                              src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d409968f620bb864ef51_icon_world.svg"
                              alt="" class="icon paddingright">
                            <h3 class="h3nomargen">¿Qué es movilidad estudiantil?</h3>
                          </div>
                          <div class="clase_para_wordpress">
                            <p>Es la opción que se otorga al estudiante de complementar su carrera profesional con una
                              permanencia (breve o prolongada) en una institución extranjera con la que se mantiene
                              convenio.</p>
                            <p>‍</p>
                            <p>Se puede postular a partir del IV ciclo, para viajar y participar en el siguiente. Un
                              alumno de IV ciclo o anterior no puede participar en el intercambio.</p>
                          </div>
                        </div>
                        <div class="item_inter">
                          <div class="title_itemgrilla"><img src="" alt="" class="icon paddingright">
                            <h3 class="h3nomargen">Misión</h3>
                          </div>
                          <div class="clase_para_wordpress">
                            <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Enfocamos nuestros
                                esfuerzos en promover la internacionalización de la comunidad universitaria,
                                otorgandoles herramientas necesarias para trabajar en contextos competitivos y cada vez
                                más internacionales. </span></p>
                          </div>
                        </div>
                        <div class="item_inter">
                          <div class="title_itemgrilla"><img src="" alt="" class="icon paddingright">
                            <h3 class="h3nomargen">Visión</h3>
                          </div>
                          <div class="clase_para_wordpress">
                            <p><span style="background-color: transparent; color: rgb(0, 0, 0);">Ampliar los horizontes
                                internacionales de la comunidad universitaria, viviendo una experiencia educativa
                                global.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="sec-2" class="section_container internas">
                    <div class="title_section margintop">
                      <h3 class="h3_interna_title">¿Qué tipo de movilidad puedo hacer?</h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3">
                        <div class="item_inter outline padding20">
                          <div class="title_itemgrilla flexvertical left"><img
                              src="https://www.uwiener.edu.pe/wp-content/uploads/2020/11/ss_icon_inter.svg" alt=""
                              class="icon paddingright marginbottom">
                            <h3 class="h3nomargen">Intercambio Internacional</h3>
                          </div>
                          <ul role="list" class="list margintop">
                            <li class="item_list">
                              <div>Duración de 1 o 2 ciclos</div>
                            </li>
                            <li class="item_list">
                              <div>Experiencia individual</div>
                            </li>
                            <li class="item_list">
                              <div>Se convalidan los cursos llevados en el extranjero</div>
                            </li>
                            <li class="item_list">
                              <div>Postulaciones a partir del lV ciclo</div>
                            </li>
                          </ul>
                        </div>
                        <div class="item_inter outline padding20">
                          <div class="title_itemgrilla flexvertical left"><img
                              src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d40a92e50c25198dd796_icon_ma.svg"
                              alt="" class="icon paddingright marginbottom">
                            <h3 class="h3nomargen">Misión Académica Internacional</h3>
                          </div>
                          <ul role="list" class="list margintop">
                            <li class="item_list">
                              <div>Duración de 1 a 2 semanas</div>
                            </li>
                            <li class="item_list">
                              <div>Experiencia en grupo, de 12 a 15 o más participantes</div>
                            </li>
                            <li class="item_list">
                              <div>Se puede llevar un curso corto en la universidad de destino</div>
                            </li>
                            <li class="item_list">
                              <div>Vincular a los alumnos con experiencias académicas en diferentes universidades del
                                mundo</div>
                            </li>
                            <li class="item_list">
                              <div>Puede incluir visitas a empresas y experiencias culturales o sociales</div>
                            </li>
                            <li class="item_list">
                              <div>Postulaciones a partir del V ciclo</div>
                            </li>
                          </ul>
                        </div>
                        <div class="item_inter outline padding20">
                          <div class="title_itemgrilla flexvertical left"><img
                              src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4094d83c8298a4a4e46_icon_ps.svg"
                              alt="" class="icon paddingright marginbottom">
                            <h3 class="h3nomargen">Pasantías o Prácticas Internacionales</h3>
                          </div>
                          <ul role="list" class="list margintop">
                            <li class="item_list">
                              <div>Duración desde días hasta meses</div>
                            </li>
                            <li class="item_list">
                              <div>Experiencia en grupo o individual</div>
                            </li>
                            <li class="item_list">
                              <div>Pueden ser considerar primeras experiencias laborales </div>
                            </li>
                            <li class="item_list">
                              <div>Se puede postular a partir del V ciclo</div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div id="sec-4" class="section_container internas">
                    <div class="title_section">
                      <h3 class="h3_interna_title">Requisitos para postular</h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3 center">
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4092dcda3b2fc6422f4_paso1.svg"
                            alt="" class="icon paddingright">
                          <p>Ser alumno regular de la UPNW en el período en el que se solicita la postulación y durante
                            el intercambio.</p>
                          <div class="number_list">
                            <div>01</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4092dcda30b286422f3_paso2.svg"
                            alt="" class="icon paddingright">
                          <p>Haber culminado el IV ciclo. </p>
                          <div class="number_list">
                            <div>02</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4090a69c1419c17033d_paso3.svg"
                            alt="" class="icon paddingright">
                          <p>Tener un promedio aprobado (mínimo 14) al momento de la postulación</p>
                          <div class="number_list">
                            <div>03</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d40956987d85251c0241_paso4.svg"
                            alt="" class="icon paddingright">
                          <p>No tener una asignatura desaprobada por tercera vez al momento de la postulación</p>
                          <div class="number_list">
                            <div>04</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d4097164664ad3aa442a_paso5.svg"
                            alt="" class="icon paddingright">
                          <p>No tener sanción disciplinaria, según lo dispuesto en el Reglamento de Conducta</p>
                          <div class="number_list">
                            <div>05</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5.svg" alt=""
                            class="icon paddingright">
                          <p>Acreditar el nivel del idioma requerido por la universidad de destino (si aplica)</p>
                          <div class="number_list">
                            <div>06</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d40a12bfc67c2283f070_paso7.svg"
                            alt="" class="icon paddingright">
                          <p>No mantener deudas pendientes con la UPNW al momento de la postulación</p>
                          <div class="number_list">
                            <div>07</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d40a4d83c82cae4a4e47_paso8.svg"
                            alt="" class="icon paddingright">
                          <p>El alumno es responsable del trámite de visa y pasaporte.</p>
                          <div class="number_list">
                            <div>08</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e42d40a56987d392e1c0243_paso9.svg"
                            alt="" class="icon paddingright">
                          <p>El alumno es responsable de financiar la movilidad, pasajes aéreos, seguro internacional,
                            alojamiento y estadía, útiles, etc.</p>
                          <div class="number_list">
                            <div>09</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="sec-5" class="section_container internas">
                    <div class="title_section">
                      <h3 class="h3_interna_title">Pasos de Aplicación </h3>
                      <div class="line"></div>
                    </div>
                    <div class="content_section">
                      <div class="w-layout-grid grid-3 center">
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>Elige la universidad y la modalidad de estudio (presencial, mixto o virtual)</p>
                          <div class="number_list">
                            <div>01</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>Escoge los cursos a estudiar en base a la oferta académica de la universidad de destino
                          </p>
                          <div class="number_list">
                            <div>02</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>Deberás completar los documentos de la UPNW y aplicar según la modalidad que la universidad
                            de destino requiera</p>
                          <div class="number_list">
                            <div>03</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>Completar y firmar el Acuerdo Académico con la Dirección de tu carrera</p>
                          <div class="number_list">
                            <div>04</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>Finalmente, completar el proceso de aplicación según los documentos que la universidad de
                            destino requiera</p>
                          <div class="number_list">
                            <div>05</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img src="" alt=""
                            class="icon paddingright">
                          <p>¡Inicia tus cursos en el extranjero!</p>
                          <div class="number_list">
                            <div>06</div>
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
        <div id="sec-4" class="section_container news">
          <div class="titular_section"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/trama_nuew2.svg" alt=""
              class="img_trama_corta">
            <h2 class="h1_titular_seccion large" style="opacity: 0;">Convenios Internacionales</h2><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/trama_nuew2.svg" alt=""
              class="img_trama_corta">
          </div>
          <div class="section_novedades"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/avion-left.svg" alt=""
              class="aviones_left" style="opacity: 0;"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/avion_right.svg" alt=""
              class="aviones_left right" style="opacity: 0;">
            <div class="box_maps"><img
                src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/fondo_mapa.png"
                srcset="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/fondo_mapa-p-800.png 800w, https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/fondo_mapa-p-1080.png 1080w, https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/fondo_mapa.png 1500w"
                sizes="(max-width: 479px) 96vw, 95vw" data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b5" alt=""
                class="img_mapa" style="opacity: 0;">
              <div class="item_place argentina">
                <div class="modal_convenios argentina">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2021/02/6009f576d9a6b61d0cd302c5_bander_argentina.svg"
                          alt="" class="img_bandera">
                        <h2>Argentina</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/3.webp" alt="">
                          <div class="name_uni">Universidad de Buenos Aires</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/1.webp" alt="">
                          <div class="name_uni">Universidad Nacional Tres de Febrero</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/2.webp" alt="">
                          <div class="name_uni">Instituto de Efectividad Clínica y Sanitaria</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Argentina" class="img_place argentina tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2021/02/6009f238f21ffcaa82afbf18_arentina_gps.svg"
                    alt="" class="place_img">
                </div>
              </div>
              <div class="item_place brazil">
                <div class="modal_convenios brazil">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-10.png" alt=""
                          class="img_bandera">
                        <h2>Brasil</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/4.webp" alt="">
                          <div class="name_uni">Universidad de Sao Paulo</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/5.webp" alt="">
                          <div class="name_uni">Centro Universitario del Norte de Sao Paulo</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f4540ecd98f10141df67dad_logoFADISMA.png"
                            alt="">
                          <div class="name_uni">Facultad de Derecho de Santa María FADISMA</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Brasil" class="img_place brazil tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/brasil.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place chile">
                <div class="modal_convenios chile">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-11.png" alt=""
                          class="img_bandera">
                        <h2>Chile</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/9.webp" alt="">
                          <div class="name_uni">Universidad Andres Bello</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/7.webp" alt="">
                          <div class="name_uni">Universidad Autónoma de Chile</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/6.webp" alt="">
                          <div class="name_uni">Universidad del Desarrollo</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e34563ce7d28f73660d72aa_uni_bo-1.png"
                            alt="">
                          <div class="name_uni">Universidad Bernardo O’Higgins</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/8.webp" alt="">
                          <div class="name_uni">Universidad Central de Chile</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Chile" class="img_place chile tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/chile.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place colombia">
                <div class="modal_convenios colombia">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-8.png" alt=""
                          class="img_bandera">
                        <h2>Colombia</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/32.webp" alt="">
                          <div class="name_uni">Universidad Autónoma de Colombia</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/31.webp" alt="">
                          <div class="name_uni">Corporación Universitaria Iberoamericana</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/30.webp" alt="">
                          <div class="name_uni">Fundación Universitaria Autónoma de las Américas</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/29.webp" alt="">
                          <div class="name_uni">Universidad Santiago del Cali</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/26.webp" alt="">
                          <div class="name_uni">Universidad Manuela Beltrán</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/25.webp" alt="">
                          <div class="name_uni">Universidad de Cundinamarca</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/24.webp" alt="">
                          <div class="name_uni">Universidad Pontificie Bolivariana</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/23.webp" alt="">
                          <div class="name_uni">Universidad ECCI</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/22.webp" alt="">
                          <div class="name_uni">Universidad del Sinú</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/21.webp" alt="">
                          <div class="name_uni">Universidad Mariana</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/20.webp" alt="">
                          <div class="name_uni">Universidad de Cooperativa de Colombia</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/17.webp" alt="">
                          <div class="name_uni">Fundación Universitaria del Área Andina</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/Universidad-de-La-Salle.png"
                            alt="">
                          <div class="name_uni">Universidad de La Salle</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/16.webp" alt="">
                          <div class="name_uni">Universidad El Bosque</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/13.webp" alt="">
                          <div class="name_uni">Universidad del Norte</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/27.webp" alt="">
                          <div class="name_uni">Universidad del Cauca</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/19.webp" alt="">
                          <div class="name_uni">Universidad Libre</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/28.webp" alt="">
                          <div class="name_uni">Universidad del Atlántico</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/18.webp" alt="">
                          <div class="name_uni">Universidad de Santander</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/15.webp" alt="">
                          <div class="name_uni">Universidad de Ciencias Aplicadas y Ambientales</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2021/12/Universidad_San_Buenaventura_Colombia.png"
                            alt="">
                          <div class="name_uni">Universidad San Buenaventura</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/14.webp" alt="">
                          <div class="name_uni">Universidad CES</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Colombia" class="img_place colombia tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/colombia.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place costa-rica">
                <div class="modal_convenios costa-rica">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/6294ef7d9eefb251330871f6_imcosta.png"
                          alt="" class="img_bandera">
                        <h2>Costa Rica</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/10.webp" alt="">
                          <div class="name_uni">Universidad de Costa Rica</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/Universidad-Santa-Paula.png"
                            alt="">
                          <div class="name_uni">Universidad Santa Paula</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Costa Rica" class="img_place costa-rica tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/Costa_Rica-1.svg" alt=""
                    class="place_img">
                </div>
              </div>
              <div class="item_place ecuador">
                <div class="modal_convenios ecuador">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-1.png" alt=""
                          class="img_bandera">
                        <h2>Ecuador</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5e345c53658aee15c9140e27_univ-santiago-de-guayaquil-1.png"
                            alt="">
                          <div class="name_uni">Universidad Católica de Santiago de Guayaquil</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Ecuador" class="img_place ecuador tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ecuador.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place egipto">
                <div class="modal_convenios egipto">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Egipto.png" alt=""
                          class="img_bandera">
                        <h2>Egipto</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/11.webp" alt="">
                          <div class="name_uni">Galala University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Egipto" class="img_place egipto tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Egipto.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place el-salvador">
                <div class="modal_convenios el-salvador">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-El-Salvador.png" alt=""
                          class="img_bandera">
                        <h2>El Salvador</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/60.webp" alt="">
                          <div class="name_uni">Universidad Francisco Gavidia</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="El Salvador" class="img_place el-salvador tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/El-Salvador.svg" alt=""
                    class="place_img">
                </div>
              </div>
              <div class="item_place spain">
                <div class="modal_convenios spain">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-7.png" alt=""
                          class="img_bandera">
                        <h2>España</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/38.webp" alt="">
                          <div class="name_uni">Universidad de las Palmas de Gran Canaria</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/37.webp" alt="">
                          <div class="name_uni">Universitat de les Illes Balears</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/43.webp" alt="">
                          <div class="name_uni">Universidad Internacional de Rioja (UNIR)</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/40.webp" alt="">
                          <div class="name_uni">Universidad Europea del Atlántico*</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2021/02/LogoUZ.png" alt="">
                          <div class="name_uni">Universidad Zaragoza</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/42.webp" alt="">
                          <div class="name_uni">Instituto Vasco de Derecho Procesal</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/39.webp" alt="">
                          <div class="name_uni">Universidad de Salamanca</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/41.webp" alt="">
                          <div class="name_uni">Universidad Miguel Hernández de Elche</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal">*Convenio a través de la Fundación Universitaria Iberoamericana (FUNIBER).</div>
                  </div>
                </div>
                <div data-tippy-content="España" class="img_place spain tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/españa.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place filipinas">
                <div class="modal_convenios filipinas">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Filipinas.png" alt=""
                          class="img_bandera">
                        <h2>Filipinas</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/44.webp" alt="">
                          <div class="name_uni">Mapúa University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Filipinas" class="img_place filipinas tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Filipinas.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place india">
                <div class="modal_convenios india">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-India.png" alt=""
                          class="img_bandera">
                        <h2>India</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/47.webp" alt="">
                          <div class="name_uni">The Northcap University</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/46.webp" alt="">
                          <div class="name_uni">Shoolini University</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/45.webp" alt="">
                          <div class="name_uni">Chitkara University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="India" class="img_place india tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/India.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place indonesia">
                <div class="modal_convenios indonesia">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Indonesia.png" alt=""
                          class="img_bandera">
                        <h2>Indonesia</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/62.webp" alt="">
                          <div class="name_uni">Universitas Esa Unggul</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Indonesia" class="img_place indonesia tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Indonesia.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place italy">
                <div class="modal_convenios italy">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2021/08/banderaitalia.png" alt=""
                          class="img_bandera">
                        <h2>Italia</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2021/08/Universidad-de-Roma-Tor-Vergata-Italia-logo.png"
                            alt="">
                          <div class="name_uni">Universidad de Roma Tor Vergata</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Italia" class="img_place italy tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2021/08/point-italia.svg" alt=""
                    class="place_img">
                </div>
              </div>
              <div class="item_place kazajistan">
                <div class="modal_convenios kazajistan">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Kazajistan.png" alt=""
                          class="img_bandera">
                        <h2>Kazajistán</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/59.webp" alt="">
                          <div class="name_uni">Almaty Management University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Kazajistán" class="img_place kazajistan tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Kazajistan.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place kosovo">
                <div class="modal_convenios kosovo">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Kosovo.png" alt=""
                          class="img_bandera">
                        <h2>Kosovo</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/12_Mesa-de-trabajo-1-12.webp"
                            alt="">
                          <div class="name_uni">Universum International College</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Kosovo" class="img_place kosovo tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Kosovo.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place malasia">
                <div class="modal_convenios malasia">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Malasia.png" alt=""
                          class="img_bandera">
                        <h2>Malasia</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/58.webp" alt="">
                          <div class="name_uni">Sunway University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Malasia" class="img_place malasia tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Malasia.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place mexico">
                <div class="modal_convenios mexico">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Ellipse-6.png" alt=""
                          class="img_bandera">
                        <h2>México</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/53.webp" alt="">
                          <div class="name_uni">Universidad Autónoma de Sinaloa</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/50.webp" alt="">
                          <div class="name_uni">Universidad Autónoma de Guadalajara</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/56.webp" alt="">
                          <div class="name_uni">Centro Universitario Enrique Diaz de León</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/52.webp" alt="">
                          <div class="name_uni">Instituto Politécnico Nacional de los Estados Unidos Mexicanos</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/48.webp" alt="">
                          <div class="name_uni">Universidad Autónoma de Coahuila</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/55.webp" alt="">
                          <div class="name_uni">Universidad Pedagógica del Estado de Sinaloa UPES</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/49.webp" alt="">
                          <div class="name_uni">Universidad de Cuauhtémoc</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/51.webp" alt="">
                          <div class="name_uni">Instituto Universitario de Ciencias Médicas y Humanísticas de Nayarit
                          </div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/57.webp" alt="">
                          <div class="name_uni">Universidad Estatal del Valle de Ecatepec</div>
                        </div>
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/54.webp" alt="">
                          <div class="name_uni">Universidad de Celaya</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="México" class="img_place mexico tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/mexico.png" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place montenegro">
                <div class="modal_convenios montenegro">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Montenegro.png" alt=""
                          class="img_bandera">
                        <h2>Montenegro</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/61.webp" alt="">
                          <div class="name_uni">University Donja Gorica</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Montenegro" class="img_place montenegro tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Montenegro.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place turquia">
                <div class="modal_convenios turquia">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Turquia.png" alt=""
                          class="img_bandera">
                        <h2>Turquía</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/36.webp" alt="">
                          <div class="name_uni">Istanbul Bilgi University</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Turquía" class="img_place turquia tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Turquia.svg" alt="" class="place_img">
                </div>
              </div>
              <div class="item_place ucrania">
                <div class="modal_convenios ucrania">
                  <div data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317b8" class="content_modal_convenios"
                    style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="title_modal">
                      <div class="info_title"><img
                          src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bandera-de-Ucrania.png" alt=""
                          class="img_bandera">
                        <h2>Ucrania</h2>
                      </div><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_close.svg"
                        data-w-id="763fcfcb-095f-3e6b-09c9-bf8dd9b317be" alt="" class="icon_close">
                    </div>
                    <div class="container-overflow-convenios" id="overflow-convenios">
                      <!-- class="container-overflow-convenios" -->
                      <div class="w-layout-grid logos_uni _3-col _2col">
                        <div id="w-node-bf8dd9b317c4-d9b317b1" class="item_uni"><img
                            src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/63.webp" alt="">
                          <div class="name_uni">American University Kyiv</div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="legal"></div>
                  </div>
                </div>
                <div data-tippy-content="Ucrania" class="img_place ucrania tippy"
                  style="opacity: 0; transform: translate3d(0px, 15px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                  tabindex="0">
                  <div class="resplandor_place small"></div>
                  <div class="resplandor_place big"></div><img
                    src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Ucrania.svg" alt="" class="place_img">
                </div>
              </div>
            </div>
          </div>
          <div class="container auto"></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="section_footer _5-col last">
          <div id="w-node-5a8c5a3e0fac-5a3e0f8b" class="item_footer">
            <div class="acordeon_wrapper">
              <div class="acordeon_item">
                <div class="acordeon_item_triger">
                  <h4 class="h4_footer top">Más sobre Wiener...</h4>
                  <div class="arrow_footer w-icon-dropdown-toggle"></div>
                </div>
                <div class="acordeon_item_content">
                  <a href="https://www.uwiener.edu.pe/admision/examen-de-admision/" class="link_footer w-inline-block"
                    data-w-id="">
                    <div>Admisión</div>
                  </a><a href="https://www.uwiener.edu.pe/nosotros/" class="link_footer w-inline-block" data-w-id="">
                    <div>Nosotros</div>
                  </a><a href="https://bolsalaboral.uwiener.edu.pe/" class="link_footer w-inline-block" data-w-id="">
                    <div>Bolsa de trabajo</div>
                  </a><a href="https://posgrado.uwiener.edu.pe/" class="link_footer w-inline-block" data-w-id="">
                    <div>Posgrado</div>
                  </a><a href="https://intranet.uwiener.edu.pe/login.asp" class="link_footer w-inline-block"
                    data-w-id="">
                    <div>Portal para el estudiante</div>
                  </a><a href="#" class="link_footer w-inline-block" data-w-id="402ab43f-c7a8-6242-71c2-5a8c5a3e0fc6">
                    <div>Contáctenos</div>
                  </a><a href="https://www.uwiener.edu.pe/transparencia/" class="link_footer w-inline-block"
                    data-w-id="">
                    <div>Transparencia</div>
                  </a><a href="https://canaletico.uwiener.edu.pe/" class="link_footer w-inline-block" data-w-id="">
                    <div>Canal Ético</div>
                  </a><a href="/politicas-de-privacidad/" class="link_footer w-inline-block" data-w-id="">
                    <div>Políticas de privacidad</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="w-node-5a8c5a3e0fc9-5a3e0f8b" class="item_footer">
            <div class="acordeon_item">
              <div class="acordeon_item_triger">
                <h4 class="h4_footer">Pregrado Presencial</h4>
                <div class="arrow_footer w-icon-dropdown-toggle"></div>
              </div>
              <div class="acordeon_item_content">
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Ciencias de la Salud</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/farmacia-y-bioquimica/"
                            class="link_footer w-inline-block">
                            <div>Farmacia y Bioquímica</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/tecnologia-medica-en-terapia-fisica-y-rehabilitacion/"
                            class="link_footer w-inline-block">
                            <div>Tecnología Médica en Terapia Física y Rehabilitación</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/tecnologia-medica-en-laboratorio-clinico-y-anatomia-patologica/"
                            class="link_footer w-inline-block">
                            <div>Tecnología Médica en Laboratorio Clínico y Anatomía Patológica</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/psicologia/" class="link_footer w-inline-block">
                            <div>Psicología</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/odontologia/" class="link_footer w-inline-block">
                            <div>Odontología</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/obstetricia/" class="link_footer w-inline-block">
                            <div>Obstetricia</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/nutricion-y-dietetica/"
                            class="link_footer w-inline-block">
                            <div>Nutrición y Dietética</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/medicina-humana/"
                            class="link_footer w-inline-block">
                            <div>Medicina Humana</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/enfermeria/" class="link_footer w-inline-block">
                            <div>Enfermería</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Arquitectura</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/arquitectura/"
                            class="link_footer w-inline-block">
                            <div>Arquitectura</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Ingeniería</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/ingenieria-civil/"
                            class="link_footer w-inline-block">
                            <div>Ingeniería Civil</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/ingenieria-de-sistemas-e-informatica/"
                            class="link_footer w-inline-block">
                            <div>Ingeniería de Sistemas e Informática</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/ingenieria-industrial-y-de-gestion-empresarial/"
                            class="link_footer w-inline-block">
                            <div>Ingeniería Industrial y de Gestión Empresarial</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Derecho y Ciencia Política</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/derecho-y-ciencia-politica/"
                            class="link_footer w-inline-block">
                            <div>Derecho y Ciencia Política</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Negocios</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/administracion-y-marketing/"
                            class="link_footer w-inline-block">
                            <div>Administración y Marketing</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/contabilidad-y-auditoria/"
                            class="link_footer w-inline-block">
                            <div>Contabilidad y Auditoría</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/administracion-y-negocios-internacionales/"
                            class="link_footer w-inline-block">
                            <div>Administración y Negocios Internacionales</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/administracion-y-direccion-de-empresas/"
                            class="link_footer w-inline-block">
                            <div>Administración y Dirección de Empresas</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/administracion-en-turismo-y-hoteleria/"
                            class="link_footer w-inline-block">
                            <div>Administración en Turismo y Hotelería</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Comunicaciones</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras/comunicacion-en-medios-digitales/"
                            class="link_footer w-inline-block">
                            <div>Comunicación en Medios Digitales</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="w-node-5a8c5a3e0fc9-5a3e0f8b" class="item_footer">
            <div class="acordeon_item">
              <div class="acordeon_item_triger">
                <h4 class="h4_footer">Pregrado 100% Virtual</h4>
                <div class="arrow_footer w-icon-dropdown-toggle"></div>
              </div>
              <div class="acordeon_item_content">
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Ciencias de la Salud</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carrera-a-distancia/psicologia/"
                            class="link_footer w-inline-block">
                            <div>Psicología</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Ingeniería a Distancia</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/ingenieria-industrial-y-de-gestion-empresarial/"
                            class="link_footer w-inline-block">
                            <div>Ingeniería Industrial y de Gestión Empresarial</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/ingenieria-de-sistemas-e-informatica/"
                            class="link_footer w-inline-block">
                            <div>Ingeniería de Sistemas e Informática</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Derecho y Ciencia Política</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/derecho-y-ciencia-politica/"
                            class="link_footer w-inline-block">
                            <div>Derecho y Ciencia Política</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="acordeon_item">
                  <div class="acordeon_item_triger_2 sub_item">
                    <h5>Facultad de Negocios a Distancia</h5>
                    <div class="arrow_footer facultad w-icon-dropdown-toggle"></div>
                  </div>
                  <div class="acordeon_item_content content_facultad" style="height: 0px;">
                    <div class="collection_wrapper w-dyn-list">
                      <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carrera-a-distancia/administracion-y-marketing/"
                            class="link_footer w-inline-block">
                            <div>Administración y Marketing</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/administracion-y-direccion-de-empresas/"
                            class="link_footer w-inline-block">
                            <div>Administración y Dirección de Empresas</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/administracion-y-negocios-internacionales/"
                            class="link_footer w-inline-block">
                            <div>Administración y Negocios Internacionales</div>
                          </a>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                          <a href="https://www.uwiener.edu.pe/carreras-a-distancia/contabilidad-y-auditoria/"
                            class="link_footer w-inline-block">
                            <div>Contabilidad y Auditoría</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="w-node-5a8c5a3e1011-5a3e0f8b" class="item_footer">
            <div class="acordeon_item">
              <div class="acordeon_item_triger">
                <h4 class="h4_footer">Centros Wiener</h4>
                <div class="arrow_footer w-icon-dropdown-toggle"></div>
              </div>
              <div class="acordeon_item_content">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/centros-wiener/centro-de-analisis-clinicos/"
                        class="link_footer w-inline-block ">
                        <div>Centro de Análisis Clínicos</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/centros-wiener/centro-odontologico/"
                        class="link_footer w-inline-block ">
                        <div>Centro Odontológico</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/centros-wiener/centro-de-terapia-fisica-y-rehabilitacion/"
                        class="link_footer w-inline-block ">
                        <div>Centro de Terapia Física y Rehabilitación</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item_footer">
            <div class="acordeon_item">
              <div class="acordeon_item_triger">
                <h4 class="h4_footer">Servicios</h4>
                <div class="arrow_footer w-icon-dropdown-toggle"></div>
              </div>
              <div class="acordeon_item_content">
                <a href="https://intranet.uwiener.edu.pe/univwiener/biblioteca/biblioteca.asp" target="_blank"
                  class="link_footer w-inline-block">
                  <div>Biblioteca</div>
                </a>
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/becas/"
                        class="link_footer w-inline-block ">
                        <div>Jefatura de Becas</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/responsabilidad-social/"
                        class="link_footer w-inline-block ">
                        <div>Responsabilidad Social</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/registros-academicos/"
                        class="link_footer w-inline-block ">
                        <div>Registros Académicos</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/secretaria-general/"
                        class="link_footer w-inline-block ">
                        <div>Secretaría General</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/bienestar-estudiantil/"
                        class="link_footer w-inline-block ">
                        <div>Bienestar Estudiantil</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/direccion-de-empleabilidad-y-alumni/"
                        class="link_footer w-inline-block ">
                        <div>Dirección de Empleabilidad y Alumni</div>
                      </a>
                    </div>
                    <div role="listitem" class="w-dyn-item">
                      <a href="https://www.uwiener.edu.pe/servicios-universitarios/defensoria-universitaria/"
                        class="link_footer w-inline-block ">
                        <div>Defensoría Universitaria</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="w-node-5a8c5a3e102f-5a3e0f8b" class="item_footer">
            <div class="acordeon_wrapper">
              <div class="acordeon_item">
                <div class="acordeon_item_triger">
                  <h4 class="h4_footer">Novedades</h4>
                  <div class="arrow_footer w-icon-dropdown-toggle"></div>
                </div>
                <div class="acordeon_item_content">
                  <a href="https://uwiener.edu.pe/novedades/" class="link_footer w-inline-block" data-w-id="">
                    <div>Eventos</div>
                  </a><a href="https://uwiener.edu.pe/novedades/noticias/" class="link_footer w-inline-block"
                    data-w-id="">
                    <div>Noticias</div>
                  </a><a href="https://intranet.uwiener.edu.pe/univwiener/infowiener.aspx"
                    class="link_footer w-inline-block" data-w-id="">
                    <div>Info Wiener</div>
                  </a><a href="https://intranet.uwiener.edu.pe/univwiener/infow/infoC-2021-N-2/index.html"
                    class="link_footer w-inline-block" data-w-id="">
                    <div>Boletín de Calidad</div>
                  </a><a
                    href="https://www.uwiener.edu.pe/wp-content/uploads/2023/05/UPNW-PRE-GRA-GUI-003-WGuia_Pre_2023.pdf"
                    class="link_footer w-inline-block" data-w-id="">
                    <div>Wiener Guía del Estudiante Pregrado</div>
                  </a><a href="https://uwiener.evaluar.com" class="link_footer w-inline-block" data-w-id="">
                    <div>Trabaja con Nosotros</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Imagen Libro de Reclamaciones -->
          <div class="item_footer">
            <a href="https://librodereclamaciones.uwiener.edu.pe/" target="_blank" rel="noopener noreferrer">
              <img src="/wp-content/uploads/2025/06/lr_0406.webp">
            </a>
          </div>

        </div>
        <div class="section_footer _4-col">
          <div id="w-node-5a8c5a3e1041-5a3e0f8b" class="place_info">
            <div class="info_footer">
              <a href="https://maps.app.goo.gl/4DMVy6G4MCFU9wWq9" target="blank">Jr. Larraburre y Unanue 110 Lima</a>
              <a href="https://maps.app.goo.gl/C5uS7U3BVNC63Ta37" target="blank">Av. Arequipa 440 Lima</a>
              <a href="https://maps.app.goo.gl/R4Hp9iSmxJv9L7Jx5" target="blank">Jr. Saco Oliveros 150 Lima</a>
              <a href="https://maps.app.goo.gl/UFULzSY7yMjofRNJ7" target="blank">Av. Arenales 1555 Lince</a>
              <a href="https://maps.app.goo.gl/rPqkamAG8eMwh5XGA" target="blank">PRÓXIMAMENTE: Av. El Pacíﬁco 431,
                Independencia</a>
            </div>
          </div>
          <div id="w-node-5a8c5a3e104d-5a3e0f8b" class="info_footer">
            <div>Escríbenos:<br><a href="mailto:pregrado@uwiener.edu.pe">pregrado@uwiener.edu.pe</a><br></div>
          </div>
          <div id="w-node-5a8c5a3e1053-5a3e0f8b" class="social_media">
            <div>Síguenos en:</div>
            <div class="social_icons">
              <a href="https://www.facebook.com/uwiener/" target="_blank"
                aria-label="Facebook página oficial de la Universidad Norbert Wiener"
                class="item_social w-inline-block"><img
                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/fb-icon-white.svg" alt=""
                  class="img_social"></a>
              <a href="https://www.youtube.com/user/uwiener" target="_blank"
                aria-label="Youtube página oficial de la Universidad Norbert Wiener"
                class="item_social w-inline-block"><img
                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/yt-icon-white.svg" alt=""
                  class="img_social"></a>
              <a href="https://pe.linkedin.com/school/universidadnorbertwiener/" target="_blank"
                aria-label="Linkedin página oficial de la Universidad Norbert Wiener"
                class="item_social w-inline-block"><img
                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/link-icon-white.svg" alt=""
                  class="img_social"></a>
              <a href="https://www.instagram.com/u.wiener/" target="_blank"
                aria-label="Instagram página oficial de la Universidad Norbert Wiener"
                class="item_social w-inline-block"><img
                  src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/inst-icon-white.svg" alt=""
                  class="img_social"></a>
            </div>
          </div>
        </div>
        <div class="section_footer _4-col">
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer"><a href="#" class="linktelffooter">Central
              Telefónica<br></a>
            <div class="numerosfooter ">
              <a href="tel:017065555" class="linktelffooter telfbtn w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>01 706-5555</strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer"><a href="#" class="linktelffooter">Pregrado -
              Postulantes<br></a>
            <div class="numerosfooter ">
              <a href="tel:0 800 26212" class="linktelffooter telfbtn w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>0 800-26212 </strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer"><a href="#" class="linktelffooter">Pregrado -
              Postulantes<br></a>
            <div class="numerosfooter ">
              <a href="https://api.whatsapp.com/send?phone=51997535372&amp;text=Hola%20U.%20Wiener,%20deseo%20informaci%C3%B3n%20para%20Postulantes"
                class="linktelffooter telfbtn w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>997 535 372</strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer"><a href="#" class="linktelffooter">Créditos y
              Cobranzas:<br></a>
            <div class="numerosfooter ">
              <a href="tel:017065555" class="linktelffooter telfbtn w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>01 706 5555 </strong>
                  <br> opción 1-1
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer">
            <a href="#" class="linktelffooter">
              <strong>Posgrado – Postulantes<br></strong>
            </a>
            <div class="numerosfooter vertical">
              <a href="https://www.uwiener.edu.pe/" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>01 706-5555 </strong>
                  <br> opción 2-2-1
                </div>
              </a>
              <a href="https://wa.link/90qmi1" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>994 618 336</strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer">
            <a href="#" class="linktelffooter">
              <strong>2das Especialidades – Postulantes<br></strong>
            </a>
            <div class="numerosfooter vertical">
              <a href="https://www.uwiener.edu.pe/" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>01 706-5555 </strong>
                </div>
              </a>
              <a href="https://www.uwiener.edu.pe/" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>opción 2-3-1</strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer">
            <a href="#" class="linktelffooter">
              <strong>2das Especialidades en Enfermería – Postulantes<br></strong>
            </a>
            <div class="numerosfooter vertical">
              <a href="https://www.uwiener.edu.pe/" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>01 706-5555 </strong>
                  <br> opción 2-3-1
                </div>
              </a>
              <a href="https://wa.link/nqszdi" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>977 501 489</strong>
                </div>
              </a>
            </div>
          </div>
          <div id="w-node-f9a765c25588-5a3e0f8b" class="info_footer">
            <a href="#" class="linktelffooter">
              <strong>2das Especialidades en Enfermería – Postulantes<br></strong>
            </a>
            <div class="numerosfooter vertical">
              <a href="https://wa.link/52bqgt" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>924 804 194</strong>
                </div>
              </a>
              <a href="https://wa.link/g4a6vz" class="linktelffooter telfbtn mb w-inline-block" target="_blank">
                <img src="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/pxl-3006.webp" loading="lazy" alt=""
                  class="icontelfooter light">
                <div>
                  <strong>970 676 783</strong>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="section_footer left">
          <div class="copy_right" style="margin-bottom:1rem;">
            <div>©Universidad Norbert Wiener todos los derechos reservados</div>
          </div>
          <div class="logos_footer"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/new-logo-Newsletter.png" alt=""
              class="img_logo_footer"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/iso.svg" alt=""
              class="logocerti"></div>
        </div>
      </div>
      <div class="modal-contacto">
        <!--  <div class="cerrar-modal-inscri" data-ix="cerrar-modal-contacto">
			<div class="p-16 blanco">Cerrar</div><img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/cerrar-blanco.svg" alt="" class="icon-cerrar" />
		</div> -->
        <div class="cerrar-modal-inscri rqt-cerrar" data-ix="cerrar-modal-contacto"
          style="transition: transform 0.2s, -webkit-transform 0.2s;">
          <img src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/v2/btn-cerrar.png" alt=""
            class="icon-cerrar">
        </div>
        <div class="contenido-form home rqt-form newformfloatFrame">
          <div class="rqt-head_form newformfloat">
            <!-- <h3 class="h3_verde">Más información</h3> -->
            <h4>¿Buscas una educación <strong>de clase mundial?</strong></h4>
            <p style="color: #fff">¡Supera todas tus expectativas e inicia tu sueño de ser un profesional!</p>
          </div>



          <div class="form_home home w-form" style="padding-top: 12px;">
            <form id="formModalHome"
              action="https://forms.zohopublic.com/adminzoho11/form/WebPreWiener/formperma/l1wwdmdtbCUdnHXBKB4zGg2X1eb12Fnp-VgoBjOAEmA/htmlRecords/submit"
              name="email-form-2" data-name="Email Form 2" method="post"
              class="left newform newformfloat form_contac form_mix form_ListaCarreras" data-posicion="footer"><input
                type="hidden" name="utm_source" value="web"><input type="hidden" name="utm_medium"
                value="formulario_carreras"><input type="hidden" name="utm_campaign" value="admision_2025_II"><input
                type="hidden" name="utm_term" value="organico"><input type="hidden" name="utm_content"
                value="organico"><input type="hidden" name="zc_gad" value="admision_2025_II"><input type="hidden"
                name="Website" value="https://www.uwiener.edu.pe/internacionalizacion/">

              <div class="imput-2col mix_foo">
                <label class="bx_inputForm div_radio">
                  <input type="radio" name="form_mixto_foo" value="presencial" class="radio_modalidad" checked=""
                    data-action="https://forms.zohopublic.com/adminzoho11/form/WebPreWiener/formperma/l1wwdmdtbCUdnHXBKB4zGg2X1eb12Fnp-VgoBjOAEmA/htmlRecords/submit">
                  <div class="input_radio"></div>
                  <p>Pregrado Presencial</p>
                </label>
                <label class="bx_inputForm div_radio">
                  <input type="radio" name="form_mixto_foo" value="virtual" class="radio_modalidad"
                    data-action="https://forms.zohopublic.com/adminzoho11/form/WebSolicitaInformacinVirtual/formperma/kEghJarUi7QiD6-qDLpQpVMV_uW8uH0m1XlinN5KPls/htmlRecords/submit">
                  <div class="input_radio"></div>
                  <p>Pregrado 100% Virtual</p>
                </label>
              </div>

              <div class="div_presencial">
                <div class="textext"><b>Soy padre de familia</b></div>
                <div class="imput-2col">
                  <div class="bx_inputForm">
                    <label class="div_radio">
                      <input type="radio" name="Radio" value="Sí" id="Radio_1" class="radio_padre">
                      <div class="input_radio"></div>
                      <span>Si</span>
                    </label>
                  </div>
                  <div class="bx_inputForm">
                    <label class="div_radio">
                      <input type="radio" name="Radio" value="No" id="Radio_2" class="radio_padre activo_radio"
                        checked="">
                      <div class="input_radio"></div>
                      <span>No</span>
                    </label>
                  </div>
                </div>
              </div>
              <!-- <br> -->

              <input type="text" class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                name="Name_First" placeholder="Nombres (*)" maxlength="50">
              <div class="imput-2col">
                <div class="bx_inputForm">
                  <input type="text" class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                    name="Name_Last" placeholder="Apellido Paterno (*)" maxlength="50">
                </div>
                <div class="bx_inputForm">
                  <input type="text" class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                    name="Name_Middle" placeholder="Apellido Materno (*)" maxlength="50">
                </div>
              </div>
              <div class="imput-2col">
                <div class="bx_inputForm">
                  <select name="Dropdown" class="imput-form home w-select validate[required] type_doc">
                    <option value="-Select-" disabled="">Tipo de Documento</option>
                    <option value="DNI" selected="">DNI</option>
                    <option value="Carnet de extranjería">Carnet de extranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                  </select>
                </div>
                <div class="bx_inputForm">
                  <input type="text"
                    class="imput-form home w-input input_doc validate[required,custom[number ,minSize[8]]]"
                    name="SingleLine" placeholder="N° de documento (*)">
                  <input type="hidden" id="gclid_field" name="SingleLine7" checktype="c1" value="" maxlength="255"
                    fieldtype="1" placeholder="GCLID">
                </div>
              </div>

              <div class="imput-2col">
                <div class="imput-2col bx_inputForm" style="width: 48%;">
                  <div class="bx_inputForm">
                    <select class="imput-form home w-select validate[required]" name="Dropdown3" required="true">
                      <option disabled="" value="" selected="">-Select-</option>
                      <option value="Estados Unidos (+1)">Estados Unidos (+1)</option>
                      <option value="Canadá (+1)">Canadá (+1)</option>
                      <option value="México (+52)">México (+52)</option>
                      <option value="Brasil (+55)">Brasil (+55) </option>
                      <option value="Argentina (+54)">Argentina (+54) </option>
                      <option value="Colombia (+57)">Colombia (+57) </option>
                      <option value="Chile (+56)">Chile (+56)</option>
                      <option value="Venezuela (+58)">Venezuela (+58) </option>
                      <option value="Perú (+51)" selected="">Perú (+51)</option>
                      <option value="Ecuador (+593)">Ecuador (+593) </option>
                      <option value="Cuba (+53)">Cuba (+53)</option>
                      <option value="Bolivia (+591)">Bolivia (+591) </option>
                      <option value="Costa Rica (+506)">Costa Rica (+506)</option>
                      <option value="Panamá (+507)">Panamá (+507)</option>
                      <option value="Uruguay (+598)">Uruguay (+598) </option>
                      <option value="España (+34)">España (+34)</option>
                      <option value="Alemania (+49)">Alemania (+49) </option>
                      <option value="Francia (+33)">Francia (+33) </option>
                      <option value="Italia (+39)">Italia (+39) </option>
                      <option value="Reino Unido (+44)">Reino Unido (+44)</option>
                      <option value="Rusia (+7)">Rusia (+7)</option>
                      <option value="Ucrania (+380)">Ucrania (+380) </option>
                      <option value="Polonia (+48)">Polonia (+48) </option>
                      <option value="Rumania (+40)">Rumania (+40) </option>
                      <option value="Países Bajos (+31)">Países Bajos (+31)</option>
                      <option value="Bélgica (+32)">Bélgica (+32)</option>
                      <option value="Grecia (+30)">Grecia (+30) </option>
                      <option value="Portugal (+351)">Portugal (+351) </option>
                      <option value="Suecia (+46)">Suecia (+46) </option>
                      <option value="Noruega (+47)">Noruega (+47) </option>
                      <option value="China (+86)">China (+86)</option>
                      <option value="India (+91)">India (+91)</option>
                      <option value="Japón (+81)">Japón (+81)</option>
                      <option value="Corea del Sur (+82)">Corea del Sur (+82)</option>
                      <option value="Indonesia (+62)">Indonesia (+62) </option>
                      <option value="Turquía (+90)">Turquía (+90)</option>
                      <option value="Filipinas (+63)">Filipinas (+63) </option>
                      <option value="Tailandia (+66)">Tailandia (+66) </option>
                      <option value="Vietnam (+84)">Vietnam (+84) </option>
                      <option value="Israel (+972)">Israel (+972) </option>
                      <option value="Malasia (+60)">Malasia (+60) </option>
                      <option value="Singapur (+65)">Singapur (+65) </option>
                      <option value="Pakistán (+92)">Pakistán (+92)</option>
                      <option value="Bangladés (+880)">Bangladés (+880)</option>
                      <option value="Arabia Saudita (+966)">Arabia Saudita (+966)</option>
                      <option value="Egipto (+20)">Egipto (+20) </option>
                      <option value="Sudáfrica (+27)">Sudáfrica (+27)</option>
                      <option value="Nigeria (+234)">Nigeria (+234) </option>
                      <option value="Kenia (+254)">Kenia (+254) </option>
                      <option value="Marruecos (+212)">Marruecos (+212) </option>
                      <option value="Argelia (+213)">Argelia (+213) </option>
                      <option value="Uganda (+256)">Uganda (+256) </option>
                      <option value="Ghana (+233)">Ghana (+233) </option>
                      <option value="Camerún (+237)">Camerún (+237)</option>
                      <option value="Costa de Marfil (+225)">Costa de Marfil (+225)</option>
                      <option value="Senegal (+221)">Senegal (+221) </option>
                      <option value="Tanzania (+255)">Tanzania (+255) </option>
                      <option value="Sudán (+249)">Sudán (+249)</option>
                      <option value="Libia (+218)">Libia (+218) </option>
                      <option value="Túnez (+216)">Túnez (+216)</option>
                      <option value="Australia (+61)">Australia (+61) </option>
                      <option value="Nueva Zelanda (+64)">Nueva Zelanda (+64)</option>
                      <option value="Fiji (+679)">Fiji (+679)</option>
                      <option value="Papúa Nueva Guinea (+675)"> Papúa Nueva Guinea (+675)</option>
                      <option value="Tonga (+676)">Tonga (+676) </option>
                      <option value="Irán (+98)">Irán (+98)</option>
                      <option value="Iraq (+964)">Iraq (+964)</option>
                      <option value="Jordania (+962)">Jordania (+962) </option>
                      <option value="Líbano (+961)">Líbano (+961)</option>
                      <option value="Kuwait (+965)">Kuwait (+965) </option>
                      <option value="Emiratos Árabes Unidos (+971)"> Emiratos Árabes Unidos (+971)</option>
                      <option value="Omán (+968)">Omán (+968)</option>
                      <option value="Catar (+974)">Catar (+974) </option>
                      <option value="Bahrein (+973)">Bahrein (+973) </option>
                      <option value="Yemen (+967)">Yemen (+967) </option>
                    </select>
                  </div>
                  <div class="bx_inputForm">
                    <input type="text"
                      class="imput-form home w-input numeros_js validate[required,custom[onlyCell ,minSize[9]]]"
                      maxlength="9" name="PhoneNumber_countrycode" placeholder="Celular (*)">
                  </div>
                </div>
                <div class="bx_inputForm">
                  <input type="email" class="imput-form home w-input validate[required,custom[email]]" name="Email"
                    placeholder="Correo electrónico (*)">
                </div>
              </div>

              <br>
              <div class="div_presencial">
                <div id="si_hijo" style="display: none;">
                  <div><b>Agregue la información de su hijo/a:</b></div>
                  <input type="text" class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                    name="Name1_First" placeholder="Nombres (*)">
                  <div class="imput-2col">
                    <div class="bx_inputForm">
                      <input type="text"
                        class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                        name="Name1_Last" placeholder="Apellido Paterno (*)">
                    </div>
                    <div class="bx_inputForm">
                      <input type="text"
                        class="imput-form home w-input letras_js validate[required,custom[onlyLetterSp]]"
                        name="Name1_Middle" placeholder="Apellido Materno (*)">
                    </div>
                  </div>
                  <div class="imput-2col">
                    <div class="bx_inputForm">
                      <select name="Dropdown6" class="imput-form home w-select validate[required] type_doc">
                        <option value="-Select-" disabled="">Tipo de Documento</option>
                        <option value="DNI" selected="">DNI</option>
                        <option value="Carnet de extranjería">Carnet de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                      </select>
                    </div>
                    <div class="bx_inputForm">
                      <input type="text"
                        class="imput-form home w-input input_doc validate[required,custom[number ,minSize[8]]] docnun_hijo"
                        name="SingleLine4" placeholder="N° de documento (*)">
                    </div>
                  </div>
                  <div class="imput-2col">
                    <div class=" bx_inputForm">
                      <select class="imput-form home w-select validate[required]" name="Dropdown5" required="true">
                        <option disabled="" value="" selected="">-Select-</option>
                        <option value="Estados Unidos (+1)">Estados Unidos (+1)</option>
                        <option value="Canadá (+1)">Canadá (+1)</option>
                        <option value="México (+52)">México (+52)</option>
                        <option value="Brasil (+55)">Brasil (+55) </option>
                        <option value="Argentina (+54)">Argentina (+54) </option>
                        <option value="Colombia (+57)">Colombia (+57) </option>
                        <option value="Chile (+56)">Chile (+56)</option>
                        <option value="Venezuela (+58)">Venezuela (+58) </option>
                        <option value="Perú (+51)" selected="">Perú (+51)</option>
                        <option value="Ecuador (+593)">Ecuador (+593) </option>
                        <option value="Cuba (+53)">Cuba (+53)</option>
                        <option value="Bolivia (+591)">Bolivia (+591) </option>
                        <option value="Costa Rica (+506)">Costa Rica (+506)</option>
                        <option value="Panamá (+507)">Panamá (+507)</option>
                        <option value="Uruguay (+598)">Uruguay (+598) </option>
                        <option value="España (+34)">España (+34)</option>
                        <option value="Alemania (+49)">Alemania (+49) </option>
                        <option value="Francia (+33)">Francia (+33) </option>
                        <option value="Italia (+39)">Italia (+39) </option>
                        <option value="Reino Unido (+44)">Reino Unido (+44)</option>
                        <option value="Rusia (+7)">Rusia (+7)</option>
                        <option value="Ucrania (+380)">Ucrania (+380) </option>
                        <option value="Polonia (+48)">Polonia (+48) </option>
                        <option value="Rumania (+40)">Rumania (+40) </option>
                        <option value="Países Bajos (+31)">Países Bajos (+31)</option>
                        <option value="Bélgica (+32)">Bélgica (+32)</option>
                        <option value="Grecia (+30)">Grecia (+30) </option>
                        <option value="Portugal (+351)">Portugal (+351) </option>
                        <option value="Suecia (+46)">Suecia (+46) </option>
                        <option value="Noruega (+47)">Noruega (+47) </option>
                        <option value="China (+86)">China (+86)</option>
                        <option value="India (+91)">India (+91)</option>
                        <option value="Japón (+81)">Japón (+81)</option>
                        <option value="Corea del Sur (+82)">Corea del Sur (+82)</option>
                        <option value="Indonesia (+62)">Indonesia (+62) </option>
                        <option value="Turquía (+90)">Turquía (+90)</option>
                        <option value="Filipinas (+63)">Filipinas (+63) </option>
                        <option value="Tailandia (+66)">Tailandia (+66) </option>
                        <option value="Vietnam (+84)">Vietnam (+84) </option>
                        <option value="Israel (+972)">Israel (+972) </option>
                        <option value="Malasia (+60)">Malasia (+60) </option>
                        <option value="Singapur (+65)">Singapur (+65) </option>
                        <option value="Pakistán (+92)">Pakistán (+92)</option>
                        <option value="Bangladés (+880)">Bangladés (+880)</option>
                        <option value="Arabia Saudita (+966)">Arabia Saudita (+966)</option>
                        <option value="Egipto (+20)">Egipto (+20) </option>
                        <option value="Sudáfrica (+27)">Sudáfrica (+27)</option>
                        <option value="Nigeria (+234)">Nigeria (+234) </option>
                        <option value="Kenia (+254)">Kenia (+254) </option>
                        <option value="Marruecos (+212)">Marruecos (+212) </option>
                        <option value="Argelia (+213)">Argelia (+213) </option>
                        <option value="Uganda (+256)">Uganda (+256) </option>
                        <option value="Ghana (+233)">Ghana (+233) </option>
                        <option value="Camerún (+237)">Camerún (+237)</option>
                        <option value="Costa de Marfil (+225)">Costa de Marfil (+225)</option>
                        <option value="Senegal (+221)">Senegal (+221) </option>
                        <option value="Tanzania (+255)">Tanzania (+255) </option>
                        <option value="Sudán (+249)">Sudán (+249)</option>
                        <option value="Libia (+218)">Libia (+218) </option>
                        <option value="Túnez (+216)">Túnez (+216)</option>
                        <option value="Australia (+61)">Australia (+61) </option>
                        <option value="Nueva Zelanda (+64)">Nueva Zelanda (+64)</option>
                        <option value="Fiji (+679)">Fiji (+679)</option>
                        <option value="Papúa Nueva Guinea (+675)"> Papúa Nueva Guinea (+675)</option>
                        <option value="Tonga (+676)">Tonga (+676) </option>
                        <option value="Irán (+98)">Irán (+98)</option>
                        <option value="Iraq (+964)">Iraq (+964)</option>
                        <option value="Jordania (+962)">Jordania (+962) </option>
                        <option value="Líbano (+961)">Líbano (+961)</option>
                        <option value="Kuwait (+965)">Kuwait (+965) </option>
                        <option value="Emiratos Árabes Unidos (+971)"> Emiratos Árabes Unidos (+971)</option>
                        <option value="Omán (+968)">Omán (+968)</option>
                        <option value="Catar (+974)">Catar (+974) </option>
                        <option value="Bahrein (+973)">Bahrein (+973) </option>
                        <option value="Yemen (+967)">Yemen (+967) </option>
                      </select>
                    </div>
                    <div class="bx_inputForm">
                      <input type="text"
                        class="imput-form home w-input numeros_js validate[required,custom[onlyCell ,minSize[9]]]"
                        name="PhoneNumber1_countrycode" placeholder="Celular (*)">
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <select id="carrera_selectMF" name="Dropdown100"
                  class="imput-form home w-select rqt-combocarreras validate[required] select_carrera">
                  <option value="" selected="" disabled="">Escoge tu carrera</option>
                  <optgroup label="Ciencias de la Salud">
                    <option value="5985073000000969086" data-campus="63-64">Farmacia y Bioquímica</option>
                    <option value="5985073000000969096" data-campus="63-64">Tecnología Médica en Terapia Física y
                      Rehabilitación</option>
                    <option value="5985073000000969095" data-campus="63-64">Tecnología Médica en Laboratorio Clínico y
                      Anatomía Patológica</option>
                    <option value="5985073000000969099" data-campus="63-64">Psicología</option>
                    <option value="5985073000000969090" data-campus="63-64">Odontología</option>
                    <option value="5985073000000969087" data-campus="63-64">Obstetricia</option>
                    <option value="5985073000000969101" data-campus="63-64">Nutrición y Dietética</option>
                    <option value="5985073000000969100" data-campus="63-64">Medicina Humana</option>
                    <option value="5985073000000969088" data-campus="63-64">Enfermería</option>
                  </optgroup>
                  <optgroup label="Arquitectura">
                    <option value="5985073000042294036" data-campus="63">Arquitectura</option>
                  </optgroup>
                  <optgroup label="Ingeniería">
                    <option value="5985073000042294046" data-campus="63">Ingeniería Civil</option>
                    <option value="5985073000000969092" data-campus="63-64">Ingeniería de Sistemas e Informática
                    </option>
                    <option value="5985073000000969094" data-campus="63-64">Ingeniería Industrial y de Gestión
                      Empresarial</option>
                  </optgroup>
                  <optgroup label="Derecho y Ciencia Política">
                    <option value="5985073000000969093" data-campus="63-64">Derecho y Ciencia Política</option>
                  </optgroup>
                  <optgroup label="Negocios">
                    <option value="5985073000000969098" data-campus="63">Administración y Marketing</option>
                    <option value="5985073000000969091" data-campus="63">Contabilidad y Auditoría</option>
                    <option value="5985073000000969085" data-campus="63">Administración y Negocios Internacionales
                    </option>
                    <option value="5985073000000969097" data-campus="63">Administración y Dirección de Empresas</option>
                    <option value="5985073000000969089" data-campus="63">Administración en Turismo y Hotelería</option>
                  </optgroup>
                  <optgroup label="Comunicaciones">
                    <option value="5985073000042294056" data-campus="63">Comunicación en Medios Digitales</option>
                  </optgroup>
                </select>
                <input type="hidden" name="SingleLine3" value="" placeholder="inputFacultadValor"
                  class="inputFacultadValor">
                <input type="hidden" name="" value="" placeholder="inputFacultadNombre" class="inputFacultadNombre">
                <input type="hidden" name="SingleLine5" value="" placeholder="inputValor" class="inputValor">
                <input type="hidden" name="SingleLine6" value="" placeholder="inputTexto" class="inputTexto">
              </div>

              <div class="list_presencial">
                <optgroup label="Ciencias de la Salud">
                  <option value="5985073000000969086" data-campus="63-64">Farmacia y Bioquímica</option>
                  <option value="5985073000000969096" data-campus="63-64">Tecnología Médica en Terapia Física y
                    Rehabilitación</option>
                  <option value="5985073000000969095" data-campus="63-64">Tecnología Médica en Laboratorio Clínico y
                    Anatomía Patológica</option>
                  <option value="5985073000000969099" data-campus="63-64">Psicología</option>
                  <option value="5985073000000969090" data-campus="63-64">Odontología</option>
                  <option value="5985073000000969087" data-campus="63-64">Obstetricia</option>
                  <option value="5985073000000969101" data-campus="63-64">Nutrición y Dietética</option>
                  <option value="5985073000000969100" data-campus="63-64">Medicina Humana</option>
                  <option value="5985073000000969088" data-campus="63-64">Enfermería</option>
                </optgroup>
                <optgroup label="Arquitectura">
                  <option value="5985073000042294036" data-campus="63">Arquitectura</option>
                </optgroup>
                <optgroup label="Ingeniería">
                  <option value="5985073000042294046" data-campus="63">Ingeniería Civil</option>
                  <option value="5985073000000969092" data-campus="63-64">Ingeniería de Sistemas e Informática</option>
                  <option value="5985073000000969094" data-campus="63-64">Ingeniería Industrial y de Gestión Empresarial
                  </option>
                </optgroup>
                <optgroup label="Derecho y Ciencia Política">
                  <option value="5985073000000969093" data-campus="63-64">Derecho y Ciencia Política</option>
                </optgroup>
                <optgroup label="Negocios">
                  <option value="5985073000000969098" data-campus="63">Administración y Marketing</option>
                  <option value="5985073000000969091" data-campus="63">Contabilidad y Auditoría</option>
                  <option value="5985073000000969085" data-campus="63">Administración y Negocios Internacionales
                  </option>
                  <option value="5985073000000969097" data-campus="63">Administración y Dirección de Empresas</option>
                  <option value="5985073000000969089" data-campus="63">Administración en Turismo y Hotelería</option>
                </optgroup>
                <optgroup label="Comunicaciones">
                  <option value="5985073000042294056" data-campus="63">Comunicación en Medios Digitales</option>
                </optgroup>
              </div>
              <div class="list_virtual">
                <optgroup label="Ciencias de la Salud">
                  <option value="5985073000343232068">Psicología</option>
                </optgroup>
                <optgroup label="Derecho y Ciencia Política">
                  <option value="5985073000303051046">Derecho y Ciencia Política</option>
                </optgroup>
                <optgroup label="Ingeniería a Distancia">
                  <option value="5985073000303051036">Ingeniería Industrial y de Gestión Empresarial</option>
                  <option value="5985073000303051026">Ingeniería de Sistemas e Informática</option>
                </optgroup>
                <optgroup label="Negocios a Distancia">
                  <option value="5985073000303051056">Administración y Marketing</option>
                  <option value="5985073000303051106">Administración y Dirección de Empresas</option>
                  <option value="5985073000303051094">Administración y Negocios Internacionales</option>
                  <option value="5985073000303051082">Contabilidad y Auditoría</option>
                </optgroup>
              </div>

              <div class="cont_sede">
                <div style="display: none;">
                  <select id="selec_sedes2" name="selec_sedes"
                    class="imput-form outline w-select validate[required] selec_sedes">
                    <option selected="true" disabled="" value="-Select-">Escoge tu campus (*)</option>
                  </select>
                </div>
                <input type="hidden" name="SingleLine8" value="" class="name_sede">
                <input type="hidden" name="SingleLine9" value="" class="val_sede">
              </div>

              <div class="div_presencial">
                <div class="imput-2col">
                  <div class="bx_inputForm">
                    <select name="Dropdown2" class="imput-form home w-select select_grado validate[required]">
                      <option value="" disabled="" selected="">Escoge tu grado</option>
                      <option value="5to">5to</option>
                      <option value="Ya terminé colegio">Ya terminé colegio</option>
                    </select>
                  </div>
                  <div class="bx_inputForm">
                    <input type="text"
                      class="imput-form home w-input numeros_js anno_grado validate[required,custom[onlyNumberSp ,minSize[4]]]"
                      name="Number" maxlength="4" placeholder="Año de egreso" style="display: none;">
                  </div>
                </div>
              </div>

              <div class="div_virtual">
                <select name="departamentos_zoho" class="imput-form outline w-select validate[required]">
                  <option value="" selected="" disabled="">Departamento de procedencia</option>
                  <option value="5985073000001376346">Amazonas</option>
                  <option value="5985073000001376347">Áncash</option>
                  <option value="5985073000001376348">Apurímac</option>
                  <option value="5985073000001376349">Arequipa</option>
                  <option value="5985073000001376350">Ayacucho</option>
                  <option value="5985073000001376351">Cajamarca</option>
                  <option value="5985073000001376352">Cusco</option>
                  <option value="5985073000001376353">Huancavelica</option>
                  <option value="5985073000001376354">Huánuco</option>
                  <option value="5985073000001376355">Ica</option>
                  <option value="5985073000001376356">Junín</option>
                  <option value="5985073000001376357">La Libertad</option>
                  <option value="5985073000001376358">Lambayeque</option>
                  <option value="5985073000001376359">Lima</option>
                  <option value="5985073000001376360">Loreto</option>
                  <option value="5985073000001376361">Madre de Dios</option>
                  <option value="5985073000001376362">Moquegua</option>
                  <option value="5985073000001376363">Pasco</option>
                  <option value="5985073000001376364">Piura</option>
                  <option value="5985073000001376365">Puno</option>
                  <option value="5985073000001376366">San Martín</option>
                  <option value="5985073000001376367">Tacna</option>
                  <option value="5985073000001376368">Tumbes</option>
                  <option value="5985073000001376369">Callao</option>
                </select>
                <input type="hidden" name="SingleLine8" placeholder="Departamento – Valor" class="depa_valor" value="">
                <input type="hidden" name="SingleLine9" placeholder="Departamento – Text" class="depa_txt" value="">
              </div>

              <input type="hidden" name="SingleLine1" value="UNW_Pregrado">
              <input type="hidden" name="Dropdown4" value="Activo">
              <input type="hidden" name="SingleLine2" value="Web Solicita Información">

              <div class="chekobli">
                <div class="w-checkbox box-checkbox cont_div_check" data-ix="mostrar-terminos" style="transition: all;">
                  <label class="div_check">
                    <input type="checkbox" id="checkbox-3" name="DecisionBox1" data-name="Checkbox 3"
                      class="validate[required]" checked="">
                    <div class="input_check"></div>
                  </label>
                  <span for="checkbox-5" class="text_terminos w-form-label">Acepto las <span
                      data-w-id="9b9a9e1a-875e-c69d-2476-688b3648123d" class="politicas">políticas de Protección de
                      Datos Personales</span></span>
                </div>
              </div>
              <div class="conten-btn-form w-embed">
                <!-- <span id="botonHomeInit">Enviar</span> -->
                <button type="submit" class="btn solido verde sp boton_envio_form btn_visible"
                  id="botonHomeInit">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal_terminos">
      <div class="contenido_modal_terminos">
        <div class="title_modal_close">
          <h4 class="h4_modal">POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES<br></h4><a href="#"
            class="close_modal-2 w-inline-block" data-ix="cerrarmodalterminos" style="transition: all;"><img
              src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/cerrar-blanco.svg" alt=""
              class="icon_close-2"></a>
        </div>
        <div class="info_modal_terminos">
          <p class="texto_terminos"><strong>Universidad Privada Norbert Wiener S.A. </strong>(en adelante, “<strong>LA
              UNIVERSIDAD</strong>”) tiene el compromiso de proteger su privacidad y decumplir las leyes sobre la
            protección y privacidad de los datos personales. La presente Política de Protección de Datos Personales (en
            adelante, la"Política") explica la forma en que <strong>LA UNIVERSIDAD</strong> almacenará y dará
            tratamiento a sus datos personales en nuestro banco de datos, motivo por el cual, es prioritario para LA
            UNIVERSIDAD contar con el consentimiento expreso de los postulantes y estudiantes (pregrado o posgrado) para
            el tratamiento de sus datos personales, para lo cual, luego de leer esta Política, <strong>EL
              TITULAR</strong> deberá hacer check en el recuadro de la APP y/o Web de <strong>LA UNIVERSIDAD</strong>
            donde se indica que ha leído, comprende y está de acuerdo conesta Política, otorgando su conformidad y
            <strong>AUTORIZANDO </strong>a <strong>LA UNIVERSIDAD</strong> para que realice el tratamiento de sus datos
            personales de conformidad con la Ley N° 29733 – Ley de Protección de Datos Personales y su reglamento el
            Decreto Supremo N°003-2013-JUS, conforme a las siguientes a las siguientes términos y condiciones:<br>‍<br>
            <strong>1. OBJETIVO.<br><br></strong>1.1. El objetivo de la presente políticaes la declaración y compromiso
            formal de <strong>LA UNIVERSIDAD</strong> en informar a <strong>EL TITULAR </strong>sobre las actividades
            y/o eventos promocionales, educativas, académicas y administrativas, a través de mensajes electrónicos
            personalizados o masivos para promover nuestros servicios y productos, así como prestar el servicio de
            telemercadeo a su dirección electrónica, así como información respecto a los diferentes programas académicos
            de pregrado, postgrado, computación e idiomas, eventos académicos, artísticos, culturales y de
            entretenimiento organizados por <strong>LA UNIVERSIDAD</strong>, para lo cual podrá utilizar vía Telefonía
            fija, telefonía celular, mensajería de texto, mensajes de WhatsApp, correo electrónico o cualquier otro
            mecanismo de comunicación que nos hayas brindado.<br><br>‍<strong>2. ALCANCE - </strong>La presente política
            es de aplicación para todas las páginas web y apps administradas por <strong>LA UNIVERSIDAD</strong> y estén
            al uso público.<br><br>‍<strong>3. REFERENCIAS NORMATIVAS.<br><br></strong>3.1. Ley N° 29733 – Ley de
            Protección de Datos Personales.3.2. D.S. N° 003-2013-JUS – Reglamento de la Ley N° 29733.<br><br>‍<strong>4.
              DE LOS PRINCIPIOS RECTORES. - </strong>En <strong>LA UNIVERSIDAD</strong> respetamos los principios de
            protección de datos personales.<br><br>4.1. <strong>Principio de legalidad</strong>, se rechaza la
            recopilación de los datos personales de EL TITULAR por medios ilegales y fraudulentos.<br><br>4.2.
            <strong>Principio de consentimiento</strong>, se obtendrá el consentimiento de EL TITULAR de manera libre,
            informado, expreso, inequívoco y previo al tratamiento de sus datos personales.<br><br>4.3.
            <strong>Principio de finalidad</strong>, los datos personales de nuestros usuarios se recopilarán para una
            finalidad determinada, explícita y lícita, y no se extenderá a otra finalidad que no haya sido la
            establecida de manera inequívoca como tal al momento de su recopilación.<br><br>4.4. <strong>Principio de
              proporcionalidad</strong>, todo tratamiento de datos personales de nuestros usuarios será adecuado,
            relevante y no excesivo a la finalidad para la que estos hubiesen sido recopilados.<br><br>4.5.
            <strong>Principio de calidad</strong>, los datos personales que vayan a ser tratados serán veraces, exactos
            y, en la medida de lo posible, actualizados, necesarios, pertinentes y adecuados respecto de la finalidad
            para la que fueron recopilados. Se conservarán de forma tal que se garantice su seguridad y solo por el
            tiempo necesario para cumplir con la finalidad del tratamiento.<br><br>4.6. <strong>Principio de
              seguridad</strong>, <strong>LA UNIVERSIDAD</strong> adopta las medidas técnicas, organizativas y legales
            necesarias para garantizar la seguridad y confidencialidad de los datos personales. LA UNIVERSIDAD cuenta
            con las medidas de seguridad apropiadas, y acordes con el tratamiento que se vaya a efectuar y con la
            categoría de datos personales de que se trate.<br><br>4.7. <strong>Principio de nivel de protección
              adecuado</strong>, <strong>LA UNIVERSIDAD</strong> garantiza el nivel adecuado de protección de los datos
            personales de sus usuarios para el flujo transfronterizo de datos personales, con un mínimo de protección
            equiparable a lo previsto por la Ley Nº29733 o por los estándares internacionales de la
            materia.<br><br><strong>5. DE LA DEFINICIÓN DE DATOS PERSONALES.<br><br></strong>5.1. De acuerdo con la ley,
            se define el término Datos Personales como “aquella información numérica, alfabética, gráfica, fotográfica,
            acústica, sobre hábitos personales, o de cualquier otro tipo concerniente a las personas naturales que las
            identifica o las hace identificables a través de medios que puedan ser razonablemente utilizados.” LA
            UNIVERSIDAD considera como datos personales, a toda aquella información que <strong>EL TITULAR</strong>
            ingrese voluntariamente a través de cualquiera de nuestros formularios en nuestros sitios web o la que se
            envía por correo electrónico.<br><br>‍<strong>6. BASE DE DATOS.<br><br></strong>6.1. Los datos de <strong>EL
              TITULAR</strong> serán almacenados en los bancos de datos personales de denominación “<strong>POSTULANTES
              – ADMISION</strong>”, inscrito con el código RNPDP-PJP Nº 17382, y “<strong>ALUMNOS</strong>, inscrito con
            el código RNPDP-PJP Nº 17382 expedidos y autorizados por la Dirección de Protección de Datos Personales del
            Ministeriode Justicia y Derechos Humanos, cuyo titular es <strong>LA UNIVERSIDAD</strong>, con domicilio en
            Av. Republica de ChileNro. 432 Urb. Santa Beatriz, Distrito de Jesús Maria.<br><br>6.2. Asimismo, se informa
            que los destinatarios de los datos personales serán las oficinas de Marketing, Admisión, Servicios
            Universitarios, y cualquier otra unidad académica o administrativa de la Universidad, la cual conservará los
            datos personales permanentemente o hasta que sean modificados dependiendo de la naturaleza de los mismos;
            con la finalidad de utilizarlos en gestiones académicas, institucionales, administrativas y comerciales, así
            como procesar y manejar información para el adecuado desarrollo de la prestación de servicios y cubrirlas
            necesidades de sus interesados.<br>‍<br>6.3. <strong>LA UNIVERSIDAD</strong> cancela los datos personales de
            sus bancos de datos cuando los mismos dejen de ser necesarios para las finalidades para las cuales fueron
            recopilados, cuando venza el plazo de 5 años para su tratamiento ocuando <strong>EL TITULAR</strong> revoque
            su consentimiento para el tratamiento de sus datos personales. Precisando que el plazo previo
            consentimiento<br><br>‍<strong>7. DE LAS REDES SOCIALES.<br><br>7</strong>.1. Las redes sociales de las que
            participan tanto LA UNIVERSIDAD como EL TITULAR cuentan con sus propias políticas de privacidad a las que
            deberán sujetarse todos <strong>EL TITULAR</strong> de tales redes. Por tal razón, le recomendamos
            revisarlas Políticas de Privacidad de las redes sociales para asegurarse encontrar sede acuerdo con éstas.
            Asimismo, <strong>LA UNIVERSIDAD</strong> se libera de toda responsabilidad que pueda ocasionar el
            incorrecto funcionamiento y/o el inadecuado uso de las redes sociales, la falsedad del contenido y la
            ilicitud de la forma en que éste fue obtenido, así como de los daños y perjuicios que se pudieran generar
            por las publicaciones en estas redes, siendo los únicos responsables EL Titular de la red social que hayan
            realizado tales acciones.<br><br>‍<strong>8. DE LAS FINALIDADES DEL TRATAMIENTO DELA
              INFORMACIÓN.<br><br></strong>8.1. De conformidad con la Ley N° 29733- Ley de Protección de Datos
            Personales y su Reglamento aprobado mediante D.S.003-2013-JUS, el interesado declara estar informado y con
            la aceptación de la presente política otorgando su consentimiento expreso para que los datos personales que
            facilite queden incorporados en el Banco de Datos Personales dePersonas Interesadas en <strong>LA
              UNIVERSIDAD </strong>y sean tratados por esta con la finalidad de absolver sus consultas y brindarles
            información publicitaria, dándoles usos que incluyen temas referidos a las actividades y/o eventos
            promocionales, educativas, académicas y administrativas, a través de mensajes electrónicos personalizados o
            masivos para promover nuestros servicios y productos. <strong>EL TITULAR</strong> autoriza a que <strong>LA
              UNIVERSIDAD</strong> mantenga sus datos personales en el banco de datos referido en tanto sean útiles para
            la finalidad y usos antes mencionados.<br><br>8.2. La protección de los datos personales de los menores es
            extremadamente importante. Por lo que la presente política ha sido redactada para que los menores de edad,
            entre 14 y 18 años, puedan entenderla. <strong>LA UNIVERSIDAD</strong> no recolecta datos personales
            relativos a menores de edad (0 -13 años) a través de su página web. En el caso que <strong>LA
              UNIVERSIDAD</strong> tenga conocimiento que los datos personales suministrados pertenecen a un menor de
            edad (0 -13 años) se adoptarán las medidas oportunas para eliminar los datos personales tan pronto como sea
            posible.<br><br>8.3. <strong>LAUNIVERSIDAD</strong> declara que el tratamiento de datos personales de
            <strong>EL TITULAR</strong>, no serán objeto de transferencia para otras entidades públicas o privadas
            nacionales o internacionales.<br><br>‍<strong>9. DE LA DECLARACIÓN DE PRIVACIDAD.<br><br></strong>9.1.
            <strong>LA UNIVERSIDAD</strong> no recopila datos personales sobre EL TITULAR, excepto cuando él mismo
            brinde información voluntariamente, al registrarse en alguno de los sitios web o cuando envíe un correo
            electrónico u otra comunicación dirigida a LA UNIVERSIDAD.<br>‍<strong>LA UNIVERSIDAD</strong> no procesará
            ni transferirá los datos personales sinprevio consentimiento de <strong>EL
              TITULAR</strong>.<br><br>‍<strong>10. DE LA SEGURIDAD Y CONFIDENCIALIDADDE LOS
              DATOS.<br><br></strong>10.1. <strong>LA UNIVERSIDAD</strong> se compromete a cumplir con los estándares de
            seguridad y confidencialidad necesarios para asegurar la confiabilidad, integridad y disponibilidad de la
            información recopilada de los usuarios. EL TITULAR es el único responsable de suministrar sus datos
            personales a <strong>LA UNIVERSIDAD</strong>.<br><br>10.2 LA UNIVERSIDAD ha adoptado las medidas de
            seguridad exigidas por la ley y se compromete a tratar los datos personales como información reservada a fin
            de prevenir y evitar el acceso o difusión no autorizada y asegurar el uso apropiado de la información. LA
            UNIVERSIDAD no se hace responsable sobre el riesgo de sustracción de información de datos personales que
            pueda ser realizada por terceros, cuando <strong>ELTITULAR</strong> realiza la transferencia de información
            a los servidores en los que se encuentra alojada la página web a través de su computadora o dispositivo
            móvil.<br><br>‍<strong>11. DE LOS DERECHOS DE EL TITULAR (DerechosARCO).<br><br></strong>11.1. De
            conformidad con la Ley, EL TITULAR podrá solicitar, en cualquier momento, sus derechos de acceso,
            actualización, rectificación, inclusión, oposición y supresión o cancelación de datos personales al
            siguiente correo electrónico <strong>datos.personales@uwiener.edu.pe</strong>, en el cual se tramitara la
            modificación que desees el titular, o presentándolo físicamente en la oficina ubicada a la dirección Av.
            República de Chile N°432-Jesús María, debiendo adjuntar en ambos casos una copia de su
            DNI.<br><br>‍<strong>12. DEL CONSENTIMIENTO DEL TITULAR YACEPTACIÓN DE LOS TÉRMINOS.<br><br></strong>12.1.
            Esta declaración de privacidad y confidencialidad descrita en la presente política constituye un acuerdo
            válido entre <strong>EL TITULAR</strong> y LA UNIVERSIDAD, que confirma el conocimiento, entendimiento y
            aceptación por parte de <strong>EL TITULAR</strong> de lo expuesto con los fines expresados. En caso no
            estar de acuerdo, <strong>EL TITULAR</strong> no deberá proporcionar ninguna información personal, ni
            utilizar el servicio ocualquier información relacionada con los sitios web de <strong>LA
              UNIVERSIDAD</strong>.<br><br>12.2 En consecuencia, EL TITULAR de los datos personales manifiesta el
            consentimiento informado, previo, libre, expreso, y por tiempo indefinido, para que LA UNIVERSIDAD pueda
            hacer uso de los datos personales que les proporcione, así como de la información que se derive de su uso y
            de cualquier información de acceso público.<br><br>12.3 Con la aceptación digital y trazable de la presente
            Política, ya sea mediante clic, toque, pinchado,“touch”, “pad” u otros mecanismos similares y/o utilizar la
            APP y Web de LA UNIVERSIDAD, usted nos autoriza a almacenar sus datos personales en el banco de datos
            personales de titularidadde <strong>LA UNIVERSIDAD</strong>, el cual es administrado por <strong>LA
              UNIVERSIDAD</strong>; y, a efectuar el tratamiento de sus datos personales, de conformidad a lo
            establecido en la Ley Nº 29733 y su reglamento. Si usted no está conforme con esta Política, por favor
            absténgase de aceptarla y/o utilizar este sitio weby/o proporcionar sus datos personales <strong>a LA
              UNIVERSIDAD</strong>.<br><br>‍<strong>13. LIMITACIÓN DE RESPONSABILIDAD E INDEMNIDAD<br><br></strong>13.1.
            <strong>LA UNIVERSIDAD</strong> no es responsable por el registro de datos personales de un menor, si al
            momento del recojo de datos, éste consignó una fecha de nacimientoo edad incorrecta, que impida advertir que
            es menor de edad. Tienes derecho a acceder a los datos personales que tenemos registrados y a los detalles
            del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos
            cuando consideres que no se requieren para alguna de las finalidades señaladas en el presente Aviso, estén
            siendo utilizados para finalidades no consentidas o haya finalizado la relación contractual o de servicio, o
            bien, oponerte al tratamiento de los mismos para fines específicos. Para hacerlo, deberás dirigir tu
            solicitud a la dirección <strong>Av. República de Chile N°432- Jesús María</strong>. La respuesta a su
            solicitud se realizará dentro del plazo establecido por Ley.<br><br>13.2. <strong>LA UNIVERSIDAD</strong> no
            asumirá responsabilidad alguna por cualquier hecho determinante de terceros, sea éste de índole técnico,
            físico o producto de un caso fortuito o fuerza mayor que imposibilite, retrase, elimine o capture
            ilegalmente datos personales, demore la ejecución o no permita el acceso y correcto funcionamiento de la
            aplicación.<br><br>13.3. <strong>LA UNIVERSIDAD</strong> no garantiza que la aplicación esté libre de
            errores, ni que funcione siempre sin interrupciones, retrasos o imperfecciones.<br><br>13.4. <strong>LA
              UNIVERSIDAD</strong> no asume responsabilidad de los posibles daños o perjuicios através de las
            funcionalidades brindadas en <strong>APP Y/O WEB </strong>de <strong>LA UNIVERSIDAD</strong> que se puedan
            derivar de interferencias, omisiones, interrupciones, virus informáticos, averías o desconexiones en el
            funcionamiento operativo del sistema electrónico, así como también de daños que puedan ser causados por
            terceras personas mediante intromisiones ilegítimas fuera del control de <strong>LA
              UNIVERSIDAD</strong>.<br><br>13.5. <strong>LA UNIVERSIDAD</strong> no asume responsabilidad por el posible
            retraso, falla en el rendimiento o la interrupción en el funcionamiento de <strong>APP Y/O WEB</strong> de
            <strong>LA UNIVERSIDAD</strong> que pueda resultar directa o indirectamente de cualquier causa o
            circunstancia más allá de su control razonable, incluyendo, pero sin limitarse a fallas en los equipos o las
            líneas de comunicación electrónica o mecánica, robo, delitos informáticos de origen internacional y/o local,
            errores del operador, clima severo, terremotos o desastres naturales, huelgas u otros problemas laborales,
            guerras, o restricciones gubernamentales.<br><br>13.6. <strong>EL TITULAR</strong> asumen la responsabilidad
            sobre la veracidad, exactitud y vigencia de los datos personales que nos proporcionan, LA UNIVERSIDAD no
            asume la responsabilidad de cualquier daño o perjuicio que pudiera producirse como resultado del
            incumplimiento de tal deber.<br><br>‍<strong>14. MODIFICACIONES DE LA POLÍTICA<br><br>‍</strong>14.1
            <strong>LA UNVIERSIDAD</strong> podrá modificar en cualquier momento la presente Política. Cualquier cambio
            será efectivo apenas sea publicado en la APP Y/O WEB teniendo usted el derecho de solicitar el cese del
            tratamiento de sus datos personales o la supresión de los mismos en caso de no encontrarse de acuerdo con
            las modificaciones que se pudieran introducir a la Política.<br><br>‍<strong>15. DE LA
              CONFORMIDAD.<br><br></strong>15.1 El TITULAR declara haber recibido todala información necesaria para el
            ejercicio libre y voluntario de los derechos a la protección de los datos personales.<a
              href="https://www.uwiener.edu.pe/#"><br></a><br>
          </p>
          <a href="#" class="btn-6 modal_ter w-button bnt_pop_tyc" data-ix="cerrarmodalterminos"
            style="transition: all;">Aceptar</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
