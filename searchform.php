<?php
/**
 * Formulario de búsqueda (HTML5, estilo Bootstrap).
 *
 * @package Empresa_Theme
 */
?>

<form role="search" method="get" class="search-form d-flex gap-2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="search-field-<?php echo esc_attr( uniqid( 'search-' ) ); ?>">
		<?php esc_html_e( 'Buscar:', 'empresa-theme' ); ?>
	</label>
	<input
		type="search"
		id="search-field-<?php echo esc_attr( uniqid( 'search-' ) ); ?>"
		class="search-field form-control"
		placeholder="<?php esc_attr_e( 'Buscar&hellip;', 'empresa-theme' ); ?>"
		value="<?php echo get_search_query(); ?>"
		name="s"
	>
	<button type="submit" class="search-submit btn btn-primary">
		<?php esc_html_e( 'Buscar', 'empresa-theme' ); ?>
	</button>
</form>
