<?php

/**
 * Compatibility
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

function cardanopress_bootstrap_upgrade_message() {
	$theme = wp_get_theme( CARDANOPRESS_BOOTSTRAP_THEME_BASE );

	$requirement = sprintf(
		/* translators: 1. PHP version, 2. WordPress version */
		__( '<strong>%1$s</strong> requires at least PHP version <strong>%2$s</strong> and WordPress version <strong>%3$s</strong>.', 'cardanopress-bootstrap' ),
		$theme->get( 'Name' ),
		CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['PHP'],
		CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['WP']
	);

	$installed = sprintf(
		/* translators: 1. PHP version, 2. WP version */
		__( 'Site is running at PHP version <strong>%1$s</strong> and WordPress version <strong>%2$s</strong>.', 'cardanopress-bootstrap' ),
		PHP_VERSION,
		$GLOBALS['wp_version']
	);

	return sprintf(
		/* translators: 1. requirement message, 2. installed message */
		__( '<p>%1$s</p><p>%2$s</p><p>Please upgrade and try again.</p>', 'cardanopress-bootstrap' ),
		$requirement,
		$installed
	);
}

function cardanopress_bootstrap_notice() {
	printf( '<div class="error">%s</div>', cardanopress_bootstrap_upgrade_message() ); // phpcs:ignore WordPress.Security.EscapeOutput
}

function cardanopress_bootstrap_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'cardanopress_bootstrap_notice' );
}
add_action( 'after_switch_theme', 'cardanopress_bootstrap_switch_theme' );

function cardanopress_bootstrap_customize() {
	wp_die( cardanopress_bootstrap_upgrade_message(), '', array( 'back_link' => true ) );
}
add_action( 'load-customize.php', 'cardanopress_bootstrap_customize' );

function cardanopress_bootstrap_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( cardanopress_bootstrap_upgrade_message() );
	}
}
add_action( 'template_redirect', 'cardanopress_bootstrap_preview' );
