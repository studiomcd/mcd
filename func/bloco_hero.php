<?php
//[bloco_hero image="" titulo="" subtitulo=""]
function bloco_hero_func( $atts ) {

     extract( shortcode_atts( array(
         'image'     => '',
         'titulo'    => '',
         'subtitulo' => ''

     ),

     $atts ) );

   
	$html ='<div class="jumbotron jumbotron-fluid capa" style="background-image: url('. $image .');"><div class="container text-center mg-t100 mg-b100"><h1>'. $titulo .'</h1><p>'. $subtitulo .'</p></div></div>';

	return $html;

    }

    add_shortcode('bloco_hero', 'bloco_hero_func'); 

?>