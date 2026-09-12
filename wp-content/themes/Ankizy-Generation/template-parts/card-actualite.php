<?php
/**
 * Actuality card used by the news listing.
 *
 * @package Ankizy_Generation
 */

$categories = get_the_category();
?>

<article <?php post_class( 'card card--article' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'large', array( 'class' => 'card__image' ) ); ?>
		</a>
	<?php endif; ?>

	<div class="card__meta">
		<?php if ( ! empty( $categories ) ) : ?>
			<span class="tag"><?php echo esc_html( $categories[0]->name ); ?></span>
		<?php endif; ?>
		<time class="card__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
			<?php echo esc_html( get_the_date() ); ?>
		</time>
	</div>

	<h2 class="card__title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>

	<div class="card__excerpt">
		<?php the_excerpt(); ?>
	</div>

	<div class="card__footer">
		<a class="btn btn--secondary btn--sm" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Lire l’article', 'ankizy-generation' ); ?>
		</a>
	</div>
</article>
