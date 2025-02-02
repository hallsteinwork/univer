<?php
// functions.php

function my_theme_enqueue_styles() {
    // Підтримка мови
    load_theme_textdomain('mytheme', get_template_directory() . '/languages');

    function my_lab_theme_enqueue_styles() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'my_lab_theme_enqueue_styles');
    
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles'); 
?>