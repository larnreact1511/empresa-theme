<?php
/**
 * Plantilla de páginas estáticas.
 *
 * @package Empresa_Theme
 */

get_header();
?>

<div class="container py-5">
	<div class="row g-5">
		<div class="col-12 col-lg-8">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header mb-4">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail mb-4">
							<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4' ) ); ?>
						</div>
					<?php endif; ?>

					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links mt-4">' . esc_html__( 'Páginas:', 'empresa-theme' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</article>

				<?php
				// Si los comentarios están abiertos, los mostramos.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; ?>

		</div>

		<div class="col-12 col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
