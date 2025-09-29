<script>
(function() {
  function loadGTM() {
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
    script.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-W8DNW8B';
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
  }

  // Cargar justo después de que el DOM esté listo (no bloquea render)
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadGTM);
  } else {
    loadGTM();
  }
})();
</script>
