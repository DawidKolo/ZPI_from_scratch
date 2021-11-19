<?php

function load_scripts(){
    wp_enqueue_script( 'bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true );
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'load_scripts');


// Main config function
function dkwp_config(){

    // Registering the menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer'
        )
    );


$args = array(
    
    'width' => 1920,
    'heigth' => 230
);
add_theme_support('custom-header', $args);
add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'dkwp_config', 0 );

