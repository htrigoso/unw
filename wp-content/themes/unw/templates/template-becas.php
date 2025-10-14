<?php
/**
 * Template Name: Becas
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
  global $post;
$parent_id = wp_get_post_parent_id( $post->ID );
?>

<?php
  $acf_cards = get_field('program');


  $acf_faq = get_field('faq');
  $acf_sidebar = get_field('sidebar_items');

  get_template_part(GENERAL_CONTENT_PATH, 'navbar');

?>
<main>
  <div class="main_container">
    <div class="info_page">
      <?php
          get_template_part('content-parts/components/info-cover');
        ?>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni secretaria">

                  <?php
                    get_template_part('content-parts/components/sidebar', null, ['sidebar' => $acf_sidebar]);
                  ?>


                </div>
              </div>
              <div class="col-1 full right">
                <div class="info_content_tab full-right">
                  <div class="section_tab _2-col">
                    <div class="content_seccion_tab">
                      <div class="info_section full">
                        <div class="content_section">
                          <div id="presentacion" class="contenido-becas">
                            <?php
                              the_content();
                            ?>
                          </div>

                          <div class="wrapper_collection mt auto w-dyn-list">
                            <div id="serviciosu-becas-externas" class="title_section">
                              <h3 class="h3_interna_title"><?=$acf_cards['title']?></h3>
                              <div class="line"></div>
                            </div>
                            <div class="contenido-becas">
                              <?=$acf_cards['description']?>
                            </div>

                            <div id="serviciosu-categoria-becas-externas" role="list"
                              class="collection_list gilla _3-col w-dyn-items">
                              <?php

                                get_template_part('content-parts/components/cards', null, ['cards' => $acf_cards['cards']]);
                              ?>

                            </div>
                          </div>

                          <br><br>
                          <div>
                            <div id="serviciosu-preguntas-frecuentes" class="title_section">
                              <h3 class="h3_interna_title"><?= $acf_faq['title'] ?></h3>
                              <div class="line"></div>
                            </div>
                            <div class="contenido-becas">
                              <?= $acf_faq['content'] ?>
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
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
