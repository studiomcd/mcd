<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php get_template_part('func/favicons'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    
<link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

<?php wp_head(); ?>
<style type="text/css">

:root {
--cor_1: <?php  echo ('cor_1') ? get_option('cor_1') : '#111111'; ?>;
--cor_2: <?php  echo ('cor_2') ? get_option('cor_2') : '#555555'; ?>;
--cor_3: <?php  echo ('cor_3') ? get_option('cor_3') : '#888888'; ?>;
--cor_4: <?php  echo ('cor_4') ? get_option('cor_4') : '#dedede'; ?>;
 --font:  "Roboto", sans-serif; 
    
    
    
    
}
    
    
    .font-light {
  font-family: var(--font);
  font-weight: 300;
  font-style: normal;
}

.font-regular {
  font-family: var(--font);
  font-weight: 400;
  font-style: normal;
}

.font-bold {
  font-family: var(--font);
  font-weight: 700;
  font-style: normal;
}

.font-black {
  font-family: var(--font);
  font-weight: 900;
  font-style: normal;
}

    
    
</style>
</head>

<body <?php body_class(); ?>>
  <header class="container-fluid">  
 <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
<img src="<?php echo ('logo_link') ? get_option('logo_link') : 'http://localhost/wp/wp-content/themes/mcd/img/logo-mcd.svg'; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" style="width:5vw;"/>
	 
							
                        </a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MenuSite" aria-controls="MenuSite" aria-expanded="false" aria-label="Menu">
			
		<span class="navbar-toggler-icon">
			
			<img src="<?php bloginfo('template_url'); ?>/img/ico-menu.svg" />
			
			</span>
        </button>
		
		
		
		
		
		
        <div class="collapse navbar-collapse" id="MenuSite">
             <div class="navbar-nav ms-auto mt-5">
				<div class="row"> <?php

					if(wp_is_mobile()):
					
					wp_nav_menu(array(
                'theme_location'    => 'main-menu',
		        'container'            => 'div',
                'container_id'    => 'nav-item',
                'container_class' => 'main-menu',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
		        'items_wrap'           => '<ul id="%1$s" class="%2$s flex-column">%3$s</ul>',
                'depth'           => 3,
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
					
					else:
	wp_nav_menu(array(
                'theme_location'    => 'main-menu',
		        'container'            => 'div',
                'container_id'    => 'nav-item',
                'container_class' => 'main-menu',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
		        'items_wrap'           => '<div id="%1$s" class="%2$s">%3$s</div>',
                'depth'           => 3,
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
				
	endif;
                ?>
					
					
					
				 </div>
            </div>
        </div>
        
        
         <?php get_template_part('_redes_sociais'); ?>  
        
        
    </div>
</nav>   
</header>
<main id="container" role="main">
