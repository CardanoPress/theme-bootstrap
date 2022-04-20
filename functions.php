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
	'PHP' => '7.3',
	'WP'  => '5.6',
) );
// phpcs:enable

// Check if PHP and WordPress installed versions met the requirements
if ( version_compare( PHP_VERSION, CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['PHP'], '<' ) || version_compare( $GLOBALS['wp_version'], CARDANOPRESS_BOOTSTRAP_THEME_REQUIRES['WP'], '<' ) ) {
	require_once CARDANOPRESS_BOOTSTRAP_THEME_PATH . 'includes/compatibility.php';
	return;
}

// Better move this folder (cardanopress-bootstrap) to the plugins directory, then remove these lines after
require_once 'cardanopress-bootstrap/cardanopress-bootstrap.php';


/*
 * ==================================================
 * Setup Theme
 * ==================================================
 */

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

