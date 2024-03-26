<?php

function lista_func() {
	return '<svg xmlns="http://www.w3.org/2000/svg" class="liste-svg" width="27" height="14" viewBox="0 0 26.5 14"><g data-name="Calque 2"><g data-name="Calque 1"><path d="M6.5 6.5h20v1h-20z" fill-rule="evenodd"/><path d="M6.94 14A7 7 0 1 1 14 7.06 7 7 0 0 1 6.94 14zm.11-13a6 6 0 1 0 6 6.05 6 6 0 0 0-6-6.05z" opacity=".3"/></g></g></svg>';
}

add_shortcode('lista', 'lista_func');     

?>