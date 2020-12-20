<?php
/**
 * appos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package appos
 */

if ( ! function_exists( 'appos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function appos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on appos, use a find and replace
		 * to change 'appos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'appos', get_template_directory() . '/languages' );

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
			'main_menu' => esc_html__( 'Primary', 'appos' ),
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
		add_theme_support( 'custom-background', apply_filters( 'appos_custom_background_args', array(
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
add_action( 'after_setup_theme', 'appos_setup' );
//image size
add_image_size('appos-770-451', 770, 451, true );
add_image_size('appos-570-331', 570, 331, true );
add_image_size('appos-268-476', 268, 476, true );
add_image_size('appos-210-260', 210, 260, true );
add_image_size('appos-70-60', 70, 60, true );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function appos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'appos_content_width', 640 );
}
add_action( 'after_setup_theme', 'appos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function appos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'appos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'appos' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="widget-title"><h4>',
		'after_title'   => '</h4></div><div class="widget-wrapper">',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Newsletter', 'appos' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'appos' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'appos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 require get_template_directory() . '/inc/enqueue.php';
 

/**
 *
 * tgm plugin activation
 *
 */
require get_template_directory() . '/inc/tgm-plugin-activation/tgm-plugin-setup.php';
 
 /**
 * breadcrumbs.
 */
 require get_template_directory() . '/inc/breadcrumbs.php';
 
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

/////// Comment list here
require get_template_directory() . '/Comment-lists.php';

//================================= 
//all custom widgets require here
//=================================
require get_template_directory() . '/widgets/widget-categories.php';
require get_template_directory() . '/widgets/popular_post.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//move comment fields
function appos_move_comment( $fields ) {
    $comment_field = $fields[ 'comment' ];
    unset( $fields[ 'comment' ] );
    $fields[ 'comment' ] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'appos_move_comment' );


add_filter('widget_title',function($widget_title){
	if(empty($widget_title)){
		return ' ';
	} else {
		return $widget_title;
	}
});

add_editor_style( array( 'assets/css/editor-style.css', appos_fonts_url() ) );



function appos_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'appos_excerpt_more');



/**
 * Register custom fonts.
 */
function appos_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'appos' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}





if ( ! function_exists( 'appos_googlemap' ) ):
    function appos_googlemap() {
        $appos_google_api = cs_get_option('appos_google_api');         
  
  wp_enqueue_script( 'appos-gmap-js', 'https://maps.googleapis.com/maps/api/js?key='.$appos_google_api ,array('jquery'), '', true );
	wp_enqueue_script( 'appos-google-map', get_template_directory_uri() . '/assets/js/map.js', array('jquery'), '', true );
    }
endif;

if (function_exists('cs_get_option')):
    add_action( 'wp_enqueue_scripts', 'appos_googlemap',90 );
endif;


add_filter('use_block_editor_for_post', '__return_false', 10);


