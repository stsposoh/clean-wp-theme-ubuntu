<?php
/**
 * Basic template (page.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */

get_header(); ?>

<main>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <? if (!is_front_page() && !is_home() ) { ?>
    <h1><?the_title();?></h1>
    <? }; ?>

    <?php the_content(); ?>
  </article>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
