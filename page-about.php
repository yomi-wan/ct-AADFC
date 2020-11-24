<?php
/**
 * The template for displaying custom about us page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AADFC
 * 
 */

get_header();
?>
    <?php if(have_posts()) : ?>
        <?php  while(have_posts()) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'about' );  ?>
            <!-- end while loop -->
        <?php  endwhile;?>
        <?php else : ?>
        <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
    
    <?php endif; ?> 

<!-- display footer -->
<?php get_footer(); ?>