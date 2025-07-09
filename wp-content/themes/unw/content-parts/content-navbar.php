<header class="navbar" id="navbar">
  <?php get_template_part(GENERAL_CONTENT_PATH, 'top-bar');?>
  <div class="x-container x-container--pad-64 navbar__wrapper">

    <a class="navbar__logo pointer">
      <img width="101" height="40" src="<?php echo get_template_directory_uri(); ?>/upload/logo-unw.svg" alt="">
    </a>


    <div class="navbar__content">
      <div class="navbar__menu-wrapper">
        <?php
            wp_nav_menu(array(
              'menu' => 'navbar_menu',
              'menu_class' => 'flex items-center justify-end',
              'container' => 'nav',
              'container_class' => 'navbar__menu flex-auto',
              'walker' => new Desktop_Menu_Walker(),
            ));
        ?>


      </div>

      <div class="navbar__menu-mobile">

        <button type="button" class="btn-menu-hamburger pointer" id="btn-open-menu">
          <i>
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M33.3333 33.3334H6.66667C5.74667 33.3334 5 32.5884 5 31.6667C5 30.7451 5.74667 30.0001 6.66667 30.0001H33.3333C34.2533 30.0001 35 30.7451 35 31.6667C35 32.5884 34.2533 33.3334 33.3333 33.3334Z"
                fill="#242424" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M33.3333 10.0001H6.66667C5.74667 10.0001 5 9.25508 5 8.33341C5 7.41175 5.74667 6.66675 6.66667 6.66675H33.3333C34.2533 6.66675 35 7.41175 35 8.33341C35 9.25508 34.2533 10.0001 33.3333 10.0001Z"
                fill="#242424" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M33.3333 21.6667H6.66667C5.74667 21.6667 5 20.9217 5 20.0001C5 19.0784 5.74667 18.3334 6.66667 18.3334H33.3333C34.2533 18.3334 35 19.0784 35 20.0001C35 20.9217 34.2533 21.6667 33.3333 21.6667Z"
                fill="#242424" />
            </svg>
          </i>
        </button>
      </div>
    </div>
  </div>
</header>
