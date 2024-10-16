<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'ts_charity_before_slider' ); ?>

  <?php /** slider section **/ ?>
  <?php if( get_theme_mod('ts_charity_slider_hide_show',false) != '' || get_theme_mod('ts_charity_responsive_slider',true) != ''){ ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('ts_charity_slider_speed_option', 3000)); ?>"> 
        <?php $ts_charity_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'ts_charity_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $ts_charity_slider_pages[] = $mod;
            }
          }
          if( !empty($ts_charity_slider_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $ts_charity_slider_pages,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption p-0">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('ts_charity_slider_small_title') != '' ){ ?>
                    <div class="mb-1">
                      <span class="small-title mb-1"><?php echo esc_html(get_theme_mod('ts_charity_slider_small_title',''));?></span>
                    </div>
                  <?php }?>
                  <?php if( get_theme_mod('ts_charity_slider_title_Show_hide',true) != ''){ ?>
                    <h1><a href="<?php echo esc_url( get_permalink() );?>" class="text-uppercase p-0"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('ts_charity_slider_content_Show_hide',true) != ''){ ?>
                    <p><?php $ts_charity_excerpt = get_the_excerpt(); echo esc_html( ts_charity_string_limit_words( $ts_charity_excerpt, esc_attr(get_theme_mod('ts_charity_slider_excerpt_length','20')))); ?></p> 
                  <?php } ?>
                  <?php if( get_theme_mod('ts_charity_slider_button_show_hide',true) != ''){ ?>
                  <?php if( get_theme_mod('ts_charity_slider_button','READ MORE') != '' || get_theme_mod('ts_charity_slider_button_url') != ''){ ?>
                    <div class="more-btn mt-md-2">              
                      <a href="<?php echo esc_url(get_theme_mod('ts_charity_slider_button_url')!= '') ? esc_url(get_theme_mod('ts_charity_slider_button_url')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('ts_charity_slider_button','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ts_charity_slider_button','READ MORE'));?></span></a>
                    </div>
                  <?php } ?>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
            wp_reset_postdata();?>      
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','ts-charity' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','ts-charity' );?></span>
          </a>
        </div>  
      <div class="clearfix"></div>
    </section> 
  <?php } ?>
  <?php do_action( 'ts_charity_after_slider' ); ?>

  <?php /** post section **/ ?>
  <?php if( get_theme_mod('ts_charity_title') || get_theme_mod('ts_charity_causes_category')){ ?>
    <section id="causes" class="my-5">
      <?php if( get_theme_mod('ts_charity_title') != ''){ ?>
        <div class="heading-line mb-4">
          <h2><?php echo esc_html(get_theme_mod('ts_charity_title','')); ?> </h2>
          <img src="<?php echo esc_url( get_theme_mod('',esc_url(get_template_directory_uri()).'/images/hr.png') ); ?>" alt="Post thumbnail image" class="my-0 mx-auto">
        </div>
      <?php } ?>
      <div class="container"> 
        <div class="row">
         <?php 
            $ts_charity_catData=  get_theme_mod('ts_charity_causes_category');
            if($ts_charity_catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html($ts_charity_catData,'ts-charity')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="causes-box col-lg-4 col-md-4 mb-3">
                  <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
                  <h3 class="mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                  <?php the_excerpt(); ?>
                  <div class="metabox">
                    <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
                    <span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'ts-charity'), __('0 Comments', 'ts-charity'), __('% Comments', 'ts-charity') ); ?> </span>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            } ?>
            <div class="clearfix"></div>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'ts_charity_after_causes_section' ); ?>
  <div class="container entry-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>