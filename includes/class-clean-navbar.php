<?php

/**
 * Clean Navbar Walker
 *
 * @package ThemePlate
 * @since 0.1.0
 */

if ( ! class_exists( 'Clean_Navbar' ) ) {
	if ( class_exists( 'ThemePlate\NavWalker' ) ) {
		class Clean_Navbar extends ThemePlate\NavWalker {
			public $classes = array(
				'sub-menu' => 'dropdown-menu',
				'has-sub'  => 'dropdown',
				'active'   => '',
				'item'     => 'nav-item',
			);

			public function link_attributes( $atts, $item, $args, $depth ) {
				$atts['class'] = 'nav-link';

				if ( $args->walker->has_children ) {
					$atts['class']        .= ' dropdown-toggle';
					$atts['data-toggle']   = 'dropdown';
					$atts['aria-haspopup'] = 'true';
				}

				if ( $item->current ) {
					$atts['class'] .= ' active';
				}

				return $atts;
			}
		}
	} else {
		class Clean_Navbar extends Walker_Nav_Menu {}

		add_filter( 'wp_nav_menu_args', function( $args ) {
			if ( 'wp_page_menu' === $args['fallback_cb'] ) {
				$args['fallback_cb'] = function( $args ) {
					$texts = array(
						'Click here',
						'to add',
						'a menu',
					);

					$nav_menu = '<ul class="nav nav-pills"><li class="nav-item">' . implode( '</li><li class="nav-item">', array_map( function( $text ) {
						return '<a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" class="nav-link">' . $text . '</a>';
					}, $texts ) ) . '</li></ul>';

					if ( $args['echo'] ) {
						echo $nav_menu;
					} else {
						return $nav_menu;
					}
				};
			}

			return $args;
		}, 10, 2 );
	}
}
