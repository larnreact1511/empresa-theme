<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row g-4">

            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="col-12 col-md-4">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="col-12 col-md-4">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="col-12 col-md-4">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( has_nav_menu( 'footer' ) ) : ?>
                <div class="col-12 col-md-4">
                    <h3 class="footer-title"><?php esc_html_e( 'Enlaces', 'empresa-theme' ); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'container'      => false,
                            'depth'          => 1,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <div class="site-info">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 text-center text-md-start">
            <p class="mb-0">
                &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
                <?php esc_html_e( 'Todos los derechos reservados.', 'empresa-theme' ); ?>
            </p>
            <p class="mb-0">
                <?php esc_html_e( 'Desarrollado con', 'empresa-theme' ); ?>
                <a href="https://wordpress.org/" rel="nofollow">WordPress</a>.
            </p>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>