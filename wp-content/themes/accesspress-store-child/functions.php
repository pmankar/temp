<?php
//* Code goes here

/* 
removes the qunatity from all products
*/
function wc_remove_all_quantity_fields( $return, $product ) {
	return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );


/*
rename additional information tab to 
*/
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
	$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
	return $tabs;
}