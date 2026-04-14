<?php get_header();

$type = 'default';
$date_format = get_option('date_format');
$categories = get_the_category();

$general = get_field('general', 'options');

foreach ( $categories as $category ){

    if ( $category->slug=='pregnancy-week-by-week' || ( $category->parent!='' && get_category($category->parent)->slug=='pregnancy-week-by-week' ) ){
        $type = 'pregnancy';
    }
    if ( $category->slug=='baby-month-by-month' || ( $category->parent!='' && get_category($category->parent)->slug=='baby-month-by-month' ) ){
        $type = 'baby';
    }
    if ( $category->slug=='toddler-month' || ( $category->parent!='' && get_category($category->parent)->slug=='toddler-month' ) ){
        $type = 'toddler_month';
        // echo "Hello";
    }
}

if ( $type=='default' ){
    $sidebar = get_terms(array(
        'exclude_tree' => array( get_category_by_slug('pregnancy-week-by-week')->term_id, get_category_by_slug('baby-month-by-month')->term_id ),
        'order_by' => 'name',
        'parent' => 0,
        'taxonomy' => array('category'),
    ));

}
?>


<?php if ( $type=='pregnancy' ){
    set_query_var('navigation_type', 'header');
    get_template_part('parts/navigation-pregnancy');

} else if ( $type=='baby' || $type=='toddler_month'){
    set_query_var('navigation_type', 'header');
    get_template_part('parts/navigation-baby');

} ?>


<?php if ( have_posts() ): ?>
    <article class="default-page">
        <div class="default-page__container container container--jc-center">
            <div class="col col--12">
                <?php cs__the_breadcrumbs(); ?>
            </div>
        </div>
            
        <div id="sidebar-container" class="default-page__container container container--jc-center">
            <aside id="sidebar" class="default-page__sidebar col col--2 col--lg-12 col--md-12 col--sm-12 col--xs-12">
                <?php if ( $type=='pregnancy' || $type=='baby' ){ ?>
                    <?php get_template_part( 'parts/sidebar', $type ); ?>
                <?php } ?>
            </aside>

            <div class="default-page__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while ( have_posts() ): the_post(); ?>
                    <h1 class="default-page__title"><?php the_title(); ?></h1>

                    <?php if ( is_single() ){ ?>
                        <ul class="default-page__meta">
                            <li><?php the_time($date_format); ?></li>        
                            <li>by Melissa Lawrence</li>
                        </ul>
                    <?php } ?>

                    <div class="default-page__content"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>

            <nav class="default-page__social-networks col col--2 col--sm-12 col--xs-12">
                <?php if( !empty($general['social_networks']) ){ ?>
                    <ul class="social-networks-menu social-networks-menu--vertical social-networks-menu--light">
                        <?php foreach ( $general['social_networks'] as $item ){ ?>
                            <?php if( $item['name']!='' && $item['link']!='' ){ ?>
                                <li class="social-networks-menu__item">
                                    <a class="social-networks-menu__icon social-networks-menu__icon--<?= $item['name']; ?>" href="<?= $item['link']; ?>" title="<?= $item['name']; ?>" target="_blank"></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </nav>
        </div>
    </article>
<?php endif; ?>


<?php if ( $type=='pregnancy' ){
    set_query_var('navigation_type', 'footer');
    get_template_part('parts/navigation-pregnancy');

} else if ( $type=='baby' || $type=='toddler_month' ){
    set_query_var('navigation_type', 'footer');
    get_template_part('parts/navigation-baby');
    
}
 ?>

<?php if( have_rows('baby_form', 'options') ):
    while ( have_rows('baby_form', 'options') ): the_row();
        get_template_part( 'parts/section/contact-form' );
    endwhile;
endif; ?>

<?php if ( function_exists('echo_crp') ){ ?>
    <div class="crp_related-wrap container container--jc-center">
        <div class="col col--12">
            <?php echo_crp(); ?>
        </div>
    </div>
<?php } ?>


<?php comments_template(); ?>


<?php get_footer(); ?>