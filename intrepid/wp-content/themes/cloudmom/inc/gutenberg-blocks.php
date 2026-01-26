<?php

add_filter( 'block_categories', 'cs__register_block_categories', 10, 2);
function cs__register_block_categories($categories, $post){
	return array_merge(
		array(
			array(
				'slug' => 'cloudmom-blocks',
				'title' => __('CloudMom blocks'),
			),
		),
		$categories
	);
}

if ( function_exists('acf_register_block_type') ){
    add_action('acf/init', 'cs__register_acf_block_types');
}

function cs__register_acf_block_types(){
    // Block / Highlighted content
    acf_register_block_type(array(
        'name'				=> 'block-highlighted-content',
        'title'				=> __('Highlighted content'),
        'description'		=> __('A custom highlighted block of content'),
        'render_template'	=> 'parts/block/highlighted-content.php',
        'category'			=> 'cloudmom-blocks',
        'icon'				=> 'lightbulb',
        'keywords'			=> array('highlighted', 'content'),
    ));

    // Block / Product
    acf_register_block_type(array(
        'name'				=> 'block-product',
        'title'				=> __('Product'),
        'description'		=> __('A custom block for product'),
        'render_template'	=> 'parts/block/product.php',
        'category'			=> 'cloudmom-blocks',
        'icon'				=> 'cart',
        'keywords'			=> array('product', 'content'),
    ));
}