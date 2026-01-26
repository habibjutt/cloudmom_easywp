<?php /*** Sidebar / Pregnancy week by week ***/

$parent = get_category_by_slug('pregnancy-week-by-week');
$children = get_categories(array('parent'=>$parent->term_id));
$parent_posts = new WP_Query(array(
    'cat' => $category->term_id,
    'fields' => 'ids',
    'posts_per_page' => -1,
    'post_type' => 'post',
)); ?>


<?php if ( $parent_posts->post_count>0 && !empty($children) ): ?>
    <nav class="sidebar">
        <p class="sidebar__title">Timeline</p>
        
        <div class="sidebar__select">Select a Category or Topic</div>
        
        <ul class="sidebar__list">
            <?php foreach ( $children as $child ){
                $child_posts = new WP_Query(array(
                    'cat' => $child->term_id,
                    'order' => 'ASC',
                    'posts_per_page' => -1,
                    'post_type' => 'post',
                )); ?>

                <li class="sidebar__item <?= $child_posts->have_posts() ? 'sidebar__item--parent' : ''; ?>">
                    <?php if ( $child_posts->have_posts() ){ ?>
                        <span class="sidebar__parent">
                            <a href="<?= get_category_link($child->term_id); ?>"><?= $child->name; ?></a>
                        </span>

                        <ul class="sidebar__sublist">
                            <?php while ( $child_posts->have_posts() ){ $child_posts->the_post(); ?>
                                <li class="sidebar__item">
                                    <a href="<?php the_permalink(); ?>"><?= cs__get_trimmed_post_title($post->ID); ?></a>
                                </li>
                            <?php } ?>
                        </ul>

                    <?php } else { ?>
                        <a href="<?= get_category_link($child->term_id); ?>"><?= $child->name; ?></a>

                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php endif; ?>