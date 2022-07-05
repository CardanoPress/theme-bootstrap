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
				'source'           => 'https://github.com/cardanopress/cardanopress/archive/refs/tags/v0.36.0.zip',
				'force_activation' => true,
			),
			array(
				'name'   => 'CardanoPress - Governance',
				'slug'   => 'cardanopress-governance',
				'source' => 'https://github.com/cardanopress/plugin-governance/archive/refs/tags/v0.11.0.zip',
			),
			array(
				'name'   => 'CardanoPress - ISPO',
				'slug'   => 'cardanopress-ispo',
				'source' => 'https://github.com/cardanopress/plugin-ispo/archive/refs/tags/v0.5.0.zip',
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
				'source' => 'https://github.com/kermage/augment-types/releases/download/v1.13.0/augment-types.zip',
			),
		);

		$config = array(
			'id'           => 'cardanopress_bootstrap-tgmpa',
			'menu'         => 'cardanopress_bootstrap-plugins',
			'parent_slug'  => 'cardanopress_bootstrap-options',
			'dismissable'  => false,
			'is_automatic' => true,
		);

		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'cardanopress_bootstrap_plugins' );
}
