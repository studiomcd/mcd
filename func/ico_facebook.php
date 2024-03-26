<?php
function ico_facebook_func( $atts ) {
     extract( shortcode_atts( array(
     'link' => ''
     ),
     $atts ) );
     
	
	return '<a href="'. $link .'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill:#ffffff;width:35px"><path d="M22.6,0H1.3C0.6,0,0,0.6,0,1.3v21.3C0,23.4,0.6,24,1.3,24h11.5v-9.3H9.7v-3.6h3.2V8.4c0-3.1,1.9-4.8,4.6-4.8
		c1.4,0,2.5,0.1,2.8,0.2V7h-1.9c-1.5,0-1.8,0.7-1.8,1.8v2.3h3.6l-0.5,3.6h-3.1V24h6.1c0.7,0,1.4-0.6,1.4-1.4V1.3
		C24,0.6,23.4,0,22.6,0z"/></svg></a>';
    
    }
    add_shortcode('ico_facebook', 'ico_facebook_func');  
////////////////


function ico_youtube_func( $atts ) {
     extract( shortcode_atts( array(
     'link' => '' 
     ),
     $atts ) );
     
	
	return '<a href="'. $link .'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 218" style="fill:#ffffff;width:35px">
	<path style="fill:#ffffff;" d="M130.5,167c0,4.7-1.4,7-4.1,7c-1.6,0-3.1-0.7-4.7-2.3v-31.9c1.5-1.5,3.1-2.2,4.7-2.2c2.7,0,4.1,2.4,4.1,7.1V167z
		 M156.7,149.6v-4.8c0-4.8,1.6-7.3,4.7-7.3c3.2,0,4.7,2.4,4.7,7.3v4.8H156.7z M75.4,111.7h-33v10h11.1V182H64v-60.3h11.4V111.7z
		 M104,129.7h-9.5v39.9c-2.2,3-4,4.4-6,4.4c-1.3,0-2-0.7-2.1-2.1c-0.2-0.3-0.2-1.6-0.2-3.7v-38.5h-9.4V171c0,3.7,0.3,6.1,0.9,7.7
		c0.9,2.7,3,4,6,4c3.6,0,7.1-2.2,10.8-6.4v5.7h9.5V129.7z M139.9,145.5c0-5-0.3-8.4-1-10.5c-1.2-4-3.7-6-7.5-6c-3.4,0-6.7,2-9.7,5.7
		v-23h-9.6V182h9.6v-5.1c3.1,3.8,6.4,5.8,9.7,5.8c3.8,0,6.4-2,7.5-6c0.7-2.2,1-5.7,1-10.4V145.5z M175.7,163.9H166
		c0,3.7-0.1,5.8-0.1,6.4c-0.6,2.4-2,3.7-4.3,3.7c-3.3,0-4.8-2.4-4.8-7.3v-9.2h19v-10.9c0-5.5-1-9.6-3-12.3
		c-2.6-3.6-6.4-5.4-11.1-5.4c-4.8,0-8.7,1.8-11.4,5.4c-2,2.7-2.8,6.7-2.8,12.3V165c0,5.6,1,9.7,3,12.3c2.7,3.6,6.6,5.4,11.6,5.4
		c4.9,0,8.9-1.8,11.4-5.7c1.2-1.7,1.9-3.5,2.1-5.7c0.2-1,0.3-3,0.3-6.1V163.9z M111.4,46.4c0-4.8-1.6-7.4-4.6-7.4
		c-3.1,0-4.6,2.6-4.6,7.4v22.3c0,4.8,1.4,7.2,4.6,7.2c3,0,4.6-2.4,4.6-7.2V46.4z M187.4,148.1c0.1,12.1,0.1,25.1-2.7,37
		c-1.8,8.3-8.7,14.4-16.7,15.4c-19.6,2.1-39.4,2.1-58.9,2.1c-19.6,0-39.3,0-58.7-2.1c-8.1-1-15-7.1-16.8-15.4
		c-2.9-12-2.9-24.9-2.9-37l0,0c0-12.3,0.1-25.3,2.9-37.1c1.8-8.4,8.7-14.5,17-15.4c19.3-2.2,39-2.2,58.6-2.2c19.7,0,39.4,0,58.9,2.2
		c8,0.9,14.9,7,16.9,15.4c2.7,11.8,2.7,24.8,2.7,37.1l0,0H187.4z M79.7,55.2v28.7H69.2V55.2c-1-5.2-3.1-12.6-6.5-22.5
		C60.5,26.2,58.1,19.6,56,13h11l7.5,27.8L81.9,13h10.9L79.7,55.2z M120.9,66.8c0,5.6-1,9.8-2.9,12.4c-2.7,3.6-6.3,5.4-11.1,5.4
		c-4.8,0-8.5-1.9-11-5.4c-2-2.7-3-6.8-3-12.4V48.2c0-5.6,1-9.7,3-12.4c2.6-3.6,6.2-5.4,11-5.4c4.8,0,8.4,1.9,11.1,5.4
		c2,2.7,2.9,6.8,2.9,12.4V66.8z M146.9,83.9v-5.7c-3.9,4.3-7.5,6.4-11.1,6.4c-3,0-5.1-1.3-6.1-3.9c-0.6-1.7-0.9-4.1-0.9-7.9V31.1
		h9.6v38.8c-0.1,2.3-0.1,3.4,0,3.7c0.2,1.6,1,2.2,2.3,2.2c1.8,0,3.8-1.4,6-4.4V31.1h9.6v52.8H146.9z M218.5,40.5
		c0-22.6-18.4-41-41.1-41H40.5c-22.6,0-41,18.4-41,41v136.9c0,22.7,18.4,41.1,41,41.1h136.9c22.7,0,41.1-18.4,41.1-41.1V40.5z"/>
</svg></a>';
    
    }
    add_shortcode('ico_youtube', 'ico_youtube_func');  
