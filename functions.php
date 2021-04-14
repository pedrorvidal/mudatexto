<?php
/**
 * Muda Texto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Muda_Texto
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mudatexto_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mudatexto_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Muda Texto, use a find and replace
         * to change 'mudatexto' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'mudatexto', get_template_directory() . '/dist/languages' );

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
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'mudatexto' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'mudatexto_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'mudatexto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mudatexto_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'mudatexto_content_width', 640 );
}
add_action( 'after_setup_theme', 'mudatexto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mudatexto_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'mudatexto' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'mudatexto' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'mudatexto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mudatexto_scripts() {
    wp_enqueue_style( 'mudatexto-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'mudatexto-style', 'rtl', 'replace' );
    wp_enqueue_style('mudatexto-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('mudatexto-custom', get_stylesheet_directory_uri() . '/dist/css/custom.min.css', array(), _S_VERSION);

    wp_enqueue_script( 'mudatexto-navigation', get_template_directory_uri() . '/dist/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script('mudatexto-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array ( 'jquery' ), _S_VERSION, true);

    wp_enqueue_script( 'mudatexto-clipboard', 'https://cdn.jsdelivr.net/npm/clipboard@2.0.7/dist/clipboard.min.js' , array(), _S_VERSION, true );

    wp_enqueue_script( 'mudatexto-custom', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery', 'mudatexto-clipboard'), _S_VERSION, true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mudatexto_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/dist/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/dist/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/dist/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/dist/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/dist/inc/jetpack.php';
}

/**
 * mudatexto_remove_version used to remove WordPress Version generated tag
 *
 * @return void
 */
function mudatexto_remove_version() {
    return '';
}
add_filter('the_generator', 'mudatexto_remove_version');

/**
 * Error messages for bad login attempts
 *
 * @return void
 */
function guwp_error_msgs() {
  // insert how many msgs you want as array items. it will be shown randomly (html is allowed)
  $custom_error_msgs = [
    '<strong>YOU</strong> SHALL NOT PASS!',
    '<strong>HEY!</strong> GET OUT OF HERE!',
  ];
  // get and returns a random array item to show as the error msg
  return $custom_error_msgs[array_rand($custom_error_msgs)];
}
add_filter( 'login_errors', 'guwp_error_msgs' );

 /** * Usar extensão GD ao invés da Imagick
 */
function cb_child_use_gd_editor($array) {
    return array( 'WP_Image_Editor_GD' );
}
add_filter( 'wp_image_editors', 'cb_child_use_gd_editor' );
