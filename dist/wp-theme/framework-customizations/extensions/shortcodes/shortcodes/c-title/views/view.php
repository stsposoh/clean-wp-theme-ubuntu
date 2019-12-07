<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="title">
	<?php if( !empty($atts['c_title'])) { ?>
  <h3 class="title__main-text h3 js-products-title" <?php if( !empty($atts['c_title_header_attr'])) { echo $atts['c_title_header_attr']; } else { ?> data-aos="fade-up" data-aos-duration="700"<?php }; ?>>
    <?php echo fw_resize( $atts['c_title']); ?>
  </h3>
  <?php }; ?>

  <div <?php if( !empty($atts['c_title_logo_attr'])) { echo $atts['c_title_logo_attr']; } else { ?> data-aos="zoom-in" data-aos-duration="900"<?php }; ?>>
    <span class="title__logo">
      <img src="/wp-content/themes/ig-show/img/logo-black.svg" alt="">
    </span>
  </div>

  <?php if ( !empty( $atts['c_sub_title'] ) ) { ?>
  <span class="span title__sub-title js-products-sub-title" <?php if( !empty($atts['c_title_sub_header_attr'])) { echo $atts['c_title_sub_header_attr']; } else { ?> data-aos="zoom-in" data-aos-duration="900"<?php }; ?>>
    <?php echo fw_resize( $atts['c_sub_title']); ?>
  </span>
  <?php }; ?>
</div>