////////////////

function ico_whats_func( $atts ) {
     extract( shortcode_atts( array(
     'fone' => '' 
     ),
     $atts ) );
     
	
	return '<a href="https://api.whatsapp.com/send?phone='. $fone .'" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 220" style="fill:#ffffff;width:35px"><path style="fill:#ffffff;" d="M139.9,121c-3.7,0-10.9,13.8-15.1,13.8c-1.1,0-2.1-0.4-3.1-0.9c-7.9-4-14.9-8.2-21.5-14.4c-5.3-5.1-11.2-12.8-14.4-19.4
		c-0.5-0.7-0.7-1.4-0.7-2.1c0-3.3,9.8-9.3,9.8-14.8c0-1.4-7.3-20.7-8.3-23.2c-1.4-3.7-2.1-4.8-5.9-4.8c-1.9,0-3.5-0.4-5.3-0.4
		c-3,0-5.2,1.1-7.3,3.1c-6.9,6.4-10.3,13-10.5,22.5v1.1c-0.1,9.8,4.6,19.6,10.1,27.7c12.2,18,24.8,33.8,45.2,42.9
		c6.2,2.8,20.2,8.9,27.1,8.9c8,0,21.3-5.1,24.6-13c1.2-3.3,2.4-7.3,2.4-10.9c0-0.6,0-1.4-0.4-2.1C165.4,133.2,142.2,121,139.9,121
		L139.9,121z M111,196.3c-17.4,0-34.5-5.2-49.1-14.7l-34.4,10.9l11.2-33.1c-11.1-15.3-17-33.6-17-52.3C21.7,58,61.8,18,111,18
		s89.2,40,89.2,89.2S160.2,196.3,111,196.3L111,196.3z M111,0C51.9,0,3.8,48,3.8,107.2c0,19.5,5.3,38.7,15.4,55.2L-0.1,220l59.1-19
		c16,8.8,33.8,13.4,51.9,13.4c59.1,0,107-48,107-107.2S170.2,0,111,0L111,0z"/></svg></a>';
    
    }
    add_shortcode('ico_whats', 'ico_whats_func');  
////////////////

?>