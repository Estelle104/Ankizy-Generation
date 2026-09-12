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

/**
 * Register the programme content managed from the WordPress administration.
 */
function ankizy_generation_register_programme_content()
{
	$labels = array(
		'name'                  => 'Programmes',
		'singular_name'         => 'Programme',
		'menu_name'             => 'Programmes',
		'name_admin_bar'        => 'Programme',
		'add_new'               => 'Ajouter',
		'add_new_item'          => 'Ajouter un programme',
		'new_item'              => 'Nouveau programme',
		'edit_item'             => 'Modifier le programme',
		'view_item'             => 'Voir le programme',
		'all_items'             => 'Tous les programmes',
		'search_items'          => 'Rechercher des programmes',
		'not_found'             => 'Aucun programme trouvé.',
		'not_found_in_trash'    => 'Aucun programme dans la corbeille.',
		'featured_image'        => 'Image du programme',
		'set_featured_image'    => 'Définir l’image du programme',
		'remove_featured_image' => 'Retirer l’image du programme',
	);

	register_post_type(
		'programme',
		array(
			'labels'             => $labels,
			'public'             => true,
			'show_in_rest'       => true,
			'has_archive'        => 'programmes',
			'rewrite'            => array( 'slug' => 'programmes' ),
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'menu_position'      => 21,
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
		)
	);

	register_taxonomy(
		'programme_category',
		array( 'programme' ),
		array(
			'labels'            => array(
				'name'          => 'Catégories de programme',
				'singular_name' => 'Catégorie de programme',
				'menu_name'     => 'Catégories',
				'all_items'     => 'Toutes les catégories',
				'edit_item'     => 'Modifier la catégorie',
				'add_new_item'  => 'Ajouter une catégorie',
				'search_items'  => 'Rechercher des catégories',
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array( 'slug' => 'categorie-programme' ),
		)
	);
}

add_action( 'init', 'ankizy_generation_register_programme_content' );

/**
 * Display nine programmes on each archive page.
 *
 * @param WP_Query $query Current WordPress query.
 */
function ankizy_generation_programme_archive_query( $query )
{
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'programme' ) ) {
		$query->set( 'posts_per_page', 9 );
	}
}

add_action( 'pre_get_posts', 'ankizy_generation_programme_archive_query' );

/**
 * Return category IDs previously used for programmes in the Phase 2 database.
 *
 * These exclusions keep legacy programme posts out of the news listing while
 * they are being recreated as entries in the new Programme content type.
 *
 * @return int[]
 */
function ankizy_generation_legacy_programme_category_ids()
{
	$category_ids = array();
	$slugs        = array( 'programmes', 'a-venir' );

	foreach ( $slugs as $slug ) {
		$category = get_category_by_slug( $slug );

		if ( $category ) {
			$category_ids[] = (int) $category->term_id;
		}
	}

	return $category_ids;
}


function ankizy_generation_enqueue_assets()
{
	$style_path      = get_stylesheet_directory() . '/style.css';
	$navigation_path = get_template_directory() . '/js/navigation.js';

	// CSS principal.
	wp_enqueue_style(
		'ankizy-style',
		get_stylesheet_uri(),
		array(),
		filemtime( $style_path )
	);

	wp_enqueue_script(
		'ankizy-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		filemtime( $navigation_path ),
		true
	);
	// Google Fonts.
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
