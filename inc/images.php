<?php
if (!function_exists('poietes_register_image_size')) {

    function poietes_register_image_size()
    {
        // 3:2 ratio, hard crop
        // add_image_size('h-sm', 600, 400, true);
        add_image_size('h-md', 1050, 700, true);
        add_image_size('h-lg', 1800, 1200, true);
        add_image_size('h-xlg', 2400, 1600, true);

        // soft crop
        // add_image_size('soft-md', 800, 9999, false);
        // add_image_size('soft-xlg', 1800, 9999, false);
    }
}
add_action('after_setup_theme', 'poietes_register_image_size');

// remove max width 1600
function remove_max_srcset_image_width( $max_width ) {
  return false;
}
add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );
