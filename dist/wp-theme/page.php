<?php
/**
 * Basic template (page.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */

get_header(); ?>

<main>
	<div class="<?php content_class_by_sidebar(); ?>">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--				<h1>--><?php //the_title(); ?><!--</h1>-->
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
