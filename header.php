<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Saltar al contenido', 'empresa-theme' ); ?></a>

<header id="masthead" class="site-header fixed-top">
    <nav id="site-navigation" class="navbar navbar-expand-lg" aria-label="<?php esc_attr_e( 'Navegación principal', 'empresa-theme' ); ?>">
        <div class="container">
            <div class="navbar-brand me-auto py-0">
                <?php empresa_theme_brand(); ?>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Abrir menú', 'empresa-theme' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-menu" class="collapse navbar-collapse">
                <?php empresa_theme_primary_menu(); ?>
            </div>
        </div>
    </nav>
</header><!-- #masthead -->

<main id="primary" class="site-main">
