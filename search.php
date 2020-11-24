<?php
/**
    * The template for displaying search results pages
    *
    *  @package AADFC
    *  @since 1.0.0
    */

    get_header();
    ?>

<div class="wrapper" id="search-wrapper">
    <div class="container">

        <main class="row site-main py-5" id="main">
            <?php if ( have_posts() ) : ?>
            <header class="page-header mb-5">
                <div class="section-title">
                    <hr>
                    <h2 class="page-title">
                        <?php
                                    printf(
                                        /* translators: %s: query term */
                                        esc_html__( 'Search Results for: %s', 'aadfc' ),
                                        '<span>' . get_search_query() . '</span>'
                                    );
                                    ?>
                    </h2>
                </div>

            </header><!-- .page-header -->
            <div class="row">
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'search' ); ?>
                <?php endwhile; ?>
                <?php else : ?>

                <div class="my-5 py-5 text-white">
                    <h2 class="text-center py-5">Sorry not found</h2>

                </div>

                <?php endif; ?>
            </div><!-- .row -->
        </main><!-- #main -->


        <!-- The pagination component -->
        <?php page_pagination_nav(); ?>
    </div><!-- #content -->
</div><!-- #search-wrapper -->
<?php get_footer();