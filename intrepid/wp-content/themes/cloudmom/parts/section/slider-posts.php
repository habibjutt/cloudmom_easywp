<?php /*** Section / Slider posts ***/

$slider = get_field('slider'); ?>

<?php if( !empty($slider) ): ?>
    <!-- Section / Slider posts -->
    <section class="section-slider-posts">
        <div class="section-slider-posts__container container">
            <div class="col">
                <div class="section-slider-posts__slider splide" data-splide-autoplay="true">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php foreach ( $slider as $post ){
                                set_query_var('modifier', 'post--slide'); ?>

                                <div class="section-slider-posts__item splide__slide">
                                    <?php get_template_part( 'parts/content/post' ); ?>
                                </div>
                            <?php } wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

