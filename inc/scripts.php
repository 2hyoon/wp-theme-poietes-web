<?php

if (!function_exists('poietes_register_scripts')) {
    function poietes_register_scripts()
    {
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/js/app.js', array('jquery'), null, true);
    }
}

add_action('wp_enqueue_scripts', 'poietes_register_scripts');
