<?php get_header(); 

$type = 'default';
$category = get_queried_object();
$category_count = $category->category_count;




// Get categories list for sidebar
$children = get_categories(array('parent'=>$category->term_id));

// Count parent category posts
$child_categories = get_terms(array(
    'parent' => $category->term_id,
    'taxonomy' => array('category'),
));
foreach ( $child_categories as $child ){ 
    $category_count += $child->count;
}


if ( $category->slug=='pregnancy-week-by-week' || ( $category->parent!='' && get_category($category->parent)->slug=='pregnancy-week-by-week' ) ){
    $type = 'pregnancy';
}
if ( $category->slug=='baby-month-by-month' || ( $category->parent!='' && get_category($category->parent)->slug=='baby-month-by-month' ) ){
    $type = 'baby';
}

?>



<?php if ( $category_count > 0 ): ?>
    <section class="archive-header <?= $category->parent!='' ? 'archive-header--parent' : ''; ?>">
        <div class="archive-header__container container">
            <div class="col col--12">
                <?php cs__the_breadcrumbs(); ?>
            </div>
            
            <div class="col col--4 col--sm-12 col--xs-12">
                <?php if ( $category->parent!='' ){ ?>
                    <p class="archive-header__parent">
                        <a class="builtin" href="<?= get_category_link($category->parent); ?>"><?= get_cat_name($category->parent); ?></a>
                    </p>
                <?php } ?>
                
                <h1 class="archive-header__title"><?php single_cat_title(); ?></h1>
            </div>
            <div class="col col--8 col--sm-12 col--xs-12">
                <div class="archive-header__text"><?= category_description(); ?></div>
            </div>
        </div>
    </section>

    <?php if( have_rows('categories_overview', $category) ): ?>
        <?php get_template_part( 'parts/section/categories-overview' ); ?>
        
    <?php else: ?>
        <section class="archive-feed <?= $category->parent=='' && !empty($children) ? 'archive-feed--overview' : ''; ?>">
            <div id="sidebar-container" class="archive-feed__container container">
                <aside id="sidebar" class="archive-feed__sidebar col col--2 col--lg-12 col--md-12 col--sm-12 col--xs-12">
                    <?php get_template_part( 'parts/sidebar' ); ?>
                </aside>
                <div class="archive-feed__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                    <?php if ( !empty($children) ): ?>
                        <?php foreach ( $children as $child ){
                            $args = array(
                                'cat' => $child->term_id,
                                'fields' => 'ids',
                                'posts_per_page' => 4,
                                'post_type' => 'post',
                            );
                            if ( $type=='pregnancy' || $type=='baby' || $child->slug=='pregnancy-week-by-week' || $child->slug=='baby-month-by-month' || $child->slug=='toddler-kid' || $child->slug=='toddler-month'  ){
                                $args['order'] = 'ASC'; 
                            }
                            if ($category->term_id == '4762'){
                                $args['order'] = 'ASC';
                                $args['orderby'] = 'title';
                            } 
   
                            $child_posts = new WP_Query($args); 

                            ?>

                            <?php if ( $child_posts->have_posts() ): ?>
                                <div class="archive-feed__item">
                                    <div class="category-overview">
                                        <h2 class="category-overview__title">
                                            <a class="builtin" href="<?= get_category_link($child->term_id); ?>"><?= $child->name; ?></a>
                                        </h2>
                                        
                                        <div class="category-overview__wrap">
                                            <?php $i=0; while ( $child_posts->have_posts() ): $child_posts->the_post(); $i++;
                                                if ( $i==1 ){
                                                    set_query_var('modifier', 'post--horizontal');
                                                } else if ( $i!=1 && is_category() ){
                                                    set_query_var('modifier', 'post--small');
                                                } else {
                                                    set_query_var('modifier', '');
                                                } ?>

                                                <div class="category-overview__item">
                                                    <?php get_template_part( 'parts/content/post' ); ?>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>

                                        <div class="category-overview__button">
                                            <a class="button button--arrow" href="<?= get_category_link($child->term_id); ?>"><?= 'View All '. $child->name; ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; wp_reset_query(); ?>
                        <?php } ?>

                    <?php else: ?>
                        <?php 
                            if($category->parent == 4762){
                                $args = array(
                                    'cat' => $category->term_id,
                                    'fields' => 'ids',
                                    'posts_per_page' => -1,
                                    'post_type' => 'post',
                                    'orderby'=> 'title', 
                                    'order' => 'ASC' 
                                );
                                $posts = new WP_Query($args);
                                while ( $posts->have_posts() ): $posts->the_post();
                                set_query_var('modifier', 'post--feed'); ?>
                                <div class="archive-feed__item">
                                    <?php get_template_part( 'parts/content/post' ); ?>
                                </div>
                            <?php 
                            endwhile;
                            } else {
                                while ( have_posts() ): the_post();
                                set_query_var('modifier', 'post--feed'); ?>
                                <div class="archive-feed__item">
                                    <?php get_template_part( 'parts/content/post' ); ?>
                                </div>
                            <?php 
                            endwhile;
                            }

                        endif; wp_reset_query();  ?>
                    
                        <div class="archive-feed__pagination ">
                            <?= cs__the_pagination(); ?>
                        </div>
                </div>

                <aside class="archive-feed__ads-wrap col col--2 col--sm-12 col--xs-12">
                    <!-- <div class="archive-feed__ad">
                        <aside class="padd-non">
                            <div style=": 100%;height: 100%;" class="home-ad1">
                                
                                <a href="#" class="cstm_popup">
                                    <img src="http://cloudmom.com/wp-content/uploads/2025/11/GW-0507A-AD-Design.png" alt="">
                                </a>

                                <div id="popup_container" class="popup_container">
                                    <div class="popup_content">
                                        <span class="close_btn">&times;</span>
                                        <iframe id="popup_iframe" src="https://gleam.io/okSM6/cloudmom-giveaway-nov-2025" width="100%" height="100%" frameBorder="0" allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                        </aside>    
                    </div> -->
                    <div class="archive-feed__ad">
                        <aside class="padd-non">
                            <div style=": 100%;height: 100%;">
                                <!-- <img src="https://cloudmom.com/wp-content/uploads/2023/01/offer.png" alt=""> -->
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979720520106977"
                                     crossorigin="anonymous"></script>
                                <!-- Homepage Middle -->
                                <ins class="adsbygoogle"
                                     style="display:inline-block;width:160px;height:600px"
                                     data-ad-client="ca-pub-3979720520106977"
                                     data-ad-slot="7775946457"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </aside>
                    </div>
                    <div class="archive-feed__ad">
                        <aside class="padd-non">
                            <div style=": 100%;height: 100%;">
                                <!-- <img src="https://cloudmom.com/wp-content/uploads/2023/01/offer.png" alt=""> -->
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979720520106977"
                                     crossorigin="anonymous"></script>
                                <!-- Homepage Bottom -->
                                <ins class="adsbygoogle"
                                     style="display:inline-block;width:160px;height:600px"
                                     data-ad-client="ca-pub-3979720520106977"
                                     data-ad-slot="5594551961"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </aside>
                    </div>
                </aside>
            </div>
        </section>

    <?php endif; ?>

    <?php if( have_rows('baby_form', 'options') ):
        while ( have_rows('baby_form', 'options') ): the_row();
            get_template_part( 'parts/section/contact-form' );
        endwhile;
    endif; ?>

<?php else: ?>
    <div class="coming-soon">
        <p class="coming-soon__subtitle">Coming soon!</p>
        <h1 class="coming-soon__title"><?php single_cat_title(); ?></h1>
    </div>

<?php endif; ?>

<?php get_footer(); ?>