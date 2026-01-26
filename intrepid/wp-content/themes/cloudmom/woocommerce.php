<?php
/**
 * WooCommerce Template
 *
 * This template is used for all WooCommerce pages (shop, cart, checkout, account, etc.)
 */

get_header(); ?>

<div class="woocommerce-page">
    <div class="container">
        <div class="woocommerce-content-wrapper">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

