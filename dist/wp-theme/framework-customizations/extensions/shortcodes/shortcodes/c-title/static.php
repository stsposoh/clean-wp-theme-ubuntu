<?php if (!defined('FW')) die('Forbidden');

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/c-title');
wp_enqueue_style(
  'c-title',
  $uri . '/static/css/styles.css'
);
wp_enqueue_script(
  'c-title',
  $uri . '/static/js/scripts.js'
);
