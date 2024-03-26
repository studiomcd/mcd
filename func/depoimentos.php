<?php


////////////////////////////



function depoimentos_shortcode( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
		'bg' => '',
		'titulo' => ''
	),

     $atts ) );
	
	$html = '<section id="temoignages" class="section-temoignages" style="
            background-image:url('. $bg .');
        background-repeat:no-repeat;
    background-size:cover;
">
    <div class="masque-noir"></div>
    <div class="temoignages-container">
        <h4>'. $titulo .'</h4>
        <!-- Swiper -->
        <div class="swiper-container swiper-temoignages">
            <div class="swiper-wrapper">';

  $html .= do_shortcode($content);
	
	$html .='</div>
        </div>
        <div class="nav-temoignages">
            <div class="swiper-temoignages-prev-slide nav-temoignages-fleche">
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow_small" width="34" height="5" viewBox="0 0 34.5 4.62"><g data-name="Calque 2"><path d="M34.5 2.79v-1H2L3.08.77 2.31 0 0 2.31l2.31 2.31.77-.77L2 2.79z" fill-rule="evenodd" data-name="Calque 1"/></g></svg>
            </div>
            <div class="nav-temoignages-numbers">
                <span class="number current-slide-number">?</span>
                <span class="number total-slide-number">?</span>
            </div>
            <div class="swiper-temoignages-next-slide nav-temoignages-fleche">
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow_small" width="34" height="5" viewBox="0 0 34.5 4.62"><g data-name="Calque 2"><path d="M34.5 2.79v-1H2L3.08.77 2.31 0 0 2.31l2.31 2.31.77-.77L2 2.79z" fill-rule="evenodd" data-name="Calque 1"/></g></svg>
            </div>
        </div>';
	/*
       $html .= '<a href="#" target="_blank" class="logo-trip-advisor">
            
            <svg xmlns="http://www.w3.org/2000/svg" class="tripadvisor_svg" width="41" height="24" viewBox="0 0 41.02 24.31"><g data-name="Calque 2"><g data-name="Calque 1"><path class="tete_trip_advisor" d="M25.14.38a22 22 0 0 1 3.37.79A23.18 23.18 0 0 1 34 3.67a.86.86 0 0 0 .42.12h6.49v.07l-.29.43A12.25 12.25 0 0 0 39 7.68a.36.36 0 0 0 0 .36 10 10 0 0 1 1.7 8.46 10 10 0 0 1-4.52 6.24 10.29 10.29 0 0 1-5.47 1.57 9.77 9.77 0 0 1-2.46-.31 10.28 10.28 0 0 1-5-3c-.19-.2-.36-.4-.55-.62l-2.2 3.27-2.16-3.22h-.07v.05a10.16 10.16 0 0 1-6.36 3.6 10 10 0 0 1-4.24-.23 10.2 10.2 0 0 1-5-3.12 10.12 10.12 0 0 1-2.53-5.17 9.77 9.77 0 0 1 .18-4.06A10.35 10.35 0 0 1 1.92 8 .45.45 0 0 0 2 7.73a11.68 11.68 0 0 0-1.47-3.1C.37 4.38.18 4.15 0 3.92v-.09h6.3a.53.53 0 0 0 .27-.08 22.07 22.07 0 0 1 4.61-2.24 23.69 23.69 0 0 1 3.58-1 28.59 28.59 0 0 1 3.57-.43 29.84 29.84 0 0 1 6.81.3zM22.55 14a8.19 8.19 0 1 0 8-8.15 8.2 8.2 0 0 0-8 8.15zM10.27 5.82A8.18 8.18 0 1 0 18.46 14a8.18 8.18 0 0 0-8.19-8.18zm.41-2.14a10.43 10.43 0 0 1 9.83 8.93 10.47 10.47 0 0 1 3.27-6.17 10.34 10.34 0 0 1 6.41-2.71 23.25 23.25 0 0 0-9.12-1.9 25.15 25.15 0 0 0-10.39 1.85z"/><path class="yeux_trip_advisor" d="M30.72 8.83a5.07 5.07 0 1 1-5.08 5.07 5.06 5.06 0 0 1 5.08-5.07zM34 13.9a3.32 3.32 0 0 0-6.63 0 3.32 3.32 0 1 0 6.63 0zM10.16 8.83a5.07 5.07 0 1 1-5.09 5.07 5.06 5.06 0 0 1 5.09-5.07zm3.3 5.06a3.32 3.32 0 0 0-6.63 0 3.32 3.32 0 1 0 6.63 0z"/><path class="pupilles_trip_advisor" d="M30.72 12.22a1.68 1.68 0 1 1-1.72 1.7 1.69 1.69 0 0 1 1.72-1.7zM10.15 12.2a1.7 1.7 0 1 1 0 3.4 1.7 1.7 0 0 1 0-3.4z"/></g></g></svg>
            <p>tripadvisor <sup>&#174;</sup></p>
             
            <div class="tripadvisor_rate"><svg xmlns="http://www.w3.org/2000/svg" width="28.5" height="28.5"><path class="circle-outside" stroke="#FFF" stroke-width="3" fill="none" d="M13.511 3.715c5.403 0 9.784 4.375 9.784 9.772s-4.381 9.771-9.784 9.771c-5.402 0-9.782-4.374-9.782-9.771 0-5.397 4.38-9.772 9.782-9.772z"/><path class="inside-mark" fill-rule="evenodd" fill="#FFF" d="M13.511 8.11a5.38 5.38 0 0 1 5.385 5.377 5.381 5.381 0 0 1-5.385 5.377 5.38 5.38 0 0 1-5.383-5.377 5.38 5.38 0 0 1 5.383-5.377z"/></svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="28.5" height="28.5"><path class="circle-outside" stroke="#FFF" stroke-width="3" fill="none" d="M13.511 3.715c5.403 0 9.784 4.375 9.784 9.772s-4.381 9.771-9.784 9.771c-5.402 0-9.782-4.374-9.782-9.771 0-5.397 4.38-9.772 9.782-9.772z"/><path class="inside-mark" fill-rule="evenodd" fill="#FFF" d="M13.511 8.11a5.38 5.38 0 0 1 5.385 5.377 5.381 5.381 0 0 1-5.385 5.377 5.38 5.38 0 0 1-5.383-5.377 5.38 5.38 0 0 1 5.383-5.377z"/></svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="28.5" height="28.5"><path class="circle-outside" stroke="#FFF" stroke-width="3" fill="none" d="M13.511 3.715c5.403 0 9.784 4.375 9.784 9.772s-4.381 9.771-9.784 9.771c-5.402 0-9.782-4.374-9.782-9.771 0-5.397 4.38-9.772 9.782-9.772z"/><path class="inside-mark" fill-rule="evenodd" fill="#FFF" d="M13.511 8.11a5.38 5.38 0 0 1 5.385 5.377 5.381 5.381 0 0 1-5.385 5.377 5.38 5.38 0 0 1-5.383-5.377 5.38 5.38 0 0 1 5.383-5.377z"/></svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="28.5" height="28.5"><path class="circle-outside" stroke="#FFF" stroke-width="3" fill="none" d="M13.511 3.715c5.403 0 9.784 4.375 9.784 9.772s-4.381 9.771-9.784 9.771c-5.402 0-9.782-4.374-9.782-9.771 0-5.397 4.38-9.772 9.782-9.772z"/><path class="inside-mark" fill-rule="evenodd" fill="#FFF" d="M13.511 8.11a5.38 5.38 0 0 1 5.385 5.377 5.381 5.381 0 0 1-5.385 5.377 5.38 5.38 0 0 1-5.383-5.377 5.38 5.38 0 0 1 5.383-5.377z"/></svg>
			<svg xmlns="http://www.w3.org/2000/svg"  width="28.5" height="28.5"><path class="circle-outside" stroke="#FFF" stroke-width="3" fill="none" d="M13.473 3.715c5.403 0 9.784 4.375 9.784 9.772s-4.381 9.771-9.784 9.771c-5.403 0-9.782-4.374-9.782-9.771 0-5.397 4.379-9.772 9.782-9.772z"/><path fill-rule="evenodd" class="inside-mark" fill="#FFF" d="M13.473 18.864a5.38 5.38 0 0 1-5.383-5.377 5.38 5.38 0 0 1 5.383-5.377"/></svg>
                                                </div>
        </a>';
		*/
    $html .= '</div></section>';
	
	
	
	return $html;

} 



