<?php
/**
 * Single programme template.
 *
 * @package Ankizy_Generation
 */

get_header();
?>

<main id="main-content">
	<?php
	while ( have_posts() ) :
		the_post();
		$programme_categories = get_the_terms( get_the_ID(), 'programme_category' );
		?>

		<div class="page-hero">
			<div class="container">
				<p class="breadcrumb">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php esc_html_e( 'Accueil', 'ankizy-generation' ); ?>
					</a>
					›
					<a href="<?php echo esc_url( get_post_type_archive_link( 'programme' ) ); ?>">
						<?php esc_html_e( 'Programmes', 'ankizy-generation' ); ?>
					</a>
					›
					<span class="is-current"><?php the_title(); ?></span>
				</p>

				<?php if ( $programme_categories && ! is_wp_error( $programme_categories ) ) : ?>
					<div class="entry-taxonomies">
						<?php foreach ( $programme_categories as $programme_category ) : ?>
							<span class="tag"><?php echo esc_html( $programme_category->name ); ?></span>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<h1 class="page-hero__title"><?php the_title(); ?></h1>
			</div>
		</div>

		<article <?php post_class( 'section' ); ?>>
			<div class="container entry-content">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', array( 'class' => 'entry-featured-image' ) ); ?>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
