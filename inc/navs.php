<?php
if (!function_exists('poietes_register_navigations')) {
    function poietes_register_navigations()
    {
        register_nav_menus(
            array(
                'primary' => __('Primary Navigation', 'poietes'),
                'footer' => __('Footer Navigation', 'poietes'),
            )
        );
    }
}
add_action('after_setup_theme', 'poietes_register_navigations');
