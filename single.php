<?php
/***
 * 
 *  The template is for displaying individual blog posts (full blog post)
 * 
 * @package AADFC
 * 
 */
get_header();
?>
<main>
    <?php if(have_posts()) : ?>
        <?php /* start the loop */ ?>

        <?php  while(have_posts()) : the_post(); ?>
            <?php
                //do things -- display content
                /**
                 * the get_post_format() function template tag automatically picks up the type of post format defined for the post and uses the corresponding template file. 
                 */
                get_template_part( 'template-parts/content', 'single' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                // Previous/next post navigation.
                the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'aadfc' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'aadfc' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'aadfc' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'aadfc' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );

            ?>
            <!-- end while loop -->
        <?php  endwhile;?>
        <?php else : ?>
        <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
        
    <?php endif; ?>   
</main>

<!-- Add in the right-sidebar -->
<?php get_template_part( 'template-parts/content', 'right-sidebar' ); ?>

<!-- display the footer -->
<?php get_footer(); ?>
