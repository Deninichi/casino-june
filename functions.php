<?php 

function bear_enqueue_scripts() {
  
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Muli:400,600,800|Poppins:400,700', array(), '' );
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '5.4.1', 'all' );
	wp_enqueue_style('bear-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3' );
  wp_enqueue_style('bear-style-main', get_template_directory_uri() . '/dist/css/main.css', array(), '4.1.3' );
 	wp_enqueue_style('bear-style', get_stylesheet_uri(), array(), '_bld_1557505850790' );

	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );
	
  //wp_enqueue_script('bear-script-build', get_template_directory_uri() . '/dist/js/build.js', array('jquery'), '_bld_1557505850790', true );
  wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '_bld_1557505850790', true );
  wp_enqueue_script('bear-script', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), '_bld_1557505850790', true );

  wp_localize_script( 'bear-script', 'bear', 
    array(
      'ajax' => admin_url('admin-ajax.php')
    )
  ); 
 
}
add_action( 'wp_enqueue_scripts', 'bear_enqueue_scripts', 90 );


/**
 * Theme Setup
 */
function bear_theme_setup(){
	
  register_nav_menus( array(
		'primary_menu' => 'Primary Menu',
	) );

  load_theme_textdomain( 'bear', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  // Add support for post thumbnails.
  add_theme_support( 'post-thumbnails' );

  // Add support for avatar image size in posts.
  add_image_size( 'avatar', 240, 285, true );
  add_image_size( 'avatar-list', 210, 250, true );
  add_image_size( 'listbox400', 300, 400, true );
  add_image_size( 'square', 515, 280, true );

};
add_action('after_setup_theme', 'bear_theme_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bear_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Primary sidebar', 'bear' ),
    'id'            => 'primary-sidebar',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer sidebar 1', 'bear' ),
    'id'            => 'footer-sidebar-1',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer sidebar 2', 'bear' ),
    'id'            => 'footer-sidebar-2',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer sidebar 3', 'bear' ),
    'id'            => 'footer-sidebar-3',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer sidebar 4', 'bear' ),
    'id'            => 'footer-sidebar-4',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );
  
  register_sidebar( array(
    'name'          => __( 'Footer sidebar 5', 'bear' ),
    'id'            => 'footer-sidebar-5',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer sidebar 6', 'bear' ),
    'id'            => 'footer-sidebar-6',
    'description'   => __( 'Add widgets here.', 'bear' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );
}
add_action( 'widgets_init', 'bear_widgets_init' );



function bear_redirects() {

  // Redirect from author and category pages to home
  if ( is_author() ) {
     wp_redirect( home_url() );
     exit();
  }

}
add_action( 'template_redirect', 'bear_redirects' );



function strip_comment_links($content) {
    global $allowedtags;
    
    $tags = $allowedtags;
    unset($tags['a']);
    $content = addslashes(wp_kses(stripslashes($content), $tags));
    return $content;
}
add_filter('pre_comment_content', 'strip_comment_links');