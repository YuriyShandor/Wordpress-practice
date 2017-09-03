<?php
/**
 * Saturn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Saturn
 */

if ( ! function_exists( 'saturn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function saturn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Saturn, use a find and replace
		 * to change 'saturn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'saturn', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'saturn' ),
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
		add_theme_support( 'custom-background', apply_filters( 'saturn_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'saturn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function saturn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saturn_content_width', 640 );
}
add_action( 'after_setup_theme', 'saturn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saturn_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'saturn' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saturn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saturn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function saturn_scripts() {
	wp_enqueue_style( 'saturn-style', get_stylesheet_uri() );

	wp_enqueue_script( 'saturn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'saturn-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saturn_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
* My functions.
*/

function register_styles() {
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-awesome' );

	wp_register_style( 'kube', get_template_directory_uri() . '/css/kube.css' );
	wp_enqueue_style( 'kube' );

	wp_register_style( 'Lato', 'http://fonts.googleapis.com/css?family=Lato:400,700' );
	wp_enqueue_style( 'Lato' );

	wp_register_style( 'Open-Sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' );
	wp_enqueue_style( 'Open-Sans' );

	wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'custom' );
};

add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_scripts() {
	// wp_deregister_script( 'jquery' );
	wp_register_script( 'my-jquery', get_template_directory_uri() . '/js/jquery.min.js' );
	wp_enqueue_script( 'my-jquery' );

	wp_register_script( 'kube', get_template_directory_uri() . '/js/kube.js' );
	wp_enqueue_script( 'kube' );

	// wp_register_script( 'jquery-inview', get_template_directory_uri() . '/js/jquery.inview.min.js' );
	// wp_enqueue_script( 'jquery-inview' );
	//
	// wp_register_script( 'wow', get_template_directory_uri() . '/js/wow.min.js' );
	// wp_enqueue_script( 'wow' );
	//
	// wp_register_script( 'mousescroll', get_template_directory_uri() . '/js/mousescroll.js' );
	// wp_enqueue_script( 'mousescroll' );
	//
	// wp_register_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js' );
	// wp_enqueue_script( 'smoothscroll' );
	//
	// wp_register_script( 'jquery-countTo', get_template_directory_uri() . '/js/jquery.countTo.js' );
	// wp_enqueue_script( 'jquery-countTo' );
	//
	// wp_register_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.min.js' );
	// wp_enqueue_script( 'lightbox' );
	//
	// wp_register_script( 'goggle_maps', 'http://maps.google.com/maps/api/js?sensor=true' );
	// wp_enqueue_script( 'goggle_maps' );
	//
	// wp_register_script( 'main', get_template_directory_uri() . '/js/main.js' );
	// wp_enqueue_script( 'main' );
};

add_action( 'wp_enqueue_scripts', 'register_scripts' );
