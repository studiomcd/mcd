<?php /*  Template Name: Bio */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php get_template_part('func/favicons'); ?>
	
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
<?php wp_head(); ?>
	
	
<style type="text/css">
#intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>	
	
</style>	
	
</head>
<body id="intro">

	<div class="container">
  <a href="<?php bloginfo('url'); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_option('logo_link'); ?>" alt="<?php esc_url(bloginfo('name')); ?>" title="<?php esc_url(bloginfo('name')); ?>" /></a>'; 
</div>	
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container">
  <?php the_content(); ?>
</div>	



<?php endwhile; endif; ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	

<?php get_template_part('func/google_analytics'); ?>

<?php wp_footer(); ?>

</body>
</html>