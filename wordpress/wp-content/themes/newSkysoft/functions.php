<?php

add_action('wp_enqueue_scripts', 'soft_scripts');
add_action('after_setup_theme', 'soft_setup');
add_action('widgets_init', 'soft_register');
add_action('init', 'custom_post_type_news', 0);
add_action('init', 'custom_post_type_portfolio', 0);
add_action('init', 'custom_post_type_blog', 0);
add_action('init', 'custom_post_type_media', 0);


add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
add_filter('nav_menu_css_class', 'add_class_li', 10, 3);


function soft_scripts()
{
    wp_enqueue_script('animate', _soft_assets_path('js/animate.js'), [], '1.0', true);
    wp_enqueue_script('converter', _soft_assets_path('js/converter.js'), [], '1.0', true);
    wp_enqueue_script('header', _soft_assets_path('js/header.js'), [], '1.0', true);
    wp_enqueue_script('validation', _soft_assets_path('js/validation.js'), [], '1.0', true);
    wp_enqueue_script('news', _soft_assets_path('js/news.js'), [], '1.0', true);
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




acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
));


acf_add_options_sub_page(array(
    'page_title' => 'Theme Footer Settings',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
));

function custom_post_type_news()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Новости', 'Post Type General Name', 'twentythirteen'),
        'singular_name' => _x('Новости', 'Post Type Singular Name', 'twentythirteen'),
        'menu_name' => __('Новости', 'twentythirteen'),
        'parent_item_colon' => __('Новости', 'twentythirteen'),
        'all_items' => __('Все новости', 'twentythirteen'),
        'view_item' => __('Просмотреть новость', 'twentythirteen'),
        'add_new_item' => __('Новая новость', 'twentythirteen'),
        'add_new' => __('Добавить новость', 'twentythirteen'),
        'edit_item' => __('Редактировать новость', 'twentythirteen'),
        'update_item' => __('Обновить новость', 'twentythirteen'),
        'search_items' => __('Найти новость', 'twentythirteen'),
        'not_found' => __('Not Found', 'twentythirteen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentythirteen'),
    );
    // Set other options for Custom Post Type
    $args = array(
        'label' => __('news', 'twentythirteen'),
        'description' => __('новость news and reviews', 'twentythirteen'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-cover-image',

        // This is where we add taxonomies to our CPT
        'taxonomies' => array('category'),
    );
    // Registering your Custom Post Type
    register_post_type('news', $args);
}

function custom_post_type_portfolio()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Портфолио', 'Post Type General Name', 'twentythirteen'),
        'singular_name' => _x('Портфолио', 'Post Type Singular Name', 'twentythirteen'),
        'menu_name' => __('Портфолио', 'twentythirteen'),
        'parent_item_colon' => __('Портфолио', 'twentythirteen'),
        'all_items' => __('Все Портфолио', 'twentythirteen'),
        'view_item' => __('Просмотреть Портфолио', 'twentythirteen'),
        'add_new_item' => __('Новое Портфолио', 'twentythirteen'),
        'add_new' => __('Добавить Портфолио', 'twentythirteen'),
        'edit_item' => __('Редактировать Портфолио', 'twentythirteen'),
        'update_item' => __('Обновить Портфолио', 'twentythirteen'),
        'search_items' => __('Найти Портфолио', 'twentythirteen'),
        'not_found' => __('Not Found', 'twentythirteen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentythirteen'),
    );
    // Set other options for Custom Post Type
    $args = array(
        'label' => __('news', 'twentythirteen'),
        'description' => __('портфолио and reviews', 'twentythirteen'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',

        // This is where we add taxonomies to our CPT
        'taxonomies' => array('category'),
    );
    // Registering your Custom Post Type
    register_post_type('portfolio', $args);
}

function custom_post_type_blog()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Блог', 'Post Type General Name', 'twentythirteen'),
        'singular_name' => _x('Блог', 'Post Type Singular Name', 'twentythirteen'),
        'menu_name' => __('Блог', 'twentythirteen'),
        'parent_item_colon' => __('Блог', 'twentythirteen'),
        'all_items' => __('Все статьи', 'twentythirteen'),
        'view_item' => __('Просмотреть статью', 'twentythirteen'),
        'add_new_item' => __('Новая статья', 'twentythirteen'),
        'add_new' => __('Добавить статью', 'twentythirteen'),
        'edit_item' => __('Редактировать статью', 'twentythirteen'),
        'update_item' => __('Обновить статью', 'twentythirteen'),
        'search_items' => __('Найти статью', 'twentythirteen'),
        'not_found' => __('Not Found', 'twentythirteen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentythirteen'),
    );
    // Set other options for Custom Post Type
    $args = array(
        'label' => __('news', 'twentythirteen'),
        'description' => __('блог and reviews', 'twentythirteen'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',

        // This is where we add taxonomies to our CPT
        'taxonomies' => array('category'),
    );
    // Registering your Custom Post Type
    register_post_type('blog', $args);
}

function custom_post_type_media()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Мы в СМИ', 'Post Type General Name', 'twentythirteen'),
        'singular_name' => _x('Мы в СМИ', 'Post Type Singular Name', 'twentythirteen'),
        'menu_name' => __('Мы в СМИ', 'twentythirteen'),
        'parent_item_colon' => __('Мы в СМИ', 'twentythirteen'),
        'all_items' => __('Все статьи', 'twentythirteen'),
        'view_item' => __('Просмотреть статью', 'twentythirteen'),
        'add_new_item' => __('Новая статья', 'twentythirteen'),
        'add_new' => __('Добавить статью', 'twentythirteen'),
        'edit_item' => __('Редактировать статью', 'twentythirteen'),
        'update_item' => __('Обновить статью', 'twentythirteen'),
        'search_items' => __('Найти статью', 'twentythirteen'),
        'not_found' => __('Not Found', 'twentythirteen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentythirteen'),
    );
    // Set other options for Custom Post Type
    $args = array(
        'label' => __('news', 'twentythirteen'),
        'description' => __('блог and reviews', 'twentythirteen'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-rss',

        // This is where we add taxonomies to our CPT
        'taxonomies' => array('category'),
    );
    // Registering your Custom Post Type
    register_post_type('media', $args);
}