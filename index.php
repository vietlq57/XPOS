<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package xpos
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php
            $categories = get_categories();
            foreach($categories as $category){
                $recent_post = wp_get_recent_posts(array(
                        'numberposts' => 1,
                        'category' => $category->term_id
                    )
                );
                $args = array(
                    'posts_per_page' => 3,
                    'category_name' => $category->slug
                );
                $posts = get_posts($args);
        ?>
                <div class="category_name"><?php echo $category->name; ?></div>
                <?php
                foreach($posts as $post){
                    if(get_the_post_thumbnail($post->ID)){
                ?>

                    <div class="thumbnail1"><?php echo get_the_post_thumbnail($post->ID, array(32, 32)); ?></div>
                <?php }
                ?>

                    <h1 class="title"><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h1>
                    <div class="content"><?php echo getNWordsFromString($post->post_content, 50); ?></div>
                    <div class="read_more"><a href="<?php echo $post->guid; ?>">Read More</a></div>

                <?php
                }
            }
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="clearfix"></div>

<?php
get_sidebar();
get_footer();
