<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => __( 'Footer', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Footer Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					fw()->theme->get_options( 'footer' ),
				),
			),
		)
	)
);