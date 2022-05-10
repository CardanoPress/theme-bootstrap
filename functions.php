<?php

/**
 * CardanoPress Bootstrap functions and definitions
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
define( 'CARDANOPRESS_BOOTSTRAP_THEME_BASE',  basename( __DIR__ ) );
define( 'CARDANOPRESS_BOOTSTRAP_THEME_URL',   get_theme_root_uri( CARDANOPRESS_BOOTSTRAP_THEME_BASE ) . '/' . CARDANOPRESS_BOOTSTRAP_THEME_BASE . '/' );
define( 'CARDANOPRESS_BOOTSTRAP_THEME_PATH',  get_theme_root( CARDANOPRESS_BOOTSTRAP_THEME_BASE ) . '/' . CARDANOPRESS_BOOTSTRAP_THEME_BASE . '/' );
define( 'CARDANOPRESS_BOOTSTRAP_THEME_DEBUG', true );

define( 'CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES', array(
	'PHP' => '7.4',
	'WP'  => '5.9',
) );
// phpcs:enable

// Check if PHP and WordPress installed versions met the requirements
if ( version_compare( PHP_VERSION, CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['PHP'], '<' ) || version_compare( $GLOBALS['wp_version'], CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['WP'], '<' ) ) {
	require_once CARDANOPRESS_BOOTSTRAP_THEME_PATH . 'includes/compatibility.php';
	return;
}

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
 * Setup Theme
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

require_once 'vendor/autoload.php';
require_once 'setup/plugins.php';
require_once 'setup/hooks.php';
require_once 'setup/features.php';
require_once 'setup/navigations.php';
require_once 'setup/widgets.php';
require_once 'setup/scripts-styles.php';
require_once 'setup/actions-filters.php';


/*
 * ==================================================
 * Extra custom functions
 * ==================================================
 */

EUM_Handler::run( __FILE__, 'https://raw.githubusercontent.com/pbwebdev/cardanopress-bootstrap-theme/main/update-data.json' );

add_filter( 'cp-governance-enqueue-bootstrap-style', '__return_false' );
add_filter( 'cp-governance-enqueue-bootstrap-script', '__return_false' );
