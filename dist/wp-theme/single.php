<?php
/**
 * Single template (single.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */

get_header();
?>

<div class="single-post">

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-post__header" style="background-image: url(<?php the_post_thumbnail_url();?>)" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
      <div class="single-post__header-btm-bg-filter"></div>
      <div class="single-post__header-btm-bg">
        <div class="single-post__header-controls">
          <div class="single-post__header-controls-arrows --left" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="800">
            <?php previous_post_link('%link', '<svg width="47" height="20"><use xlink:href="/wp-content/themes/wp-theme/img/svg-sprite.svg#arrow-horizontal"></use></svg> Previous article' , TRUE); ?>
          </div>
          <div class="single-post__header-controls-arrows --right" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="800">
            <?php next_post_link('%link', 'Next article <svg width="47" height="20"><use xlink:href="/wp-content/themes/wp-theme/img/svg-sprite.svg#arrow-horizontal"></use></svg>' , TRUE); ?>
          </div>
        </div>
        <img src="/wp-content/themes/ig-show/img/sect-show-layer-btm.svg" alt="">
      </div>
    </div>

    <div class="single-post__info" data-aos="fade-in" data-aos-delay="1400" data-aos-duration="800">
      <div class="single-post__info-date"><?php the_date('M j, Y'); ?></div>
      <div class="single-post__info-tags"><?php the_tags('', '', ''); ?></div>
    </div>

    <div class="single-post__content">
      <div class="single-post__title">
        <div class="title --no-subtitle">
          <h3 class="title__main-text h3" data-aos="fade-up" data-aos-duration="700"><?php the_title(); ?></h3>
          <div data-aos="zoom-in" data-aos-duration="900">
            <span class="title__logo">
              <svg width="80" height="103"><use xlink:href="/wp-content/themes/ig-show/img/svg-sprite.svg#logo"></use></svg>
            </span>
          </div>
        </div>
      </div>

      <?php the_content(); ?>

      <div class="single-post__sharing" data-aos="fade-up" data-aos-duration="700">
        <div class="single-post__sharing-title">share by</div>
        <div class="single-post__sharing-icons">
          <div class="social">
            <div class="likely">
              <div class="social__link facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <rect x="0.5" y="0.5" width="19" height="19"/>
                  <path d="M13 5H11.5C10.4 5 9.5 5.9 9.5 7V15M7 8.5H13"/>
                </svg>
              </div>
  <!--            <div class="twitter">Tweet</div>-->
  <!--            <div class="vkontakte">Share</div>-->
  <!--            <div class="pinterest">Pin</div>-->
  <!--            <div class="odnoklassniki">Like</div>-->
  <!--            <div class="telegram">Send</div>-->
  <!--            <div class="linkedin">Share</div>-->
  <!--            <div class="whatsapp">Send</div>-->
            </div>
          </div>
        </div>
      </div>

      <div class="title --no-subtitle">
        <h3 class="title__main-text h3" data-aos="fade-up" data-aos-duration="700">Related posts</h3>
        <div data-aos="zoom-in" data-aos-duration="900">
            <span class="title__logo">
              <svg width="80" height="103"><use xlink:href="/wp-content/themes/ig-show/img/svg-sprite.svg#logo"></use></svg>
            </span>
        </div>
      </div>
    </div>

    <div class="news-carousel js-news-carousel" data-aos="fade-up" data-aos-duration="700">
      <?php
      $args = array(
        'posts_per_page' => 10,
        'category_name' => 'news',
        'post__not_in' => [get_the_ID()]
      );

      $query = new WP_Query($args);
      while ( $query->have_posts() ) {
      $query->the_post(); ?>

      <div class="new-card">
        <div class="new-card__img">
          <img src="<?php the_post_thumbnail_url(600, 430);?>" alt="">
        </div>
        <div class="new-card__content">
          <h3 class="new-card__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="new-card__text"><?php the_excerpt(); ?></div>
          <div class="new-card__footer">
            <div class="new-card__more">
              <a class="new-card__more-link" href="<?php the_permalink(); ?>">read more...</a>
              <div class="new-card__line">
                <img src="/wp-content/themes/ig-show/img/line-3.svg" alt="">
              </div>
            </div>
            <div class="new-card__timestamp">
              <span class="new-card__date"><?php the_date('d.m.Y'); ?></span>
              <span class="new-card__time"><?php the_time('G:i'); ?></span>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>

    <div class="news-carousel__controls">
      <div class="slider-controls">
        <div class="slider-controls__arrow --left js-news-slider-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="47" height="20" viewBox="0 0 47 20"><path d="M45.8 10L0 10"/><path d="M36.8 19L45.8 10 36.8 1"/></svg>
        </div>
        <div class="slider-controls__line">
          <svg class="slider-controls__line-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461 12">
            <path class="slider-controls__line-svg-inner" d="M460 6.8L452.3 4.7 441.5 6.3 436.5 4.7 429.7 7.4 425.7 5.8 415.3 7.4 401.7 5.8 397.2 8.9 384.5 4.7 377.3 10 366.5 7.4 320.8 7.4C314.8 4.9 302.5 0.3 301.4 1.1 300.3 1.9 294 3.9 291 4.7 283.3 4.1 267.9 2.7 267.5 2.7 267.1 2.7 259.2 4.4 255.3 5.3L241.7 2.7 227.3 11 210.1 2.7 201.5 9.4 187.5 6.8 177.1 8.9 157.7 5.8 145.9 8.9 135.6 6.8 0 6.8" />
            <path class="slider-controls__line-svg-outer" d="M460 6.8L452.3 4.7 441.5 6.3 436.5 4.7 429.7 7.4 425.7 5.8 415.3 7.4 401.7 5.8 397.2 8.9 384.5 4.7 377.3 10 366.5 7.4 320.8 7.4C314.8 4.9 302.5 0.3 301.4 1.1 300.3 1.9 294 3.9 291 4.7 283.3 4.1 267.9 2.7 267.5 2.7 267.1 2.7 259.2 4.4 255.3 5.3L241.7 2.7 227.3 11 210.1 2.7 201.5 9.4 187.5 6.8 177.1 8.9 157.7 5.8 145.9 8.9 135.6 6.8 0 6.8" />
          </svg>
        </div>
        <div class="slider-controls__arrow --right js-news-slider-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="47" height="20" viewBox="0 0 47 20"><path d="M45.8 10L0 10"/><path d="M36.8 19L45.8 10 36.8 1"/></svg>
        </div>
      </div>
    </div>

  </div>
  <?php endwhile; ?>
<!--    --><?php //previous_post_link('%link', '<- Предыдущий пост: %title', TRUE); ?>
<!--    --><?php //next_post_link('%link', 'Следующий пост: %title ->', TRUE); ?>
<!--    --><?php //if (comments_open() || get_comments_number()) comments_template('', true); ?>
</div>

<?php get_footer(); ?>
