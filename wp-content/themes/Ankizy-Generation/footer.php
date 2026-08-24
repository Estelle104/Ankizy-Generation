<footer class="site-footer">

    <div class="container footer-grid">

        <div class="footer-col">

            <div
                class="placeholder placeholder--logo"
                style="background:transparent;border-color:#55555a;"
                role="img"
                aria-label="Logo Ankizy Génération"
            >
                <span
                    class="placeholder__label"
                    style="color:#9c9ca0;"
                >
                    LOGO
                </span>
            </div>

            <p
                class="text-muted"
                style="color:#b3b3b7;font-size:0.88rem;"
            >
                Association malgache dédiée à l'éducation
                des enfants et des jeunes.
            </p>

            <div
                class="footer-social"
                aria-label="Réseaux sociaux"
            >

                <a
                    href="#"
                    class="footer-social__icon"
                    aria-label="Facebook"
                >
                    FB
                </a>

                <a
                    href="#"
                    class="footer-social__icon"
                    aria-label="LinkedIn"
                >
                    In
                </a>

                <a
                    href="#"
                    class="footer-social__icon"
                    aria-label="Instagram"
                >
                    IG
                </a>

            </div>

        </div>


        <div class="footer-col">

            <h3 class="footer-col__title">
                Liens utiles
            </h3>

            <ul>

                <li>
                    <a href="<?php echo esc_url(home_url('/a-propos/')); ?>">
                        Qui sommes-nous
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/programmes/')); ?>">
                        Nos programmes
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/impact/')); ?>">
                        Notre impact
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/actualites/')); ?>">
                        Actualités
                    </a>
                </li>

            </ul>

        </div>


        <div class="footer-col">

            <h3 class="footer-col__title">
                Coordonnées
            </h3>

            <ul>

                <li>
                    Adresse placeholder, Antananarivo, Madagascar
                </li>

                <li>
                    +261 XX XX XXX XX
                </li>

                <li>
                    contact@ankizy-generation.org
                </li>

            </ul>

        </div>


        <div class="footer-col">

            <h3 class="footer-col__title">
                Contact
            </h3>

            <ul>

                <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                        Formulaire de contact
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/contact/#partenariat')); ?>">
                        Demande de partenariat
                    </a>
                </li>

            </ul>

        </div>

    </div>


    <div class="container site-footer__bottom">

        <span>
            © <?php echo date('Y'); ?>
            Ankizy Génération — Prototype wireframe,
            contenu non final.
        </span>

        <span>
            Mentions légales · Politique de confidentialité
        </span>

    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>