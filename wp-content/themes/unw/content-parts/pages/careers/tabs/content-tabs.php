 <div class="tabs">
   <!-- <nav class="tabs__navigation">
     <a href="#" class="tab__item is-active" data-target="presentacion">Presentación</a>
     <a href="#" class="tab__item" data-target="beneficios">Beneficios</a>
     <a href="#" class="tab__item" data-target="malla">Malla Curricular</a>
     <a href="#" class="tab__item" data-target="campo-laboral">Campo Laboral</a>
     <a href="#" class="tab__item" data-target="docente">Plana Docente</a>
     <a href="#" class="tab__item" data-target="infraestructura">Infraestructura</a>
     <a href="#" class="tab__item" data-target="admision">Admisión</a>
     <a href="#" class="tab__item" data-target="internacionalizacion">Internacionalización</a>
   </nav> -->

   <div class="swiper-container tabs__navigation">
     <nav class="swiper-wrapper">
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item is-active" data-target="presentacion">Presentación</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="beneficios">Beneficios</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="malla">Malla Curricular</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="campo-laboral">Campo Laboral</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="docente">Plana Docente</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="infraestructura">Infraestructura</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="admision">Admisión</a>
       </div>
       <div class="swiper-slide tab__item-wrapper">
         <a href="#" class="tab__item" data-target="internacionalizacion">Internacionalización</a>
       </div>
     </nav>
   </div>

   <div class="x-container">
     <div class="tabs__content">
       <section id="presentacion" class="tab__content">
         <?php
          get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-career-intro');
          ?>
         <?php
          get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-testimonials');
          ?>
       </section>

       <section id="beneficios" class="tab__content">
         <?php
          get_template_part(CAREERS_CONTENT_TAB_PATH . '2-benefits/content-why-wiener');
          ?>
       </section>

       <section id="malla" class="tab__content">
         <?php
          get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-malla');
          ?>
       </section>

       <section id="campo-laboral" class="tab__content">
         <h2>Campo Laboral</h2>
         <p>Podrás desempeñarte en empresas privadas y públicas, en áreas como gestión de proyectos, investigación,
           consultoría, y desarrollo tecnológico.</p>
       </section>

       <section id="docente" class="tab__content">
         <h2>Docente</h2>
         <p>Nuestros docentes combinan experiencia académica con trayectoria profesional, garantizando una formación
           integral de alta calidad.</p>
       </section>

       <section id="infraestructura" class="tab__content">
         <h2>Infraestructura</h2>
         <p>Contamos con aulas modernas, laboratorios especializados, bibliotecas digitales y espacios de coworking que
           fomentan la innovación.</p>
       </section>

       <section id="admision" class="tab__content">
         <h2>Admisión</h2>
         <p>Infórmate sobre los requisitos de postulación, cronograma de admisión y beneficios exclusivos para primeros
           ingresantes.</p>
         <a href="/admision" class="button">Ver proceso de admisión</a>
       </section>

       <section id="internacionalizacion" class="tab__content">
         <h2>Internacionalización</h2>
         <p>Participa en intercambios académicos, doble titulación y programas de movilidad estudiantil en instituciones
           aliadas de prestigio internacional.</p>
       </section>
     </div>
   </div>
 </div>
