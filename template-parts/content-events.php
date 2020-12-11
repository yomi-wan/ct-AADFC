<?php
/****
 * 
 * Template part for displaying content in the Events Page
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

        <div class="split-layout text-white row align-items-end justify-content-between">
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
    <!-- custom how to tutorial posts -->
    <?php 
    // will display up to 3 gallery on this page.
    $args = array( 'post_type' => 'gallery', 
    'posts_per_page' => 4,
    'order'             => 'DEC' 
    );
    $the_query = new WP_Query( $args ); 
?>

    <section class="container past-galleries">
        <h2><?php _e('Past Events'); ?></h2>
        <p class="text-white">Check out our galleries from past events.</p>

        <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <header>
                        <!-- creates a responsive images that scales based on browser sizing  -->
                        <div class="aspect-ratio-box">
                            <a
                                href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></a>
                        </div>
                    </header>
                    <div class="card-text">
                        <a href="<?php the_permalink(); ?>"><?php the_title('<h4 class="card-title">', '</h4>'); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php _e( 'Sorry, no galleries matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <!-- //end custom gallery post type -->

</main>