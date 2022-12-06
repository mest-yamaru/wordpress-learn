<?php

function yurufuwari_theme_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'yurufuwari_theme_setup');

function yurufuwari_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c',
        array(),
        '1.0.0'
    );
    // wp_enqueue_style(
    //     'reset-css',
    //     get_template_directory_uri() . '/assets/css/reset.css',
    //     array(),
    //     '1.0.0'
    // );
    // wp_enqueue_style(
    //     'index-css',
    //     get_template_directory_uri() . '/assets/css/index.css',
    //     array('reset-css'),
    //     '1.0.0'
    // );
}
add_action('wp_enqueue_scripts', 'yurufuwari_enqueue_scripts');

