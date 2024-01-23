<?php
/**
 * Edutechstar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Edutechstar
 */

/**
 * Theme Setup .
 */
require get_template_directory() . '/inc/theme-setup.php';
/**
 * Custom header.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/upgrade-to-pro/class-customize.php';

/*
* Adds starter content to highlight the theme on fresh sites.
* This is done conditionally to avoid loading the starter content on every
* page load, as it is a one-off operation only needed once in the customizer.
*/
if ( is_customize_preview() ) {
    require get_template_directory() . '/starter-content/starter-content.php';
    add_theme_support( 'starter-content', edutechstar_starter_content() );
}