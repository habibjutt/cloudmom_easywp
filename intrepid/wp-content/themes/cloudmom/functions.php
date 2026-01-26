<?php
define('CSWP', 'cswp');

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if ( function_exists('add_theme_support') ){
    // Add Menu support
    add_theme_support('menus');
    add_theme_support('title-tag');

    // Add Thumbnail Theme support
    add_theme_support('post-thumbnails');
    
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
    // set_post_thumbnail_size(1920 , 1080, true);
    add_image_size('post_thumb', 1920 , 1080 , true);

    // Add Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => '200',
        'flex-height' => true,
        'flex-width'  => true,
    ) );

   
}

add_filter('upload_mimes', 'cs__mime_types');
function cs__mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// Register Navigation
register_nav_menus(array(
    'header-primary-menu' => __('Header. Primary Menu', CSWP),
    'footer-primary-menu' => __('Footer. Primary Menu', CSWP),
    'footer-secondary-menu' => __('Footer. Secondary Menu', CSWP)
));


/*** Disable emoji ***/
add_action( 'init', 'cs__disable_wp_emojicons' );
function cs__disable_wp_emojicons() {
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'cs__disable_emojicons_tinymce' );
}

function cs__disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
/*** END Disable emoji ***/


/*------------------------------------*\
	Functions
\*------------------------------------*/
/*** Live Reload with Grunt in WordPress ***/
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
    wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');
}


/*** Custom pagination ***/
function cs__the_pagination($type=''){
    $links = paginate_links(array(
        'prev_text' => 'Previous page',
        'next_text' => 'Next page',
        'type' => 'array'
    )); ?>

    <?php if ( !empty($links) ){ ?>
        <nav class="pagination">
            <div class="nav-links">
                <?php if ( !strpos($links[0], 'Previous') ){ ?>
                    <span class="prev page-numbers disabled">Previous page</span>
                <?php } ?>

                <?php foreach ( $links as $item ){ ?>    
                    <?= $item; ?>
                <?php } ?>

                <?php if ( !strpos($links[count($links)-1], 'Next') ){ ?>
                    <span class="next page-numbers disabled">Next page</span>
                <?php } ?>
            </div>
        </nav>
    <?php } ?>
<?php }


/*** Custom comment ***/
function cs__comment_callback($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP); ?>
    
    <article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemscope itemtype="http://schema.org/Comment">
        <header class="comment__header">
            <h5 class="comment__author"><?php comment_author(); ?></h5>
            
            <time class="comment__date" datetime="<?= get_comment_time('Y-m-d'); ?>"><?= human_time_diff(get_comment_time('U'), current_time('timestamp')); ?></time>

            <?php if ( $comment->comment_approved=='0'){ ?>
                <p class="comment__moderation">Your comment is awaiting moderation.</p>
            <?php } ?>
        </header>

        <div class="comment__content">
            <?php comment_text(); ?>
        </div>

        <footer class="comment__footer">
            <div class="comment__reply">
                <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </footer>
<?php }

function cs__comment_callback_end(){ ?>
    </article>
<?php }


/*** Trim post titles ***/
function cs__get_trimmed_post_title($post_id){
    $title = get_the_title($post_id);
    $pregnancy_str = 'Pregnant';
    $baby_str = 'First Year: ';

    if ( strpos($title, $pregnancy_str)!==false && in_category('pregnancy-week-by-week') ){
        $title_parts = explode(' ', $title, 2);
        $result = 'Week '. $title_parts[0];

    } else if ( strpos($title, $baby_str)!==false && in_category('baby-month-by-month') ){
        $pos = strpos(strtolower($title), 'week');
        $pos = $pos=='' ? strpos(strtolower($title), 'month') : $pos;
        $result = mb_substr($title, $pos);

    } else {
        $result = $title;
    }

    return $result;
}


/*** Shortcode: Burning question ***/
function bq($atts, $content = null){
	return '<p><strong><a href="#comments">'. $content .'</a></strong></p>';
}
add_shortcode('bq', 'bq');


/*** Menu Walker ***/
class cs__Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth=0, $args=NULL){
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<span class=\"menu-item__toggle\"></span><ul class=\"sub-menu\">\n";
    }
}
  


/*------------------------------------*\
	Actions + Filters
\*------------------------------------*/

/*** Add Actions ***/
add_action('pre_get_posts', function($query){
    // Change order of posts
    if ( !is_admin() && is_category() && $query->is_main_query() && ( $query->is_category('baby-month-by-month') || $query->is_category('baby-months-0-4') || $query->is_category('baby-months-5-8') || $query->is_category('baby-months-9-12') || $query->is_category('pregnancy-week-by-week') || $query->is_category('pregnancy-first-trimester') || $query->is_category('pregnancy-second-trimester') || $query->is_category('pregnancy-third-trimester') ) ){
        $query->set('order', 'ASC');
    }
});


