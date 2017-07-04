<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">
	<table><tr><td>
		<?php do_action( 'woocommerce_product_meta_start' ); ?>

		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

			<div class="sku_wrapper"><?php _e( 'ID:', 'accesspress-store' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'accesspress-store' ); ?></span>.</div>

		<?php endif; ?>
	</td><td>
		<?php echo $product->get_categories( ', ', '<div class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'accesspress-store' ) . ' ', '.</div>' ); ?>

		<?php echo $product->get_tags( ', ', '<div class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'accesspress-store' ) . ' ', '.</div>' ); ?>

		<?php do_action( 'woocommerce_product_meta_end' ); ?>
	</td></tr></table>
</div>
