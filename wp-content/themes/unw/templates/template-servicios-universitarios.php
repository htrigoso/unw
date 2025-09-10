<?php
/**
 * Template Name: Centros Universitarios
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
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Registros-Acade_micos.png' ?>"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Registros-Acade_micos.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Registros-Acade_micos.png' ?> 1920w"
        sizes="100vw" alt="" class="img_cover">
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras small"><strong>Servicios universitarios</strong><br></h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
              href="#" aria-current="page" class="link miga w--current">Servicios universitarios</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="clase_para_wordpress">

              <h2 class="wp-block-heading">Presentación</h2>



              <p>La Universidad Privada Norbert Wiener presenta la información correspondiente, en cumplimiento de la
                normatividad que regula el sistema universitario actual, según lo indicado en el Formato de
                Licenciamiento B55 de la Superintendencia Nacional de Educación Superior Universitaria (Sunedu). Se
                cumple a cabalidad con lo exigido por la Ley Universitaria 30220 y la Sunedu, asumiendo el compromiso de
                respeto al Estado de derecho, las normas y la Constitución Política de nuestro país</p>



              <h2 class="wp-block-heading">Servicios</h2>



              <p>[linea]</p>
            </div>
            <div role="list" class="grid-3 w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/biblioteca.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Biblioteca</h4><a
                      href="https://intranet.uwiener.edu.pe/univwiener/biblioteca/biblioteca.asp" class="btn w-button"
                      target="_blank">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/500x250_jefatura-de-becas.jpg' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Jefatura de Becas</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/becas/" class="btn w-button">+
                      información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Banner_ResponsabilidadSocial_1920x400-2023-1.jpg' ?>"
                      alt="" class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Responsabilidad Social</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/responsabilidad-social/"
                      class="btn w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Registros-Acade_micos.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Registros Académicos</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/registros-academicos/"
                      class="btn w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Secretari_a-General.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Secretaría General</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/secretaria-general/"
                      class="btn w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Direccio_n-de-Bienestar-Universitario.png' ?>"
                      alt="" class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Bienestar Estudiantil</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/bienestar-estudiantil/"
                      class="btn w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/empleabilidad-y-Relacionamiento-Empresarial500.png' ?>"
                      alt="" class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Dirección de Empleabilidad y Alumni</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/direccion-de-empleabilidad-y-alumni/"
                      class="btn w-button">+ información</a>
                  </div>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div class="item_grilla mw vertical carreras interna">
                  <div class="img-carrera-box"><img
                      src="<?= UPLOAD_MIGRATION_PATH . '/servicios-universitarios/Defensori_a-Universitaria.png' ?>" alt=""
                      class="img_cover_carreras"></div>
                  <div class="info-carrera">
                    <h4 class="h4_carreras dark marginright">Defensoría Universitaria</h4><a
                      href="https://www.uwiener.edu.pe/servicios-universitarios/defensoria-universitaria/"
                      class="btn w-button">+ información</a>
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
