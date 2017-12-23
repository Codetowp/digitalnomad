<?php
/**
 * Digital Nomad functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digital_Nomad
 */
function digitalnomad_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'digitalnomad_custom_excerpt_length', 999 );
if ( ! function_exists( 'digitalnomad_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function digitalnomad_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Digital Nomad, use a find and replace
		 * to change 'digitalnomad' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'digitalnomad', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'digitalnomad' ),
		) );
        register_nav_menus( array(
			'footer-menu' => esc_html__( 'Footer', 'digitalnomad' ),
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
		add_theme_support( 'custom-background', apply_filters( 'digitalnomad_custom_background_args', array(
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
add_action( 'after_setup_theme', 'digitalnomad_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digitalnomad_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'digitalnomad_content_width', 640 );
}
add_action( 'after_setup_theme', 'digitalnomad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function digitalnomad_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'digitalnomad' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'digitalnomad' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
   register_sidebar( array(
        'name'          => esc_html__( 'Social', 'digitalnomad' ),
        'id'            => 'social',
        'description'   => esc_html__( 'Add widgets here.', 'digitalnomad' ),
        'before_widget' => '<ul>',
        'after_widget'  => '</ul>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    require get_template_directory() . '/inc/widget/social.php';  
}
add_action( 'widgets_init', 'digitalnomad_widgets_init' );
//recent post widget
require get_template_directory() . '/inc/widget/recentpost.php';
require get_template_directory() . '/inc/lib/related-post.php';
require get_template_directory() . '/inc/lib/print_styles.php';
require get_template_directory() . '/inc/customizer-library.php';



global $site_layout;
$site_layout = array('side-pull-left' => esc_html__('Right Sidebar', 'digitalnomad'),'side-pull-right' => esc_html__('Left Sidebar', 'digitalnomad'),'no-sidebar' => esc_html__('No Sidebar', 'digitalnomad'),'full-width' => esc_html__('Full Width', 'digitalnomad'));


/**
 * Enqueue scripts and styles.
 */
function digitalnomad_styles() 
{
    wp_enqueue_style( 'digitalnomad-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_style( 'digitalnomad-font-awesome',get_template_directory_uri().'/assets/css/font-awesome.css');
    wp_enqueue_style( 'digitalnomad-owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style( 'digitalnomad-owl-theme',get_template_directory_uri().'/assets/css/owl.theme.css');
    wp_enqueue_style( 'digitalnomad-animate',get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'digitalnomad-stylesheet',get_template_directory_uri().'/assets/css/lity.css');
    wp_enqueue_style( 'digitalnomad-googleapis', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Open+Sans:300,400,600,700,800|Lato:300,400|Crimson+Text:400,400i,600');
    
        
  }
add_action( 'wp_enqueue_scripts', 'digitalnomad_styles' );

function digitalnomad_scripts() {

    wp_enqueue_script( 'jquery' ); 

    wp_enqueue_script( 'digitalnomad-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-SmoothScroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-lity', get_template_directory_uri() . '/assets/js/lity.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-jquery-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

    wp_enqueue_script( 'digitalnomad-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );

	wp_enqueue_style( 'digitalnomad-style', get_stylesheet_uri() );

	wp_enqueue_script( 'digitalnomad-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'digitalnomad-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  
    
}
add_action( 'wp_enqueue_scripts', 'digitalnomad_scripts' );

/* Globals variables */
global $options_categories;
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
       $options_categories[$category->cat_ID] = $category->cat_name;
	}
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

add_image_size( 'digitalnomad_slider', 752, 500,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_half_banner', 1920, 560,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_full_banner', 1920, 1000,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_post_preview', 360, 278,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_related_posts', 285, 220,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_recent_posts', 58, 58,  array( 'top', 'center' ) );
add_image_size( 'digitalnomad_single_product', 360, 460,  array( 'top', 'center' ) );

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function demo_fonts() {
	// Font options
	$fonts = array(
		get_theme_mod( 'digitalnomad_paragraph_font', customizer_library_get_default( 'primary-font' ) ),
		get_theme_mod( 'digitalnomad_heading_font_family', customizer_library_get_default( 'secondary-font' ) ),
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'demo_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'demo_fonts' );