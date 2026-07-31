<?php
/**
 * Plantilla de error 404 (página no encontrada).
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="container py-5">
	<section class="error-404 not-found text-center py-5">
		<p class="display-1 fw-bold text-primary mb-0">404</p>
		<h1 class="h2 mt-2"><?php esc_html_e( 'Página no encontrada', 'empresa-theme' ); ?></h1>
		<p class="text-muted-custom mx-auto mt-3" style="max-width: 480px;">
			<?php esc_html_e( 'Lo sentimos, la página que buscas no existe o fue movida. Prueba con una búsqueda o vuelve al inicio.', 'empresa-theme' ); ?>
		</p>

		<div class="mx-auto mt-4" style="max-width: 420px;">
			<?php get_search_form(); ?>
		</div>

		<div class="mt-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
				<?php esc_html_e( 'Volver al inicio', 'empresa-theme' ); ?>
			</a>
		</div>
	</section>
</div>

<?php
get_footer();
