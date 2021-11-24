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
add_theme_support('post-formats', array('video', 'image'));
}
add_action( 'after_setup_theme', 'dkwp_config', 0 );

// register sidebar
add_action( 'widgets_init', 'dkwp_sidebars');
function dkwp_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'This is the Home Page Sidebar to place widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'This is the Blog Sidebar to place widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

}
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}
add_action('init', 'myStartSession', 1);



