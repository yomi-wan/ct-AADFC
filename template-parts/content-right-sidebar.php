<?php
/***
 * 
 * This template part contains the Right Sidebar widget area
 * 
 * @package AADFC
 * 
 */
?>

<?php if (is_active_sidebar('right-sidebar')) : ?>
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
<?php endif ?>
