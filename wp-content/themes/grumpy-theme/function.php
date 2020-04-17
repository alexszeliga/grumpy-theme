<?php


function theme_stylesheet() {
    if (!is_admin()) {
        wp_register_style('theme-stylesheet', get_stylesheet_uri());
        wp_enqueue_style('theme-stylesheet');
    }
}

add_action( 'wp_enqueue_scripts', 'theme_stylesheet' ); // Add Theme Stylesheet
