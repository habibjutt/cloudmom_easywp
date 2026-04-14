<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<div class="archive-feed">
    <div class="archive-feed__container container container--jc-center">
        <div class="col col--12">
            <?php cs__the_breadcrumbs(); ?>
        </div>

        <div class="archive-feed__wrap col col--12">
            <div class="col col--12">
                <?php
                    /**
                     * Hook: woocommerce_before_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    do_action( 'woocommerce_before_main_content' );
                ?>

                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>

                    <?php wc_get_template_part( 'content', 'single-product' ); ?>

                <?php endwhile; // end of the loop. ?>

                <?php
                    /**
                     * Hook: woocommerce_after_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action( 'woocommerce_after_main_content' );
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer( 'shop' );
