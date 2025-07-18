<?php
$postId = $args['id'];
$majors_data = get_field('careers', $postId);

$majors = [];

if (!empty($majors_data['list'])) {
  foreach ($majors_data['list'] as $post) {
    $post_id = $post->ID;

    $majors[] = [
      "image" => get_the_post_thumbnail_url($post_id, 'full') ?: get_template_directory_uri() . '/upload/default-major.jpg',
      "image_alt" => get_the_title($post_id),
      "title" => get_the_title($post_id),
      "description" => get_the_excerpt($post_id) ?: '',
      "link" => get_permalink($post_id),
      "link_title" => "Ver carrera",
      "link_target" => "_blank"
    ];
  }
}

// Link global del botón
$link = $majors_data['link'];
$link_url = !empty($link['url']) ? $link['url'] : '#';
$link_title = !empty($link['title']) ? $link['title'] : 'Ver todas las carreras';
$link_target = !empty($link['target']) ? $link['target'] : '_self';

?>

<section class="majors">
  <h2 class="majors__title"><?php echo esc_html($majors_data['title']); ?></h2>

  <ul class="majors__list">
    <?php foreach ($majors as $major): ?>
    <li class="majors__item">
      <?php
        get_template_part(COMMON_CONTENT_PATH, 'program-card', array(
          'image' => $major['image'],
          'image_alt' => $major['image_alt'],
          'title' => $major['title'],
          'description' => $major['description'],
          'link' => $major['link'],
          'link_title' => $major['link_title'],
          'link_target' => $major['link_target']
        ));
      ?>
    </li>
    <?php endforeach; ?>
  </ul>

  <?php if ($link_url && $link_title): ?>
  <div class="majors__cta">
    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn btn-sm btn-secondary-one majors__cta-btn">
      <?php echo esc_html($link_title); ?>
      <i>
        <svg class="icon icon--arrow" width="32" height="32">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </i>
    </a>
  </div>
  <?php endif; ?>
</section>
