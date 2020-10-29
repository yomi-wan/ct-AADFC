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
<div class="container bg-white">
    
    <h2><?php the_field('about_us_heading'); ?></h2>
    <div class="about-us-content">
                    <!-- display about us page content -->
                    <?php the_content(); ?>
    
    </div>
</div>

</main>
