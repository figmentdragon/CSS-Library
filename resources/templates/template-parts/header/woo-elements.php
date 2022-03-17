<?php
/**
 * Add WooCommerce Elements in header
 *
 * @package creativity
 */

if ( ! class_exists( 'WooCommerce' ) ) {
    // Bail if WooCommerce is not installed
    return;
}

if ( get_theme_mod( 'creativity__header_cart_enable', 0 ) && function_exists( 'creativity__header_cart' ) ) {
	creativity_header_cart();
}
