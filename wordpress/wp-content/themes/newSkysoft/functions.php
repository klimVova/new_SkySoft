<?php


add_action('wp_enqueue_scripts', 'soft_scripts');
// add_action('after_setup_theme', 'soft_setup');


function soft_scripts()
{
    wp_enqueue_script('animate', _soft_assets_path('js/animate.js'), [], '1.0', true);
    wp_enqueue_script('converter', _soft_assets_path('js/converter.js'), [], '1.0', true);
    wp_enqueue_script('header', _soft_assets_path('js/header.js'), [], '1.0', true);
    wp_enqueue_script('validation', _soft_assets_path('js/validation.js'), [], '1.0', true);
    wp_enqueue_style('soft-style', _soft_assets_path('style/main.css'), [], '1.0', 'all');
}

// function dynevo_setup()
// {
//     register_nav_menu('menu-header', 'header menu');
//     register_nav_menu('menu-burger', 'mobile menu');
//     register_nav_menu('menu-home', 'home menu');

//     add_theme_support('custom-logo');
//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');
// }


function _soft_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

// acf_add_options_page(array(
//     'page_title'     => 'Theme General Settings',
//     'menu_title'    => 'Theme Settings',
//     'menu_slug'     => 'theme-general-settings',
//     'capability'    => 'edit_posts',
//     'redirect'        => false
// ));

// acf_add_options_sub_page(array(
//     'page_title'     => 'Theme Header Settings',
//     'menu_title'    => 'Header',
//     'parent_slug'    => 'theme-general-settings',
// ));

// acf_add_options_sub_page(array(
//     'page_title'     => 'Theme Footer Settings',
//     'menu_title'    => 'Footer',
//     'parent_slug'    => 'theme-general-settings',
// ));

// function add_class_li($classes, $item, $args)
// {
//     if (isset($args->li_class)) {
//         $classes[] = $args->li_class;
//     }
//     return $classes;
// }