<?php
if (!function_exists('poietes_add_theme_supports')) {
    function poietes_add_theme_supports()
    {
        add_theme_support('custom-logo');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support(
            'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
}

add_action('after_setup_theme', 'poietes_add_theme_supports');
