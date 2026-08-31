<?php

function ankizy_generation_setup()
{

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => 'Menu principal',
        )
    );

    // Permet aux blocs (ex: Groupe) d'aller en pleine largeur ("alignfull")
    // ou en largeur "large" ("alignwide") — nécessaire pour construire les
    // sections vert/blanc pleine largeur depuis l'éditeur Gutenberg.
    add_theme_support('align-wide');

    // Charge le style.css du site DANS l'éditeur, pour que les blocs
    // ressemblent au rendu final pendant qu'on édite.
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    // Palette de couleurs officielle — apparaît dans le sélecteur de
    // couleur de fond/texte de n'importe quel bloc (Groupe, Paragraphe...).
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => 'Fond vert clair',
            'slug'  => 'fond-vert-clair',
            'color' => '#EAF5F1',
        ),
        array(
            'name'  => 'Blanc',
            'slug'  => 'blanc',
            'color' => '#FFFFFF',
        ),
        array(
            'name'  => 'Vert principal',
            'slug'  => 'vert-principal',
            'color' => '#2E7D32',
        ),
        array(
            'name'  => 'Bleu éducatif',
            'slug'  => 'bleu-educatif',
            'color' => '#1976D2',
        ),
        array(
            'name'  => 'Jaune solaire',
            'slug'  => 'jaune-solaire',
            'color' => '#FFC107',
        ),
        array(
            'name'  => 'Vert foncé (footer/CTA)',
            'slug'  => 'vert-fonce',
            'color' => '#1B3A20',
        ),
    ));
}

add_action(
    'after_setup_theme',
    'ankizy_generation_setup'
);


function ankizy_generation_enqueue_assets()
{

    // CSS principal
    wp_enqueue_style(
        'ankizy-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'ankizy-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        '1.0',
        true
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

function ankizy_generation_menu_link_attributes($atts, $item, $args)
{

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
