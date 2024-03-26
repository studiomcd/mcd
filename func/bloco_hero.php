<?php

function bloco_hero_func( $atts ) {
     extract( shortcode_atts( array(
	 'bg' => '',
	 'titulo'           => '',
     'texto'            => '',
	 'lista_1'          => '',
	 'lista_2'          => '',
	 'lista_3'          => '',
	 'small'            => '',
	 'section'          => ''
     ),
     $atts ) );
     
	
	$html ='<section class="section-deplacement" style="background-image: url('. $bg .')">
    <div class="masque-noir"></div>
    <div class="row">
        <h2>'. $titulo .'</h2>
        <h3>'. $texto .'</h3>';
		
	if($lista_1):                                                 
           $html .=  '<div class="row">
                                                                        <div class="deplacement"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                            <span>'. $lista_1 .'</span>
                        </div>';
	
			endif;
	
	if($lista_2): 
	$html .= '<div class="deplacement"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                            <span>'. $lista_2 .'</span>
                        </div>';
	
	endif;
	
	if($lista_3): 
	$html .= '<div class="deplacement"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                            <span>'. $lista_3 .'</span>
                        </div>';
	endif;
	
	if($lista_1): 
	$html .= '</div>';
	endif;
	
        
                                                                                
                                                                                
                                                        
       $html .= '<h5>'. $small .'</h5>
        
    </div>
    <div class="label" style="display:none">'. $section .'</div>
</section>';
	
	
	return $html;
    
    }
    add_shortcode('bloco_hero', 'bloco_hero_func'); 



/////////////////////////

?>