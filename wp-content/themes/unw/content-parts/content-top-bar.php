<section class="top-bar">
  <div class="x-container top-bar__wrapper">

    <div class="top-bar__left">
      <ul class="top-bar__menu">
        <li class="top-bar__menu-item">
          <a class="top-bar__menu-link" href="#">INTERNACIONALIZACIÓN</a>
        </li>
        <li class="top-bar__menu-item">
          <a class="top-bar__menu-link" href="#">NOTICIAS</a>
        </li>
        <li class="top-bar__menu-item">
          <a class="top-bar__menu-link" href="#">INVESTIGACIÓN</a>
        </li>
        <li class="top-bar__menu-item">
          <a class="top-bar__menu-link" href="#">REPOSITORIO</a>
        </li>
      </ul>
    </div>

    <div class="top-bar__right">
      <div class="top-bar__search">
        <form action="/" method="get" class="top-bar__search-form">
          <i>
            <svg class="icon icon--arrow" width="19" height="19">
              <use xlink:href="#search"></use>
            </svg>
          </i>
          <input
            class="top-bar__search-input"
            type="text"
            name="s"
            placeholder="¿Qué estás buscando?"
            aria-label="Buscar" />
        </form>
      </div>

      <div class="top-bar__social">
        <ul class="top-bar__social-list">
          <li class="top-bar__social-item">
            <a class="top-bar__social-link" href="#">
              <img class="top-bar__social-icon" src="<?php echo get_template_directory_uri(); ?>/upload/social/facebook.svg" alt="Facebook" />
            </a>
          </li>
          <li class="top-bar__social-item">
            <a class="top-bar__social-link" href="#">
              <img class="top-bar__social-icon" src="<?php echo get_template_directory_uri(); ?>/upload/social/youtube.svg" alt="YouTube" />
            </a>
          </li>
          <li class="top-bar__social-item">
            <a class="top-bar__social-link" href="#">
              <img class="top-bar__social-icon" src="<?php echo get_template_directory_uri(); ?>/upload/social/link.svg" alt="LinkedIn" />
            </a>
          </li>
          <li class="top-bar__social-item">
            <a class="top-bar__social-link" href="#">
              <img class="top-bar__social-icon" src="<?php echo get_template_directory_uri(); ?>/upload/social/instagram.svg" alt="Instagram" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
