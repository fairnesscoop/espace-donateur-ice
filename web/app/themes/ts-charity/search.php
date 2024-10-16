<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ts-charity
 */

get_header(); ?>

<main id="maincontent" role="main" class="our-services">
    <div class="innerlightbox">
        <div class="container">
            <?php
            $ts_charity_left_right = get_theme_mod( 'ts_charity_layout_options','Right Sidebar');
            if($ts_charity_left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                    <div class="col-lg-8 col-md-8 noresult-content my-3">
                       <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php ts_charity_pagination_type(); ?>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
            <?php }else if($ts_charity_left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 noresult-content my-3">
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php ts_charity_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($ts_charity_left_right == 'One Column'){ ?>
                <div class="noresult-content my-3">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php ts_charity_pagination_type(); ?>
                        </div>
                    <?php } ?>  
                </div>
            <?php }else if($ts_charity_left_right == 'Three Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-6 col-md-6 noresult-content my-3">
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php ts_charity_pagination_type(); ?>
                            </div>
                        <?php } ?> 
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>
            <?php }else if($ts_charity_left_right == 'Four Columns'){ ?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-3 col-md-3 noresult-content my-3">
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php ts_charity_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            <?php }else if($ts_charity_left_right == 'Grid Layout'){ ?>
                <div class="col-lg-9 col-md-9 noresult-content my-3">
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <div class="row">
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php ts_charity_pagination_type(); ?>
                        </div>
                    <?php } ?> 
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php get_sidebar();?>
                </div>
            <?php } else {?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 noresult-content my-3">
                        <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','ts-charity'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'ts_charity_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php ts_charity_pagination_type(); ?>
                            </div>
                        <?php } ?>  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>