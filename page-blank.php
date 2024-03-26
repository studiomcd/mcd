<?php /*  Template Name: Blank */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php get_template_part('func/favicons'); ?>
	
	
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />	
 <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php if(is_page(11323)): ?>
<section id="content" role="main" class="container-fluid bg-nautico wow fadeIn">
<?php else: ?>
<section id="content" role="main" class="container-fluid bg-dark wow fadeIn">	
<?php endif; ?>	
	
<?php the_content(); ?>
</section>

<?php endwhile; endif; ?>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-4.0.0.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>


<?php get_template_part('func/google_analytics'); ?>

<?php wp_footer(); ?>

</body>
</html>