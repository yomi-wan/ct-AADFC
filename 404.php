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
    <section class="error-404 not-found container">

        <header class="page-header mt-5">
            <h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found', 'aadfc' ); ?>
            </h2>
        </header>
        <!-- .page-header -->

        <div class="page-content mt-5 text-white">
            <p><?php esc_html_e( 'It looks like nothing was found at this location, if it was a past event please check out event galleries or events page for upcoming events. Maybe try one of the links below or a search?', 'aadfc' ); ?>
            </p>

            <!-- upcoming Events -->
            <div>
                <h3>Upcoming Events</h3>
                <?php $upcoming_events = MEC_main::get_upcoming_events(5); ?>
            </div>
            <!-- //display the search form -->
            <?php get_search_form(); ?>

            <!-- recent posts -->
            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

            <!-- categories -->
            <div class="widget widget_categories">
                <h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'aadfc' ); ?></h3>
                <ul>
                    <?php
                        wp_list_categories(
                            array(
                                'orderby'    => 'count',
                                'order'      => 'DESC',
                                'show_count' => 1,
                                'title_li'   => '',
                                'number'     => 10,
                            )
                        );
                        ?>
                </ul>
            </div>
            <!-- .widget -->
            <!-- //monthly archives -->
            <?php
                /* translators: %1$s: smiley */
                $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'aadfc' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h3>$archive_content" );

                ?>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->
<!-- display footer -->
<?php get_footer(); ?>