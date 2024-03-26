<?php
function btn_calendar_func( $atts ) {

     extract( shortcode_atts( array(
		 'link' => '',
		 'rotulo' => ''
	 ),

     $atts ) );

	
	
	
	$html ='<a href="'. $link .'"><div class="btn btn-gris-fonce"   style="width:100%" ><div class="btn-svg-container"><svg xmlns="http://www.w3.org/2000/svg" class="calendrier" width="29" height="27" viewBox="0 0 29 27"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M24 2V0h-2v2H7V0H5v2H0v25h29V2zm3 2v4H2V4zM2 25V10h25v15z"/><path d="M5.24 13.26h2.59v1.26H5.24zM13.2 13.26h2.59v1.26H13.2zM21.16 13.26h2.59v1.26h-2.59zM5.24 20.19h2.59v1.26H5.24zM13.2 20.19h2.59v1.26H13.2zM21.16 20.19h2.59v1.26h-2.59z"/></g></g></svg></div><span>'. $rotulo .'</span></div></a>'; 
							

     return $html;

    

	

	}

    add_shortcode('btn_calendar', 'btn_calendar_func');

/////////////////////////////////////////////

?>