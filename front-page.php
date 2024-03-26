<?php get_header(); ?>

<?php get_template_part('_home-banner'); ?>
<?php get_template_part('_16-anos'); ?>
<?php get_template_part('_carretas-nauticas'); ?>

<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //the_content(); ?>

<?php //endwhile; endif; ?>

<?php
/*
            $my_postid = 15;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
			*/
            ?>

<?php get_footer(); ?>