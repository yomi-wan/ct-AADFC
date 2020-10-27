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
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <header class="entry-header">
            <!-- //get the page title -->
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <!-- if you have an image it will display wordpress largest default thumbnail (see settins in admin for sizing). -->
	    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

        
        <div class="entry-content">
            <!-- //display the page or post content -->
            <?php the_content(); ?>
            <!-- //some pages could have pagination (more likely post/blog pages) -->
            <!-- //or anything else you want to add in here, could be a general template tag or a custom post. -->
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <!-- //adds a link to edit your content -->
            <?php edit_post_link( __( 'Edit', 'theme-name-here' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post/page-## -->
