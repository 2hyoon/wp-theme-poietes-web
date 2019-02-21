<?php

if (!function_exists('poietes_register_styles')) {
    function poietes_register_styles()
    {
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/app.css');
    }
}

add_action('wp_enqueue_scripts', 'poietes_register_styles');
