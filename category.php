<?php
/**
 * The template for displaying all category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AADFC
 * 
 */

get_header();
?>
<main <?php post_class(); ?> id="<?php the_ID;?>">
    <div class="container mx-auto mt-5">
        <!-- Check if there are any posts to display -->
        <?php if ( have_posts() ) : ?>
        <!-- heading area - this is something we want to display before the WP loop - we only want to see this once. -->
        <header class="category-header mb-5">
            <!-- display h2 heading 
            by setting single_cat_title to true, it will display the category you clicked -->
            <div class="section-title pt-4">
                <h2 class="category-title">Category: <?php single_cat_title( '', true ); ?></h2>
            </div>

            <!-- //display the category description - again this is optional feature. -->
            <?php if ( category_description() ) : ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header>
    </div>
    <div class="bg-white py-5">
        <div class="container">
            <!-- The Loop -->
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- display the post/terms based on their taxonomy -->
            <div class="my-5 py-4">
                <h3><a href="<?php the_permalink(); ?>" rel="bookmark"
                        title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                <div class="pt-4  cat-posts">
                    <?php the_content(); ?>
    
                </div>
            </div>
            <?php endwhile; 
        
            else: ?>
            <?php get_template_part('template-parts/content', 'none') ;?>
    
            <?php endif; ?>
        </div>
    </div>
    <div class="sidebar-right col-md-3">
        <?php get_template_part('template-parts/content', 'sidebar-right'); ?>

    </div>
    </div>

</main>
<?php page_pagination_nav(); ?>

<?php get_footer();
?>