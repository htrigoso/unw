<?php
/**
 * Template Name: Politicas de privacidad
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'migration'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php
  get_header();
?>



<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <div class="main_container">

    <?php
      get_template_part('content-parts/components/info-cover');
    ?>
    <div class="main_page">
      <div class="page_interna">
        <div class="section_container nopaddingbotttom">
          <div class="container auto">
            <div class="info_universidad">
              <div id="w-node-e5aebbeb63fe-aa88130f" class="item_info privacidad">
                <div class="text_privacidad">
                  <?php the_content();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<?php
add_filter('show_book_link', '__return_true');
get_footer();
?>
