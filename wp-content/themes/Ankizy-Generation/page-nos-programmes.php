<?php
/**
 * Dynamic programme listing for the existing "Nos programmes" page.
 *
 * @package Ankizy_Generation
 */

get_header();

while ( have_posts() ) :
	the_post();
	$current_page = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
	$programmes   = new WP_Query(
		array(
			'post_type'      => 'programme',
			'post_status'    => 'publish',
			'posts_per_page' => 9,
			'paged'          => $current_page,
		)
	);
	?>

	<main id="main-content">
		<div class="page-hero">
			<div class="container">
				<p class="breadcrumb">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php esc_html_e( 'Accueil', 'ankizy-generation' ); ?>
					</a>
					›
					<span class="is-current"><?php the_title(); ?></span>
				</p>

				<h1 class="page-hero__title"><?php the_title(); ?></h1>
			</div>
		</div>

		<section class="section">
			<div class="container">
				<?php if ( $programmes->have_posts() ) : ?>
					<div class="grid grid--3 content-grid">
						<?php
						while ( $programmes->have_posts() ) :
							$programmes->the_post();
							get_template_part( 'template-parts/card', 'programme' );
						endwhile;
						?>
					</div>

					<nav class="pagination" aria-label="<?php esc_attr_e( 'Pagination des programmes', 'ankizy-generation' ); ?>">
						<?php
						echo wp_kses_post(
								paginate_links(
									array(
										'current'   => $current_page,
										'total'     => $programmes->max_num_pages,
										'mid_size'  => 1,
										'prev_text' => esc_html__( 'Précédent', 'ankizy-generation' ),
										'next_text' => esc_html__( 'Suivant', 'ankizy-generation' ),
									)
								)
							);
						?>
					</nav>
				<?php else : ?>
					<p class="empty-state">
						<?php esc_html_e( 'Aucun programme n’est disponible pour le moment.', 'ankizy-generation' ); ?>
					</p>
				<?php endif; ?>
			</div>
		</section>
	</main>

	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
