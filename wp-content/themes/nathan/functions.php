<?php

function loadStyleSheets() {
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_register_style('style-mobile', get_template_directory_uri() . '/style.css', array(), false, 'max-width: 768px');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'loadStyleSheets');

function include_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery3.5.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadJavaScript() {
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'loadJavaScript');

