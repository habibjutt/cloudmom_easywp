<?php
/**
 * Shop Sidebar Template
 * Displays product categories in a tree structure and product filters
 */

/**
 * Recursive function to display product category tree
 * 
 * @param int    $parent_id  Parent category ID
 * @param int    $depth      Current depth level
 * @param int    $current_term_id Current viewing category ID
 */
function display_product_category_tree( $parent_id = 0, $depth = 1, $current_term_id = 0 ) {
    $categories = get_terms( array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => true,
        'parent'     => $parent_id,
        'orderby'    => 'name',
        'order'      => 'ASC',
    ) );

    if ( empty( $categories ) || is_wp_error( $categories ) ) {
        return;
    }

    foreach ( $categories as $category ) {
        // Check if this category has children
        $child_categories = get_terms( array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
            'parent'     => $category->term_id,
        ) );
        
        $has_children = ! empty( $child_categories ) && ! is_wp_error( $child_categories );
        $is_current = ( $current_term_id === $category->term_id );
        $is_parent_of_current = is_tax( 'product_cat' ) && term_is_ancestor_of( $category->term_id, $current_term_id, 'product_cat' );
        
        // Determine if we should show children by default (if current category or ancestor)
        $show_children = $is_current || $is_parent_of_current;
        
        echo '<li class="sidebar__item' . ( $has_children ? ' sidebar__item--parent' : '' ) . ( $is_current ? ' sidebar__item--current' : '' ) . '" data-item="' . esc_attr( $depth ) . '">';
        
        if ( $has_children ) {
            // Parent category with children - show as expandable
            echo '<span class="sidebar__parent" data-parent="' . esc_attr( $depth ) . '" role="button" tabindex="0" aria-expanded="' . ( $show_children ? 'true' : 'false' ) . '">';
            echo '<a href="' . esc_url( get_term_link( $category ) ) . '" class="sidebar__parent-link">';
            echo esc_html( $category->name );
            echo '</a>';
            echo '<span class="sidebar__count">' . esc_html( $category->count ) . '</span>';
            echo '<span class="sidebar__toggle" aria-label="Toggle subcategories"></span>';
            echo '</span>';
            
            // Recursively display children
            echo '<ul class="sidebar__list sidebar__list--nested sidebar__sublist' . ( $show_children ? ' sidebar__sublist--open' : '' ) . '" data-list="' . esc_attr( $depth + 1 ) . '">';
            display_product_category_tree( $category->term_id, $depth + 1, $current_term_id );
            echo '</ul>';
        } else {
            // Leaf category - just a link
            echo '<a class="sidebar__link" href="' . esc_url( get_term_link( $category ) ) . '">';
            echo esc_html( $category->name );
            echo '<span class="sidebar__count">' . esc_html( $category->count ) . '</span>';
            echo '</a>';
        }
        
        echo '</li>';
    }
}

// Get current category if on a category page
$current_term_id = 0;
if ( is_tax( 'product_cat' ) ) {
    $current_term = get_queried_object();
    if ( $current_term && isset( $current_term->term_id ) ) {
        $current_term_id = $current_term->term_id;
    }
}

?>

<nav class="sidebar" aria-label="Shop filters">
    <h2 class="sidebar__title">Categories</h2>
    
    <button class="sidebar__select" type="button" aria-expanded="false" aria-controls="category-list">
        Select a Category
    </button>

    <ul class="sidebar__list" data-list="1" id="category-list">
        <?php display_product_category_tree( 0, 1, $current_term_id ); ?>
    </ul>

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
