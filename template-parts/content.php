<?php
/**
 * Contenido por defecto dentro del bucle (lista de entradas).
 *
 * @package Empresa_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4 mb-3' ) ); ?>
		</a>
	<?php endif; ?>

	<header class="entry-header">
		<?php
		the_title(
			sprintf( '<h2 class="entry-title h3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<div class="entry-meta mb-3">
			<?php
			printf(
				/* translators: 1: fecha, 2: autor. */
				esc_html__( 'Publicado el %1$s por %2$s', 'empresa-theme' ),
				'<time datetime="' . esc_attr( get_the_date( DATE_W3C ) ) . '">' . esc_html( get_the_date() ) . '</time>',
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
			);
			?>
		</div>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">
		<?php esc_html_e( 'Leer más', 'empresa-theme' ); ?>
	</a>
</article>
