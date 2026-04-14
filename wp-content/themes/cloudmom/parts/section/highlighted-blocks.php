<?php /*** Section / Highlighted blocks ***/ ?>

<?php if ( have_rows('highlighted_blocks') ): ?>
    <!-- Section / Highlighted blocks -->
    <section class="section-highlighted-blocks">
        <div class="section-highlighted-blocks__container container container--jc-center">
            <div class="section-highlighted-blocks__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while ( have_rows('highlighted_blocks') ): the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        $content = get_sub_field('content'); ?>

                    <div class="section-highlighted-blocks__item">
                        <figure class="section-highlighted-blocks__item-header">
                            <?php if ( !empty($image) ){ ?>
                                <picture class="section-highlighted-blocks__item-image">
                                    <img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= $image['alt']; ?>">
                                </picture>
                            <?php } ?>

                            <figcaption class="section-highlighted-blocks__item-caption">
                                <?php if ( $title!='' ){ ?>
                                    <p class="section-highlighted-blocks__item-title"><?= $title; ?></p>
                                <?php } ?>

                                <?php if ( $subtitle!='' ){ ?>
                                    <p class="section-highlighted-blocks__item-subtitle"><?= $subtitle; ?></p>
                                <?php } ?>
                            </figcaption>
                        </figure>

                        <?php if ( $content!='' ){ ?>
                            <div class="section-highlighted-blocks__item-content"><?= $content; ?></div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>