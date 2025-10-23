<?php get_template_part('content-parts/content', 'search-modal'); ?>
<?php get_template_part('content-parts/content', 'sidebar'); ?>
<?php get_template_part('content-parts/content', 'toaster'); ?>
<?php get_template_part('content-parts/content', 'footer'); ?>
<?php get_template_part('content-parts/content', 'whatsapp'); ?>
<?php wp_footer(); ?>
<style>
button.cmplz-btn.cmplz-view-preferences {
  display: none
}

.cmplz-categories {
  display: flex !important;
}

.cmplz-category.cmplz-functional {
  display: none !important
}

.cmplz-cookiebanner .cmplz-categories .cmplz-category {
  background: none !important;
}

.cmplz-cookiebanner .cmplz-categories .cmplz-category .cmplz-banner-checkbox .cmplz-label:before {
  top: -9px;
  height: 20px;
  width: 33px;
}

.cmplz-cookiebanner .cmplz-categories .cmplz-category .cmplz-banner-checkbox .cmplz-label:after {
  top: -7px;
  height: 16px;
  width: 16px;
}
</style>
</body>

</html>