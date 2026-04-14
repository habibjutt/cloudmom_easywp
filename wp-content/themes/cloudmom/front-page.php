<?php get_header(); ?>

<?php if( have_rows('intro') ):
    while ( have_rows('intro') ): the_row();
        get_template_part( 'parts/section/intro' );
    endwhile;
endif; ?>

<?php get_template_part( 'parts/section/slider-posts' ); ?>

<?php get_template_part( 'parts/section/categories-overview' ); ?>

<?php if( have_rows('contact_form') ):
    while ( have_rows('contact_form') ): the_row();
        get_template_part( 'parts/section/contact-form' );
    endwhile;
endif; ?>

<?php get_footer(); ?>