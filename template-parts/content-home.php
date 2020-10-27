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
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <!-- entry header -->
   
    <main>
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
        <!-- event section start -->
        <h2><?php the_field('events_heading'); ?></h2>
        <!-- custom how to event posts -->
        <?php 
            $args = array( 'post_type' => 'events', 'posts_per_page' => 3 );
            $the_query = new WP_Query( $args ); 
        ?>
        <div class="container">
            <div class="row">
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="card-layout col-md-4">
                            <header>
                                <div class="aspect-ratio-box">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_title('<h3 class="card-title">', '</h3>'); ?></a>
                            </header>
                            <div class="card-content">
                                <?php the_excerpt(); ?> 
                            </div>
                            <footer>
                            <?php  $card_footer = get_field('card_footer'); ?>
                            <?php if($card_footer) : ?>
                                <div class="left-content">
                                    
                                    <p><?php echo  $card_footer['date']; ?></p> 
                                </div>
                                <div class="right-content">
                                    <?php
                                        $term = $card_footer['taxonomy']; 
                                            if( $term ) {
                                                foreach($term as $t) {
                                                    $t = get_term($t);
                                                    echo $t->name; // this can be changed to slug if necessary
                                                }
                                            }
                                    ?>  
                                </div>
                            <?php endif; ?>
                            </footer>
                        </div>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php  $cta_link = get_field('event_btn'); ?>

    <?php if( $cta_link ): ?>
        <div class="secondary-btn" ><a  href="<?php echo esc_url( $cta_link ); ?>">View All Events</a></div>
    <?php endif; ?> 

    <!-- end of events -->
    <!-- aadfc community section -->
    <h2><?php the_field('community_heading'); ?></h2>
    <!-- end of community section -->

    <!-- aadfc sponsors section -->
    <h3><?php the_field('sponsors_heading'); ?></h3>
    <!-- end of sponsors section -->
    </main>

   


</article>
