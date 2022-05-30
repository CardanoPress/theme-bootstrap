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
				'name'             => 'ThemePlate',
				'slug'             => 'themeplate',
				'required'         => true,
				'source'           => 'https://github.com/kermage/ThemePlate/releases/download/v3.18.3/themeplate.zip',
				'force_activation' => true,
			),
			array(
				'name'             => 'CardanoPress',
				'slug'             => 'cardanopress',
				'required'         => true,
				'source'           => 'https://github.com/pbwebdev/cardanopress/archive/refs/tags/v0.31.0.zip',
				'force_activation' => true,
			),
			array(
				'name'   => 'CardanoPress - Governance',
				'slug'   => 'cardanopress-governance',
				'source' => 'https://github.com/pbwebdev/cardanopress-governance/archive/refs/tags/v0.8.0.zip',
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
				'source' => 'https://github.com/kermage/augment-types/releases/download/v1.12.0/augment-types.zip',
			),
			array(
				'name' => 'Wordfence Security',
				'slug' => 'wordfence',
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
