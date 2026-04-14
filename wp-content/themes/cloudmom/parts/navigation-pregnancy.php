<?php $category = get_category_by_slug('pregnancy-week-by-week');
$category_posts = new WP_Query(array(
    'cat' => $category->term_id,
    'fields' => 'ids',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'post_type' => 'post',
));


$post_index = array_search( $post->ID, $category_posts->posts );
$prev_post_id = isset( $category_posts->posts[ $post_index - 1 ] ) ? $category_posts->posts[ $post_index - 1 ] : false;
$next_post_id = isset( $category_posts->posts[ $post_index + 1 ] ) ? $category_posts->posts[ $post_index + 1 ] : false; ?>


<?php if ( $category_posts->have_posts() && ( $prev_post_id!='' || $next_post_id!='' ) ): ?>
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