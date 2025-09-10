<?php
$id = $args['id'] ?? 'rich-text-modal';
$body = $args['body'] ?? '';
?>

<?php
ob_start();
?>
<div class="rich-text-modal__body rich-text">
  <?= $body ?>
</div>
<?php
$content = ob_get_clean();
?>
<?php
get_template_part(COMMON_CONTENT_PATH, 'modal', [
  'content' => $content,
  'id' => $id,
  'class' => 'rich-text-modal',
  'preloaded' => false,
]);
?>
