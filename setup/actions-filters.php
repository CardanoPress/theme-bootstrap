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


add_action( 'after_switch_theme', 'flush_rewrite_rules' );

// Move all scripts to footer
if ( ! function_exists( 'cardanopress_bootstrap_scripts_to_footer' ) ) {
	function cardanopress_bootstrap_scripts_to_footer() {
		remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
		remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
		remove_action( 'wp_head', 'wp_print_scripts' );
	}
	add_action( 'wp_enqueue_scripts', 'cardanopress_bootstrap_scripts_to_footer' );
}

// Remove JPEG compression.
if ( ! function_exists( 'cardanopress_bootstrap_jpeg_quality' ) ) {
	function cardanopress_bootstrap_jpeg_quality() {
		return 100;
	}
	add_filter( 'jpeg_quality', 'cardanopress_bootstrap_jpeg_quality' );
}

// Custom excerpt length
if ( ! function_exists( 'cardanopress_bootstrap_excerpt_length' ) ) {
	function cardanopress_bootstrap_excerpt_length( $length ) {
		return 50;
	}
	add_filter( 'excerpt_length', 'cardanopress_bootstrap_excerpt_length' );
}

// Custom excerpt read more
if ( ! function_exists( 'cardanopress_bootstrap_excerpt_string' ) ) {
	function cardanopress_bootstrap_excerpt_string( $more ) {
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'cardanopress_bootstrap_excerpt_string' );
}

// Re-add underline and justify buttons in the editor
if ( ! function_exists( 'cardanopress_bootstrap_editor_buttons' ) ) {
	function cardanopress_bootstrap_editor_buttons( $buttons ) {
		$temp    = array_merge( array_slice( $buttons, 0, 3, true ), array( 4 => 'underline' ), array_slice( $buttons, 3, count( $buttons ) - 1, true ) );
		$buttons = $temp;
		$temp    = array_merge( array_slice( $buttons, 0, 9, true ), array( 10 => 'alignjustify' ), array_slice( $buttons, 9, count( $buttons ) - 1, true ) );
		$buttons = $temp;

		return $buttons;
	}
	add_filter( 'mce_buttons', 'cardanopress_bootstrap_editor_buttons' );
}

// Replace WP login screen logo.
if ( ! function_exists( 'cardanopress_bootstrap_login_logo' ) ) {
	function cardanopress_bootstrap_login_logo() {
		?>
		<style type="text/css">
			body.login h1 a {
				background-image: url( <?php echo esc_html( CARDANOPRESS_BOOTSTRAP_THEME_URL ); ?>screenshot.png );
				background-position: center;
				background-size: 440px 330px;
				width: 320px;
				height: 120px;
				box-shadow: 0 1px 3px rgba( 0, 0, 0, .13 );
			}
		</style>
		<?php
	}
	add_action( 'login_enqueue_scripts', 'cardanopress_bootstrap_login_logo' );
}

// Link WP login logo to homepage.
if ( ! function_exists( 'cardanopress_bootstrap_login_headerurl' ) ) {
	function cardanopress_bootstrap_login_headerurl() {
		return home_url();
	}
	add_filter( 'login_headerurl', 'cardanopress_bootstrap_login_headerurl' );
}

// Use the site title instead of 'WordPress'.
if ( ! function_exists( 'cardanopress_bootstrap_login_headertext' ) ) {
	function cardanopress_bootstrap_login_headertext() {
		return get_option( 'blogname' );
	}
	add_filter( 'login_headertext', 'cardanopress_bootstrap_login_headertext' );
}

// Set default embed size.
if ( ! function_exists( 'cardanopress_bootstrap_embed_defaults' ) ) {
	function cardanopress_bootstrap_embed_defaults( $attr ) {
		return array(
			'width'  => '1280',
			'height' => '720',
		);
	}
	add_filter( 'embed_defaults', 'cardanopress_bootstrap_embed_defaults' );
}
