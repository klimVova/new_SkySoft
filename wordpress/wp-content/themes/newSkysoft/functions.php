<?php


add_action('wp_enqueue_scripts', 'soft_scripts');
add_action('after_setup_theme', 'soft_setup');
add_action('widgets_init', 'soft_register');

function soft_scripts()
{
    wp_enqueue_script('animate', _soft_assets_path('js/animate.js'), [], '1.0', true);
    wp_enqueue_script('converter', _soft_assets_path('js/converter.js'), [], '1.0', true);
    wp_enqueue_script('header', _soft_assets_path('js/header.js'), [], '1.0', true);
    wp_enqueue_script('validation', _soft_assets_path('js/validation.js'), [], '1.0', true);
    wp_enqueue_style('soft-style', _soft_assets_path('style/main.css'), [], '1.0', 'all');
}

function soft_setup()
{
    register_nav_menu('menu-header', 'header menu');
    register_nav_menu('menu-about', 'about  menu');
    register_nav_menu('menu-burger', 'mobile menu');

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


function _soft_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
add_filter('nav_menu_css_class', 'add_class_li', 10, 3);


function add_class_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}

function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}

function soft_register()
{
    register_sidebar([
        'name' => 'Cайдбар для about',
        'id' => 'soft_about',
        'before_widget' => '<p>',
        'after_widget' => '</p>'
    ]);
    register_sidebar([
        'name' => 'Сайдбар для переключения rus',
        'id' => 'soft-lang-rus',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайдбар для переключения eng',
        'id' => 'soft-lang-eng',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайдбар для email header',
        'id' => 'soft_email-header',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайдбар для phone header',
        'id' => 'soft_phone-header',
        'before_widget' => null,
        'after_widget' => null
    ]);
     register_sidebar([
        'name' => 'Сайдбар для menu about',
        'id' => 'soft_menu-about',
        'before_widget' => null,
        'after_widget' => null
    ]);
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