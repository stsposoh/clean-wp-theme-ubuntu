<?php
/**
 * Categoty template (category.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */
get_header(); ?>
<section>
	<div class="fw-container">
		<div class="fw-row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<h1><?php single_cat_title(); ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop'); ?>
				<?php endwhile;
				else: echo '<p>Нет записей.</p>'; endif; ?>
				<?php pagination(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
