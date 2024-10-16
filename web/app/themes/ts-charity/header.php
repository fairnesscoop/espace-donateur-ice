<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package ts-charity
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
  <!-- preloader -->
    <?php if(get_theme_mod('ts_charity_preloader_option',false)!= '' || get_theme_mod('ts_charity_responsive_preloader', false) != ''){ ?>
      <?php if(get_theme_mod('ts_charity_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('ts_charity_preloader_type_options', 'Preloader 1') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
  <!-- preloader end -->
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'ts-charity' ); ?></a>
    <?php if( get_theme_mod('ts_charity_display_topbar') != ''){ ?>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="social-media col-lg-3 col-md-3">
              <?php if( get_theme_mod( 'ts_charity_facebook_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','ts-charity' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_twitter_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','ts-charity' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_youtube_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','ts-charity' );?></span></a>
              <?php } ?> 
              <?php if( get_theme_mod( 'ts_charity_rss_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_rss_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_rss_icon','fas fa-rss')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS','ts-charity' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_insta_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_insta_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','ts-charity' );?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_pint_url') != '') { ?>
                <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_pint_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','ts-charity' );?></span></a>
              <?php } ?>
            </div>
            <div class="contact col-lg-9 col-md-9 p-2 text-end">
              <?php if( get_theme_mod( 'ts_charity_call','' ) != '') { ?>
                <a href="tel:<?php echo esc_attr( get_theme_mod('ts_charity_call','' )); ?>" class="me-5"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_phone_icon','fas fa-phone-volume')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_call','')); ?><span class="screen-reader-text me-5"><i class="fas fa-phone-volume me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_call','')); ?></span></a>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_time','' ) != '') { ?>
                <span class="me-5"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_header_time_icon','far fa-clock')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_time','')); ?></span>
              <?php } ?>
              <?php if( get_theme_mod( 'ts_charity_email','' ) != '') { ?>
                <a href="mailto:<?php echo esc_attr( get_theme_mod('ts_charity_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_email_icon','far fa-envelope')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_email','')); ?><span class="screen-reader-text me-5"><i class="far fa-envelope me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_email','')); ?></span></a>
              <?php } ?>
            </div>      
          </div>
        </div>
      </div>
    <?php } ?>
    <div >
    <div id="header" class="<?php if( get_theme_mod( 'ts_charity_sticky_header',false) != '' || get_theme_mod( 'ts_charity_responsive_sticky_header',false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" data-spy="affix" data-offset-top="150">
      <div class="container">
        <div class="row">
          <div class="logo col-lg-3 col-md-9 col-9 align-self-center">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if( get_theme_mod('ts_charity_site_title',true) != ''){ ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title mb-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php }?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('ts_charity_tagline',false) != ''){ ?>
                <p class="site-description mb-0">
                  <?php echo esc_html($description); ?>
                </p>
              <?php }?>
            <?php endif; ?>
          </div>
          <div class="col-lg-8 col-md-3 col-3 align-self-center">
            <div class="toggle-menu responsive-menu">
              <button class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','ts-charity'); ?></span></button>
            </div>
            <div id="menu-sidebar" class="nav sidebar text-center align-self-center">
              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'ts-charity' ); ?>">
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'main-menu-navigation clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav ps-lg-0 text-lg-start">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) );
                ?>
                <div id="contact-info">
                  <div class="contact">
                    <div class="call">
                      <?php if( get_theme_mod( 'ts_charity_call','' ) != '') { ?>
                        <a href="tel:<?php echo esc_attr( get_theme_mod('ts_charity_call','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_phone_icon','fas fa-phone-volume')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_call','')); ?><span class="screen-reader-text"><i class="fas fa-phone-volume"></i><?php echo esc_html( get_theme_mod('ts_charity_call','')); ?></span></a>
                      <?php } ?>
                    </div>
                    <div class="time">
                      <?php if( get_theme_mod( 'ts_charity_time','' ) != '') { ?>
                        <span><i class="<?php echo esc_attr(get_theme_mod('ts_charity_header_time_icon','far fa-clock')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_time','')); ?></span>
                      <?php } ?>
                    </div>
                    <div class="email">
                      <?php if( get_theme_mod( 'ts_charity_email','' ) != '') { ?>
                        <a href="mailto:<?php echo esc_attr( get_theme_mod('ts_charity_email','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_email_icon','far fa-envelope')); ?> me-2"></i><?php echo esc_html( get_theme_mod('ts_charity_email','')); ?><span class="screen-reader-text"><i class="far fa-envelope"></i><?php echo esc_html( get_theme_mod('ts_charity_email','')); ?></span></a>
                      <?php } ?>
                    </div>
                  </div>      
                  <div class="social-media">
                    <?php if( get_theme_mod( 'ts_charity_facebook_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','ts-charity' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'ts_charity_twitter_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','ts-charity' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'ts_charity_youtube_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','ts-charity' );?></span></a>
                    <?php } ?> 
                    <?php if( get_theme_mod( 'ts_charity_rss_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_rss_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_rss_icon','fas fa-rss')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS','ts-charity' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'ts_charity_insta_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_insta_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','ts-charity' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'ts_charity_pint_url') != '') { ?>
                      <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'ts_charity_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_pint_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','ts-charity' );?></span></a>
                    <?php } ?>
                  </div>
                  <?php if(get_theme_mod('ts_charity_mobile_search_option',true) != ''){ ?>
                    <?php get_search_form();?>
                  <?php }?>
                </div>
                <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_close_menu_icon','far fa-times-circle')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','ts-charity'); ?></span></a>
              </nav>
            </div>
          </div>
          <?php if(get_theme_mod('ts_charity_search_option',true) != ''){ ?>
            <div class="col-lg-1 col-md-1 col-6 align-self-center">
              <div class="search-box align-self-center">
                <button type="button" class="search-open"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_search_icon','fas fa-search')); ?> m-2 p-2"></i></button>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="search-outer">
          <div class="serach_inner w-100 h-100">
            <?php get_search_form(); ?>
          </div>
          <button type="button" class="search-close">X</span></button>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </header>