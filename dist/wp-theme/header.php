<?php
/**
 * Header (header.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#"
      xmlns:og="http://ogp.me/ns#"
      xmlns:og="http://ogp.me/ns#"
  <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php $favicon = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('favicon') : ''; ?>
  <?php if (!empty($favicon)) : ?>
    <link rel="icon" type="image/png" href="<?php echo $favicon['url'] ?>">
  <?php endif ?>
  <!-- sharing -->
  <?php if (have_posts()):while (have_posts()):the_post(); endwhile; endif; ?>
  <!-- если это статья -->
  <?php if (is_single()) { ?>
  <!-- постоянные значения -->
  <!-- <meta property="fb:admins" content="" /> -->
  <!-- vk -->
  <link rel="image_src" href="<?php if (function_exists('wp_get_attachment_thumb_url')) {
    echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>"/>
  <meta name="title" content="<?php single_post_title(''); ?>">
  <!-- facebook -->
  <meta property="og:title" content="<?php single_post_title(''); ?>"/>
  <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="<?php the_permalink(); ?>"/>
  <meta property="og:image:width" content="250">
  <meta property="og:image:height" content="250">
  <meta property="og:locale" content="<?php echo get_locale(); ?>">
  <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>">
  <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
    echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>"/>
  <!-- twitter -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="<?php single_post_title(''); ?>"/>
  <meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"/>
  <meta name="twitter:url" content="<?php the_permalink(); ?>"/>
  <meta name="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
    echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>"/>
  <meta name="twitter:domain" content="<?php echo get_site_url(); ?>">
  <!-- если это любая другая страница -->
  <?php } else { ?>
  <!-- vk -->
  <?php $logo_img = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('logo_img') : '';
  if (!empty($logo_img)) : ?>
  <link rel="image_src" href="<?php echo $logo_img['url'] ?>"/>
  <?php endif ?>
  <meta name="title" content="<?php bloginfo('name'); ?>">
  <!-- facebook -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
  <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="<?php echo get_site_url(); ?>"/>
  <meta property="og:image:width" content="250">
  <meta property="og:image:height" content="250">
  <meta property="og:locale" content="<?php echo get_locale(); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:image" content="<?php echo $logo_img['url'] ?>"/>
  <!-- twitter -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
  <meta name="twitter:url" content="<?php echo get_site_url(); ?>"/>
  <meta name="twitter:image" content="<?php echo $logo_img['url'] ?>"/>
  <meta name="twitter:domain" content="<?php echo get_site_url(); ?>">
  <?php } ?>
  <!-- sharing__end-->

  <?php wp_head(); ?>
  <!-- <title></title> -->
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__top">
      <div class="header__top-info">
        <?php $company_phone = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('company_phone') : '';
        if (!empty($company_phone)) : ?>
        <a href="tel:<?php echo $company_phone ?>" class="icon-text">
          <span class="icon-text__icon"><i class="fa fa-phone"></i></span>
          <span class="icon-text__text"><?php echo $company_phone ?></span>
        </a>
        <?php endif ?>
        <?php $company_mail = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('company_mail') : '';
        if (!empty($company_mail)) : ?>
        <a href="mailto:<?php echo $company_mail ?>" class="icon-text">
          <span class="icon-text__icon"><i class="fa fa-envelope-o"></i></span>
          <span class="icon-text__text"><?php echo $company_mail ?></span>
        </a>
        <?php endif ?>
        <?php $schedule = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('schedule') : '';
        if (!empty($schedule)) : ?>
        <span class="icon-text">
          <span class="icon-text__icon"><i class="fa fa-history"></i></span>
          <span class="icon-text__text"><?php echo $schedule ?></span>
        </span>
        <?php endif ?>
      </div>
      <div class="header__top-soc">
        <div class="social">
          <?php $social = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('social') : ''; ?>
          <?php foreach ($social as $key => $val) : ?>
          <a href="<?php echo $val['social_link'] ?>" class="social__icon">
            <i class="<?php echo $val['social_icon']['icon-class'] ?>"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="header__main">
      <div class="header__main-logo">
        <img src="<?php echo $logo_img['url'] ?>" alt="">
      </div>
      <div class="header__main-info">
        <div class="header__main-info-block">
          <div class="icon-block">
            <span class="icon-block__icon"><i class="fa fa-map-marker"></i></span>
            <span class="icon-block__content">
              <?php $company_address = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('company_address') : '';
              if (!empty($company_address)) : ?>
              <?php echo $company_address ?>
              <?php endif ?>
              <a href="#" class="link-style --bordered">Посмотреть на карте</a>
            </span>
          </div>
        </div>
        <div class="header__main-info-block">
          <div class="icon-block">
            <span class="icon-block__icon"><i class="fa fa-phone"></span>
            <span class="icon-block__content">
              <?php $company_phone = (function_exists('fw_get_db_settings_option')) ? fw_get_db_settings_option('company_phone') : '';
              if (!empty($company_phone)) : ?>
              <a href="tel:<?php echo $company_phone ?>"><?php echo $company_phone ?></a>
              <?php endif ?>
              Звонок по России бесплатный
              Обратный звонок
            </span>
          </div>
        </div>
      </div>

      <div class="header__nav">
        <?php $args = array(
          'theme_location' => 'top',
          'container' => false,
          'menu_class' => '',
          'menu_id' => '',
          'fallback_cb' => false
        );
        wp_nav_menu($args);
        ?>
      </div>
    </div>
  </header>
