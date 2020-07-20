<?php
/**
 * one19limited functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package one19limited
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('one19limited_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function one19limited_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on one19limited, use a find and replace
         * to change 'one19limited' to the name of your theme in all the template files.
         */
        load_theme_textdomain(
            'one19limited',
            get_template_directory() . '/languages'
        );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus([
            'menu-1' => esc_html__('Menu', 'one19limited'),
        ]);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]);

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters('one19limited_custom_background_args', [
                'default-color' => 'ffffff',
                'default-image' => '',
            ])
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);
    }
endif;
add_action('after_setup_theme', 'one19limited_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function one19limited_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters(
        'one19limited_content_width',
        640
    );
}
add_action('after_setup_theme', 'one19limited_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function one19limited_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Sidebar', 'one19limited'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'one19limited'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);

    register_sidebar([
        'name' => 'Footer area one',
        'id' => 'footer_area_one',
        'description' => 'This widget area discription',
        'before_widget' => '<section class="footer-area footer-area-one">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => 'Footer area two',
        'id' => 'footer_area_two',
        'description' => 'This widget area discription',
        'before_widget' => '<section class="footer-area footer-area-two">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => 'Footer area three',
        'id' => 'footer_area_three',
        'description' => 'This widget area discription',
        'before_widget' => '<section class="footer-area footer-area-three">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);

    register_sidebar([
        'name' => 'Footer area four',
        'id' => 'footer_area_four',
        'description' => 'This widget area discription',
        'before_widget' => '<section class="footer-area footer-area-three">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);
}
add_action('widgets_init', 'one19limited_widgets_init');

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Enqueue scripts and styles.
 */
function one19limited_scripts()
{
    wp_enqueue_style(
        'one19limited-style',
        get_stylesheet_uri(),
        [],
        _S_VERSION
    );
    wp_style_add_data('one19limited-style', 'rtl', 'replace');

    // Custom style generated from /scss/one19.scss
    wp_enqueue_style(
        'one19limited-main-style',
        get_stylesheet_directory_uri() . '/css/one19.css',
        [],
        _S_VERSION
    );
    // wp_style_add_data('one19limited-main-style', 'rtl', 'replace');

    wp_enqueue_script(
        'one19limited-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        [],
        _S_VERSION,
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'one19limited_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}