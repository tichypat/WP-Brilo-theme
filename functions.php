<?php   
//Load styles
function load_stylesheets() {	
	wp_enqueue_style( 'style', get_stylesheet_uri(), ["bootstrap"]);
    wp_register_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css" );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_style('AOS');

}
add_action ( 'wp_enqueue_scripts', 'load_stylesheets' );

//Load scripts
function load_scripts(){
	wp_register_script('popper',  get_template_directory_uri() . "/assets/js/popper.min.js", '', null, true);
    wp_enqueue_script('popper');
    
    wp_register_script('bootstrap',  get_template_directory_uri() . "/assets/js/bootstrap.min.js", '', null, true);
    wp_enqueue_script('bootstrap');

    wp_register_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', null, null, true );
    wp_enqueue_script('AOS');

    wp_register_script('scripts',  get_template_directory_uri() . "/assets/js/scripts.js", '', null, true);
    wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts', 'load_scripts');

//Include custom navwalker (needed for our navigation bar)
function load_bs5_nav_walker() {
    require_once('inc/bs5_nav_walker.php');
}
add_action('init', 'load_bs5_nav_walker');

//Adds support for title tag
add_theme_support( 'title-tag' );

//Adds thumbnail option for posts 
add_theme_support( 'post-thumbnails' );

//Adds "menus" sub-item in administration under "Appearance" item.
add_theme_support('menus'); 
register_nav_menus( //Adds menus
	array(
		'top-menu' => __('Top Menu', 'top-menu')
	)
);

//Create custom post types
function create_custom_post_types(){

    $portfolio_args = array(
        'labels'             =>  array(
            'name'               => 'Portfolio',
            'singular_name'      => 'Portfolio',
            'menu_name'          => 'Portfolio'
        ),
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
		'taxonomies'         => array('category'),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt' )
    );
    register_post_type('portfolio', $portfolio_args);

}
add_action('init','create_custom_post_types');


// Change default dots [...] after excerpt
function custom_excerpt_dots( $more ) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_dots');

?>