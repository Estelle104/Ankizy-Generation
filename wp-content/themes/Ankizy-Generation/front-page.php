<?php get_header(); ?>

<main id="main-content">

    <!-- HERO -->
    <section
        class="hero hero--photo"
        style="--hero-image:url('https://images.unsplash.com/photo-1567057420215-0afa9aa9253a?q=80&w=1600&auto=format&fit=crop');"
    >

        <div class="hero__overlay" aria-hidden="true"></div>

        <div class="container hero__inner">

            <div class="hero__content">

                <span class="eyebrow">
                    Association malgache — Éducation
                </span>

                <h1 class="hero__title">
                    Message principal placeholder —
                    l'éducation comme levier d'avenir
                    pour chaque enfant malgache
                </h1>

                <p class="hero__subtitle font-slogan">
                    Sous-titre placeholder décrivant en une phrase
                    ce que fait Ankizy Génération et pour qui,
                    à valider avec l'équipe communication.
                </p>

                <div class="hero__actions">

                    <a
                        href="<?php echo esc_url(home_url('/a-propos/')); ?>"
                        class="btn btn--secondary"
                    >
                        Découvrir notre action
                    </a>

                    <a
                        href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="btn btn--primary"
                    >
                        Nous soutenir
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ASSOCIATION -->
    <section class="section">

        <div class="container">

            <div class="section__header section__header--center">

                <span class="eyebrow">
                    L'association
                </span>

                <h2>
                    Qui est Ankizy Génération ?
                </h2>

            </div>


            <div class="grid grid--3">

                <div class="card card--feature">

                    <div class="icon-badge" aria-hidden="true">
                        <!-- SVG original -->
                    </div>

                    <h3>Présentation</h3>

                    <p class="text-muted">
                        Texte placeholder — présentation courte
                        de l'association (statut, année de création,
                        domaine d'action).
                    </p>

                </div>


                <div class="card card--feature">

                    <div
                        class="icon-badge icon-badge--blue"
                        aria-hidden="true"
                    >
                        <!-- SVG original -->
                    </div>

                    <h3>Mission</h3>

                    <p class="text-muted">
                        Texte placeholder — la mission
                        d'Ankizy Génération en une à deux
                        phrases claires.
                    </p>

                </div>


                <div class="card card--feature">

                    <div
                        class="icon-badge icon-badge--yellow"
                        aria-hidden="true"
                    >
                        <!-- SVG original -->
                    </div>

                    <h3>Vision</h3>

                    <p class="text-muted">
                        Texte placeholder — la vision
                        à long terme de l'association.
                    </p>

                </div>

            </div>


            <p class="text-center mt-md">

                <a href="<?php echo esc_url(home_url('/a-propos/')); ?>">
                    En savoir plus sur l'association →
                </a>

            </p>

        </div>

    </section>


    <!-- PROGRAMMES -->
    <section class="section section--alt">

        <div class="container">

            <div class="section__header section__header--center">

                <span class="eyebrow">
                    Nos actions
                </span>

                <h2>
                    Nos programmes
                </h2>

                <p class="text-muted">
                    Deux programmes phares aujourd'hui —
                    architecture pensée pour en accueillir d'autres
                    sans refonte.
                </p>

            </div>


            <div class="grid grid--2">

                <article class="card card--programme">

                    <div
                        class="placeholder placeholder--wide"
                        role="img"
                        aria-label="Image programme Bourses d'excellence"
                    >
                        <span class="placeholder__label">
                            <span class="placeholder__icon">🖼</span>
                            Image placeholder
                        </span>
                    </div>

                    <div class="card__meta">
                        <span class="tag">
                            Programme
                        </span>
                    </div>

                    <h3>
                        Bourses d'excellence
                    </h3>

                    <p class="text-muted">
                        Accompagner financièrement les élèves
                        les plus méritants pour sécuriser
                        leur parcours scolaire.
                    </p>

                    <div class="card__footer">

                        <a
                            class="btn btn--secondary btn--sm"
                            href="<?php echo esc_url(home_url('/programme-detail/')); ?>"
                        >
                            Voir détail
                        </a>

                    </div>

                </article>


                <article class="card card--programme">

                    <div
                        class="placeholder placeholder--wide"
                        role="img"
                        aria-label="Image programme Pousses d'Avenir"
                    >
                        <span class="placeholder__label">
                            <span class="placeholder__icon">🖼</span>
                            Image placeholder
                        </span>
                    </div>

                    <div class="card__meta">
                        <span class="tag">
                            Programme
                        </span>
                    </div>

                    <h3>
                        Pousses d'Avenir
                    </h3>

                    <p class="text-muted">
                        Un accompagnement global des enfants
                        les plus jeunes, de l'école à l'éveil personnel.
                    </p>

                    <div class="card__footer">

                        <a
                            class="btn btn--secondary btn--sm"
                            href="<?php echo esc_url(home_url('/programme-detail/')); ?>"
                        >
                            Voir détail
                        </a>

                    </div>

                </article>

            </div>


            <p class="text-center mt-md">

                <a href="<?php echo esc_url(home_url('/programmes/')); ?>">
                    Voir tous nos programmes →
                </a>

            </p>

        </div>

    </section>


    <!-- IMPACT -->
    <section class="section">

        <div class="container">

            <div class="section__header section__header--center">

                <span class="eyebrow">
                    Chiffres clés
                </span>

                <h2>
                    Notre impact en quelques chiffres
                </h2>

            </div>


            <div class="grid grid--4">

                <div class="stat-card">

                    <div class="stat-card__number">
                        <span data-count-to="4200">0</span>+
                    </div>

                    <div class="stat-card__label">
                        Bénéficiaires accompagnés
                    </div>

                </div>


                <div class="stat-card stat-card--blue">

                    <div class="stat-card__number">
                        <span data-count-to="15">0</span>
                    </div>

                    <div class="stat-card__label">
                        Années d'action
                    </div>

                </div>


                <div class="stat-card stat-card--yellow">

                    <div class="stat-card__number">
                        <span data-count-to="60">0</span>+
                    </div>

                    <div class="stat-card__label">
                        Projets réalisés
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-card__number">
                        <span data-count-to="12">0</span>
                    </div>

                    <div class="stat-card__label">
                        Régions couvertes
                    </div>

                </div>

            </div>


            <p class="text-center text-muted mt-sm">
                Chiffres placeholder — à remplacer par
                les données réelles de l'association.
            </p>


            <p class="text-center mt-sm">

                <a href="<?php echo esc_url(home_url('/impact/')); ?>">
                    Voir le détail de notre impact →
                </a>

            </p>

        </div>

    </section>


    <!-- TEMOIGNAGES -->
    <section class="section section--alt">

        <div class="container">

            <div class="section__header section__header--center">

                <span class="eyebrow">
                    Les Visages d'Ankizy
                </span>

                <h2>
                    Ce qu'ils en disent
                </h2>

            </div>


            <div class="grid grid--3">

                <article class="card card--testimonial">

                    <p class="testimonial__quote">
                        « Citation placeholder —
                        témoignage d'un bénéficiaire à recueillir. »
                    </p>

                    <div class="testimonial__author">

                        <div
                            class="placeholder placeholder--avatar"
                            role="img"
                            aria-label="Photo du témoin"
                        ></div>

                        <div>

                            <div class="testimonial__author-name">
                                Nom Prénom
                            </div>

                            <div class="testimonial__author-role">
                                Bénéficiaire, programme placeholder
                            </div>

                        </div>

                    </div>

                </article>


                <article class="card card--testimonial">

                    <p class="testimonial__quote">
                        « Citation placeholder —
                        témoignage d'un parent à recueillir. »
                    </p>

                    <div class="testimonial__author">

                        <div
                            class="placeholder placeholder--avatar"
                            role="img"
                            aria-label="Photo du témoin"
                        ></div>

                        <div>

                            <div class="testimonial__author-name">
                                Nom Prénom
                            </div>

                            <div class="testimonial__author-role">
                                Parent d'un bénéficiaire
                            </div>

                        </div>

                    </div>

                </article>


                <article class="card card--testimonial">

                    <p class="testimonial__quote">
                        « Citation placeholder —
                        témoignage d'un partenaire à recueillir. »
                    </p>

                    <div class="testimonial__author">

                        <div
                            class="placeholder placeholder--avatar"
                            role="img"
                            aria-label="Photo du témoin"
                        ></div>

                        <div>

                            <div class="testimonial__author-name">
                                Nom Prénom
                            </div>

                            <div class="testimonial__author-role">
                                Partenaire institutionnel
                            </div>

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- VIDEO -->
    <section class="section">

        <div class="container">

            <div class="section__header section__header--center">

                <span class="eyebrow">
                    En vidéo
                </span>

                <h2>
                    10 ans d'accompagnement avec Miora
                </h2>

            </div>


            <div
                class="placeholder placeholder--video"
                style="max-width:820px;margin-inline:auto;"
                role="img"
                aria-label="Lecteur vidéo placeholder"
            >

                <span class="placeholder__label">
                    <span class="placeholder__icon">▶</span>
                    Placeholder lecteur vidéo
                </span>

            </div>

        </div>

    </section>


    <!-- ACTUALITES -->
    <section class="section section--alt">

        <div class="container">

            <div class="section__header flex--between">

                <div>

                    <span class="eyebrow">
                        Actualités
                    </span>

                    <h2 class="mb-0">
                        Nos actualités récentes
                    </h2>

                </div>

                <a
                    href="<?php echo esc_url(home_url('/actualites/')); ?>"
                    class="btn btn--secondary"
                >
                    Toutes les actualités
                </a>

            </div>


            <div
                class="grid grid--3"
                data-articles-preview
            >

                <p class="text-muted">
                    Chargement des actualités…
                </p>

            </div>

        </div>

    </section>


    <!-- PARTENARIAT -->
    <section class="section">

        <div class="container">

            <div class="cta-banner">

                <div class="cta-banner__text">

                    <h2 class="mt-0">
                        Devenez partenaire d'Ankizy Génération
                    </h2>

                    <p>
                        Texte placeholder — pitch court à destination
                        des entreprises, institutions et bailleurs.
                    </p>

                </div>


                <div class="cta-banner__actions">

                    <a
                        href="<?php echo esc_url(home_url('/contact/#partenariat')); ?>"
                        class="btn btn--primary"
                    >
                        Devenir partenaire
                    </a>

                    <a
                        href="<?php echo esc_url(home_url('/impact/')); ?>"
                        class="btn btn--on-dark"
                    >
                        Voir nos résultats
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>