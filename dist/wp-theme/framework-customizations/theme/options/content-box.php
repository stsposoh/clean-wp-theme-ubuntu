<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content' => array(
		'title'   => __( 'Content', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Content Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					fw()->theme->get_options( 'content' ),
				),
			),
		)
	)
);