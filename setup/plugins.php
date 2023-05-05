<?php

/**
 * Require Plugins
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

// TGM Plugin Activation
require_once CARDANOPRESS_BOOTSTRAP_THEME_PATH . 'includes/class-tgm-plugin-activation.php';

if ( ! function_exists( 'cardanopress_bootstrap_plugins' ) ) {
	function cardanopress_bootstrap_plugins() {
		$plugins = array(
			array(
				'name'             => 'CardanoPress',
				'slug'             => 'cardanopress',
				'required'         => true,
				'force_activation' => true,
			),
			array(
				'name'   => 'CardanoPress - Governance',
				'slug'   => 'cardanopress-governance',
			),
			array(
				'name'   => 'CardanoPress - ISPO',
				'slug'   => 'cardanopress-ispo',
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
			),
		);

		$config = array(
			'id'           => 'cardanopress-tgmpa',
			'menu'         => 'cardanopress-plugins',
			'parent_slug'  => 'cardanopress',
			'dismissable'  => true,
			'is_automatic' => true,
		);

		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'cardanopress_bootstrap_plugins' );
}
