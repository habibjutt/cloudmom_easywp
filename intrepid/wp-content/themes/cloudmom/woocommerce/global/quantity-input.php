<?php
/**
 * Product quantity inputs with custom +/- buttons
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.1.0
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

defined( 'ABSPATH' ) || exit;

/* translators: %s: Quantity. */
$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );

?>
<div class="quantity quantity--enhanced">
	<label class="quantity__label" for="<?php echo esc_attr( $input_id ); ?>">
		<?php echo esc_html__( 'Quantity', 'woocommerce' ); ?>
	</label>
	
	<div class="quantity__controls">
		<button 
			type="button" 
			class="quantity__button quantity__button--minus" 
			aria-label="<?php esc_attr_e( 'Decrease quantity', 'woocommerce' ); ?>"
			tabindex="0"
		>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<line x1="4" y1="8" x2="12" y2="8"></line>
			</svg>
		</button>
		
		<?php
		/**
		 * Hook to output something before the quantity input field.
		 *
		 * @since 7.2.0
		 */
		do_action( 'woocommerce_before_quantity_input_field' );
		?>
		
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
		<input
			type="<?php echo esc_attr( $type ); ?>"
			<?php echo $readonly ? 'readonly="readonly"' : ''; ?>
			id="<?php echo esc_attr( $input_id ); ?>"
			class="<?php echo esc_attr( join( ' ', (array) $classes ) ); ?> quantity__input"
			name="<?php echo esc_attr( $input_name ); ?>"
			value="<?php echo esc_attr( $input_value ); ?>"
			aria-label="<?php esc_attr_e( 'Product quantity', 'woocommerce' ); ?>"
			<?php if ( in_array( $type, array( 'text', 'search', 'tel', 'url', 'email', 'password' ), true ) ) : ?>
				size="4"
			<?php endif; ?>
			min="<?php echo esc_attr( $min_value ); ?>"
			<?php if ( 0 < $max_value ) : ?>
				max="<?php echo esc_attr( $max_value ); ?>"
			<?php endif; ?>
			<?php if ( ! $readonly ) : ?>
				step="<?php echo esc_attr( $step ); ?>"
				placeholder="<?php echo esc_attr( $placeholder ); ?>"
				inputmode="<?php echo esc_attr( $inputmode ); ?>"
				autocomplete="<?php echo esc_attr( isset( $autocomplete ) ? $autocomplete : 'on' ); ?>"
			<?php endif; ?>
		/>
		
		<?php
		/**
		 * Hook to output something after quantity input field
		 *
		 * @since 3.6.0
		 */
		do_action( 'woocommerce_after_quantity_input_field' );
		?>
		
		<button 
			type="button" 
			class="quantity__button quantity__button--plus" 
			aria-label="<?php esc_attr_e( 'Increase quantity', 'woocommerce' ); ?>"
			tabindex="0"
		>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<line x1="8" y1="4" x2="8" y2="12"></line>
				<line x1="4" y1="8" x2="12" y2="8"></line>
			</svg>
		</button>
	</div>
</div>
<?php

