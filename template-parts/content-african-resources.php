<?php
/****
 * 
 * Template part for displaying content in the African Resources Page
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
            <div class="col-12 col-md-6">
                <!-- display events page content -->
                <?php the_content(); ?>
            </div>
            <div class="col-md-6 bg-white container-fluid">
            <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>

    <section class="bg-white container-fluid">
 
    </section>


</main>