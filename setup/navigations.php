<?php

/**
 * Register navigation menus
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

if ( ! function_exists( 'cardanopress_bootstrap_navigations' ) ) {
	function cardanopress_bootstrap_navigations() {
		require_once CARDANOPRESS_BOOTSTRAP_THEME_PATH . 'includes/class-clean-navbar.php';

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'cardanopress-bootstrap' ),
			'footer'  => __( 'Footer Menu', 'cardanopress-bootstrap' ),
		) );
	}
	add_action( 'after_setup_theme', 'cardanopress_bootstrap_navigations' );
}

// Primary Menu
if ( ! function_exists( 'cardanopress_bootstrap_primary_menu' ) ) {
	function cardanopress_bootstrap_primary_menu() {
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'navbar-nav',
			'walker'         => new Clean_NavBar(),
			'depth'          => 0,
		) );
	}
}

// Footer Menu
if ( ! function_exists( 'cardanopress_bootstrap_footer_menu' ) ) {
	function cardanopress_bootstrap_footer_menu() {
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'depth'          => 1,
		) );
	}
}
