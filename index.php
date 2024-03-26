<?php get_header(); ?>
<section id="content" role="main" class="container mg-t50 mg-b100">
	

	
	<div class="row">
    <div class="col-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
		
    </div>
   
		</div>
		

	
<?php get_template_part( 'pagination'); ?>	
	
</section>

<?php get_footer(); ?>