<article id="post-<?php the_ID(); ?>" class="border-bottom mg-t50 mg-b50 wow fadeInDown">
<div class="row">
	<div class="col-6 wow fadeInLeft" data-wow-delay=".5s"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); } ?></div>
	<div class="col-6 bg-light"><header>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><h3 class="underline dourado mg-b50"><?php the_title(); ?></h3></a>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>

<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="mg-t50 mg-b100 btn bg-dourado light">Ler mais</a></div>
	</div>

	
</article>