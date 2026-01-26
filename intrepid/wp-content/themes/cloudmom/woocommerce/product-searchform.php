<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * @package CloudMom
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="woocommerce-product-search-wrapper">
	<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Product search">
		<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
		<div class="search-input-wrapper">
			<input 
				type="search" 
				id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" 
				class="search-field" 
				placeholder="<?php echo esc_attr__( 'Search products...', 'woocommerce' ); ?>" 
				value="<?php echo get_search_query(); ?>" 
				name="s"
				aria-label="<?php echo esc_attr__( 'Search products', 'woocommerce' ); ?>"
			/>
			<button 
				type="submit" 
				value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" 
				class="search-submit <?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ); ?>"
				aria-label="<?php echo esc_attr_x( 'Submit search', 'submit button', 'woocommerce' ); ?>"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<circle cx="11" cy="11" r="8"></circle>
					<path d="m21 21-4.35-4.35"></path>
				</svg>
				<span class="search-submit-text"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?></span>
			</button>
		</div>
		<input type="hidden" name="post_type" value="product" />
	</form>
</div>

