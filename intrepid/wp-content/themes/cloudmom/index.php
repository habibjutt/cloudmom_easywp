<?php get_header(); ?>

<section class="archive-feed">
    <div class="archive-feed__container container container--jc-center">
        <div class="col col--12">
            <?php cs__the_breadcrumbs(); ?>
        </div>
        
        <header class="archive-feed__header col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
            <h1 class="archive-feed__title"><?php _e( 'Latest Posts', CSWP ); ?></h1>
            
            <?php if ( !have_posts() ){ ?>
                <p class="archive-feed__subtitle">Sorry, nothing to display.</p>
            <?php } ?>
        </header>

        <div class="archive-feed__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
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
    </div>
</section>


<?php if( have_rows('baby_form', 'options') ):
    while ( have_rows('baby_form', 'options') ): the_row();
        get_template_part( 'parts/section/contact-form' );
    endwhile;
endif; ?>

<?php get_footer(); ?>