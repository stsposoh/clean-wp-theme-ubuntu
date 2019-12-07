<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title'   => __( 'Header', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Header Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					fw()->theme->get_options( 'header' ),
				),
			),
		)
	)
);