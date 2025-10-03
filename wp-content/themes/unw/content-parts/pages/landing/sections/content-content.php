<?php
$data = get_query_var('section_data', []);
$content = $data['content'] ?? '';
?>

<section class="landing-content">
  <div class="x-container x-container--pad-213 landing-content__wrapper">
    <div class="landing-content__body" data-content="paragraph">
      <?php
      $trimmed_content = trim($content);
      echo wp_kses_post($trimmed_content);
      ?>
    </div>
  </div>
</section>
