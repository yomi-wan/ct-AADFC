<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package AADFC
 */
?>


<?php if ( is_active_sidebar( 'banner-widget' ) ) : ?>
     <?php dynamic_sidebar( 'banner-widget' ); ?>
<?php  endif; ?>

