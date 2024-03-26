<?php
function bloco_dark_func( $atts ) {
     extract( shortcode_atts( array(
     'titulo_a' => '',
     'texto_a' => '',
	 'titulo_b' => '',
     'texto_b' => '',
	 'img_vinheta_600' => '',
     'img_vinheta_300' => '',
	 'section' => '',
     ),
     $atts ) );
     
	if($img_vinheta_600){
		$img_vinheta_600 = $img_vinheta_600;
	}else{
		$img_vinheta_600 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/600x600.jpg';
	}
	
	if($img_vinheta_300){
		$img_vinheta_300 = $img_vinheta_300;
	}else{
		$img_vinheta_300 = 'https://institutoarkeos.com.br/wp-content/themes/mcd/img/300x300.jpg';
	}
	
	
	
	return '<section class="section-presentation">
  <div class="row">
      <div class="col-12 col-lg-5 col-xl-4 offset-xl-1 contenu-primaire-container">
          <h3>'. $titulo_a .'</h3>
          <div class="line"></div>
          '. $texto_a .'</div>
      <div class="col-12 col-lg-6 offset-lg-1 col-xl-4 offset-xl-2 contenu-secondaire-container">
            <h3><strong>'. $titulo_b .'</strong></h3>
            <div class="horizontal-line-container">
                <div class="line"></div>
            </div>
            <div class="vertical-line-container">
                    <div class="line"></div>
                </div>
            <div class="text_container">
                '. $texto_b .'

            </div>
            <ul>
                
                            </ul>
            <div class="logo_renard">
                <img src="https://institutoarkeos.com.br/wp-content/themes/mcd/img/logo-form.png" alt="Instituto Arkeos">
            </div>
        </div>
        <div class="vignette">
            <img width="600" height="600" src="'. $img_vinheta_600 .'" class="attachment-thumbnail-large size-thumbnail-large" alt="" srcset="'. $img_vinheta_600 .' 600w, '. $img_vinheta_300 .' 300w" sizes="(max-width: 600px) 100vw, 600px" /> 
        </div>
  </div>
  <div class="label" style="display:none">'. $section .'</div>
</section>';
    
    }
    add_shortcode('bloco_dark', 'bloco_dark_func');  
////////////////

?>