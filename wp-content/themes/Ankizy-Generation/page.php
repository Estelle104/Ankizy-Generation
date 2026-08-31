<?php get_header(); ?>

<main id="main-content">

<?php
while ( have_posts() ) :
	the_post();
?>

	<div class="page-hero">
		<div class="container">

			<p class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					Accueil
				</a>
				›
				<span class="is-current">
					<?php the_title(); ?>
				</span>
			</p>

			<h1 class="page-hero__title">
				<?php the_title(); ?>
			</h1>

		</div>
	</div>

	<?php
	// IMPORTANT : plus de <section class="section"><div class="container">
	// autour de the_content(). Chaque bloc "Groupe" construit dans
	// l'éditeur gère désormais lui-même sa largeur (pleine largeur ou
	// largeur du contenu) et sa couleur de fond (vert ou blanc), pour
	// recréer l'alternance vert/blanc directement depuis Gutenberg.
	the_content();
	?>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>
