<?php

/**
 * Plugin Name: CardanoPress Bootstrap
 * Plugin URI:  https://github.com/kermage/generator-themeplate
 * Author:      Gene Alyson Fortunado Torcende
 * Author URI:  mailto:genealyson.torcende@gmail.com
 * Description: A ThemePlate project for CardanoPress Bootstrap
 * Version:     0.1.0
 * License:     GPL-2.0-only
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: cardanopress-bootstrap
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

/* generator-themeplate v1.15.1 */

// Accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * ==================================================
 * Global constants
 * ==================================================
 */
// phpcs:disable Generic.Functions.FunctionCallArgumentSpacing.TooMuchSpaceAfterComma
define( 'CARDANOPRESS_BOOTSTRAP_PLUGIN_FILE', __FILE__ );
define( 'CARDANOPRESS_BOOTSTRAP_PLUGIN_URL',  plugin_dir_url( __FILE__ ) );
define( 'CARDANOPRESS_BOOTSTRAP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
// phpcs:enable

function cardanopress_bootstrap_options( $key = '', $default = false ) {
	$options = get_option( 'cardanopress_bootstrap-options', $default );
	$value   = $default;

	if ( empty( $key ) ) {
		$value = $options;
	} elseif ( is_array( $options ) && array_key_exists( $key, $options ) && false !== $options[ $key ] ) {
		$value = $options[ $key ];
	}

	return $value;
}


/*
 * ==================================================
 * Setup Plugin
 * ==================================================
 */

if ( class_exists( 'ThemePlate' ) ) :
	ThemePlate( array(
		'title' => 'CardanoPress Bootstrap',
		'key'   => 'cardanopress_bootstrap',
	) );
	require_once 'setup/post-types.php';
	require_once 'setup/settings.php';
	require_once 'setup/meta-boxes.php';
endif;

require_once 'setup/plugins.php';
require_once 'setup/hooks.php';
require_once 'setup/actions-filters.php';


/*
 * ==================================================
 * Extra custom functions
 * ==================================================
 */

