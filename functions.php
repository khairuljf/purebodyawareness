<?php
/**
 * purebodyawareness functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package purebodyawareness
 */

if ( ! function_exists( 'purebodyawareness_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function purebodyawareness_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on purebodyawareness, use a find and replace
		 * to change 'purebodyawareness' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'purebodyawareness', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary Menu', 'purebodyawareness' ),
            'menu-2' => esc_html__( 'Footer Menu', 'purebodyawareness' ),
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
		add_theme_support( 'custom-background', apply_filters( 'purebodyawareness_custom_background_args', array(
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
add_action( 'after_setup_theme', 'purebodyawareness_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function purebodyawareness_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'purebodyawareness_content_width', 640 );
}
add_action( 'after_setup_theme', 'purebodyawareness_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function purebodyawareness_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'purebodyawareness' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'purebodyawareness' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'purebodyawareness_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function purebodyawareness_scripts() {
    wp_enqueue_style( 'purebodyawareness-main-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '0', false );
	wp_enqueue_style( 'purebodyawareness-style', get_stylesheet_uri() );

	wp_enqueue_script( 'purebodyawareness-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'purebodyawareness-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'custom-js-o', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'purebodyawareness_scripts' );


function purebodyawareness_scripts_admin(){
    wp_enqueue_script( 'cmb2-conditional', get_template_directory_uri() . '/assets/js/cmb2-conditional-logic.js', array('jquery'), time(), true );
}

add_action('admin_enqueue_scripts','purebodyawareness_scripts_admin');

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

/*Require post types*/
require 'inc/custom-post-type.php';

/* Include CMB2 meta box */
require 'inc/metabox/init.php';
require 'inc/metabox/functions.php';


/* Include redux framework */
require 'inc/redux/ReduxCore/framework.php';
require 'inc/redux/sample/options.php';

// Custom Pagination
function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
        echo '<div class="custom-pagi">';
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
        echo '</div>';
    }
}