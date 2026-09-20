<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main-content" class="skip-link">
		<?php esc_html_e( 'Aller au contenu principal', 'ankizy-generation' ); ?>
	</a>

	<header class="site-header">
		<div class="container site-header__bar">
			<a
				href="<?php echo esc_url( ankizy_generation_get_home_url() ); ?>"
				class="brand"
				aria-label="<?php esc_attr_e( 'Ankizy Génération — retour à l’accueil', 'ankizy-generation' ); ?>"
			>
				<div
					class="placeholder placeholder--logo"
					role="img"
					aria-label="<?php esc_attr_e( 'Logo Ankizy Génération', 'ankizy-generation' ); ?>"
				>
					<span class="placeholder__label">LOGO</span>
				</div>

				<span class="brand__name">Ankizy Génération</span>
			</a>

			<nav
				class="main-nav"
				id="main-nav"
				aria-label="<?php esc_attr_e( 'Navigation principale', 'ankizy-generation' ); ?>"
				data-main-nav
			>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'main-nav__list',
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>

			<div class="header-actions">
				<button
					class="search-toggle"
					type="button"
					aria-label="<?php esc_attr_e( 'Rechercher sur le site', 'ankizy-generation' ); ?>"
					aria-expanded="false"
					aria-controls="site-search-panel"
					data-search-toggle
				>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
						<circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"></line>
					</svg>
				</button>

				<?php if ( function_exists( 'pll_the_languages' ) ) : ?>
					<?php
					$languages = pll_the_languages(
						array(
							'raw'                    => 1,
							'hide_if_empty'          => 0,
							'hide_if_no_translation' => 0,
						)
					);
					?>

					<?php if ( $languages ) : ?>
						<nav class="lang-switch" aria-label="<?php esc_attr_e( 'Choix de la langue', 'ankizy-generation' ); ?>">
							<?php foreach ( $languages as $language ) : ?>
								<a
									class="lang-switch__btn"
									href="<?php echo esc_url( $language['url'] ); ?>"
									hreflang="<?php echo esc_attr( $language['slug'] ); ?>"
									lang="<?php echo esc_attr( $language['slug'] ); ?>"
									<?php if ( $language['current_lang'] ) : ?>aria-current="page"<?php endif; ?>
								>
									<?php echo esc_html( strtoupper( $language['slug'] ) ); ?>
								</a>
							<?php endforeach; ?>
						</nav>
					<?php endif; ?>
				<?php endif; ?>

				<a
					href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'contact' ) ); ?>"
					class="btn btn--primary btn--sm"
				>
					<?php esc_html_e( 'Nous soutenir', 'ankizy-generation' ); ?>
				</a>

				<button
					class="nav-toggle"
					type="button"
					aria-label="<?php esc_attr_e( 'Ouvrir le menu', 'ankizy-generation' ); ?>"
					aria-expanded="false"
					aria-controls="main-nav"
					data-label-open="<?php esc_attr_e( 'Ouvrir le menu', 'ankizy-generation' ); ?>"
					data-label-close="<?php esc_attr_e( 'Fermer le menu', 'ankizy-generation' ); ?>"
					data-nav-toggle
				>
					<span class="nav-toggle__bar"></span>
					<span class="nav-toggle__bar"></span>
					<span class="nav-toggle__bar"></span>
				</button>
			</div>
		</div>

		<div class="search-panel" id="site-search-panel" data-search-panel hidden>
			<div class="container">
				<label class="sr-only" for="site-search-input">
					<?php esc_html_e( 'Rechercher sur le site', 'ankizy-generation' ); ?>
				</label>

				<div class="search-panel__field">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
						<circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"></line>
					</svg>

					<input
						class="search-panel__input"
						id="site-search-input"
						type="search"
						placeholder="<?php esc_attr_e( 'Rechercher un programme, un article, une page…', 'ankizy-generation' ); ?>"
						autocomplete="off"
						data-search-input
					>
				</div>

				<ul class="search-panel__results" data-search-results></ul>
			</div>
		</div>
	</header>
