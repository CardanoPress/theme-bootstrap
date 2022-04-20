<?php

/**
 * Require Plugins
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

// TGM Plugin Activation
require_once CARDANOPRESS_BOOTSTRAP_PLUGIN_PATH . 'includes/class-tgm-plugin-activation.php';

if ( ! function_exists( 'cardanopress_bootstrap_plugins' ) ) {
	function cardanopress_bootstrap_plugins() {
		$plugins = array(
			array(
				'name'             => 'ThemePlate',
				'slug'             => 'themeplate',
				'required'         => true,
				'source'           => 'https://github.com/kermage/ThemePlate/releases/download/v3.18.0/themeplate.zip',
				'force_activation' => true,
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
				'source' => 'https://github.com/kermage/augment-types/releases/download/v1.11.0/augment-types.zip',
			),
			array(
				'name' => 'Enable Media Replace',
				'slug' => 'enable-media-replace',
			),
			array(
				'name' => 'Regenerate Thumbnails Advanced',
				'slug' => 'regenerate-thumbnails-advanced',
			),
			array(
				'name' => 'Safe SVG',
				'slug' => 'safe-svg',
			),
			array(
				'name' => 'ShortPixel Image Optimizer',
				'slug' => 'shortpixel-image-optimiser',
			),
			array(
				'name' => 'UpdraftPlus - Backup/Restore',
				'slug' => 'updraftplus',
			),
			array(
				'name' => 'W3 Total Cache',
				'slug' => 'w3-total-cache',
			),
			array(
				'name' => 'Wordfence Security',
				'slug' => 'wordfence',
			),
			array(
				'name' => 'WP Mail SMTP by WPForms',
				'slug' => 'wp-mail-smtp',
			),
			array(
				'name' => 'Yoast SEO',
				'slug' => 'wordpress-seo',
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
