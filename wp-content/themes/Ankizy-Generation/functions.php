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

    // CSS principal
    wp_enqueue_style(
        'ankizy-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Google Fonts
    wp_enqueue_style(
        'ankizy-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Nunito:wght@400;600;700;800&family=Poppins:wght@500;600&display=swap',
        array(),
        null
    );
}

add_action(
    'wp_enqueue_scripts',
    'ankizy_generation_enqueue_assets'
);

function ankizy_generation_menu_link_attributes($atts, $item, $args) {

    if ($args->theme_location === 'primary') {
        $atts['class'] = 'main-nav__link';
    }

    return $atts;
}

add_filter(
    'nav_menu_link_attributes',
    'ankizy_generation_menu_link_attributes',
    10,
    3
);