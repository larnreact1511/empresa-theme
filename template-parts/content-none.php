<?php
/**
 * Mensaje cuando no hay contenido.
 *
 * @package Empresa_Theme
 */
?>

<section class="no-results not-found py-5 text-center">
	<header class="page-header mb-4">
		<h1 class="page-title h3"><?php esc_html_e( 'Nada por aquí', 'empresa-theme' ); ?></h1>
	</header>

	<div class="page-content">
		<p class="text-muted-custom">
			<?php esc_html_e( 'No se encontraron resultados que coincidan con tu búsqueda. Intenta con otras palabras clave.', 'empresa-theme' ); ?>
		</p>

		<div class="mx-auto mt-4" style="max-width: 420px;">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>
