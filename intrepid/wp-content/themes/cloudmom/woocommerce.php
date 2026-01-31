<?php
/**
 * WooCommerce Template
 *
 * This template is used for all WooCommerce pages (shop, cart, checkout, account, etc.)
 */

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
            <div class="woocommerce-content-wrapper">
                <?php woocommerce_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

