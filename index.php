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
<div id="content" class="blog-site site-content container">
    <div id="primary" class="col-sm-9 content-area">
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
                <div class="category_name"><span><?php echo $category->name; ?></span></div>
                <div class="recent_post">
                    <?php
                    if(get_the_post_thumbnail($recent_post[0]["ID"])){ ?>
                        <div class="thumbnail-recent"><?php echo get_the_post_thumbnail($recent_post[0]["ID"]); ?></div>
                    <?php } ?>
                    <h3 class="post-title"><a href="<?php echo $recent_post[0]["guid"]; ?>"><?php echo $recent_post[0]["post_title"]; ?><?php echo $recent_post->post_title; ?></a></h3>
                    <div class="content-text">
                        <?php echo getNWordsFromString($recent_post[0]["post_content"], 20); ?>
                        <a  class="read_more" href="<?php echo $recent_post[0]["guid"]; ?>">Read More</a>
                    </div>
                </div>
                <div class="normal-post-list row">
                <?php
                foreach($posts as $k => $post){
                    
                ?>
                
                <?php
                    if($k!=0) { ?>
                        
                            <div class="col-sm-6 normal-post">
                        <?php
                            if (get_the_post_thumbnail($post->ID)) {
                                ?>

                                <div class="thumbnail1"><?php echo get_the_post_thumbnail($post->ID, array(32, 32)); ?></div>
                            <?php }
                            ?>
                                <div class="post-infor">
                                    <h3 class="post-title"><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3>
                                    <div class="content-text">
                                        <?php echo getNWordsFromString($post->post_content, 20); ?>
                                        <a class="read_more" href="<?php echo $post->guid; ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        
                        <?php
                    }
                }
                ?>
                </div>
                <?php
            }
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <div class="col-sm-3 blog-sidebar">
    <?php get_sidebar();?>
    </div>
</div>



<?php
get_footer();
