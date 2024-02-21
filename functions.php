<?php

/**
 * Theme Functions.
 * 
 * @package haste
 */

if (!defined('HASTE_DIR_PATH')) {
    define('HASTE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('HASTE_DIR_URI')) {
    define('HASTE_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once HASTE_DIR_PATH . '/inc/helpers/autoloader.php';


function advanced_get_theme_instance()
{

    \HASTE\Inc\HASTE_Theme::get_instance();
}

function speed_register_custom_menu()
{
    register_nav_menu('main-navigation', 'Main Navigation');
}

add_action('after_setup_theme', 'speed_register_custom_menu');

advanced_get_theme_instance();


function usun_styl_admin_bar() {
    add_filter('show_admin_bar', '__return_false');
}

add_action('init', 'usun_styl_admin_bar');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}          




