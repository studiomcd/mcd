<?php

function bloco_esquerda_func( $atts ) {
     extract( shortcode_atts( array(
	 'img_vinheta_1200' => '',
	 'img_vinheta_900'  => '',
	 'img_vinheta_768'  => '',
	 'img_vinheta_600'  => '',
     'img_vinheta_300'  => '',
     'titulo'           => '',
     'texto'            => '',
	 'lista_1'          => '',
	 'lista_2'          => '',
	 'lista_3'          => '',
	 'lista_4'          => '',
	 'lista_5'          => '',
	 'lista_6'          => '',
	 'lista_7'          => '',
	 'lista_8'          => '',
	 'lista_9'          => '',
	 'lista_10'         => '',
	 'section'          => '',
     ),
     $atts ) );
     

	
if($img_vinheta_1200 ){
$img_vinheta_1200 = $img_vinheta_1200;	
} else{
$img_vinheta_1200 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/1200x800.jpg';	
}	

if($img_vinheta_900 ){
$img_vinheta_900 = $img_vinheta_900;	
} else{
$img_vinheta_900 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/900x600.jpg';	
}	

if($img_vinheta_768 ){
$img_vinheta_768 = $img_vinheta_768;	
} else{
$img_vinheta_768 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/768x512.jpg';	
}	

if($img_vinheta_600 ){
$img_vinheta_600 = $img_vinheta_600;	
} else{
$img_vinheta_600 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/logo-form.png';	
}	
	
if($img_vinheta_300 ){
$img_vinheta_300 = $img_vinheta_300;	
} else{
$img_vinheta_300 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/riscos.png';	
}	
	
	
	
	
	
	$html = '<section class="section-services droite">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6 no-padding content-right">
            
            <div class="col-background"></div>
            <div class="images-services-container 
                        col-lg-12
                        col-xl-7 
                        offset-xl-0 
                        no-padding">
                <div class="image-principale-container">
                    <div class="image-principale-wrapper">
                        <img width="900" height="600" src="'. $img_vinheta_900 .'" class="attachment-medium size-medium" alt="" srcset="'. $img_vinheta_900 .' 900w, '. $img_vinheta_1200 .' 1200w, '. $img_vinheta_768 .' 768w, '. $img_vinheta_1200 .' 1369w" sizes="(max-width: 900px) 100vw, 900px" /> 
                    </div>
                </div>
                <div class="image-secondaire-container">
                    <div class="image-secondaire-wrapper">
                        <img width="600" height="600" src="'. $img_vinheta_600 .'" class="attachment-thumbnail-large size-thumbnail-large" alt="" srcset="'. $img_vinheta_600 .' 600w, '. $img_vinheta_600 .' 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
                    </div>
                </div>
                <div class="image-tertiaire-container">
                    <div class="image-tertiaire-wrapper">
                        <div class="masque-noir"></div>
                        <img width="300" height="300" src="'. $img_vinheta_300 .'" class="attachment-thumbnail size-thumbnail" alt="" srcset="'. $img_vinheta_300 .' 300w, '. $img_vinheta_300 .' 600w" sizes="(max-width: 300px) 100vw, 300px" /> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-6 content-left">
            <div class="titre-desc-container">
                <h2>'. $titulo .'</h2>
                '. $texto .'
     
            </div>';

	if($lista_1):
           $html .=  ' <div class="avantages-container">
                <ul>
                                                                        <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_1 .'</span>
                            </li>';
	
	endif;
	
	
	if($lista_2):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_2 .'</span>
                            </li>';
         endif; 
	
	
	if($lista_3):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_3 .'</span>
                            </li>';
         endif; 
	
	
	if($lista_4):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_4 .'</span>
                            </li>';
         endif; 
	
	if($lista_5):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_5 .'</span>
                            </li>';
         endif; 
	
	if($lista_6):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_6 .'</span>
                            </li>';
         endif; 
	
	if($lista_7):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_7 .'</span>
                            </li>';
         endif; 
	
	if($lista_8):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_8 .'</span>
                            </li>';
         endif; 
	
        
	if($lista_9):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_9 .'</span>
                            </li>';
         endif; 
	
	
	if($lista_10):					
          $html .=  ' <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg> 
                                <span>'. $lista_10 .'</span>
                            </li>';
         endif; 
	
	
	
          if($lista_1):                                                 
           $html .=  '  </ul></div>';
	
			endif;
	
            $html .=  '<div class="ronds-container">
                <div class="ronds-wrapper">
                    <div class="rond"></div>
                    <div class="rond"></div>
                    <div class="rond"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="label" style="display:none">'. $section .'</div>
</section> ';
	
	
	
	
	
	return $html;
    
    }
    add_shortcode('bloco_esquerda', 'bloco_esquerda_func'); 






////////////////

?>