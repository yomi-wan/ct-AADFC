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

        <div class="split-layout text-white row justify-content-between">
            <div class="col-12 col-md-6">
                <?php if (have_rows('african_facts')): ?>
                <?php while (have_rows('african_facts')):  the_row();?>

                <h3><?php the_sub_field('facts_heading');?></h3>
                <div>
                    <?php the_sub_field('fact');?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 bg-white africa-img-wrap">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>

    <section class="bg-white  af-resource-content">
        <div class="container">
            <!-- display events page content -->
            <?php the_content(); ?>
        </div>

    </section>


</main>