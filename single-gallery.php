<?php 
/**
 * 
 *
 * @package AADFC
 * 
 */

get_header(); ?>


    <?php while ( have_posts() ) : the_post(); ?>
        <div class="divider"><img src="<?php bloginfo('get_template_directory_uri(  )'); ?>" alt="" /></div>
        <?php the_title('<h2 class="gallery-title">', '</h2>'); ?>

        <?php the_content(); ?>
    
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
