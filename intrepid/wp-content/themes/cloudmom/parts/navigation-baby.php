<?php
$category = get_category_by_slug('baby-month-by-month');
$category_toddler = get_category_by_slug('toddler-month');

$category1   = get_the_category(get_the_ID());
$catID = $category1[0]->category_parent;
// echo "<pre>";
// print_r($catID);

if ($catID == '4762' || $catID == 4762 ) {
    $category_posts = new WP_Query(array(
       'cat' => $catID,
    //'category__in' => array($category->term_id, $category_toddler->term_id),
    'fields' => 'ids',
    // 'orderby' => 'date',
    // 'order' => 'DESC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    'meta_key'  => 'reorder',
    'orderby'   => 'meta_value',
    'order'     => 'ASC'
));
}

elseif ($catID == '4677' || $catID == 4677) {
     $category_posts = new WP_Query(array(
        'cat' => $catID,
     //'cat' => $category->term_id,
     //'category__in' => array($category->term_id,$category_toddler->term_id),
    'fields' => 'ids',
     // 'orderby' => 'date',
     // 'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    'meta_key'  => 'reorder',
    'orderby'   => 'meta_value',
    'order'     => 'ASC'
));  
}

elseif (is_single('51686')) {
     $category_posts = new WP_Query(array(
     'cat' => $catID,
     //'category__in' => array($category->term_id,$category_toddler->term_id),
    'fields' => 'ids',
     'orderby' => 'date',
     'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    // 'meta_key'  => 'reorder',
    // 'orderby'   => 'meta_value',
    // 'order'     => 'ASC'
));  
}
elseif (is_single('51690')) {
     $category_posts = new WP_Query(array(
     'cat' => $catID,
     //'category__in' => array($category->term_id,$category_toddler->term_id),
    'fields' => 'ids',
     'orderby' => 'date',
     'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    // 'meta_key'  => 'reorder',
    // 'orderby'   => 'meta_value',
    // 'order'     => 'ASC'
));  
}

elseif (is_single('51715')) {
     $category_posts = new WP_Query(array(
     'cat' => $catID,
     //'category__in' => array($category->term_id,$category_toddler->term_id),
    'fields' => 'ids',
     'orderby' => 'date',
     'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    // 'meta_key'  => 'reorder',
    // 'orderby'   => 'meta_value',
    // 'order'     => 'ASC'
));  
}

elseif (is_single('51837')) {
     $category_posts = new WP_Query(array(
     'cat' => $catID,
     //'category__in' => array($category->term_id,$category_toddler->term_id),
    'fields' => 'ids',
     // 'orderby' => 'date',
     // 'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    'meta_key'  => 'reorder',
    'orderby'   => 'meta_value',
    'order'     => 'ASC'
));  
}



else {
    $category_posts = new WP_Query(array(
       'cat' => $catID,
    //'category__in' => array($category->term_id, $category_toddler->term_id),
    'fields' => 'ids',
    // 'orderby' => 'date',
    // 'order' => 'DESC',
    'posts_per_page' => -1,
    'post_type' => 'post',
    'meta_key'  => 'reorder',
    'orderby'   => 'meta_value',
    'order'     => 'ASC'
));
}




$post_index = array_search( $post->ID, $category_posts->posts );
if(!is_single(42750)){
$prev_post_id = isset( $category_posts->posts[ $post_index - 1 ] ) ? $category_posts->posts[ $post_index - 1 ] : false;
}
// if(!is_single(51715)){
if(!is_single( array( 54090 , 51715 ) ) ) {   
$next_post_id = isset( $category_posts->posts[ $post_index + 1 ] ) ? $category_posts->posts[ $post_index + 1 ] : false; 
}
?>


<?php if ( $category_posts->have_posts() && ( $prev_post_id != '' || $next_post_id != '' ) ): ?>
<?php
// echo "<pre>";
// print_r($category_posts);
// echo "</pre>";
?>
    <aside class="articles-navigation articles-navigation--<?= $navigation_type; ?>">
        <nav class="articles-navigation__container container container--jc-center">
            <ul class="articles-navigation__wrap col col--8 col--xl-12 col--lg-12 col--md-12 col--sm-12 col--xs-12">
                <li class="articles-navigation__item articles-navigation__item--prev">
                    <?php if ( $prev_post_id!='' ){ ?>
                        <a class="articles-navigation__button articles-navigation__button--prev" href="<?= get_the_permalink($prev_post_id); ?>">
                            <?= cs__get_trimmed_post_title($prev_post_id); ?>
                        </a>
                    
                        <?php if ( $navigation_type=='footer' ){ ?>
                            <div class="articles-navigation__text"><?= get_the_excerpt($prev_post_id); ?></div>
                        <?php } ?>
                    <?php } ?>
                </li>

                <?php if ( $navigation_type=='header' ){ ?>
                    <li class="articles-navigation__item articles-navigation__item--title">
                        <p class="articles-navigation__title"><?= cs__get_trimmed_post_title(get_the_ID()); ?></p>
                    </li>
                <?php } ?>

                <li class="articles-navigation__item articles-navigation__item--next">
                    <?php if ( $next_post_id!='' ){ ?>
                        <a class="articles-navigation__button articles-navigation__button--next" href="<?= get_the_permalink($next_post_id); ?>">
                            <?= cs__get_trimmed_post_title($next_post_id); ?>
                        </a>
                    
                        <?php if ( $navigation_type=='footer' ){ ?>
                            <div class="articles-navigation__text"><?= get_the_excerpt($next_post_id); ?></div>
                        <?php } ?>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </aside>
<?php endif; ?>