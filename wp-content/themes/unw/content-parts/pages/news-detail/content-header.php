<section class="header">
  <div class="header-wrapper x-container x-container--pad-64">
    <div class="header-content">
      <h1 class="header--title"><?php the_title(); ?></h1>
      <div class="header__meta">
        <span class="header__meta--date"><?php echo get_the_date('F j, Y'); ?></span>
        <div class="header__meta--breadcrumbs">
          <?php
          get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
            'breadcrumb' => [
              ['label' => 'Inicio', 'href' => home_url('/')],
              ['label' => 'Novedades', 'href' => site_url('/novedades')], // Ajusta al slug real
              ['label' => get_the_title()]
            ]
          ]);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>