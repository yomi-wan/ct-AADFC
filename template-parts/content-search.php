<?php
    /**
    * Search results partial template
    *
    * @package AADFC
    */

    ?>

<div class="col-12 col-lg-6 col-xl-4">
    <div class="card px-3 py-5">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <header class="entry-header">
                <?php
                    the_title(
                        sprintf( '<h3 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                        '</a></h3>'
                    );
                    ?>
                <?php if ( 'post' == get_post_type() ) : ?>
                <div class="post-meta-area">
                    <ul class="d-flex">
                        <!-- displays the date the post was published and the author -->
                        <li><?php the_date(); ?></li>
                        <li class="px-2"> | </li>
                        <li>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                                rel="author">
                                <?php _e( 'View Author Archive <span aria-hidden="true">&rarr;</span>'); ?>
                            </a>
                        </li>
                    </ul>
                    <!-- this if/else already comes predefined in a list items as clickable links - check the dev tools -->
                    <?php
                                if( has_category() ){
                                    //display the category
                                    the_category();
                                }
                            ?>
                </div>
                <?php endif; ?>
            </header><!-- .entry-header -->
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </article><!-- #post-## -->
    </div>
</div>