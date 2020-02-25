<?php
/**
 * Plugin Name:       Ammonite Hide Guest Checkout Option For Subscriptions
 * Description:       This plugin runs a script on the checkout page that checks wheather a subscription is in the cart and dynamically hides the "Checkout As Guest" button with CSS for subscription orders.
 * Version:           1.0.0
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Register Script
*/
add_action( 'wp_enqueue_scripts', function() {
  wp_register_script( 'ammonite-hide-guest-checkout-for-subscriptions-script', plugins_url('assets/js/ammonite-hide-guest-checkout-for-subscriptions.js', __FILE__ ), array('jquery'), '1.0.0', true );
});

/*
  If Checkout Page, Enqueue Script
*/
add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script( 'ammonite-hide-guest-checkout-for-subscriptions-script' );
});
