<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
	wp_enqueue_script('require');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('require'), false, true);
	wp_enqueue_script('global');

	wp_register_script('bootstrap', get_bloginfo('template_url') . '/js/vendor/bootstrap/dist/bootstrap.min.js', array('require'), false, true);

	wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

/*
	wp_register_script('swiper', get_bloginfo('template_url') . '/js/vendor/Swiper/dist/js/swiper.jquery.min.js',false, true, true);
	wp_enqueue_script('swiper');

*/
	wp_enqueue_style('bootstrap', get_bloginfo('template_url') . '/js/vendor/bootstrap/dist/css/bootstrap.css');

	wp_enqueue_style('swiper', get_bloginfo('template_url') . '/js/vendor/Swiper/dist/css/swiper.css');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');

	wp_enqueue_style('animate', get_bloginfo('template_url') . '/js/vendor/animate.css/animate.css');

	wp_enqueue_style('fontawesome', get_bloginfo('template_url') . '/js/vendor/font-awesome/css/font-awesome.css');

	wp_enqueue_style('custom', get_bloginfo('template_url') . '/css/custom.css');





}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>

function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );


function offer_custom_init() {
$args = array(
'public' => true,
'label'  => 'Erbjudanden',
'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'sortiment' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
				'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type( 'sortiment', $args );
}
add_action( 'init', 'offer_custom_init' );
