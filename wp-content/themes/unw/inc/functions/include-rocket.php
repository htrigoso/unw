<?php
/**
 * Delay JS execution similar to WP Rocket, but theme-only.
 */

// 0) Helper para verificar si DelayJS está activo (usable en templates)
function is_delay_js_active() {
    return my_should_delay_js();
}

// 1) Handles que NUNCA debes retrasar (añade los tuyos)
function my_delay_js_exclusions() {
    return [
        // WordPress core - NO retrasar
        'jquery',
        'jquery-core',
        'jquery-migrate',
        'wp-embed',
        'wp-polyfill',
        'regenerator-runtime',
        'wp-i18n',

        // Forms y seguridad - NO retrasar
        'contact-form-7',
        'recaptcha',
        'google-recaptcha',
        'gform_recaptcha',

        // ⚠️ IMPORTANTE: Comenta estos si quieres retrasar tus scripts del tema
        // 'app',              // Script principal del tema
        // 'vendors',          // Vendors del tema
        // 'runtime',          // Runtime del tema
    ];
}

// 2) Decide si aplicar delay (no en admin, previsualizador, REST, etc.)
function my_should_delay_js() {
    if ( is_admin() || is_user_logged_in() && current_user_can('edit_posts') ) return false;
    if ( defined('REST_REQUEST') && REST_REQUEST ) return false;
    if ( isset($_GET['no_delay_js']) ) return false; // útil para debug
    return true;
}

// 2.5) URLs de scripts que NO deben retrasarse (patrones)
function my_delay_js_url_exclusions() {
    return [
        // ⚠️ COMENTADOS para retrasar analytics y mejorar PageSpeed
        // Descomenta solo si necesitas tracking inmediato
        // 'gtm.js',              // Google Tag Manager
        // 'gtag/js',             // Google Analytics
        // 'analytics.js',        // Google Analytics
        // 'fbevents.js',         // Facebook Pixel

        // Estos SÍ mantenerlos sin delay
        '/recaptcha/',         // reCAPTCHA
        'stripe.com',          // Stripe
        'paypal.com',          // PayPal
    ];
}

// 3) Filtro que reescribe la etiqueta <script>
add_filter( 'script_loader_tag', function( $tag, $handle, $src ) {
    if ( ! my_should_delay_js() ) return $tag;

    // DEBUG: Log para ver qué scripts están procesándose
    if ( isset($_GET['debug_delay_js']) ) {
        error_log("DelayJS - Processing script: $handle | src: $src");
    }

    // si no hay src (inline) o está en la lista de exclusión → no tocar
    if ( empty($src) || in_array( $handle, my_delay_js_exclusions(), true ) ) {
        if ( isset($_GET['debug_delay_js']) && in_array( $handle, my_delay_js_exclusions(), true ) ) {
            error_log("DelayJS - EXCLUDED (handle): $handle");
        }
        return $tag;
    }

    // Excluir por URL/patrón
    $url_exclusions = my_delay_js_url_exclusions();
    foreach ( $url_exclusions as $pattern ) {
        if ( strpos( $src, $pattern ) !== false ) {
            return $tag;
        }
    }

    // No demores si es de tipo módulo crítico
    if ( strpos( $tag, 'type="module"' ) !== false ) {
        return $tag;
    }

    // No retrasar scripts con atributo data-no-delay
    if ( strpos( $tag, 'data-no-delay' ) !== false ) {
        return $tag;
    }

    // Extrae async/defer para restaurarlos luego
    $is_async = strpos($tag, 'async') !== false;
    $is_defer = strpos($tag, 'defer') !== false;

    $attrs = [];
    if ( $is_async ) $attrs[] = 'data-async="1"';
    if ( $is_defer ) $attrs[] = 'data-defer="1"';

    // Reemplaza por un marcador inerte:
    //   - type personalizado para que el navegador NO lo ejecute
    //   - movemos src a data-src
    $marker  = '<script class="delayed-js" type="text/delayed-javascript" ';
    $marker .= 'data-handle="' . esc_attr($handle) . '" ';
    $marker .= 'data-src="' . esc_url($src) . '" ' . implode(' ', $attrs) . '></script>';

    return $marker;
}, 10, 3 );

