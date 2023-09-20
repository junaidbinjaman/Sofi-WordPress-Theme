<?php
/**
 * Sofi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sofi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

/**
 * Requiring tgm library
 */
require_once get_template_directory() . '/inc/tgm.php';

/**
 * Require Code start framework
 */
require_once get_theme_file_path() . '/lib/codestar-framework/codestar-framework.php';
require_once get_theme_file_path() . '/inc/csf-config.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sofi_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Sofi, use a find and replace
		* to change 'sofi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sofi', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'sofi' ),
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
			'sofi_custom_background_args',
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
add_action( 'after_setup_theme', 'sofi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sofi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sofi_content_width', 640 );
}
add_action( 'after_setup_theme', 'sofi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sofi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sofi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sofi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sofi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sofi_scripts() {
	// Enqueue CSS
	wp_enqueue_style( 'sofi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'sofi-google-font', '//fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'sofi-plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'sofi-color', get_template_directory_uri() . '/assets/css/colors.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'sofi-template-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' ); 
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );

	// Enqueue
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'sofi-custom-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'soficustom-init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'sofi-modernzr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sofi_scripts' );

function sofi_action_assets() {
	wp_enqueue_style( 'sofi-admin-option-style', get_template_directory_uri() . '/admin/css/sofi_admin.css', array(), _S_VERSION, 'all' ); 
	wp_enqueue_script('sofi-admin', get_template_directory_uri() . '/admin/js/sofi-admin.js', array('jquery'), _S_VERSION, true);
}

add_action( 'admin_enqueue_scripts', 'sofi_action_assets' );

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
 * Add type="module" to sofi-admin.js to code in modular way;
 *
 * @param string $tag the script tag
 * @param * $handle the wp enqueue handle
 * @param URL $src the file
 * @return void
 */
function sofi_add_module_to_script( $tag, $handle, $src ) {
    if ( 'sofi-admin' === $handle ) {
        $tag = '<script type="module" src="' . esc_url( $src ) . '" data-app-key="MY_APP_KEY"></script>';
    }

    return $tag;
}

add_filter( 'script_loader_tag', 'sofi_add_module_to_script', 10, 3 );
