<?php
/**
 * Delay JS execution similar to WP Rocket, but theme-only.
 */

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
 * Delay JS Loader - Performance Optimization
 * - Carga scripts marcados con type="text/delayed-javascript"
 * - Dispara en la primera interacción o timeout
 * - Mantiene el orden; respeta async/defer
 * - Optimizado para PageSpeed
 */
(function() {
  var START_TIMEOUT_MS = 3000; // reducido a 3s para mejor balance
  var loaded = false;
  var userInteracted = false;

  function getDelayedScripts() {
    return Array.prototype.slice.call(document.querySelectorAll('script[type="text/delayed-javascript"]'));
  }

  function loadScriptFromMarker(marker) {
    var s = document.createElement('script');
    var src = marker.getAttribute('data-src');
    var isAsync = marker.getAttribute('data-async') === '1';
    var isDefer = marker.getAttribute('data-defer') === '1';

    if (isAsync) s.async = true;
    if (isDefer) s.defer = true;

    // Conserva nom. de handle como data-attr útil para depurar
    s.setAttribute('data-handle', marker.getAttribute('data-handle') || '');

    // Evita que adblockers rompan URLs parcialmente cargadas
    s.src = src;

    // Copia atributos "nonce" / "crossorigin" si existían (ajusta si los usas)
    var nonce = marker.getAttribute('nonce');
    if (nonce) s.setAttribute('nonce', nonce);
    var co = marker.getAttribute('crossorigin');
    if (co) s.setAttribute('crossorigin', co);

    // Reemplaza el marcador por el script real
    marker.parentNode.replaceChild(s, marker);
    return new Promise(function(resolve) {
      s.onload = s.onerror = resolve;
    });
  }

  // Carga en orden secuencial los que NO eran async (para no romper dependencias)
  // y permite que los marcados como async se disparen en paralelo.
  function run() {
    if (loaded) return;
    loaded = true;

    var markers = getDelayedScripts();
    if (!markers.length) return;

    // separa por async
    var seq = [],
      parallel = [];
    markers.forEach(function(m) {
      if (m.getAttribute('data-async') === '1') parallel.push(m);
      else seq.push(m);
    });

    // paralelos primero (no bloquean)
    parallel.forEach(loadScriptFromMarker);

    // luego los secuenciales, respetando el orden en el DOM
    (function loadNext(i) {
      if (i >= seq.length) return;
      loadScriptFromMarker(seq[i]).then(function() {
        loadNext(i + 1);
      });
    })(0);
  }

  // Disparadores de interacción - SOLO se ejecuta con interacción REAL del usuario
  // Eliminamos mousemove y touchmove porque son muy sensibles
  var triggers = ['mousedown', 'touchstart', 'wheel', 'keydown', 'click'];
  var interactionDetected = false;

  function onFirstInteraction(e) {
    if (loaded || interactionDetected) return;

    // Prevenir ejecución múltiple
    interactionDetected = true;
    userInteracted = true;

    console.log('[DelayJS] User interaction detected:', e.type);

    // Remover todos los listeners inmediatamente
    triggers.forEach(function(t) {
      window.removeEventListener(t, onFirstInteraction, true);
      document.removeEventListener(t, onFirstInteraction, true);
    });

    // Ejecutar en el siguiente tick para asegurar limpieza de listeners
    setTimeout(function() {
      run();
    }, 0);
  }

  // Registrar listeners SOLO en document (no en window) para reducir sensibilidad
  triggers.forEach(function(t) {
    document.addEventListener(t, onFirstInteraction, {
      capture: true,
      passive: true,
      once: true // Auto-remove después del primer disparo
    });
  });

  console.log('[DelayJS] Waiting for user interaction to load scripts...');
  console.log('[DelayJS] Delayed scripts count:', getDelayedScripts().length);
})();
</script>
<?php
}, 99 );

