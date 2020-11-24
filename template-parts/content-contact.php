<?php
/****
 * 
 * Template part for displaying content in the Contact Page
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
    <div class="row row-md-reverse">
        <div class="col-md-6">
            <div class="contact-info">
                <h5 class="contact-info-content"><?php the_field('contact_number'); ?></h5>
                <div class="border-line"></div>
                <h5 class="contact-info-content"> <?php the_field('contact_location'); ?></h5>
            </div>
        </div>
        <div class="col-md-6">
            <?php the_content(); ?>
        </div>
    </div>
</div>
</main>

