<?php
/**
 * Error template (404.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */

get_header(); ?>

<main>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  </article>
</main>

<?php get_footer(); ?>
