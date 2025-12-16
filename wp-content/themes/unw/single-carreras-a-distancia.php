<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>


<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php
    render_only_careers([
      'mode'         => 'virtual',
        'title_global' => 'Carreras a Distancia',
        'base_url'     => home_url('/carreras-a-distancia/'),
    ])
  ?>
</main>

<?php
// Tracking de Incubeta para detalle de carrera
$crm_code = get_career_crm_code(get_the_ID(), 'virtual');
?>
<script data-no-delay>
/**
 * Datos de carrera para tracking de Incubeta (select_item)
 * Se ejecuta automáticamente al cargar el detalle
 */
window.unwCareerDetailData = {
  id: '<?php echo esc_js($crm_code); ?>',
  title: '<?php echo esc_js(get_the_title()); ?>',
  listName: 'carreras_a_distancia',
  itemBrand: 'Carrera a distancia'
};
</script>

<?php get_footer(); ?>
