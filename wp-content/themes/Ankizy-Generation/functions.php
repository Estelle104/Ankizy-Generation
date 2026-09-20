<?php

/**
 * Configure theme features and editor defaults.
 */
function ankizy_generation_setup()
{
	load_theme_textdomain( 'ankizy-generation', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => __( 'Menu principal', 'ankizy-generation' ),
		)
	);

	// Permet aux blocs (ex: Groupe) d'aller en pleine largeur ("alignfull")
	// ou en largeur "large" ("alignwide") — nécessaire pour construire les
	// sections vert/blanc pleine largeur depuis l'éditeur Gutenberg.
	add_theme_support( 'align-wide' );

	// Charge le style.css du site DANS l'éditeur, pour que les blocs
	// ressemblent au rendu final pendant qu'on édite.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	// Palette de couleurs officielle — apparaît dans le sélecteur de
	// couleur de fond/texte de n'importe quel bloc (Groupe, Paragraphe...).
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Fond vert clair', 'ankizy-generation' ),
				'slug'  => 'fond-vert-clair',
				'color' => '#EAF5F1',
			),
			array(
				'name'  => __( 'Blanc', 'ankizy-generation' ),
				'slug'  => 'blanc',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => __( 'Vert principal', 'ankizy-generation' ),
				'slug'  => 'vert-principal',
				'color' => '#2E7D32',
			),
			array(
				'name'  => __( 'Bleu éducatif', 'ankizy-generation' ),
				'slug'  => 'bleu-educatif',
				'color' => '#1976D2',
			),
			array(
				'name'  => __( 'Jaune solaire', 'ankizy-generation' ),
				'slug'  => 'jaune-solaire',
				'color' => '#FFC107',
			),
			array(
				'name'  => __( 'Vert foncé (footer/CTA)', 'ankizy-generation' ),
				'slug'  => 'vert-fonce',
				'color' => '#1B3A20',
			),
		)
	);
}

add_action( 'after_setup_theme', 'ankizy_generation_setup' );

/**
 * Register the programme content managed from the WordPress administration.
 */
function ankizy_generation_register_programme_content()
{
	$labels = array(
		'name'                  => __( 'Programmes', 'ankizy-generation' ),
		'singular_name'         => __( 'Programme', 'ankizy-generation' ),
		'menu_name'             => __( 'Programmes', 'ankizy-generation' ),
		'name_admin_bar'        => __( 'Programme', 'ankizy-generation' ),
		'add_new'               => __( 'Ajouter', 'ankizy-generation' ),
		'add_new_item'          => __( 'Ajouter un programme', 'ankizy-generation' ),
		'new_item'              => __( 'Nouveau programme', 'ankizy-generation' ),
		'edit_item'             => __( 'Modifier le programme', 'ankizy-generation' ),
		'view_item'             => __( 'Voir le programme', 'ankizy-generation' ),
		'all_items'             => __( 'Tous les programmes', 'ankizy-generation' ),
		'search_items'          => __( 'Rechercher des programmes', 'ankizy-generation' ),
		'not_found'             => __( 'Aucun programme trouvé.', 'ankizy-generation' ),
		'not_found_in_trash'    => __( 'Aucun programme dans la corbeille.', 'ankizy-generation' ),
		'featured_image'        => __( 'Image du programme', 'ankizy-generation' ),
		'set_featured_image'    => __( 'Définir l’image du programme', 'ankizy-generation' ),
		'remove_featured_image' => __( 'Retirer l’image du programme', 'ankizy-generation' ),
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
				'name'          => __( 'Catégories de programme', 'ankizy-generation' ),
				'singular_name' => __( 'Catégorie de programme', 'ankizy-generation' ),
				'menu_name'     => __( 'Catégories', 'ankizy-generation' ),
				'all_items'     => __( 'Toutes les catégories', 'ankizy-generation' ),
				'edit_item'     => __( 'Modifier la catégorie', 'ankizy-generation' ),
				'add_new_item'  => __( 'Ajouter une catégorie', 'ankizy-generation' ),
				'search_items'  => __( 'Rechercher des catégories', 'ankizy-generation' ),
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
 * Return the home URL for the current language.
 *
 * @return string
 */
function ankizy_generation_get_home_url()
{
	if ( function_exists( 'pll_home_url' ) ) {
		return pll_home_url();
	}

	return home_url( '/' );
}

/**
 * Return a page URL in the current language when Polylang is available.
 *
 * The source path always identifies the original French page. If that page
 * has no translation yet, the French permalink remains a working fallback.
 *
 * @param string $source_path Original page path, without leading slashes.
 * @param string $fragment    Optional URL fragment, including the hash.
 * @return string
 */
function ankizy_generation_get_translated_page_url( $source_path, $fragment = '' )
{
	$page = get_page_by_path( $source_path );

	if ( ! $page ) {
		return home_url( user_trailingslashit( $source_path ) ) . $fragment;
	}

	$page_id = $page->ID;

	if ( function_exists( 'pll_get_post' ) ) {
		$translated_page_id = pll_get_post( $page_id );

		if ( $translated_page_id ) {
			$page_id = $translated_page_id;
		}
	}

	$permalink = get_permalink( $page_id );

	if ( ! $permalink ) {
		return home_url( user_trailingslashit( $source_path ) ) . $fragment;
	}

	return $permalink . $fragment;
}

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
