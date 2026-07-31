<?php
/**
 * Tarjeta de entrada para rejillas (archivos, búsquedas).
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="d-block overflow-hidden">
			<?php the_post_thumbnail( 'empresa-card', array( 'class' => 'card-img-top' ) ); ?>
		</a>
	<?php endif; ?>

	<div class="card-body">
		<div class="entry-meta mb-2"><?php echo esc_html( get_the_date() ); ?></div>

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="card-link">
			<?php esc_html_e( 'Leer más', 'empresa-theme' ); ?>
			<span class="material-symbols-outlined align-middle" style="font-size: 18px;">chevron_right</span>
		</a>
	</div>
</article>
