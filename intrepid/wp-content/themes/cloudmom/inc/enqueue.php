<?php

// Load scripts
add_action('wp_enqueue_scripts', 'cs__header_scripts'); // Add Scripts
function cs__header_scripts(){
    if ( $GLOBALS['pagenow']!='wp-login.php' && !is_admin() ){
        wp_register_script('themescripts', get_template_directory_uri() . '/assets/js/build/global.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/build/global.js'), true);
        wp_enqueue_script('themescripts');
    }
}


// Load styles
add_action('wp_enqueue_scripts', 'cs__styles'); // Add Theme Stylesheet
function cs__styles(){
    wp_register_style('themestyle', get_template_directory_uri() . '/assets/css/build/global.css', array(), filemtime(get_template_directory() . '/assets/css/build/global.css'), 'all');
    wp_enqueue_style('themestyle');
    
    // Remove Contact form 7 styles
    wp_dequeue_style( 'contact-form-7' );
}


// Load extra Admin styling
add_action('admin_enqueue_scripts', 'cs__admin_styles');
function cs__admin_styles(){
    wp_register_style('admin-styles', get_template_directory_uri() . '/assets/css/build/admin.css', array(), filemtime(get_template_directory() . '/assets/css/build/admin.css'), 'all');
    wp_enqueue_style('admin-styles');
}


// Load editor styling
add_action( 'after_setup_theme', 'cs__editor_styles' );
function cs__editor_styles() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/build/editor.css' );
}