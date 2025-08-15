
<?php
// functions.php
function simple_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    // Register navigation menu
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');

// Enqueue styles
function simple_theme_styles() {
    wp_enqueue_style('simple-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'simple_theme_styles');

// Custom excerpt length
function simple_theme_excerpt_length($length) {
    return 20; // word count
}
add_filter('excerpt_length', 'simple_theme_excerpt_length');

// Clean up WordPress head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
?>