add_shortcode( 'depoimentos', 'depoimentos_shortcode' );




///////////////////////////////

function depo_func( $atts ) {

     extract( shortcode_atts( array(
		 'texto' => '',
		 'cidade' => '',
		 'autor' => ''
	 ),

     $atts ) );

	 $html ='<div class="swiper-slide">
                        <blockquote>
                                "'. $texto .'"
                        </blockquote>
                        <div class="author">
                            - '. $autor .',
                            <span class="adresse">'. $cidade .'</span> -
                        </div>
                    </div>';
								
								

     return $html;

    

	

	}

    add_shortcode('depo', 'depo_func');


///////////////////////////////



//////////////////////////////////////////////////////




function depoimento_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function depoimento_add_meta_box() {
	add_meta_box(
		'depoimento-depoimento',
		__( 'Informa&ccedil;&otilde;es Pessoais', 'depoimento' ),
		'depoimento_html',
		'depoimento',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'depoimento_add_meta_box' );

function depoimento_html( $post) {
	wp_nonce_field( '_depoimento_nonce', 'depoimento_nonce' ); ?>

	<h2>Preencha com os dados abaixo</h2>

	<div class="inside">
		<label for="depoimento_profisso"><strong><?php _e( 'Nome', 'depoimento' ); ?></strong></label><br>
		<input type="text" class="widefat" name="depoimento_profisso" id="depoimento_profisso" value="<?php echo depoimento_get_meta( 'depoimento_profisso' ); ?>">
	</div>

<div class="inside">
		<label for="depoimento_cidade"><strong><?php _e( 'Cidade', 'depoimento' ); ?></strong></label><br>
		<input type="text" class="widefat" name="depoimento_cidade" id="depoimento_cidade" value="<?php echo depoimento_get_meta( 'depoimento_cidade' ); ?>">
	</div>

  <div class="inside">
		<label for="depoimento_bio"><strong><?php _e( 'Depoimento', 'depoimento' ); ?></strong></label><br>
		<textarea name="depoimento_bio" id="depoimento_bio" class="widefat" cols="50" rows="5"><?php echo depoimento_get_meta( 'depoimento_bio' ); ?></textarea>
	
	</div>	<?php
}

function depoimento_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['depoimento_nonce'] ) || ! wp_verify_nonce( $_POST['depoimento_nonce'], '_depoimento_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;


	if ( isset( $_POST['depoimento_profisso'] ) )
		update_post_meta( $post_id, 'depoimento_profisso', esc_attr( $_POST['depoimento_profisso'] ) );
	if ( isset( $_POST['depoimento_cidade'] ) )
		update_post_meta( $post_id, 'depoimento_cidade', esc_attr( $_POST['depoimento_cidade'] ) );
	if ( isset( $_POST['depoimento_bio'] ) )
		update_post_meta( $post_id, 'depoimento_bio', esc_attr( $_POST['depoimento_bio'] ) );
	
}
add_action( 'save_post', 'depoimento_save' );

/*

	Usage: depoimento_get_meta( 'depoimento_profisso' )
	Usage: depoimento_get_meta( 'depoimento_bio' )
*/



///////////////////////////////////////////////////////////////////////

// Register Custom Post Type
function depoimento_post_type() {

	$labels = array(
		'name'                  => _x( 'depoimentos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'depoimento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'depoimentos', 'text_domain' ),
		'name_admin_bar'        => __( 'depoimentos', 'text_domain' ),
		'archives'              => __( 'depoimentos', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os depoimentos', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo depoimento', 'text_domain' ),
		'add_new'               => __( 'Adicionar depoimento', 'text_domain' ),
		'new_item'              => __( 'Novo depoimento', 'text_domain' ),
		'edit_item'             => __( 'Editar depoimento', 'text_domain' ),
		'update_item'           => __( 'Atualizar depoimento', 'text_domain' ),
		'view_item'             => __( 'Ver depoimento', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'N&atilde;o Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'N&atilde;o encontrado na Lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'depoimento', 'text_domain' ),
		'description'           => __( 'Lista de depoimentos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'depoimento' ),
	);
	register_post_type( 'depoimento', $args );

}
add_action( 'init', 'depoimento_post_type');
/////////////////////////////////////////////

?>