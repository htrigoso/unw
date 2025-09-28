<script>
(function() {
  let gtmLoaded = false;

  function loadGTM() {
    if (gtmLoaded) return;
    gtmLoaded = true;

    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('consent', 'default', {
      'ad_storage': 'denied',
      'analytics_storage': 'denied',
      'ad_user_data': 'denied',
      'ad_personalization': 'denied'
    });

    dataLayer.push({
      'gtm.start': new Date().getTime(),
      'event': 'gtm.js'
    });

    const script = document.createElement('script');
    script.async = true;
    script.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-W8DNW8B';
    document.head.appendChild(script);
  }

  window.addEventListener('load', function() {
    if ('requestIdleCallback' in window) {
      setTimeout(function() {
        requestIdleCallback(loadGTM, {
          timeout: 3000
        });
      }, 5000);

    } else {
      setTimeout(loadGTM, 5000); // como en tu versión original
    }
  });
})();
</script>