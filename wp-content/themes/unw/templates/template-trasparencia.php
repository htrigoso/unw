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
    <div class="cover_img_page center fijo">
      <div class="overlay"></div>
      <img src="<?= UPLOAD_MIGRATION_PATH . '/transparencia/libro_reclamaciones.jpg' ?>"
        srcset="<?= UPLOAD_MIGRATION_PATH . '/transparencia/libro_reclamaciones-p-500.jpeg' ?> 500w, <?= UPLOAD_MIGRATION_PATH . '/transparencia/libro_reclamaciones.jpg' ?> 1920w"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= home_url("/nosotros/") ?>" rel="noopener noreferrer" target="_blank">1.
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Estatuto-wiener.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.1 Estatuto</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PEI-2024-2028-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.2 Plan Estratégico Institucional 2024-2028.</a>
                        </li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-044-2025-RPE-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.3 Reglamento General&nbsp;</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-ADM-REG-001-Reglamento-de-Admision-V07.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.4 Reglamento de Admisión.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento_Academico_General_V4_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.5 Reglamento Académico General V.4-2019 y su
                            modificatoria.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GLE-REG-002_Defensoria_Universitaria_V03.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.6 Reglamento de la Defensoría Universitaria.</a>
                        </li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-029-2025-RPE-UPNW-2-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.7 Reglamento del Programa de Becas.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/reglamento_Academico_General-Escuela_Posgrado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.8 Reglamento Académico General de la Escuela de
                            Posgrado 2016.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-BES-REG-002-Reglamento-de-promocion-de-la-practica-deportiva.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.9 Reglamento de Promoción de la práctica
                            deportiva.</a></li>
                        <li>2.10 Grados y Títulos</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rpe-024-2025-rpe-upnw-reglamento-de-tesis.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Reglamento de elaboración de tesis para optar por
                            el Título Profesional, Título de Especialista y Grado Académico de Maestro.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rr-n_-066-2025-r-upnw-lineamientos-trabajo-academico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo
                            Académico para Optar el Título de Especialista.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rr-n_-066-2025-r-upnw-lineamientos-trabajo-de-investigacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo de
                            Investigación para Optar el Grado Académico de Maestro.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento-de-Grados-y-Titulos-V5.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Reglamento de Grados y Títulos.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GRA-PRC-008-V.05-Tramite_Solicitud-Obtenci_n-grado-acad-y-titulo.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Procedimiento de trámite para la obtención de
                            grado académico y/o título profesional.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/upnw-gra-prc-025-procedimiento-de-obtencion-de-grado-o-titulo-v06.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Procedimiento para la obtención del Grado
                            Académico / Título Profesional.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GTI-PRC-001_elab_sust_trab_inv.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Elaboración de Trabajo Académico y
                            sustentación</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/10/Procedimiento-para-la-revalidación-de-grados-y-títulos-obtenidos-en-el-extranjero.pdf"
                            rel="noopener noreferrer" target="_blank">Procedimiento de trámite para la revalidación de
                            grados y títulos obtenidos en el extranjero.</a></li>
                        <li>2.11 Reglamento del Tribunal de Honor V.1-2019.</li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GCI-REG-001-Reglamento-de-Biblioteca-V04.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.12 Reglamento de la Biblioteca.</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento-del-Docente-V.04.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.13 Reglamento del docente.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/reglamento_regimen_docentes_ordinarios_V1_2019-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.14 Reglamento del régimen de docentes ordinarios
                            V.1-2019.</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PGC-2024-2028-publicacion-v2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.15 Plan de Gestión de Calidad de la UPNW
                            2024-2028.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-EES-POL-002-Politica-de-Responsabilidad-Social-v3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.16 Política de Responsabilidad Social.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Poli_tica_de_Proteccio_n_Ambiental_v.02_2020.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.17 Política de protección ambiental
                            V.02_2020.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-BES-POL-003-Atencion-a-estudiantes-con-discapacidad.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.18 Política para atención a estudiantes con
                            discapacidad</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento-Hostigamiento-Sexual-UNW-V3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.19 Reglamento de Prevención e Intervención en
                            casos de hostigamiento sexual.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-EES-REG-002-Reglamento-de-disciplina-del-estudiante-V3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.20. Reglamento de Disciplina del Estudiante.</a>
                        </li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/REGLAMENTO-DE-PPP-DE-LA-FCS.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.21. Reglamento de Prácticas Preprofesionales de
                            la Facultad de Ciencias de la Salud.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-052-2025-RPE-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.22. Política de pagos de estudiantes -
                            Pregrado</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-CCO-POL-003-Pol_C3_ADtica-de-pagos-de-estudiantes-posgrado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.23. Política de pagos de estudiantes -
                            Posgrado</a></li>
                        <li>2.24 Actas de Directorio</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/actas-de-sesiones-de-directorio-2020.pdf' ?>"
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
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6542d2fb3586ef1391708f_RR_753-2016-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.25 Resolución N° 753-2016-R-UPNW Aprobación de
                            carreras profesionales.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.27-Resoluci_n-N072-2023-R-UPNW-Requisitos-idiom-ticos-para-la-obtenci_n-del-grado-de-bachiller.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.26 Resolución N° 072-2023-R-UPNW Requisitos
                            idiomáticos para la obtención del grado de bachiller.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f654322eb4fc774dac72f52_Resolucion_613-2018-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.27 Resolución N° 613-2018-R-UPNW Requisitos
                            idiomáticos para la obtención del grado académico en la Escuela de Posgrado.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GAC-REG-003-Reglamento-de-Estudios-Pregrado-V07-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.28 Reglamento de Estudios de Pregrado.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RGG-093-Reglamento-de-repositorio-universitario.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.29 Reglamento de Repositorio
                            Universitario&nbsp;</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-GAC-PRC-020-V02-PROCEDIMIENTO-PARA-OTORGAMIENTO-DE-AUSPICIOS-Y-CR_DITOS-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.30 Procedimiento para otorgamiento de auspicios
                            y/o créditos académicos</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-129-2023-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2.31 Resolución N° 129-2023-R-UPNW Que precisa el
                            mecanismo de evaluación para los programas de salud.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-PRE-GRA-PRC-010-Conv_Pre_V22.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>3.1 Estados financieros</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Universidad-Privada-Norbert-Wiener-S.A.-_2023_EY-3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Universidad-Privada-Norbert-Wiener-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Universidad-Privada-Norbert-Wiener-Auditado-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EEFF-Universidad-Norbert-Wiener-31.12.2020.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EstadoFinanciero2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EstadoFinanciero2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EstadoFinanciero2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/estadoFinanciero2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>3.2 Donaciones otorgadas</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Donaciones_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Donaciones_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Donaciones_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>3.3 Comunicado de Reinversión</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Comunicado_reinversion_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/COMUNICADO_DE_REINVERSION_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/COMUNICADO_DE_REINVERSION.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-GG-035-2023-VF-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE GERENCIA GENERAL N°
                            035-2023-GG-UPNW</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lista-de-Precios-Pregrado-26-11-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">4.1 Lista de Precios Pregrado.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/LISTA-DE-PRECIOS-POSGRADO-V5_08042025_Transparencia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">4.2 Lista de Precios Posgrado.</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lista_Precios_Centro_Idiomas.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">4.4 Lista de Precios del Centro de Idiomas.</a>
                        </li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ista_Precios_PreWiener.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">4.5 Lista de Precios de Pre-Wiener.</a></li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/TUPA_VF_21032025.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">4.6 TUPA</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/upnw-cco-ftc-003-medios-de-pagos-autorizados.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/COMUNICADO-PROGRAMA-DE-BECAS.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">5.1 Comunicado Sobre el Programa de Becas.</a>
                        </li>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/COMUNICADO-CREDITOS-EDUCATIVOS.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">5.2 Comunicados de Créditos Educativos.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/COMUNICADO-BECAS-POSGRADO-SEGUNDAS-ESPECIALIDADES.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">5.3 Comunicado de Becas Posgrado y Segundas
                            Especialidades.</a></li>
                        <li>5.4 Cuadro de Becados por Beneficio y Escuela.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Total-Subvenciones-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Cuadro-de-subvenciones-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Cuadro-de-subvenciones-2023.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Cuadro-de-subvenciones-2022.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
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
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/farmacia-y-bioquimica-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/enfermeria-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/obtetricia-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/odontologia-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Tecnologia_Medica_en_Laboratorio_Clinico_y_Anatomia_Patologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/terapia-fisica-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/psicologia-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nutricion-humana-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MH1-PLAN-2019-REVISADO-1_compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/administracion_en_turismo_y_hoteleria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/administracion-y-direccion-de-empresas-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/administracion-y-marketing-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/administracion-y-negocios-internacionales-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ingenieria-sistemas-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ingenieria-industrial-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/derecho-y-ciencia-politica-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/contabilidad-y-auditoria-malla-curricular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado (Base Plan 2019) - Modalidad Semipresencial
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-022-2023-R-UPNW-Aprobaci_C3_B3n-de-planes-curriculares-Base-plan-2019-modalidad-semipresencial.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 022-2023-R-UPNW Aprobación de planes
                            curriculares (Base plan 2019) Modalidad Semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P63-FARMACIA-Y-BIOQUIMICA-SEMIPRESENCIAL-Y-ADENDA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2021 - Modalidad Presencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-074-2023-R-UPNW-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 074-2023-R-UPNW Aprobación de actualización de
                            planes curriculares 2021 modalidad presencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P02-ENFERMERIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P03-OBSTETRICIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P04-ODONTOLOGIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P05-TM-LABORATORIO-CLINICO-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P06-TM-TERAPIA-FISICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P07-PSICOLOGIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MH2-PLAN-2021-REVISADO-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P10-AD.TURISMO-Y-HOTELERIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P11-AD.DIRECCION-DE-EMPRESAS-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P13-AD.NEGOCIOS-INTERNACIONALES-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P14-ING.-SISTEMAS-E-INFORMATICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P15-ING.INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P16-DERECHO-Y-CIENCIA-POLITICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P17-CONTABILIDAD-Y-AUDITORIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P08-NUTRICION-Y-DIETETICA-ADENDA-5.06.-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Nutrición y Dietética</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2022 (Base plan 2021) - Modalidad
                          Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-075-2023-R-UPNW-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 075-2023-R-UPNW Aprobación de actualización de
                            planes curriculares 2022 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P64-ENFERMERIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P65-OBSTETRICIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P66-ODONTOLOGIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P67-TM-LABORATORIO-CLINICO-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P68-TM-TERAPIA-FISICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P69-PSICOLOGIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P71-AD.TURISMO-Y-HOTELERIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P72-AD.DIRECCION-DE-EMPRESAS-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P74-AD.NEGOCIOS-INTERNACIONALES-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P75-ING.-SISTEMAS-E-INFORMATICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P76-ING.INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P77-DERECHO-Y-CIENCIA-POLITICA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P78-CONTABILIDAD-Y-AUDITORIA-ADENDA-5.06-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P70-NUTRICION-Y-DIETETICA-ADENDA-6.06.-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2022 (Base plan 2021) - Modalidad a
                          Distancia</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-208-2022-R-UPNW-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 208-2022-R-UPNW Aprobación de planes
                            curriculares 2022 modalidad a distancia.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P79-PSICOLOGIA_A-DISTANCIA-rev._compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P80-ADM.-TURISMO-Y-HOTELERIA_A-DISTANCIA-rev-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P81-ADM.-Y-DIRECCION-DE-EMPRESAS-DIRECCION_-A-DISTANCIA_compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P83-ADM.-NEGOCIOS-INTERNACIONALES_A-DISTANCIA_Rev._compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P84-INGENIERIA-DE-SISTEMAS-E-INFORMATICA_A-DISTANCIA-rev._compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P85-INGENIERIA-INDUSTRIAL-Y-DE-GESTION-EMPRESARIAL_A-DISTANCIA-rev._compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P86-CONTABILIDAD-Y-AUDITORIA_A-DISTANCIA-rev._compressed.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Contabilidad y
                            Auditoría</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-226-2022-R-UPNW_compressed-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 226-2022-R-UPNW Aprobación de planes
                            curriculares 2022 modalidad a distancia.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P82-DERECHO-Y-CIENCIA-POLITICA-A-DISTANCIA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Carrera Profesional de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2024 - Modalidad Presencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-N-148-2024-R-UPNWvf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 148-2024-R-UPNW Aprobación de planes
                            curriculares</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-170-2023-R-UPNW-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 170-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad presencial.</a></li>
                        <li class="ql-indent-2"><a href="/wp-content/uploads/2025/04/rr-n-014-2025-r-upnw.pdf"
                            rel="noopener noreferrer" target="_blank">RR 014-2025-R-UPNW Actualización de planes
                            curriculares 2024</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Arquitectura-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Arquitectura</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ingenieria-Civil-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Civil</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Comunicacion-en-Medios-Digitales-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Comunicación en medios
                            digitales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Farmacia-y-Bioquimica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Farmacia y Bioquímica</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Obstetricia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Obstetricia</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Odontologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Odontología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Laboratorio-Clinico-y-Anatomia-Patologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Tecnología Médica en
                            Laboratorio Clínico y Anatomía Patológica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Terapia-Fisica-y-Rehabilitacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Tecnología Médica en Terapia
                            Física y Rehabilitación</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Psicologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Psicología</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Nutricion-y-Dietetica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Nutrición y Dietética</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Medicina-Humana.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Medicina Humana</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-en-Turismo-y-Hoteleria-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Direccion-de-Empresas-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Marketing-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Negocios-Internacionales-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ingenieria-de-Sistemas-e-Informatica-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ingenieria-Industrial-y-de-Gestion-Empresarial-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Derecho-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Contabilidad-y-Auditoria-P.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Contabilidad y Auditoría</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Pregrado 2024 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-178-2023-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 178-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-179-2023-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR 179-2023-R-UPNW Aprobación de planes
                            curriculares 2024 modalidad semipresencial.</a></li>
                        <li class="ql-indent-2"><a href="/wp-content/uploads/2025/04/rr-n-014-2025-r-upnw.pdf"
                            rel="noopener noreferrer" target="_blank">RR 014-2025-R-UPNW Actualización de planes
                            curriculares 2024</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-en-Turismo-y-Hoteleria-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración en Turismo y
                            Hotelería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Direccion-de-Empresas-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Dirección
                            de Empresas</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Marketing-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y
                            Marketing</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Administracion-y-Negocios-Internacionales-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Administración y Negocios
                            Internacionales</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ingenieria-de-Sistemas-e-Informatica-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería de Sistemas e
                            Informática</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ingenieria-Industrial-y-de-Gestion-Empresarial-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Ingeniería Industrial y de
                            Gestión Empresarial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Derecho-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Derecho y Ciencia
                            Política</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Contabilidad-y-Auditoria-SP.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Programa académico de Contabilidad y Auditoría</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2019 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Gestion_Publica_y_Gobernabilidad.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Docencia_Universitaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Gestion_en_Salud.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ciencia_Criminalistica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ciencias_de_Enfermeria__Gerencia_de_los_Cuidados_de_Enfermeria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención en
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Salud_Publica_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2022 - Modalidad Semipresencial</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-209-2022-R-UPNW-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR N° 209 - 2022 - R - UPNW Aprobación de
                            actualización de planes curriculares 2022 modalidad semipresencial</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P31-Maestr_C3_ADa-en-Ciencia-Criminal_C3_ADstica..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P32-Maestr_C3_ADa-en-Salud-P_C3_BAblica..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P34-Maestr_C3_ADa-en-Ciencias-de-Enfermer_C3_ADa-con-Menci_C3_B3n-en-Gerencia-de-los-Cuidado-de-Enfermer_C3_ADa..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención de
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P40-Maestr_C3_ADa-en-Docencia-Universitaria..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P46-Maestr_C3_ADa-de-Gesti_C3_B3n-en-Salud..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P48-Maestr_C3_ADa-en-Gesti_C3_B3n-P_C3_BAblica-y-Gobernabilidad..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-1">Planes curriculares Maestría 2022 - Modalidad a Distancia</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-210-2022-R-UPNW-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR N° 210 - 2022 - R - UPNW Aprobación de
                            actualización de planes curriculares 2022 modalidad a distancia</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P87-Maestr_C3_ADa-en-Gesti_C3_B3n-P_C3_BAblica-y-Gobernabilidad.-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Pública y Gobernabilidad</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P88-Maestr_C3_ADa-en-Docencia-Universitaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Docencia Universitaria</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P89-Maestr_C3_ADa-de-Gesti_C3_B3n-en-Salud.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría de Gestión en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P90-Maestr_C3_ADa-en-Ciencia-Criminal_C3_ADstica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencia Criminalística</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P91-Maestr_C3_ADa-en-Ciencias-de-Enfermer_C3_ADa-con-Menci_C3_B3n-e.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Ciencias de Enfermería con mención de
                            Gerencia de los Cuidados de Enfermería</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P92-Maestr_C3_ADa-en-Salud-P_C3_BAblica..pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Salud Pública</a></li>
                        <li class="ql-indent-1"><span style="color: rgb(51, 51, 51);">Planes curriculares Maestría -
                            Modalidad a Distancia</span></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-N_017-2024-R-UPNW-aprobacion-MBA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RR Nº 017 - 2024 R - UPNW Aprobación de
                            actualización de planes curriculares, programas de posgrado 2024 modalidad a distancia</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/P94-MAESTRIA-ADMINISTRACION-DE-NEGOCIOS.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Administración de Negocios - MBA</a>
                        </li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Plan_curricular_MBA_Salud.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Administrativa de la Salud -
                            MBA</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-N-149-2024-R-UPNWvf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Derecho Procesal Penal</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Psicologia-Educativa-y-Neuroeducacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Psicología educativa y
                            Neuroeducación</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Direccion-de-Operaciones-y-Logistica-Global.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Dirección de Operaciones y Logística
                            Global</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Gestion-del-Talento-Humano-y-Liderazgo-Organizacional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión del Talento Humano y Liderazgo
                            Organizacional</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Salud-Ocupacional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión de la Salud Ocupacional y
                            Prevención del Riesgo Laboral</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Gestion-de-la-Calidad-y-Acreditacion-en-Salud.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión de la Calidad y Acreditación
                            en Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Brochure-Gestion-educativa.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Maestría en Gestión Educativa con Enfoque en
                            Innovación y Calidad</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad Presencial</li>
                        <li class="ql-indent-2">Carrera Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-03-se-en-farmacia-clinica-y-atencion-farmaceutica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-53-se-en-farmacia-hospitalaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-52-se-en-asuntos-regulatorios-en-el-sector-farmaceutico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Asuntos Regulatorios en el
                            Sector Farmacéutico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-54-se-en-soporte-nutricional-farmacologico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Soporte Nutricional
                            Farmacológico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Enfermería</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-cuidado-enfermero-en-paciente-clinico-quirurgico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Paciente Clínico Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-cuidado-enfermero-en-neonatologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Neonatología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-salud-familiar-y-comunitaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud
                            Familiar y Comunitaria</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-salud-mental-y-psiquiatria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud Mental
                            y Psiquiatría</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-cuidado-enfermero-en-emergencias-y-desastres.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Emergencias y Desastres</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-salud-ocupacional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud
                            Ocupacional</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-cuidado-enfermero-en-cardiologia-y-cardiovascular.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Cardiología y Cardiovascular</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-gestion-de-servicios-de-salud-y-enfermeria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Servicios de
                            Salud y Enfermería</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-gestion-en-central-de-esterilizacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Central de
                            Esterilización</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-oncologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Oncológica</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-cuidados-intensivos.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-cuidado-enfermero-en-geriatria-y-gerontologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Geriatría y Gerontología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-centro-quirurgico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Centro
                            Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-cuidados-intensivos-neonatales.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos Neonatales</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-nefrologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en
                            Nefrología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-cuidados-quirurgicos-mencion-en-tratamiento-avanzado-en-heridas-y-ostomias.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Quirúrgicos: Mención en Tratamiento Avanzado en Heridas y Ostomías</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-en-salud-y-desarrollo-integral-infantil.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud y
                            Desarrollo Integral Infantil: Control de Crecimiento y Desarrollo e Inmunizaciones</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-enfermeria-pediatrica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-56-se-en-monitoreo-fetal.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Psicoprofilaxis_Obstetrica_y_Estimulacion_Prenatal.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoprofilaxis Obstétrica
                            y Estimulación Pre Natal</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-60-se-en-riesgo-obstetrico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo Obstétrico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Odontología</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Endodoncia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Endodoncia</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Ortodoncia-y-Ortopedia-Maxilar.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Ortodoncia y Ortopedia
                            Maxilar</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Rehabilitacion-Oral.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Rehabilitación Oral</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Restauradora-y-Estetica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Odontología Restauradora y
                            Estética</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Odontopediatria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Odontopediatría</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/SEG-138-SEGUNDA-ESPECIALIDAD-EN-PERIODONCIA-E-IMPLANTOLOGIA-ORAL-PRESENCIAL-rev.-05.03.24.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Periodoncia e
                            Implantología oral</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/SEG-139-SEGUNDA-ESPECIALIDAD-EN-RADIOLOGIA-BUCAL-Y-MAXILOFACIAL-PRESENCIAL-rev.-05.03.24.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Radiología bucal y
                            Maxilofacial</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Terapia Física y
                          Rehabilitación</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-fisioterapia-cardiorespiratoria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia
                            Cardiorrespiratoria</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-fisioterapia-en-el-adulto-mayor.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en el Adulto
                            Mayor</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-neurorrehabilitacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en
                            Neurorrehabilitación</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-en-terapia-manual-ortopedica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Terapia Manual
                            Ortopédica</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-10-se-en-nutricion-clinica-con-mencion-en-nutricion-oncologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            mención Nutrición Oncológica</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-08-se-en-nutricion-clinica-con-mencion-en-nutricion-deportiva.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Deportiva</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-09-se-en-nutricionclinica-con-mencion-en-nutricion-renal.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Renal</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hemoterapia_y_Banco_de_Sangre_web.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hemoterapia y Banco de
                            Sangre</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Citolog_C3_ADa.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Citología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hematolog_C3_ADa.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hematología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Historecnolog_C3_ADa.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Histotécnología</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad Semipresencial</li>
                        <li class="ql-indent-2">Carrera Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-129-se-en-farmacia-clinica-y-atencion-farmaceutica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-130-se-en-farmacia-hospitalaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Enfermería</li>
                        <li class="ql-indent-3"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ABSTRA1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Paciente Clínico Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Cuidado-Enfermero-en-Neonatologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Neonatología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Salud-Familiar-y-Comunitaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud
                            Familiar y Comunitaria</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Salud-Mental-y-Psiquiatria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud Mental
                            y Psiquiatría</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Cuidado-Enfermero-en-Emergencias-y-Desastres.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Emergencias y Desastres</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Salud-Ocupacional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Enfermería en Salud
                            Ocupacional</a></li>
                        <li class="ql-indent-3"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ABSTRA2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Cardiología y Cardiovascular</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Gestion-de-Servicios-de-Salud-y-Enfermeria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Servicios de
                            Salud y Enfermería</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Gestion-en-Central-de-Esterilizacion-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión de Central de
                            Esterilización</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-Oncologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Oncológica</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Cuidados-Intensivos.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Cuidado-Enfermero-en-Geriatria-y-Gerontologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Cuidado Enfermero en
                            Geriatría y Gerontología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Centro-Quirurgico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Centro
                            Quirúrgico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Cuidados-Intensivos-Neonatales.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Intensivos Neonatales</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-en-Nefrologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en
                            Nefrología</a></li>
                        <li class="ql-indent-3"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/ABF0E71.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Cuidados
                            Quirúrgicos: Mención en Tratamiento Avanzado en Heridas y Ostomías</a></li>
                        <li class="ql-indent-3"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/AB67A11.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería en Salud y
                            Desarrollo Integral Infantil: Control de Crecimiento y Desarrollo e Inmunizaciones</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Enfermeria-Pediatrica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Enfermería Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Carrera Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-119-se-en-monitoreo-fetal-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-120-se-en-psicoprofilaxis-obstetrica-y-estimulacion-pre-natal-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoprofilaxis Obstétrica
                            y Estimulación Pre Natal</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-121-se-en-riesgo-obstetrico-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo Obstétrico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-133-se-en-salud-sexual-y-reproductiva-del-escolar-y-adolescente-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Salud Sexual y
                            Reproductiva del Escolar y Adolescente</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-134-se-en-prevencion-de-cancer-ginecologico-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Prevención de Cáncer
                            Ginecológico</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Odontología</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-125-se-en-endodoncia-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Endodoncia</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-122-se-en-ortodoncia-y-ortopedia-maxilar-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Ortodoncia y Ortopedia
                            Maxilar</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-123-se-de-rehabilitacion-oral-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Rehabilitación Oral</a>
                        </li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-126-se-en-odontologia-restauradora-y-estetica-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Odontología Restauradora y
                            Estética</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-124-se-en-odontopediatria-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad de Odontopediatría</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Terapia Física y
                          Rehabilitación</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Fisioterapia-Cardiorrespiratoria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia
                            Cardiorrespiratoria</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Fisioterapia-en-el-Adulto-Mayor.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en el Adulto
                            Mayor</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Fisioterapia-en-Neurorrehabilitacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Fisioterapia en
                            Neurorrehabilitación</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Terapia-Manual-Ortopedica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Terapia Manual
                            Ortopédica</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-117-se-en-nutricion-clinica-con-mencion-en-nutricion-oncologica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            mención Nutrición Oncológica</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-116-se-en-nutricion-clinica-con-mencion-en-nutricion-deportiva.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Deportiva</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-118-se-en-nutricionclinica-con-mencion-en-nutricion-renal.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Clínica con
                            Mención en Nutrición Renal</a></li>
                        <li class="ql-indent-2">Carrera Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-112-se-en-hemoterapia-y-banco-de-sangre-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hemoterapia y Banco de
                            Sangre</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-113-se-en-citologia-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Citología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-114-se-en-hematologia-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Hematología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-115-se-en-histotecnologia-vf.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Histotécnología</a></li>
                        <li class="ql-indent-1">Planes curriculares Segunda Especialidad - Modalidad A distancia</li>
                        <li class="ql-indent-2">Programa Académico de Nutrición y Dietética</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-142-se-en-nutricion-pediatrica-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Nutrición Pediátrica</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Farmacia y Bioquímica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-127-se-en-asuntos-regulatorios-en-el-sector-farmaceutico-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Asuntos Regulatorios en el
                            Sector Farmacéutico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Soporte-Nutricional-Farmacologico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Soporte Nutricional
                            Farmacológico</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-131-se-en-farmacovigilancia-y-tecnovigilancia-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacovigilancia y
                            Tecnovigilancia</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Farmacia-Clinica-y-Atencion-Farmaceutica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Farmacia Clínica y
                            Atención Farmacéutica</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Farmacia-Hospitalaria.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda especialidad en Farmacia Hospitalaria</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Psicología</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-140-se-en-psicooncologia-vff.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicooncología</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/seg-141-se-en-psicoterapia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicoterapia</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-SE-Psicologia-Clinica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Psicología Clínica</a>
                        </li>
                        <li class="ql-indent-2">Programa Profesional de Tecnología Médica en Laboratorio Clínico y
                          Anatomía Patológica</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-SE-Microbiologia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Microbiología</a></li>
                        <li class="ql-indent-2">Programa Profesional de Obstetricia</li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-SE-Gestion-y-Administracion-en-los-Servicios-de-Salud-Sexual-y-Reproductiva.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Gestión y Administración
                            en los Servicios de Salud Sexual y Reproductiva</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Monitoreo-Fetal.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Monitoreo Fetal</a></li>
                        <li class="ql-indent-3"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Abstract-Riesgo-Obstetrico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Segunda Especialidad en Riesgo
                            Obstétrico&nbsp;</a></li>
                      </ul>
                      <p><br></p>
                      <ul>
                        <li>6.2 Modelo Educativo.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Modelo-Educativo-2020-comprimido.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Modelo_Educativo.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li>6.3 Relación de matriculados en programas académicos desistidos.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Matriculados-Programas-desistidos-2020-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/matriculados_2019_II_programas_acade_micos_desistidos.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019.</a></li>
                        <li>6.4 Resoluciones de programas académicos desistidos.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_44-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 44-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_40-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 40-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_37-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 37-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD-N_26-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 26-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_18-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 18-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_17-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 17-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_11-2019-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 11-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_04-2018-D-UPNWSA.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución Directoral N.º 04-2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RD_N_03-2018-D-UPNWSA.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>7.1 Número de Estudiantes por Facultades y Programas de Estudios.</li>
                        <li class="ql-indent-1">Pregrado</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-PRE-GRADO-firmado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2024-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2023-II-.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank" style="color: rgb(34, 34, 34);">2023-I</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank" style="color: rgb(34, 34, 34);">2022-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-MATRIC-PREGRADO-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-MATRIC-PREGRADO-2021-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-PREGRADO-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/matriculados-2020-I-PREGRADO-SETIEMBRE-03.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Nu_mero_Estudiantes_Matriculados_Pregrado_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_pregrado_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_pregrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_pregrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_pregrado_2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">Posgrado</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-POSGRADO-firmado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRICULADOS-POSGRADO-2024-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRICULADOS-POSGRADO-2024-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC_POSGRADO_2023-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRICULADOS-POSGRADO-2023-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2022-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2021-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3.-MATRIC-POSGRADO-2021-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2020-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/matriculados-2020-I-POSGRADO-SETIEMBRE-03.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-POSGRADO-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Nu_mero_Estudiantes_Matriculados_Posgrado_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_posgrado_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_posgrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_posgrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_posgrado_2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">Segunda Especialidad</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Numero-de-Estudiantes-por-Facultades-y-Programas-de-Estudios-SEGUNDA-ESPECIALIDAD-firmado-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-2024-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-2024-II-v2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC_SEG_ESP_2023-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEGUNDA-ESPECIALIDAD-2023-II-.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEGUNDA-ESPECIALIDAD-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-ESPECIALIDAD-2022-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-lII</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-ESPECIALIDAD-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-lI</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-ESPECIALIDAD-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-l</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-ESPECIALIDAD-2021-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.-MATRIC-ESPECIALIDAD-2021-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-ESPECIALIDAD-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-2020-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/matriculados-2020-I-SEG.-ESPEC.-SETIEMBRE-03.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/MATRIC-SEG-ESP-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nmero_Estudiantes_Segunda_Especialidad_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_2da-especialidad_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_2da-especialidad_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_2da-especialidad_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_estudiantes_2da-especialidad_2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.2 Número de Postulantes, Ingresantes y Matriculados por Modalidad de Ingreso - Pregrado.
                        </li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Pregrado-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Pregrado-2024-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-PREGRADO-2024-I-PRES-SEMI.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Pregrado_2023-II-PRES-SEMI-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-PREGRADO-2023-I-PRES-SEMI.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Pregrado-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Pregrado-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-PREGRADO-2021.2-8.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-PREGRADO-2021.1-r.1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-PREGRADO-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/postulantes_Ingresantes_Matriculados_Pregrado_2020-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/POSTULANTES-INGRESANTES-Y-MATRICULADOS-PREGRADO-2019-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_pregrado_2019-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/postu_ingre_matri_pregrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_pregrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_pregrado_2016-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.3 Número de Postulantes, Ingresantes y Matriculados por Modalidad de Ingreso - Posgrado.
                        </li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2024-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado_2024-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado_2024-I-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM_POSGRADO_2023-III-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2023-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/7.3PIM-POSGRADO-2022-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Posgrado-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-2021.III-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-2021.II_.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-2021.1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-2020-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Postulantes_Ingresantes_Matriculados_Posgrado_2020_I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-POSGRADO-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Postulantes_Ingresantes_Matriculados_Posgrado_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_posgrado_2019-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_posgrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_posgrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_posgrado_2016-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li>7.4 Número de Postulantes, Ingresantes y Matriculados - Segunda Especialidad.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Segunda-Especialidad-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SE-2024-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SE_2024-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SE_2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM_SE_2023-III-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Segunda-Especialidad-2023-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Segunda-Especialidad-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/7.4PIM-Segunda-Especialidad-2022-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-III</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Segunda-Especialidad-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-Segunda-Especialidad-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEGUNDA-ESPECIALIDAD-2021.III-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEGUNDA-ESPECIALIDAD-2021.II_.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEGUNDA-ESPECIALIDAD-2021.1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEG.-ESP-2020-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEG.-ESP-20202.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/postulantes_Ingresantes_Matriculados_Segunda_Especialidad_Periodo_2020_I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/PIM-SEG-ESP-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Postulantes_Ingresantes_Matriculados_Segunda_Especialidad_Periodo_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_2daEspecialidad_2019-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_2daEspecialidad_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_postu_ingre_matri_2daEspecialidad_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>7.5 Egresados.</li>
                        <li class="ql-indent-1">7.5.1 Pregrado.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2024-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2023-2-VF.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2022-II_VF.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-PREGRADO-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-PREGRADO-2021-II-.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-PREGRADO-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-PREGRADO-2020-II-actualizado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-PREGRADO-2020-I-actualizado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Egresados_Pregrado_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Egresados_Pregrado_2019_I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_pregrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_pregrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_pregrado_2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">7.5.2 Posgrado.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2024-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-PERIODO-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-PERIODO-2023-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2023-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2022-III_VF.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-POSGRADO-2021-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-POSGRADO-2021-II-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-POSGRADO-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-POSGRADO-2020-III-actualizado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3.EGRESADO-POSGRADO-2020-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fb6b36cefa6b7898262555a_EGRESADO-POSGRADO-2020-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fb6b36c0af5f97f04970498_EGRESADO-POSGRADO-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Egresados_Posgrado_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Egresados_Posgrado_2019_I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_posgrado_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_posgrado_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_posgrado_2016.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016.</a></li>
                        <li class="ql-indent-1">7.5.3 Segunda Especialidad.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SE-2024-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-PERIODO-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-PERIODO-2023-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SE-2023-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SE-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-III_VF.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/EGRESADOS-SEGUNDA-ESPECIALIDAD-2021-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2021-II-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2021-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.EGRESADO-SEGUNDA-ESPECIALIDAD-2020-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5.EGRESADO-SEGUNDA-ESPECIALIDAD-2020-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fb6b6dfdc12a67447940593_EGRESADO-SEGUNDA-ESPECIALIDAD-2020-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fb6b6df1730f73b4798ee97_EGRESADO-SEGUNDA-ESPECIALIDAD-2019-III.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-III.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/egresados_Segunda_Especialidad_2019_II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Egresados_Segunda_Especialidad_2019_I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_2da_especialidad_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/nro_egre_2da_especialidad_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017.</a></li>
                        <li>7.6 Cronograma de Admisión.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-026-2025-RPE-UPNW-22.04.2025-1-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-009-2025-RPE-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2024/07/Resolución-PE-030-2024-Aprobar-cronograma-admisión-2024-II.pdf"
                            rel="noopener noreferrer" target="_blank">2024 -II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RS-GG-057-2023-Cronograma-Admision-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024 -I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-GG040-2023-Cronograma-de-admision-2023II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023 -II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-GG-118-2022-Crono-grama-de-admisio_n-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023 -I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCI_C3_93N-GG-043-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022 -II </a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucio_n_107_Cronograma-Academico-Admisio_n_actualizado.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resoluci_C3_B3n-de-Gerencia-General-N_C2_BA034_Cronograma-admisi_C3_B3n-2022-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCI_C3_93N-DE-GERENCIA-GENERAL-N_C2_BA-024-2021-APROBAR-la-Actualizaci_C3_B3n-del-Cronograma-de-Admisi_C3_B3n-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fd194dd4d88db7f8ae1bd21_RG-UW-N_C2_B068-2020-3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5fd194dd4d88db7f8ae1bd21_RG-UW-N_C2_B068-2020-3.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f3c13050b0e5a02b4ad5cba_Cronograma-de-Admisio_n_Pregrado_2020-II-y-Res-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II - Actualizado</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656330d9d038ab739434ca_cronog_admision_2020-I-II-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I y 2020-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656349aa4dbb984ba499ca_cronog_admision_2019-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656369a4aef840c0a3a9b8_cronog_admision_2018-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656381e37a2012eb28f141_cronog_admision_2018-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6563a1b6be43e5e7ab2c55_cronog_admision_2017-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6563b6e0a1e1111a1ce148_cronog_admision_2017-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017-I.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6563ce1c72cb19d85f8d56_cronog_admision_2016-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016-II.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6563efe0a1e164ec1ce1b9_cronog_admision_2016-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2016-I.</a></li>
                        <li>7.7 Temario para los exámenes de admisión.</li>
                        <li class="ql-indent-1">2025</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Temario-de-Admision-2025_1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario General de admisión</a></li>
                        <li class="ql-indent-1">2024</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3.-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/4.-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2023-VB-GG.docx' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2023-VB-GG.docx' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3.-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2023-VB-GG.docx' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/4.-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2023-VB-GG.docx' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-TEMARIO-FACULTAD-DE-CIENCIAS-DE-LA-SALUD-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.-TEMARIO-FACULTAD-DE-INGENIERIA-Y-NEGOCIOS-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3.-TEMARIO-FACULTAD-DE-FARMACIA-Y-BIOQUIMICA-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/4.-TEMARIO-FACULTAD-DE-DERECHO-Y-CIENCIA-POLITICA-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2021</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1-TEMARIO-DE-CIENCIAS-DE-LA-SALUD-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ciencias de la Salud</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2-TEMARIO-DE-INGENIERIA-Y-NEGOCIOS-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Ingeniería y Negocios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/4-TEMARIO-DE-FARMACIA-Y-BIOQUIMICA-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Farmacia y Bioquímica</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/3-TEMARIO-DE-DERECHO-Y-CIENCIA-POLITICA-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario Facultad de Derecho y Ciencia Política</a>
                        </li>
                        <li class="ql-indent-1">2020</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/TEMARIO-EX_ADMISION_2020-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Temario General de admisión</a></li>
                        <li>7.8 Cronograma académico general.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Cronograma-Academico-General-UNW-2025.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-047-2024-Cronograma-academico-general.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-GG-041-2023-Actualizacion-Cronograma-Academico-General.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023 - Actualizado</a></li>
                        <li class="ql-indent-1">2022</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCIO_N-DE-GERENCIA-GENERAL-No-106-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022 - Actualizado</a></li>
                        <li class="ql-indent-1">2021</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Cronograma-Academico-General-2021-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021- Actualizado</a></li>
                        <li class="ql-indent-1">2020</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/cronograma_academico_general_2020_Julio.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Julio.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f65642fa1a332cb6bf39c8f_cronograma_academico_general_2020_abril.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Abril.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656448b90b48d4b4881a3d_cronograma_academico_general_2020_marzo.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Marzo.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f65646ee0a1e184151ce207_cronograma_academico_general_2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f65648de37a201a5e28f370_cronograma_academico_general_2018.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6564b5a1a332c1d7f39cc9_cronograma_academico_general_2017.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2017</a></li>
                        <li>7.9 Informe Estadístico de Admisión</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/informe-estadistico-admision-2023-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Informe 2023-2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/INFORME-ESTADISTICO-ADMISION-2022-2023-PRE-POS-Y-SE.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Informe 2022-2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/INFORME-ESTADI_STICO-ADMISIO_N-2021-2022-PRE-POS-Y-SE.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Informe 2021-2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/INFORME-ESTAD_C3_8DSTICO-ADMISI_C3_93N-2020-2021-PRE-POS-Y-SEG-PERIODOS_FINAL.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Informe 2020-2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/informe_estadistico_2017-2019.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Informe 2017-2019.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/informe_estadistico_2019_V2-Actualizacion.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>8.1 Plana docente</li>
                        <li class="ql-indent-1">2025.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2025-1-11.04-transparencia.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1">2024.</li>
                        <li class="ql-indent-2"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2024-2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-UPNW-2024-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-UPNW-2023-II-1-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-2"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2023-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2022-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II.</a></li>
                        <li class="ql-indent-2"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2022-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I.</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/C9-2021-II-VF.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II.</a></li>
                        <li class="ql-indent-1">2020.</li>
                        <li class="ql-indent-2"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2020/10/C9-2020-II-31.08-publicación.pdf"
                            rel="noopener noreferrer" target="_blank">2020-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Formato_C9_2020-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I.</a></li>
                        <li class="ql-indent-1">2019.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Formato_C9_2019_II_SUNEDU.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Formato_C9_2019_I_SUNEDU.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2019-I.</a></li>
                        <li class="ql-indent-1">2018.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Formato_C9_2018_II_SUNEDU.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018-II.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Formato_C9_2018_I_SUNEDU.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2018-I.</a></li>
                        <li>8.2 Hoja de vida docente</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-vida-docente-2024-II-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2024-I-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2023-2-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2023-1-2-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2022-II-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2022-I-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2021-II-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2021-I-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021-I</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-vida-docente-2020-II-Institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-II</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Hoja-de-Vida-Docente-2020-I-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020-I</a></li>
                        <li>8.3 Rangos salariales</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Rangos-Salariales-2023.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Rangos-Salariales-2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Rangos-Salariales-2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Rangos-Salariales-2020.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-PE-053-2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            053-2024-RPE-UPNW</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCION-DE-PRESIDENCIA-EJECUTIVA-N_-060-2024-RPE-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            060-2024-RPE-UPNW</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCION-DE-PRESIDENCIA-EJECUTIVA-N_-066-2024-RPE-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">RESOLUCIÓN DE PRESIDENCIA EJECUTIVA N°
                            066-2024-RPE-UPNW</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/91-upnw-ees-reg-006-reglamento-de-investigacion-v03.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.1 Reglamento de Investigación</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/92-upnw-ees-reg-007-reglamento-de-propiedad-intelectual-v04.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.2 Reglamento de Propiedad Intelectual</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento-de-Codigo-de-Etica-e-Integridad-Cientifica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.3 Reglamento del Código de Ética e Integridad
                            Científica</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Reglamento-del-Comite-Institucional-de-Etica-e-Integridad.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.4 Reglamento del Comité Institucional de Ética e
                            Integridad Científica</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/reglamento-del-repositorio-institucional.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.5 Reglamento del Repositorio Institucional</a>
                        </li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/96-upnw-ees-pol-004-politicas-generales-de-investigacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.6 Políticas Generales de Investigación</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/LINEAS-DE-INVESTIGACION-INSTITUCIONALES.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.7 Líneas de Investigación Institucionales</a>
                        </li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/97-upnw-ees-lin-003-directiva-de-conformacion-de-grupos-y-semilleros-de-investigacion-v2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.8 Directiva de conformación de Grupos y
                            Semilleros de Investigación</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Directiva-de-apoyo-a-la-publicacion-de-articulos-cientificos-indizados-en-SCOPUS-Y-WOS.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.9 Directiva de apoyo a la publicación de
                            artículos científicos indizados en Scopus y Wos</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/99-upnw-ees-lin-005-directiva-de-incentivos-a-la-publicacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">9.10 Directiva de incentivos para la
                            Investigación</a></li>
                        <li>9.11 Procedimientos y Guías del Vicerrectorado de Investigación</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/bases-de-fondo-concursable-de-proyectos-de-investigacion-interno.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Bases de fondo concursable de proyectos de
                            investigación interno dirigido a los grupos y semilleros de investigación 2024</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/BASES-DE-CONVOCATORIA-DE-PROYECTOS-DE-INVESTIGACION-INTERNO-SIN-FINANCIAMIENTO-DIRIGIDO-A-LOS-GRUPOS-Y-SEMILLEROS-DE-INVESTIGACION.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Bases de convocatoria de Proyectos de
                            Investigación interno sin financiamiento dirigido a los grupos y semilleros de Investigación
                            2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Bases-de-Fondo-Concursable-Proyectos-de-Investigacion-multidisciplinarios-2025.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Bases de fondo concursable de Proyectos de
                            Investigación Multidisciplinario dirigido a los Grupos y Semilleros de Investigación
                            2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/LINEAMIENTO-PARA-LA-APLICACION-DEL-SOFTWARE-DETECTOR-DE-SIMILITUDES-EN-TRABAJOS-ACADEMICOS-Y-DE-INVESTIGACION.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamientos para la aplicación del software
                            detector de similitudes de trabajos académicos y de investigación</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lineamientos-para-la-asignacion-de-carga-compl-en-inv-y-gest-de-la-inv.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la asignación de carga
                            complementaria en investigación y gestión de la investigación</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Manual-de-procedimientos-del-Comite-Institucional-de-etica-e-integridad-cientifica.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Manual de Procedimientos del Comité Institucional
                            de ética e integridad Científica</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lin-apoyo-eco-pasantias-ponencias-cti.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para el apoyo económico para la
                            participación en pasantías y ponencias en Ciencia, Tecnología e Innovación (CTI)&nbsp;</a>
                        </li>
                        <li>9.12 Guías de Investigación aplicables hasta el 2024-II</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/guia-elaboracion-tesis-cuantitativo.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Guía para la elaboración de la tesis enfoque
                            cuantitativo</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/guia-elaboracion-tesis-cualitativo.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Guía para la elaboración de la tesis enfoque
                            cualitativo</a></li>
                        <li>9.13 Normativas aplicadas en 2025-I</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rpe-024-2025-rpe-upnw-reglamento-de-tesis.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Reglamento de elaboración de tesis para optar por
                            el Título Profesional, Título de Especialista y Grado Académico de Maestro</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rr-n_-066-2025-r-upnw-lineamientos-trabajo-academico.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo
                            Académico para Optar el Título de Especialista</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/rr-n_-066-2025-r-upnw-lineamientos-trabajo-de-investigacion.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Lineamiento para la Elaboración del Trabajo de
                            Investigación para Optar el Grado Académico de Maestro</a></li>
                        <li>9.14 Proyectos de investigación</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/relacion-de-proyectos-de-investigacion2024.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/relacion-de-proyectos-de-investigacion2023.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/relacion-de-proyectos-de-investigacion2022.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/relacion-de-proyectos-de-investigacion2021.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f657c3fefb77367b8b215c4_VRI_DCI_Lista-de-proyectos-seleccionados-del-FCI2020.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f656f04cccdb12e1de5beb5_PROYECTOS_INVESTIGACION_2019.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li><a href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/AMBIENTES-DE-LA-DBU-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">10.1 Ambientes o espacios destinados a brindar los
                            servicios sociales, deportivos o culturales.</a></li>
                        <li><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/UPNW-BES-POL-003-Atencion-a-estudiantes-con-discapacidad.pdf' ?>"
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
                    <div class="icon_box admin"><img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt=""
                        class="arrow_down"></div>
                  </div>
                  <div style="height: 0px;" class="content_acordeon">
                    <div class="clase_para_wordpress transparencia">
                      <ul>
                        <li>11.1 Bases del Concurso Público docente</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/BASES-DE-LA-CONVOCATORIA-EXTERNA-DE-SELECCION-DOCENTE-2025.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-013-2024-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="https://www.uwiener.edu.pe/wp-content/uploads/2022/12/BASES-DE-LA-CONVOCATORIA-EXTERNA-DE-SELECCIÓN-DOCENTE-2023.pdf"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/1.-BASES-DEL-CONVOCATORIA-PU_BLICA-DE-SELECCIO_N-DOCENTE-202201.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/BASES-DEL-CONVOCATORIA-PA_-BLICA-DE-SELECCIA_-N-DOCENTE-2021-I-Final.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f3c1aefa4d7095fc8617efc_Bases_Concurso_publico_docente_2020-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020</a></li>
                        <li>11.2 Resoluciones de Ganadores del Concurso Público de Selección Docente.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Ganadores-de-Convocatoria-Externa-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-012-2024-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 012-2024.</a></li>
                        <li class="ql-indent-1">2022.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-033-2022-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 033-2022.</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-032-2021-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 032-2021.</a></li>
                        <li class="ql-indent-1">2020.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f657574a1a332448df3af24_Resolucio_n_N_020-2020-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 020-2020.</a></li>
                        <li class="ql-indent-1">2019.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f6575cfd9d038281f9460f4_Resolucio_n_N_037-2019-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 037-2019.</a></li>
                        <li class="ql-indent-1">2018.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f657626cccdb15a8ce5c5f1_Resolucio_n_N_1269-2018-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 1269-2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f657659880779b593a1c34d_Resolucio_n_N_1161-2018-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 1161-2018.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/5f65766e013a6dec8b0a41e8_Resolucio_n_N_1117-2018-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 1117-2018.</a></li>
                        <li>11.3 Docentes extraordinarios.</li>
                        <li class="ql-indent-1">2025-I</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RESOLUCION-N_-003-2025-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2025-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 003-2025</a></li>
                        <li class="ql-indent-1">2024-I</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RS-N_C2_B0-009-2024-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2024-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 009-2024</a></li>
                        <li class="ql-indent-1">2024-II</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/resolucion-n-023-2024-vra-upnw-docentes-extraordinarios-2024-ii-v2.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 023-2024</a></li>
                        <li class="ql-indent-1">2023.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RS-N_-004-2023-VRA-UPNW-DOCENTES-EXTRAORDINARIOS-2023-II.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 004-2023</a></li>
                        <li class="ql-indent-1">2021.</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-156-2021-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 156-2021.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-116-2021-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 116-2021.</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-041-2021-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resolución 41-2021.</a></li>
                        <li>11.4 Comisión de Concurso Público Docente.</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-013-2024-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-231-2022-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/2.-RESOLUCI_C3_93N-RECTORAL-001-2022-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2022.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-003-2021-R-UPNW-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2021.</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-216-2019-R-UPNW.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2020.</a></li>
                        <li>11.5 Vacantes para la Convocatoria Externa Docente</li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lista-de-Vacantes-Convocatoria-Externa-Docente-2025-I.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2025</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Lista-de-Vacantes-Convocatoria-Externa-Docente-2024-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2024</a></li>
                        <li class="ql-indent-1"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/Resolucion-GG-022-2023-1.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">2023</a></li>
                        <li>11.6 Docentes Ordinarios</li>
                        <li class="ql-indent-1">2023</li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-125-2023-R-UPNW-1-Bases-para-el-proceso-de-ratificacion-de-docentes-ordinarios.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Bases para el proceso de ratificación de docentes
                            ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-171-2023-R-UPNW-Bases-para-proceso-incorporacion-y-promocion-docentes-ordinarios-min.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Bases para proceso incorporación y promoción
                            docentes ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-157-2023-R-UPNW-Resultados-ratificacion-docentes-ordinarios.pdf' ?>"
                            rel="noopener noreferrer" target="_blank">Resultados del Proceso de Ratificación de Docentes
                            Ordinarios</a></li>
                        <li class="ql-indent-2"><a
                            href="<?= UPLOAD_MIGRATION_PATH . '/transparencia/RR-021-2024-R-UPNW-Resultados-incorporacion-promocion-docentes-ordinarios.pdf' ?>"
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