<?php
add_action( 'after_setup_theme', 'mcd_setup' );
function mcd_setup() {
load_theme_textdomain( 'mcd', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'mcd' ),
                           'social-menu' => esc_html__( 'Social Menu', 'mcd' ),
						   'footer-menu' => esc_html__( 'Footer Menu', 'mcd' )) );
}
add_action( 'wp_enqueue_scripts', 'mcd_load_scripts' );
function mcd_load_scripts() {
wp_enqueue_style( 'mcd-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'mcd_footer_scripts' );
function mcd_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'mcd_document_title_separator' );
function mcd_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'mcd_title' );
function mcd_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'mcd_read_more_link' );
function mcd_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'mcd_excerpt_read_more_link' );
function mcd_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'mcd_image_insert_override' );
function mcd_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'mcd_widgets_init' );
function mcd_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'mcd' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'mcd_pingback_header' );
function mcd_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'mcd_enqueue_comment_reply_script' );
function mcd_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function mcd_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'mcd_comment_count', 0 );
function mcd_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// If you encounter errors with the above code use a check like this to return clean errors to help diagnose the problem.

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

//////////////////////////////////////////////////////////////

require_once('func/banners.php');
require_once('func/bloco_dark.php');
require_once('func/bloco_direita.php');
require_once('func/bloco_esquerda.php');
require_once('func/bloco_hero.php');
require_once('func/btn.php');
require_once('func/btn_calendar.php');
require_once('func/btn_seta.php');
require_once('func/btn_bio.php');
//require_once('func/depoimentos.php');
//require_once('func/destaques.php');
require_once('func/galeria.php');
require_once('func/img_thumb.php');
require_once('func/img_url.php');
require_once('func/mapa.php');
require_once('func/pagina.php');
require_once('func/pagination.php');
require_once('func/post_format.php');
require_once('func/separador.php');
require_once('func/inicio.php');
require_once('func/final.php');
require_once('func/vinheta.php');
require_once('func/lista.php');
require_once('func/tresPontinhos.php');
require_once('func/reward.php');
require_once('func/veja_tambem.php');
require_once('func/curso.php');
require_once('func/ico_facebook.php');
require_once('func/remove_comentarios.php');
require_once('func/dados_site.php');
require_once('func/post_metas.php');