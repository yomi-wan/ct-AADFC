<?php 
/**
 * Template for single custom post type Gallery
 *
 * @package AADFC
 * 
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php //echo get_post_meta($post->ID, 'name', true); ?>

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="divider"><img src="<?php bloginfo('get_template_directory_uri(  )'); ?>" alt="" /></div>
    <div class="single-gallery-page-title">
        <?php the_title('<h2 class="container gallery-title">', '</h2>');  ?>
        
        <!-- go back to previous page -->
        <a class="back-to-prev" type="button" onclick="history.back();">Back</a>
       
    </div>
    
    <div class="container">
        <?php the_content(); ?>
    </div>

    <!-- ACF Fields -->
	<?php $event_date = get_field('date');?>

    <!-- ACF is using a group, so the group must be declared as a variable to display content -->
	<?php if($event_date) : ?>	
		<!-- display date -->	
        <p><?php echo  $event_date['date']; ?></p>
        
	<?php endif; ?>
    
    <!-- end of ACF block -->

	
<?php endwhile; // end of the loop. ?>
  
<?php get_footer(); ?>
