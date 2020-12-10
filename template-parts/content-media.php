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

    <section class="galleries-block">
        <div class="container">
        <!-- Display the galleries in here -->

        <!-- Loop through and display each individual gallery here -->
        <?php 
            $args = array(
                'post_type'     =>  'gallery',
                'posts_per_page'    =>  6, // not a fan of this...maybe more galleries at once?
                'orderby'           => 'date',
                'order'             => 'DESC'
            );

            // save WP_Query object to variable $the_query 
            $the_query = new WP_Query( $args );
        ?>

        <?php if( $the_query -> have_posts() ) : ?>
            <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

                <div class="gallery-preview">

                <!-- display heading of post as clickable link -->
                <a href="<?php the_permalink(); ?>"><?php the_title('<h3 class="card-title">', '</h3>'); ?></a>

                <!-- display featured image/thumbnail as a clickable link -->
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post -> ID, 'large' ); ?></a>

               

                <!-- display the excerpt of the post (probably not needed for galleries) -->
                <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>

            <!-- Finally, return $post to the global scope(?) -->
            <?php wp_reset_postdata(); ?>
                
                
        <?php endif; ?>
        

        </div>
    </section>

</main>