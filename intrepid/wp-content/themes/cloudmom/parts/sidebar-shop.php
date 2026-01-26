<?php
/**
 * Shop Sidebar Template
 * Displays product categories in a tree structure and product filters
 */

// Get all product categories
$product_categories = get_terms( array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
    'parent'     => 0,
) );

?>

<nav class="sidebar" aria-label="Shop filters">
    <h2 class="sidebar__title">Categories</h2>
    
    <button class="sidebar__select" type="button" aria-expanded="false" aria-controls="category-list">
        Select a Category
    </button>

    <?php if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) : ?>
        <ul class="sidebar__list" data-list="1" id="category-list">
            <?php foreach ( $product_categories as $category ) :
                $child_categories = get_terms( array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                    'parent'     => $category->term_id,
                ) );
                ?>
                
                <li class="sidebar__item <?php echo ! empty( $child_categories ) ? 'sidebar__item--parent' : ''; ?>" data-item="1">
                    <?php if ( ! empty( $child_categories ) ) : ?>
                        <span class="sidebar__parent" data-parent="1" role="button" tabindex="0" aria-expanded="false">
                            <?php echo esc_html( $category->name ); ?>
                            <span class="sidebar__count"><?php echo esc_html( $category->count ); ?></span>
                        </span>
                        
                        <ul class="sidebar__list sidebar__list--nested sidebar__sublist" data-list="2">
                            <?php foreach ( $child_categories as $child_category ) :
                                $grandchild_categories = get_terms( array(
                                    'taxonomy'   => 'product_cat',
                                    'hide_empty' => true,
                                    'parent'     => $child_category->term_id,
                                ) );
                                ?>
                                
                                <li class="sidebar__item <?php echo ! empty( $grandchild_categories ) ? 'sidebar__item--parent' : ''; ?>" data-item="2">
                                    <?php if ( ! empty( $grandchild_categories ) ) : ?>
                                        <span class="sidebar__parent" data-parent="2" role="button" tabindex="0" aria-expanded="false">
                                            <?php echo esc_html( $child_category->name ); ?>
                                            <span class="sidebar__count"><?php echo esc_html( $child_category->count ); ?></span>
                                        </span>
                                        
                                        <ul class="sidebar__list sidebar__list--nested sidebar__sublist" data-list="3">
                                            <?php foreach ( $grandchild_categories as $grandchild_category ) : ?>
                                                <li class="sidebar__item" data-item="3">
                                                    <a class="sidebar__link" href="<?php echo esc_url( get_term_link( $grandchild_category ) ); ?>">
                                                        <?php echo esc_html( $grandchild_category->name ); ?>
                                                        <span class="sidebar__count"><?php echo esc_html( $grandchild_category->count ); ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else : ?>
                                        <a class="sidebar__link" href="<?php echo esc_url( get_term_link( $child_category ) ); ?>">
                                            <?php echo esc_html( $child_category->name ); ?>
                                            <span class="sidebar__count"><?php echo esc_html( $child_category->count ); ?></span>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <a class="sidebar__link" href="<?php echo esc_url( get_term_link( $category ) ); ?>">
                            <?php echo esc_html( $category->name ); ?>
                            <span class="sidebar__count"><?php echo esc_html( $category->count ); ?></span>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php
    /**
     * WooCommerce Product Filters
     * Hook: woocommerce_sidebar
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    ?>
    
    <div class="sidebar__filters">
        <h2 class="sidebar__title">Filters</h2>
        
        <?php
        // Display price filter widget
        if ( is_active_sidebar( 'shop-filters' ) ) {
            dynamic_sidebar( 'shop-filters' );
        } else {
            // Default price filter if no widget area is set up
            the_widget( 'WC_Widget_Price_Filter' );
            
            // Display layered nav filters (for attributes like color, size, etc.)
            if ( function_exists( 'wc_get_attribute_taxonomies' ) ) {
                $attribute_taxonomies = wc_get_attribute_taxonomies();
                
                if ( $attribute_taxonomies ) {
                    foreach ( $attribute_taxonomies as $attribute ) {
                        the_widget( 'WC_Widget_Layered_Nav', array(
                            'title'         => $attribute->attribute_label,
                            'attribute'     => $attribute->attribute_name,
                            'display_type'  => 'list',
                            'query_type'    => 'and',
                        ) );
                    }
                }
            }
            
            // Display rating filter
            the_widget( 'WC_Widget_Rating_Filter' );
        }
        ?>
    </div>
</nav>
