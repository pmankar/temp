<?php
//* Code goes here

/* removes the qunatity from all products*/
function wc_remove_all_quantity_fields( $return, $product ) {
	return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );