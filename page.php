<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="jumbotron jumbotron-fluid capa" style="background-image: url(<?php echo img_url(get_the_ID()); ?>);">
  <div class="container text-center mg-t100 mg-b100">
    <h1 class="light"><?php the_title(); ?></h1>
    <p class="light"><?php echo get_post_meta($post->ID, 'subtitulo', true); ?></p>
  </div>
</div>

<section id="content" role="main" class="container pd-t100 pd-b100 wow fadeIn">

<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>


	

<?php endwhile; endif; ?>
</section>


<?php get_footer(); ?>