<?php
    /**
    * Template part for displaying page content in page.php
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    * @package AADFC
    *
    */

    ?>
    <!-- //gives the page a class-name and displays the page id# -->
    <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <header class="entry-header">
            <!-- //get the page title -->
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header><!-- .entry-header -->

        <!-- if you have an image it will display wordpress largest default thumbnail (see settins in admin for sizing). -->
	    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

        
        <div class="entry-content container text-white">
            <?php the_content(); ?>
        </div><!-- .entry-content -->

    </section><!-- #post/page-## -->
