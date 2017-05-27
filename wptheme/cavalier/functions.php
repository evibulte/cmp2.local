<?php

function add_theme_scripts() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 wp_nav_menu(
  array(
    'menu' => 'primary',
    // do not fall back to first non-empty menu
    'theme_location' => '__no_such_location',
    // do not fall back to wp_page_menu()
    'fallback_cb' => false
  )
);

# …

//CUSTOM POST TYPE PRODUCTEN
function add_custom_posttype_product(){
		$labels = array(
		'name' => 'product', 'post type general name',
		'singular_name' => 'product', 'post type singular name',
		'add_new_item' => 'Nieuw product toevoegen',
		'add_new' => 'Nieuw',
		'edit_item' => 'Edit product',
	);

	$args = array(
		'label' => 'Product',
		'description' => 'Alle producten kan je hier vinden.',
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-store', 
		'supports' => array('title', 'editor', 'thumbnail'),
	);
	register_post_type('product', $args);
}
add_action('init','add_custom_posttype_product');

//TAXONOMY CHOCOLADESOORTEN
function my_taxonomy_chocoladesoorten(){
	$labels = array(
		'name' => 'Chocoladesoorten',
		'singular_name' => 'Chocoladesoort',
		'add_new_item' => 'Nieuwe chocoladesoort toevoegen',
		'add_new' => 'Nieuw',
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy('chocoladesoorten', 'product', $args);
}
add_action('init','my_taxonomy_chocoladesoorten');

//METABOX PRODUCTEN
function my_metabox_chocoladesoorten(){
	add_meta_box(
		'metabox_chocoladesoorten', 
		'Chocoladesoorten', 
		'content_my_metabox_chocoladesoorten', 
		'product', 
		'side', 
		'high');
}
add_action( 'add_meta_boxes', 'my_metabox_chocoladesoorten');

//CUSTOM POST TYPE BLOG
function add_custom_posttype_blogposts(){
		$labels = array(
		'name' => 'blogposts', 'post type general name',
		'singular_name' => 'blogpost', 'post type singular name',
		'add_new_item' => 'Nieuwe post toevoegen',
		'add_new' => 'Nieuw',
		'edit_item' => 'Edit post',
	);

	$args = array(
		'label' => 'blogposts',
		'description' => 'Hier geven we updates over Cavalier!',
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-sticky', 
	);
	register_post_type('blogposts', $args);
}
add_action('init','add_custom_posttype_blogposts');

//CUSTOM LOGO
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 200,
        'width'       => 440,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//CUSTOM THEME 
function themename_custom_header_setup() {
    $args = array(
		'default-image'      => get_template_directory_uri() . '/images/default-header.jpg',
        'default-text-color' => '000',
        'width'              => 1920,
        'height'             => 200,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

//FEATURE IMAGE
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 500);


function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Hoofd Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<nav class="side-nav" role="navigation"><div class="navbar-collapse sidenavigation">',
            'after_widget'  => '</div></nav>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'menu_class' => 'nav navbar-nav',
            'container_class' => 'navbar-collapse collapse',
            'container-id' => 'navbar-collapse',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
	register_sidebar(
		array(
            'id'            => 'footer-sidebar',
            'name'          => __( 'Social Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<nav class="footer-nav" role="navigation"><div class="navbar-collapse sidenavigation footernavigation">',
            'after_widget'  => '</div></nav>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'menu_class' => 'nav navbar-nav',
            'container_class' => 'navbar-collapse collapse',
            'container-id' => 'navbar-collapse',
        )
	);
		register_sidebar(
		array(
            'id'            => 'secundairy-sidebar',
            'name'          => __( 'Wedstrijd Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<nav class="side-nav" role="navigation"><div class="navbar-collapse sidenavigation">',
            'after_widget'  => '</div></nav>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'menu_class' => 'nav navbar-nav',
            'container_class' => 'navbar-collapse collapse',
            'container-id' => 'navbar-collapse',
        )
	);
	register_sidebar(
		array(
            'id'            => 'producten-sidebar',
            'name'          => __( 'Producten Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div class="productenblok">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'menu_class' => 'nav navbar-nav',
            'container_class' => 'navbar-collapse collapse',
            'container-id' => 'navbar-collapse',
        )
	);
    	register_sidebar(
		array(
            'id'            => 'socialmedia-sidebar',
            'name'          => __( 'Socialupdates Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div class="productenblok">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'menu_class' => 'nav navbar-nav',
            'container_class' => 'navbar-collapse collapse',
            'container-id' => 'navbar-collapse',
        )
	);
}
add_action( 'widgets_init', 'register_sidebar_locations' );

?>
