<?php
/**
 * wooPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wooPress
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function woopress_setup() {
	/*
	* Make theme available for translation.
	*/
	load_theme_textdomain( 'woopress', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Let WordPress manage the document title.
	*/
	add_theme_support( 'title-tag' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu' => esc_html__( 'Primary', 'woopress' ),
		)
	);

	/*
	* Switch default core markup for search form, comment form, and comments
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
			'woopress_custom_background_args',
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

    // Add theme support for woocommerce
	//add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'woopress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function woopress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woopress_content_width', 640 );
}
add_action( 'after_setup_theme', 'woopress_content_width', 0 );

/**
 * Register widget area.
 */
function woopress_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'woopress' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'woopress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

   // shop sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Shop Sidebar', 'woopress' ),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'woopress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'woopress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function woopress_scripts_loading() {
	wp_enqueue_style( 'woopress-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'bicon-style', get_template_directory_uri() . '/assets/vendor/bicon/css/bicon.css', array(), _S_VERSION, 'all' );
    wp_enqueue_style( 'woocommerce-layouts-style', get_template_directory_uri() . '/assets/css/woocommerce-layouts.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'google-fonts', get_template_directory_uri() . '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'popper-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/popper.min.js', array('jquery'), _S_VERSION, true );
	// wp_enqueue_script( 'google-map', get_template_directory_uri() . '/assets/vendor/google-map-init.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

	// wp_enqueue_script( 'flickr-fancybox-script', get_template_directory_uri() . '/assets/js/flickr-fancybox-script.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'jflickrfeed', get_template_directory_uri() . '/assets/js/jflickrfeed.min.js', array('jquery'), _S_VERSION, true );

   wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), _S_VERSION, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woopress_scripts_loading' );



/**
 * Load WooCommerce compatibility file.
 */
// if ( class_exists( 'WooCommerce' ) ) {
// 	require get_template_directory() . '/inc/woocommerce.php';
// }

// function gmap_shortcode_loading( $atts, $content = null ){
//   extract( shortcode_atts( array (
//          'foo'=>'100%',
//          'bar'=>'500',
//          'src'=>'',

//   ), $atts) );
//   return 'foo';
// }
// add_shortcode('google_map','gmap_shortcode_loading');


// function simpleshop_google_map($attributes){
//     $default = array(
//         'place'=>'Dhaka University',
//         'width'=>'100%',
//         'height'=>'500',
//         'zoom'=>'16'
//     );

//     $params = shortcode_atts($default,$attributes);

// $map = <<<EOD
// <div>
//     <div>
//         <iframe width="{$params['width']}" height="{$params['height']}"
//                 src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
//                 frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
//         </iframe>
//     </div>
// </div>
// EOD;

//     return $map;

// }
// add_shortcode('google_map','simpleshop_google_map');

// function my_custom_shortcode($atts,$content){ 
//    $d =  array(
//      'font-size'=>'50px',
//      'font-weight'=>'700',
//      'color'=>'black',
//    );

// $params = shortcode_atts( $d,$atts );
// $mytext  = '<h1 style="font-size:' . esc_html( $params['font-size'] ) .'; font-weight:'.esc_html( $params['font-weight'] ).'">
//            '. $content .'</h1>';
// 	return $mytext;
// }
// add_shortcode('hello_mama','my_custom_shortcode');

function my_map_custom_shortcode($attributes){ 

    $default =  array(
      'width'=>'100%',
      'height'=>'500',
      'zoom'=>'16',
      'place'=>'Dhaka University',
    );

    $map = shortcode_atts( $default, $attributes );

    $gMap = <<<EOD
    <iframe width="{$map['width']}" height="{$map['height']}"
    src="https://maps.google.com/maps?q={$map['place']}&t=&z={$map['zoom']}&ie=UTF8&iwloc=&output=embed"
    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
    EOD;

    return $gMap;

    }
    add_shortcode('google_map','my_map_custom_shortcode');


// modify category count number //

function modify_category_count_num($catCountNum){
	if( get_theme_mod('show_hide_cat_count_number') !='1' ){
		return " ";
	}
	return $catCountNum;
}
add_filter('woocommerce_subcategory_count_html','modify_category_count_num');

// if( get_theme_mod('show_hide_cat_count_number') !='1' ){
//    add_filter('woocommerce_subcategory_count_html','modify_category_count_num');
// }
// 

add_filter('wp_calculate_image_sizes','__return_empty_array');
add_filter('wp_calculate_image_srcset','__return_empty_array');
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
// remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);

add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_add_to_cart',10);

// add icon in 'add to cart button' //
function simpleshop_product_add_to_cart_text( $text ){
   return '<i class="fa fa-shopping-basket"></i>';
}
add_filter('woocommerce_product_add_to_cart_text','simpleshop_product_add_to_cart_text');


// add '<div class="product-wrap">' in item //
function simpleshop_before_shop_loop_item(){
	echo '<div class="product-wrap">';
}
add_action('woocommerce_before_shop_loop_item','simpleshop_before_shop_loop_item');


// add before title '<div class="woocommerce-product-title-wrap">' //
function simpleshop_before_shop_loop_item_title(){
	echo '</div><div class="woocommerce-product-title-wrap">';
}
add_action('woocommerce_before_shop_loop_item_title','simpleshop_before_shop_loop_item_title');


// add 'wishlist icon' //
function  simpleshop_after_shop_loop_item_title(){
   echo '<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a></div>';
}
add_action('woocommerce_after_shop_loop_item_title','simpleshop_after_shop_loop_item_title');


// add 'sale' //
add_action('woocommerce_after_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',11);


// add 'price' //
add_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_price');


// modify single product
// add single  product title
function woocommerce_template_single_title(){
 	echo '<h1 class=product_title entry-title">'. get_the_title() .'</h1>';
}
add_action('woocommerce_single_product_summary','woocommerce_template_single_title',1);

remove_action('woocommerce_before_cart_table','simpleshop_before_cart_table');




// Theme File Include //
if(class_exists('Redux')){
	include ( get_template_directory() . '/inc/element-css-with-customizer.php' );
}


include ( get_template_directory() . '/inc/redux-theme-option.php' );
include ( get_template_directory() . '/inc/customizer/kirki-fw.php');

