<?php
// [first_block w1200="" w300="" w768="" w1024="" w1000="" id="" subtitulo="" titulo="" texto="" link="" rotulo=""]


function first_block_func( $atts ) {

     extract( shortcode_atts( array(  
         'w1200'      => '',
         'w300'       => '',
         'w768'       => '',
         'w1024'      => '',
         'w1000'      => '',
         'id'         => '',
         'titulo'     => '',
         'subtitulo'  => '',
         'texto'      => '',
         'link'       => '',
         'rotulo'     => ''
     ),

     $atts ) );

 if($w1024  != ''){ $w1024  = $w1024;  }else{ $w1024  = $w1200; }
 if($w1000  != ''){ $w1000  = $w1000;  }else{ $w1000  = $w1200; }
 if($w768   != ''){ $w768   = $w768;   }else{ $w768   = $w1200; }
 if($w300   != ''){ $w300   = $w300;   }else{ $w300   = $w1200; }
 if($link   != ''){ $link   = $link;   }else{ $link   = '#'; }
 if($rotulo != ''){ $rotulo = $rotulo; }else{ $rotulo = 'Saiba mais'; }	
    
    
if($id == 1 ){
	$html ='<div class="contentblock block-'. $id .'"><div class="clearfix md-flex flex-wrap flex-center"><div class="md-col md-col-5 flex-last relative text-block" data-scroll><span class="fadeanim vfadesimple vdelay2"><h1>'. $titulo .'</h1><p>'. $texto .'<br /><a href="'. $link .'">'. $rotulo .'</a></p></span></div><div class="md-col md-col-7 flex-first img-block" data-scroll><div class="relative inline-block"><span class="absolute"><span class="numeral fadeanim vfadesimple vdelay3">0'. $id .'</span> <span class="uc mobilehide fadeanim vfadesimple vdelay4">/ '. $subtitulo .'</span></span><img width="817" src="'. $w1200 .'" class="fadeanim vfadetotopsmall vdelay1" alt="" data-rellax-speed="1" srcset="'. $w1200 .' 817w, '. $w300 .' 212w, '. $w768 .' 768w, '. $w768 .' 725w, '. $w768 .'708w" sizes="(max-width: 817px) 100vw, 817px" /><span class="absolute pattern"></span></div></div></div></div>';
 }
    elseif($id == 2 ){   
    
    $html ='<div class="contentblock block-'. $id .'"><div class="clearfix md-flex flex-wrap flex-center"><div class="md-col md-col-5 relative text-block" data-scroll><span class="fadeanim vfadesimple vdelay2"><h2>'. $titulo .'</h2><p>'. $texto .'<br /><a href="'. $link .'">'. $rotulo .'</a></p></span></div><div class="md-col md-col-7 img-block" data-scroll><div class="relative inline-block"><span class="absolute"><span class="numeral fadeanim vfadesimple vdelay3">0'. $id .'</span><span class="uc mobilehide fadeanim vfadesimple vdelay4">'. $subtitulo .'</span></span><img width="600" src="'. $w768 .'" class="fadeanim vfadetotopsmall vdelay1" alt="'. $titulo .'" data-rellax-speed="1" /><span class="absolute pattern"></span></div></div></div></div>';

        }
    elseif($id == 3){
        
        $html ='<div class="contentblock block-'. $id .'"><div class="clearfix md-flex flex-wrap flex-center"><div class="md-col md-col-6 flex-last relative text-block" data-scroll><span class="fadeanim vfadesimple vdelay2"><h2>'. $titulo .'</h2><p>'. $texto .'</p><span class="line black vlinegrow vdelay6" style="margin-left: 0;"></span><br /><a href="'. $link .'" class="cta-button">'. $rotulo .'</a></span></div><div class="md-col md-col-6 flex-first img-block" data-scroll><div class="relative inline-block"><h3 class="absolute mobilehide uc">'. $subtitulo .'</h3><span class="absolute"><span class="numeral fadeanim vfadesimple vdelay3">0'. $id .'</span> <span class="uc mobilehide fadeanim vfadesimple vdelay4">'. $subtitulo .'</span></span><img width="738" src="'. $w768 .'" class="fadeanim vfadetotopsmall vdelay1" alt="" data-rellax-speed="1" srcset="'. $w768 .' 738w, '. $w300 .' 198w, '. $w768 .' 677w, '. $w768 .' 661w" sizes="(max-width: 738px) 100vw, 738px" /><span class="absolute pattern"></span></div></div></div></div>';
        
    }
    else{   
    
   $html ='<div class="contentblock block-'. $id .'"><div class="clearfix md-flex flex-wrap flex-center"><div class="md-col md-col-5 flex-last relative text-block" data-scroll><span class="fadeanim vfadesimple vdelay2"><h1>'. $titulo .'</h1><p>'. $texto .'<br /><a href="'. $link .'">'. $rotulo .'</a></p></span></div><div class="md-col md-col-7 flex-first img-block" data-scroll><div class="relative inline-block"><span class="absolute"><span class="numeral fadeanim vfadesimple vdelay3">0'. $id .'</span> <span class="uc mobilehide fadeanim vfadesimple vdelay4">/ '. $subtitulo .'</span></span><img width="817" src="'. $w1200 .'" class="fadeanim vfadetotopsmall vdelay1" alt="" data-rellax-speed="1" srcset="'. $w1200 .' 817w, '. $w300 .' 212w, '. $w768 .' 768w, '. $w768 .' 725w, '. $w768 .'708w" sizes="(max-width: 817px) 100vw, 817px" /><span class="absolute pattern"></span></div></div></div></div>';

        }
    
    
	return $html;

    

    }

    add_shortcode('first_block', 'first_block_func'); 







/////////////////////////



?>