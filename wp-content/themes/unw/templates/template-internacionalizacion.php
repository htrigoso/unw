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
    <div class="info_page">
      <div id="section-1" class="cover_img_page padding">
        <div id="cabecera_carreras" class="overlay inter"></div>
        <img src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/banner-internacionalizacion.png' ?>"
          srcset="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/banner-internacionalizacion.png' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/banner-internacionalizacion.png' ?> 1920w"
          sizes="100vw" alt="" class="img_cover">
        <div class="info_cover_page center">
          <div class="container">
            <div id="sec-1" class="title_carreras padding">
              <h1 class="h1_carreras">Internacionalizacion<br></h1>
            </div>
          </div>
        </div>
        <div class="miga_de_pan">
          <div class="container flex"><a href="<?= home_url("/") ?>" class="link miga">Inicio /</a><a href="#"
              aria-current="page" class="link miga w--current">Internacionalización</a></div>
        </div>
      </div>
      <div class="main_page">
        <div class="page_interna">
          <div class="container full">
            <div class="_2-col">
              <div class="col-1 full">
                <div class="tabs_menu notab serv_uni inter">
                  <a href="#sec-1"
                    class="link_item_tab w-inline-block">
                    <div>Presentación</div>
                  </a>
                  <a href="#sec-2"
                    class="link_item_tab w-inline-block">
                    <div>¿Qué tipo de movilidad puedo hacer?</div>
                  </a>


                  <a href="#sec-4"
                    class="link_item_tab w-inline-block">
                    <div>Requisitos para postular</div>
                  </a>

                  <a href="#sec-5"
                    class="link_item_tab w-inline-block">
                    <div>Pasos de Aplicación </div>
                  </a>

                  <a href="#sec-6"
                    class="link_item_tab w-inline-block">
                    <div>Ver Convenios Internacionales</div>
                  </a>
                </div>
                <a href="#" class="btn icon center hide hide-all w-inline-block"><img
                    src="<?= UPLOAD_MIGRATION_PATH . '/shared/icon_download.svg' ?>" alt=""
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
                              src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/icon_list.svg' ?>"
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
                              src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/icon_world.svg' ?>"
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
                              src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/icon_inter.svg' ?>" alt=""
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
                              src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/icon_ma.svg' ?>"
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
                              src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/icon_ps.svg' ?>"
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
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso1.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>Ser alumno regular de la UPNW en el período en el que se solicita la postulación y durante
                            el intercambio.</p>
                          <div class="number_list">
                            <div>01</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso2.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>Haber culminado el IV ciclo. </p>
                          <div class="number_list">
                            <div>02</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso3.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>Tener un promedio aprobado (mínimo 14) al momento de la postulación</p>
                          <div class="number_list">
                            <div>03</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso4.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>No tener una asignatura desaprobada por tercera vez al momento de la postulación</p>
                          <div class="number_list">
                            <div>04</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso5.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>No tener sanción disciplinaria, según lo dispuesto en el Reglamento de Conducta</p>
                          <div class="number_list">
                            <div>05</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/5.svg' ?>" alt=""
                            class="icon paddingright">
                          <p>Acreditar el nivel del idioma requerido por la universidad de destino (si aplica)</p>
                          <div class="number_list">
                            <div>06</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso7.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>No mantener deudas pendientes con la UPNW al momento de la postulación</p>
                          <div class="number_list">
                            <div>07</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso8.svg' ?>"
                            alt="" class="icon paddingright">
                          <p>El alumno es responsable del trámite de visa y pasaporte.</p>
                          <div class="number_list">
                            <div>08</div>
                          </div>
                        </div>
                        <div class="item_inter outline padding20 flexhorizontal"><img
                            src="<?= UPLOAD_MIGRATION_PATH . '/internacionalizacion/paso9.svg' ?>"
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
      </div>
    </div>
  </div>
</main>
<?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
<a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
  <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
    data-src="<?php echo UPLOAD_PATH . '/migration/solicitar.svg'; ?>" alt="Formulario General">
</a>
<?php get_footer(); ?>
