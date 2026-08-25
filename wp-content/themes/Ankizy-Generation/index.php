<?php get_header(); ?>

<main id="main-content">

    <div class="container section">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>

                    <h1>
                        <?php the_title(); ?>
                    </h1>

                    <div>
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        <?php else : ?>

            <p>
                Aucun contenu trouvé.
            </p>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>