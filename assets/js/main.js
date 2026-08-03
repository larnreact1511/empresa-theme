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

	// Resalta en el menú la sección visible actual (páginas de una sola vista con anclas).
	var navLinks = document.querySelectorAll('#primary-menu .nav-link[href^="#"]');
	if (navLinks.length) {
		var sections = [];
		navLinks.forEach(function (link) {
			var section = document.getElementById(link.getAttribute('href').slice(1));
			if (section) {
				sections.push({ link: link, section: section });
			}
		});

		var navHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--et-nav-height'), 10) || 72;

		var setActiveLink = function () {
			var current = sections[0];
			sections.forEach(function (item) {
				if (item.section.getBoundingClientRect().top - navHeight <= 1) {
					current = item;
				}
			});
			navLinks.forEach(function (link) {
				link.classList.remove('active');
				link.removeAttribute('aria-current');
			});
			if (current) {
				current.link.classList.add('active');
				current.link.setAttribute('aria-current', 'page');
			}
		};

		var ticking = false;
		window.addEventListener('scroll', function () {
			if (!ticking) {
				window.requestAnimationFrame(function () {
					setActiveLink();
					ticking = false;
				});
				ticking = true;
			}
		});

		setActiveLink();
	}
})();
