<?php
$id_es = 'option';
$titulo_404 = get_field('titulo_404', $id_es);
$contenido_404 = get_field('contenido_404', $id_es);
$enlace_404 = get_field('enlace_404', $id_es);
$imagen_404 = get_field('imagen_404', $id_es);
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'not-found'); ?>
<?php set_query_var('NAVBAR_COLOR', 'nav-white--cerulean-lightning-yellow initialized'); ?>

<?php get_header(); ?>

<main>
  <?php get_template_part('content-parts/components/content', 'navbar'); ?>
  <?php get_template_part('content-parts/components/content', 'menu'); ?>

  <header class="ps-intro fx-m-y">
    <div class="x-container fx">
      <div class="col-x6 fx-m-y side side-left">
        <div class="fx-m-x">
          <div class="x-typo x1 m-x">
            <h6><?php echo $titulo_404; ?></h6>
            <?php echo $contenido_404; ?>
          </div>
          <div class="x-btn-group fx-m-x">
            <a href="<?php echo $enlace_404['url']; ?>" target="<?php echo $enlace_404['target']; ?>" title="<?php echo $enlace_404['title']; ?>" class="x-btn cerulean fill shadow">
              <i><?php echo $enlace_404['title']; ?></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-x6 fx-e-y side side-right">
        <div class="animated-thumbnail">
          <div class="animated-thumbnail--brush">
            <div class="animated-thumbnail--line left">
              <?php echo allinone_output_svg('/lines/vector-line-37.svg', true); ?>
            </div>
            <div class="animated-thumbnail--line right">
              <?php echo allinone_output_svg('/lines/vector-line-38.svg', true); ?>
            </div>
          </div>
          <div class="animated-thumbnail--photo">
            <?php
              $photo_url = wp_get_attachment_image_src($imagen_404, 'full');
              allinone_image_tag_with_url($photo_url[0], false);
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php get_template_part('content-parts/components/content', 'footer'); ?>
</main>

<?php get_footer(); ?>

