<?php
/**
 * Empresa Theme - Funciones del tema.
 *
 * Configuración, soportes, menús, widgets, estilos y scripts.
 *
 * @package Empresa_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Acceso directo no permitido.
}

define( 'EMPRESA_THEME_VERSION', '1.0.0' );

/**
 * Configuración básica del tema.
 */
function empresa_theme_setup() {
	// Traducciones.
	load_theme_textdomain( 'empresa-theme', get_template_directory() . '/languages' );

	// Etiqueta <title> gestionada por WordPress.
	add_theme_support( 'title-tag' );

	// Feeds RSS automáticos.
	add_theme_support( 'automatic-feed-links' );

	// Imágenes destacadas.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'empresa-card', 640, 360, true );

	// Marca del sitio (logo personalizado).
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 40,
			'width'                => 160,
			'flex-height'          => true,
			'flex-width'           => true,
			'unlink-homepage-logo' => true,
		)
	);

	// HTML5 válido para los elementos del núcleo.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Bloques de ancho completo y estilos integrados de bloques.
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Menús de navegación.
	register_nav_menus(
		array(
			'primary' => __( 'Menú principal', 'empresa-theme' ),
			'footer'  => __( 'Menú del pie de página', 'empresa-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'empresa_theme_setup' );

/**
 * Establece el ancho máximo de contenido.
 */
function empresa_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'empresa_theme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'empresa_theme_content_width', 0 );

/**
 * Áreas de widgets (barra lateral y pie de página).
 */
function empresa_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Barra lateral del blog', 'empresa-theme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Widgets que aparecen junto al contenido del blog.', 'empresa-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s card card-body border-0 mb-4">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title h6">',
			'after_title'   => '</h3>',
		)
	);

	$footer_columns = array(
		'footer-1' => __( 'Pie de página - Columna 1', 'empresa-theme' ),
		'footer-2' => __( 'Pie de página - Columna 2', 'empresa-theme' ),
		'footer-3' => __( 'Pie de página - Columna 3', 'empresa-theme' ),
	);

	foreach ( $footer_columns as $id => $name ) {
		register_sidebar(
			array(
				'name'          => $name,
				'id'            => $id,
				'description'   => __( 'Columna de widgets del pie de página.', 'empresa-theme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="footer-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
add_action( 'widgets_init', 'empresa_theme_widgets_init' );

/**
 * Carga estilos y scripts.
 */
function empresa_theme_scripts() {
	// Bootstrap 5 (CSS local).
	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.css',
		array(),
		'5.3.3'
	);

	// Tipografía Inter e iconos Material Symbols (Google Fonts).
	wp_enqueue_style(
		'empresa-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,0&display=swap',
		array(),
		null
	);

	// Hoja de estilos principal del tema.
	wp_enqueue_style(
		'empresa-theme-style',
		get_stylesheet_uri(),
		array( 'bootstrap', 'empresa-google-fonts' ),
		EMPRESA_THEME_VERSION
	);

	// Bootstrap 5 (JS bundle, en el pie).
	wp_enqueue_script(
		'bootstrap-bundle',
		get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.bundle.min.js',
		array(),
		'5.3.3',
		true
	);

	// Scripts propios del tema.
	wp_enqueue_script(
		'empresa-theme-js',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'bootstrap-bundle' ),
		EMPRESA_THEME_VERSION,
		true
	);

	// Respuesta a comentarios anidados.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'empresa_theme_scripts' );

/**
 * Cabecera HTTP para comentarios (Pingback).
 */
function empresa_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'empresa_theme_pingback_header' );

/**
 * Muestra el logo del sitio o, en su defecto, el nombre del sitio.
 */
function empresa_theme_brand() {
	if ( has_custom_logo() ) {
		the_custom_logo();
		return;
	}

	printf(
		'<a class="brand" href="%1$s" rel="home">%2$s</a>',
		esc_url( home_url( '/' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);
}

/**
 * Walker de navegación para menús con desplegables de Bootstrap 5.
 * Solo cubre el caso de un nivel de profundidad (más común) para mantenerlo ligero.
 */
if ( ! class_exists( 'Empresa_Theme_Bootstrap_Navwalker' ) ) {
	/**
	 * Clase Empresa_Theme_Bootstrap_Navwalker.
	 */
	class Empresa_Theme_Bootstrap_Navwalker extends Walker_Nav_Menu {

		/**
		 * Empieza el nivel del menú.
		 *
		 * @param string   $output HTML de salida.
		 * @param int      $depth  Profundidad actual.
		 * @param stdClass $args   Argumentos del menú.
		 */
		public function start_lvl( &$output, $depth = 0, $args = null ) {
			$output .= '<ul class="dropdown-menu">';
		}

		/**
		 * Finaliza el nivel del menú.
		 *
		 * @param string   $output HTML de salida.
		 * @param int      $depth  Profundidad actual.
		 * @param stdClass $args   Argumentos del menú.
		 */
		public function end_lvl( &$output, $depth = 0, $args = null ) {
			$output .= '</ul>';
		}

		/**
		 * Empieza un elemento del menú.
		 *
		 * @param string   $output HTML de salida.
		 * @param WP_Post  $item   Objeto del elemento.
		 * @param int      $depth  Profundidad actual.
		 * @param stdClass $args   Argumentos del menú.
		 * @param int      $id     ID del elemento actual.
		 */
		public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
			// En el fallback de páginas (wp_list_pages) $args llega como array.
			if ( is_array( $args ) ) {
				$args = (object) $args;
			}

			$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
			$has_child = in_array( 'menu-item-has-children', $classes, true );

			$class_names = implode( ' ', array_filter( $classes ) );
			$class_names = ' menu-item' . ( $has_child ? ' dropdown' : '' ) . ' nav-item ' . esc_attr( $class_names );

			$output .= '<li class="' . trim( $class_names ) . '">';

			$atts           = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
			$atts['href']   = ! empty( $item->url ) ? $item->url : '';

			$link_class = 'nav-link';

			if ( $has_child ) {
				$link_class        .= ' dropdown-toggle';
				$atts['data-bs-toggle'] = 'dropdown';
				$atts['aria-expanded']  = 'false';
				$atts['role']           = 'button';
			} elseif ( in_array( 'current-menu-item', $classes, true ) ) {
				$link_class .= ' active';
				$atts['aria-current'] = 'page';
			}

			$atts['class'] = $link_class;

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			$item_output  = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		/**
		 * Finaliza un elemento del menú.
		 *
		 * @param string   $output HTML de salida.
		 * @param WP_Post  $item   Objeto del elemento.
		 * @param int      $depth  Profundidad actual.
		 * @param stdClass $args   Argumentos del menú.
		 */
		public function end_el( &$output, $item, $depth = 0, $args = null ) {
			$output .= '</li>';
		}
	}
}

/**
 * Extrae el fragmento del menú de navegación principal (Bootstrap).
 */
function empresa_theme_primary_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
			'container'      => false,
			'fallback_cb'    => 'wp_page_menu',
			'depth'          => 2,
			'walker'         => class_exists( 'Empresa_Theme_Bootstrap_Navwalker' ) ? new Empresa_Theme_Bootstrap_Navwalker() : '',
		)
	);
}

/**
 * Acorta el extracto generado automáticamente.
 *
 * @param string $more Texto del enlace "leer más".
 * @return string
 */
function empresa_theme_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'empresa_theme_excerpt_more' );

/**
 * Longitud del extracto.
 *
 * @param int $length Longitud actual.
 * @return int
 */
function empresa_theme_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'empresa_theme_excerpt_length' );

/**
 * Reemplaza el título de los archivos (archivo, etiqueta, etc.).
 *
 * @param string $title Título actual.
 * @return string
 */
function empresa_theme_get_the_archive_title( $title ) {
	if ( is_home() && ! is_front_page() ) {
		$title = single_post_title( '', false );
	} elseif ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'empresa_theme_get_the_archive_title' );