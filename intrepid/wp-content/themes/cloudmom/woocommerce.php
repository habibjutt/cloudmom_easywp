<?php
/**
 * WooCommerce Template
 *
 * This template is used for all WooCommerce pages (shop, cart, checkout, account, etc.)
 */

// Build page-specific class for scoped CSS targeting
$woo_page_class = 'woocommerce-content-wrapper';
if ( is_cart() )           $woo_page_class .= ' cm-cart-page';
if ( is_checkout() )       $woo_page_class .= ' cm-checkout-page';
if ( is_product() )        $woo_page_class .= ' cm-single-product-page';
if ( is_account_page() )   $woo_page_class .= ' cm-account-page';

get_header(); ?>

<div class="woocommerce-page">
    <div class="container archive-feed__container">
        <?php if ( is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy() ) : ?>
            <div class="shop-page-layout">
                <aside class="col col--3 col--lg-3 col--md-12 col--sm-12 col--xs-12 archive-feed__sidebar" role="complementary" aria-label="Product filters">
                    <?php get_template_part( 'parts/sidebar-shop' ); ?>
                </aside>
                
                <main class="col col--9 col--lg-9 col--md-12 col--sm-12 col--xs-12 archive-feed__products" role="main">
                    <?php woocommerce_content(); ?>
                </main>
            </div>
        <?php else : ?>
            <div class="<?php echo esc_attr( $woo_page_class ); ?>">
                <?php woocommerce_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

