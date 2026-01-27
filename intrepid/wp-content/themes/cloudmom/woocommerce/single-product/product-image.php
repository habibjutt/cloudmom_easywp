<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$post_thumbnail_id = $product->get_image_id();
$attachment_ids    = $product->get_gallery_image_ids();
$has_gallery       = ! empty( $attachment_ids );

// Collect all images (main + gallery)
$all_images = array();
if ( $post_thumbnail_id ) {
	$all_images[] = $post_thumbnail_id;
}
if ( $has_gallery ) {
	$all_images = array_merge( $all_images, $attachment_ids );
}
?>
<div class="woocommerce-product-gallery images" style="display: flex; flex-direction: row; gap: 15px;">
	<?php if ( count( $all_images ) > 1 ) : ?>
	<div class="woocommerce-product-gallery__thumbnails-col" style="display: flex; flex-direction: column; gap: 10px; width: 100px; flex-shrink: 0;">
		<?php foreach ( $all_images as $index => $image_id ) : 
			$thumbnail = wp_get_attachment_image_src( $image_id, 'thumbnail' );
			$full_image = wp_get_attachment_image_src( $image_id, 'woocommerce_single' );
			if ( $thumbnail && $full_image ) :
		?>
			<div class="gallery-thumbnail" style="cursor: pointer; border: 2px solid <?php echo $index === 0 ? '#8a4182' : 'transparent'; ?>;" data-index="<?php echo esc_attr( $index ); ?>" onclick="changeMainImage(this, '<?php echo esc_url( $full_image[0] ); ?>', <?php echo esc_attr( $index ); ?>)">
				<img src="<?php echo esc_url( $thumbnail[0] ); ?>" alt="" style="width: 100%; height: auto; display: block;">
			</div>
		<?php endif; endforeach; ?>
	</div>
	<?php endif; ?>
	
	<div class="woocommerce-product-gallery__main" style="flex: 1; min-width: 0; position: relative;">
		<?php
		// Sale flash
		woocommerce_show_product_sale_flash();
		
		if ( $post_thumbnail_id ) :
			$main_image = wp_get_attachment_image_src( $post_thumbnail_id, 'woocommerce_single' );
			$full_image = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
			if ( $main_image ) :
		?>
			<a href="<?php echo esc_url( $full_image ? $full_image[0] : $main_image[0] ); ?>" class="woocommerce-product-gallery__image" data-fancybox="product-gallery">
				<img id="main-product-image" src="<?php echo esc_url( $main_image[0] ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="width: 100%; height: auto;">
			</a>
		<?php 
			endif;
		else :
			echo sprintf( '<img src="%s" alt="%s" style="width: 100%%; height: auto;" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
		endif;
		?>
	</div>
</div>

<script>
function changeMainImage(el, src, index) {
	var mainImg = document.getElementById('main-product-image');
	if (mainImg) {
		mainImg.src = src;
		mainImg.parentElement.href = src;
	}
	var thumbs = document.querySelectorAll('.gallery-thumbnail');
	thumbs.forEach(function(thumb) {
		thumb.style.borderColor = 'transparent';
	});
	el.style.borderColor = '#8a4182';
}
</script>
