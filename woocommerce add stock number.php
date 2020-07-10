<?php

/* Add stock status to archive pages - functions.php */
/ * Adiciona estoque às páginas de arquivo - functions.php * /
add_action( 'woocommerce_after_shop_loop_item_title', 'custom_stock_message' );
function custom_stock_message() {
	global $product;
	if ( $product->is_in_stock() ):
		if ( $product->get_stock_quantity() <= 0 ):
			// if there is no quantity set
			echo '<div class="stock" >' . __( 'Available', 'text_domain' ) . '</div>';
		else:
			// if the quantity is set
			echo '<div class="stock" >' . $product->get_stock_quantity() . __( ' available', 'text_domain' ) . '</div>';
		endif;
	else:
		echo '<div class="out-of-stock" >' . __( 'Out of stock', 'text_domain' ) . '</div>';
	endif;
}



/* Add stock status to product page - single-product.php */
/ * Adiciona estoque às páginas de produto - single-product.php */
if ( $product->is_in_stock() ):
	if ( $product->get_stock_quantity() <= 0 ):
		// if there is no quantity set
		echo '<div class="stock" >' . __( 'Available', 'text_domain' ) . '</div>';
	else:
		// if the quantity is set
		echo '<div class="stock" >' . $product->get_stock_quantity() . __( ' available', 'text_domain' ) . '</div>';
	endif;
else:
	echo '<div class="out-of-stock" >' . __( 'Out of stock', 'text_domain' ) . '</div>';
endif;

?>
