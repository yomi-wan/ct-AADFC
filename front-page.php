<?php
/**
 * The template for displaying all author pages
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
            <?php get_template_part( 'template-parts/content', 'home' );  ?>
            <!-- end while loop -->
        <?php  endwhile;?>
        <?php else : ?>
        <!-- send to search page / some other general page with search function, tags, categorys, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
    
    <?php endif; ?> 

<!-- display footer -->
<?php get_footer(); ?>