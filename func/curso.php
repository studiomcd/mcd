<?php

function curso_func( $atts ) {
     extract( shortcode_atts( array(
	 'titulo'           => '',
     'img_768'            => '',
	 'img_900'          => '',
	 'img_1200'          => ''
     ),
     $atts ) );
     
	
	$html ='<div class="chalet-container col-12 col-sm-6 col-xl-3 no-padding disable">
                                    <div class="chalet">
                                        <div class="chalet-wrapper">
                                            <img width="900" height="600" src="'. $img_900 .'" class="attachment-medium size-medium" alt="" srcset="'. $img_900 .' 900w, '. $img_1200 .' 1200w, '. $img_768 .' 768w" sizes="(max-width: 900px) 100vw, 900px" />
                                        </div>
                                        <div class="datepicker"></div>
                                        <div class="chalet-name-container">
                                            <div class="name">'. $titulo .'</div>
                                            <div class="icon-background">
                                                <div class="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chalet-calendar">';
	
	/*
	$html .= '<a href="#">
    <div class="btn btn-transparent"   style="width:100%" >
        <div class="btn-svg-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow_btn" width="25.5" height="5" viewBox="0 0 25.5 4.62"><g data-name="Calque 2"><path d="M0 1.83v1h23.48l-1.06 1.02.77.77 2.31-2.31L23.19 0l-.77.77 1.06 1.06z" fill-rule="evenodd" data-name="Calque 1"/></g></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="rond_btn" width="26" height="26" viewBox="0 0 26.69 26"><g data-name="Calque 2"><path d="M13.34 26A13.19 13.19 0 0 1 0 13 13.19 13.19 0 0 1 13.34 0a13.19 13.19 0 0 1 13.35 13 13.19 13.19 0 0 1-13.35 13zm0-25A12.19 12.19 0 0 0 1 13a12.19 12.19 0 0 0 12.34 12 12.19 12.19 0 0 0 12.35-12A12.19 12.19 0 0 0 13.34 1z" opacity=".3" data-name="Calque 1"/></g></svg>
                    </div>
        <span>Detalhes</span>
    </div>
</a>';
	*/
	
	$html .= '</div></div>';
	
	
	return $html;
    
    }
    add_shortcode('curso', 'curso_func'); 



/////////////////////////

?>