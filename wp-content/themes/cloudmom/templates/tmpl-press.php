<?php
/**
 * The Template name: Press
 */

get_header(); ?>

<?php if ( have_posts() ): ?>
    <article class="default-page">
        <div class="default-page__container container container--jc-center">
            <div class="col col--12">
                <?php cs__the_breadcrumbs(); ?>
            </div>
            
            <div class="default-page__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while ( have_posts() ): the_post(); ?>
                    <h1 class="default-page__title"><?php the_title(); ?></h1>
                    <div class="default-page__content"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </article>
<?php endif; ?>

<?php get_template_part( 'parts/section/press' ); ?>


<?php if( have_rows('baby_form', 'options') ):
    while ( have_rows('baby_form', 'options') ): the_row();
        get_template_part( 'parts/section/contact-form' );
    endwhile;
endif; ?>

<?php get_footer(); ?>