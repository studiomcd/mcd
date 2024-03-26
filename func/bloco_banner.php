<?php
// [bloco_banner w1200="" w300="" w768="" w1024="" w1000="" titulo="" texto="" link="" rotulo=""]


function bloco_banner_func( $atts ) {

     extract( shortcode_atts( array(  
         'w1200'   => '',
         'w300'    => '',
         'w768'    => '',
         'w1024'   => '',
         'w1000'   => '',
         'titulo'  => '',
         'texto'   => '',
         'link'    => '',
         'rotulo'  => ''
     ),

     $atts ) );

 if($w1024  != ''){ $w1024  = $w1024;  }else{ $w1024  = $w1200; }
 if($w1000  != ''){ $w1000  = $w1000;  }else{ $w1000  = $w1200; }
 if($w768   != ''){ $w768   = $w768;   }else{ $w768   = $w1200; }
 if($w300   != ''){ $w300   = $w300;   }else{ $w300   = $w1200; }
 if($link   != ''){ $link   = $link;   }else{ $link   = '#'; }
 if($rotulo != ''){ $rotulo = $rotulo; }else{ $rotulo = 'Saiba mais'; }	
    
    

	$html ='<div class="sslide relative"><div class="md-flex"><div class="sslide-content"><a href="'. $link .'" title="'. $titulo .'" class="sslide-img fadeanim sdelay1 sfadetotopsmall"><img width="1200" src="'. $w1200 .'" class="rellax mobilehide tabletshow desktopshow" alt="" data-rellax-speed="1" srcset="'. $w1200 .' 1200w, '. $w300 .' 300w, '. $w768 .' 768w, '. $w1024 .' 1024w, '. $w1000 .' 1000w" sizes="(max-width: 1200px) 100vw, 1200px" /><img width="800" src="'. $w1000 .'" class="rellax mobileshow tablethide desktophide" alt="" data-rellax-speed="1" /><div class="slide-title md-col md-col-8"><h3 class="fadeanim sdelay2 sfadetotopsmall">'. $titulo .'</h3><span class="uc subcat fadeanim sdelay3 sfadetotopsmall">'. $texto .'</span></div><a href="'. $link .'" class="label absolute uc" title="'. $rotulo.'"><span class="line white slinegrow sdelay6"></span><span class="sdelay7 fadeanim sfadesimple">'. $rotulo .'</span></a></div></div></div>';

	return $html;

    

    }

    add_shortcode('bloco_banner', 'bloco_banner_func'); 







/////////////////////////



?>