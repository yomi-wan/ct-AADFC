<?php
    /**
    * The template for displaying all pages or posts.
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site will use a
    * different template.
    *
    * @package AADFC
    */

    //display the header
    get_header();
    ?>
    
    <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php
            /*
            * Include the Post-Format-specific template for the content.
            */
            // you don't have to keep your folder name as 'template-parts', it can be changed but be consistent of where you place your files. It's a good idea to keep your page/post content .php files in one location - creates more organized structure.
            get_template_part( 'template-parts/content', 'page' );
            ?>
        <!-- //end while loop -->
        <?php endwhile; ?>
        <!-- //if no content to display do this instead -->
        <?php else : ?>
        <!-- // send to a search page / general page with some search content such as tags, recent articles, search form, etc.... saying that we couldn't find your content. -->
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <!-- //end loop statement -->
    <?php endif; ?>

    <!-- //displays footer -->
    <?php get_footer(); ?>
