<?php 
/**
 * 
 *
 * @package AADFC
 * 
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php //echo get_post_meta($post->ID, 'name', true); ?>

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="divider"><img src="<?php bloginfo('get_template_directory_uri(  )'); ?>" alt="" /></div>
    <?php the_title('<h1 class="event-title">', '</h1>'); ?>
    <?php the_content(); ?>

    <!-- ACF Fields -->
	<?php $card_footer = get_field('card_footer');?>

    <!-- ACF is using a group, so the group must be declared as a varible to display content -->
	<?php if($card_footer) : ?>	
		<!-- display author and date -->	
        <p><?php echo  $card_footer['author']; ?></p>
        <p><?php echo  $card_footer['date']; ?></p>
        <!-- display category as the acutual word, not the id# -->
		<?php
		   $term = $card_footer['taxonomy']; 
			if( $term ) {
				foreach($term as $t) {
					$t = get_term($t);
					echo $t->name; // this can be changed to slug if necessary
				}
			}
		?>
	<?php endif; ?>
    <!-- end of ACF block -->

	
<?php endwhile; // end of the loop. ?>
  
<?php get_footer(); ?>