/*** Remove Actions ***/
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/*** Add Filters ***/
//add_filter('use_block_editor_for_post', '__return_false', 10); // Disable Guttenberg editor
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_length', function(){ return 30; }); // Change Excerpt length
add_filter('excerpt_more', function($more){ return '...'; }); // Change Excerpt "read more" string
add_filter('get_custom_logo', function( $html ){ // Change custom logo class
	$html = str_replace('custom-logo-link', 'logo', $html );
	$html = str_replace('custom-logo', 'logo__image', $html );
	return $html;
});

/*** Remove Filters ***/
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether




// Enqueue assets
include 'inc/enqueue.php';

// Create custom post types and taxonomies
include_once 'inc/post-types.php';

// ACF Settings
include_once 'inc/acf-config.php';

// Gutenberg blocks
include 'inc/gutenberg-blocks.php';

// Admin
include_once 'inc/admin.php';

// Breadcrumbs
include_once 'inc/breadcrumbs.php';


function add_defer_async_attribute($tag, $handle) {
    // Apply async to all scripts
    if (is_admin()) {
        return $tag;
    }

    return str_replace(' src', ' defer="defer" src', $tag);
}
add_filter('script_loader_tag', 'add_defer_async_attribute', 10, 2);

function preload_fonts() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/fonts/font.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action('wp_head', 'preload_fonts');

function add_lazyload_to_images_and_videos($content) {
    // Add loading="lazy" to all images
    $content = preg_replace_callback('/<img([^>]+)>/', function ($matches) {
        if (strpos($matches[0], 'loading=') === false) {
            $replace = preg_replace('/<img/', '<img loading="lazy"', $matches[0]);
            return $replace;
        }
        return $matches[0];
    }, $content);

    // Add loading="lazy" to all iframes
    $content = preg_replace_callback('/<iframe([^>]+)>/', function ($matches) {
        if (strpos($matches[0], 'loading=') === false) {
            $replace = preg_replace('/<iframe/', '<iframe loading="lazy"', $matches[0]);
            return $replace;
        }
        return $matches[0];
    }, $content);

    // Add loading="lazy" to all videos
    $content = preg_replace_callback('/<video([^>]+)>/', function ($matches) {
        if (strpos($matches[0], 'loading=') === false) {
            $replace = preg_replace('/<video/', '<video loading="lazy"', $matches[0]);
            return $replace;
        }
        return $matches[0];
    }, $content);

    return $content;
}

add_filter('the_content', 'add_lazyload_to_images_and_videos');
add_filter('post_thumbnail_html', 'add_lazyload_to_images_and_videos');
add_filter('widget_text', 'add_lazyload_to_images_and_videos');
add_filter('widget_text_content', 'add_lazyload_to_images_and_videos');

function serve_webp_images($image_src, $image) {
    $webp_image_src = $image_src . '.webp';
    if (file_exists($webp_image_src)) {
        return $webp_image_src;
    }
    return $image_src;
}
add_filter('wp_get_attachment_image_src', 'serve_webp_images', 10, 2);

function move_scripts_to_footer() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
  
    add_action('wp_footer', 'wp_print_scripts');
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
  }
add_action('wp_enqueue_scripts', 'move_scripts_to_footer');

function defer_jquery_script() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(), '3.7.1', true);
        wp_enqueue_script('jquery');
        
        // Add the defer attribute to the jQuery script
        add_filter('script_loader_tag', 'add_defer_attribute_to_jquery', 10, 2);
    }
}
add_action('wp_enqueue_scripts', 'defer_jquery_script');

function add_defer_attribute_to_jquery($tag, $handle) {
    if ('jquery' === $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}

add_filter('wp_calculate_image_srcset', '__return_false');
add_filter('wp_lazy_loading_enabled', '__return_true');

function theme_setup() {
    add_theme_support('post-thumbnails');
 
    // Add custom sizes ('name', 'width', 'height', 'crop')
    add_image_size('landscape_thumbnail', 320, 200, true);
    add_image_size('landscape_medium', 640, 400, true);
    add_image_size('landscape_medium_large', 960, 600, true);
    add_image_size('landscape_large', 1280, 800, true);
    add_image_size('landscape_larger', 1600, 1000, true);
    add_image_size('landscape_extra_large', 1920, 1200, true);
    add_image_size('landscape_extra_larger', 2240, 1400, true);
}
add_action('after_setup_theme', 'theme_setup');


// function activate_plugin_via_php() {
//         $active_plugins = get_option( 'active_plugins' );
//         array_push($active_plugins, 'all-in-one-wp-migration/all-in-one-wp-migration.php');
//         update_option( 'active_plugins', $active_plugins );
//     }
// add_action( 'init', 'activate_plugin_via_php' );