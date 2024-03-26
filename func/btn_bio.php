<?php

function btn_bio_func( $atts ) {

     extract( shortcode_atts( array(
		 'link'  => '',
		 'icone' => '',
		 'nome'  => ''
	 ),

     $atts ) );

	switch ($icone) {
   	
	case "facebook":
	$ico = get_template_directory() ."/img/bio/facebook.svg";
	break;
	
	case "youtube":
	$ico = get_template_directory() ."/img/bio/youtube.svg";
	break;
	
	case "instagram":
	$ico = get_template_directory() ."/img/bio/instagram.svg";
	break;
	
	case "linkedin":
	$ico = get_template_directory() ."/img/bio/linkedin.svg";
	break;
	
	case "tiktok":
	$ico = get_template_directory() ."/img/bio/tiktok.svg";
	break;
	
	case "twitter":
	$ico = get_template_directory() ."/img/bio/twitter.svg";
	break;
	
	case "mapa":
	$ico = get_template_directory() ."/img/bio/map.svg";
	break;
	
	case "site":
	$ico = get_template_directory() ."/img/bio/site.svg";
	break;
	
	case "whatsapp":
	$ico = get_template_directory() ."/img/bio/whatsapp.svg";
	break;
	}
	
	 $html ='<div class="col-4"><a href="'. $link .'" rel="nofollow" target="_blank"><img src="'. $ico .'" alt="'. $nome .'" title="'. $nome .'" />'. $nome .'</a></div>'; 
	
     return $html;

    

	

	}

    add_shortcode('btn_bio', 'btn_bio_func');

/////////////////////////////////////////
?>