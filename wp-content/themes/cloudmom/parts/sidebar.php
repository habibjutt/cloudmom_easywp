<?php  /*** Sidebar / Default ***/

$category = get_queried_object();
$category_parent = end(get_ancestors($category->term_id, 'category'));

// Get categories list for sidebar
if ( $category_parent!='' ){
    $children = get_categories(array('parent'=>$category_parent));
} else {
    $children = get_categories(array('parent'=>$category->term_id));
}


 // IF is_home THEN "Baby"
if ( is_home() ){
    $sidebar = get_categories(array('parent'=>4746));

} else if ( !empty($children) ){
    $sidebar = $children;

} else {
    $sidebar = get_terms(array(
        'exclude_tree' => array( get_category_by_slug('pregnancy-week-by-week')->term_id, get_category_by_slug('baby-month-by-month')->term_id ),
        'order_by' => 'name',
        'parent' => 0,
        'taxonomy' => array('category'),
    ));
} ?>


<?php if ( !empty($sidebar) ){ ?>
    <nav class="sidebar">
        <p class="sidebar__title"><?= is_home() || is_category(4279) ? 'More on Baby' : 'Topics'; ?></p>
        
        <div class="sidebar__select">Select a Category or Topic</div>

        <ul class="sidebar__list" data-list="1">
            <?php foreach ( $sidebar as $item_1 ){
                $item_1_terms = get_terms(array(
                    // 'order' => 'ASC', 
                    // 'orderby' => 'name', 
                    'order_by' => 'name',
                    'parent' => $item_1->term_id,
                    'taxonomy' => array('category'),
                ));  
                ?>

                <li class="sidebar__item <?= !empty($item_1_terms) ? 'sidebar__item--parent' : ''; ?>" data-item="1">
                    <?php if ( !empty($item_1_terms) ){  ?>
                        <span class="sidebar__parent" data-parent="1">
                            <a href="<?= get_category_link($item_1->term_id); ?>"><?= $item_1->name; ?></a>
                        </span>

                        <ul class="sidebar__sublist" data-list="2">
                            <?php  
                                usort($item_1_terms, function($a, $b) {return strcmp($a->name, $b->name);});
                            ?>
                            <?php foreach ( $item_1_terms as $item_2 ){
                                if ( $item_2->parent=='4677' || $item_2->parent=='4629' ){
                                    $item_2_posts = new WP_Query(array(
                                        'cat' => $item_2->term_id,
                                        'order' => 'DESC',
                                        'posts_per_page' => -1,
                                        'post_type' => 'post',
                                    ));
                                } else if ($item_2->parent == '4762') {

                                    $item_2_posts = new WP_Query(array(
                                        'cat' => $item_2->term_id,
                                        'orderby' => 'title',
                                        'order' => 'ASC', 
                                        'posts_per_page' => -1,
                                        'post_type' => 'post',
                                    ));
                                } else {
                                    unset($item_2_posts);
                                    $item_2_terms = get_terms(array(
                                        'orderby' => 'name', 
                                        'order' => 'ASC',
                                        'parent' => $item_2->term_id,
                                        'taxonomy' => array('category'),
                                    ));

                                } ?>

                                <li class="sidebar__item <?= !empty($item_2_posts) || !empty($item_2_terms) ? 'sidebar__item--parent' : ''; ?>" data-item="2">
                                    <?php if ( !empty($item_2_posts) || !empty($item_2_terms) ){ ?>
                                        <span class="sidebar__parent" data-parent="2">
                                            <a href="<?= get_category_link($item_2->term_id); ?>"><?= $item_2->name; ?></a>
                                        </span>
                                        <ul class="sidebar__sublist" data-list="3">
                                            <?php if ( !empty($item_2_terms) ){ ?>
                                                <?php foreach ( $item_2_terms as $item ){ ?>
                                                    <li class="sidebar__item">
                                                        <a href="<?= get_category_link($item->term_id); ?>"><?= $item->name; ?></a>
                                                    </li>
                                                <?php } ?>
                                            <?php } ?>
                                            <?php if ( !empty($item_2_posts) ){ ?>
                                                <?php while ( $item_2_posts->have_posts() ){ $item_2_posts->the_post(); ?>
                                                    <li class="sidebar__item">
                                                        <a href="<?php the_permalink(); ?>"><?= cs__get_trimmed_post_title($post->ID); ?></a>
                                                    </li>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    <?php } else { ?>
                                        <a href="<?= get_category_link($item_2->term_id); ?>"><?= $item_2->name; ?></a>
                                    <?php } wp_reset_query(); ?>
                                </li>
                            <?php } ?>
                        </ul>

                    <?php } else {  ?>
                        <a href="<?= get_category_link($item_1->term_id); ?>"><?= $item_1->name; ?></a>
                        
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php } ?>