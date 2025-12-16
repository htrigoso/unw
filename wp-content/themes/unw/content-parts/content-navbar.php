<header class="navbar" id="navbar">
  <?php
    if(isset($args['hide_top_bar_power_asu'])):
      get_template_part(PBA_CONTENT_PATH, 'pba-navbar');

    else:
 get_template_part(GENERAL_CONTENT_PATH, 'top-bar');
    endif;
  ?>
  <div class="x-container x-container--pad-64 navbar__wrapper">
    <?php  ?>
    <a class="navbar__logo pointer" aria-label="Logo del menú" href="<?php echo home_url('/'); ?>">
      <?php
      $custom_logo_id = get_theme_mod('custom_logo');
      if ($custom_logo_id) {
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '">';
      } else {
        echo '<img src="' . get_template_directory_uri() . '/upload/unw-logo.svg" alt="' . get_bloginfo('name') . '">';
      }
      ?>
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
        <button type="button" class="btn-search-modal-form" aria-label="Abrir buscador" data-open-modal="search-modal">
          <i>
            <svg width="40" height="40">
              <use xlink:href="#search2"></use>
            </svg>
          </i>
        </button>

        <button type="button" aria-label="Abrir menú" class="btn-menu-hamburger pointer" id="btn-open-menu">
          <i>
            <svg width="40" height="40">
              <use xlink:href="#hamburguer"></use>
            </svg>
          </i>
        </button>
      </div>
    </div>
  </div>
</header>