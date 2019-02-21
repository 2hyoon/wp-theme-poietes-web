<?php
if (!function_exists('poietes_register_book_post_type')) {
    function poietes_register_book_post_type()
    {
        register_post_type(
            'book', array(
                'public' => true,
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
                'description' => __('Collection of books.', 'poietes'),
                'labels' => array(
                    'name' => _x('Books', 'post type general name', 'poietes'),
                    'singular_name' => _x('Book', 'post type singular name', 'poietes'),
                    'menu_name' => _x('Books', 'admin menu', 'poietes'),
                    'name_admin_bar' => _x('Book', 'add new on admin bar', 'poietes'),
                    'add_new' => _x('Add New', 'book', 'poietes'),
                    'add_new_item' => __('Add New Book', 'poietes'),
                    'new_item' => __('New Book', 'poietes'),
                    'edit_item' => __('Edit Book', 'poietes'),
                    'view_item' => __('View Book', 'poietes'),
                    'all_items' => __('All Books', 'poietes'),
                    'search_items' => __('Search Books', 'poietes'),
                    'parent_item_colon' => __('Parent Books: ', 'poietes'),
                    'not_found' => __('No books found.', 'poietes'),
                    'not_found_in_trash' => __('No books found in Trash.', 'poietes'),
                ),
            )
        );
    }
}
add_action('init', 'poietes_register_book_post_type');
