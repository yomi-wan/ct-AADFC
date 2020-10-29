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
    <section class="error-404 not-found">

        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aadfc' ); ?>
            </h1>
        </header>
        <!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'aadfc' ); ?>
            </p>

            <!-- //display the search form -->
            <?php get_search_form(); ?>

            <!-- recent posts -->
            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

            <!-- //css categories -->
            <div class="widget widget_categories">
                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'aadfc' ); ?></h2>
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
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

                ?>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->
<!-- display footer -->
<?php get_footer(); ?>