<?php
// Remove Formulário de Comentários no Front-end
function cwp_desativa_comentarios_frontend() {
return false;
}
add_filter('comments_open', 'cwp_desativa_comentarios_frontend', 20, 2);
add_filter('pings_open', 'cwp_desativa_comentarios_frontend', 20, 2);

// Esconde Comentários Existentes
function cwp_esconde_comentarios_existentes($comments) {
$comments = array();
return $comments;
}
add_filter('comments_array', 'cwp_esconde_comentarios_existentes', 10, 2);


// Desativa o menu Comentários do Painel Administrativo
function cwp_desativa_comentarios_admin_menu() {
remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'cwp_desativa_comentarios_admin_menu');

?>