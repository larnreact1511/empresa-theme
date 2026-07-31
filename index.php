<?php
/**
 * Plantilla de respaldo principal (índice).
 *
 * @package Empresa_Theme
 */

get_header();
?>

<div class="container py-5">
	<div class="row g-5">
		<div class="col-12 col-lg-8">

			<?php if ( have_posts() ) : ?>

				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<div class="mt-4">
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

		<div class="col-12 col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
