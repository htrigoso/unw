<section class="sidebar-container" id="sidebar" style="display: none;">
  <div class="sidebar__wrapper">
    <div class="x-container sidebar__header">
      <a class="sidebar__logo pointer" href="<?php echo esc_url(home_url('/')); ?>">
        <img width="101" height="40" src="<?php echo get_template_directory_uri(); ?>/upload/logo-unw.svg" alt="Logo UNW">
      </a>
      <button type="button" class="btn-menu-hamburger pointer" id="btn-close-menu">
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
      <div class="sidebar__social">
        <?php get_template_part('content-parts/content', 'social'); ?>
      </div>
    </div>
  </div>
</section>
