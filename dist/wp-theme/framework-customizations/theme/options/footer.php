<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer_preloader' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Logo for Footer', 'fw' ),
		'popup-title'   => __( 'Add/Edit photos', 'fw' ),
		'desc'          => __( 'Show popup with images', 'fw' ),
		'template'      => 'Logo images',
		'limit' => 1,
		'popup-options' => array(
			'footer_preloader_imgs' => array(
				'type'          => 'addable-popup',
				'label'         => __( 'Logo for Footer', 'fw' ),
				'popup-title'   => __( 'Add/Edit photos', 'fw' ),
				'desc'          => __( 'Add\Edit images', 'fw' ),
				'template'      => '<img class="img-prev-unyson" src="{{=tab_img["url"]}}">',
				'popup-options' => array(
					'tab_img' => array(
						'type'  => 'upload',
						'label' => __('Photo', 'fw')
					)
				),
			)
		),
	),

	'footer_block_1' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in Products', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block Products in Footer', 'fw' ),
		'template'      => '{{- footer_block_1_link_name }}',
		'popup-options' => array(
			'footer_block_1_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_1_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_block_2' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in Services', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block Services and Polices in Footer', 'fw' ),
		'template'      => '{{- footer_block_2_link_name }}',
		'popup-options' => array(
			'footer_block_2_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_2_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_block_3' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in About', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block About indiGem in Footer', 'fw' ),
		'template'      => '{{- footer_block_3_link_name }}',
		'popup-options' => array(
			'footer_block_3_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_3_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_block_4' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in Auctions', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block Auctions in Footer', 'fw' ),
		'template'      => '{{- footer_block_4_link_name }}',
		'popup-options' => array(
			'footer_block_4_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_4_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_block_5' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in Hot Deals', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block Hot Deals in Footer', 'fw' ),
		'template'      => '{{- footer_block_5_link_name }}',
		'popup-options' => array(
			'footer_block_5_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_5_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_block_6' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Links in News', 'fw' ),
		'popup-title'   => __( 'Add/Edit links', 'fw' ),
		'desc'          => __( 'Links in block News in Footer', 'fw' ),
		'template'      => '{{- footer_block_6_link_name }}',
		'popup-options' => array(
			'footer_block_6_link_name' => array(
				'label' => __( 'Link name', 'unyson' ),
				'desc'  => __( 'Name for link', 'fw' ),
				'type'  => 'text',
				'value' => ''
			),
			'footer_block_6_link_address' => array(
				'label' => __( 'Link address', 'unyson' ),
				'desc'  => __( 'Address for link', 'fw' ),
				'type'  => 'text',
				'value' => '#'
			)
		)
	),

	'footer_copy' => array(
		'label' => __( 'Copyright', 'unyson' ),
		'desc'  => __( 'Copyright', 'fw' ),
		'type'  => 'text',
		'value' => ''
	)
);
