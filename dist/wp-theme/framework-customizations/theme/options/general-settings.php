<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'favicon' => array(
						'label' => __( 'Favicon', 'unyson' ),
						'desc'  => __( 'Upload a favicon image', 'unyson' ),
						'type'  => 'upload'
					),
					'body-color' => array(
						'type' => 'color-picker',
						'label' => __('Body Color', 'unyson'),
						'value' => '#fffff',
					),
					'preloader' => array(
						'type'          => 'addable-popup',
						'label'         => __( 'Preloader', 'fw' ),
						'popup-title'   => __( 'Add/Edit preloader photos', 'fw' ),
						'desc'          => __( 'Add photo', 'fw' ),
						'template'      => '<img class="img-prev-unyson" src="{{=tab_img["url"]}}">',
						'popup-options' => array(
							'tab_img' => array(
								'type'  => 'upload',
								'label' => __('Photo', 'fw')
							)
						)
					),
					'fb_address' => array(
						'label' => __( 'Link to Facebook', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'instagram_address' => array(
						'label' => __( 'Link to Instagram', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'youtube_address' => array(
						'label' => __( 'Link to Youtube', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),

					'company_name' => array(
						'label' => __( 'Company name', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => ''
					),

					'company_address' => array(
						'label' => __( 'Company address', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => ''
					),

					'e_mail' => array(
						'label' => __( 'Email', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'text',
						'value' => ''
					)
				)
			),
		)
	)
);
