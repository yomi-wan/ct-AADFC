<?php
/**
 * The template for displaying search forms ->
 *
 * @package AADFC
 * @since 1.0.0
 */

 ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _x( 'Search for:', 'label', 'aadfc'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'aadfc' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'aadfc' ); ?>" />
</form>