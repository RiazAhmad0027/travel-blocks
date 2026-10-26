<?php
/**
 * Plugin Name: Travel Blocks
 * Description: Custom SCF blocks for the travel site (Offer Card, Testimonial Card).
 * Version: 1.0.1
 * Author: Riaz Ahmad
 * Requires Plugins: secure-custom-fields
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Stop if someone opens this file directly.
}

add_action( 'init', function () {
	foreach ( array( 'offer-card', 'testimonial-card' ) as $block_folder ) {
		register_block_type( __DIR__ . '/blocks/' . $block_folder );
	}
} );