<?php
$careers = $args['cards'] ?? []
?>

<?php if (!empty($careers)): ?>
<section class="all-body">
  <div class="all-body__wrapper">
    <ul class="all-body__list">
      <?php foreach ($careers as $career): ?>
      <li>
        <?php
            get_template_part(COMMON_CONTENT_PATH, 'program-card', array(
              'image' => $career['image'],
              'image_alt' => $career['image_alt'],
              'title' => $career['title'],
              'description' => '',
              'link' => $career['link'],
              'link_title' => $career['link_title'],
              'link_target' => $career['link_target']
            ));
            ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif ?>
