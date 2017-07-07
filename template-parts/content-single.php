<?php
/**
 * @package writerblog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?>>
    <?php

    $category = get_the_category();
    $categories_list = get_the_category_list( __( ', ', 'xpos' ) );
    if ( $categories_list ) {
        printf( '<div class="top-category"><i class="fa fa-tag"></i>  <span class="cat-links">' . __( '%1$s', 'xpos' ) . '</span></div>', $categories_list );
    }
    ?>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="single-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <div class="post-inner">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">
                <?php

                $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
                if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
                }

                $time_string = sprintf( $time_string,
                                        esc_attr( get_the_date( 'c' ) ),
                                        esc_html( get_the_date() ),
                                        esc_attr( get_the_modified_date( 'c' ) ),
                                        esc_html( get_the_modified_date() )
                );

                $posted_on = sprintf(
                    _x( '%s', 'post date', 'xpos' ),
                    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
                );

                $byline = sprintf(
                    _x( '%s', 'post author', 'xpos' ),
                    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
                );

                echo '<span class="byline"><i class="fa fa-user"></i> ' . $byline . '</span><span class="posted-on"><i class="fa fa-calendar"></i> ' . $posted_on . '</span>';
                ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages( array(
                               'before' => '<div class="page-links">' . __( 'Pages:', 'xpos' ),
                               'after'  => '</div>',
                           ) );
            ?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
            <?php xposblog_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
