<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php do_shortcode('[bloco_hero image="'. img_url(get_the_ID()) .'" titulo="'. get_the_title() .'" subtitulo="'. get_post_meta($post->ID, 'subtitulo', true) .'"]'); ?>


<section id="content" class="container pd-t100 pd-b100 wow fadeIn">

<?php the_content(); ?>



	

<?php endwhile; endif; ?>
</section>


<?php get_footer(); ?>