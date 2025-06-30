<?php

/**
 * Template part for displaying a list with a title and blocks of content.
 *
 * @package UNW
 * @subpackage Common
 * @since UNW 1.0.0
 *
 * @param array $args {
 *     Optional. Arguments for the body-w-list component.
 *
 *     @type string $title The title of the list.
 *     @type string $title_component The HTML tag to use for the title (default: 'h2').
 *     @type array $blocks An array of blocks, each containing:
 *         - string 'body' The body text for the block.
 *         - array 'list' An array of items to display in a list.
 *         - string 'hint' Optional hint text for the block.
 * }
 **/

$title = $args['title'];
$title_component = $args['title_component'] ?? 'h2';
$blocks = $args['blocks'] ?? [];
?>

<div class="body-w-list">
  <<?php echo esc_html($title_component); ?> class="body-w-list__title"><?php echo esc_html($title); ?></<?php echo esc_html($title_component); ?>>
  <?php foreach ($blocks as $block) : ?>
    <?php if (!empty($block['body'])) : ?>
      <p class="body-w-list__body">
        <?php echo esc_html($block['body']); ?>
      </p>
    <?php endif; ?>
    <?php if (!empty($block['list'])) : ?>
      <ul class="body-w-list__list">
        <?php foreach ($block['list'] as $item) : ?>
          <li class="body-w-list__item">
            <?php echo esc_html($item); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <?php if (!empty($block['hint'])) : ?>
      <div class="body-w-list__hint">
        <?php echo esc_html($block['hint']); ?>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
