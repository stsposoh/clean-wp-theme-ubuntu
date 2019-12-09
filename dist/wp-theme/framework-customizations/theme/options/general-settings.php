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
          'logo_img' => array(
            'label' => __( 'Logo', 'unyson' ),
            'desc'  => __( 'Upload a logo image', 'unyson' ),
            'type'  => 'upload'
          ),
					'social' => array(
						'type'          => 'addable-popup',
						'label'         => __( 'Social', 'fw' ),
						'popup-title'   => __( 'Add/Edit social', 'fw' ),
						'desc'          => __( 'Добавить соц сети', 'fw' ),
						//'template'      => '<img class="img-prev-unyson" src="{{=tab_img["url"]}}">',
						//'template'      => '{{- demo_text }}',
						'template'      => 'Соц сеть',
						'popup-options' => array(
							'social_icon' => array(
                'type'  => 'icon-v2',
                'preview_size' => 'small',
                'modal_size' => 'small',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Соц сети', 'unyson'),
                'desc'  => __('', 'unyson'),
                'help'  => __('', 'unyson'),
              ),
              'social_link' => array(
                'label' => __( 'Ссылка на соц сеть', 'unyson' ),
                'desc'  => __( '', 'fw' ),
                'type'  => 'text',
                'value' => '#'
              )
						)
					),
					'company_address' => array(
						'label' => __( 'Адрес', 'unyson' ),
						'desc'  => __( '', 'fw' ),
						'type'  => 'textarea',
						'value' => ''
					),
          'company_phone' => array(
            'label' => __( 'Телефон', 'unyson' ),
            'desc'  => __( '', 'fw' ),
            'type'  => 'text',
            'value' => ''
          ),
          'company_mail' => array(
            'label' => __( 'Email', 'unyson' ),
            'desc'  => __( '', 'fw' ),
            'type'  => 'text',
            'value' => ''
          ),
          'schedule' => array(
            'label' => __( 'График работы', 'unyson' ),
            'desc'  => __( '', 'fw' ),
            'type'  => 'text',
            'value' => ''
          ),
				)
			),
		)
	)
);
