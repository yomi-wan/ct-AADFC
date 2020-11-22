<?php
/**
 * The template for displaying 404 page errors
 *
 * 
 *
 * @package AADFC
 * 
 */

get_header();
?>
<main class="site-main" id="main">


    <header class="page-header my-5 pt-5 container header-404">
        <h2 class="page-title"><?php esc_html_e( 'Oops! You took a wrong turn', 'aadfc' ); ?>
        </h2>
        <p class="text-white">
            <?php esc_html_e( 'It looks like nothing was found at this location, check out our upcoming events or try searching?', 'aadfc' ); ?>
        </p>
        <div class="mt-5 pt-5">
            <!-- display the search form -->
            <?php get_search_form(); ?>
        </div>
    </header>

    <!-- upcoming Events -->
    <section class="container pt-5 events-404">
        <h3>Upcoming Events</h3>
        <?php echo do_shortcode('[MEC id="221"]'); ?>
    </section>

</main><!-- #main -->
<!-- display footer -->
<?php get_footer(); ?>