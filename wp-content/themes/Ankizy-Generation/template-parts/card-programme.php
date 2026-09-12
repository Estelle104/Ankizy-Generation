<?php
/**
 * Programme card used by the programme archive.
 *
 * @package Ankizy_Generation
 */

$programme_categories = get_the_terms( get_the_ID(), 'programme_category' );
?>

<article <?php post_class( 'card card--programme' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'large', array( 'class' => 'card__image' ) ); ?>
		</a>
	<?php endif; ?>

	<?php if ( $programme_categories && ! is_wp_error( $programme_categories ) ) : ?>
		<div class="card__meta">
			<?php foreach ( $programme_categories as $programme_category ) : ?>
				<span class="tag"><?php echo esc_html( $programme_category->name ); ?></span>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<h2 class="card__title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<div class="card__excerpt">
		<?php the_excerpt(); ?>
	</div>

	<div class="card__footer">
		<a class="btn btn--secondary btn--sm" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Voir le détail', 'ankizy-generation' ); ?>
		</a>
	</div>
</article>
