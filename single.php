<?php get_header(); ?>
<section id="content" role="main" class="container mg-t50 mg-b100">
	

	
	<div class="row">
    <div class="col-12">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="border-bottom mg-t50 mg-b100 wow fadeInDown">
	
<div class="row">
	<header>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><h3 class="underline dourado mg-b50"><?php the_title(); ?></h3></a>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>
	
	<div class="col-12 wow fadeInLeft" data-wow-delay=".5s"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); } ?></div>
	<div class="col-12 bg-light">

<?php the_content(); ?>
	</div>
	</div>

	
</article>
		
		
		
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>

		 </div>
   
		</div>
		
<div class="row">
    <div class="col-12">
<?php get_template_part( 'nav', 'below' ); ?>
		</div></div>
</section>

		
		
<?php get_footer(); ?>