<?php
/**
 * xpos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xpos
 */

if ( ! function_exists( 'xpos_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function xpos_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on xpos, use a find and replace
	 * to change 'xpos' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'xpos', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary', 'xpos' ),
        'top_menu' => esc_html__( 'Top', 'xpos' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'xpos_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'xpos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xpos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'xpos_content_width', 640 );
}
add_action( 'after_setup_theme', 'xpos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xpos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xpos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xpos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'xpos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xpos_scripts() {
    wp_enqueue_style( 'xpos-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css' );

    wp_enqueue_style( 'xpos-fonts', get_template_directory_uri() . '/inc/css/fonts.css' );

    wp_enqueue_style( 'xpos-style-main', get_template_directory_uri() . '/inc/css/main.css' );

	wp_enqueue_style( 'xpos-style', get_stylesheet_uri() );

    // Add Modernizr for better HTML5 and CSS3 support
    wp_enqueue_script('xpos-modernizr', get_template_directory_uri().'/inc/js/modernizr.js' );

    wp_enqueue_script('xpos-vendor', get_template_directory_uri().'/inc/js/vendor.js', array(), false, true );

    wp_enqueue_script('xpos-main', get_template_directory_uri().'/inc/js/main.js', array(), false, true );

    wp_enqueue_script('xpos-extra', get_template_directory_uri().'/inc/js/extra.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xpos_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

# Replaces the excerpt "more" text by a link
if( !function_exists( 'xposblog_excerpt_more' ) ) {

    function xposblog_excerpt_more( $more ) {
        global $post;

        # Start building the return string
        $return = '<div class="moretag">';
        $return .= '<br />';
        $return .= '<a href="' . get_permalink( $post->ID ) . '" title="' . get_the_title() . '">';
        $return .= __('Read more', 'xpos');
        $return .= '&nbsp;&rarr;&nbsp;';
        $return .= '</a>';
        $return .= '</div>';

        # Actually return it
        return $return;
    }
    add_filter('excerpt_more', 'xposblog_excerpt_more');
}

if ( ! function_exists( 'the_post_navigation' ) ) :
    /**
     * Display navigation to next/previous post when applicable.
     *
     * @todo Remove this function when WordPress 4.3 is released.
     */
    function the_post_navigation() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>
        <nav class="navigation post-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php _e( 'Post navigation', 'amadeus' ); ?></h2>
            <div class="nav-links">
                <?php
                previous_post_link( '<div class="nav-previous">%link</div>', '%title' );
                next_post_link( '<div class="nav-next">%link</div>', '%title' );
                ?>
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
    }
endif;


add_action( 'ninja_forms_after_submission', 'my_ninja_forms_after_submission' );
function my_ninja_forms_after_submission( $form_data ){
    $form_fields = $form_data['fields'];
    $fields = [];
    foreach( $form_fields as $field ){
        $fields[$field['type']] = $field['value'];
    }
    mail($form_data['email'], 'Hello', 'Hello Viet');
}

function getNWordsFromString($text,$numberOfWords = 6)
{
    if($text != null)
    {
        $textArray = explode(" ", $text);
        if(count($textArray) > $numberOfWords)
        {
            return implode(" ",array_slice($textArray, 0, $numberOfWords))."...";
        }
        return $text;
    }
    return "";
}

