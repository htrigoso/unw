<?php
global $post;

// Obtener ID del padre
$parent_id = wp_get_post_parent_id( $post->ID );

// Obtener título y enlace del padre (si existe)
$parent_title = $parent_id ? get_the_title( $parent_id ) : '';
$parent_url   = $parent_id ? get_permalink( $parent_id ) : '';
?>

<div class="cover_img_page center">
  <div class="overlay"></div>

  <?php if ( has_post_thumbnail() ) : ?>
  <?= get_the_post_thumbnail( $post->ID, 'full', [ 'class' => 'img_cover' ] ); ?>
  <?php endif; ?>

  <div id="presentacion_vf" class="info_cover_page center">
    <div id="presentacion" class="container">

      <?php if ( $parent_title ) : ?>
      <h2 class="categoria_page serv_uni"><?= esc_html( $parent_title ); ?></h2>
      <?php endif; ?>

      <h2 class="h1_carreras"><?= esc_html( get_the_title() ); ?></h2>
    </div>
  </div>

  <div class="miga_de_pan">
    <div class="container">
      <div class="content_links_miga">
        <a href="<?= esc_url( home_url( '/' ) ); ?>" class="link miga">Inicio /</a>

        <?php if ( $parent_title && $parent_url ) : ?>
        <a href="<?= esc_url( $parent_url ); ?>" class="link miga">
          <?= esc_html( $parent_title ); ?>
        </a> /
        <?php endif; ?>

        <a href="#" aria-current="page" class="link miga w--current">
          <?= esc_html( get_the_title() ); ?>
        </a>
      </div>
    </div>
  </div>
</div>