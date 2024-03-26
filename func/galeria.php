<?php

////////// csrmcd Galeria

 remove_shortcode('gallery');
add_shortcode('gallery', 'parse_gallery_shortcode');

function parse_gallery_shortcode($atts) {
 
    global $post;
 
    if ( ! empty( $atts['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $atts['orderby'] ) )
            $atts['orderby'] = 'post__in';
        $atts['include'] = $atts['ids'];
    }
 
    extract(shortcode_atts(array(
        'orderby' => 'menu_order ASC, ID ASC',
        'include' => '',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'full',
        'link' => 'file'
    ), $atts));
 
 
    $args = array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'post_mime_type' => 'image',
        'orderby' => $orderby
    );
 
    if ( !empty($include) )
        $args['include'] = $include;
    else {
        $args['post_parent'] = $id;
        $args['numberposts'] = -1;
    }
 
    $images = get_posts($args);
	
	
	
	
	$html = '<section class="section-chalet" style="margin-top:0;"><div class="row"><div class="row sliders-chalet"><div class="col-12 col-lg-5 col-xl-4 content-left no-padding"><div class="header-opened-chalet-modal"><div class="svg-fleche-gauche-rond"><svg xmlns="http://www.w3.org/2000/svg" class="arrow_btn" width="25.5" height="5" viewBox="0 0 25.5 4.62"><g data-name="Calque 2"><path d="M0 1.83v1h23.48l-1.06 1.02.77.77 2.31-2.31L23.19 0l-.77.77 1.06 1.06z" fill-rule="evenodd" data-name="Calque 1"/></g></svg><svg xmlns="http://www.w3.org/2000/svg" class="rond_btn" width="26" height="26" viewBox="0 0 26.69 26"><g data-name="Calque 2"><path d="M13.34 26A13.19 13.19 0 0 1 0 13 13.19 13.19 0 0 1 13.34 0a13.19 13.19 0 0 1 13.35 13 13.19 13.19 0 0 1-13.35 13zm0-25A12.19 12.19 0 0 0 1 13a12.19 12.19 0 0 0 12.34 12 12.19 12.19 0 0 0 12.35-12A12.19 12.19 0 0 0 13.34 1z" opacity=".3" data-name="Calque 1"/></g></svg></div><div class="texte">Retornar</div></div><div class="col-12 col-xl-10 offset-xl-1 no-padding"><h3>Galeria <br /> de imagens</h3><div class="swiper-container enhanced-swiper swiper-chalet-left swiper-chalet-left-0"><div class="swiper-wrapper">';
	
	
	
	 foreach ( $images as $image ) {     
        $caption = $image->post_excerpt;
 
        $description = $image->post_content;
        if($description == '') $description = $image->post_title;
 
        $image_alt = get_post_meta($image->ID,'_wp_attachment_image_alt', true);
        $path_pic = wp_get_attachment_image_src($image->ID, $size);
        
       
	
	
	
	$html .= '<div class="swiper-slide"><img width="'. $path_pic[1] .'" src='. $path_pic[0] .'" class="attachment-medium-large size-medium-large" alt="'. $description .'" title="'. $description .'" srcset="'. $path_pic[0] .' 1200w, '. $path_pic[0] .' 900w, '. $path_pic[0] .' 768w" sizes="(max-width: 1200px) 100vw, 1200px" /></div>';
	
	
	}
	
	
	$html .= '</div></div><div class="nav-chalets-sliders"><div class="swiper-chalets-open-modal nav-chalets-gallery"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12"><g data-name="Calque 2"><path d="M0 12h3V9H0zm8 0h3V9H8zm8 0h3V9h-3zM0 3h3V0H0zm8 0h3V0H8zm8-3v3h3V0z" fill-rule="evenodd" data-name="Calque 1"/></g></svg></div><div class="swiper-chalets-0-prev-slide nav-chalets-fleche"><svg xmlns="http://www.w3.org/2000/svg" class="arrow_small" width="34" height="5" viewBox="0 0 34.5 4.62"><g data-name="Calque 2"><path d="M34.5 2.79v-1H2L3.08.77 2.31 0 0 2.31l2.31 2.31.77-.77L2 2.79z" fill-rule="evenodd" data-name="Calque 1"/></g></svg></div><div class="swiper-chalets-0-next-slide nav-chalets-fleche"><svg xmlns="http://www.w3.org/2000/svg" class="arrow_small" width="34" height="5" viewBox="0 0 34.5 4.62"><g data-name="Calque 2"><path d="M34.5 2.79v-1H2L3.08.77 2.31 0 0 2.31l2.31 2.31.77-.77L2 2.79z" fill-rule="evenodd" data-name="Calque 1"/></g></svg></div></div><div class="nav-chalets-numbers"><span class="number current-slide-chalets-0-number">?</span><span class="number total-slide-chalets-0-number">?</span></div></div></div><div class="col-12 col-lg-7 col-xl-8 content-right no-padding"><div class="swiper-container enhanced-swiper swiper-chalet-right swiper-chalet-right-0"><div class="swiper-wrapper">';
	
	
 foreach ( $images as $image ) {     
        $caption = $image->post_excerpt;
 
        $description = $image->post_content;
        if($description == '') $description = $image->post_title;
 
        $image_alt = get_post_meta($image->ID,'_wp_attachment_image_alt', true);
        $path_pic = wp_get_attachment_image_src($image->ID, $size);
        
       
	
	
	
	$html .= '<div class="swiper-slide"><img width="'. $path_pic[1] .'" src='. $path_pic[0] .'" class="attachment-medium-large size-medium-large" alt="'. $description .'" title="'. $description .'" srcset="'. $path_pic[0] .' 1200w, '. $path_pic[0] .' 900w, '. $path_pic[0] .' 768w" sizes="(max-width: 1200px) 100vw, 1200px" /></div>';
	
	
	}
	
	
	
	
	$html .= '</div></div><div class="swiper-container gallery-thumbs gallery-thumbs-0"><div class="swiper-wrapper">';
	
	
	 foreach ( $images as $image ) {     
        $caption = $image->post_excerpt;
 
        $description = $image->post_content;
        if($description == '') $description = $image->post_title;
 
        $image_alt = get_post_meta($image->ID,'_wp_attachment_image_alt', true);
        $path_pic = wp_get_attachment_image_src($image->ID, $size);
        
       
	
	
	
	$html .= '<div class="swiper-slide"><img width="300" src='. $path_pic[0] .'" class="attachment-thumbnail size-thumbnail" alt="'. $description .'" title="'. $description .'" srcset="'. $path_pic[0] .' 300w, '. $path_pic[0] .' 600w" sizes="(max-width: 300px) 100vw, 300px" /></div>';
	
	 
	
	}
	
	
	
	
	
	
	
	$html .= '</div></div></div></div></div></section>';
	
	
	echo $html;
	
    
    
}

/////////////




?>