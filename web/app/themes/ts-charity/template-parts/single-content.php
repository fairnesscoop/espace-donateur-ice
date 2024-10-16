<?php
/**
 * The template part for displaying Content Single post
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
<article class="page-box-single">
	<h1><?php the_title(); ?></h1>
	<?php if( get_theme_mod( 'ts_charity_single_post_date_hide',true) != '' || get_theme_mod(  'ts_charity_single_post_comment_hide',true) != '' || get_theme_mod( 
		  'ts_charity_single_post_author_hide',true) != '' || get_theme_mod( 
			'ts_charity_single_post_time_hide',true) != '') { ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'ts_charity_single_post_date_hide',true) != '') { ?>
          <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_single_post_date_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('ts_charity_single_post_meta_seperator','|') ); ?></span></span>
        <?php } ?>
        <?php if( get_theme_mod( 'ts_charity_single_post_comment_hide',true) != '') { ?>
          <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_single_post_comment_icon','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comment', 'ts-charity'), __('0 Comments', 'ts-charity'), __('% Comments', 'ts-charity') ); ?> <span class="ms-2"><?php echo esc_html( get_theme_mod('ts_charity_single_post_meta_seperator','|') ); ?></span></span>
        <?php } ?>
        <?php if( get_theme_mod( 'ts_charity_single_post_author_hide',true) != '') { ?>
          <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_single_post_author_icon','fas fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('ts_charity_single_post_meta_seperator','|') ); ?></span></span>
        <?php } ?>
	      <?php if( get_theme_mod( 'ts_charity_single_post_time_hide',true) != '') { ?>
	        <span class="entry-time me-2"><i class="<?php echo esc_attr(get_theme_mod('ts_charity_single_post_time_icon','fas fa-clock')); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
	      <?php }?>
      </div>
    <?php }?>
    <?php if( get_theme_mod( 'ts_charity_show_featured_image_single_post',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
	        <hr>
	        <div class="feature-box">   
	            <?php the_post_thumbnail(); ?>
	        </div>
	    <?php } ?>
	<?php } ?>      
    <hr> 	
	<?php if( get_theme_mod('ts_charity_category_show_hide',true) != ''){ ?>
      <div class="category-sec">
        <span class="category"><?php esc_html_e('Categories:','ts-charity'); ?></span>
        <?php the_category(); ?>
      </div>	
  <?php } ?>  
  <div class="new-text">   			
		<div class="entry-content"><?php the_content(); ?></div>
		<?php if( get_theme_mod( 'ts_charity_tags_hide',true) != '') { ?>
		  <div class="tags"><p><?php
	      if( $tags = get_the_tags() ) {
	        echo '<i class="fas fa-tags"></i>';
	        echo '<span class="meta-sep"></span>';
	        foreach( $tags as $content_tag ) {
	          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
	          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
	        }
	      } ?></p>
	    </div>
		<?php } ?>
	</div> 
	<?php if( get_theme_mod( 'ts_charity_show_single_post_pagination',true) != '') { ?>
		<?php 
				
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'ts-charity' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'ts-charity' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'ts-charity' ) . '</span> ' ,
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'ts-charity' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'ts-charity' ) . '</span> ',
				) );
			}

			echo '<div class="clearfix"></div>'; ?>
	<?php } ?>		
	<?php if( get_theme_mod( 'ts_charity_post_comment',true) != '') { 
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();}
	}?>
	
	<?php get_template_part('template-parts/related-posts'); ?>
</article>