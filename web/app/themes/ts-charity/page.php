<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ts-charity
 */
get_header(); ?>

<?php do_action( 'ts_charity_page_header' ); ?>

<main role="main" id="maincontent" class="middle-align">
    <div class="container">
        <?php
        $ts_charity_left_right = get_theme_mod( 'ts_charity_single_page_sidebar_layout','One Column');
        if($ts_charity_left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
                <div class="col-lg-8 col-md-8 left-sidebar-page background-img-skin">
                    <?php if (get_theme_mod('ts_charity_single_page_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                    <?php
                        // Previous/next page navigation.
                        wp_link_pages( array(
                            'before'      => '<div class="page-links mb-5"><span class="page-links-title">' . __( 'Pages:', 'ts-charity' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ts-charity' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                    ?>
                </div>
            </div>
        <?php }else if($ts_charity_left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 right-sidebar-page background-img-skin">
                    <?php if (get_theme_mod('ts_charity_single_page_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                    <?php
                        // Previous/next page navigation.
                        wp_link_pages( array(
                            'before'      => '<div class="page-links mb-5"><span class="page-links-title">' . __( 'Pages:', 'ts-charity' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ts-charity' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                    ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        <?php }else if($ts_charity_left_right == 'One Column'){ ?>
            <div class="container background-img-skin">
                    <?php if (get_theme_mod('ts_charity_single_page_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content"><?php the_content();?></div>
                <?php endwhile; // end of the loop. ?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
                <div class="clear"></div>
                <?php
                    // Previous/next page navigation.
                    wp_link_pages( array(
                        'before'      => '<div class="page-links mb-5"><span class="page-links-title">' . __( 'Pages:', 'ts-charity' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ts-charity' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) );
                ?>
            </div>
        <?php }?>
    </div>
</main>

<?php do_action( 'ts_charity_page_footer' ); ?>

<?php get_footer(); ?>