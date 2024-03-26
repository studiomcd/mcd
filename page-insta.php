<?php /*  Template Name: Instagram */  ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php $url = '\"Location: https://instagram.com/' . get_option('instagram_link') .'\"'; ?>


<?php
  header($url);
  exit;
?>


<?php endwhile; endif; ?>