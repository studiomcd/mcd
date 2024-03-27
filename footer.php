<?php get_template_part('_solicite-orcamento'); ?>

<footer class="container-fluid">
   <div class="container">
       <div class="d-flex justify-content-end"><?php get_template_part('_redes_sociais'); ?></div>
   </div>

  <div class="container">
    <?php
    if(get_option('telefone')) echo '<a href="tel:'. limpar_contatos(get_option('telefone')) .'">'. get_option('telefone') .'</a>';
    if(get_option('celular')) echo '<a href="https://wa.me/55'. limpar_contatos(get_option('celular')) .'&text=">'. get_option('celular') .'</a>';
    if(get_option('email')) echo '<a style="line-height:1.2" href="mailto:'. get_option('email') .'" class="email">'. get_option('email') .'</a>';
    ?>
   
      <?php
        if(get_option('rua')){
         echo get_option('rua') .', '. get_option('numero') . ' - ' . get_option('bairro');
         echo get_option('complemento'); 
        } 
        
        if(get_option('cidade')){ 
         echo get_option('cidade'). " - ". get_option('estado'); 
        }
        
        if(get_option('cep')){ 
         echo "CEP". get_option('cep'); 
        }
        
        ?>
    
  </div>

  <div class="container">
    <?php get_template_part('_redes_sociais'); ?>
  </div>
</footer>


<section class="container-fluid">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10">
            <p>&copy; <?php echo esc_html( date_i18n( __( 'Y', 'mcd' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
            <?php get_template_part('func/mcd-studio'); ?>
            </div>
        </div>
    </div>
</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="<?php bloginfo('template_url'); ?>/js/vivus.js"></script>
<script>mcdstudio = new Vivus('mcd-studio', {type: 'scenario-sync', duration: 20, forceRender: false});</script>
<?php get_template_part('func/whatsapp'); ?>
<?php get_template_part('func/google_analytics'); ?>
<?php wp_footer(); ?>

</body>
</html>