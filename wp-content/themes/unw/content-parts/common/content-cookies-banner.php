<?php
$title = $args['title'] ?? '';
$message = $args['message'] ?? '';
$btnText = $args['btnText'] ?? 'Got it!';
?>

<div id="cookieModal" class="cookies-banner">
  <div class="x-container x-container--pad-213 cookies-banner__wrapper">
    <?php if (!empty($title)): ?>
    <h3 class="cookies-banner__title"><?= esc_html($title) ?></h3>
    <?php endif; ?>
    <?php if (!empty($message)): ?>
    <div class="cookies-banner__message" data-content="paragraph"><?= $message ?></div>
    <?php endif; ?>
    <button class="btn btn-primary btn-xs cookies-banner__btn"><?= esc_html($btnText) ?></button>
  </div>
</div>
