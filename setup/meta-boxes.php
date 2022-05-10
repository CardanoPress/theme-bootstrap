<?php

/**
 * Register meta boxes
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

ThemePlate()->post_meta( array(
	'id'          => 'field',
	'title'       => __( 'ThemePlate Fields', 'cardanopress-bootstrap' ),
	'description' => __( 'All available types.', 'cardanopress-bootstrap' ),
	'fields'      => array(
		'text'     => array(
			'title'       => __( 'Text', 'cardanopress-bootstrap' ),
			'description' => __( 'Enter a text.', 'cardanopress-bootstrap' ),
			'type'        => 'text',
		),
		'date'     => array(
			'title'       => __( 'Date', 'cardanopress-bootstrap' ),
			'description' => __( 'Set a date.', 'cardanopress-bootstrap' ),
			'type'        => 'date',
		),
		'time'     => array(
			'title'       => __( 'Time', 'cardanopress-bootstrap' ),
			'description' => __( 'Set a time.', 'cardanopress-bootstrap' ),
			'type'        => 'time',
		),
		'email'    => array(
			'title'       => __( 'Email', 'cardanopress-bootstrap' ),
			'description' => __( 'Enter an email.', 'cardanopress-bootstrap' ),
			'type'        => 'email',
		),
		'url'      => array(
			'title'       => __( 'URL', 'cardanopress-bootstrap' ),
			'description' => __( 'Enter a url.', 'cardanopress-bootstrap' ),
			'type'        => 'url',
		),
		'link'     => array(
			'title'       => __( 'Link', 'cardanopress-bootstrap' ),
			'description' => __( 'Select a link.', 'cardanopress-bootstrap' ),
			'type'        => 'link',
		),
		'textarea' => array(
			'title'       => __( 'Textarea', 'cardanopress-bootstrap' ),
			'description' => __( 'Enter in a textarea.', 'cardanopress-bootstrap' ),
			'type'        => 'textarea',
		),
		'selects'  => array(
			'title'       => __( 'Selects', 'cardanopress-bootstrap' ),
			'description' => __( 'Basic and Advanced select.', 'cardanopress-bootstrap' ),
			'type'        => 'group',
			'fields'      => array(
				'basic'    => array(
					'title'       => __( 'Basic', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple select.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a value.', 'cardanopress-bootstrap' ),
							'options'     => array( 'One', 'Two', 'Three' ),
							'type'        => 'select',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select values.', 'cardanopress-bootstrap' ),
							'options'     => array( 'One', 'Two', 'Three', 'Four', 'Five', 'Six' ),
							'type'        => 'select',
							'multiple'    => true,
						),
					),
				),
				'advanced' => array(
					'title'       => __( 'Advanced', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple select.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a value.', 'cardanopress-bootstrap' ),
							'options'     => array( 'One', 'Two', 'Three' ),
							'type'        => 'select2',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select values.', 'cardanopress-bootstrap' ),
							'options'     => array( 'One', 'Two', 'Three', 'Four', 'Five', 'Six' ),
							'type'        => 'select2',
							'multiple'    => true,
						),
					),
				),
			),
		),
		'choices'  => array(
			'title'       => __( 'Choices', 'cardanopress-bootstrap' ),
			'description' => __( 'Single and Multiple choices.', 'cardanopress-bootstrap' ),
			'type'        => 'group',
			'style'       => 'boxed',
			'fields'      => array(
				'radios'     => array(
					'title'       => __( 'Radios', 'cardanopress-bootstrap' ),
					'description' => __( 'Inline and List radio.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'fields'      => array(
						'inline' => array(
							'title'       => __( 'Inline', 'cardanopress-bootstrap' ),
							'description' => __( 'Select from radio.', 'cardanopress-bootstrap' ),
							'options'     => array( 'First', 'Second', 'Third' ),
							'type'        => 'radio',
						),
						'list'   => array(
							'title'       => __( 'List', 'cardanopress-bootstrap' ),
							'description' => __( 'Select from radio.', 'cardanopress-bootstrap' ),
							'options'     => array( 'Fourth', 'Fifth', 'Sixth' ),
							'type'        => 'radiolist',
						),
					),
				),
				'checkboxes' => array(
					'title'       => __( 'Checkboxes', 'cardanopress-bootstrap' ),
					'description' => __( 'Inline and List checkbox.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'fields'      => array(
						'inline' => array(
							'title'       => __( 'Inline', 'cardanopress-bootstrap' ),
							'description' => __( 'Check a box.', 'cardanopress-bootstrap' ),
							'options'     => array( 'Uno', 'Dos', 'Tres' ),
							'type'        => 'checkbox',
						),
						'list'   => array(
							'title'       => __( 'List', 'cardanopress-bootstrap' ),
							'description' => __( 'Check a box.', 'cardanopress-bootstrap' ),
							'options'     => array( 'Uno', 'Dos', 'Tres' ),
							'type'        => 'checklist',
						),
					),
				),
			),
		),
		'color'    => array(
			'title'       => __( 'Color', 'cardanopress-bootstrap' ),
			'description' => __( 'Select a color.', 'cardanopress-bootstrap' ),
			'type'        => 'color',
		),
		'files'    => array(
			'title'       => __( 'Files', 'cardanopress-bootstrap' ),
			'description' => __( 'Single and Multiple file.', 'cardanopress-bootstrap' ),
			'type'        => 'group',
			'fields'      => array(
				'single'   => array(
					'title'       => __( 'Single', 'cardanopress-bootstrap' ),
					'description' => __( 'Select a file.', 'cardanopress-bootstrap' ),
					'type'        => 'file',
				),
				'multiple' => array(
					'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
					'description' => __( 'Select files.', 'cardanopress-bootstrap' ),
					'type'        => 'file',
					'multiple'    => true,
				),
			),
		),
		'number'   => array(
			'title'       => __( 'Number', 'cardanopress-bootstrap' ),
			'description' => __( 'Set a number.', 'cardanopress-bootstrap' ),
			'type'        => 'number',
		),
		'range'    => array(
			'title'       => __( 'Range', 'cardanopress-bootstrap' ),
			'description' => __( 'Set a range.', 'cardanopress-bootstrap' ),
			'type'        => 'range',
		),
		'editor'   => array(
			'title'       => __( 'Editor', 'cardanopress-bootstrap' ),
			'description' => __( 'Enter in an editor.', 'cardanopress-bootstrap' ),
			'type'        => 'editor',
		),
		'objects'  => array(
			'title'  => __( 'Objects', 'cardanopress-bootstrap' ),
			'type'   => 'group',
			'style'  => 'boxed',
			'fields' => array(
				'post' => array(
					'title'       => __( 'Posts', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple post.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a post.', 'cardanopress-bootstrap' ),
							'type'        => 'post',
							'options'     => 'post',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select posts.', 'cardanopress-bootstrap' ),
							'type'        => 'post',
							'options'     => 'post',
							'multiple'    => true,
						),
					),
				),
				'page' => array(
					'title'       => __( 'Pages', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple page.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a page.', 'cardanopress-bootstrap' ),
							'type'        => 'page',
							'options'     => 'page',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select pages.', 'cardanopress-bootstrap' ),
							'type'        => 'page',
							'options'     => 'page',
							'multiple'    => true,
						),
					),
				),
				'user' => array(
					'title'       => __( 'Users', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple user.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a user.', 'cardanopress-bootstrap' ),
							'type'        => 'user',
							'options'     => 'administrator',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select users.', 'cardanopress-bootstrap' ),
							'type'        => 'user',
							'options'     => 'administrator',
							'multiple'    => true,
						),
					),
				),
				'term' => array(
					'title'       => __( 'Terms', 'cardanopress-bootstrap' ),
					'description' => __( 'Single and Multiple term.', 'cardanopress-bootstrap' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'cardanopress-bootstrap' ),
							'description' => __( 'Select a term.', 'cardanopress-bootstrap' ),
							'type'        => 'term',
							'options'     => 'category',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'cardanopress-bootstrap' ),
							'description' => __( 'Select terms.', 'cardanopress-bootstrap' ),
							'type'        => 'term',
							'options'     => 'category',
							'multiple'    => true,
						),
					),
				),
			),
		),
		'html'     => array(
			'type'    => 'html',
			'default' => '
				<div style="background-color: #d32f2f; padding: 1rem; border-radius: 0.25rem;">
					<p style="color: #fff; text-align: center;">Display custom content using an <code>html</code> field.</p>
				</div>
			',
		),
	),
) );
