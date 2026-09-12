<?php
/**
 * Dynamic news listing for the page whose slug is "actualites".
 *
 * @package Ankizy_Generation
 */

get_header();

while ( have_posts() ) :
	the_post();
	$actualites_page_id = get_the_ID();
	$selected_category = isset( $_GET['categorie'] ) ? sanitize_title( wp_unslash( $_GET['categorie'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$excluded_ids       = ankizy_generation_legacy_programme_category_ids();
	$category_args      = array(
		'taxonomy'   => 'category',
		'hide_empty' => true,
		'exclude'    => $excluded_ids,
	);
	$news_categories    = get_categories( $category_args );
	$allowed_slugs      = wp_list_pluck( $news_categories, 'slug' );

	if ( $selected_category && ! in_array( $selected_category, $allowed_slugs, true ) ) {
		$selected_category = '';
	}

	$current_page = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
	$query_args   = array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 9,
		'paged'               => $current_page,
		'ignore_sticky_posts' => true,
		'category__not_in'    => $excluded_ids,
	);

	if ( $selected_category ) {
		$query_args['category_name'] = $selected_category;
	}

	$actualites = new WP_Query( $query_args );
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
				<?php if ( $news_categories ) : ?>
					<nav class="filter-bar" aria-label="<?php esc_attr_e( 'Filtrer les actualités', 'ankizy-generation' ); ?>">
						<a class="filter-btn" href="<?php echo esc_url( get_permalink( $actualites_page_id ) ); ?>" aria-pressed="<?php echo esc_attr( $selected_category ? 'false' : 'true' ); ?>">
							<?php esc_html_e( 'Tout', 'ankizy-generation' ); ?>
						</a>

						<?php foreach ( $news_categories as $news_category ) : ?>
							<a class="filter-btn" href="<?php echo esc_url( add_query_arg( 'categorie', $news_category->slug, get_permalink( $actualites_page_id ) ) ); ?>" aria-pressed="<?php echo esc_attr( $selected_category === $news_category->slug ? 'true' : 'false' ); ?>">
								<?php echo esc_html( $news_category->name ); ?>
							</a>
						<?php endforeach; ?>
					</nav>
				<?php endif; ?>

				<?php if ( $actualites->have_posts() ) : ?>
					<div class="grid grid--3 content-grid">
						<?php
						while ( $actualites->have_posts() ) :
							$actualites->the_post();
							get_template_part( 'template-parts/card', 'actualite' );
						endwhile;
						?>
					</div>

					<nav class="pagination" aria-label="<?php esc_attr_e( 'Pagination des actualités', 'ankizy-generation' ); ?>">
						<?php
						echo wp_kses_post(
								paginate_links(
									array(
										'current'   => $current_page,
										'total'     => $actualites->max_num_pages,
										'mid_size'  => 1,
										'prev_text' => esc_html__( 'Précédent', 'ankizy-generation' ),
										'next_text' => esc_html__( 'Suivant', 'ankizy-generation' ),
										'add_args'  => $selected_category ? array( 'categorie' => $selected_category ) : array(),
									)
								)
							);
						?>
					</nav>
				<?php else : ?>
					<p class="empty-state">
						<?php esc_html_e( 'Aucune actualité n’est disponible pour le moment.', 'ankizy-generation' ); ?>
					</p>
				<?php endif; ?>
			</div>
		</section>
	</main>

	<?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
