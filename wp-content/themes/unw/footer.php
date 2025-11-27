<?php get_template_part('content-parts/content', 'search-modal'); ?>
<?php get_template_part('content-parts/content', 'sidebar'); ?>
<?php get_template_part('content-parts/content', 'toaster'); ?>
<?php get_template_part('content-parts/content', 'footer'); ?>
<?php get_template_part('content-parts/content', 'whatsapp'); ?>

<!-- OneSignal Push Notifications -->
<script src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js" defer></script>
<script>
window.OneSignalDeferred = window.OneSignalDeferred || [];
OneSignalDeferred.push(function(OneSignal) {
  OneSignal.init({
    appId: "6bb9edbc-bd98-4791-a402-d20d27c93c13",
  });
});
</script>

<?php wp_footer(); ?>
</body>

</html>