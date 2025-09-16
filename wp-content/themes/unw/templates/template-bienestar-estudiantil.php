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
    <div class="info_page">
      <div class="cover_img_page center">
        <div class="overlay"></div>
        <img src="<?= UPLOAD_MIGRATION_PATH . '/bienestar-estudiantil/direccion-bienestar-universitario.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/bienestar-estudiantil/direccion-bienestar-universitario.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/bienestar-estudiantil/direccion-bienestar-universitario.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div id="presentacion_vf" class="info_cover_page center">
          <div  class="container">
            <h2 class="categoria_page serv_uni">Servicios universitarios</h2>
            <h2 class="h1_carreras">Bienestar Estudiantil</h2>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container">
            <div class="content_links_miga"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a
                href="<?= home_url("/servicios-universitarios/") ?>" class="link miga">Servicios
                universitarios&nbsp;/</a><a href="#" aria-current="page" class="link miga w--current">Bienestar
                Estudiantil</a></div>
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



                  <!-- Sección del Post Bienestar Estudiantil y Becas del CPT Bienestar Universitario - Hernán Chira - Parte 2 - INICIO -->
                  <a href="#serviciosu-bienestar-estudiantil"
                    class="link_item_tab w-inline-block">
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
                        <div class="clase_para_wordpress richt_text " id="presentacion">
                          <h2>Presentación</h2>
                          <p>BIENESTAR ESTUDIANTIL está integrada por un equipo multidisciplinario de profesionales,
                            cuyo propósito es promover el bienestar físico, mental y moral de la comunidad
                            universitaria, a través de programas y servicios que estimulan su desempeño y
                            desenvolvimiento personal y académico, contribuyendo al desarrollo integral de su vida
                            universitaria.</p>
                          <p>El área de bienestar estudiantil brinda sus servicios a través del Área de Servicios al
                            estudiante (Servicios Médicos y Servicios Psicopedagógicos) y el Área de Vida Universitaria
                            (Promoción del&nbsp;Deporte y Promoción Cultural). Además, organiza y lidera actividades
                            como charlas, talleres,&nbsp;conferencias, conversatorios, shows artísticos y campeonatos
                            deportivos.</p>
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


                            <div id="serviciosu-bienestar-estudiantil" role="list"
                              class="collection_list gilla _3-col w-dyn-items">
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Promoción Cultural"
                                  href="<?= home_url("/bienestar-universitario/promocion-cultural/") ?>"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Promoción Cultural</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Promoción del deporte"
                                  href="<?= home_url("/bienestar-universitario/promocion-del-deporte/") ?>"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Promoción del deporte</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Servicios psicopedagógicos"
                                  href="<?= home_url("/bienestar-universitario/servicios-psicopedagogicos/") ?>"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Servicios psicopedagógicos</h4>
                                  <div class="btn-legacy text">Ver más</div>
                                </a>
                              </div>
                              <div role="listitem" class="collection_item serv_univer w-dyn-item">
                                <a title="Ver más sobre Servicios médicos"
                                  href="<?= home_url("/bienestar-universitario/servicios-medicos/") ?>"
                                  class="item_serv_university w-inline-block">
                                  <!-- <div class="tipo_servicio">Bienestar Estudiantil</div> -->
                                  <h4 class="h4_light">Servicios médicos</h4>
                                  <div class="btn-legacy text">Ver más</div>
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
