<?php
/**
 * Programme archive template.
 *
 * @package Ankizy_Generation
 */

get_header();
?>

<main id="main-content">
	<div class="page-hero">
		<div class="container">
			<p class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Accueil', 'ankizy-generation' ); ?>
				</a>
				›
				<span class="is-current"><?php post_type_archive_title(); ?></span>
			</p>

			<h1 class="page-hero__title"><?php post_type_archive_title(); ?></h1>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<div class="grid grid--3 content-grid">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/card', 'programme' );
					endwhile;
					?>
				</div>

				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 1,
						'prev_text' => esc_html__( 'Précédent', 'ankizy-generation' ),
						'next_text' => esc_html__( 'Suivant', 'ankizy-generation' ),
					)
				);
				?>
			<?php else : ?>
				<p class="empty-state">
					<?php esc_html_e( 'Aucun programme n’est disponible pour le moment.', 'ankizy-generation' ); ?>
				</p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
