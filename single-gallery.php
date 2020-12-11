<?php 
/**
 * 
 *
 * @package AADFC
 * 
 */

get_header(); ?>

<main>

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="divider"><img src="<?php bloginfo('get_template_directory_uri(  )'); ?>" alt="" /></div>
    <header>
        <?php the_title('<h2 class="gallery-title">', '</h2>'); ?>

    </header>
    <?php the_content(); ?>

    <?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>