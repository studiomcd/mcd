<?php

function vinheta_func($atts) {
	extract( shortcode_atts( array(
     'img_600' => '',
	 'img_300' => ''
     ),
     $atts ) );
	
	if($img_600):
	
	$html ='<div class="vignette">
            <img width="600" height="600" src="'. $img_600 .'" class="attachment-thumbnail-large size-thumbnail-large" alt="" srcset="'. $img_600 .' 600w, '. $img_300 .' 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
        </div>';
	
	
	else:
     $html ='<div class="vignette">
            <img width="600" height="600" src="https://institutoarkeos.com.br/wp-content/themes/mcd/img/600x600.jpg" class="attachment-thumbnail-large size-thumbnail-large" alt="" srcset="https://institutoarkeos.com.br/wp-content/themes/mcd/img/600x600.jpg 600w, https://institutoarkeos.com.br/wp-content/themes/mcd/img/300x300.jpg 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
        </div>';
	
	endif;
	
     return $html;
    
    
    }
    add_shortcode('vinheta', 'vinheta_func');     

/////////////////


?>