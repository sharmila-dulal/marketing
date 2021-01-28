<?php
/**
 * marketing functions and definitions
 *
 * @package marketing
 */

if ( ! function_exists( 'marketing_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marketing_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on marketing, use a find and replace
	 * to change 'marketing' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'marketing', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'marketing' ),
		'footer' => __( 'Footer Menu', 'marketing' ),
	) );
	


	/* -------------------------------------------------------------- 
 	Require the framework
-------------------------------------------------------------- */
if (!isset( $redux_demo)) {
require_once( dirname( __FILE__ ) . '/theme-config.php');

}

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'marketing_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // marketing_setup
add_action( 'after_setup_theme', 'marketing_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marketing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marketing_content_width', 640 );
}
add_action( 'after_setup_theme', 'marketing_content_width', 0 );



/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support( 'post-thumbnails' );
add_image_size('marketing-mid', 380, 250, true);




/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function marketing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marketing' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar(
       array(
		  'name' => __( 'Right','marketing' ),
		  'id' => 'right',
		  'description' => __( 'Widgets in this area will be shown before Footer.' , 'flat'),
		  'before_title' => '<h3>',
		  'after_title' => '</h3>',
		  'before_widget' => '<div class="col-sm-4 col-sm-push-8">',
		  'after_widget' => '</div>'
		  )
    );
  register_sidebar(array(
    'name' => 'Footer Recent Post',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="widget-title" itemprop="name">',
    'after_title' => '</h2>',
  ));
	
  register_sidebar(array(
    'name' => 'Footer Categories',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2 class="widget-title" itemprop="name">',
    'after_title' => '</h2>',
  ));	
   register_sidebar(array(
    'name' => 'Footer Social Icon',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
  )); 
     register_sidebar(array(
    'name' => 'Newsletter',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
  )); 

     register_sidebar(array(
    'name' => 'Footer One',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
  )); 
}
add_action( 'widgets_init', 'marketing_widgets_init' );



function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_category()){
      $query->set('posts_per_page', 3);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );


/*custom Services*/
function custom_service_post_type() {
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Service', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Service:', 'text_domain' ),
		'all_items'           => __( 'All Services', 'text_domain' ),
		'view_item'           => __( 'View Service', 'text_domain' ),
		'add_new_item'        => __( 'Add New Service', 'text_domain' ),
		'add_new'             => __( 'Add Service', 'text_domain' ),
		'edit_item'           => __( 'Edit Service', 'text_domain' ),
		'update_item'         => __( 'Update Service', 'text_domain' ),
		'search_items'        => __( 'Search Service', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Service', 'text_domain' ),
		'description'         => __( 'Service Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title','thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'service', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_service_post_type', 0 );

/*custom Features*/
function custom_feature_post_type() {
	$labels = array(
		'name'                => _x( 'Features', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Feature', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Feature', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Feature:', 'text_domain' ),
		'all_items'           => __( 'All Features', 'text_domain' ),
		'view_item'           => __( 'View Feature', 'text_domain' ),
		'add_new_item'        => __( 'Add New Feature', 'text_domain' ),
		'add_new'             => __( 'Add Feature', 'text_domain' ),
		'edit_item'           => __( 'Edit Feature', 'text_domain' ),
		'update_item'         => __( 'Update Feature', 'text_domain' ),
		'search_items'        => __( 'Search Feature', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Feature', 'text_domain' ),
		'description'         => __( 'Feature Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title','thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Feature', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_feature_post_type', 0 );

/*custom Banners*/
function custom_banner_post_type() {
	$labels = array(
		'name'                => _x( 'Banners', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Banner', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Banner:', 'text_domain' ),
		'all_items'           => __( 'All Banners', 'text_domain' ),
		'view_item'           => __( 'View Banner', 'text_domain' ),
		'add_new_item'        => __( 'Add New Banner', 'text_domain' ),
		'add_new'             => __( 'Add Banner', 'text_domain' ),
		'edit_item'           => __( 'Edit Banner', 'text_domain' ),
		'update_item'         => __( 'Update Banner', 'text_domain' ),
		'search_items'        => __( 'Search Banner', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Banner', 'text_domain' ),
		'description'         => __( 'Banner Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title','thumbnail','editor'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'banner', $args );
}
// Hook into the 'init' action
add_action( 'init', 'custom_banner_post_type', 0 );
