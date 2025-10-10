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
add_action( 'init', 'schoolsite_register_custom_post_types' );

// Register custom post types
// require get_theme_file_path() . '/mindset-blocks/mindset-blocks.php';
require get_theme_file_path() . '/inc/cpt-and-taxonomies.php';
