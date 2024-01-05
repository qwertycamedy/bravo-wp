<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('vendor', get_template_directory_uri() . '/assets/css/vendor.css', );
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', get_template_directory_uri() . '/assets/css/vendor.css');
}

function scripts_theme()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

?>