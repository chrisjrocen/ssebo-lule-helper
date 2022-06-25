<?php
/**
 * Custom Fields for the lms slider CPT.
 *
 * @package ssebolulehelper.
 */

// Custom ACF fields.

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_62b7637183bf4',
		'title' => 'Track',
		'fields' => array(
			array(
				'key' => 'field_62b763bf64c32',
				'label' => 'Release Date',
				'name' => 'release_date',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'F j, Y',
				'return_format' => 'F j, Y',
				'first_day' => 0,
			),
			array(
				'key' => 'field_62b7640a64c33',
				'label' => 'Featured',
				'name' => 'featured',
				'type' => 'text',
				'instructions' => 'Artist(s) featured on the Track (if any)',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62b7646364c34',
				'label' => 'Lyrics',
				'name' => 'lyrics',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_62b764a964c35',
				'label' => 'Lyrics file for download',
				'name' => 'lyrics_file',
				'type' => 'file',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_62b7646364c34',
							'operator' => '!=empty',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => 'pdf,docx,doc',
			),
			array(
				'key' => 'field_62b7651f64c36',
				'label' => 'Youtube Link',
				'name' => 'youtube_link',
				'type' => 'oembed',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'width' => '',
				'height' => '',
			),
			array(
				'key' => 'field_62b7661a419a4',
				'label' => 'Download link',
				'name' => 'download_link',
				'type' => 'url',
				'instructions' => 'direct download link from wp media',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sebbo_lule_track',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;		