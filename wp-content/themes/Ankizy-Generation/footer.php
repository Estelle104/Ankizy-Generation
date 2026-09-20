<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-col">
			<div
				class="placeholder placeholder--logo"
				style="background:transparent;border-color:#55555a;"
				role="img"
				aria-label="<?php esc_attr_e( 'Logo Ankizy Génération', 'ankizy-generation' ); ?>"
			>
				<span class="placeholder__label" style="color:#9c9ca0;">LOGO</span>
			</div>

			<p class="text-muted" style="color:#b3b3b7;font-size:0.88rem;">
				<?php esc_html_e( 'Association malgache dédiée à l’éducation des enfants et des jeunes.', 'ankizy-generation' ); ?>
			</p>

			<div class="footer-social" aria-label="<?php esc_attr_e( 'Réseaux sociaux', 'ankizy-generation' ); ?>">
				<a href="#" class="footer-social__icon" aria-label="Facebook">FB</a>
				<a href="#" class="footer-social__icon" aria-label="LinkedIn">In</a>
				<a href="#" class="footer-social__icon" aria-label="Instagram">IG</a>
			</div>
		</div>

		<div class="footer-col">
			<h3 class="footer-col__title">
				<?php esc_html_e( 'Liens utiles', 'ankizy-generation' ); ?>
			</h3>

			<ul>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'a-propos' ) ); ?>">
						<?php esc_html_e( 'Qui sommes-nous', 'ankizy-generation' ); ?>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'nos-programmes' ) ); ?>">
						<?php esc_html_e( 'Nos programmes', 'ankizy-generation' ); ?>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'notre-impact' ) ); ?>">
						<?php esc_html_e( 'Notre impact', 'ankizy-generation' ); ?>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'actualites' ) ); ?>">
						<?php esc_html_e( 'Actualités', 'ankizy-generation' ); ?>
					</a>
				</li>
			</ul>
		</div>

		<div class="footer-col">
			<h3 class="footer-col__title">
				<?php esc_html_e( 'Coordonnées', 'ankizy-generation' ); ?>
			</h3>

			<ul>
				<li><?php esc_html_e( 'Adresse placeholder, Antananarivo, Madagascar', 'ankizy-generation' ); ?></li>
				<li>+261 XX XX XXX XX</li>
				<li>contact@ankizy-generation.org</li>
			</ul>
		</div>

		<div class="footer-col">
			<h3 class="footer-col__title">
				<?php esc_html_e( 'Contact', 'ankizy-generation' ); ?>
			</h3>

			<ul>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'contact' ) ); ?>">
						<?php esc_html_e( 'Formulaire de contact', 'ankizy-generation' ); ?>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( ankizy_generation_get_translated_page_url( 'contact', '#partenariat' ) ); ?>">
						<?php esc_html_e( 'Demande de partenariat', 'ankizy-generation' ); ?>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="container site-footer__bottom">
		<span>
			<?php
			printf(
				/* translators: %s: current year. */
				esc_html__( '© %s Ankizy Génération — Prototype wireframe, contenu non final.', 'ankizy-generation' ),
				esc_html( wp_date( 'Y' ) )
			);
			?>
		</span>

		<span><?php esc_html_e( 'Mentions légales · Politique de confidentialité', 'ankizy-generation' ); ?></span>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
