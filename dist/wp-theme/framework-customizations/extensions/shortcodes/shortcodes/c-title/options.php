<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
  'c_title' => array(
    'label' => __('Title', 'fw'),
    'type' => 'text',
    'desc' => __('', 'fw')
  ),
  'c_title_header_attr' => array(
    'label' => __('Further attributes for title', 'fw'),
    'type' => 'text',
    'desc' => __('For example data- attributes. Point without quotes. If empty, attributes for animation will get by default', 'the-core'),
    'help' => __('For example: data-parallax=scroll or data-aos=fade-up', 'the-core'),
    'value' => ''
  ),
  'c_sub_title' => array(
    'label' => __('Sub-title', 'fw'),
    'type' => 'text',
    'desc' => __('', 'fw')
  ),
  'c_title_sub_header_attr' => array(
    'label' => __('Further attributes for sub-title', 'fw'),
    'type' => 'text',
    'desc' => __('For example data- attributes. Point without quotes. If empty, attributes for animation will get by default', 'the-core'),
    'help' => __('For example: data-parallax=scroll or data-aos=fade-up', 'the-core'),
    'value' => ''
  ),
  'c_title_logo_attr' => array(
    'label' => __('Further attributes for logo', 'fw'),
    'type' => 'text',
    'desc' => __('For example data- attributes. Point without quotes. If empty, attributes for animation will get by default', 'the-core'),
    'help' => __('For example: data-parallax=scroll or data-aos=fade-up', 'the-core'),
    'value' => ''
  ),
);
