<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package AADFC
 */
?>


<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
     <?php dynamic_sidebar( 'footer-widget' ); ?>
<?php  endif; ?>

