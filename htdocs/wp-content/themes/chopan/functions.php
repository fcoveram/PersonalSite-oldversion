<?php
/**
 * Portafolio Francisco Vera functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portafolio_Francisco_Vera
 */

if ( ! function_exists( 'chopan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function chopan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Portafolio Francisco Vera, use a find and replace
		 * to change 'chopan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'chopan', get_template_directory() . '/languages' );

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
			'footer-external' => esc_html__( 'Redes (footer)', 'chopan' ),
			'header-aux' => esc_html__( 'Auxiliar Header', 'chopan' )
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
		add_theme_support( 'custom-background', apply_filters( 'chopan_custom_background_args', array(
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
add_action( 'after_setup_theme', 'chopan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function chopan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'chopan_content_width', 970 );
}
add_action( 'after_setup_theme', 'chopan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function chopan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'chopan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'chopan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'chopan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chopan_scripts() {

	wp_enqueue_style( 'chopan-foundation', get_template_directory_uri() .'/css/foundation.css', array(), '6.4.2', 'screen' );
	// wp_enqueue_style( 'chopan-app', get_template_directory_uri() .'/css/app.css', array(), '6.4.2', 'screen' );

	$files_versions = json_decode( file_get_contents( __DIR__ .'/dist/manifest.json' ) );

	wp_enqueue_style( 'chopan-style', $files_versions->{'dist/global.css'}, array('chopan-foundation'), '6.4.2', 'screen' );

	// wp_enqueue_script( 'chopan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'chopan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'chopan-what-input', get_template_directory_uri() .'/js/vendor/what-input.js', array(), '4.2.0', true );
	wp_enqueue_script( 'chopan-foundation', get_template_directory_uri() .'/js/vendor/foundation.js', array('jquery'), '6.4.2', true );
	wp_enqueue_script( 'chopan-app', get_template_directory_uri() .'/js/app.js', array('jquery', 'chopan-foundation'), '6.4.2', true );
}
add_action( 'wp_enqueue_scripts', 'chopan_scripts' );

add_action('wp_head', function(){
echo<<<EOL
	<script src="https://use.typekit.net/obk4uws.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
EOL;
});

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

add_filter('nav_menu_css_class', function( array $classes, WP_Post $item, stdClass $args, int $depth ){
	if ( $args->theme_location != 'footer-external' && $args->theme_location !== 'header-aux' ) {
		return $classes;
	}
	$classes[] = 'float-right';
	return $classes;
}, 10, 4);

function chopan_portfolio_content( $chunk = 0 ) {
	global $post;
	$content = $post->post_content;
	$separators = ['/\[caption/', '/<a.*><img/', '/<img/', '/\[gallery/'];
	$first_img_index = false;
	foreach ( $separators as $separator ) {
		$found = preg_match( $separator, $content, $matches );
		if ( $found === 1 ) {
			$first_img_index = strpos( $content, $matches[0] );
			break;
		}
	}
	if ( $first_img_index !== false ) {
		if ( $chunk === 0 ) {
			$content_chunk = substr( $content, 0, $first_img_index );
		} else {
			$content_chunk = substr( $content, $first_img_index );
		}
	} else {
		$content_chunk = $content;
	}
	echo ( $found || $chunk == 0 ) ? apply_filters('the_content', $content_chunk) : '';
}

function chopan_languages() {
	$langs = pll_the_languages([
		'dropdown' => 0,
		'show_flags' => 0,
		'hide_if_empty' => 0,
		'echo' => 0,
		'hide_current' => 1,
		'raw' => 1
	]);
	foreach ( $langs as $lang ) {
		echo "<a href='{$lang['url']}' hreflang='{$lang['locale']}'>{$lang['name']}</a>";
	}
}
