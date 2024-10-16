<?php
/**
 * The template part for displaying services
 *
 * @package ts-charity
 * @subpackage ts-charity
 * @since ts-charity 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<div class="col-lg-4 col-md-4">
  <article class="page-box grid">
    <?php if( get_theme_mod( 'ts_charity_show_featured_image_post',true) != '') { ?>
      <div class="box-image"> 
        <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
        ?>        
      </div>
    <?php } ?>
    <div class="new-text">          
      <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'ts_charity_grid_post_date',true) != '' || get_theme_mod( 'ts_charity_grid_post_comment',true) != '' || get_theme_mod( 'ts_charity_grid_post_author',true) != '' || get_theme_mod( 'ts_charity_grid_post_time',true) != '') { ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'ts_charity_grid_post_date',true) != '') { ?>
          <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_grid_post_date_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="mx-2"><?php echo esc_html( get_theme_mod('ts_charity_metabox_separator_blog_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'ts_charity_grid_post_comment',true) != '') { ?>
          <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_grid_post_comment_icon','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comment', 'ts-charity'), __('0 Comments', 'ts-charity'), __('% Comments', 'ts-charity') ); ?> </span><span class="mx-2"><?php echo esc_html( get_theme_mod('ts_charity_metabox_separator_blog_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'ts_charity_grid_post_author',true) != '') { ?>
          <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_grid_post_author_icon','fas fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span class="mx-2"><?php echo esc_html( get_theme_mod('ts_charity_metabox_separator_blog_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'ts_charity_grid_post_time',true) != '') { ?>
          <span class="entry-time"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_grid_post_time_icon','fas fa-clock')); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
      <?php }?>
      <div class="entry-content"><p><?php $ts_charity_excerpt = get_the_excerpt(); echo esc_html( ts_charity_string_limit_words( $ts_charity_excerpt, esc_attr(get_theme_mod('ts_charity_grid_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('ts_charity_post_suffix_option','...') ); ?></p></div>
      <?php if( get_theme_mod('ts_charity_button_text','Read More') != ''){ ?>
        <div class="content-bttn">
          <div class="second-border">
            <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'ts-charity' ); ?>"><?php echo esc_html(get_theme_mod('ts_charity_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ts_charity_button_text','Read More'));?></span></a>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="clearfix"></div>
  </article>
</div>