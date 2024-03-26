<?php

function projeto_func( $atts ) {

     extract( shortcode_atts( array(
		 'id'        => '',
		 'img'      => '',
		 'link'      => '',
		 'titulo'    => '',
		 'subtitulo' => ''
	 ),

     $atts ) );

	 $html ='<div class="project relative" id="project-'. $id .'" data-scroll><a href="'. $link .'" title="'. $titulo .'" class="project-thumb " data-rellax-speed="1"><img width="800" src="'. $img .'" class="greyscale wp-post-image" alt="" /></a><h3 class="absolute uc vdelay6 fadeanim vfadesimple">'. $titulo .'</h3><a href="'. $link .'" class="label absolute uc" title="'. $titulo .'"><span class="leftline line black vlinegrow vdelay3"></span><span class="vdelay5 fadeanim vfadesimple">Ver Projeto</span><span class="rightline line black vlinegrow vdelay3"></span></a><span class="project-cat absolute uc fadeanim vdelay6 vfadesimple">'. $subtitulo .'</span></div>'; 
	
     return $html;

    

	

	}

    add_shortcode('projeto', 'projeto_func');

/////////////////////////////////////////
?>

