<?php
register_nav_menus( array(
    'sitemap' => __( 'Sitemap', 'crr' ),
	'primary' => __( 'Primary Menu', 'crr' ),
) );

register_sidebar(array(
	'name' => __('Primary Sidebar'),
	'id' => 'primary-sidebar',
	'description' => 'Primary Sidebar',
	'before_widget' => '<div class="widget-bg">',
	'after_widget' => '</div>',
	'before_title' => '<h2 >',
	'after_title' => '</h2>',
	
));

register_sidebar(array(
	'name' => __('Secondary Sidebar'),
	'id' => 'secondary-sidebar',
	'description' => 'Secondary Sidebar',
	'before_widget' => '<div class="widget-bg">',
	'after_widget' => '</div>',

));

function isehc_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'isehc_post_thumbnails' );

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/**
 * Customizer additions.
 */
 
require get_template_directory() . '/inc/customizer.php';









