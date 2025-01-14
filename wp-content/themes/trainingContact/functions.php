<?php
function add_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

function Jeb_theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'Jeb_theme_enqueue_styles');
