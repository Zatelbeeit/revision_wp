<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css' );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/node_modules/popper.js/dist/popper.js', array( 'jquery' ), null, true  );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
}


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter un menu
add_theme_support( 'menus');

    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    register_nav_menu('my-footer-menu',__( 'My Footer Menu' ));
 