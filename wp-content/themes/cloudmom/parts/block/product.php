<?php /* Block / Product */

$image = get_field('image');
$content = get_field('content');
$button = get_field('button'); ?>

<div class="block-product">
    <?php if ( !empty($image) ){ ?>
        <picture class="block-product__image">
            <img src="<?= $image['sizes']['medium_large']; ?>" alt="<?= $image['alt']; ?>">
        </picture>
    <?php } ?>

    <div class="block-product__content">
        <?= $content; ?>

        <?php if ( !empty($button) ){ ?>
            <div class="block-product__button">
                <a class="button button--magenta button--small" href="<?= $button['url']; ?>" target="_blank"><?= $button['title']; ?></a>
            </div>
        <?php } ?>
    </div>
</div>