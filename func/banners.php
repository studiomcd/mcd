<?php

//////////////////////////////Banners




function banner_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function banner_add_meta_box() {
	add_meta_box(
		'banner-banner',
		__( ' Banners ', 'banner' ),
		'banner_html',
		'banner',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'banner_add_meta_box' );

function banner_html( $post) {
	wp_nonce_field( '_banner_nonce', 'banner_nonce' ); ?>

	<h2>Preencha com os dados abaixo</h2>
	
	<p>
		<label for="banner_imagem"><?php _e( 'Imagem Grande', 'banner' ); ?></label>
		 
</p>
		 
		<textarea name="banner_imagem" id="banner_imagem" rows="10" cols="80"  ><?php echo banner_get_meta( 'banner_imagem' ); ?></textarea>
	  
	</p>

<p>
		<label for="banner_txt_1"><?php _e( 'Imagem Tablet', 'banner' ); ?></label><br>
		<textarea name="banner_txt_1" id="banner_txt_1" rows="10" cols="80"  ><?php echo banner_get_meta( 'banner_txt_1' ); ?></textarea>
	
	</p>
	
	<p>
		<label for="banner_txt_2"><?php _e( 'Imagem Mobile', 'banner' ); ?></label><br>
		<textarea name="banner_txt_2" id="banner_txt_2" rows="10" cols="80"  ><?php echo banner_get_meta( 'banner_txt_2' ); ?></textarea>
	
	</p>
    
    <p>
		<label for="banner_txt_3"><?php _e( 'Link', 'banner' ); ?></label><br>
		<textarea name="banner_txt_3" id="banner_txt_3" rows="10" cols="80"  ><?php echo banner_get_meta( 'banner_txt_3' ); ?></textarea>
	
	</p>
    
 
    
	
	<?php
}

function banner_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['banner_nonce'] ) || ! wp_verify_nonce( $_POST['banner_nonce'], '_banner_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

  if ( isset( $_POST['banner_imagem'] ) )
		update_post_meta( $post_id, 'banner_imagem', esc_attr( $_POST['banner_imagem'] ) );
	if ( isset( $_POST['banner_txt_1'] ) )
		update_post_meta( $post_id, 'banner_txt_1', esc_attr( $_POST['banner_txt_1'] ) );
	if ( isset( $_POST['banner_txt_2'] ) )
		update_post_meta( $post_id, 'banner_txt_2', esc_attr( $_POST['banner_txt_2'] ) );
	if ( isset( $_POST['banner_txt_3'] ) )
		update_post_meta( $post_id, 'banner_txt_3', esc_attr( $_POST['banner_txt_3'] ) );
	
}
add_action( 'save_post', 'banner_save' );

/*
  Usage: banner_get_meta( 'banner_imagem' )
	Usage: banner_get_meta( 'banner_txt_1' )
	Usage: banner_get_meta( 'banner_txt_2' )
	Usage: banner_get_meta( 'banner_txt_3' )
*/



///////////////////////////////////////////////////////////////////////

// Register Custom Post Type
function banner_post_type() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banners', 'text_domain' ),
		'name_admin_bar'        => __( 'Banners', 'text_domain' ),
		'archives'              => __( 'Banners', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os Banners', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo Banner', 'text_domain' ),
		'add_new'               => __( 'Adicionar Banner', 'text_domain' ),
		'new_item'              => __( 'Novo Banner', 'text_domain' ),
		'edit_item'             => __( 'Editar Banner', 'text_domain' ),
		'update_item'           => __( 'Atualizar Banner', 'text_domain' ),
		'view_item'             => __( 'Ver Banner', 'text_domain' ),
		'search_items'          => __( 'Procurar Banner', 'text_domain' ),
		'not_found'             => __( 'N&atilde;o Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'N&atilde;o encontrado na Lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Banners', 'text_domain' ),
		'description'           => __( 'Lista de Banners', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'banner' ),
	);
	register_post_type( 'banner', $args );

}
add_action( 'init', 'banner_post_type');



?>