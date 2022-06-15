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
define( 'CARDANOPRESS_BOOTSTRAP_THEME_DEBUG', false );

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


/*
 * ==================================================
 * Setup Theme
 * ==================================================
 */

require_once 'vendor/autoload.php';
require_once 'setup/plugins.php';
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

add_filter( 'get_the_archive_title', function ( $title ) {
    if ( is_post_type_archive( 'proposal' ) ) {
        $title = '';
    }

    return $title;
} );

function cardanopress_bootstrap_class( string $key ): string {
	$classes = array(
		'content' => array(
			'content',
			'py-5',
		),

		'content-active-sidebar' => array(
			'col-sm-6',
			'col-md-7',
			'col-lg-8',
		),

		'content-inactive-sidebar' => array(
			'inactive-sidebar',
			'w-100',
		),

		'sidebar' => array(
			'sidebar',
			'py-5',
			'col-sm-6',
			'col-md-5',
			'col-lg-4',
		),
	);

	$class_string = '';

	if ( 'content' === $key ) {
		$exta_class_key     = is_active_sidebar( 'sidebar' ) ? 'content-active-sidebar' : 'content-inactive-sidebar';
		$classes['content'] = array_merge( $classes['content'], $classes[ $exta_class_key ] );
	} elseif ( 'content-full' === $key ) {
		$key                = 'content';
		$classes['content'] = array_merge( $classes['content'], array( 'w-100' ) );
	}

	if ( array_key_exists( $key, $classes ) ) {
		$class_string = implode( ' ', $classes[ $key ] );
	}

	return $class_string;
}
