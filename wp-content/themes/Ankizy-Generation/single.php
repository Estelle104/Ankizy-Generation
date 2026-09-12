<?php
/**
 * Single actuality template.
 *
 * @package Ankizy_Generation
 */

get_header();
?>

<main id="main-content">

<?php
while ( have_posts() ) :
	the_post();
	$categories = get_the_category();
?>

	<div class="page-hero">
		<div class="container">

			<p class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Accueil', 'ankizy-generation' ); ?>
				</a>
				›
				<a href="<?php echo esc_url( home_url( '/actualites/' ) ); ?>">
					<?php esc_html_e( 'Actualités', 'ankizy-generation' ); ?>
				</a>
				›
				<span class="is-current"><?php the_title(); ?></span>
			</p>

			<?php if ( ! empty( $categories ) ) : ?>
				<div class="entry-taxonomies">
					<?php foreach ( $categories as $category ) : ?>
						<span class="tag"><?php echo esc_html( $category->name ); ?></span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<h1 class="page-hero__title"><?php the_title(); ?></h1>
			<time class="card__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>

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
