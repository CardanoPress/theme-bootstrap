<?php

/**
 * Enqueue scripts and styles
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

if ( ! function_exists( 'cardanopress_bootstrap_scripts_styles_early' ) ) {
	function cardanopress_bootstrap_scripts_styles_early() {
		$suffix = ( SCRIPT_DEBUG || CARDANOPRESS_BOOTSTRAP_THEME_DEBUG ) ? '' : '.min';
		$theme  = wp_get_theme( CARDANOPRESS_BOOTSTRAP_THEME_BASE );

		// Deregister the jquery version bundled with WordPress
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );
		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header
		wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery' . $suffix . '.js', array(), '3.6.0', false );
		wp_register_script( 'jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate' . $suffix . '.js', array(), '3.4.0', false );
		wp_add_inline_script( 'jquery', 'jQuery.noConflict();' );

		// jQuery
		wp_enqueue_script( 'jquery' );
		// Google Fonts
		wp_enqueue_style( 'cardanopress_bootstrap-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,800&display=swap', array(), $theme->get( 'Version' ) );
	}
	add_action( 'wp_enqueue_scripts', 'cardanopress_bootstrap_scripts_styles_early', 5 );
}

if ( ! function_exists( 'cardanopress_bootstrap_scripts_styles_late' ) ) {
	function cardanopress_bootstrap_scripts_styles_late() {
		$suffix = ( SCRIPT_DEBUG || CARDANOPRESS_BOOTSTRAP_THEME_DEBUG ) ? '' : '.min';
		$theme  = wp_get_theme( CARDANOPRESS_BOOTSTRAP_THEME_BASE );

		// Site scripts and styles
		wp_enqueue_style( 'cardanopress_bootstrap-style', CARDANOPRESS_BOOTSTRAP_THEME_URL . 'assets/css/cardanopress-bootstrap' . $suffix . '.css', array(), $theme->get( 'Version' ) );
		wp_enqueue_script( 'cardanopress_bootstrap-script', CARDANOPRESS_BOOTSTRAP_THEME_URL . 'assets/js/cardanopress-bootstrap' . $suffix . '.js', array(), $theme->get( 'Version' ), true );

		$cardanopress_bootstrap_options = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		);
		wp_localize_script( 'cardanopress_bootstrap-script', 'cardanopress_bootstrap_options', apply_filters( 'cardanopress_bootstrap_localize_script', $cardanopress_bootstrap_options ) );
	}
	add_action( 'wp_enqueue_scripts', 'cardanopress_bootstrap_scripts_styles_late', 20 );
}
