<?php
    /**
    * The footer for our theme
    *Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    *
    * @package AADFC
    * @since 1.0.0
    */
?>
        </div> 
        <!-- closing tag for site-content"> -->
        <div class="footer-container d-flex  flex-wrap align-items-end">
                    <?php get_template_part( 'template-parts/sidebar', 'footer' ); ?>
        </div>

        <footer>
        <div class="container-fluid d-md-flex justify-content-between align-items-center">
            <ul class="d-flex flex-wrap">
                <li>&copy;<?php echo date('Y'); ?> <a href="<?php echo get_home_url(); ?>">Africans &amp; African Descendant Friendship Club</a> | </li>
                <!-- <li> <a href="<"?"php echo esc_url( get_permalink( get_page_by_path( 'privacy-policy' ) ) );?>"> Privacy Policy</a> </li> -->
                <!-- <li> | <a href="#">Terms &amp; Conditions</a></li>
                 -->
            </ul>
            <p class="developers m-0">Developer Team <a href="https://www.yomijordan.com/" target="_blank">Yomi</a>, <a href="https://ianr.dev/" target="_blank">Ian</a> &amp; <a href="https://kobexamoh.co/" target="_blank">Kobe</a></p>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
