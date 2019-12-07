
<?php
/**
 * Sidebar (sidebar.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { ?>
<aside class="col-sm-3">
	<?php dynamic_sidebar('sidebar'); ?>
</aside>
<?php } ?>
