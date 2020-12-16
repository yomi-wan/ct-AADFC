<?php 
/**
 * Template part for displaying all galleries in the General Gallery page
 * 
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package AADFC
 * 
 * 
 */
?>
<main <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="container">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <div class="text-white"><?php the_content(); ?></div>
        
    </div>
    <?php 
    // will display up to 6 gallery on this page.
    $args = array( 'post_type' => 'gallery', 
    'posts_per_page' => 6,
    'order'             => 'DESC' 
    );
    $the_query = new WP_Query( $args ); 
?>
    <section class="container past-galleries">
        <h3><?php _e('Past Events'); ?></h3>
        <p class="text-white">Check out our galleries from past events.</p>

        <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <header>
                        <div class="aspect-ratio-box">
                            <a
                                href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></a>
                        </div>
                    </header>
                    <a href="<?php the_permalink(); ?>"><div class="card-text">
                        <?php the_title('<h4 class="card-title">', '</h4>'); ?>
                    </div></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php _e( 'Sorry, no galleries matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>

</main>