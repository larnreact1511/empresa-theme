/**
 * Empresa Theme - main.js
 *
 * Animaciones de aparición al hacer scroll y utilidades de navegación.
 *
 * @package Empresa_Theme
 */
(function () {
	'use strict';

	// Animación de aparición progresiva (clase .reveal).
	var revealElements = document.querySelectorAll('.reveal');

	if ('IntersectionObserver' in window) {
		var observer = new IntersectionObserver(
			function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						observer.unobserve(entry.target);
					}
				});
			},
			{ threshold: 0.1 }
		);

		revealElements.forEach(function (el) {
			observer.observe(el);
		});
	} else {
		// Compatibilidad: si no hay soporte, se muestran directamente.
		revealElements.forEach(function (el) {
			el.classList.add('is-visible');
		});
	}

	// Cierra el menú móvil al pulsar un enlace (evita quedarse abierto).
	var navbar = document.getElementById('navbar-menu');
	if (navbar) {
		var links = navbar.querySelectorAll('a');
		links.forEach(function (link) {
			link.addEventListener('click', function () {
				var collapse = window.bootstrap ? bootstrap.Collapse.getInstance(navbar) : null;
				if (collapse && navbar.classList.contains('show')) {
					collapse.hide();
				}
			});
		});
	}
})();
