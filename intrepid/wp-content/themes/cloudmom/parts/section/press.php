<?php /*** Section / Press ***/ ?>

<?php if ( have_rows('press') ): ?>
    <!-- Section / Press -->
    <section class="section-press">
        <div class="section-press__container container container--jc-center">
            <div class="section-press__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while ( have_rows('press') ): the_row(); ?>
                    <div class="section-press__item">
                        <?php get_template_part( 'parts/content/press-overview' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>