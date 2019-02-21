<?php

/** 
 * Enqueue Scripts
 */
require_once get_template_directory() . '/inc/fonts.php';
require_once get_template_directory() . '/inc/styles.php';
require_once get_template_directory() . '/inc/scripts.php';

/**
 * 
 */
require_once get_template_directory() . '/inc/navs.php';
require_once get_template_directory() . '/inc/admin.php';
require_once get_template_directory() . '/inc/supports.php';
// require_once get_template_directory() . '/inc/post-types.php';

/**
 * Image Size
 */
require_once get_template_directory() . '/inc/images.php';

/**
 * Functions for the Advanced Custom Fields Plugins
 * @link https://www.advancedcustomfields.com/
 */
require_once get_template_directory() . '/inc/acf.php';

?>
