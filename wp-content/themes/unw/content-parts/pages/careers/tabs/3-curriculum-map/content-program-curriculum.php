<section class="program-curriculum" aria-labelledby="program-curriculum-title">
  <div class="program-curriculum__wrapper">
    <div class="program-curriculum__header">
      <h1 id="program-curriculum-title" class="program-curriculum__title">Malla Curricular</h1>
      <div class="program-curriculum__description-wrapper">
        <p class="program-curriculum__description">
          La carrera profesional de Farmacia y Bioquímica en la Universidad Norbert Wiener tiene una malla curricular
          enriquecida con cursos y casos prácticos de
          <a href="https://www.asu.edu" rel="noopener noreferrer" target="_blank">Arizona State University</a>.
        </p>
        <p class="program-curriculum__description">
          Estudiarás con moderna infraestructura, simuladores y la mejor tecnología para formarte como un químico
          farmacéutico integral de clase mundial. Además aprenderás sobre: química, fármaco-botánica, farmacología y
          más.
        </p>
      </div>
    </div>

    <div class="program-curriculum__content" aria-label="Listado de cursos por ciclo">
      <ul class="program-curriculum__cycles-list">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
        <li class="program-curriculum__cycles-item">
          <article class="cycle-card">
            <div class="cycle-card__wrapper">
              <header class="cycle-card__header">
                <img class="cycle-card__course-icon" width="80" height="80"
                  src="<?php echo get_template_directory_uri(); ?>/upload/careers/malla/<?=$i?>.svg" alt="" />
              </header>
              <div class="cycle-card__content">
                <ul class="cycle-card__list">
                  <li class="cycle-card__item">
                    <span class="dot dot--purple" aria-hidden="true"></span>
                    <div class="cycle-card__course">
                      <img class="cycle-card__course-icon"
                        src="<?php echo get_template_directory_uri(); ?>/upload/careers/icon.png" alt="" />
                      <p class="cycle-card__course-name">Desarrollo Humano y Social</p>
                    </div>
                  </li>
                  <li class="cycle-card__item">
                    <span class="dot dot--gray" aria-hidden="true"></span>
                    <div class="cycle-card__course">
                      <img class="cycle-card__course-icon"
                        src="<?php echo get_template_directory_uri(); ?>/upload/careers/icon.png" alt="" />
                      <p class="cycle-card__course-name">Inglés I (virtual)</p>
                    </div>
                  </li>
                  <li class="cycle-card__item">
                    <span class="dot dot--blue" aria-hidden="true"></span>
                    <div class="cycle-card__course">
                      <img class="cycle-card__course-icon"
                        src="<?php echo get_template_directory_uri(); ?>/upload/careers/icon.png" alt="" />
                      <p class="cycle-card__course-name">Fundamentos Químicos I</p>
                    </div>
                  </li>
                  <li class="cycle-card__item">
                    <span class="dot dot--orange" aria-hidden="true"></span>
                    <div class="cycle-card__course">
                      <img class="cycle-card__course-icon"
                        src="<?php echo get_template_directory_uri(); ?>/upload/careers/icon.png" alt="" />
                      <p class="cycle-card__course-name">Estructura y Función del Cuerpo Humano</p>
                    </div>
                  </li>
                  <li class="cycle-card__item">
                    <span class="dot dot--dark-blue" aria-hidden="true"></span>
                    <div class="cycle-card__course">
                      <img class="cycle-card__course-icon"
                        src="<?php echo get_template_directory_uri(); ?>/upload/careers/icon.png" alt="" />
                      <p class="cycle-card__course-name">Prácticas en Farmacia y Bioquímica I</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </li>
        <?php endfor; ?>
      </ul>
    </div>
    <div class="program-curriculum__footer">
      <a class="btn btn-primary hero__content--cta" href="#">
        Descargar Brochure
        <svg width="16" height="19" aria-hidden="true">
          <use xlink:href="#arrow-down"></use>
        </svg>
      </a>
    </div>
  </div>
</section>
