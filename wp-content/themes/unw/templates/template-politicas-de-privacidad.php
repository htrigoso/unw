<?php
/**
 * Template Name: Politicas de privacidad
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
      <img src="" srcset="https://www.uwiener.edu.pe/wp-content/uploads/2024/10/pixel-0410.png" sizes="100vw" alt=""
        class="img_cover">
      <!--<img src="" srcset=" 500w,  1920w" sizes="100vw" alt="" class="img_cover">-->
      <div class="info_cover_page center">
        <div class="container">
          <h2 class="categoria_page hide">Regresar</h2>
          <h1 class="h1_carreras">Políticas de privacidad</h1>
        </div>
      </div>
      <div class="miga_de_pan">
        <div class="container">
          <div class="content_links_miga"><a href="https://www.uwiener.edu.pe/" class="link miga">Inicio /</a><a
              href="#" aria-current="page" class="link miga w--current">Políticas de privacidad</a></div>
        </div>
      </div>
    </div>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="info_universidad">
              <div id="w-node-e5aebbeb63fe-aa88130f" class="item_info privacidad">

                <p><strong>Universidad Privada Norbert Wiener S.A.</strong> (en adelante, “<strong>LA
                    UNIVERSIDAD</strong>”) tiene el compromiso de proteger su privacidad y de cumplir las leyes sobre la
                  protección y privacidad de los datos personales. La presente Política de Protección de Datos
                  Personales (en adelante, la «Política») explica la forma en que <strong>LA UNIVERSIDAD</strong>
                  almacenará y dará tratamiento a sus datos personales en nuestro banco de datos, motivo por el cual, es
                  prioritario para <strong>LA UNIVERSIDAD</strong> contar con el consentimiento expreso de los
                  postulantes y estudiantes (pregrado o posgrado) para el tratamiento de sus datos personales, para lo
                  cual, luego de leer esta Política, <strong>EL TITULAR</strong> deberá hacer check en el recuadro de la
                  APP y/o Web de <strong>LA UNIVERSIDAD</strong> donde se indica que ha leído, comprende y está de
                  acuerdo con esta Política, otorgando su conformidad y <strong>AUTORIZANDO </strong>a <strong>LA
                    UNIVERSIDAD</strong> para que realice el tratamiento de sus datos personales de conformidad con la
                  Ley N° 29733 – Ley de Protección de Datos Personales y su reglamento el Decreto Supremo N°
                  003-2013-JUS, conforme a las siguientes a las siguientes términos y condiciones:</p>



                <ol class="wp-block-list">
                  <li><strong>OBJETIVO. –<br></strong>1.1. El objetivo de la presente política es la declaración y
                    compromiso formal de <strong>LA UNIVERSIDAD</strong> en informar a <strong>EL TITULAR</strong> sobre
                    las actividades y/o eventos promocionales, educativas, académicas y administrativas, a través de
                    mensajes electrónicos personalizados o masivos para promover nuestros servicios y productos, así
                    como prestar el servicio de telemercadeo a su dirección electrónica, así como información respecto a
                    los diferentes programas académicos de pregrado, postgrado, computación e idiomas, eventos
                    académicos, artísticos, culturales y de entretenimiento organizados por <strong>LA
                      UNIVERSIDAD</strong>, para lo cual podrá utilizar vía Telefonía fija, telefonía celular,
                    mensajería de texto, mensajes de WhatsApp, correo electrónico o cualquier otro mecanismo de
                    comunicación que nos hayas brindado.</li>
                  <li><strong>ALCANCE</strong>.<strong> –</strong><br>La presente política es de aplicación para todas
                    las páginas web y apps administradas por LA UNIVERSIDAD y estén al uso público.</li>
                  <li><strong>REFERENCIAS NORMATIVAS. –<br></strong>3.1. Ley N° 29733 – Ley de Protección de Datos
                    Personales.<br>3.2. D.S. N° 003-2013-JUS – Reglamento de la Ley N° 29733.</li>
                  <li><strong>DE LOS PRINCIPIOS RECTORES. –<br></strong>En <strong>LA UNIVERSIDAD</strong> respetamos
                    los principios de protección de datos personales.<br>4.1. <strong>Principio de legalidad</strong>,
                    se rechaza la recopilación de los datos personales de EL TITULAR por medios ilegales y
                    fraudulentos.<br>4.2. <strong>Principio de consentimiento</strong>, se obtendrá el consentimiento de
                    EL TITULAR de manera libre, informado, expreso, inequívoco y previo al tratamiento de sus datos
                    personales.<br>4.3. <strong>Principio de finalidad</strong>, los datos personales de nuestros
                    usuarios se recopilarán para una finalidad determinada, explícita y lícita, y no se extenderá a otra
                    finalidad que no haya sido la establecida de manera inequívoca como tal al momento de su
                    recopilación.<br>4.4. Principio de proporcionalidad, todo tratamiento de datos personales de
                    nuestros usuarios será adecuado, relevante y no excesivo a la finalidad para la que estos hubiesen
                    sido recopilados.<br>4.5. Principio de calidad, los datos personales que vayan a ser tratados serán
                    veraces, exactos y, en la medida de lo posible, actualizados, necesarios, pertinentes y adecuados
                    respecto de la finalidad para la que fueron recopilados. Se conservarán de forma tal que se
                    garantice su seguridad y solo por el tiempo necesario para cumplir con la finalidad del
                    tratamiento.<br>4.6. Principio de seguridad, LA UNIVERSIDAD adopta las medidas técnicas,
                    organizativas y legales necesarias para garantizar la seguridad y confidencialidad de los datos
                    personales. LA UNIVERSIDAD cuenta con las medidas de seguridad apropiadas, y acordes con el
                    tratamiento que se vaya a efectuar y con la categoría de datos personales de que se trate.<br>4.7.
                    Principio de nivel de protección adecuado, LA UNIVERSIDAD garantiza el nivel adecuado de protección
                    de los datos personales de sus usuarios para el flujo transfronterizo de datos personales, con un
                    mínimo de protección equiparable a lo previsto por la Ley Nº 29733 o por los estándares
                    internacionales de la materia.</li>
                  <li>DE LA DEFINICIÓN DE DATOS PERSONALES. –<br>5.1. De acuerdo con la ley, se define el término Datos
                    Personales como “aquella información numérica, alfabética, gráfica, fotográfica, acústica, sobre
                    hábitos personales, o de cualquier otro tipo concerniente a las personas naturales que las
                    identifica o las hace identificables a través de medios que puedan ser razonablemente utilizados.”
                    LA UNIVERSIDAD considera como datos personales, a toda aquella información que EL TITULAR ingrese
                    voluntariamente a través de cualquiera de nuestros formularios en nuestros sitios web o la que se
                    envía por correo electrónico.</li>
                  <li>BASE DE DATOS. –<br>6.1. Los datos de <strong>EL TITULAR</strong> serán almacenados en los bancos
                    de datos personales de denominación “<strong>POSTULANTES – ADMISION</strong>”, inscrito con el
                    código RNPDP-PJP Nº 17382, y “<strong>ALUMNOS</strong>, inscrito con el código RNPDP-PJP Nº 17382
                    expedidos y autorizados por la Dirección de Protección de Datos Personales del Ministerio de
                    Justicia y Derechos Humanos, cuyo titular es <strong>LA UNIVERSIDAD</strong>, con domicilio en Av.
                    República de Chile Nro. 388 Urb. Santa Beatriz, Distrito de Jesús María.<br>6.2. Asimismo, se
                    informa que los destinatarios de los datos personales serán las oficinas de Marketing, Admisión,
                    Servicios Universitarios, y cualquier otra unidad académica o administrativa de la Universidad, la
                    cual conservará los datos personales permanentemente o hasta que sean modificados dependiendo de la
                    naturaleza de los mismos; con la finalidad de utilizarlos en gestiones académicas, institucionales,
                    administrativas y comerciales, así como procesar y manejar información para el adecuado desarrollo
                    de la prestación de servicios y cubrir las necesidades de sus interesados.<br>6.3. LA UNIVERSIDAD
                    cancela los datos personales de sus bancos de datos cuando los mismos dejen de ser necesarios para
                    las finalidades para las cuales fueron recopilados, cuando venza el plazo de 5 años para su
                    tratamiento o cuando EL TITULAR revoque su consentimiento para el tratamiento de sus datos
                    personales. Precisando que el plazo previo consentimiento</li>
                  <li>DE LAS REDES SOCIALES. –<br>7.1. Las redes sociales de las que participan tanto LA UNIVERSIDAD
                    como EL TITULAR cuentan con sus propias políticas de privacidad a las que deberán sujetarse todos EL
                    TITULAR de tales redes. Por tal razón, le recomendamos revisar las Políticas de Privacidad de las
                    redes sociales para asegurarse encontrarse de acuerdo con éstas. Asimismo, LA UNIVERSIDAD se libera
                    de toda responsabilidad que pueda ocasionar el incorrecto funcionamiento y/o el inadecuado uso de
                    las redes sociales, la falsedad del contenido y la ilicitud de la forma en que éste fue obtenido,
                    así como de los daños y perjuicios que se pudieran generar por las publicaciones en estas redes,
                    siendo los únicos responsables EL Titular de la red social que hayan realizado tales acciones.</li>
                  <li>DE LAS FINALIDADES DEL TRATAMIENTO DE LA INFORMACIÓN. –<br>8.1. De conformidad con la Ley N° 29733
                    – Ley de Protección de Datos Personales y su Reglamento aprobado mediante D.S. 003-2013-JUS, el
                    interesado declara estar informado y con la aceptación de la presente política otorgando su
                    consentimiento expreso para que los datos personales que facilite queden incorporados en el Banco de
                    Datos Personales de Personas Interesadas en LA UNIVERSIDAD y sean tratados por esta con la finalidad
                    de absolver sus consultas y brindarles información publicitaria, dándoles usos que incluyen temas
                    referidos a las actividades y/o eventos promocionales, educativas, académicas y administrativas, a
                    través de mensajes electrónicos personalizados o masivos para promover nuestros servicios y
                    productos. EL TITULAR autoriza a que LA UNIVERSIDAD mantenga sus datos personales en el banco de
                    datos referido en tanto sean útiles para la finalidad y usos antes mencionados.<br>8.2. La
                    protección de los datos personales de los menores es extremadamente importante. Por lo que la
                    presente política ha sido redactada para que los menores de edad, entre 14 y 18 años, puedan
                    entenderla. LA UNIVERSIDAD no recolecta datos personales relativos a menores de edad (0 -13 años) a
                    través de su página web. En el caso que LA UNIVERSIDAD tenga conocimiento que los datos personales
                    suministrados pertenecen a un menor de edad (0 -13 años) se adoptarán las medidas oportunas para
                    eliminar los datos personales tan pronto como sea posible.<br>8.3. LA UNIVERSIDAD declara que el
                    tratamiento de datos personales de EL TITULAR, no serán objeto de transferencia para otras entidades
                    públicas o privadas nacionales o internacionales.</li>
                  <li>DE LA DECLARACIÓN DE PRIVACIDAD. –<br>9.1. LA UNIVERSIDAD no recopila datos personales sobre EL
                    TITULAR, excepto cuando él mismo brinde información voluntariamente, al registrarse en alguno de los
                    sitios web o cuando envíe un correo electrónico u otra comunicación dirigida a LA UNIVERSIDAD. LA
                    UNIVERSIDAD no procesará ni transferirá los datos personales sin previo consentimiento de EL
                    TITULAR.</li>
                  <li>DE LA SEGURIDAD Y CONFIDENCIALIDAD DE LOS DATOS. –<br>10.1. LA UNIVERSIDAD se compromete a cumplir
                    con los estándares de seguridad y confidencialidad necesarios para asegurar la confiabilidad,
                    integridad y disponibilidad de la información recopilada de los usuarios. EL TITULAR es el único
                    responsable de suministrar sus datos personales a LA UNIVERSIDAD.<br>10.2 LA UNIVERSIDAD ha adoptado
                    las medidas de seguridad exigidas por la ley y se compromete a tratar los datos personales como
                    información reservada a fin de prevenir y evitar el acceso o difusión no autorizada y asegurar el
                    uso apropiado de la información. LA UNIVERSIDAD no se hace responsable sobre el riesgo de
                    sustracción de información de datos personales que pueda ser realizada por terceros, cuando EL
                    TITULAR realiza la transferencia de información a los servidores en los que se encuentra alojada la
                    página web a través de su computadora o dispositivo móvil.</li>
                  <li>DE LOS DERECHOS DE EL TITULAR (Derechos ARCO). –<br>11.1. De conformidad con la Ley, EL TITULAR
                    podrá solicitar, en cualquier momento, sus derechos de acceso, actualización, rectificación,
                    inclusión, oposición y supresión o cancelación de datos personales al siguiente correo electrónico
                    datos.personales@uwiener.edu.pe, en el cual se tramitara la modificación que desees el titular, o
                    presentándolo físicamente en la oficina ubicada a la dirección Av. República de Chile N°432- Jesús
                    María, debiendo adjuntar en ambos casos una copia de su DNI.</li>
                  <li>DEL CONSENTIMIENTO DEL TITULAR Y ACEPTACIÓN DE LOS TÉRMINOS. –<br>12.1. Esta declaración de
                    privacidad y confidencialidad descrita en la presente política constituye un acuerdo válido entre EL
                    TITULAR y LA UNIVERSIDAD, que confirma el conocimiento, entendimiento y aceptación por parte de EL
                    TITULAR de lo expuesto con los fines expresados. En caso no estar de acuerdo, EL TITULAR no deberá
                    proporcionar ninguna información personal, ni utilizar el servicio o cualquier información
                    relacionada con los sitios web de LA UNIVERSIDAD.<br>12.2 En consecuencia, EL TITULAR de los datos
                    personales manifiesta el consentimiento informado, previo, libre, expreso, y por tiempo indefinido,
                    para que LA UNIVERSIDAD pueda hacer uso de los datos personales que les proporcione, así como de la
                    información que se derive de su uso y de cualquier información de acceso público.<br>12.3 Con la
                    aceptación digital y trazable de la presente Política, ya sea mediante clic, toque, pinchado,
                    “touch”, “pad” u otros mecanismos similares y/o utilizar la APP y Web de LA UNIVERSIDAD, usted nos
                    autoriza a almacenar sus datos personales en el banco de datos personales de titularidad de LA
                    UNIVERSIDAD, el cual es administrado por LA UNIVERSIDAD; y, a efectuar el tratamiento de sus datos
                    personales, de conformidad a lo establecido en la Ley Nº 29733 y su reglamento. Si usted no está
                    conforme con esta Política, por favor absténgase de aceptarla y/o utilizar este sitio web y/o
                    proporcionar sus datos personales a LA UNIVERSIDAD.</li>
                  <li>LIMITACIÓN DE RESPONSABILIDAD E INDEMNIDAD<br>13.1. LA UNIVERSIDAD no es responsable por el
                    registro de datos personales de un menor, si al momento del recojo de datos, éste consignó una fecha
                    de nacimiento o edad incorrecta, que impida advertir que es menor de edad. Tienes derecho a acceder
                    a los datos personales que tenemos registrados y a los detalles del tratamiento de los mismos, así
                    como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando consideres que no se
                    requieren para alguna de las finalidades señaladas en el presente Aviso, estén siendo utilizados
                    para finalidades no consentidas o haya finalizado la relación contractual o de servicio, o bien,
                    oponerte al tratamiento de los mismos para fines específicos. Para hacerlo, deberás dirigir tu
                    solicitud a la dirección Av. República de Chile N°432- Jesús María. La respuesta a su solicitud se
                    realizará dentro del plazo establecido por Ley.<br>13.2. LA UNIVERSIDAD no asumirá responsabilidad
                    alguna por cualquier hecho determinante de terceros, sea éste de índole técnico, físico o producto
                    de un caso fortuito o fuerza mayor que imposibilite, retrase, elimine o capture ilegalmente datos
                    personales, demore la ejecución o no permita el acceso y correcto funcionamiento de la
                    aplicación.<br>13.3. LA UNIVERSIDAD no garantiza que la aplicación esté libre de errores, ni que
                    funcione siempre sin interrupciones, retrasos o imperfecciones.<br>13.4. LA UNIVERSIDAD no asume
                    responsabilidad de los posibles daños o perjuicios a través de las funcionalidades brindadas en APP
                    Y/O WEB de LA UNIVERSIDAD que se puedan derivar de interferencias, omisiones, interrupciones, virus
                    informáticos, averías o desconexiones en el funcionamiento operativo del sistema electrónico, así
                    como también de daños que puedan ser causados por terceras personas mediante intromisiones
                    ilegítimas fuera del control de LA UNIVERSIDAD.<br>13.5. LA UNIVERSIDAD no asume responsabilidad por
                    el posible retraso, falla en el rendimiento o la interrupción en el funcionamiento de APP Y/O WEB de
                    LA UNIVERSIDAD que pueda resultar directa o indirectamente de cualquier causa o circunstancia más
                    allá de su control razonable, incluyendo, pero sin limitarse a fallas en los equipos o las líneas de
                    comunicación electrónica o mecánica, robo, delitos informáticos de origen internacional y/o local,
                    errores del operador, clima severo, terremotos o desastres naturales, huelgas u otros problemas
                    laborales, guerras, o restricciones gubernamentales.<br>13.6. EL TITULAR asumen la responsabilidad
                    sobre la veracidad, exactitud y vigencia de los datos personales que nos proporcionan, LA
                    UNIVERSIDAD no asume la responsabilidad de cualquier daño o perjuicio que pudiera producirse como
                    resultado del incumplimiento de tal deber.</li>
                  <li>MODIFICACIONES DE LA POLÍTICA<br>14.1 LA UNVIERSIDAD podrá modificar en cualquier momento la
                    presente Política. Cualquier cambio será efectivo apenas sea publicado en la APP Y/O WEB teniendo
                    usted el derecho de solicitar el cese del tratamiento de sus datos personales o la supresión de los
                    mismos en caso de no encontrarse de acuerdo con las modificaciones que se pudieran introducir a la
                    Política.</li>
                  <li>DE LA CONFORMIDAD.<br>15.1 El TITULAR declara haber recibido toda la información necesaria para el
                    ejercicio libre y voluntario de los derechos a la protección de los datos personales.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
