<?php
/**
 * Formulario de búsqueda (HTML5, estilo Bootstrap).
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$empresa_search_id = 'search-field-' . uniqid( 'search-' );
?>

<form role="search" method="get" class="search-form d-flex gap-2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $empresa_search_id ); ?>">
		<?php esc_html_e( 'Buscar:', 'empresa-theme' ); ?>
	</label>
	<input
		type="search"
		id="<?php echo esc_attr( $empresa_search_id ); ?>"
		class="search-field form-control"
		placeholder="<?php esc_attr_e( 'Buscar&hellip;', 'empresa-theme' ); ?>"
		value="<?php echo esc_attr( get_search_query() ); ?>"
		name="s"
	>
	<button type="submit" class="search-submit btn btn-primary">
		<?php esc_html_e( 'Buscar', 'empresa-theme' ); ?>
	</button>
</form>
