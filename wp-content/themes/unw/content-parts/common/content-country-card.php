<?php
$country = $args['country'];
?>
<article class="country__card">
  <img width="80" height="80" src="<?php echo $country['file']; ?>"
    alt="País <?php echo $i; ?>"
    class="country__flag">
  <p class="country__country"><?php echo $country['name']; ?></p>
</article>
