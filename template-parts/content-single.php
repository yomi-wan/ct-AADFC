<?php
/***
 * 
 *  Template partial for displaying content in the single.php
 * 
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package AADFC
 * 
 */
?>

<!--gives the page class-name and displays a page id -->
<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <!-- entry header -->
    <header>
        <!-- get the page title -->
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php the_date(); ?>
        <?php 
            if(has_category()) {
                the_category(); //show category
            } elseif(has_tags()) {
                the_tags(); //show tags
            }
        
        ?>
    </header>

    <!-- if you had an image it will display using wordpress's largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content">
        <!-- display page or post content -->
        <?php 
            the_content(); 
            the_ID()
        
        ?>

        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>

    <footer class="entry-footer">
        <!--adds a link to edit your content -->
        <?php edit_post_link( __('Edit','aadfc'), '<span class="edit-link">', '</span>' ); ?>
    </footer>


</article>
