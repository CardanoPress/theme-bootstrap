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
				'source'           => 'https://github.com/cardanopress/cardanopress/archive/refs/tags/v0.40.0.zip',
				'force_activation' => true,
			),
			array(
				'name'   => 'CardanoPress - Governance',
				'slug'   => 'plugin-governance',
				'source' => 'https://github.com/cardanopress/plugin-governance/archive/refs/tags/v0.14.0.zip',
			),
			array(
				'name'   => 'CardanoPress - ISPO',
				'slug'   => 'plugin-ispo',
				'source' => 'https://github.com/cardanopress/plugin-ispo/archive/refs/tags/v0.7.0.zip',
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
				'source' => 'https://github.com/kermage/augment-types/releases/download/v1.13.0/augment-types.zip',
			),
		);

		$config = array(
			'id'           => 'cardanopress-tgmpa',
			'menu'         => 'cardanopress-plugins',
			'parent_slug'  => 'cardanopress',
			'dismissable'  => false,
			'is_automatic' => true,
		);

		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'cardanopress_bootstrap_plugins' );
}
