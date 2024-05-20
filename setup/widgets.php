<?php

/**
 * Register widget areas
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

if ( ! function_exists( 'cardanopress_bootstrap_widgets_init' ) ) {
	function cardanopress_bootstrap_widgets_init() {
		register_sidebar( array(
			'id'            => 'error404',
			'name'          => __( '404 Content', 'cardanopress-bootstrap' ),
			'description'   => __( 'Add widgets here to appear in 404 page.', 'cardanopress-bootstrap' ),
			'before_widget' => '',
			'after_widget'  => '',
		) );
		register_sidebar( array(
			'id'            => 'sidebar',
			'name'          => __( 'Sidebar Area', 'cardanopress-bootstrap' ),
			'description'   => __( 'Add widgets here to appear in sidebar.', 'cardanopress-bootstrap' ),
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '<section class="widget %2$s">',
			'after_widget'  => '</section>',
		) );
		register_sidebars( 3, array(
			'id'            => 'footer',
			/* translators: count */
			'name'          => __( 'Footer Area %d', 'cardanopress-bootstrap' ),
			'description'   => __( 'Add widgets here to appear in footer.', 'cardanopress-bootstrap' ),
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<section class="widget %2$s">',
			'after_widget'  => '</section>',
		) );
	}
	add_action( 'widgets_init', 'cardanopress_bootstrap_widgets_init' );
}
