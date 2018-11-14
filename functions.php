<?php

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function enqueue_style_after_wc(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'bxslider', get_stylesheet_uri() . '../../../../../node_modules/bxslider/dist/jquery.bxslider.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_style_after_wc', 20 );


function script_enqueue() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '../../../../node_modules/bxslider/dist/jquery.bxslider.min.js', array(), '20151215', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), '20151215', true );
}
add_action('wp_enqueue_scripts', 'script_enqueue');

function register_my_menu() {
    register_nav_menus(
    array(
        'headermenu' => __( 'headermenu' ),
        'headerperso' => __( 'headerperso' ),
        'categorymenu' => __( 'categorymenu' ),
        'footermenu' => __( 'footermenu' ),
    )
    );
}
add_action('init', 'register_my_menu');
