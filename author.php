<?php
/**
 * The template for displaying all author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AADFC
 * 
 */

get_header();
?>

<main class="mx-auto my-5 pt-5">
    
    <div class="section-title container">
        <h2 class="page-title-author">
            <?php printf( __( 'Author Archives %s'), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
        </h2>
        <hr>
    </div>
    <!-- add page heading here -->
    
    
<div class="bg-white py-5">
 <div class="container">
            <!-- rewind the loop -->
            <?php rewind_posts(); ?>
            
            <!-- displaying the authors bio -->
            <!-- providing that the author has filled out the description (in users in WP admin) it will show a bio! -->
            <?php if ( get_the_author_meta( 'description' ) ) : ?><br />
            
            <div class="author-info">
                <!-- get avatar -->
                <div class="author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'author_bio_avatar_size', 60 ) ); ?>
                </div>
                <!-- get description/bio -->
                <div class="author-description">
                    <h3><?php printf( __( 'About %s'), get_the_author() ); ?></h3>
                    <?php the_author_meta( 'description' ); ?>
                </div> <!--#author-description-->
            </div><!--#entry-author-info-->
            
            <?php endif; ?>
            
            <!-- display the author's posts -->
            <ul>
                <?php if(have_posts()) : ?>
                <?php  while(have_posts()) : the_post(); ?>
                <!-- more customized posts: you can add whatever you want to be displayed here This area is really not limited!. -->
                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php the_title(); ?></a>,
                    <?php the_time('d M Y'); ?> in <?php the_category('&');?></li>
            
                <?php  endwhile;?>
            </ul>
 </div>
</div>
    <div class="container pagination mt-5">
        <div class="row mx-auto">
            <div class="col-md">
                <!-- pagination -->
                <div class="pagination">
                    <?php page_pagination_nav(); ?>
                </div>
            </div>
        </div>
    </div> <!-- //pagination class -->
    <?php else : ?>
    <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
            <h2 class="entry-title"><?php _e( 'Nothing Found'); ?></h2>
        </header><!-- .entry-header -->
        <div class="entry-content">
            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.'); ?>
            </p>
            <!-- no search yet, if displayed will run an error -->
            <?php //get_search_form(); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-0 -->
    <?php //get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
    

    </main>   

<?php get_footer();
?>
