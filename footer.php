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
                <li>&copy;<?php echo date('Y'); ?> Africans &amp; African Descendant Friendship Club | </li>
                <!-- <li><a href="#">Terms &amp; Conditions</a> | </li>
                <li><a href="#">Privacy Policy</a></li> -->
            </ul>
            <p class="m-0">Designed &amp; Developed by <a href="<?php echo site_url('/developer.php'); ?>" target="_blank">KIY Designs</a></p>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
