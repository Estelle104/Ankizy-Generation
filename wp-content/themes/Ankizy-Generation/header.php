<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a href="#main-content" class="skip-link">
        Aller au contenu principal
    </a>

    <header class="site-header">

        <div class="container site-header__bar">

            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="brand"
                aria-label="Ankizy Génération — retour à l'accueil">

                <div class="placeholder placeholder--logo"
                    role="img"
                    aria-label="Logo Ankizy Génération">

                    <span class="placeholder__label">LOGO</span>

                </div>

                <span class="brand__name">Ankizy Génération</span>

            </a>


            <nav class="main-nav" aria-label="Navigation principale">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'main-nav__list',
                    'fallback_cb'    => false,
                ));
                ?>

            </nav>

        <!-- recheche -->
            <div class="header-actions">

                <button
                    class="search-toggle"
                    type="button"
                    aria-label="Rechercher sur le site"
                    aria-expanded="false"
                    aria-controls="site-search-panel"
                    data-search-toggle>

                    <svg width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true">

                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                            stroke="currentColor"
                            stroke-width="2">
                        </circle>

                        <line
                            x1="21"
                            y1="21"
                            x2="16.65"
                            y2="16.65"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round">
                        </line>

                    </svg>

                </button>


                <!-- Langue -->
                <div class="lang-switch"
                    role="group"
                    aria-label="Choix de la langue">

                    <button
                        class="lang-switch__btn"
                        data-lang="fr"
                        aria-pressed="true">
                        FR
                    </button>

                    <button
                        class="lang-switch__btn"
                        data-lang="en"
                        aria-pressed="false">
                        EN
                    </button>

                    <button
                        class="lang-switch__btn"
                        data-lang="mg"
                        aria-pressed="false">
                        MG
                    </button>

                </div>


            <!-- nous soutenir -->
                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="btn btn--primary btn--sm"
                    data-i18n="cta.header">
                    Nous soutenir
                </a>


                <!-- Menu mobile -->
                <button
                    class="nav-toggle"
                    aria-label="Ouvrir le menu"
                    aria-expanded="false"
                    aria-controls="main-nav">

                    <span class="nav-toggle__bar"></span>
                    <span class="nav-toggle__bar"></span>
                    <span class="nav-toggle__bar"></span>

                </button>

            </div>

        </div>


        <!-- Recherche -->

        <div
            class="search-panel"
            id="site-search-panel"
            data-search-panel
            hidden>

            <div class="container">

                <label
                    class="sr-only"
                    for="site-search-input">
                    Rechercher sur le site
                </label>

                <div class="search-panel__field">

                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true">

                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                            stroke="currentColor"
                            stroke-width="2">
                        </circle>

                        <line
                            x1="21"
                            y1="21"
                            x2="16.65"
                            y2="16.65"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round">
                        </line>

                    </svg>

                    <input
                        class="search-panel__input"
                        id="site-search-input"
                        type="search"
                        placeholder="Rechercher un programme, un article, une page…"
                        autocomplete="off"
                        data-search-input>

                </div>

                <ul
                    class="search-panel__results"
                    data-search-results>
                </ul>

            </div>

        </div>

    </header>