<?php
/**
 * Footer (footer.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */
?>
<footer class="footer">
  <?php $args = array(
    'theme_location' => 'bottom',
    'container' => false,
    'menu_class' => '',
    'menu_id' => '',
    'fallback_cb' => false
  );
  wp_nav_menu($args);
  ?>
</footer>

<?php //$name = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('name') : ''; ?>
<?php //echo $name; ?>

<?php wp_footer(); ?>
</body>
</html>
