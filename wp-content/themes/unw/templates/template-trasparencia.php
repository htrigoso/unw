<?php
/**
 * Template Name: Trasparencia
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
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="https://www.uwiener.edu.pe/wp-content/uploads/2020/09/libro_reclamaciones.jpg"
        srcset="https://www.uwiener.edu.pe/wp-content/uploads/2020/09/libro_reclamaciones-p-500.jpeg 500w, https://www.uwiener.edu.pe/wp-content/uploads/2020/09/libro_reclamaciones.jpg 1920w"
        sizes="100vw" alt="" class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras"><strong>Transparencia</strong><br></h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="#" class="link miga">Inicio /</a><a href="transparencia.html"
              aria-current="page" class="link miga">Transparencia</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="section">
              <div class="clase_para_wordpress transparencia">

                <h2 class="wp-block-heading">Presentación</h2>



                <p>La Universidad Privada Norbert Wiener presenta la información correspondiente, en cumplimiento de la
                  normatividad que regula el sistema universitario actual, según lo indicado en el Formato de
                  Licenciamiento B55 de la Superintendencia Nacional de Educación Superior Universitaria (Sunedu). Se
                  cumple a cabalidad con lo exigido por la Ley Universitaria 30220 y la Sunedu, asumiendo el compromiso
                  de respeto al Estado de derecho, las normas y la Constitución Política de nuestro país.</p>
              </div>
            </div>
            <div class="section">
              <div class="content_section">
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">1. Misión y visión.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="https://www.uwiener.edu.pe/nosotros/" rel="noopener noreferrer" target="_blank">1.
                            Misión y visión</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">2. Reglamentos institucionales.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Estatuto-wiener.pdf"
                            rel="noopener noreferrer" target="_blank">2.1 Estatuto</a></li>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/PEI-2024-2028-min.pdf"
                            rel="noopener noreferrer" target="_blank">2.2 Plan Estratégico Institucional 2024-2028.</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Resolucion-PE-044-2025-RPE-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2.3 Reglamento General&nbsp;</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/08/UPNW-ADM-REG-001-Reglamento-de-Admision-V07.pdf"
                            rel="noopener noreferrer" target="_blank">2.4 Reglamento de Admisión.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Reglamento_Academico_General_V4_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2.5 Reglamento Académico General V.4-2019 y su
                            modificatoria.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/UPNW-GLE-REG-002_Defensoria_Universitaria_V03.pdf"
                            rel="noopener noreferrer" target="_blank">2.6 Reglamento de la Defensoría Universitaria.</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Resolucion-PE-029-2025-RPE-UPNW-2-2.pdf"
                            rel="noopener noreferrer" target="_blank">2.7 Reglamento del Programa de Becas.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/reglamento_Academico_General-Escuela_Posgrado.pdf"
                            rel="noopener noreferrer" target="_blank">2.8 Reglamento Académico General de la Escuela de
                            Posgrado 2016.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/UPNW-BES-REG-002-Reglamento-de-promocion-de-la-practica-deportiva.pdf"
                            rel="noopener noreferrer" target="_blank">2.9 Reglamento de Promoción de la práctica
                            deportiva.</a></li>
                        <li>2.10 Grados y Títulos</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/rpe-024-2025-rpe-upnw-reglamento-de-tesis.pdf"
                            rel="noopener noreferrer" target="_blank">Reglamento de elaboración de tesis para optar por
                            el Título Profesional, Título de Especialista y Grado Académico de Maestro.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/rr-n°-066-2025-r-upnw-lineamientos-trabajo-academico.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo
                            Académico para Optar el Título de Especialista.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/rr-n°-066-2025-r-upnw-lineamientos-trabajo-de-investigacion.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo de
                            Investigación para Optar el Grado Académico de Maestro.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Reglamento-de-Grados-y-Titulos-V5.pdf"
                            rel="noopener noreferrer" target="_blank">Reglamento de Grados y Títulos.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/UPNW-GRA-PRC-008-V.05-Tramite_Solicitud-Obtenciขn-grado-acad-y-titulo.pdf"
                            rel="noopener noreferrer" target="_blank">Procedimiento de trámite para la obtención de
                            grado académico y/o título profesional.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/09/upnw-gra-prc-025-procedimiento-de-obtencion-de-grado-o-titulo-v06.pdf"
                            rel="noopener noreferrer" target="_blank">Procedimiento para la obtención del Grado
                            Académico / Título Profesional.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/UPNW-GTI-PRC-001_elab_sust_trab_inv.pdf"
                            rel="noopener noreferrer" target="_blank">Elaboración de Trabajo Académico y
                            sustentación</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/Procedimiento-para-la-revalidación-de-grados-y-títulos-obtenidos-en-el-extranjero.pdf"
                            rel="noopener noreferrer" target="_blank">Procedimiento de trámite para la revalidación de
                            grados y títulos obtenidos en el extranjero.</a></li>
                        <li>2.11 Reglamento del Tribunal de Honor V.1-2019.</li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/UPNW-GCI-REG-001-Reglamento-de-Biblioteca-V04.pdf"
                            rel="noopener noreferrer" target="_blank">2.12 Reglamento de la Biblioteca.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/Reglamento-del-Docente-V.04.pdf"
                            rel="noopener noreferrer" target="_blank">2.13 Reglamento del docente.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/09/reglamento_regimen_docentes_ordinarios_V1_2019-1.pdf"
                            rel="noopener noreferrer" target="_blank">2.14 Reglamento del régimen de docentes ordinarios
                            V.1-2019.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/PGC-2024-2028-publicacion-v2.pdf"
                            rel="noopener noreferrer" target="_blank">2.15 Plan de Gestión de Calidad de la UPNW
                            2024-2028.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/UPNW-EES-POL-002_V.02Politica-de-Responsabilidad-Social.pdf"
                            rel="noopener noreferrer" target="_blank">2.16 Política de Responsabilidad Social.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Política_de_Protección_Ambiental_v.02_2020.pdf"
                            rel="noopener noreferrer" target="_blank">2.17 Política de protección ambiental
                            V.02_2020.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/UPNW-BES-POL-003-Atencion-a-estudiantes-con-discapacidad.pdf"
                            rel="noopener noreferrer" target="_blank">2.18 Política para atención a estudiantes con
                            discapacidad</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/Reglamento-Hostigamiento-Sexual-UNW-V3.pdf"
                            rel="noopener noreferrer" target="_blank">2.19 Reglamento de Prevención e Intervención en
                            casos de hostigamiento sexual.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/09/UPNW-EES-REG-002-Reglamento-de-disciplina-del-estudiante-V3.pdf"
                            rel="noopener noreferrer" target="_blank">2.20. Reglamento de Disciplina del Estudiante.</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/REGLAMENTO-DE-PPP-DE-LA-FCS.pdf"
                            rel="noopener noreferrer" target="_blank">2.21. Reglamento de Prácticas Preprofesionales de
                            la Facultad de Ciencias de la Salud.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Resolucion-PE-052-2025-RPE-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2.22. Política de pagos de estudiantes -
                            Pregrado</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/UPNW-CCO-POL-003-Pol%C3%ADtica-de-pagos-de-estudiantes-posgrado.pdf"
                            rel="noopener noreferrer" target="_blank">2.23. Política de pagos de estudiantes -
                            Posgrado</a></li>
                        <li>2.24 Actas de Directorio</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/actas-de-sesiones-de-directorio-2020.pdf"
                            rel="noopener noreferrer" target="_blank">2020</a></li>
                        <li class="ql-indent-1"><a
                            href="/wp-content/uploads/2025/03/actas-de-sesiones-de-directorio-2021-unw.pdf"
                            rel="noopener noreferrer" target="_blank">2021</a></li>
                        <li class="ql-indent-1"><a
                            href="/wp-content/uploads/2025/03/actas-de-sesiones-de-directorio-2022-unw.pdf"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                        <li class="ql-indent-1"><a
                            href="/wp-content/uploads/2025/03/actas-de-sesiones-de-directorio-2023-unw.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="/wp-content/uploads/2025/03/actas-de-sesiones-de-directorio-2024-unw.pdf"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="/wp-content/uploads/2025/03/actas-de-sesiones-de-directorio-2025-unw.pdf"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6542d2fb3586ef1391708f_RR_753-2016-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2.25 Resolución N° 753-2016-R-UPNW Aprobación de
                            carreras profesionales.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/2.27-Resoluciขn-N072-2023-R-UPNW-Requisitos-idiom-ticos-para-la-obtenciขn-del-grado-de-bachiller.pdf"
                            rel="noopener noreferrer" target="_blank">2.26 Resolución N° 072-2023-R-UPNW Requisitos
                            idiomáticos para la obtención del grado de bachiller.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f654322eb4fc774dac72f52_Resolucion_613-2018-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2.27 Resolución N° 613-2018-R-UPNW Requisitos
                            idiomáticos para la obtención del grado académico en la Escuela de Posgrado.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/UPNW-GAC-REG-003-Reglamento-de-Estudios-Pregrado-V07-1.pdf"
                            rel="noopener noreferrer" target="_blank">2.28 Reglamento de Estudios de Pregrado.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/RGG-093-Reglamento-de-repositorio-universitario.pdf"
                            rel="noopener noreferrer" target="_blank">2.29 Reglamento de Repositorio
                            Universitario&nbsp;</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/UPNW-GAC-PRC-020-V02-PROCEDIMIENTO-PARA-OTORGAMIENTO-DE-AUSPICIOS-Y-CRDITOS-1.pdf"
                            rel="noopener noreferrer" target="_blank">2.30 Procedimiento para otorgamiento de auspicios
                            y/o créditos académicos</a></li>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2023/08/RR-129-2023-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2.31 Resolución N° 129-2023-R-UPNW Que precisa el
                            mecanismo de evaluación para los programas de salud.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/UPNW-PRE-GRA-PRC-010-Conv_Pre_V22.pdf"
                            rel="noopener noreferrer" target="_blank">2.32 Procedimiento de Convalidación de asignaturas
                            Pregrado.</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">3. Información financiera.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>3.1 Estados financieros</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/Universidad-Privada-Norbert-Wiener-S.A.-_2023_EY-3.pdf"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Universidad-Privada-Norbert-Wiener-2022.pdf"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Universidad-Privada-Norbert-Wiener-Auditado-2021.pdf"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/EEFF-Universidad-Norbert-Wiener-31.12.2020.pdf"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/EstadoFinanciero2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/EstadoFinanciero2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/EstadoFinanciero2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/estadoFinanciero2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>3.2 Donaciones otorgadas</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Donaciones_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Donaciones_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Donaciones_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>3.3 Comunicado de Reinversión</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Comunicado_reinversion_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/COMUNICADO_DE_REINVERSION_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/COMUNICADO_DE_REINVERSION.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">4. Pensiones y tarifas.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/07/Resolucion-GG-035-2023-VF-1.pdf"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE GERENCIA GENERAL N°
                            035-2023-GG-UPNW</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/Lista-de-Precios-Pregrado-26-11-2024.pdf"
                            rel="noopener noreferrer" target="_blank">4.1 Lista de Precios Pregrado.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/LISTA-DE-PRECIOS-POSGRADO-V5_08042025_Transparencia.pdf"
                            rel="noopener noreferrer" target="_blank">4.2 Lista de Precios Posgrado.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Lista_Precios_Centro_Idiomas.pdf"
                            rel="noopener noreferrer" target="_blank">4.4 Lista de Precios del Centro de Idiomas.</a>
                        </li>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ista_Precios_PreWiener.pdf"
                            rel="noopener noreferrer" target="_blank">4.5 Lista de Precios de Pre-Wiener.</a></li>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/TUPA_VF_21032025.pdf"
                            rel="noopener noreferrer" target="_blank">4.6 TUPA</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/upnw-cco-ftc-003-medios-de-pagos-autorizados.pdf"
                            rel="noopener noreferrer" target="_blank">4.7 Canales de pagos autorizados</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">5. Programa de becas.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/COMUNICADO-PROGRAMA-DE-BECAS.pdf"
                            rel="noopener noreferrer" target="_blank">5.1 Comunicado Sobre el Programa de Becas.</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/COMUNICADO-CREDITOS-EDUCATIVOS.pdf"
                            rel="noopener noreferrer" target="_blank">5.2 Comunicados de Créditos Educativos.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/COMUNICADO-BECAS-POSGRADO-SEGUNDAS-ESPECIALIDADES.pdf"
                            rel="noopener noreferrer" target="_blank">5.3 Comunicado de Becas Posgrado y Segundas
                            Especialidades.</a></li>
                        <li>5.4 Cuadro de Becados por Beneficio y Escuela.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Total-Subvenciones-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Cuadro-de-subvenciones-2024.pdf"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Cuadro-de-subvenciones-2023.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Cuadro-de-subvenciones-2022.pdf"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">6. Información académica.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>6.1 Planes curriculares.</li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2019 - Modalidad Presencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/RR-018-2023-R-UPNW-Aprobación-de-actualización-de-planes-curriculares-2019-modalidad-presencial-rev..pdf"
                            rel="noopener noreferrer" target="_blank">RR 018-2023-R-UPNW Aprobación de actualización de
                            planes curriculares 2019 modalidad presencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/farmacia-y-bioquimica-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/enfermeria-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/obtetricia-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/odontologia-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Tecnologia_Medica_en_Laboratorio_Clinico_y_Anatomia_Patologica.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/terapia-fisica-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/psicologia-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/nutricion-humana-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/MH1-PLAN-2019-REVISADO-1_compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/administracion_en_turismo_y_hoteleria.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/administracion-y-direccion-de-empresas-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/administracion-y-marketing-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/administracion-y-negocios-internacionales-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ingenieria-sistemas-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ingenieria-industrial-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/derecho-y-ciencia-politica-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/contabilidad-y-auditoria-malla-curricular.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado (Base Plan 2019) - Modalidad Semipresencial
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/RR-022-2023-R-UPNW-Aprobaci%C3%B3n-de-planes-curriculares-Base-plan-2019-modalidad-semipresencial.pdf"
                            rel="noopener noreferrer" target="_blank">RR 022-2023-R-UPNW Aprobación de planes
                            curriculares (Base plan 2019) Modalidad Semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/P63-FARMACIA-Y-BIOQUIMICA-SEMIPRESENCIAL-Y-ADENDA.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2021 - Modalidad Presencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/RR-074-2023-R-UPNW-min.pdf"
                            rel="noopener noreferrer" target="_blank">RR 074-2023-R-UPNW Aprobación de actualización de
                            planes curriculares 2021 modalidad presencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P02-ENFERMERIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P03-OBSTETRICIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P04-ODONTOLOGIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P05-TM-LABORATORIO-CLINICO-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P06-TM-TERAPIA-FISICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P07-PSICOLOGIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/MH2-PLAN-2021-REVISADO-1.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P10-AD.TURISMO-Y-HOTELERIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P11-AD.DIRECCION-DE-EMPRESAS-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P13-AD.NEGOCIOS-INTERNACIONALES-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P14-ING.-SISTEMAS-E-INFORMATICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P15-ING.INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P16-DERECHO-Y-CIENCIA-POLITICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P17-CONTABILIDAD-Y-AUDITORIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P08-NUTRICION-Y-DIETETICA-ADENDA-5.06.-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Nutrición y Dietética</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2022 (Base plan 2021) - Modalidad
                          Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/RR-075-2023-R-UPNW-min.pdf"
                            rel="noopener noreferrer" target="_blank">RR 075-2023-R-UPNW Aprobación de actualización de
                            planes curriculares 2022 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P64-ENFERMERIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P65-OBSTETRICIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P66-ODONTOLOGIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P67-TM-LABORATORIO-CLINICO-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P68-TM-TERAPIA-FISICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P69-PSICOLOGIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P71-AD.TURISMO-Y-HOTELERIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P72-AD.DIRECCION-DE-EMPRESAS-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P74-AD.NEGOCIOS-INTERNACIONALES-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P75-ING.-SISTEMAS-E-INFORMATICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P76-ING.INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P77-DERECHO-Y-CIENCIA-POLITICA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P78-CONTABILIDAD-Y-AUDITORIA-ADENDA-5.06-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/P70-NUTRICION-Y-DIETETICA-ADENDA-6.06.-min.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2022 (Base plan 2021) - Modalidad a
                          Distancia</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-208-2022-R-UPNW-2.pdf"
                            rel="noopener noreferrer" target="_blank">RR 208-2022-R-UPNW Aprobación de planes
                            curriculares 2022 modalidad a distancia.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P79-PSICOLOGIA_A-DISTANCIA-rev._compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P80-ADM.-TURISMO-Y-HOTELERIA_A-DISTANCIA-rev-1.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P81-ADM.-Y-DIRECCION-DE-EMPRESAS-DIRECCION_-A-DISTANCIA_compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P83-ADM.-NEGOCIOS-INTERNACIONALES_A-DISTANCIA_Rev._compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P84-INGENIERIA-DE-SISTEMAS-E-INFORMATICA_A-DISTANCIA-rev._compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P85-INGENIERIA-INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL_A-DISTANCIA-rev._compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P86-CONTABILIDAD-Y-AUDITORIA_A-DISTANCIA-rev._compressed.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-226-2022-R-UPNW_compressed-min.pdf"
                            rel="noopener noreferrer" target="_blank">RR 226-2022-R-UPNW Aprobación de planes
                            curriculares 2022 modalidad a distancia.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/P82-DERECHO-Y-CIENCIA-POLITICA-A-DISTANCIA.pdf"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2024 - Modalidad Presencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/10/RR-N-148-2024-R-UPNWvf.pdf"
                            rel="noopener noreferrer" target="_blank">RR 148-2024-R-UPNW Aprobación de planes
                            curriculares</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-170-2023-R-UPNW-min.pdf"
                            rel="noopener noreferrer" target="_blank">RR 170-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad presencial.</a></li>
                        <li class="ql-indent-2"><a href="/wp-content/uploads/2025/04/rr-n-014-2025-r-upnw.pdf"
                            rel="noopener noreferrer" target="_blank">RR 014-2025-R-UPNW Actualización de planes
                            curriculares 2024</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Arquitectura-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Arquitectura</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ingenieria-Civil-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Civil</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Comunicacion-en-Medios-Digitales-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Comunicación en medios
                            digitales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Farmacia-y-Bioquimica.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Obstetricia.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Odontologia.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Laboratorio-Clinico-y-Anatomia-Patologica.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Terapia-Fisica-y-Rehabilitacion.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Psicologia.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Nutricion-y-Dietetica.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Medicina-Humana.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-en-Turismo-y-Hoteleria-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Direccion-de-Empresas-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Marketing-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Negocios-Internacionales-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ingenieria-de-Sistemas-e-Informatica-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ingenieria-Industrial-y-de-Gestion-Empresarial-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Derecho-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Contabilidad-y-Auditoria-P.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Contabilidad y Auditoría</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2024 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/RR-178-2023-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">RR 178-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/RR-179-2023-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">RR 179-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a href="/wp-content/uploads/2025/04/rr-n-014-2025-r-upnw.pdf"
                            rel="noopener noreferrer" target="_blank">RR 014-2025-R-UPNW Actualización de planes
                            curriculares 2024</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-en-Turismo-y-Hoteleria-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Direccion-de-Empresas-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Marketing-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Administracion-y-Negocios-Internacionales-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ingenieria-de-Sistemas-e-Informatica-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ingenieria-Industrial-y-de-Gestion-Empresarial-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Derecho-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Contabilidad-y-Auditoria-SP.pdf"
                            rel="noopener noreferrer" target="_blank">Programa académico de Contabilidad y Auditoría</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2019 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Gestion_Publica_y_Gobernabilidad.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Docencia_Universitaria.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Gestion_en_Salud.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ciencia_Criminalistica.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/ciencias_de_Enfermeria__Gerencia_de_los_Cuidados_de_Enfermeria.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención en
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Salud_Publica_2019.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2022 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/RR-209-2022-R-UPNW-1.pdf"
                            rel="noopener noreferrer" target="_blank">RR N° 209 - 2022 - R - UPNW Aprobación de
                            actualización de planes curriculares 2022 modalidad semipresencial</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P31-Maestr%C3%ADa-en-Ciencia-Criminal%C3%ADstica..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P32-Maestr%C3%ADa-en-Salud-P%C3%BAblica..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P34-Maestr%C3%ADa-en-Ciencias-de-Enfermer%C3%ADa-con-Menci%C3%B3n-en-Gerencia-de-los-Cuidado-de-Enfermer%C3%ADa..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención de
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P40-Maestr%C3%ADa-en-Docencia-Universitaria..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P46-Maestr%C3%ADa-de-Gesti%C3%B3n-en-Salud..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P48-Maestr%C3%ADa-en-Gesti%C3%B3n-P%C3%BAblica-y-Gobernabilidad..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2022 - Modalidad a Distancia</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/RR-210-2022-R-UPNW-1.pdf"
                            rel="noopener noreferrer" target="_blank">RR N° 210 - 2022 - R - UPNW Aprobación de
                            actualización de planes curriculares 2022 modalidad a distancia</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P87-Maestr%C3%ADa-en-Gesti%C3%B3n-P%C3%BAblica-y-Gobernabilidad.-1.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P88-Maestr%C3%ADa-en-Docencia-Universitaria.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P89-Maestr%C3%ADa-de-Gesti%C3%B3n-en-Salud.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P90-Maestr%C3%ADa-en-Ciencia-Criminal%C3%ADstica.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P91-Maestr%C3%ADa-en-Ciencias-de-Enfermer%C3%ADa-con-Menci%C3%B3n-e.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención de
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/P92-Maestr%C3%ADa-en-Salud-P%C3%BAblica..pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-1"><span style="color: rgb(51, 51, 51);">Planes curriculares Maestría -
                            Modalidad a Distancia</span></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/03/Resolucion-N°017-2024-R-UPNW-aprobacion-MBA.pdf"
                            rel="noopener noreferrer" target="_blank">RR Nº 017 - 2024 R - UPNW Aprobación de
                            actualización de planes curriculares, programas de posgrado 2024 modalidad a distancia</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/03/P94-MAESTRIA-ADMINISTRACION-DE-NEGOCIOS.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Administración de Negocios - MBA</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Plan_curricular_MBA_Salud.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Administrativa de la Salud -
                            MBA</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/RR-N-149-2024-R-UPNWvf.pdf"
                            rel="noopener noreferrer" target="_blank">Maestría en Derecho Procesal Penal</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad Presencial</li>
                        <li class="ql-indent-2">Carrera Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-03-se-en-farmacia-clinica-y-atencion-farmaceutica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-53-se-en-farmacia-hospitalaria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-52-se-en-asuntos-regulatorios-en-el-sector-farmaceutico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Asuntos Regulatorios en el
                            Sector Farmacéutico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-54-se-en-soporte-nutricional-farmacologico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Soporte Nutricional
                            Farmacológico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Enfermería</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-cuidado-enfermero-en-paciente-clinico-quirurgico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Paciente Clínico Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-cuidado-enfermero-en-neonatologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Neonatología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-salud-familiar-y-comunitaria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud
                            Familiar y Comunitaria</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-salud-mental-y-psiquiatria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud Mental
                            y Psiquiatría</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-cuidado-enfermero-en-emergencias-y-desastres.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Emergencias y Desastres</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-salud-ocupacional.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud
                            Ocupacional</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-cuidado-enfermero-en-cardiologia-y-cardiovascular.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Cardiología y Cardiovascular</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-gestion-de-servicios-de-salud-y-enfermeria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Servicios de
                            Salud y Enfermería</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-gestion-en-central-de-esterilizacion.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Central de
                            Esterilización</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-oncologica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Oncológica</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-cuidados-intensivos.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-cuidado-enfermero-en-geriatria-y-gerontologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Geriatría y Gerontología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-centro-quirurgico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Centro
                            Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-cuidados-intensivos-neonatales.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos Neonatales</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-nefrologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en
                            Nefrología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-cuidados-quirurgicos-mencion-en-tratamiento-avanzado-en-heridas-y-ostomias.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Quirúrgicos: Mención en Tratamiento Avanzado en Heridas y Ostomías</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-en-salud-y-desarrollo-integral-infantil.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud y
                            Desarrollo Integral Infantil: Control de Crecimiento y Desarrollo e Inmunizaciones</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-enfermeria-pediatrica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-56-se-en-monitoreo-fetal.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Psicoprofilaxis_Obstetrica_y_Estimulacion_Prenatal.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoprofilaxis Obstétrica
                            y Estimulación Pre Natal</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-60-se-en-riesgo-obstetrico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo Obstétrico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Odontología</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Endodoncia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Endodoncia</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Ortodoncia-y-Ortopedia-Maxilar.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Ortodoncia y Ortopedia
                            Maxilar</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Rehabilitacion-Oral.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Rehabilitación Oral</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Restauradora-y-Estetica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Odontología Restauradora y
                            Estética</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Odontopediatria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Odontopediatría</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/SEG-138-SEGUNDA-ESPECIALIDAD-EN-PERIODONCIA-E-IMPLANTOLOGIA-ORAL-PRESENCIAL-rev.-05.03.24.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Periodoncia e
                            Implantología oral</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/SEG-139-SEGUNDA-ESPECIALIDAD-EN-RADIOLOGIA-BUCAL-Y-MAXILOFACIAL-PRESENCIAL-rev.-05.03.24.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Radiología bucal y
                            Maxilofacial</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Terapia Física y
                          Rehabilitación</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-fisioterapia-cardiorespiratoria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia
                            Cardiorrespiratoria</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-fisioterapia-en-el-adulto-mayor.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en el Adulto
                            Mayor</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-neurorrehabilitacion.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en
                            Neurorrehabilitación</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/seg-en-terapia-manual-ortopedica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Terapia Manual
                            Ortopédica</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-10-se-en-nutricion-clinica-con-mencion-en-nutricion-oncologica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            mención Nutrición Oncológica</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-08-se-en-nutricion-clinica-con-mencion-en-nutricion-deportiva.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Deportiva</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-09-se-en-nutricionclinica-con-mencion-en-nutricion-renal.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Renal</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Hemoterapia_y_Banco_de_Sangre_web.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hemoterapia y Banco de
                            Sangre</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Citolog%C3%ADa.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Citología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Hematolog%C3%ADa.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hematología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Historecnolog%C3%ADa.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Histotécnología</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad Semipresencial</li>
                        <li class="ql-indent-2">Carrera Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-129-se-en-farmacia-clinica-y-atencion-farmaceutica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-130-se-en-farmacia-hospitalaria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Enfermería</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/ABSTRA1.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Paciente Clínico Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Cuidado-Enfermero-en-Neonatologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Neonatología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Salud-Familiar-y-Comunitaria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud
                            Familiar y Comunitaria</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Salud-Mental-y-Psiquiatria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud Mental
                            y Psiquiatría</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Cuidado-Enfermero-en-Emergencias-y-Desastres.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Emergencias y Desastres</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Salud-Ocupacional.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud
                            Ocupacional</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/ABSTRA2.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Cardiología y Cardiovascular</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Gestion-de-Servicios-de-Salud-y-Enfermeria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Servicios de
                            Salud y Enfermería</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Gestion-en-Central-de-Esterilizacion.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Central de
                            Esterilización</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-Oncologica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Oncológica</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Cuidados-Intensivos.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Cuidado-Enfermero-en-Geriatria-y-Gerontologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Geriatría y Gerontología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Centro-Quirurgico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Centro
                            Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Cuidados-Intensivos-Neonatales.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos Neonatales</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-en-Nefrologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en
                            Nefrología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/ABF0E71.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Quirúrgicos: Mención en Tratamiento Avanzado en Heridas y Ostomías</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/AB67A11.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud y
                            Desarrollo Integral Infantil: Control de Crecimiento y Desarrollo e Inmunizaciones</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Enfermeria-Pediatrica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-119-se-en-monitoreo-fetal-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-120-se-en-psicoprofilaxis-obstetrica-y-estimulacion-pre-natal-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoprofilaxis Obstétrica
                            y Estimulación Pre Natal</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-121-se-en-riesgo-obstetrico-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo Obstétrico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-133-se-en-salud-sexual-y-reproductiva-del-escolar-y-adolescente-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Salud Sexual y
                            Reproductiva del Escolar y Adolescente</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-134-se-en-prevencion-de-cancer-ginecologico-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Prevención de Cáncer
                            Ginecológico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Odontología</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-125-se-en-endodoncia-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Endodoncia</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-122-se-en-ortodoncia-y-ortopedia-maxilar-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Ortodoncia y Ortopedia
                            Maxilar</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-123-se-de-rehabilitacion-oral-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Rehabilitación Oral</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-126-se-en-odontologia-restauradora-y-estetica-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Odontología Restauradora y
                            Estética</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-124-se-en-odontopediatria-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Odontopediatría</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Terapia Física y
                          Rehabilitación</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Fisioterapia-Cardiorrespiratoria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia
                            Cardiorrespiratoria</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Fisioterapia-en-el-Adulto-Mayor.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en el Adulto
                            Mayor</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Fisioterapia-en-Neurorrehabilitacion.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en
                            Neurorrehabilitación</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Terapia-Manual-Ortopedica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Terapia Manual
                            Ortopédica</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-117-se-en-nutricion-clinica-con-mencion-en-nutricion-oncologica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            mención Nutrición Oncológica</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-116-se-en-nutricion-clinica-con-mencion-en-nutricion-deportiva.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Deportiva</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-118-se-en-nutricionclinica-con-mencion-en-nutricion-renal.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Renal</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-112-se-en-hemoterapia-y-banco-de-sangre-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hemoterapia y Banco de
                            Sangre</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-113-se-en-citologia-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Citología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-114-se-en-hematologia-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hematología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-115-se-en-histotecnologia-vf.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Histotécnología</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad A distancia</li>
                        <li class="ql-indent-2">Programa Académico de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/seg-142-se-en-nutricion-pediatrica-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/seg-127-se-en-asuntos-regulatorios-en-el-sector-farmaceutico-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Asuntos Regulatorios en el
                            Sector Farmacéutico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Soporte-Nutricional-Farmacologico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Soporte Nutricional
                            Farmacológico</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/seg-131-se-en-farmacovigilancia-y-tecnovigilancia-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacovigilancia y
                            Tecnovigilancia</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Farmacia-Clinica-y-Atencion-Farmaceutica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Farmacia-Hospitalaria.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Psicología</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/seg-140-se-en-psicooncologia-vff.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicooncología</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/seg-141-se-en-psicoterapia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoterapia</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/08/Abstract-SE-Psicologia-Clinica.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicología Clínica</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/08/Abstract-SE-Microbiologia.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Microbiología</a></li>
                        <li class="ql-indent-2">Programa Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/08/Abstract-SE-Gestion-y-Administracion-en-los-Servicios-de-Salud-Sexual-y-Reproductiva.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión y Administración
                            en los Servicios de Salud Sexual y Reproductiva</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Monitoreo-Fetal.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/09/Abstract-Riesgo-Obstetrico.pdf"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo
                            Obstétrico&nbsp;</a></li>
                      </ul>
                      <p><br></p>
                      <ul>
                        <li>6.2 Modelo Educativo.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/Modelo-Educativo-2020-comprimido.pdf"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Modelo_Educativo.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li>6.3 Relación de matriculados en programas académicos desistidos.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/03/Matriculados-Programas-desistidos-2020-2021.pdf"
                            rel="noopener noreferrer" target="_blank">2020-2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/03/matriculados_2019_II_programas_académicos_desistidos.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li>6.4 Resoluciones de programas académicos desistidos.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_44-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 44-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_40-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 40-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_37-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 37-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD-N_26-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 26-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_18-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 18-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_17-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 17-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_11-2019-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 11-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_04-2018-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 04-2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/RD_N_03-2018-D-UPNWSA.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 03-2018.</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">7. Número de alumnos por facultades y programas de estudios.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>7.1 Número de Estudiantes por Facultades y Programas de Estudios.</li>
                        <li class="ql-indent-1">Pregrado</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-PRE-GRADO-firmado.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/09/MATRIC-PREGRADO-2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/MATRIC-PREGRADO-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/10/MATRIC-PREGRADO-2023-II-.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/05/MATRIC-PREGRADO-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank" style="color: rgb(34, 34, 34);">2023-I</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/09/MATRIC-PREGRADO-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank" style="color: rgb(34, 34, 34);">2022-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/1.-MATRIC-PREGRADO-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/09/1.-MATRIC-PREGRADO-2021-II.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-PREGRADO-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/MATRIC-PREGRADO-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/matriculados-2020-I-PREGRADO-SETIEMBRE-03.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Número_Estudiantes_Matriculados_Pregrado_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_pregrado_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_pregrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_pregrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_pregrado_2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">Posgrado</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-POSGRADO-firmado.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/MATRICULADOS-POSGRADO-2024-III.pdf"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/10/MATRICULADOS-POSGRADO-2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/MATRIC-POSGRADO-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/MATRIC_POSGRADO_2023-III.pdf"
                            rel="noopener noreferrer" target="_blank">2023-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/10/MATRICULADOS-POSGRADO-2023-II.pdf"
                            rel="noopener noreferrer" target="_blank">2023-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/MATRIC-POSGRADO-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/04/MATRIC-POSGRADO-2022-III.pdf"
                            rel="noopener noreferrer" target="_blank">2022-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/09/MATRIC-POSGRADO-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/MATRIC-POSGRADO-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/MATRIC-POSGRADO-2021-III.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/09/3.-MATRIC-POSGRADO-2021-II.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-POSGRADO-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-POSGRADO-2020-III.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-POSGRADO-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/matriculados-2020-I-POSGRADO-SETIEMBRE-03.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/MATRIC-POSGRADO-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/Número_Estudiantes_Matriculados_Posgrado_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/nro_estudiantes_posgrado_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/nro_estudiantes_posgrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/nro_estudiantes_posgrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/nro_estudiantes_posgrado_2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">Segunda Especialidad</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-SEGUNDA-ESPECIALIDAD-firmado-1.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/MATRIC-SEG-ESP-2024-III.pdf"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/MATRIC-SEG-ESP-2024-II-v2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/MATRIC-SEG-ESP-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/MATRIC_SEG_ESP_2023-III.pdf"
                            rel="noopener noreferrer" target="_blank">2023-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/10/MATRIC-SEGUNDA-ESPECIALIDAD-2023-II-.pdf"
                            rel="noopener noreferrer" target="_blank">2023-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/MATRIC-SEGUNDA-ESPECIALIDAD-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/04/MATRIC-ESPECIALIDAD-2022-III.pdf"
                            rel="noopener noreferrer" target="_blank">2022-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/09/MATRIC-ESPECIALIDAD-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/MATRIC-ESPECIALIDAD-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/MATRIC-ESPECIALIDAD-2021-III.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/09/2.-MATRIC-ESPECIALIDAD-2021-II.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-ESPECIALIDAD-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/MATRIC-SEG-ESP-2020-III.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/MATRIC-SEG-ESP-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/matriculados-2020-I-SEG.-ESPEC.-SETIEMBRE-03.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/MATRIC-SEG-ESP-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nmero_Estudiantes_Segunda_Especialidad_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_2da-especialidad_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_2da-especialidad_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_2da-especialidad_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_estudiantes_2da-especialidad_2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.2 Número de Postulantes, Ingresantes y Matriculados por Modalidad de Ingreso - Pregrado.
                        </li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/04/PIM-Pregrado-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/10/PIM-Pregrado-2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/PIM-PREGRADO-2024-I-PRES-SEMI.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-Pregrado_2023-II-PRES-SEMI-1.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-PREGRADO-2023-I-PRES-SEMI.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/PIM-Pregrado-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/PIM-Pregrado-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/PIM-PREGRADO-2021.2-8.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/PIM-PREGRADO-2021.1-r.1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/PIM-PREGRADO-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/postulantes_Ingresantes_Matriculados_Pregrado_2020-I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/POSTULANTES-INGRESANTES-Y-MATRICULADOS-PREGRADO-2019-II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_pregrado_2019-1.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/postu_ingre_matri_pregrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_pregrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_pregrado_2016-1.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.3 Número de Postulantes, Ingresantes y Matriculados por Modalidad de Ingreso - Posgrado.
                        </li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/PIM-Posgrado-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/PIM-Posgrado-2024-III.pdf"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/PIM-Posgrado_2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/PIM-Posgrado_2024-I-2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/PIM_POSGRADO_2023-III-min.pdf"
                            rel="noopener noreferrer" target="_blank">2023-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-Posgrado-2023-II.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-Posgrado-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/7.3PIM-POSGRADO-2022-III.pdf"
                            rel="noopener noreferrer" target="_blank">2022-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/PIM-Posgrado-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/PIM-Posgrado-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/PIM-POSGRADO-2021.III-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/PIM-POSGRADO-2021.II_.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/PIM-POSGRADO-2021.1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/PIM-POSGRADO-2020-III.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/PIM-POSGRADO-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/Postulantes_Ingresantes_Matriculados_Posgrado_2020_I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/PIM-POSGRADO-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Postulantes_Ingresantes_Matriculados_Posgrado_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_posgrado_2019-1.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_posgrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_posgrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_posgrado_2016-1.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.4 Número de Postulantes, Ingresantes y Matriculados - Segunda Especialidad.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/PIM-Segunda-Especialidad-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/PIM-SE-2024-III.pdf"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/PIM-SE_2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/PIM-SE_2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/PIM_SE_2023-III-min.pdf"
                            rel="noopener noreferrer" target="_blank">2023-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-Segunda-Especialidad-2023-II.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/PIM-Segunda-Especialidad-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/7.4PIM-Segunda-Especialidad-2022-III.pdf"
                            rel="noopener noreferrer" target="_blank">2022-III</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/PIM-Segunda-Especialidad-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/05/PIM-Segunda-Especialidad-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/PIM-SEGUNDA-ESPECIALIDAD-2021.III-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/PIM-SEGUNDA-ESPECIALIDAD-2021.II_.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/PIM-SEGUNDA-ESPECIALIDAD-2021.1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/PIM-SEG.-ESP-2020-III.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/PIM-SEG.-ESP-20202.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/postulantes_Ingresantes_Matriculados_Segunda_Especialidad_Periodo_2020_I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/02/PIM-SEG-ESP-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Postulantes_Ingresantes_Matriculados_Segunda_Especialidad_Periodo_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_2daEspecialidad_2019-1.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_2daEspecialidad_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_postu_ingre_matri_2daEspecialidad_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>7.5 Egresados.</li>
                        <li class="ql-indent-1">7.5.1 Pregrado.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/EGRESADOS-PREGRADO-2024-2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/EGRESADOS-PREGRADO-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/04/EGRESADOS-PREGRADO-2023-2-VF.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/EGRESADOS-PREGRADO-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/05/EGRESADOS-PREGRADO-2022-II_VF.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/08/EGRESADOS-PREGRADO-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/1.EGRESADO-PREGRADO-2021-II-.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-PREGRADO-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-PREGRADO-2020-II-actualizado.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-PREGRADO-2020-I-actualizado.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Egresados_Pregrado_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Egresados_Pregrado_2019_I.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_pregrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_pregrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_pregrado_2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">7.5.2 Posgrado.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/EGRESADOS-POSGRADO-2024-2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/EGRESADOS-POSGRADO-PERIODO-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/EGRESADOS-POSGRADO-PERIODO-2023-III.pdf"
                            rel="noopener noreferrer" target="_blank">2023-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/EGRESADOS-POSGRADO-2023-2.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/11/EGRESADOS-POSGRADO-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/05/EGRESADOS-POSGRADO-2022-III_VF.pdf"
                            rel="noopener noreferrer" target="_blank">2022-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/EGRESADOS-POSGRADO-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/EGRESADOS-POSGRADO-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/07/EGRESADOS-POSGRADO-2021-III.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/1.EGRESADO-POSGRADO-2021-II-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-POSGRADO-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-POSGRADO-2020-III-actualizado.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/3.EGRESADO-POSGRADO-2020-II.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fb6b36cefa6b7898262555a_EGRESADO-POSGRADO-2020-I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fb6b36c0af5f97f04970498_EGRESADO-POSGRADO-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Egresados_Posgrado_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Egresados_Posgrado_2019_I.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_posgrado_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_posgrado_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_posgrado_2016.pdf"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">7.5.3 Segunda Especialidad.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/EGRESADOS-SE-2024-2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/12/EGRESADOS-SEGUNDA-ESPECIALIDAD-PERIODO-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/EGRESADOS-SEGUNDA-ESPECIALIDAD-PERIODO-2023-III.pdf"
                            rel="noopener noreferrer" target="_blank">2023-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/EGRESADOS-SE-2023-2.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/11/EGRESADOS-SE-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/05/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-III_VF.pdf"
                            rel="noopener noreferrer" target="_blank">2022-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/02/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/07/EGRESADOS-SEGUNDA-ESPECIALIDAD-2021-III.pdf"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2021-II-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2021-I.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2020-III.pdf"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/05/5.EGRESADO-SEGUNDA-ESPECIALIDAD-2020-II.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fb6b6dfdc12a67447940593_EGRESADO-SEGUNDA-ESPECIALIDAD-2020-I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fb6b6df1730f73b4798ee97_EGRESADO-SEGUNDA-ESPECIALIDAD-2019-III.pdf"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/egresados_Segunda_Especialidad_2019_II.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Egresados_Segunda_Especialidad_2019_I.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_2da_especialidad_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/nro_egre_2da_especialidad_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>7.6 Cronograma de Admisión.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Resolucion-PE-026-2025-RPE-UPNW-22.04.2025-1-1.pdf"
                            rel="noopener noreferrer" target="_blank">2025-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/02/Resolucion-PE-009-2025-RPE-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/Resolución-PE-030-2024-Aprobar-cronograma-admisión-2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024 -II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/11/RS-GG-057-2023-Cronograma-Admision-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024 -I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Resolucion-GG040-2023-Cronograma-de-admision-2023II.pdf"
                            rel="noopener noreferrer" target="_blank">2023 -II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/Resolucion-GG-118-2022-Crono-grama-de-admisión-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023 -I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/06/RESOLUCI%C3%93N-GG-043-2022.pdf"
                            rel="noopener noreferrer" target="_blank">2022 -II </a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/Resolución_107_Cronograma-Academico-Admisión_actualizado.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/Resoluci%C3%B3n-de-Gerencia-General-N%C2%BA034_Cronograma-admisi%C3%B3n-2022-1.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/08/RESOLUCI%C3%93N-DE-GERENCIA-GENERAL-N%C2%BA-024-2021-APROBAR-la-Actualizaci%C3%B3n-del-Cronograma-de-Admisi%C3%B3n-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fd194dd4d88db7f8ae1bd21_RG-UW-N%C2%B068-2020-3.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5fd194dd4d88db7f8ae1bd21_RG-UW-N%C2%B068-2020-3.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f3c13050b0e5a02b4ad5cba_Cronograma-de-Admisión_Pregrado_2020-II-y-Res-1.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f656330d9d038ab739434ca_cronog_admision_2020-I-II-1.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I y 2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f656349aa4dbb984ba499ca_cronog_admision_2019-I.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f656369a4aef840c0a3a9b8_cronog_admision_2018-II.pdf"
                            rel="noopener noreferrer" target="_blank">2018-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f656381e37a2012eb28f141_cronog_admision_2018-I.pdf"
                            rel="noopener noreferrer" target="_blank">2018-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6563a1b6be43e5e7ab2c55_cronog_admision_2017-II.pdf"
                            rel="noopener noreferrer" target="_blank">2017-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6563b6e0a1e1111a1ce148_cronog_admision_2017-I.pdf"
                            rel="noopener noreferrer" target="_blank">2017-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6563ce1c72cb19d85f8d56_cronog_admision_2016-II.pdf"
                            rel="noopener noreferrer" target="_blank">2016-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6563efe0a1e164ec1ce1b9_cronog_admision_2016-I.pdf"
                            rel="noopener noreferrer" target="_blank">2016-I.</a></li>
                        <li>7.7 Temario para los exámenes de admisión.</li>
                        <li class="ql-indent-1">2025</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Temario-de-Admision-2025_1.pdf"
                            rel="noopener noreferrer" target="_blank">Temario General de admisión</a></li>
                        <li class="ql-indent-1">2024</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/1.-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2024.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/2.-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2024.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/3.-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2024.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/4.-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2024.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/1.-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2023-VB-GG.docx"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/2.-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2023-VB-GG.docx"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/3.-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2023-VB-GG.docx"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/4.-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2023-VB-GG.docx"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/12/1.-TEMARIO-FACULTAD-DE-CIENCIAS-DE-LA-SALUD-2022.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/12/2.-TEMARIO-FACULTAD-DE-INGENIERIA-Y-NEGOCIOS-2022.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/12/3.-TEMARIO-FACULTAD-DE-FARMACIA-Y-BIOQUIMICA-2022.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/12/4.-TEMARIO-FACULTAD-DE-DERECHO-Y-CIENCIA-POLITICA-2022.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2021</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/1-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2021.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/2-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2021.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/4-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2021.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/3-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2021.pdf"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2020</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/TEMARIO-EX_ADMISION_2020-II.pdf"
                            rel="noopener noreferrer" target="_blank">Temario General de admisión</a></li>
                        <li>7.8 Cronograma académico general.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Cronograma-Academico-General-UNW-2025.pdf"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/08/Resolucion-PE-047-2024-Cronograma-academico-general.pdf"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Resolucion-GG-041-2023-Actualizacion-Cronograma-Academico-General.pdf"
                            rel="noopener noreferrer" target="_blank">2023 - Actualizado</a></li>
                        <li class="ql-indent-1">2022</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/04/RESOLUCIÓN-DE-GERENCIA-GENERAL-Nº-106-2021.pdf"
                            rel="noopener noreferrer" target="_blank">2022 - Actualizado</a></li>
                        <li class="ql-indent-1">2021</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/Cronograma-Academico-General-2021-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021- Actualizado</a></li>
                        <li class="ql-indent-1">2020</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/cronograma_academico_general_2020_Julio.pdf"
                            rel="noopener noreferrer" target="_blank">Julio.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f65642fa1a332cb6bf39c8f_cronograma_academico_general_2020_abril.pdf"
                            rel="noopener noreferrer" target="_blank">Abril.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f656448b90b48d4b4881a3d_cronograma_academico_general_2020_marzo.pdf"
                            rel="noopener noreferrer" target="_blank">Marzo.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f65646ee0a1e184151ce207_cronograma_academico_general_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f65648de37a201a5e28f370_cronograma_academico_general_2018.pdf"
                            rel="noopener noreferrer" target="_blank">2018</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f6564b5a1a332c1d7f39cc9_cronograma_academico_general_2017.pdf"
                            rel="noopener noreferrer" target="_blank">2017</a></li>
                        <li>7.9 Informe Estadístico de Admisión</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/informe-estadistico-admision-2023-2024.pdf"
                            rel="noopener noreferrer" target="_blank">Informe 2023-2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/INFORME-ESTADISTICO-ADMISION-2022-2023-PRE-POS-Y-SE.pdf"
                            rel="noopener noreferrer" target="_blank">Informe 2022-2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/03/INFORME-ESTADÍSTICO-ADMISIÓN-2021-2022-PRE-POS-Y-SE.pdf"
                            rel="noopener noreferrer" target="_blank">Informe 2021-2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/INFORME-ESTAD%C3%8DSTICO-ADMISI%C3%93N-2020-2021-PRE-POS-Y-SEG-PERIODOS_FINAL.pdf"
                            rel="noopener noreferrer" target="_blank">Informe 2020-2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/informe_estadistico_2017-2019.pdf"
                            rel="noopener noreferrer" target="_blank">Informe 2017-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/informe_estadistico_2019_V2-Actualizacion.pdf"
                            rel="noopener noreferrer" target="_blank">Actualización del Informe Estadístico
                            (2017-2019).</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">8. Plana docente.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>8.1 Plana docente</li>
                        <li class="ql-indent-1">2025.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/C9-2025-1-11.04-transparencia.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1">2024.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/C9-2024-2.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/C9-UPNW-2024-1.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/10/C9-UPNW-2023-II-1-1.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/04/C9-2023-I.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/11/C9-2022-II.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/06/C9-2022-I.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a href="https://www.uwiener.edu.pe/wp-content/uploads/2021/06/C9.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/C9-2021-II-VF.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1">2020.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/C9-2020-II-31.08-publicación.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Formato_C9_2020-I.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1">2019.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Formato_C9_2019_II_SUNEDU.pdf"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Formato_C9_2019_I_SUNEDU.pdf"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1">2018.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Formato_C9_2018_II_SUNEDU.pdf"
                            rel="noopener noreferrer" target="_blank">2018-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/Formato_C9_2018_I_SUNEDU.pdf"
                            rel="noopener noreferrer" target="_blank">2018-I.</a></li>
                        <li>8.2 Hoja de vida docente</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/Hoja-de-vida-docente-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/Hoja-vida-docente-2024-II-1.pdf"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/Hoja-de-vida-docente-2024-I-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/Hoja-de-vida-docente-2023-2-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Hoja-de-vida-docente-2023-1-2-1.pdf"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/Hoja-de-vida-docente-2022-II-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/Hoja-de-vida-docente-2022-I-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/Hoja-de-vida-docente-2021-II-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/Hoja-de-vida-docente-2021-I-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2021-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/Hoja-de-vida-docente-2020-II-Institucional.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/Hoja-de-Vida-Docente-2020-I-1.pdf"
                            rel="noopener noreferrer" target="_blank">2020-I</a></li>
                        <li>8.3 Rangos salariales</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Rangos-Salariales-2023.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/01/Rangos-Salariales-2022.pdf"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/Rangos-Salariales-2021.pdf"
                            rel="noopener noreferrer" target="_blank">2021</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/Rangos-Salariales-2020.pdf"
                            rel="noopener noreferrer" target="_blank">2020</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin"> 9. Vicerrectorado de investigación.<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/Resolucion-PE-053-2024.pdf"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            053-2024-RPE-UPNW</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/RESOLUCION-DE-PRESIDENCIA-EJECUTIVA-N°-060-2024-RPE-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            060-2024-RPE-UPNW</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/RESOLUCION-DE-PRESIDENCIA-EJECUTIVA-N°-066-2024-RPE-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            066-2024-RPE-UPNW</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/91-upnw-ees-reg-006-reglamento-de-investigacion-v03.pdf"
                            rel="noopener noreferrer" target="_blank">9.1 Reglamento de Investigación</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/92-upnw-ees-reg-007-reglamento-de-propiedad-intelectual-v04.pdf"
                            rel="noopener noreferrer" target="_blank">9.2 Reglamento de Propiedad Intelectual</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Reglamento-de-Codigo-de-Etica-e-Integridad-Cientifica.pdf"
                            rel="noopener noreferrer" target="_blank">9.3 Reglamento del Código de Ética e Integridad
                            Científica</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Reglamento-del-Comite-Institucional-de-Etica-e-Integridad.pdf"
                            rel="noopener noreferrer" target="_blank">9.4 Reglamento del Comité Institucional de Ética e
                            Integridad Científica</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/reglamento-del-repositorio-institucional.pdf"
                            rel="noopener noreferrer" target="_blank">9.5 Reglamento del Repositorio Institucional</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/96-upnw-ees-pol-004-politicas-generales-de-investigacion.pdf"
                            rel="noopener noreferrer" target="_blank">9.6 Políticas Generales de Investigación</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/LINEAS-DE-INVESTIGACION-INSTITUCIONALES.pdf"
                            rel="noopener noreferrer" target="_blank">9.7 Líneas de Investigación Institucionales</a>
                        </li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/97-upnw-ees-lin-003-directiva-de-conformacion-de-grupos-y-semilleros-de-investigacion-v2.pdf"
                            rel="noopener noreferrer" target="_blank">9.8 Directiva de conformación de Grupos y
                            Semilleros de Investigación</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/Directiva-de-apoyo-a-la-publicacion-de-articulos-cientificos-indizados-en-SCOPUS-Y-WOS.pdf"
                            rel="noopener noreferrer" target="_blank">9.9 Directiva de apoyo a la publicación de
                            artículos científicos indizados en Scopus y Wos</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/99-upnw-ees-lin-005-directiva-de-incentivos-a-la-publicacion.pdf"
                            rel="noopener noreferrer" target="_blank">9.10 Directiva de incentivos para la
                            Investigación</a></li>
                        <li>9.11 Procedimientos y Guías del Vicerrectorado de Investigación</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/11/bases-de-fondo-concursable-de-proyectos-de-investigacion-interno.pdf"
                            rel="noopener noreferrer" target="_blank">Bases de fondo concursable de proyectos de
                            investigación interno dirigido a los grupos y semilleros de investigación 2024</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/BASES-DE-CONVOCATORIA-DE-PROYECTOS-DE-INVESTIGACION-INTERNO-SIN-FINANCIAMIENTO-DIRIGIDO-A-LOS-GRUPOS-Y-SEMILLEROS-DE-INVESTIGACION.pdf"
                            rel="noopener noreferrer" target="_blank">Bases de convocatoria de Proyectos de
                            Investigación interno sin financiamiento dirigido a los grupos y semilleros de Investigación
                            2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Bases-de-Fondo-Concursable-Proyectos-de-Investigacion-multidisciplinarios-2025.pdf"
                            rel="noopener noreferrer" target="_blank">Bases de fondo concursable de Proyectos de
                            Investigación Multidisciplinario dirigido a los Grupos y Semilleros de Investigación
                            2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/LINEAMIENTO-PARA-LA-APLICACION-DEL-SOFTWARE-DETECTOR-DE-SIMILITUDES-EN-TRABAJOS-ACADEMICOS-Y-DE-INVESTIGACION.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamientos para la aplicación del software
                            detector de similitudes de trabajos académicos y de investigación</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Lineamientos-para-la-asignacion-de-carga-compl-en-inv-y-gest-de-la-inv.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la asignación de carga
                            complementaria en investigación y gestión de la investigación</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Manual-de-procedimientos-del-Comite-Institucional-de-etica-e-integridad-cientifica.pdf"
                            rel="noopener noreferrer" target="_blank">Manual de Procedimientos del Comité Institucional
                            de ética e integridad Científica</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/Lin-apoyo-eco-pasantias-ponencias-cti.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para el apoyo económico para la
                            participación en pasantías y ponencias en Ciencia, Tecnología e Innovación (CTI)&nbsp;</a>
                        </li>
                        <li>9.12 Guías de Investigación aplicables hasta el 2024-II</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/07/guia-elaboracion-tesis-cuantitativo.pdf"
                            rel="noopener noreferrer" target="_blank">Guía para la elaboración de la tesis enfoque
                            cuantitativo</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/07/guia-elaboracion-tesis-cualitativo.pdf"
                            rel="noopener noreferrer" target="_blank">Guía para la elaboración de la tesis enfoque
                            cualitativo</a></li>
                        <li>9.13 Normativas aplicadas en 2025-I</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/rpe-024-2025-rpe-upnw-reglamento-de-tesis.pdf"
                            rel="noopener noreferrer" target="_blank">Reglamento de elaboración de tesis para optar por
                            el Título Profesional, Título de Especialista y Grado Académico de Maestro</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/rr-n°-066-2025-r-upnw-lineamientos-trabajo-academico.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo
                            Académico para Optar el Título de Especialista</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/06/rr-n°-066-2025-r-upnw-lineamientos-trabajo-de-investigacion.pdf"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo de
                            Investigación para Optar el Grado Académico de Maestro</a></li>
                        <li>9.14 Proyectos de investigación</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/03/relacion-de-proyectos-de-investigacion2024.pdf"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/03/relacion-de-proyectos-de-investigacion2023.pdf"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/03/relacion-de-proyectos-de-investigacion2022.pdf"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/03/relacion-de-proyectos-de-investigacion2021.pdf"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f657c3fefb77367b8b215c4_VRI_DCI_Lista-de-proyectos-seleccionados-del-FCI2020.pdf"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f656f04cccdb12e1de5beb5_PROYECTOS_INVESTIGACION_2019.pdf"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">10. Vida Estudiantil<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="https://www.uwiener.edu.pe/wp-content/uploads/2023/11/AMBIENTES-DE-LA-DBU-1.pdf"
                            rel="noopener noreferrer" target="_blank">10.1 Ambientes o espacios destinados a brindar los
                            servicios sociales, deportivos o culturales.</a></li>
                        <li><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/07/UPNW-BES-POL-003-Atencion-a-estudiantes-con-discapacidad.pdf"
                            rel="noopener noreferrer" target="_blank">10.2 Política para atención a estudiantes con
                            discapacidad</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="acordeon">
                  <div data-w-id="b01807a7-453f-e7e9-255d-a5c51f2e3516" class="trigger_acordeon"><a href="#"
                      class="linktransparencia w-inline-block"><img src="images/icon_link.svg" alt="" class="icon_link">
                      <h4 class="h4_admin">11. Concurso público de selección docente<br></h4>
                    </a>
                    <div class="icon_box admin"><img
                        src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/select.svg" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>11.1 Bases del Concurso Público docente</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/BASES-DE-LA-CONVOCATORIA-EXTERNA-DE-SELECCION-DOCENTE-2025.pdf"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/RR-013-2024-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/BASES-DE-LA-CONVOCATORIA-EXTERNA-DE-SELECCIÓN-DOCENTE-2023.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/1.-BASES-DEL-CONVOCATORIA-PÚBLICA-DE-SELECCIÓN-DOCENTE-202201.pdf"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/01/BASES-DEL-CONVOCATORIA-PÃ-BLICA-DE-SELECCIÃ-N-DOCENTE-2021-I-Final.pdf"
                            rel="noopener noreferrer" target="_blank">2021</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/12/5f3c1aefa4d7095fc8617efc_Bases_Concurso_publico_docente_2020-I.pdf"
                            rel="noopener noreferrer" target="_blank">2020</a></li>
                        <li>11.2 Resoluciones de Ganadores del Concurso Público de Selección Docente.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/Ganadores-de-Convocatoria-Externa-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/RR-012-2024-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 012-2024.</a></li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/03/RR-033-2022-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 033-2022.</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/02/RR-032-2021-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 032-2021.</a></li>
                        <li class="ql-indent-1">2020.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f657574a1a332448df3af24_Resolución_N_020-2020-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 020-2020.</a></li>
                        <li class="ql-indent-1">2019.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f6575cfd9d038281f9460f4_Resolución_N_037-2019-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 037-2019.</a></li>
                        <li class="ql-indent-1">2018.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f657626cccdb15a8ce5c5f1_Resolución_N_1269-2018-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 1269-2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f657659880779b593a1c34d_Resolución_N_1161-2018-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 1161-2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/5f65766e013a6dec8b0a41e8_Resolución_N_1117-2018-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 1117-2018.</a></li>
                        <li>11.3 Docentes extraordinarios.</li>
                        <li class="ql-indent-1">2025-I</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/05/RESOLUCION-N°-003-2025-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2025-1.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 003-2025</a></li>
                        <li class="ql-indent-1">2024-I</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/05/RS-N%C2%B0-009-2024-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2024-I.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 009-2024</a></li>
                        <li class="ql-indent-1">2024-II</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/10/resolucion-n-023-2024-vra-upnw-docentes-extraordinarios-2024-ii-v2.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 023-2024</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/09/RS-N°-004-2023-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2023-II.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 004-2023</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/RR-156-2021-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 156-2021.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/RR-116-2021-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 116-2021.</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/10/RR-041-2021-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">Resolución 41-2021.</a></li>
                        <li>11.4 Comisión de Concurso Público Docente.</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/RR-013-2024-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/RR-231-2022-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/2.-RESOLUCI%C3%93N-RECTORAL-001-2022-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/RR-003-2021-R-UPNW-1.pdf"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2021/11/RR-216-2019-R-UPNW.pdf"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li>11.5 Vacantes para la Convocatoria Externa Docente</li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2025/01/Lista-de-Vacantes-Convocatoria-Externa-Docente-2025-I.pdf"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/02/Lista-de-Vacantes-Convocatoria-Externa-Docente-2024-1.pdf"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/04/Resolucion-GG-022-2023-1.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li>11.6 Docentes Ordinarios</li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-125-2023-R-UPNW-1-Bases-para-el-proceso-de-ratificacion-de-docentes-ordinarios.pdf"
                            rel="noopener noreferrer" target="_blank">Bases para el proceso de ratificación de docentes
                            ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-171-2023-R-UPNW-Bases-para-proceso-incorporacion-y-promocion-docentes-ordinarios-min.pdf"
                            rel="noopener noreferrer" target="_blank">Bases para proceso incorporación y promoción
                            docentes ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2023/12/RR-157-2023-R-UPNW-Resultados-ratificacion-docentes-ordinarios.pdf"
                            rel="noopener noreferrer" target="_blank">Resultados del Proceso de Ratificación de Docentes
                            Ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/06/RR-021-2024-R-UPNW-Resultados-incorporacion-promocion-docentes-ordinarios.pdf"
                            rel="noopener noreferrer" target="_blank">Resultados del Proceso de Incorporación y
                            Promoción de Docentes Ordinarios</a></li>
                      </ul>
                      <p><br></p>
                      <p><br></p>
                      <p><br></p>
                      <p><br></p>
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
