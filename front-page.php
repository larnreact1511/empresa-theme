<?php
/**
 * Plantilla de portada.
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<!-- Hero -->
	<section id="inicio" class="hero" aria-labelledby="hero-title">
		<div class="container">
			<div class="row align-items-center g-5">
				<div class="col-lg-6 reveal">
					<span class="eyebrow mb-3 d-inline-block"><?php esc_html_e( 'Innovación en movimiento', 'empresa-theme' ); ?></span>
					<h1 id="hero-title" class="hero-title mb-3">
						<?php esc_html_e( 'Soluciones de software', 'empresa-theme' ); ?><br>
						<span class="text-primary"><?php esc_html_e( 'de última generación', 'empresa-theme' ); ?></span>
					</h1>
					<p class="lead text-muted-custom mb-4">
						<?php esc_html_e( 'Potenciamos empresas con desarrollo de software a medida que escala con tu ambición. Construimos la columna vertebral digital de los líderes de la industria del mañana.', 'empresa-theme' ); ?>
					</p>
					<div class="d-flex flex-wrap gap-3">
						<a href="#contacto" class="btn btn-primary btn-lg">
							<?php esc_html_e( 'Empezar ahora', 'empresa-theme' ); ?>
							<span class="material-symbols-outlined align-middle ms-1">arrow_forward</span>
						</a>
						<a href="#servicios" class="btn btn-outline-primary btn-lg">
							<?php esc_html_e( 'Ver servicios', 'empresa-theme' ); ?>
						</a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hero-image-wrap">
						<div class="hero-image">
							<img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.svg' ); ?>"
								alt="<?php esc_attr_e( 'Ilustración de desarrollo de software', 'empresa-theme' ); ?>"
								class="w-100"
								loading="eager"
							>
						</div>
						<div class="hero-stat d-none d-md-flex align-items-center gap-3">
							<div class="icon">
								<span class="material-symbols-outlined">bolt</span>
							</div>
							<div>
								<div class="stat-value">99.9%</div>
								<div class="small text-muted-custom"><?php esc_html_e( 'Tiempo de actividad', 'empresa-theme' ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Servicios -->
	<section id="servicios" class="section section-alt" aria-labelledby="servicios-title">
		<div class="container">
			<div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5 gap-3">
				<div class="col-lg-7">
					<h2 id="servicios-title" class="section-title"><?php esc_html_e( 'Experiencia principal', 'empresa-theme' ); ?></h2>
					<p class="section-lead mb-0">
						<?php esc_html_e( 'Cerramos la brecha entre los desafíos empresariales complejos y las soluciones técnicas elegantes a través de verticales de servicio especializadas.', 'empresa-theme' ); ?>
					</p>
				</div>
				<div class="d-none d-md-block flex-grow-1 border-top mx-4 mb-4"></div>
			</div>

			<div class="row g-4">
				<div class="col-md-6 col-lg-4 reveal">
					<article class="feature-card">
						<div class="icon"><span class="material-symbols-outlined">language</span></div>
						<h3><?php esc_html_e( 'Desarrollo web', 'empresa-theme' ); ?></h3>
						<p><?php esc_html_e( 'Plataformas empresariales de alto rendimiento construidas con arquitecturas modernas para velocidad y seguridad.', 'empresa-theme' ); ?></p>
						<a class="card-link" href="#contacto"><?php esc_html_e( 'Saber más', 'empresa-theme' ); ?> <span class="material-symbols-outlined">chevron_right</span></a>
					</article>
				</div>

				<div class="col-md-6 col-lg-4 reveal">
					<article class="feature-card">
						<div class="icon"><span class="material-symbols-outlined">smartphone</span></div>
						<h3><?php esc_html_e( 'Aplicaciones móviles', 'empresa-theme' ); ?></h3>
						<p><?php esc_html_e( 'Experiencias nativas y multiplataforma que ponen tu negocio en el bolsillo de tus clientes.', 'empresa-theme' ); ?></p>
						<a class="card-link" href="#contacto"><?php esc_html_e( 'Saber más', 'empresa-theme' ); ?> <span class="material-symbols-outlined">chevron_right</span></a>
					</article>
				</div>

				<div class="col-md-6 col-lg-4 reveal">
					<article class="feature-card">
						<div class="icon"><span class="material-symbols-outlined">layers</span></div>
						<h3><?php esc_html_e( 'Diseño UI/UX', 'empresa-theme' ); ?></h3>
						<p><?php esc_html_e( 'Sistemas de diseño centrados en el usuario que equilibran la belleza estética con la eficiencia funcional.', 'empresa-theme' ); ?></p>
						<a class="card-link" href="#contacto"><?php esc_html_e( 'Saber más', 'empresa-theme' ); ?> <span class="material-symbols-outlined">chevron_right</span></a>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Nosotros -->
	<section id="nosotros" class="section" aria-labelledby="nosotros-title">
		<div class="container">
			<div class="row align-items-center g-5">
				<div class="col-lg-6 order-2 order-lg-1 reveal">
					<div class="position-relative">
						<div class="hero-image rounded-4 overflow-hidden shadow">
							<img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about.svg' ); ?>"
								alt="<?php esc_attr_e( 'Ilustración de colaboración en equipo', 'empresa-theme' ); ?>"
								class="w-100"
								loading="lazy"
							>
						</div>
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2 reveal">
					<span class="eyebrow mb-3 d-inline-block"><?php esc_html_e( 'Nuestro legado', 'empresa-theme' ); ?></span>
					<h2 id="nosotros-title" class="section-title"><?php esc_html_e( 'Ingeniería de precisión desde 2012', 'empresa-theme' ); ?></h2>
					<p class="section-lead">
						<?php esc_html_e( 'Nacimos con el deseo de simplificar lo complejo. Creemos que la tecnología debe ser una palanca de crecimiento, no una barrera de entrada. Nuestro equipo de arquitectos y diseñadores veteranos trabaja en sincronía para entregar productos robustos, seguros e infinitamente escalables.', 'empresa-theme' ); ?>
					</p>
					<div class="row g-4 pt-3">
						<div class="col-6">
							<div class="stat-value">250+</div>
							<p class="small text-muted-custom mb-0"><?php esc_html_e( 'Implementaciones globales', 'empresa-theme' ); ?></p>
						</div>
						<div class="col-6">
							<div class="stat-value">15+</div>
							<p class="small text-muted-custom mb-0"><?php esc_html_e( 'Premios de la industria', 'empresa-theme' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Por qué elegirnos -->
	<section id="ventajas" class="section section-neutral" aria-labelledby="ventajas-title">
		<div class="container">
			<div class="text-center mx-auto mb-5" style="max-width: 720px;">
				<h2 id="ventajas-title" class="section-title"><?php esc_html_e( 'La ventaja Kinetic', 'empresa-theme' ); ?></h2>
				<p class="section-lead mb-0"><?php esc_html_e( 'Por qué los líderes de la industria confían en nosotros para manejar su infraestructura digital más crítica.', 'empresa-theme' ); ?></p>
			</div>

			<div class="row g-4">
				<div class="col-sm-6 col-lg-3 reveal">
					<div class="mini-card">
						<span class="material-symbols-outlined icon">groups</span>
						<h4><?php esc_html_e( 'Equipo experto', 'empresa-theme' ); ?></h4>
						<p><?php esc_html_e( 'Ingenieros de nivel senior dedicados al éxito de tu proyecto.', 'empresa-theme' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 reveal">
					<div class="mini-card">
						<span class="material-symbols-outlined icon">rocket_launch</span>
						<h4><?php esc_html_e( 'Escalable', 'empresa-theme' ); ?></h4>
						<p><?php esc_html_e( 'Soluciones diseñadas para crecer con tu base de usuarios.', 'empresa-theme' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 reveal">
					<div class="mini-card">
						<span class="material-symbols-outlined icon">terminal</span>
						<h4><?php esc_html_e( 'Stack moderno', 'empresa-theme' ); ?></h4>
						<p><?php esc_html_e( 'Utilizamos los marcos y herramientas probados más recientes.', 'empresa-theme' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 reveal">
					<div class="mini-card">
						<span class="material-symbols-outlined icon">support_agent</span>
						<h4><?php esc_html_e( 'Soporte 24/7', 'empresa-theme' ); ?></h4>
						<p><?php esc_html_e( 'Monitoreo y asistencia técnica las 24 horas del día.', 'empresa-theme' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contacto -->
	<section id="contacto" class="section section-alt" aria-labelledby="contacto-title">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-6 reveal">
					<h2 id="contacto-title" class="section-title"><?php esc_html_e( '¿Listo para acelerar?', 'empresa-theme' ); ?></h2>
					<p class="section-lead mb-5"><?php esc_html_e( 'Contacta hoy con nuestros arquitectos de soluciones para una consulta gratuita.', 'empresa-theme' ); ?></p>

					<div class="d-flex align-items-start gap-3 mb-4">
						<div class="d-flex align-items-center justify-content-center text-white rounded-3" style="width: 2.5rem; height: 2.5rem; background: var(--et-primary); flex-shrink: 0;">
							<span class="material-symbols-outlined">location_on</span>
						</div>
						<div>
							<p class="fw-semibold mb-0"><?php esc_html_e( 'Visítanos', 'empresa-theme' ); ?></p>
							<p class="text-muted-custom mb-0">
								<?php
								/* Dirección configurable desde el Personalizador o el título de la página. */
								echo esc_html( get_theme_mod( 'empresa_address', __( 'Av. Innovación 101, Ciudad', 'empresa-theme' ) ) );
								?>
							</p>
						</div>
					</div>

					<div class="d-flex align-items-start gap-3">
						<div class="d-flex align-items-center justify-content-center text-white rounded-3" style="width: 2.5rem; height: 2.5rem; background: var(--et-primary); flex-shrink: 0;">
							<span class="material-symbols-outlined">mail</span>
						</div>
						<div>
							<p class="fw-semibold mb-0"><?php esc_html_e( 'Escríbenos', 'empresa-theme' ); ?></p>
							<p class="text-muted-custom mb-0">
								<a href="mailto:<?php echo esc_attr( get_option( 'admin_email' ) ); ?>"><?php echo esc_html( get_option( 'admin_email' ) ); ?></a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 reveal">
					<div class="bg-white p-4 p-lg-5 rounded-4 border">
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post" aria-label="<?php esc_attr_e( 'Formulario de contacto', 'empresa-theme' ); ?>">
							<div class="mb-3">
								<label for="nombre" class="form-label"><?php esc_html_e( 'Nombre completo', 'empresa-theme' ); ?></label>
								<input type="text" id="nombre" name="nombre" class="form-control" placeholder="<?php esc_attr_e( 'Juan Pérez', 'empresa-theme' ); ?>" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label"><?php esc_html_e( 'Correo electrónico', 'empresa-theme' ); ?></label>
								<input type="email" id="email" name="email" class="form-control" placeholder="<?php esc_attr_e( 'juan@ejemplo.com', 'empresa-theme' ); ?>" required>
							</div>
							<div class="mb-4">
								<label for="mensaje" class="form-label"><?php esc_html_e( 'Tu mensaje', 'empresa-theme' ); ?></label>
								<textarea id="mensaje" name="mensaje" class="form-control" rows="4" placeholder="<?php esc_attr_e( '¿Cómo podemos ayudarte?', 'empresa-theme' ); ?>" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary w-100 btn-lg"><?php esc_html_e( 'Enviar mensaje', 'empresa-theme' ); ?></button>
						</form>
						<p class="small text-muted-custom mt-3 mb-0">
							<?php esc_html_e( 'Conecta este formulario con un plugin de contacto (p. ej. WPForms o Contact Form 7) para el envío real.', 'empresa-theme' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="section-cta py-5" aria-label="<?php esc_attr_e( 'Llamada a la acción', 'empresa-theme' ); ?>">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
			<h3 class="h4 mb-0"><?php esc_html_e( 'Comienza hoy tu transformación digital.', 'empresa-theme' ); ?></h3>
			<a href="#contacto" class="btn btn-light btn-lg">
				<?php esc_html_e( 'Consulta gratuita', 'empresa-theme' ); ?>
			</a>
		</div>
	</section>

<?php
get_footer();