// 4) Inyecta el loader JS (una sola vez, en footer)
add_action( 'wp_footer', function () {
    if ( ! my_should_delay_js() ) return;

    // Comentario para verificar que el delay está activo
    echo '<!-- DelayJS System Active - Scripts will load on user interaction -->' . "\n";
    ?>
<script>
/*!
 * Delay JS Loader - Performance Optimization v2.0
 * - Carga scripts marcados con type="text/delayed-javascript"
 * - Dispara en la primera interacción REAL del usuario
 * - Mantiene el orden; respeta async/defer
 * - Incluye fix para iOS y validaciones exhaustivas
 * - Basado en el patrón exitoso de GTMLoader
 */
(function() {
  'use strict';

  class DelayJSLoader {
    constructor() {
      this.version = '2.0.0';
      this.loaded = false;
      this.userActionTriggered = false;
      this.firstMousemoveIgnored = false;

      // Eventos de interacción del usuario
      this.triggerEvents = [
        'keydown', 'keyup',
        'mousedown', 'mouseup', 'mousemove', 'mouseover', 'mouseout',
        'touchmove', 'touchstart', 'touchend', 'touchcancel',
        'wheel', 'click', 'dblclick', 'input'
      ];

      this.userEventHandler = this.handleUserEvent.bind(this);
      this.init();
    }

    // Método principal de inicialización
    init() {
      this.setupPageShowHide();

      // Fix para dispositivos iOS (iPad/iPhone)
      if (/iP(ad|hone)/.test(navigator.userAgent)) {
        this.setupIOSTouchFix();
      }

      this.captureUserEvents();
      this.logInitialState();
    }

    // Configurar listeners para pageshow/pagehide
    setupPageShowHide() {
      window.addEventListener('pageshow', (event) => {
        this.persisted = event.persisted;
      }, {
        isDelayJS: true
      });

      window.addEventListener('pagehide', () => {
        this.onFirstUserAction = null;
      }, {
        isDelayJS: true
      });
    }

    // Fix para iOS: convertir touch en click real
    setupIOSTouchFix() {
      let touchStart;

      function saveTouchStart(event) {
        touchStart = event;
      }

      window.addEventListener('touchstart', saveTouchStart, {
        isDelayJS: true
      });

      window.addEventListener('touchend', (event) => {
        // Validar que el touch fue un tap (no un swipe)
        if (event.changedTouches[0] && touchStart?.changedTouches[0] &&
          Math.abs(event.changedTouches[0].pageX - touchStart.changedTouches[0].pageX) < 10 &&
          Math.abs(event.changedTouches[0].pageY - touchStart.changedTouches[0].pageY) < 10 &&
          event.timeStamp - touchStart.timeStamp < 200) {

          // No convertir si es un input de texto
          if (event.target.tagName === 'INPUT' && event.target.type === 'text') {
            return;
          }

          // Disparar eventos sintéticos
          event.target.dispatchEvent(new TouchEvent('touchend', {
            target: event.target,
            bubbles: true
          }));

          event.target.dispatchEvent(new MouseEvent('mouseover', {
            target: event.target,
            bubbles: true
          }));

          event.target.dispatchEvent(new PointerEvent('click', {
            target: event.target,
            bubbles: true,
            cancelable: true,
            detail: 1,
            clientX: event.changedTouches[0].clientX,
            clientY: event.changedTouches[0].clientY
          }));

          event.preventDefault();
        }
      }, {
        isDelayJS: true
      });
    }

    // Manejar eventos del usuario
    handleUserEvent(event) {
      // Marcar que el usuario ha interactuado
      if (!this.userActionTriggered) {
        if (event.type === 'mousemove' && !this.firstMousemoveIgnored) {
          // Ignorar el primer mousemove (puede ser automático)
          this.firstMousemoveIgnored = true;
          return;
        }

        // Ignorar eventos pasivos que no indican interacción real
        if (event.type === 'keyup' || event.type === 'mouseover' || event.type === 'mouseout') {
          return;
        }

        this.userActionTriggered = true;
        console.log('[DelayJS] User interaction detected:', event.type);
        this.triggerScriptLoad();
      }
    }

    // Capturar todos los eventos del usuario
    captureUserEvents() {
      this.triggerEvents.forEach(eventType => {
        window.addEventListener(eventType, this.userEventHandler, {
          passive: true,
          isDelayJS: true
        });
      });

      document.addEventListener('visibilitychange', this.userEventHandler, {
        isDelayJS: true
      });

      // Si la página está oculta, activar inmediatamente
      if (document.hidden) {
        this.triggerScriptLoad();
      }
    }

    // Remover listeners de interacción del usuario
    removeUserInteractionListener() {
      this.triggerEvents.forEach(eventType => {
        window.removeEventListener(eventType, this.userEventHandler, {
          passive: true
        });
      });
      document.removeEventListener('visibilitychange', this.userEventHandler);
    }

    // Obtener scripts retrasados
    getDelayedScripts() {
      return Array.from(document.querySelectorAll('script[type="text/delayed-javascript"]'));
    }

    // Cargar un script desde su marcador
    loadScriptFromMarker(marker) {
      return new Promise((resolve) => {
        const script = document.createElement('script');
        const src = marker.getAttribute('data-src');
        const isAsync = marker.getAttribute('data-async') === '1';
        const isDefer = marker.getAttribute('data-defer') === '1';

        if (isAsync) script.async = true;
        if (isDefer) script.defer = true;

        // Conserva handle para debug
        script.setAttribute('data-handle', marker.getAttribute('data-handle') || '');

        // Atributos de seguridad
        const nonce = marker.getAttribute('nonce');
        if (nonce) script.setAttribute('nonce', nonce);

        const crossorigin = marker.getAttribute('crossorigin');
        if (crossorigin) script.setAttribute('crossorigin', crossorigin);

        script.src = src;
        script.onload = script.onerror = () => {
          console.log('[DelayJS] Loaded:', marker.getAttribute('data-handle') || src);
          resolve();
        };

        // Reemplazar el marcador por el script real
        marker.parentNode.replaceChild(script, marker);
      });
    }

    // Cargar todos los scripts
    async loadAllScripts() {
      const markers = this.getDelayedScripts();
      if (!markers.length) {
        console.log('[DelayJS] No delayed scripts found');
        return;
      }

      console.log('[DelayJS] Loading', markers.length, 'delayed scripts...');

      // Separar por async
      const sequential = [];
      const parallel = [];

      markers.forEach(marker => {
        if (marker.getAttribute('data-async') === '1') {
          parallel.push(marker);
        } else {
          sequential.push(marker);
        }
      });

      // Cargar paralelos primero (no bloquean)
      parallel.forEach(marker => this.loadScriptFromMarker(marker));

      // Cargar secuenciales respetando el orden
      for (const marker of sequential) {
        await this.loadScriptFromMarker(marker);
      }

      console.log('[DelayJS] All scripts loaded successfully');
    }

    // Activar la carga de scripts
    async triggerScriptLoad() {
      if (this.loaded) return;
      this.loaded = true;

      this.removeUserInteractionListener();

      await this.yieldToMain();
      await this.loadAllScripts();
    }

    // Ceder control al navegador (yield to main thread)
    async yieldToMain() {
      if (document.hidden) {
        // Si la página está oculta, usar setTimeout
        return new Promise(resolve => setTimeout(resolve));
      } else {
        // Si está visible, usar requestAnimationFrame para mejor rendimiento
        return new Promise(resolve => requestAnimationFrame(resolve));
      }
    }

    // Log del estado inicial
    logInitialState() {
      const delayedScripts = this.getDelayedScripts();
      if (delayedScripts.length > 0) {
        console.log('[DelayJS] Scripts to be loaded');
      }
    }
  }

  // Inicializar el loader
  new DelayJSLoader();
})();
</script>
<?php
}, 99 );
