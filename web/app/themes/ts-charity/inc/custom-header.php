<?php
/**
 * @package ts-charity
 * @subpackage ts-charity
 * @since ts-charity 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses ts_charity_header_style()
*/

function ts_charity_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'ts_charity_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 105,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'ts_charity_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'ts_charity_custom_header_setup' );

if ( ! function_exists( 'ts_charity_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ts_charity_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'ts_charity_header_style' );
function ts_charity_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$ts_charity_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size:cover;
		}";
	   	wp_add_inline_style( 'ts-charity-basic-style', $ts_charity_custom_css );
	endif;
}
endif; // ts_charity_header_style