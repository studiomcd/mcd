<?php

function add_post_formats() {
    add_theme_support( 'post-formats', array('aside', 'gallery','link','image','quote','status','video','audio','chat') );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );


?>