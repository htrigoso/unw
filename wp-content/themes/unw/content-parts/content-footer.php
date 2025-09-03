<?php
$socials = [
  [
    "icon" => 'facebook-fill',
    "href" => 'https://www.google.com',
  ],
  [
    "icon" => 'youtube-fill',
    "href" => 'https://www.google.com',
  ],
  [
    "icon" => 'linkedin-fill',
    "href" => 'https://www.google.com',
  ],
  [
    "icon" => 'instagram-fill',
    "href" => 'https://www.google.com',
  ],
  [
    "icon" => 'tiktok-fill',
    "href" => 'https://www.google.com',
  ]
]
?>

<?php ob_start(); ?>
<a href="/enlace-a-tu-libro" class="footer__book">
  Libro de reclamaciones <img src="<?= UPLOAD_PATH . '/icons/laptop.svg' ?>" alt="" aria-hidden="true" />
</a>
<?php $libro_reclamaciones_html = ob_get_clean(); ?>

<footer class="footer">
  <div class="x-container x-container--pad-213 footer__wrapper">
    <div class="footer__upper">
      <div class="footer__left">
        <img src="<?= UPLOAD_PATH . '/logo-unw-white.svg' ?>" alt="" aria-hidden="false" class="footer__logo" fetchpriority="high" decoding="async" loading="eager" />
        <h3 class="footer__cta--title">Agenda una visita</h3>
        <p class="footer__cta--desc">Un experto te dará un recorrido a nuestras instalaciones y resolverá tus dudas</p>
        <a href="https://wa.me/" target="_blank" class="btn btn-sm footer__cta--link">
          Agenda por WhatsApp <img src="<?= UPLOAD_PATH . '/icons/whatsapp.png'; ?>" alt="WhatsApp" />
        </a>
      </div>
      <div class="footer__right">
        <div class="footer__right-col-left">
          <?php
          wp_nav_menu(array(
            'menu' => 'navbar_menu_mobile',
            'menu_class' => 'footer__menu__list',
            'container' => 'nav',
          ));
          ?>
          <div class="footer__book--desktop">
            <?= $libro_reclamaciones_html; ?>
          </div>
        </div>
        <div class="footer__right-col-right">
          <div class="footer__short-divider"></div>
          <ul class="footer__more__list">
            <li class="menu-item"><a href="/">Más de Wiener</a></li>
            <ul class="sub-menu">
              <li class="menu-item"><a href="/">Transparencia</a></li>
              <li class="menu-item"><a href="/">Políticas de privacidad</a></li>
              <li class="menu-item"><a href="/">Canal ético</a></li>
            </ul>
          </ul>
          <div class="footer__short-divider"></div>
          <div class="footer__book--mobile">
            <?= $libro_reclamaciones_html; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__divider"></div>
    <div class="footer__bottom">
      <span class="footer__bottom--copy">&copy; Universidad Norbert Wiener todos los derechos reservados</span>
      <div class="footer__bottom__social">
        <span>Síguenos en:</span>
        <ul class="footer__bottom__list">
          <?php foreach ($socials as $social): ?>
            <li class="footer__bottom__item">
              <a href="<?= $social['href'] ?>" target="_blank" class="footer__bottom__link">
                <i>
                  <svg width="24" height="24">
                    <use xlink:href="#<?= $social['icon'] ?>"></use>
                  </svg>
                </i>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</footer>

<a href="https://wa.me/" target="_blank" class="whatsapp-link">
  <img src="<?= UPLOAD_PATH . '/icons/whatsapp.png'; ?>" alt="WhatsApp" class="whatsapp-link__icon" fetchpriority="high" decoding="async" loading="eager" />
</a>
