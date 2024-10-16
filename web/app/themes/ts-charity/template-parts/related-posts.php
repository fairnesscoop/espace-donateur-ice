<?php $related_posts = ts_charity_related_posts();
if(get_theme_mod('ts_charity_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('ts_charity_related_post_title','Related Posts') != '' ) {?>
            <h3 class="my-3"><?php echo esc_html( get_theme_mod('ts_charity_related_post_title',__('Related Posts','ts-charity')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3 p-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="entry-content"><p><?php $ts_charity_excerpt = get_the_excerpt(); echo esc_html( ts_charity_string_limit_words( $ts_charity_excerpt, esc_attr(get_theme_mod('ts_charity_related_post_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('ts_charity_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('ts_charity_button_text','Read More') != ''){ ?>
                            <div class="content-bttn">
                                <div class="second-border">
                                    <a href="<?php the_permalink(); ?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'ts-charity' ); ?>"><?php echo esc_html(get_theme_mod('ts_charity_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ts_charity_button_text','Read More'));?></span></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>