<?php get_header(); ?>

<main id="main-content">

<?php
while ( have_posts() ) :
	the_post();
	$categories = get_the_category();
	$cat_name   = ! empty( $categories ) ? $categories[0]->name : '';
?>

	<div class="page-hero">
		<div class="container">

			<p class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
				›
				<a href="<?php echo esc_url( home_url( '/nos-programmes/' ) ); ?>">Nos programmes</a>
				›
				<span class="is-current"><?php the_title(); ?></span>
			</p>

			<?php if ( $cat_name ) : ?>
				<span class="eyebrow"><?php echo esc_html( $cat_name ); ?></span>
			<?php endif; ?>

			<h1 class="page-hero__title"><?php the_title(); ?></h1>

		</div>
	</div>

	<section class="section">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>