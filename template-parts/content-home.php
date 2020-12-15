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
    <div class="content-banner">
<div class=" container-fluid container-xl align-items-center p-0">
    
            <?php get_template_part('template-parts/content', 'banner'); ?>
</div>
    </div>
    <section class="bg-white what-wrapper">
        <!-- what we do section start -->
        <div class="container">
            <h2 class="d-md-none"><?php the_field('what_heading'); ?></h2>
            <div class="row">
                <div class="col-12 col-md-4">
                    <?php if (have_rows('community')): ?>
                    <?php while (have_rows('community')):  the_row();?>
                    <div class="wwedo community d-flex flex-md-column">
                        <div class="col-6 col-md-12"><img src="<?php the_sub_field('image');?>" alt="community icon">
                        </div>
                        <?php the_sub_field('text');?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-4">
                    <?php if (have_rows('culture')): ?>
                    <?php while (have_rows('culture')):  the_row();?>
                    <div class="wwedo culture d-flex flex-md-column">
                        <div class="col-6 col-md-12 order-2 order-md-1"><img src="<?php the_sub_field('image');?>"
                                alt="culture icon"></div>
                        <p class="order-md-2"><?php the_sub_field('text');?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-4">
                    <?php if (have_rows('volunteer')): ?>
                    <?php while (have_rows('volunteer')):  the_row();?>
                    <div class="wwedo volunteer d-flex flex-md-column">
                        <div class="col-6 col-md-12"><img src="<?php the_sub_field('image');?>" alt="volunteer icon">
                        </div>
                        <?php the_sub_field('text');?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>

    <section class="container">
        <!-- event section start -->
        <h2><?php the_field('events_heading'); ?></h2>
        <!-- custom event posts -->
        <div class="events-front-page">

            <?php  echo do_shortcode('[MEC id="147"]'); ?>

            <div id="events-error"></div>
        </div>
            <div class="secondary-btn front-event-btn"><a href="<?php echo esc_url( get_page_link(30) ); ?>"><?php esc_html_e( 'View All Events', 'textdomain' ); ?></a></div>
            
    </section><!-- end of events -->

    <section class="community container-fluid container-lg bg-white">
        <!-- aadfc community section -->
        <h2><?php the_field('community_heading'); ?></h2>
        <div class="row justify-content-between">
            <div class="entry-content col-sm-11 col-md-8 col-lg-6">
                <!-- display page or post content -->
                <?php the_content(); ?>
            </div>
            <div class="col-sm-8 col-md-4 col-lg-5 d-flex flex-column justify-content-between">
                <div class="quote d-none d-md-block text-right">
                <?php if (have_rows('front_quote')): ?>
                <?php while (have_rows('front_quote')):  the_row();?>

                <p class="display-4"><?php the_sub_field('quote');?></p>
                <p>
                    <?php the_sub_field('sub_text');?>
                </p>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="front-wrapper"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
            </div>
        </div>
    </section><!-- end of community section -->


    <section class="container">
        <!-- aadfc sponsors section -->

        <h3><?php the_field('sponsors_heading'); ?></h3>
        <?php echo do_shortcode('[sp_wpcarousel id="179"]'); ?>

    </section> <!-- end of sponsors section -->


</main>