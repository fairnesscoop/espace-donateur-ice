<?php

declare( strict_types = 1 );

/*
Plugin Name:  CMB2 Message Field
Plugin URI:   https://github.com/amnestywebsite/cmb2-message-field
Description:  Add a "message" field to CMB2 to allow rendering of arbitrary text in the settings form
Version:      1.0.0
Tested up to: 6.4.2
Requires PHP: 8.2
Author:       Amnesty International
Author URI:   https://www.amnesty.org
License:      GPLv2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! function_exists( 'cmb2_message_field_render' ) ) {
	/**
	 * Render a message field for CMB2.
	 *
	 * @param CMB2_Field $field The field object.
	 */
	function cmb2_message_field_render( CMB2_Field $field ): void {
		$markup = sprintf(
			'<div %s>%s</div>',
			CMB2_Utils::concat_attrs( $field->args( 'attributes' ), [] ),
			$field->args( 'message' )
		);

		echo wp_kses( $markup, $field->args( 'kses' ) ?: 'post' );
	}
}

add_action( 'cmb2_render_message', 'cmb2_message_field_render' );

add_filter( 'cmb2_sanitize_message', '__return_null' );
