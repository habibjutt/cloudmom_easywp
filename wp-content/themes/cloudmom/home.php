<?php get_header(); ?>

<section class="archive-header">
    <div class="archive-header__container container">
        <div class="col col--12">
            <?php cs__the_breadcrumbs(); ?>
        </div>
        
        <div class="col col--4 col--sm-12 col--xs-12">
            <h1 class="archive-header__title"><?= get_the_title( get_option('page_for_posts') ); ?></h1>
        </div>
    </div>
</section>

<section class="archive-feed">
    <div id="sidebar-container" class="archive-feed__container container container--jc-center">
        <?php if ( !have_posts() ){ ?>
            <header class="archive-feed__header col col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <p class="archive-feed__subtitle">Sorry, nothing to display.</p>
            </header>
        <?php } else { ?>
            <aside id="sidebar" class="archive-feed__sidebar col col--2 col--lg-12 col--md-12 col--sm-12 col--xs-12">
                <?php get_template_part( 'parts/sidebar', $type ); ?>
            </aside>

            <div class="archive-feed__wrap col col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while (have_posts()) : the_post();
                    set_query_var('modifier', 'post--feed'); ?>
                    <div class="archive-feed__item">
                        <?php get_template_part( 'parts/content/post' ); ?>
                    </div>
                <?php endwhile; ?>
                
                <div class="archive-feed__pagination ">
                    <?= cs__the_pagination(); ?>
                </div>
            </div>

            <aside class="archive-feed__ads-wrap col col--2 col--sm-12 col--xs-12"></aside>
        <?php } ?>
    </div>
</section>


<?php if( have_rows('baby_form', 'options') ):
    while ( have_rows('baby_form', 'options') ): the_row();
        get_template_part( 'parts/section/contact-form' );
    endwhile;
endif; ?>

<?php get_footer(); ?>