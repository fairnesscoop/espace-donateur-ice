<?php

declare( strict_types = 1 );

/*
Plugin Name:  CMB2 Password Field
Plugin URI:   https://github.com/amnestywebsite/cmb2-password-field
Description:  Add a password field to CMB2 to allow protected content input
Version:      1.0.0
Tested up to: 6.4.2
Requires PHP: 8.2
Author:       Amnesty International
Author URI:   https://www.amnesty.org
License:      GPLv2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'amnesty_cmb2_password_field' ) ) {
	/**
	 * Render a password field for CMB2.
	 *
	 * @param array  $field - The CMB2_Field object.
	 * @param string $escd_value - The escaped value.
	 * @param string $object_id - The ID of the current object.
	 * @param string $object_type - The type of object being saved.
	 * @param object $types - The CMB2_Types object.
	 */
	function amnesty_cmb2_password_field( $field, $escd_value, $object_id, string $object_type, $types ): void {
		// phpcs:ignore
		echo $types->input(
			[
				'type'         => 'password',
				'autocomplete' => 'new-password',
			]
		);
	}
}

add_action(
	'cmb2_render_password',
	'amnesty_cmb2_password_field',
	10,
	5
);
