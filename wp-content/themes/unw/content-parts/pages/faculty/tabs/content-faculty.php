<?php
$postID = $args['id'];
?>

<div class="faculty">
  <?php
    $title = get_field('description', $postID);
  ?>
  <div class="faculty__header">
    <h1 class="faculty__header--title">
      <?= wp_kses_post($title); ?>
    </h1>
  </div>
  <?php
  $biography = get_field('biography',$postID);

  get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-quote', null, [
    "quote" => $biography['quote'],
    "author" => $biography['author'],
    "position" => $biography['position'],
    "img_url" => $biography['img_url']['url']
  ]);


    get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-laboratories', null, [
      'id'=>$postID
    ]); ?>

  <div class="faculty__testimonials">
    <?php
    $testimonials = get_field('testimonials', $postID);
    $list = $testimonials['testimonials'];

    $items = [];
    foreach ($testimonials['testimonials'] as $post) {
      $post_id = $post->ID;
      $info= get_field('info-testimonio', $post_id);
      $items[] = [
        'name' => get_the_title($post_id),
        'title' => $info['program_name'],
        'description' => $info['testimonial_text'],
        'footer' => $info['institution_name'],
        'image' => get_the_post_thumbnail_url($post_id, 'full') ?: get_template_directory_uri() . '/upload/faculty/testimonials/default.jpg'
      ];
    }

    get_template_part(COMMON_CONTENT_PATH, 'testimonials', [
      'title' =>  $testimonials['title'],
      'testimonials' => $items
    ]);
    ?>
  </div>
  <div class="faculty__internationalization">
    <?php get_template_part(COMMON_CONTENT_PATH, 'internationalization',  [
       'id'=>$postID
    ]); ?>
  </div>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-majors', null, [
      'id'=>$postID
  ]); ?>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-simple-events', null, [
      'id'=>$postID
  ]); ?>
  <?php get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-recognitions', null, [
      'id'=>$postID
  ]); ?>
</div>
