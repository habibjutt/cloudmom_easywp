<?php /*** Section / Sitemap ***/ ?>

<?php if ( have_rows('sitemap') ): ?>
    <!-- Section / Sitemap -->
    <section class="section-sitemap">
        <div class="section-sitemap__container container container--jc-center">
            <div class="section-sitemap__wrap col col--8 col--lg-10 col--md-12 col--sm-12 col--xs-12">
                <?php while ( have_rows('sitemap') ): the_row();
                    $title = get_sub_field('title');
                    $links = get_sub_field('links'); ?>

                    <div class="section-sitemap__item">
                        <?php if ( $title!='' ){ ?>
                            <h6 class="section-sitemap__title"><?= $title; ?></h6>
                        <?php } ?>

                        <?php if ( !empty($links) ){ ?>
                            <ul class="section-sitemap__links">
                                <?php foreach( $links as $item ){ ?>
                                    <?php if ( !empty($item['link']) ){ ?>
                                        <li>
                                            <a class="builtin" href="<?= $item['link']['url']; ?>" <?= $item['link']['target']!='' ? 'target="'. $item['link']['target'] .'"' : ''; ?>>
                                                <?= $item['link']['title']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>