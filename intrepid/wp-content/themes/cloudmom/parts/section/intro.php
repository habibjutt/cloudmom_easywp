<?php /*** Section / Intro ***/

$image = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text'); ?>

<?php if ( $title!='' || $subtitle!='' || $text!='' || !empty($image) ): ?>
    <!-- Section / Intro -->
    <section class="section-intro">
        <div class="section-intro__container container container--jc-center">
            <div class="section-intro__media-wrap col col--6 col--sm-12 col--xs-12">
                <?php if ( !empty($image) ){ ?>
                    <picture class="section-intro__image">
                        <img loading="eager" src="<?= $image['sizes']['medium_large']; ?>" alt="<?= $image['alt']; ?>">
                    </picture>
                <?php } ?>
            </div>

            <div class="section-intro__content col col--6 col--sm-12 col--xs-12">
                <?php if ( $title!='' ){ ?>
                    <h1 class="section-intro__title"><?= $title; ?></h1>
                <?php } ?>

                <?php if ( $subtitle!='' ){ ?>
                    <p class="section-intro__subtitle"><?= $subtitle; ?></p>
                <?php } ?>

                <?php if ( $text!='' ){ ?>
                    <div class="section-intro__text"><?= $text; ?></div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>