<?php
/**
 * Plantilla de archivos (categorías, etiquetas, fechas, autores).
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="container py-5">
	<header class="archive-header mb-5">
		<?php
		the_archive_title( '<h1 class="entry-title">', '</h1>' );
		the_archive_description( '<div class="archive-description text-muted-custom mt-2">', '</div>' );
		?>
	</header>

	<?php if ( have_posts() ) : ?>

		<div class="row g-4">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<div class="col-md-6 col-lg-4">
					<?php get_template_part( 'template-parts/content', 'card' ); ?>
				</div>

			<?php endwhile; ?>

		</div>

		<div class="mt-5">
			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 2,
					'prev_text' => '&larr; ' . esc_html__( 'Anteriores', 'empresa-theme' ),
					'next_text' => esc_html__( 'Siguientes', 'empresa-theme' ) . ' &rarr;',
				)
			);
			?>
		</div>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
</div>

<?php
get_footer();
