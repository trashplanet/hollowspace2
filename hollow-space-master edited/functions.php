<?php
add_action( 'after_setup_theme', 'hollowspace_setup' );
function hollowspace_setup()
{
load_theme_textdomain( 'hollowspace', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'hollowspace' ) )
);
}
add_action( 'wp_enqueue_scripts', 'hollowspace_load_scripts' );
function hollowspace_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'hollowspace_enqueue_comment_reply_script' );
function hollowspace_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'hollowspace_title' );
function hollowspace_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'hollowspace_filter_wp_title' );
function hollowspace_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'hollowspace_widgets_init' );
function hollowspace_widgets_init() {
	register_sidebar( 
		array (
			'name' => __( 'Sidebar Widget Area', 'hollowspace' ),
			'id' => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) 
	);
	register_sidebar( 
		array (
			'name' => __( 'editable-area', 'hollowspace' ),
			'id' => 'editable-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h5 class="hollow-title">',
			'after_title' => '</h5>',
		) 
	);
}
function hollowspace_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'hollowspace_comments_number' );
function hollowspace_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}