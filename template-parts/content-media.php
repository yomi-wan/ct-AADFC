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
    <div class="container media-content-title">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <?php the_content(); ?>
        
    </div>

    <section class="galleries-block container past-galleries">
    <h3 class="sub-title">Past Event Galleries</h3>
        <!-- Loop through and display each individual gallery here -->
        <?php 
            $args = array(
                'post_type'     =>  'gallery',
                'posts_per_page'    =>  18, 
                'orderby'           => 'date',
                'order'             => 'DESC'
            );

            // save WP_Query object to variable $the_query 
            $the_query = new WP_Query( $args );
        ?>

        <div class="row">
        <!-- As long as posts exist, display them -->
        <?php if( $the_query -> have_posts() ) : ?>
            <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

                <!-- Gallery preview card -->
                <div class="col-6 col-lg-4 mb-5">
                    <div class="card">
                        <header>
                            <div class="aspect-ratio-box">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post -> ID, 'large' ); ?></a>
                            </div>
                        </header>
                        <a href="<?php the_permalink(); ?>">
                        <div class="card-text">
                            <?php the_title('<h4 class="card-title">','</h4>'); ?>
                            <p class="event-date-img"><?php the_field('event_date');?></p>
                        </div></a>   
                    </div>
                </div>
            <?php endwhile; ?>

            <!-- Finally, return $post to the global scope(?) -->
            <?php wp_reset_postdata(); ?>        
        <?php endif; ?>

        </div>
    </section>

</main>