<?php

/**
 * Register settings
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

ThemePlate()->settings( array(
	'id'          => 'google',
	'title'       => __( 'Google Codes', 'cardanopress-bootstrap' ),
	'description' => __( 'Enter the tracking IDs to use in site.', 'cardanopress-bootstrap' ),
	'context'     => 'side',
	'fields'      => array(
		'analytics'  => array(
			'title'       => __( 'Analytics', 'cardanopress-bootstrap' ),
			'description' => __( 'UA-XXXXX-Y', 'cardanopress-bootstrap' ),
			'type'        => 'text',
		),
		'tagmanager' => array(
			'title'       => __( 'Tag Manager', 'cardanopress-bootstrap' ),
			'description' => __( 'GTM-XXXX', 'cardanopress-bootstrap' ),
			'type'        => 'text',
		),
	),
) );

ThemePlate()->settings( array(
	'id'          => 'social',
	'title'       => __( 'Social Profiles', 'cardanopress-bootstrap' ),
	'description' => __( 'Enter the links to the associated service.', 'cardanopress-bootstrap' ),
	'context'     => 'normal',
	'fields'      => array(
		'profiles' => array(
			'title'      => __( 'Service', 'cardanopress-bootstrap' ),
			'type'       => 'group',
			'repeatable' => true,
			'fields'     => array(
				'provider' => array(
					'title'   => __( 'Provider', 'cardanopress-bootstrap' ),
					'type'    => 'select',
					'options' => array(
						'facebook'    => 'Facebook',
						'twitter'     => 'Twitter',
						'instagram'   => 'Instagram',
						'linkedin'    => 'LinkedIn',
						'youtube'     => 'Youtube',
						'pinterest'   => 'Pinterest',
						'google-plus' => 'Google+',
					),
				),
				'link'     => array(
					'title' => __( 'Link', 'cardanopress-bootstrap' ),
					'type'  => 'url',
				),
			),
		),
	),
) );
