<?php
// Enqueue CSS files
function schoolsite_enqueue_styles() {
    // 1. Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    // 2. Main CSS
    // wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

    // 3. Theme stylesheet (optional)
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'schoolsite_enqueue_styles');

// Basic theme setup
function schoolsite_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'schoolsite'),
        'footer-menu' => __('Footer Menu', 'schoolsite')
    ));
}
add_action('after_setup_theme', 'schoolsite_theme_setup');

// New image sizes
function schoolsite_setup() {
    // Load style.css on the backend
	add_editor_style( get_stylesheet_uri() );

    // Crop images to 400px by 600px
    add_image_size( '400x600', 400, 600, true );

    // Crop images to 300px by 500px
    add_image_size( '300x500', 300, 500, true );
}
add_action( 'after_setup_theme', 'schoolsite_setup' );

// Make custom sizes selectable from WordPress admin
function schoolsite_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x600' => __( '400x600', 'schoolsite-theme' ),
		'300x500' => __( '300x500', 'schoolsite-theme' )
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'schoolsite_add_custom_image_sizes' );

// Register Custom Post Types
require get_theme_file_path() . '/inc/cpt-and-taxonomies.php';

// CDN lightGallery
function schoolsite_enqueue_lightgallery() {
    // Only load on the front page
    if ( is_front_page() ) {

        // Enqueue lightGallery CSS
        wp_enqueue_style(
            'lightgallery-css',
            'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css',
            array(),
            '2.7.2'
        );

        // Enqueue lightGallery JS
        wp_enqueue_script(
            'lightgallery-js',
            'https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.umd.min.js',
            array('jquery'),
            '2.7.2',
            true
        );

        // Enqueue your custom settings file
        wp_enqueue_script(
            'lightgallery-init',
            get_template_directory_uri() . '/assets/js/lightgallery-init.js',
            array('lightgallery-js'),
            '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'schoolsite_enqueue_lightgallery' );

