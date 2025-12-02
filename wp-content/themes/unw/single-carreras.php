<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>


<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php
    render_only_careers()
  ?>
</main>

<?php
// Tracking de Incubeta para detalle de carrera
$crm_code = get_career_crm_code(get_the_ID(), 'presencial');
?>
<script data-no-delay>
  /**
   * Datos de carrera para tracking de Incubeta (select_item)
   * Se ejecuta automáticamente al cargar el detalle
   */
  window.unwCareerDetailData = {
    id: '<?php echo esc_js($crm_code); ?>',
    title: '<?php echo esc_js(get_the_title()); ?>',
    listName: 'carreras_pregrado',
    itemBrand: 'Carrera presencial'
  };
</script>

<?php get_footer(); ?>
