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
   //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
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
foreach ( $aadfc_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

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
				'supports'=> array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
			);
	
			register_post_type('events', $args  );
		}
		// post pagination
		function page_pagination_nav(){
			global $wp_query;

			$total_pages = $wp_query->max_num_pages;

			if($total_pages > 1){
				$current_page = max(1, get_query_var('paged'));
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'format' => '/page/%#%',
					'current' => $current_page,
					'total' => $total_pages,
				));
			}
		}
		function pagination_nav(){
			global $wp_query;
			?>
<nav class="pagination" role="navigation">
    <div class="previous-post-nav"><?php previous_post_link( '%link', '&larr; Older posts');?></div>
    <div class="next-post-nav"><?php next_post_link( '%link', 'Newer posts &rarr;');?></div>
</nav>
<?php
		}
		add_filter( 'pre_get_posts', 'slug_cpt_category_archives');
		function slug_cpt_category_archives($query){
			if ($query->is_category() && $query->is_main_query()){
				$query->set('post_type',
					array(
						'post', 
						'events', 
						'gallery'
					)
				);
			}
		}
		return $query;

// Hooking up our function to theme setup
add_action('init', 'create_post_type_events');