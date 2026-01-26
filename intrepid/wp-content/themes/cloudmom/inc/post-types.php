<?php
/*------------------------------------*\
	Register custom post types
\*------------------------------------*/

add_action('init', 'cs__register_post_types');
function cs__register_post_types() {
    $default_cpt_labels = array(
        'add_new'               => __( 'Add new', CSWP ),
        'add_new_item'          => __( 'Add new post', CSWP ),
        'new_item'              => __( 'New post', CSWP ),
        'edit_item'             => __( 'Edit post', CSWP ),
        'view_item'             => __( 'View post', CSWP ),
        'all_items'             => __( 'All posts', CSWP ),
        'search_items'          => __( 'Search posts', CSWP ),
        'parent_item_colon'     => __( 'Parent posts:', CSWP ),
        'not_found'             => __( 'No posts found.', CSWP ),
        'not_found_in_trash'    => __( 'No posts found in Trash.', CSWP ),
        'featured_image'        => _x( 'Featured Image', 'Overrides the “Featured Image” phrase for this post type', CSWP ),
        'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type', CSWP ),
        'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type', CSWP ),
        'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type', CSWP ),
        'insert_into_item'      => _x( 'Insert into post', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post)', CSWP ),
        'uploaded_to_this_item' => _x( 'Uploaded to this post', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post)', CSWP ),
        'filter_items_list'     => _x( 'Filter posts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”', CSWP ),
        'items_list_navigation' => _x( 'Posts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”', CSWP ),
        'items_list'            => _x( 'Posts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”', CSWP )
    );
    
    $default_cpt_args = array(
        'labels'              => $default_cpt_labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'rewrite'             => true,
        'hierarchical'        => false,
        'has_archive'         => false,
        'menu_position'       => null,
        'menu_icon'           => null,
        'show_in_menu'        => true,
        'show_ui'             => true,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'query_var'           => true,
    );
    

    /**
     * Post Type: example
     */
    /*$cpt_slug = 'example';
    $cpt_label = array (
        'single' => 'example',
        'plural' => 'examples'
    );
    $cpt_labels = array_merge($default_cpt_labels, array(
        'name'           => _x( $cpt_label['plural'], 'Post type general name', CSWP ),
        'singular_name'  => _x( $cpt_label['single'], 'Post type singular name', CSWP ),
        'menu_name'      => _x( $cpt_label['plural'], 'Admin Menu text', CSWP ),
        'name_admin_bar' => _x( $cpt_label['single'], 'Add New on Toolbar', CSWP ),
        'all_items'      => __( 'All '.$cpt_label['plural'], CSWP ),
        'archives'       => __( $cpt_label['single'].' archives', 'The post type archive label used in nav menus. Default “Post Archives”', CSWP )
    ));
    $cpt_args = array_merge($default_cpt_args, array(
        'labels'             => $cpt_labels,
        'supports'           => array( 'title', 'thumbnail' ),
        'rewrite'            => array( 'slug' => $cpt_slug, 'with_front' => true ),
        'menu_icon'          => 'dashicons-cart',
        'publicly_queryable' => false,
        'taxonomies'         => array('fruit'),
    ));
    register_post_type( $cpt_slug, $cpt_args );
    
    unset( $cpt_label );
    unset( $cpt_labels );
    unset( $cpt_args );*/
}



/*------------------------------------*\
	Register custom taxonomies
\*------------------------------------*/
add_action( 'init', 'cs__register_taxonomies' );
function cs__register_taxonomies() {

    /**
     * Taxonomy: example
     * Associated CPT: example cpt
     */
    /*$tax_slug = 'example';
    $tax_label = array (
        'single' => 'example',
        'plural' => 'examples'
    );
    $tax_labels = array(
        'name' => _x( $tax_label['plural'], 'General name for the taxonomy, usually plural', CSWP ),
        'singular_name' => _x( $tax_label['single'], 'Name for one object of this taxonomy', CSWP ),
        'all_items' => __( 'All '.$tax_label['plural'], CSWP ),
        'edit_item' => __( 'Edit '.$tax_label['single'], CSWP ),
        'view_item' => '',
        'update_item' => __( 'Update '.$tax_label['single'], CSWP ),
        'add_new_item' => __( 'Add New '.$tax_label['single'], CSWP ),
    );
 
    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => $tax_slug ),
    );
 
    register_taxonomy( $tax_slug, array( 'product' ), $tax_args );

    unset( $tax_label );
    unset( $tax_labels );
    unset( $tax_args );*/
}

?>