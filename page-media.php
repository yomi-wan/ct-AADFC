<?php 
/**
 * Template for displaying the galleries (not the single gallery view)
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package AADFC
 * 
 */

 get_header();
?>
    <?php if(have_posts()) : ?>
        <!-- while posts exist, drop em in -->
        <?php while(have_posts()) : the_post(); ?>
            <!-- get the image gallery style posts -->
            <?php get_template_part('template-parts/content', 'media'); ?>
        <?php endwhile; ?>

        <!-- if posts don't exist, -->
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'home'); ?>
    <?php endif; ?>
        

<!-- Render the footer -->
<?php get_footer(); ?>