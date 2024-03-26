<?php

function veja_tambem_func( $atts ) {
     extract( shortcode_atts( array(
	 'bg'        => '',
	 'cta'        => '',
	 'titulo_1'  => '',
     'link_1'    => '',
	 'img_1_768'     => '',
	 'img_1_900'     => '',
	 'img_1_1200'     => '',
	 'titulo_2'  => '',
     'link_2'    => '',
	 'img_2_768'     => '',
	 'img_2_900'     => '',
	 'img_2_1200'     => ''
     ),
     $atts ) );
     
	
	$html = '<section class="section-a-voir-aussi" style="
            background-image:url('. $bg .');
        
    background-repeat:no-repeat;
    background-size:cover;
">
    <div class="masque-noir"></div>
    <div class="row">     
        <h4>'. $cta .'</h4>
        <div class="content-container">
            <div class="col-6 offset-6 col-lg-4 offset-lg-2 left-content no-padding">
                <h2>'. $titulo_1 .'</h2>
                <div class="rond-ligne">
                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow_pushlienscat" width="101" height="5" viewBox="0 0 101.58 4.62"><g data-name="Calque 2"><path d="M99.27 0l-.77.77 1.06 1.06H0v1h99.56L98.5 3.85l.77.77 2.31-2.31zm.73 2.27z" fill-rule="evenodd" data-name="Calque 1"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rond_btn" width="26" height="26" viewBox="0 0 26.69 26"><g data-name="Calque 2"><path d="M13.34 26A13.19 13.19 0 0 1 0 13 13.19 13.19 0 0 1 13.34 0a13.19 13.19 0 0 1 13.35 13 13.19 13.19 0 0 1-13.35 13zm0-25A12.19 12.19 0 0 0 1 13a12.19 12.19 0 0 0 12.34 12 12.19 12.19 0 0 0 12.35-12A12.19 12.19 0 0 0 13.34 1z" opacity=".3" data-name="Calque 1"/></g></svg>
                </div>
                <div class="image-wrapper">
                    <a href="'. $link_1 .'">
                        <img width="900" height="600" src="'. $img_1_900 .'" class="attachment-medium size-medium" alt="" srcset="'. $img_1_900 .' 900w, '. $img_1_768 .' 768w, '. $img_1_1200 .' 1200w" sizes="(max-width: 900px) 100vw, 900px" />
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-4 right-content no-padding">
                <h2>'. $titulo_2 .'</h2>
                <div class="rond-ligne">
                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow_pushlienscat" width="101" height="5" viewBox="0 0 101.58 4.62"><g data-name="Calque 2"><path d="M99.27 0l-.77.77 1.06 1.06H0v1h99.56L98.5 3.85l.77.77 2.31-2.31zm.73 2.27z" fill-rule="evenodd" data-name="Calque 1"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="rond_btn" width="26" height="26" viewBox="0 0 26.69 26"><g data-name="Calque 2"><path d="M13.34 26A13.19 13.19 0 0 1 0 13 13.19 13.19 0 0 1 13.34 0a13.19 13.19 0 0 1 13.35 13 13.19 13.19 0 0 1-13.35 13zm0-25A12.19 12.19 0 0 0 1 13a12.19 12.19 0 0 0 12.34 12 12.19 12.19 0 0 0 12.35-12A12.19 12.19 0 0 0 13.34 1z" opacity=".3" data-name="Calque 1"/></g></svg>
                </div>
                <div class="image-wrapper">
                    <a href="'. $link_2 .'">
                        <img width="900" height="600" src="'. $img_2_900 .'" class="attachment-medium size-medium" alt="" srcset="'. $img_2_900 .' 900w, '. $img_2_768 .' 768w, '. $img_2_1200 .' 1200w" sizes="(max-width: 900px) 100vw, 900px" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>';
	
	
	
	return $html;
    
    }
    add_shortcode('veja_tambem', 'veja_tambem_func'); 

?>