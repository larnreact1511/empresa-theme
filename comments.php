<?php
/**
 * Plantilla de comentarios.
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// No cargar si la entrada está protegida por contraseña y aún no se ha introducido.
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area mt-5">

	<?php if ( have_comments() ) : ?>
		<h3 class="h4 mb-4">
			<?php
			$empresa_comment_count = get_comments_number();
			if ( 1 === (int) $empresa_comment_count ) {
				esc_html_e( 'Un comentario', 'empresa-theme' );
			} else {
				printf(
					/* translators: %s: número de comentarios. */
					esc_html( _n( '%s comentario', '%s comentarios', $empresa_comment_count, 'empresa-theme' ) ),
					esc_html( number_format_i18n( $empresa_comment_count ) )
				);
			}
			?>
		</h3>

		<ol class="comment-list list-unstyled">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => '&larr; ' . esc_html__( 'Anteriores', 'empresa-theme' ),
				'next_text' => esc_html__( 'Siguientes', 'empresa-theme' ) . ' &rarr;',
			)
		);
		?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments text-muted-custom"><?php esc_html_e( 'Los comentarios están cerrados.', 'empresa-theme' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'          => 'comment-form mt-4',
			'class_submit'        => 'btn btn-primary',
			'comment_field'       => '<div class="mb-3"><label for="comment" class="form-label">' . esc_html__( 'Comentario', 'empresa-theme' ) . ' <span class="text-danger">*</span></label><textarea id="comment" name="comment" class="form-control" rows="4" required></textarea></div>',
			'fields'              => array(
				'author' => '<div class="mb-3"><label for="author" class="form-label">' . esc_html__( 'Nombre', 'empresa-theme' ) . ' <span class="text-danger">*</span></label><input id="author" name="author" type="text" class="form-control" required></div>',
				'email'  => '<div class="mb-3"><label for="email" class="form-label">' . esc_html__( 'Correo electrónico', 'empresa-theme' ) . ' <span class="text-danger">*</span></label><input id="email" name="email" type="email" class="form-control" required></div>',
				'url'    => '<div class="mb-3"><label for="url" class="form-label">' . esc_html__( 'Web', 'empresa-theme' ) . '</label><input id="url" name="url" type="url" class="form-control"></div>',
			),
		)
	);
	?>

</div><!-- #comments -->
