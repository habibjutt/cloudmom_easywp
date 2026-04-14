<?php /*** Section / Contact form ***/

$title = get_sub_field('title');
$form = get_sub_field('form'); ?>

<?php if ( $title!='' || $form!='' ): ?>
    <!-- Section / Contact form -->
    <section class="section-contact-form">
        <div class="section-contact-form__container container container--jc-center">
            <div class="col">
                <?php if ( $title!='' ){ ?>
                    <h1 class="section-contact-form__title"><?= $title; ?></h1>
                <?php } ?>
                
                <div class="section-contact-form__form">
                    <?= $form; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>