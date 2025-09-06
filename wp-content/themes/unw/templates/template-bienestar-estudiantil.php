<?php
/**
 * Template Name: Bienestar Estudiantil
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
        <img src="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Dirección-de-Bienestar-Universitario.png"
          srcset="https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Dirección-de-Bienestar-Universitario.png 500w, https://www.uwiener.edu.pe/wp-content/uploads/2022/01/Dirección-de-Bienestar-Universitario.png 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div id="presentacion" class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Bienestar Estudiantil</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
                href="https://www.uwiener.edu.pe/servicios-universitarios/" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Bienestar
                Estudiantil</a></div>
          </div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 top_fixed">
                <div class="tabs_menu notab serv_uni secretaria">
                  <a href="#presentacion" data-w-id="02261821-febb-e71d-e9d9-920de6f6c5b8"
                    class="link_item_tab scroll large extra anipo mb-ra w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="c6e84752-d069-2d2e-c308-cfadd25fc9ae" style="opacity:1" alt="" class="point_anima">
                    <div>Presentación</div>
                  </a>



                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - INICIO -->
                  <a href="#serviciosu-bienestar-estudiantil" data-w-id="02261821-febb-e71d-e9d9-920de6f6c5be"
                    class="link_item_tab scroll large extra anipo w-inline-block"><img
                      src="https://www.uwiener.edu.pe/wp-content/themes/uwienerwp/assets/images/icon_current_tab.svg"
                      data-w-id="dd1367ca-db57-1472-a6a5-4d5b16ffa857" style="opacity:0" alt="" class="point_anima">
                    <div>Servicios</div>
                  </a>
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
                        <div class="clase_para_wordpress richt_text">
                          <h2>Presentación</h2>
                          <p>BIENESTAR ESTUDIANTIL está integrada por un equipo multidisciplinario de profesionales,
                            cuyo propósito es promover el bienestar físico, mental y moral de la comunidad
                            universitaria, a través de programas y servicios que estimulan su desempeño y
                            desenvolvimiento personal y académico, contribuyendo al desarrollo integral de su vida
                            universitaria.</p>
                          <p><br></p>
                          <p>El área de bienestar estudiantil brinda sus servicios a través del Área de Servicios al
                            estudiante (Servicios Médicos y Servicios Psicopedagógicos) y el Área de Vida Universitaria
                            (Promoción del&nbsp;Deporte y Promoción Cultural). Además, organiza y lidera actividades
                            como charlas, talleres,&nbsp;conferencias, conversatorios, shows artísticos y campeonatos
                            deportivos.</p>
                          <p><br></p>
                          <p>A continuación, te presentamos los servicios de Bienestar Estudiantil, ¡comprometidos con
                            el desarrollo integral de sus alumnos!</p>
                        </div>
                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 3 - INICIO -->


                        <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 4 - INICIO -->
                        <div class="content_section">
                          <div class="wrapper_collection mt auto w-dyn-list">
                            <!-- <h3 class="titulo_categoria_bienestar">Bienestar Estudiantil</h3> -->
                            <!-- <div id="serviciosu-bienestar-estudiantil" class="title_section">
								<h3 class="h3_interna_title">Bienestar Estudiantil</h3>
                                <div class="line"></div>
                            </div> -->


                            <div id="serviciosu-categoria-bienestar-estudiantil" role="list"
                              class="collection_list gilla _3-col w-dyn-items">
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Promoción Cultural"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/promocion-cultural/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Promoción Cultural</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Promoción del deporte"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/promocion-del-deporte/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Promoción del deporte</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Servicios psicopedagógicos"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/servicios-psicopedagogicos/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Servicios psicopedagógicos</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Servicios médicos"
                                  href="https://www.uwiener.edu.pe/bienestar-universitario/servicios-medicos/"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Servicios médicos</h4>
                                  <div class="btn text">Ver más</div>
                                </a>
                              </div>
                            </div>
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
