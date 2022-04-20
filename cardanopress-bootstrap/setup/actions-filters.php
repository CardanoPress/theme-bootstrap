<?php

/**
 * Actions and Filters
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

// Number of revisions to keep
if ( ! function_exists( 'cardanopress_bootstrap_keep_revisions' ) ) {
	function cardanopress_bootstrap_keep_revisions( $num, $post ) {
		return 30;
	}
	add_filter( 'wp_revisions_to_keep', 'cardanopress_bootstrap_keep_revisions', 10, 2 );
}

// Remove WP icon from the admin bar.
if ( ! function_exists( 'cardanopress_bootstrap_remove_wp_icon' ) ) {
	function cardanopress_bootstrap_remove_wp_icon() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'wp-logo' );
	}
	add_action( 'wp_before_admin_bar_render', 'cardanopress_bootstrap_remove_wp_icon' );
}

// Makes WordPress-generated emails appear 'from' the site name.
if ( ! function_exists( 'cardanopress_bootstrap_mail_from_name' ) ) {
	function cardanopress_bootstrap_mail_from_name() {
		return get_option( 'blogname' );
	}
	add_filter( 'wp_mail_from_name', 'cardanopress_bootstrap_mail_from_name' );
}

// Makes WordPress-generated emails appear 'from' the site admin email address.
if ( ! function_exists( 'cardanopress_bootstrap_wp_mail_from' ) ) {
	function cardanopress_bootstrap_wp_mail_from() {
		return get_option( 'admin_email' );
	}
	add_filter( 'wp_mail_from', 'cardanopress_bootstrap_wp_mail_from' );
}
