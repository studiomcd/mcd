<?php

function reward_func() {
	return '<div class="logo_renard"><img src="https://institutoarkeos.com.br/wp-content/themes/mcd/img/logo-form.png" alt="Instituto Arkeos"></div>';
}

add_shortcode('reward', 'reward_func');     

?>