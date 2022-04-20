<?php

/**
 * Theme Hooks
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

require_once CARDANOPRESS_BOOTSTRAP_PLUGIN_PATH . 'includes/google-tracking-codes.php';

if ( ! function_exists( 'cardanopress_bootstrap_add_ga' ) ) {
	function cardanopress_bootstrap_add_ga() {
		$tid = cardanopress_bootstrap_options( 'google_analytics' );

		if ( $tid ) {
			themeplate_google_analytics_gtag( $tid );
		}
	}
	add_action( 'wp_head', 'cardanopress_bootstrap_add_ga', 5 );
}

if ( ! function_exists( 'cardanopress_bootstrap_add_gtm_head' ) ) {
	function cardanopress_bootstrap_add_gtm_head() {
		$tid = cardanopress_bootstrap_options( 'google_tagmanager' );

		if ( $tid ) {
			themeplate_google_tag_head( $tid );
		}
	}
	add_action( 'wp_head', 'cardanopress_bootstrap_add_gtm_head', 5 );
}

if ( ! function_exists( 'cardanopress_bootstrap_add_gtm_body' ) ) {
	function cardanopress_bootstrap_add_gtm_body() {
		$tid = cardanopress_bootstrap_options( 'google_tagmanager' );

		if ( $tid ) {
			themeplate_google_tag_body( $tid );
		}
	}
	add_action( 'wp_body_open', 'cardanopress_bootstrap_add_gtm_body', 5 );
}
