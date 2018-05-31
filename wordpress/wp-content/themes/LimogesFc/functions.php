<?php

function theme_scripts(){

    global $wp_scripts;

    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairies/bootstrap/js/bootstrap.bundle.min.js', null, true );
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/librairies/jquery/jquery.min.js', null, true );
    wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');

}

add_action( 'wp_enqueue_scripts', 'theme_scripts');

function theme_styles(){

wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairies/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
wp_enqueue_style( 'bootstrap_file', get_stylesheet_directory_uri() . '/librairies/bootstrap/css/bootstrap.min.css' );
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

?>
