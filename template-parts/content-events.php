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


    <div class="container-fluid container-md">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    
        <div class="events-content text-white row align-items-end justify-content-between">
            <div class="col-12 col-md-8 col-xl-7">
                <!-- display events page content -->
                <?php the_content(); ?>
            </div>
            <div class="col-md-4">
                <div class="alert-bubble d-flex align-items-center"><?php the_field('covid_alert');?></div>
            </div>
        </div>
    </div>

    <div class="bg-white container-fluid container-lg events-calendar-container">
        <!-- Modern Events Calendar -->
        <?php echo do_shortcode('[MEC id="123"]'); ?>
    </div>
<!-- TODO Add Galleries title and gallery post feed -->


</main>