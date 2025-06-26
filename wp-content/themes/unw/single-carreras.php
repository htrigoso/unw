<?php get_header(); ?>

<main id="primary" class="site-main">

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();

      // Obtener modalidad
      $modalidades = get_the_terms(get_the_ID(), 'modalidad');
      $modalidad_slug = $modalidades && !is_wp_error($modalidades) ? $modalidades[0]->slug : null;
      $modalidad_nombre = $modalidades && !is_wp_error($modalidades) ? $modalidades[0]->name : 'Sin modalidad';
  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
          <div class="entry-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <p class="modalidad">
          <strong>Modalidad:</strong> <?php echo esc_html($modalidad_nombre); ?>
        </p>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <?php if ($modalidad_slug === 'virtual') : ?>
        <div class="modalidad-extra modalidad-virtual">
          <p>Esta carrera se dicta <strong>a distancia</strong>. Revisa si requiere sesiones en vivo.</p>
        </div>
      <?php elseif ($modalidad_slug === 'presencial') : ?>
        <div class="modalidad-extra modalidad-presencial">
          <p>Esta carrera se dicta de forma <strong>presencial</strong> en nuestra sede.</p>
        </div>
      <?php else : ?>
        <div class="modalidad-extra modalidad-desconocida">
          <p><em>Modalidad no especificada.</em></p>
        </div>
      <?php endif; ?>
    </article>

  <?php
    endwhile;
  endif;
  ?>

</main>

<?php get_footer(); ?>
