<?php

/* [pagina id=""] */
function pagina_func( $atts ) {

     extract( shortcode_atts( array(
		 'id' => ''
	 ),

     $atts ) );

	
	        $my_postid = $id;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
     
	return $content;
	

    

	

	}

    add_shortcode('pagina', 'pagina_func');

/////////////////////////////////////////
?>