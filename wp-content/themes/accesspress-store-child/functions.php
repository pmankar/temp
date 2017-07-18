<?php
//* Code goes here

/* removes the qunatity from all products */
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
function wc_remove_all_quantity_fields( $return, $product ) {
	return true;
}

/*
rename additional information tab to 
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
	$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
	return $tabs;
}*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );  	// Remove the additional information tab
    return $tabs;
}


add_filter('woocommerce_sidebar', 'woocommerce_addtocart_right', 10);
function woocommerce_addtocart_right(){
	woocommerce_template_single_price();
	woocommerce_template_single_add_to_cart();
}


add_action('woocommerce_single_product_summary', 'woocommerce_remove_cart');
function woocommerce_remove_cart(){
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
}