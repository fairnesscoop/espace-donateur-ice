<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package ts-charity
 */

if ( ! function_exists( 'ts_charity_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function ts_charity_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'ts_charity_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids      = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
	wp_reset_postdata();
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function ts_charity_categorized_blog() {
	if ( false === ( $ts_charity_all_the_cool_cats = get_transient( 'ts_charity_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$ts_charity_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$ts_charity_all_the_cool_cats = count( $ts_charity_all_the_cool_cats );

		set_transient( 'ts_charity_all_the_cool_cats', $ts_charity_all_the_cool_cats );
	}

	if ( '1' != $ts_charity_all_the_cool_cats ) {
		// This blog has more than 1 category so ts_charity_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so ts_charity_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'ts_charity_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since ts-charity 
 */
function ts_charity_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in ts_charity_categorized_blog
 */
function ts_charity_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'ts_charity_all_the_cool_cats' );
}
add_action( 'edit_category', 'ts_charity_category_transient_flusher' );
add_action( 'save_post',     'ts_charity_category_transient_flusher' );

/**
 * Posts pagination.
 */
if ( ! function_exists( 'ts_charity_pagination_settings' ) ) {
	function ts_charity_pagination_type() {
		$ts_charity_pagination_type = get_theme_mod( 'ts_charity_pagination_settings', 'Numeric Pagination' );
		if ( $ts_charity_pagination_type == 'Numeric Pagination' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation();
		}
	}
}