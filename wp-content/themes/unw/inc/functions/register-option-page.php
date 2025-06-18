<?php

  /**
   * register option page
   */
  add_action('acf/init', 'acf_options_init');
  function acf_options_init()
  {
    global $locale;

    if (function_exists('acf_add_options_page')) {
      acf_add_options_page(array(
        'page_title' => __('General', 'unw'),
        'menu_title' => __('Configuración UNW', 'unw'),
        'menu_slug' => 'unw-general-settings',
        'capability' => 'publish_posts',
        'redirect' => false
      ));
    }
  }


  add_filter('the_time', 'get_time_diff');
function get_time_diff() {
  global $post;
  $date = $post->post_date;
  $time = get_post_time('G', true, $post);
  $mytime = time() - $time;
  if($mytime > 0 && $mytime < 7*24*60*60)
    $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
  else
    $mytimestamp = date_i18n(get_option('date_format'), strtotime($date));
  return $mytimestamp;
}
