<section class="sidebar-container" id="sidebar" style="display: none;">
  <div class="sidebar__wrapper">
    <div class="x-container sidebar__header">
      <a class="sidebar__logo pointer" href="<?php echo esc_url(home_url('/')); ?>">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        if ($custom_logo_id) {
          $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
          echo '<img width="101" height="40" src="' . placeholder() . '" data-src="' . esc_url($logo_url) . '" class="lazyload" alt="' . get_bloginfo('name') . '">';
        } else {
          echo '<img width="101" height="40" src="' . placeholder() . '" data-src="' . get_template_directory_uri() . '/upload/logo-unw.svg" class="lazyload" alt="Logo UNW">';
        }
        ?>
      </a>
      <button type="button" aria-label="Abrir sidebar" class="btn-menu-hamburger pointer" id="btn-close-menu">
        <i>
          <svg width="40" height="40">
            <use xlink:href="#close"></use>
          </svg>
        </i>
      </button>
    </div>

    <div class="sidebar__menu" id="mobile-menu">
      <?php
        wp_nav_menu(array(
        'menu' => 'navbar_menu',
        'menu_class'=> 'sidebar__list',
        'container' => 'nav',
        'container_class' => 'sidebar__nav',
        'walker' => new Sidebar_Menu_Walker()
      ));
      ?>
    </div>
    <div class="x-container sidebar__footer">
      <?php get_template_part('content-parts/content', 'search'); ?>
    </div>
  </div>
</section>
