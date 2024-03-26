<?php

//////////////////////////////Destaques




function destaque_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function destaque_add_meta_box() {
	add_meta_box(
		'destaque-destaque',
		__( ' Destaques ', 'destaque' ),
		'destaque_html',
		'destaque',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'destaque_add_meta_box' );

function destaque_html( $post) {
	wp_nonce_field( '_destaque_nonce', 'destaque_nonce' ); ?>

	<h2>Preencha com os dados abaixo</h2>
	
	<p>
		<label for="destaque_imagem"><?php _e( 'Imagem Grande - 1200x800', 'destaque' ); ?></label><br>
		<textarea name="destaque_imagem" id="destaque_imagem" rows="10" cols="80"  ><?php echo destaque_get_meta( 'destaque_imagem' ); ?></textarea>
	  
	</p>
<p>
		<label for="destaque_detalhes"><?php _e( 'Detalhes', 'destaque' ); ?></label><br>
		<textarea name="destaque_detalhes" id="destaque_detalhes" rows="10" cols="80"  ><?php echo destaque_get_meta( 'destaque_detalhes' ); ?></textarea>
	  
	</p>


<p>
		<label for="destaque_txt_1"><?php _e( 'Imagem Tablet - 900x600', 'destaque' ); ?></label><br>
		<textarea name="destaque_txt_1" id="destaque_txt_1" rows="10" cols="80"  ><?php echo destaque_get_meta( 'destaque_txt_1' ); ?></textarea>
	
	</p>
	
	<p>
		<label for="destaque_txt_2"><?php _e( 'Imagem Mobile - 768x512', 'destaque' ); ?></label><br>
		<textarea name="destaque_txt_2" id="destaque_txt_2" rows="10" cols="80"  ><?php echo destaque_get_meta( 'destaque_txt_2' ); ?></textarea>
	
	</p>
    
    <p>
		<label for="destaque_txt_3"><?php _e( 'Link', 'destaque' ); ?></label><br>
		<textarea name="destaque_txt_3" id="destaque_txt_3" rows="10" cols="80"  ><?php echo destaque_get_meta( 'destaque_txt_3' ); ?></textarea>
	
	</p>
    
 
    
	
	<?php
}

function destaque_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['destaque_nonce'] ) || ! wp_verify_nonce( $_POST['destaque_nonce'], '_destaque_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

  if ( isset( $_POST['destaque_imagem'] ) )
		update_post_meta( $post_id, 'destaque_imagem', esc_attr( $_POST['destaque_imagem'] ) );
	if ( isset( $_POST['destaque_imagem'] ) )
		update_post_meta( $post_id, 'destaque_detalhes', esc_attr( $_POST['destaque_detalhes'] ) );
	if ( isset( $_POST['destaque_txt_1'] ) )
		update_post_meta( $post_id, 'destaque_txt_1', esc_attr( $_POST['destaque_txt_1'] ) );
	if ( isset( $_POST['destaque_txt_2'] ) )
		update_post_meta( $post_id, 'destaque_txt_2', esc_attr( $_POST['destaque_txt_2'] ) );
	if ( isset( $_POST['destaque_txt_3'] ) )
		update_post_meta( $post_id, 'destaque_txt_3', esc_attr( $_POST['destaque_txt_3'] ) );
	
}
add_action( 'save_post', 'destaque_save' );

/*
  Usage: destaque_get_meta( 'destaque_imagem' )
	Usage: destaque_get_meta( 'destaque_txt_1' )
	Usage: destaque_get_meta( 'destaque_txt_2' )
	Usage: destaque_get_meta( 'destaque_txt_3' )
*/



///////////////////////////////////////////////////////////////////////

// Register Custom Post Type
function destaque_post_type() {

	$labels = array(
		'name'                  => _x( 'destaques', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'destaque', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'destaques', 'text_domain' ),
		'name_admin_bar'        => __( 'destaques', 'text_domain' ),
		'archives'              => __( 'destaques', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os destaques', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo destaque', 'text_domain' ),
		'add_new'               => __( 'Adicionar destaque', 'text_domain' ),
		'new_item'              => __( 'Novo destaque', 'text_domain' ),
		'edit_item'             => __( 'Editar destaque', 'text_domain' ),
		'update_item'           => __( 'Atualizar destaque', 'text_domain' ),
		'view_item'             => __( 'Ver destaque', 'text_domain' ),
		'search_items'          => __( 'Procurar destaque', 'text_domain' ),
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
		'label'                 => __( 'destaques', 'text_domain' ),
		'description'           => __( 'Lista de destaques', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-star-filled',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'destaque' ),
	);
	register_post_type( 'destaque', $args );

}
add_action( 'init', 'destaque_post_type');

////////////////////////////////////////////////////////////////////// destaques


?>