<?php

/**
 * The template for displaying the footer
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

$theme = wp_get_theme( CARDANOPRESS_BOOTSTRAP_THEME_BASE );

?>

		</div><!-- .site-content -->

		<?php get_sidebar( 'footer' ); ?>

		<footer class="site-footer py-2 bg-dark text-light">
			<div class="container">
				<nav class="d-flex align-items-center justify-content-between">
					<?php cardanopress_bootstrap_footer_menu(); ?>

					<div class="copyright">
						<small>Copyright &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php bloginfo( 'name' ); ?></a>.</small>
						<span class="small">Designed and developed by <a href="<?php echo esc_url( $theme->get( 'AuthorURI' ) ); ?>" class="text-light"><?php echo esc_html( $theme->get( 'Author' ) ); ?></a>.</span>
					</div>
				</nav>
			</div>
		</footer><!-- .site-footer -->

		<?php wp_footer(); ?>
	</body>
</html>

<!-- A generator-themeplate project - https://github.com/kermage/generator-themeplate -->
