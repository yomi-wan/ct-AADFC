<?php
/****
 * 
 * Template part for displaying content in the front-page (home page)
 * 
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package AADFC
 * 
 */
?>
<main <?php post_class();?> id="post-<?php the_ID();?>">
<div class="container">

<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

    <div class="events-content text-white">
        <?php the_content(); ?>
        <!-- display events page content -->
    </div>

    <div class="bg-white">
        <?php echo do_shortcode('[MEC id="155"]'); ?>
    
    </div>

</div>

</main>
