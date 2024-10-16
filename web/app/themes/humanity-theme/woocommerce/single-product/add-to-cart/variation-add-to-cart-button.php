<?php
/**
 * Single variation cart button
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

$quantity = filter_input( INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT );

?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	woocommerce_quantity_input(
		[
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => $quantity ? wc_stock_amount( $quantity ) : $product->get_min_purchase_quantity(),
		]
	);

	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>

	<button class="btn btn--dark btn--fill single_add_to_cart_button" type="submit"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>">
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>">
	<input class="variation_id" type="hidden" name="variation_id" value="0">
</div>