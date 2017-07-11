<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div id="content" class="site-content container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
                $args1 = array(
                    'category__name' => 'category1'
                );
                $posts1 = get_posts($args1);
                var_dump($posts1);
            ?>

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /*
                     Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
