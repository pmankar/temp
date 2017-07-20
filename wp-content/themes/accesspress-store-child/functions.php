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

// remove additional information tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );  	// Remove the additional information tab
    return $tabs;
}


// add add_to_cart on right sidebar on single product page
add_filter('woocommerce_sidebar', 'woocommerce_addtocart_right', 10);
function woocommerce_addtocart_right(){
	// avoid loading on main shop page.
	if (!is_shop()){
		echo "<div id='product-";
		echo the_ID();
		echo "'";
		echo post_class();
		echo ">";
			echo "<div class='summary entry-summary woocommerce content-area'>";
				woocommerce_template_single_price();
				woocommerce_template_single_add_to_cart();
			echo "</div><!-- .summary -->";
		echo"</div><!-- #product-<?php the_ID(); ?> -->";
	}
}


// remove the add to cart from central area
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

// remove price from single product page main area
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

// remove existing meta info woocommerce_template_single_meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



// add more meta info:
// id, date, country, pages, publisher, category
add_filter('woocommerce_single_product_summary', 'add_more_meta', 40);
function add_more_meta(){
	global $product;
	$minfo = [];
	$minfo[] = ( $sku = 'RID: '.$product->get_sku() ) ? $sku : __( 'N/A', 'accesspress-store' );
	$minfo[] = array_shift(wc_get_product_terms( $product->id, 'pa_publishedon' ));
	$minfo[] = array_shift(wc_get_product_terms( $product->id, 'pa_country' ));
	$minfo[] = array_shift(wc_get_product_terms( $product->id, 'pa_format' ));
	$minfo[] = array_shift(wc_get_product_terms( $product->id, 'pa_pages' ))." Pages";
	$minfo[] = array_shift(wc_get_product_terms( $product->id, 'pa_publisher' ));
	$minfo[] = $product->get_categories( ', ', '' . _n( 'Category:', 'Categories:', $cat_count, 'accesspress-store' ) . ' ', '' );
	echo "<ul class='metainfo'>";
	echo  "<li style='border:none;'>".implode( '</li><li>', $minfo)."</li>" ;
	echo "</ul>";
}

remove_action( 'woocommerce_single_product_summary',  array( $GLOBALS['YITH_YWRAQ_Frontend'], 'add_button_single_page' ), 35 );


// remove images from shop page, including the sale flash 
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );


// remove images from single product page, including the flash
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

// remove images from category page:
remove_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );