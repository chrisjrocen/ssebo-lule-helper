<?php
/**
 * Add the new helper functions here.
 * These are specific to this project.
 *
 * @package ssebolulehelper.
 */

//remove the checkout page fields
add_filter('woocommerce_checkout_fields', 'chrx_override_checkout_fields');
function chrx_override_checkout_fields($fields)
{
	unset($fields['billing']['billing_phone']);
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);
	unset($fields['order']['order_comments']);
	unset($fields['account']['account_username']);
	unset($fields['account']['account_password']);
	unset($fields['account']['account_password-2']);
	return $fields;
}

//change the woocommerce add to cart text on a single product page
//add_filter( 'add_to_cart_text', 'chrx_custom_single_add_to_cart_text' );
add_filter('woocommerce_product_single_add_to_cart_text', 'chrx_custom_add_to_cart_text');

//change the woocommerce add to cart text on a archive page
add_filter('woocommerce_product_add_to_cart_text', 'chrx_custom_add_to_cart_text');

function chrx_custom_add_to_cart_text()
{

	return __('Buy', 'woocommerce');

}

//To skip cart
// add_filter('woocommerce_add_to_cart_redirect', 'chrx_skip_cart');
// function chrx_skip_cart()
// {
// 	return wc_get_checkout_url();
// }

//Remove Default metaboxes and adda custom metabox
function chrx_add_dashboard_widget()
{

	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box('health_check_status', 'dashboard', 'normal');
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
	remove_meta_box('dashboard_activity', 'dashboard', 'normal');
	wp_add_dashboard_widget('chrx_display_static_dashboard_widget', 'Chrx Service tag', 'chrx_display_static_dashboard_widget');

}

add_action('wp_dashboard_setup', 'chrx_add_dashboard_widget');


function chrx_display_static_dashboard_widget()
{
?>
	<div style="display:grid;justify-content:space-between;grid-template-columns:repeat(auto-fit,minmax(48%,1fr));grid-template-rows:1fr;grid-gap:20px;">
		<div>
			<img src="https://www.google.com/search?q=pic&client=opera&hs=4W2&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjB1vmLxJ_xAhW4RUEAHY0YA0UQ_AUoAXoECAEQAw&biw=1326&bih=627#imgrc=DzXNwqGpnLf-6M" style="border:1px solid #ccc;padding:2px;">
		</div>
		<div>
			<h2>Chris Ocen</h2>
			This Website is managed by <strong>Chris Ocen</strong>
			<ul>
				<li><a href="tel:0788620379">0788620379</a></li>
				<li><a href="mail@ocenchris.com">mail@ocenchris.com</a></li>
			</ul>
		</div>
	</div>
 <?php
}


//Enqueue the custom CSS
add_action('wp_enqueue_scripts', 'chrx_enqueue_styles', 10);
function chrx_enqueue_styles()
{

	wp_enqueue_style('my-css', HELPER_CUSTOM_URL . 'assets/build/css/base.css', array(), '0.1.0', 'all');
}


//It will remove the selected quantity count from checkout page table.
function chrx_remove_quantity_text($cart_item, $cart_item_key)
{
	$product_quantity = '';
	return $product_quantity;
}

add_filter('woocommerce_checkout_cart_item_quantity', 'chrx_remove_quantity_text', 10, 2);





// Remove links to the product details pages from the product listing page of a WooCommerce store
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
