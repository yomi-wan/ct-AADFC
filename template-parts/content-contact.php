<?php
/****
 * 
 * Template part for displaying content in the contect-page
 * 
 * 
 * @package AADFC
 * 
 */
?>

<main <?php post_class();?> id="post-<?php the_ID();?>">
    <div class="container-fluid container-lg">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <div class="d-md-flex justify-content-md-between">
            <div class="col-md-6 col-lg-5 order-md-2">
                <div class="contact-info d-flex flex-column justify-content-center">
                    <?php if (have_rows('contact_info')): ?>
                    <?php while (have_rows('contact_info')):  the_row();?>
                    <h4 class="contact-info-heading d-none d-md-block"><?php the_sub_field('contact_info_heading'); ?>
                    </h4>
                    <p class="contact-info-content"><i class="material-icons">call</i>
                        <?php the_sub_field('contact_number'); ?></p>
                    <div class="border-line d-md-none"></div>
                    <p class="contact-info-content"><i class="material-icons">location_on</i>
                        <?php the_sub_field('contact_location'); ?></p>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contact-form col-md-6 order-md-1">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>