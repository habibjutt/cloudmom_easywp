<?php /*** Section / Related posts ***/

$args = array(
    'category__in' => wp_get_post_categories($post->ID, array('fileds' => 'ids')),
    'post__not_in' => array($post->ID),
    'posts_per_page' => 6,
    'post_type' => 'post',
);

// IF "Pregnancy w-b-w" THEN "Pregnancy"
if ( in_category(4629) ){
    $children = get_categories(array('parent'=>4723));

    $args['category__not_in'] = array(4629);
    $args['category__in'] = array(4723);

    foreach ( $children as $child ){
        $args['category__in'][] = $child->term_id;
    }
}
// IF "Baby m-by-m" THEN "Baby"
if ( in_category(4677) ){
    $children = get_categories(array('parent'=>4746));

    $args['category__not_in'] = array(4677);
    $args['category__in'] = array(4746);

    foreach ( $children as $child ){
        $args['category__in'][] = $child->term_id;
    }
}

$related_posts = new WP_Query($args); ?>

<?php if ( $related_posts->have_posts() ): ?>
    <!-- Section / Related posts -->
    <section class="section-related-posts">
        <div class="section-related-posts__container container">
            <div class="col col--12">
                <h2 class="section-related-posts__title">Related posts</h2>
            </div>

            <?php while ( $related_posts->have_posts() ): $related_posts->the_post(); ?>
                <div class="section-related-posts__item col col--4 col--sm-6 col--xs-6">
                    <?php get_template_part( 'parts/content/post' ); ?>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>
<?php endif; ?>