<?php
/**
 * fabel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fabel
 */

if ( ! function_exists( 'fabel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fabel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fabel, use a find and replace
		 * to change 'fabel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fabel', get_template_directory() . '/languages' );

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
			'fabel' => esc_html__( 'A Fabel' ),
			'cursos' => esc_html__( 'Cursos' ),
			'servicos' => esc_html__( 'Serviços' ),
			'outros' => esc_html__( 'Outros' ),
			'processo-seletivo' => esc_html__( 'Processo Seletivo' ),
			'portal-academico' => esc_html__( 'Portal Acadêmico' ),
			'header-main' => esc_html__( 'Menu Header - Principal' ),
			'header-superior' => esc_html__( 'Menu Header - Superior' ),
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
		add_theme_support( 'custom-background', apply_filters( 'fabel_custom_background_args', array(
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
add_action( 'after_setup_theme', 'fabel_setup' );


// Define Eventos - Custom Post Type

function create_post_type_events() {
  register_post_type( 'evento',
    array(
      'labels' => array(
        'name' => __( 'Eventos' ),
        'singular_name' => __( 'Evento' )
      ),
      'public' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'has_archive' => true,
      'show_in_rest' => true,
			'menu_icon' => 'dashicons-calendar-alt',
			'supports' => array('thumbnail', 'title', 'editor')
    )
  );
}
add_action( 'init', 'create_post_type_events' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fabel_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fabel_content_width', 640 );
}
add_action( 'after_setup_theme', 'fabel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fabel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fabel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fabel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social Media and Contact Footer' ),
		'id'            => 'social-footer',
		'description'   => esc_html__( 'Social media icons and Contact Info - Footer.', 'fabel' ),
		'before_widget' => '<ul id="social-footer" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h2 class="d-none">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fabel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fabel_scripts() {
	wp_enqueue_style( 'fabel-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabel_scripts' );

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
 * Social Media Widget
 */
require get_template_directory() . '/inc/social-media-widget.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Slugify

function slugify($string, $replace = array(), $delimiter = '_') {
  // https://github.com/phalcon/incubator/blob/master/Library/Phalcon/Utils/Slug.php
  if (!extension_loaded('iconv')) {
    throw new Exception('iconv module not loaded');
  }
  // Save the old locale and set the new locale to UTF-8
  $oldLocale = setlocale(LC_ALL, '0');
  setlocale(LC_ALL, 'en_US.UTF-8');
  $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
  if (!empty($replace)) {
    $clean = str_replace((array) $replace, ' ', $clean);
  }
  $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
  $clean = strtolower($clean);
  $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
  $clean = trim($clean, $delimiter);
  // Revert back to the old locale
  setlocale(LC_ALL, $oldLocale);
  return $clean;
}

// Trim excerpt

function custom_short_excerpt($excerpt){
	$limit = 60;

	if (strlen($excerpt) > $limit) {
		return substr($excerpt, 0, strpos($excerpt, ' ', $limit));
	}

	return $excerpt;
}

add_filter('the_excerpt', 'custom_short_excerpt');