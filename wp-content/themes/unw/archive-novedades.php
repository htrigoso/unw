 <?php set_query_var('ASSETS_CHUNK_NAME', 'news'); ?>
 <?php set_query_var('NAVBAR_COLOR', ''); ?>
 <?php get_header(); ?>

 <?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
 <main>
   <?php
   $hero_news = get_field('hero-news', 'option');

   if ($hero_news && is_array($hero_news)) {
     get_template_part(
       COMMON_CONTENT_PATH,
       'hero-slide',
       [
         'title'       => $hero_news['title'] ?? 'Noticias',
         'img_desktop' => $hero_news['images']['desktop']['url'] ?? '',
         'img_mobile'  => $hero_news['images']['mobile']['url'] ?? '',
         'alt'         => $hero_news['images']['desktop']['alt'] ?? '',
         'breadcrumbs' => [
           ['label' => 'Inicio', 'href' => home_url('/')],
           ['label' => 'Noticias']
         ],
         'variant'     => 'primary',
       ]
     );
   }
   ?>
   <?php get_template_part(NEWS_TABS_PATH, 'tabs'); ?>
 </main>
 <?php get_footer(); ?>
