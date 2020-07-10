<?php

/* Add custom CSS and JS - functions.php */
/* Adiciona CSS e JS personalizados - functions.php */
add_action( 'wp_enqueue_scripts', theme_enqueue_styles, 99 );
function theme_enqueue_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri() . '/css/custom-css.css', array(), '', 'all');
    wp_enqueue_script('custom-script', get_stylesheet_uri() . '/js/custom-js.js', array( 'jquery' ), '');
}


/* Add custom CSS and JS on child theme - functions.php */
/* Adiciona CSS e JS personalizados no tema filho - functions.php */
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 99 );
function child_theme_enqueue_styles() {    
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-css.css', array(), '', 'all');
    // or / ou
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-css.css', array( 'parent-style' ), '', 'all');
    
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom-js.js', array( 'jquery' ), '');
}


/* Add custom CSS to WordPress admin area - functions.php */
/* Adiciona CSS personalizado na área de administração do WordPress - functions.php */
function enqueue_custom_admin_style() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-admin.css', '', 'all');
}
add_action( 'admin_enqueue_scripts', 'enqueue_custom_admin_style', 99 );
