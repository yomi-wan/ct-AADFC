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
    <div class="container">
        <?php the_title('<h2 class="entry-title gallery-title">', '</h2>');  ?>

        <div class="d-flex justify-content-between">
            <!-- ACF Fields -->
            <p class="event-date"><?php the_field('event_date');?></p>

            <!-- end of ACF block -->
            <!-- go back to previous page -->
            <a class="back-to-prev" type="button" onclick="history.back();">Back</a>

        </div>
    </div>
</div>

<div class="container">
    <?php the_content(); ?>
</div>



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>