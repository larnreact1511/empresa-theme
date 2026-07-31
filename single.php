<?php
/**
 * Plantilla de entrada individual (post).
 *
 * @package Empresa_Theme
 */

get_header();
?>

<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-8">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header mb-4">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="entry-meta mt-3">
							<?php
							printf(
								/* translators: 1: fecha, 2: autor. */
								esc_html__( 'Publicado el %1$s por %2$s', 'empresa-theme' ),
								'<time datetime="' . esc_attr( get_the_date( DATE_W3C ) ) . '">' . esc_html( get_the_date() ) . '</time>',
								'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
							);
							?>
							<span class="mx-2">·</span>
							<?php the_category( ', ' ); ?>
						</div>
					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail mb-4">
							<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4 w-100' ) ); ?>
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

					<footer class="entry-footer mt-4">
						<?php the_tags( '<div class="entry-tags"><span class="small text-muted-custom">' . esc_html__( 'Etiquetas:', 'empresa-theme' ) . '</span> ', ', ', '</div>' ); ?>
					</footer>
				</article>

				<nav class="post-navigation mt-5" aria-label="<?php esc_attr_e( 'Navegación de entradas', 'empresa-theme' ); ?>">
					<div class="row g-3">
						<div class="col-6">
							<?php previous_post_link( '%link', '<span class="small text-muted-custom d-block">' . esc_html__( 'Anterior', 'empresa-theme' ) . '</span> %title' ); ?>
						</div>
						<div class="col-6 text-end">
							<?php next_post_link( '%link', '<span class="small text-muted-custom d-block">' . esc_html__( 'Siguiente', 'empresa-theme' ) . '</span> %title' ); ?>
						</div>
					</div>
				</nav>

				<?php
				// Comentarios.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; ?>

		</div>
	</div>
</div>

<?php
get_footer();
