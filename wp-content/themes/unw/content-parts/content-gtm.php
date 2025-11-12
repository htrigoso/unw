<!-- Google Tag Manager - Delayed Loading for PageSpeed -->
<script>
(function() {
  var gtmLoaded = false;
  var GTM_ID = 'GTM-W8DNW8B';

  // Inicializar dataLayer
  window.dataLayer = window.dataLayer || [];

  function loadGTM() {
    if (gtmLoaded) return;
    gtmLoaded = true;

    console.log('[GTM] Loading Google Tag Manager...');

    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', GTM_ID);
  }

  // Cargar GTM en la primera interacción del usuario
  var triggers = ['mousedown', 'touchstart', 'wheel', 'keydown', 'click', 'scroll'];
  var interacted = false;

  function onFirstInteraction() {
    if (interacted) return;
    interacted = true;

    triggers.forEach(function(event) {
      document.removeEventListener(event, onFirstInteraction, true);
      window.removeEventListener(event, onFirstInteraction, true);
    });

    loadGTM();
  }

  // Registrar listeners
  triggers.forEach(function(event) {
    document.addEventListener(event, onFirstInteraction, {
      capture: true,
      passive: true,
      once: true
    });
    window.addEventListener(event, onFirstInteraction, {
      capture: true,
      passive: true,
      once: true
    });
  });

  // Fallback: cargar después de 5 segundos si no hay interacción
  setTimeout(function() {
    if (!gtmLoaded) {
      console.log('[GTM] Loading via timeout fallback');
      loadGTM();
    }
  }, 5000);
})();
</script>
<!-- End Google Tag Manager -->