<?php 

  //adds support to generate a title tag base on your pages and posts. 
function theme_setup(){
       // wordpress functionality
       add_theme_support('title_tag');
   }
   add_action('after_setup_theme', "theme_setup");

   
//this function will add all of your styles and scripts, everything from Google Fonts to resets.
function aadfc_enqueue_styles() {

  //bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,'1.0','all');
  //styles
  wp_enqueue_style('style', get_stylesheet_uri());
	
  //scripts
  	//bootstrap script
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets//js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
   //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'aadfc_enqueue_styles');

// wordpress menu
function register_menus() { 
  register_nav_menu('main-menu',__('Main Menu')); 
} 
add_action('init', 'register_menus');

//adding the nav walker
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// custom logo
add_theme_support('custom-logo', array(
	'height' => 100,
	'width' => 400,
	'flex-height' => true,
	'flex-width' => true,
	'header-text' => array('site-title', 'site-description'),
));

// Register widget 
$aadfc_includes = array(
  '/widgets.php',                         
);
    //Register Custom Post type
    function create_post_type_events(){
		// creates label names for the post type in the dashboard the post panel and in the toolbar.
			$labels = array(
				'name' => __('Events'),
				'singular_name' => __('Event'),
				'add_new' => 'New Event',
				'add_new_item'=> 'Add New Event',
				'edit_item' => 'Edit Event',
				'featured_image'        => _x( 'Event Post Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
				'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
				'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
				'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
	
			);
			// creates the post functionality that you want for a full listing
			$args = array(
				'labels' => $labels,
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'events'),
				'menu_position' => 20,
				'menu_icon' => 'dashicons-buddicons-groups',
				'capability_type'    => 'page',
				'taxonomies' => array('category', 'post_tag'),
				'supports'=> array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
			);
	
			register_post_type('events', $args  );
		}
		// Hooking up our function to theme setup
		add_action('init', 'create_post_type_events');

foreach ( $aadfc_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}