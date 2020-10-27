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
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <?php get_template_part( 'template-parts/sidebar', 'footer' ); ?>
                </div>
            </div>
        </div>

        <footer>
        <div class="container d-md-flex justify-content-between align-items-center">
            <ul class="d-flex flex-wrap">
                <li>&copy;<?php echo date('Y'); ?> Africans &amp; African Descendant Friendship Club of St. Albert |</li>
                <li><a href="#">Terms &amp; Conditions</a> |</li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="m-0">Designed &amp Developed by KIY Designs</p>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>