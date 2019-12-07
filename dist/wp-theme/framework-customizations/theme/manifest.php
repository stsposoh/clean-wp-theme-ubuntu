<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['id'] = 'scratch';

$manifest['requirements'] = array(
	'unyson' => array(),
	'framework' => array(
			/*'min_version' => '1.0.0',
			'max_version' => '1.99.9'*/
	),
	//'extensions' => array(
			/*'extension_name' => array(),*/
			/*'extension_name' => array(
					'min_version' => '1.0.0',
					'max_version' => '2.99.9'
			),*/
	//)
);

$manifest['supported_extensions'] = array(
	'page-builder' => array(),
	'forms'        => array(),
	'megamenu'     => array(),
	'feedback' 		=> array(),
);