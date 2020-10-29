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
    <section class="bg-white">
        <div class="container">
            <!-- if you had an image it will display using wordpress' largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
            <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
            <!-- what we do section start -->
            <h2><?php the_field('what_heading'); ?></h2>
            <div class="entry-content">
                <!-- display page or post content -->
                <?php 
                        the_content(); 
                    
                    ?>

                <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
            </div>
        </div>
    </section>
    <div class="container home">
        <section>
            <!-- event section start -->

            <h2><?php the_field('events_heading'); ?></h2>
            <!-- custom event posts -->
            <?php 
                $args = array( 'post_type' => 'events', 'posts_per_page' => 3 );
                $the_query = new WP_Query( $args ); 
            ?>

            <div class="row">
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card-layout">
                        <a href="<?php the_permalink(); ?>">
                            <div class="aspect-ratio-box">
                                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

                                <div class="trans-box">
                                    <?php the_title('<h3 class="card-title">', '</h3>'); ?>
                                    <p><?php echo  $card_footer['date']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>

            <?php  $cta_link = get_field('event_btn'); ?>

            <?php if( $cta_link ): ?>
            <div class="secondary-btn"><a href="<?php echo esc_url( $cta_link ); ?>">View All Events</a></div>
            <?php endif; ?>

            
        </section><!-- end of events -->

        <section>
            <!-- aadfc community section -->

            <h2><?php the_field('community_heading'); ?></h2>

        </section><!-- end of community section -->


        <section>
            <!-- aadfc sponsors section -->

            <h3><?php the_field('sponsors_heading'); ?></h3>

        </section> <!-- end of sponsors section -->

    </div>
</main>