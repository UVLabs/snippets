<?php // Don't copy this line!
/**
 * llms_stripe_elements_settings.php
 *
 * @since 2017-07-12
 */

/**
 * Customize the settings passed to Stripe Elements
 * @param    array     $settings  default settings
 * @return   array
 * @since    4.3.0
 */
function my_llms_stripe_elements_settings( $settings ) {

	 // change the locale to Spanish (localizes all text generated by Stripe Elements)
	 // see https://stripe.com/docs/stripe.js#stripe-elements for all available options
	$settings['elements']['locale'] = 'es';

	// disable postal code field
	$settings['card']['hidePostalCode'] = true;
	
	// adjust css settings of the Card element
	// see https://stripe.com/docs/stripe.js#element-options for all available options
	$settings['card']['style']['base']['color'] = '#000000';
	$settings['card']['style']['base']['fontSize'] = '22px';
	$settings['card']['style']['base']['fontWeight'] = 400;

	return $settings;

}
add_filter( 'llms_stripe_elements_settings', 'my_llms_stripe_elements_settings' );