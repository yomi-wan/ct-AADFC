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

    <div class="contact-content">
                    <!-- display about us page content -->
                    <?php the_content(); ?>
    
    </div>

</div>

</main>
