<?php
function theme_flueflo_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'theme_flueflo-style', get_template_directory_uri() . '/style.css', array("theme_flueflo-bootstrap"), $version, 'all' );
    wp_enqueue_style( 'theme_flueflo-owlcarousel', get_template_directory_uri() . "/assets/lib/owlcarousel/assets/owl.carousel.min.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'theme_flueflo-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", array(), '6.5.1', 'all' );
    wp_enqueue_style( 'theme_flueflo-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_flueflo_register_styles');

function theme_flueflo_register_scripts(){
    wp_enqueue_script('theme_flueflo-jquery', 'https://code.jquery.com/jquery-3.7.1.slim.js', array(), '3.7.1', true);
    wp_enqueue_script('theme_flueflo-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2');
    wp_enqueue_script('theme_flueflo-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array(), '1.0', true);
    wp_enqueue_script('theme_flueflo-waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array(), '1.0', true);
    wp_enqueue_script('theme_flueflo-counterup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js', array(), '1.0', true);
    wp_enqueue_script('theme_flueflo-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script('theme_flueflo-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'theme_flueflo_register_scripts');

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

function theme_flueflo_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support( 'widgets-block-editor' );
}

add_action('after_setup_theme', 'theme_flueflo_features');

?>