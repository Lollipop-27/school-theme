<?php
// Enqueue CSS files
function schoolsite_enqueue_styles() {
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    // Theme stylesheet (style.css)
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'schoolsite_enqueue_styles');

// Basic theme setup
function schoolsite_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'schoolsite'),
        'footer-menu' => __('Footer Menu', 'schoolsite')
    ));
}
add_action('after_setup_theme', 'schoolsite_theme_setup');
