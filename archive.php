<?php 
        /**
         * The template is for displaying blogs by category
         *
         * @package AADFC
         * @since 1.0.0
         */

       
        get_header();
?>

<div class="container mx-auto">
    <div class="section-title my-5">
        <hr>
        <h2><?php _e( 'Archives Page' ); ?></h2>
    </div>

    <div class="row">


        <div class="mb-5 py-4 col-12 col-md-6 col-lg-3">
            <h3 class="mb-5"><?php _e( 'Recent Posts' ); ?></h3>
            <?php wp_get_archives('type=postbypost&limit=6'); ?>


        </div>
        <div class="mb-5 py-4 col-12 col-md-6 col-lg-3">
            <h3 class="mb-5"><?php _e( 'Gallery Posts' ); ?></h3>
            <?php $loop = new WP_Query( array( 
                    'post_type' => 'galleries', 
                    'posts_per_page' => 20 ) ); 
                ?>
            <ul>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php  the_title('<li class="p-2"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>');  ?>
                <?php endwhile; ?>
            </ul>

        </div>
        <div class="mb-5 py-4 col-12 col-md-6 col-lg-3">
            <h2 class="mb-5"><?php _e( 'Events' ); ?></h2>


        </div>
        
        <div  class="mb-5 py-4 col-12 col-md-6 col-lg-3">
            <h2 class="mb-5"><?php _e( 'Categories' ); ?></h2>
            <?php wp_list_categories('depth=1'); ?>

        </div>
    </div>
</div>

<!-- display footer -->
<?php get_footer(); ?>