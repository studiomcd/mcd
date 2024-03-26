<?php

function register_dados_site(){

	register_setting( 'grupo-dados', 'logo_link');
	register_setting( 'grupo-dados', 'logo_alter_link');
	register_setting( 'grupo-dados', 'cor_1');
	register_setting( 'grupo-dados', 'cor_2');
	register_setting( 'grupo-dados', 'cor_3');
	register_setting( 'grupo-dados', 'cor_4');
	register_setting( 'grupo-dados', 'facebook_link');
	register_setting( 'grupo-dados', 'instagram_link');
	register_setting( 'grupo-dados', 'youtube_link');
	register_setting( 'grupo-dados', 'linkedin_link');
	register_setting( 'grupo-dados', 'tiktok_link');
	register_setting( 'grupo-dados', 'maps_link');

	register_setting( 'grupo-dados', 'email');
	register_setting( 'grupo-dados', 'telefone');
	register_setting( 'grupo-dados', 'celular');
	register_setting( 'grupo-dados', 'rua');
	register_setting( 'grupo-dados', 'numero');
	register_setting( 'grupo-dados', 'complemento');
	register_setting( 'grupo-dados', 'bairro');
	register_setting( 'grupo-dados', 'cidade');
	register_setting( 'grupo-dados', 'estado');
	register_setting( 'grupo-dados', 'cep');

	register_setting( 'grupo-dados', 'vendas-email');
	register_setting( 'grupo-dados', 'vendas-telefone');
	register_setting( 'grupo-dados', 'vendas-celular');
	register_setting( 'grupo-dados', 'vendas-rua');
	register_setting( 'grupo-dados', 'vendas-numero');
	register_setting( 'grupo-dados', 'vendas-complemento');
	register_setting( 'grupo-dados', 'vendas-bairro');
	register_setting( 'grupo-dados', 'vendas-cidade');
	register_setting( 'grupo-dados', 'vendas-estado');
	register_setting( 'grupo-dados', 'vendas-cep');

	register_setting( 'grupo-dados', 'descricao' );
	register_setting( 'grupo-dados', 'keywords' );
}
function dados_site_page(){
	?>
	<div class="wrap">
	<form method="post" action="options.php">
		<?php
		settings_fields( 'grupo-dados');
		do_settings_sections( 'grupo-dados');
		?>


		<h1>Dados gerais do site</h1>

		<hr>
	 <table class="form-table">
		<tr valign="top"><td>
		 
		 <h2>Institucional</h2>
			</td></tr>
		<tr valign="top">
      <th scope="row">Logo</th>
      <td><input type="text" style="width: 100%" name="logo_link" value="<?php echo esc_attr( get_option('logo_link') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Logo Alternativo</th>
      <td><input type="text" style="width: 100%" name="logo_alter_link" value="<?php echo esc_attr( get_option('logo_alter_link') ); ?>" /></td>
      </tr>
		<tr valign="top"><td>
		<h2>Cores</h2>
    </td></tr>
		<tr valign="top">
      <th scope="row">Cor 1</th>
      <td><input type="text" style="width: 100%" name="cor_1" value="<?php echo esc_attr( get_option('cor_1') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Cor 2</th>
      <td><input type="text" style="width: 100%" name="cor_2" value="<?php echo esc_attr( get_option('cor_2') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Cor 3</th>
      <td><input type="text" style="width: 100%" name="cor_3" value="<?php echo esc_attr( get_option('cor_3') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Cor 4</th>
      <td><input type="text" style="width: 100%" name="cor_4" value="<?php echo esc_attr( get_option('cor_4') ); ?>" /></td>
      </tr>	
		
		 <tr valign="top"><td>
		<h2>Mídias sociais</h2>
		 </td></tr>
      <tr valign="top">
      <th scope="row">Facebook</th>
      <td><input type="text" style="width: 100%" name="facebook_link" value="<?php echo esc_attr( get_option('facebook_link') ); ?>" /></td>
      </tr>

      <tr valign="top">
      <th scope="row">Instagram</th>
      <td><input type="text" style="width: 100%" name="instagram_link" value="<?php echo esc_attr( get_option('instagram_link') ); ?>" /></td>
      </tr>

      <tr valign="top">
      <th scope="row">Youtube</th>
      <td><input type="text" style="width: 100%" name="youtube_link" value="<?php echo esc_attr( get_option('youtube_link') ); ?>" /></td>
      </tr>

		<tr valign="top">
      <th scope="row">Linkedin</th>
      <td><input type="text" style="width: 100%" name="linkedin_link" value="<?php echo esc_attr( get_option('linkedin_link') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Tik Tok</th>
      <td><input type="text" style="width: 100%" name="tiktok_link" value="<?php echo esc_attr( get_option('tiktok_link') ); ?>" /></td>
      </tr>
		
		<tr valign="top">
      <th scope="row">Google Maps</th>
      <td><input type="text" style="width: 100%" name="maps_link" value="<?php echo esc_attr( get_option('maps_link') ); ?>" /></td>
      </tr>
		
		</table>

		<hr>
		<table class="form-table">
			<tr>
				<td>
					<h2>Filial</h2>
			    <table class="form-table">

			      <tr valign="top">
			      <th scope="row">E-mail</th>
			      <td><input type="text" style="width: 100%" name="vendas-email" value="<?php echo esc_attr( get_option('vendas-email') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Telefone principal</th>
			      <td><input type="text" style="width: 100%" name="vendas-telefone" value="<?php echo esc_attr( get_option('vendas-telefone') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Celular/whatsapp principal</th>
			      <td><input type="text" style="width: 100%" name="vendas-celular" value="<?php echo esc_attr( get_option('vendas-celular') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Rua</th>
			      <td><input type="text" style="width: 100%" name="vendas-rua" value="<?php echo esc_attr( get_option('vendas-rua') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Número</th>
			      <td><input type="text" style="width: 100%" name="vendas-numero" value="<?php echo esc_attr( get_option('vendas-numero') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Complemento</th>
			      <td><input type="text" style="width: 100%" name="vendas-complemento" value="<?php echo esc_attr( get_option('vendas-complemento') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Bairro</th>
			      <td><input type="text" style="width: 100%" name="vendas-bairro" value="<?php echo esc_attr( get_option('vendas-bairro') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Cidade</th>
			      <td><input type="text" style="width: 100%" name="vendas-cidade" value="<?php echo esc_attr( get_option('vendas-cidade') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Estado</th>
			      <td><input type="text" style="width: 100%" name="vendas-estado" value="<?php echo esc_attr( get_option('vendas-estado') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">CEP</th>
			      <td><input type="text" style="width: 100%" name="vendas-cep" value="<?php echo esc_attr( get_option('vendas-cep') ); ?>" /></td>
			      </tr>
			    </table>
				</td>
				<td>
					<h2>Matriz</h2>
			    <table class="form-table">

			      <tr valign="top">
			      <th scope="row">E-mail</th>
			      <td><input type="text" style="width: 100%" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Telefone principal</th>
			      <td><input type="text" style="width: 100%" name="telefone" value="<?php echo esc_attr( get_option('telefone') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Celular/whatsapp principal</th>
			      <td><input type="text" style="width: 100%" name="celular" value="<?php echo esc_attr( get_option('celular') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Rua</th>
			      <td><input type="text" style="width: 100%" name="rua" value="<?php echo esc_attr( get_option('rua') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Número</th>
			      <td><input type="text" style="width: 100%" name="numero" value="<?php echo esc_attr( get_option('numero') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Complemento</th>
			      <td><input type="text" style="width: 100%" name="complemento" value="<?php echo esc_attr( get_option('complemento') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Bairro</th>
			      <td><input type="text" style="width: 100%" name="bairro" value="<?php echo esc_attr( get_option('bairro') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Cidade</th>
			      <td><input type="text" style="width: 100%" name="cidade" value="<?php echo esc_attr( get_option('cidade') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">Estado</th>
			      <td><input type="text" style="width: 100%" name="estado" value="<?php echo esc_attr( get_option('estado') ); ?>" /></td>
			      </tr>

			      <tr valign="top">
			      <th scope="row">CEP</th>
			      <td><input type="text" style="width: 100%" name="cep" value="<?php echo esc_attr( get_option('cep') ); ?>" /></td>
			      </tr>
			    </table>
				</td>
			</tr>
		</table>

		<hr>
		<h1>Cabeçalhos do site (Ferramentas de busca)</h1>

		<table class="form-table">
			<tr>
				<td>
					<table class="form-table">
						<tr valign="top">
							<th scope="row">Meta description</th>
							<td><textarea style="width: 100%; height: 200px;" name="descricao"><?php echo esc_attr( get_option('descricao') ); ?></textarea></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="form-table">
						<tr valign="top">
							<th scope="row">Meta Keywords (separados por vírgula)</th>
							<td><textarea style="width: 100%; height: 200px;" name="keywords"><?php echo esc_attr( get_option('keywords') ); ?></textarea></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

    <?php submit_button(); ?>
	</form>
	</div>
	<?php
}
function dados_site(){
	add_menu_page(
		'Dados gerais',
		'Dados gerais',
		'administrator',
		'contatos',
		'dados_site_page',
		'dashicons-admin-generic',
		10
	);
	add_action( 'admin_init', 'register_dados_site');
}

add_action('admin_menu', 'dados_site', 998);


function limpar_contatos($texto){
	$remover = array(
		'(',
		')',
		'-',
		'+',
		' ',
		'https://www.facebook.com/',
		'https://www.instagram.com/',
		'/'
	);

	return str_replace($remover, '', $texto);
}
function limpar_texto($str){
	$str = preg_replace('/[áàãâä]/ui', 'a', $str);
  $str = preg_replace('/[éèêë]/ui', 'e', $str);
  $str = preg_replace('/[íìîï]/ui', 'i', $str);
  $str = preg_replace('/[óòõôö]/ui', 'o', $str);
  $str = preg_replace('/[úùûü]/ui', 'u', $str);
  $str = preg_replace('/[ç]/ui', 'c', $str);
  $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
  $str = preg_replace('/[^a-z0-9]/i', '_', $str);
  $str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)
  return $str;
}

?>
