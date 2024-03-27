<?php get_template_part('_solicite-orcamento'); ?>
<footer class="animados">
  <h2 class="csr.mcd">Entre em contato</h2>

  <div class="contatos">
  <?php get_template_part('_redes_sociais'); ?>
  </div>

  <div class="contatos">
    <h3>Escritório central</h3>
    <?php
    if(get_option('telefone')) echo '<a href="tel:'. limpar_contatos(get_option('telefone')) .'">'. str_replace('(47)', '<em>(47)</em>', get_option('telefone')) .'</a>';
    if(get_option('celular')) echo '<a href="https://wa.me/55'. limpar_contatos(get_option('celular')) .'&text=">'. str_replace('(47)', '<em>(47)</em>', get_option('celular')) .'</a>';
    if(get_option('email')) echo '<a style="line-height:1.2" href="mailto:'. get_option('email') .'" class="email">'. str_replace('@', '<br>@', get_option('email')) .'</a>';
    ?>
    <div class="endereco">
      <span><?php echo get_option('rua') .', '. get_option('numero') . ' - ' . get_option('bairro'); ?></span>
      <?php if(get_option('complemento')){ echo '<span>'. get_option('complemento') . '</span>'; } ?>
      <span><?php echo get_option('cidade'); ?> - <?php echo get_option('estado'); ?></span>
      <span>CEP <?php echo get_option('cep'); ?></span>
    </div>
  </div>

  <div class="midias-whatsapp">
    <?php get_template_part('_redes_sociais'); ?>
  </div>
</footer>


<section class="container-fluid bg-nig" style="padding-top: 15px;"><div class="container"><div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10">
<p class="cinza">&copy; <?php echo esc_html( date_i18n( __( 'Y', 'mcd' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2">
	<?php get_template_part('func/mcd-studio'); ?>
	</div>
</div></div></section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 


<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

<script src="<?php bloginfo('template_url'); ?>/js/vivus.js"></script>
<script>mcdstudio = new Vivus('mcd-studio', {type: 'scenario-sync', duration: 20, forceRender: false});</script>


<?php get_template_part('func/google_analytics'); ?>

<?php wp_footer(); ?>

</body>
</html>