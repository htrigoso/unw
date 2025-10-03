<?php
function arr_get($arr, $path)
{
  if (!is_array($arr)) return null;
  $ref = $arr;
  foreach ($path as $k) {
    if (!is_array($ref) || !array_key_exists($k, $ref)) return null;
    $ref = $ref[$k];
  }
  return $ref;
}

$footer_acf = get_field('footer', 'options');
$wa_general = get_field('wa_general', 'options');


// === LIBRO DE RECLAMACIONES ===
$book_url    = arr_get($footer_acf, ['Book', 'link', 'url']);
$book_title  = arr_get($footer_acf, ['Book', 'link', 'title']);
$book_target = arr_get($footer_acf, ['Book', 'link', 'target']);
$book_img    = arr_get($footer_acf, ['Book', 'image', 'url']);

ob_start();
if ($book_url && $book_title) : ?>
  <a href="<?= esc_url($book_url) ?>" <?= $book_target ? 'target="' . esc_attr($book_target) . '"' : '' ?>
    class="footer__book">

    <?php if ($book_img): ?>
      <img class="lazyload" src="<?= placeholder() ?>" data-src="<?= esc_url($book_img) ?>" width="240" height="135" alt=""
        aria-hidden="true" />
    <?php endif; ?>
  </a>
<?php endif;
$libro_reclamaciones_html = ob_get_clean();
?>

<footer class="footer">
  <div class="x-container x-container--pad-213 footer__wrapper">

    <div class="footer__upper">
      <div class="footer__left">
        <?php if ($logo_url = arr_get($footer_acf, ['image', 'url'])): ?>
          <img src="<?= placeholder() ?>" data-src="<?= esc_url($logo_url) ?>"
            alt="<?= esc_attr(arr_get($footer_acf, ['image', 'alt']) ?: '') ?>" class="footer__logo lazyload" />
        <?php endif; ?>

        <?php if ($title = arr_get($footer_acf, ['title'])): ?>
          <h3 class="footer__cta--title"><?= esc_html($title) ?></h3>
        <?php endif; ?>

        <?php if ($desc = arr_get($footer_acf, ['description'])): ?>
          <p class="footer__cta--desc"><?= esc_html($desc) ?></p>
        <?php endif; ?>

        <?php if ($wa_url = arr_get($footer_acf, ['wa', 'link', 'url'])): ?>
          <a href="<?= esc_url($wa_url) ?>"
            target="<?= esc_attr(arr_get($footer_acf, ['wa', 'link', 'target']) ?: '_blank') ?>"
            class="btn btn-sm footer__cta--link">
            <?= esc_html(arr_get($footer_acf, ['wa', 'link', 'title']) ?: '') ?>
            <?php if ($wa_img = arr_get($footer_acf, ['wa', 'image', 'url'])): ?>
              <img class="lazyload" src="<?= placeholder() ?>" data-src="<?= esc_url($wa_img) ?>" width="24" height="24"
                alt="WhatsApp" />
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div>

      <div class="footer__right">
        <div class="footer__right-col-left">
          <?php
          wp_nav_menu([
            'menu'       => 'navbar_menu_mobile_1',
            'menu_class' => 'footer__menu__list',
            'container'  => 'nav',
            'walker'     => class_exists('Custom_Menu_Walker') ? new Custom_Menu_Walker() : '',
          ]);
          ?>
          <div class="footer__book--desktop">

            <?php
            echo $libro_reclamaciones_html;
            ?>
          </div>
        </div>

        <div class="footer__right-col-right">
          <div class="footer__short-divider"></div>
          <?php
          wp_nav_menu([
            'menu'       => 'navbar_menu_mobile_2',
            'menu_class' => 'footer__menu__list',
            'container'  => 'nav',
            'walker'     => class_exists('Custom_Menu_Walker') ? new Custom_Menu_Walker() : '',
          ]);
          ?>
          <div class="footer__short-divider"></div>
          <div class="footer__numbers">
            <div class="footer__phone_number">
              Central Telefónica: <a href="tel:01 706-5555">01 706-5555</a>
            </div>
            <div class="footer__phone_number">
              Pregrado - Postulantes: <a href="tel:0 800 26212">0 800-26212</a>
            </div>
            <div class="footer__phone_number">
              Posgrado Postulantes: <a href="tel:01 706-5555">01 706-5555 (Opción 2-2-1)</a>
            </div>
          </div>

          <div class="footer__book--mobile">
            <?= $libro_reclamaciones_html ?>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__divider"></div>

    <div class="footer__bottom">
      <?php if ($copy = arr_get($footer_acf, ['copy', 'Info'])): ?>
        <span class="footer__bottom--copy"><?= wp_kses_post($copy) ?></span>
      <?php endif; ?>

      <?php if (!empty($footer_acf['social']['options'])): ?>
        <div class="footer__bottom__social">
          <?php if ($social_title = arr_get($footer_acf, ['social', 'title'])): ?>
            <span><?= esc_html($social_title) ?></span>
          <?php endif; ?>

          <ul class="footer__bottom__list">
            <?php foreach ($footer_acf['social']['options'] as $social):
              if (!empty($social['status']) && !empty($social['link']['url']) && !empty($social['type']['value'])): ?>
                <li class="footer__bottom__item">
                  <a href="<?= esc_url($social['link']['url']) ?>"
                    target="<?= esc_attr($social['link']['target'] ?: '_blank') ?>"
                    aria-label="<?= esc_attr($social['type']['label']) ?>" class="footer__bottom__link">
                    <i>
                      <svg width="24" height="24">
                        <use xlink:href="#<?= esc_attr($social['type']['value']) ?>"></use>
                      </svg>
                    </i>
                  </a>
                </li>
            <?php endif;
            endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>


<?php
if (apply_filters('show_book_link', false)) :
?>
  <?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
  <a class="book-link" href="javascript:void(0);" data-modal-target="modal-more-info">
    <span class="sr-only">Solicita informes</span>
    <img src="<?= placeholder() ?>" class="book-link__icon lazyload"
      data-src="<?php echo UPLOAD_MIGRATION_PATH . '/solicitar.png'; ?>" alt="Formulario General">
  </a>
<?php endif; ?>

<?php
$wg  = $wa_general ?? [];
$url = $wg['link']['url']  ?? '';
$img = $wg['image']['url'] ?? '';
$title = $wg['link']['title'] ?? '';
?>

<?php if ($url && $img): ?>
  <a href="<?= esc_url($url) ?>" arial-label="<?= esc_attr($title) ?>"
    <?= !empty($wg['link']['target']) ? 'target="' . esc_attr($wg['link']['target']) . '"' : '' ?> class="whatsapp-link"
    rel="noopener" <?= !empty($wg['link']['title']) ? 'aria-label="' . esc_attr($wg['link']['title']) . '"' : '' ?>>
    <span class="sr-only"><?= esc_html($title) ?></span>
    <img src="<?= esc_url($img) ?>" width="auto" height="auto" aria-hidden="true"
      alt="<?= !empty($wg['image']['alt']) ? esc_attr($wg['image']['alt']) : '' ?>" class="whatsapp-link__icon" />
  </a>
<?php endif; ?>
