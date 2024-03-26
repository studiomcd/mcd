<?php

function titulo($id) {

	$titulo = get_post_meta($id, 'titulo', true);

 return $titulo;
	
}


////////


function subtitulo($id) {

	$subtitulo = get_post_meta($id, 'subtitulo', true);

 return $subtitulo;
	
}


////////


function descricao($id) {

	$descricao = get_post_meta($id, 'descricao', true);

 return $descricao;
	
}


////////


?>