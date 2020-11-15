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
<!--gives the page class-name and displays a page id -->
<main <?php post_class();?> id="post-<?php the_ID();?>">
    <!-- entry header -->
    <!-- if you had an image it will display using wordpress' largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    <div class="content-banner align-items-center">

                <?php get_template_part('template-parts/content', 'banner'); ?>
<div class="banner-image"></div>
    </div>
    <section class="bg-white">
        <!-- what we do section start -->
        <div class="container">
            <h2><?php the_field('what_heading'); ?> <div class="ball"></div>
            </h2>
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
                        <div class="col-6 col-md-12"><img src="<?php the_sub_field('image');?>" alt="volunteer icon"></div>
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

        <h2><?php the_field('events_heading'); ?> <div class="ball"></div>
        </h2>
        <!-- custom event posts -->
        <?php 
                $args = array( 'post_type' => 'events', 'posts_per_page' => 3 );
                $the_query = new WP_Query( $args ); 
            ?>

        <div class="events-front-page">
        <?php echo do_shortcode('[MEC id="147"]'); ?>
        
        </div>

        <div class="secondary-btn"><a href="<?php the_field('event_btn'); ?>">View All Events</a></div>


    </section><!-- end of events -->

    <section class="community bg-white">
        <!-- aadfc community section -->
        <div class="container">

            <h2><?php the_field('community_heading'); ?><div class="ball"></div>
            </h2>
            <div class="entry-content">
                <!-- display page or post content -->
                <?php 
                            the_content(); 
                        
                        ?>


            </div>
        </div>
    </section><!-- end of community section -->


    <section class="container">
        <!-- aadfc sponsors section -->

        <h3><?php the_field('sponsors_heading'); ?> <div class="ball"></div>
        </h3>

    </section> <!-- end of sponsors section -->


</main>