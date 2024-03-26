<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php // get_template_part('func/favicons'); ?>
	
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="<?php bloginfo('template_url'); ?>/css/1.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
	
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
	
	
	:root {
  --cor_1: <?php if(('cor_1')): echo get_option('cor_1'); else: echo '#111111'; endif;?>;
  --cor_2: <?php if(('cor_2')): echo get_option('cor_2'); else: echo '#555555'; endif;?>;
  --cor_3: <?php if(('cor_3')): echo get_option('cor_3'); else: echo '#888888'; endif;?>;
  --cor_4: <?php if(('cor_4')): echo get_option('cor_4'); else: echo '#dedede'; endif;?>;
	}
	
	
	
	
	
	
    </style>	
	
</style>	
	
</head>


<body <?php body_class(); ?>>
	
	
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">
 <a href="<?php bloginfo('url'); ?>">
							
<? if(get_option('logo_link')): ?>
<img src="<?php echo get_option('logo_link'); ?>" alt="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" style="width: 340px;"/>
	 
	<?php else: ?>
	 
	 <h1 class="wow rollIn"><?php bloginfo('name'); ?></h1>
<?php endif; ?>
							
                        </a>
</div>
<nav id="menu">


		
						<?php

	wp_nav_menu(array(
                'theme_location'    => 'main-menu',
                'container'       => 'li',
                'container_id'    => 'nav-item',
                'container_class' => 'main-menu',
                'menu_id'         => false,
                'menu_class'      => 'mainmenu',
                'depth'           => 3,
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
				
	
                ?>
	
</nav>
</header>
<div id="container">