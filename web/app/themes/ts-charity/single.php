<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ts-charity
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="middle-align">
    	<?php
        $ts_charity_left_right = get_theme_mod( 'ts_charity_single_post_sidebar_layout','Right Sidebar');
        if($ts_charity_left_right == 'Left Sidebar'){ ?>
            <div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4">
					<?php get_sidebar();?>
				</div>
				<div class="col-lg-8 col-md-8" class="content-ts">
					<?php if (get_theme_mod('ts_charity_single_post_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
					<?php if ( have_posts() ) :

		                while ( have_posts() ) : the_post();
		                  	get_template_part( 'template-parts/single-content' ); 
		                endwhile;

		                else :
		                  	get_template_part( 'no-results' );
		                endif; 
              		?>
		       	</div>
		    </div>
	    <?php }else if($ts_charity_left_right == 'Right Sidebar'){ ?>
	        <div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ts">
		       		<?php if (get_theme_mod('ts_charity_single_post_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
					<?php if ( have_posts() ) :

		                while ( have_posts() ) : the_post();
		                  	get_template_part( 'template-parts/single-content' ); 
		                endwhile;

		                else :
		                  	get_template_part( 'no-results' );
		                endif; 
              		?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php get_sidebar();?>
				</div>
			</div>
		<?php }else if($ts_charity_left_right == 'One Column'){ ?>
		    <div class="row">
				<div class="col-lg-12 col-md-12" class="content-ts">
					<?php if (get_theme_mod('ts_charity_single_post_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
					<?php if ( have_posts() ) :

		                while ( have_posts() ) : the_post();
		                  	get_template_part( 'template-parts/single-content' ); 
		                endwhile;

		                else :
		                  	get_template_part( 'no-results' );
		                endif; 
              		?>
		       	</div>
		    </div>
	    <?php }else {?>
			<div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ts">
		       		<?php if (get_theme_mod('ts_charity_single_post_breadcrumb',false) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php ts_charity_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
					<?php if ( have_posts() ) :

		                while ( have_posts() ) : the_post();
		                  	get_template_part( 'template-parts/single-content' ); 
		                endwhile;

		                else :
		                  	get_template_part( 'no-results' );
		                endif; 
              		?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php }?>
	    <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>