<?php
/****
 * 
 * Template part for displaying content in the about-page
 * 
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package AADFC
 * 
 */
?>
<main <?php post_class();?> id="post-<?php the_ID();?>">
    <div class="container-fluid">
        <div class="about-heading">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </div>
    </div>

    <section class="bg-white">
        <div class="container about-us-content">
            <!-- display about us page content -->
            <?php the_content(); ?>
        </div>
    </section>
    <div class="container text-white business-section">
        <div class="row">
            <?php if (have_rows('sponsors')): ?>
            <?php while (have_rows('sponsors')):  the_row();?>
            <article class="col-md-6">
                <h4><?php the_sub_field('sponsors_heading');?></h4>
                <div><?php the_sub_field('list');?></div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php if (have_rows('business_directory')): ?>
            <?php while (have_rows('business_directory')):  the_row();?>
            <article class="col-md-6">
                <h4><?php the_sub_field('business_heading');?></h4>
                <div><?php the_sub_field('list');?></div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>