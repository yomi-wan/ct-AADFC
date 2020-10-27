<?php
/***
 * 
 *  The template is for displaying all the blog posts
 * 
 * @package AAFDC
 * 
 */
get_header();

?>

<?php if(have_posts()) : ?>
    <?php /* start the loop */ ?>

      <?php  while(have_posts()) : the_post(); ?>
            <!-- display the all of the blog posts -->
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            <?php the_excerpt(); ?>
        <!-- end while loop -->
      <?php  endwhile;?>
      <?php else : ?>
      <!-- send to search page / some other general page with search function, tags, categorys, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
    
    <?php endif; ?>   
    <?php
        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'aadfc' ) . '</span> ' .
                //'<span class="screen-reader-text">' . __( 'Next post:', 'aadfc' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'aadfc' ) . '</span> ' .
                //'<span class="screen-reader-text">' . __( 'Previous post:', 'aadfc' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );
    ?>
<!-- display the footer -->
<?php get_footer(); ?>
