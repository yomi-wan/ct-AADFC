<?php 

   
//this function will add all of your styles and scripts, everything from Google Fonts to resets.
function aadfc_enqueue_styles() {
	//reset
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css',false,'1.0','all');

  //bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,'1.0','all');
  //styles
  wp_enqueue_style('style', get_stylesheet_uri());
	
  //scripts
  	//bootstrap script
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets//js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
   wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'aadfc_enqueue_styles');

  //theme support function 
  function theme_setup(){
	  // automatic feed links
	add_theme_support('automatic-feed-links');

	// title tag
	add_theme_support('title_tag');

	// post formats
	$post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
	add_theme_support('post-formats', $post_formats);

	// thumbnails
	add_theme_support('post-thumbnails');

	// theme colours
// 	add_theme_support( 'editor-color-palette',
// array( 'name' => 'purple', 'color' => '#8C1B64' ),
// array( 'name' => 'red', 'color' => '#E92640' ),
// array( 'name' => 'orange', 'color' => '#FF7549' ),
// array( 'name' => 'yellow', 'color' => '#F2B705' ),
// array( 'name' => 'navy', 'color' => '#241E46' ),
// array( 'name' => 'white', 'color' => '#fff' ),
// array( 'name' => 'black', 'color' => '#0D0D0D' ),
// );

add_theme_support( 'editor-color-palette', array(
	array(
		'name' => __( 'strong magenta', 'aadfc' ),
		'slug' => 'strong-magenta',
		'color' => '#8C1B64',
	),
	array(
		'name' => __( 'red', 'aadfc' ),
		'slug' => 'red',
		'color' => '#E92640',
	),
	array(
		'name' => __( 'orange', 'aadfc' ),
		'slug' => 'orange',
		'color' => '#FF7549',
	),
	array(
		'name' => __( 'yellow', 'aadfc' ),
		'slug' => 'yellow',
		'color' => '#F2B705',
	),
) );
add_theme_support( 'wp-block-styles' );

	// html5 support
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

	// refresh widgets
	add_theme_support('customize-selective-refresh-widgets');

	// custom header
	$header_defaults = array(
		'default-image' => '',
		'width'	=> 300,
		'height' => 60,
		'flex-height' => true,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'uploads' => true,
	);

}
add_action('after_setup_theme', "theme_setup");


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
	'height' => 80,
	'width' => 80,
	'flex-height' => true,
	'flex-width' => true,
	'header-text' => array('site-title', 'site-description'),
));

// Register widget 
$aadfc_includes = array(
  '/widgets.php',                         
);
foreach ( $aadfc_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

