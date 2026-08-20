<?php

function ankizy_generation_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => 'Menu principal',
        )
    );

}

add_action(
    'after_setup_theme',
    'ankizy_generation_setup'
);


function ankizy_generation_enqueue_assets() {

    wp_enqueue_style(
        'ankizy-style',
        get_stylesheet_uri()
    );

}

add_action(
    'wp_enqueue_scripts',
    'ankizy_generation_enqueue_assets'
);