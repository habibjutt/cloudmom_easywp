<?php /*** Content / Category overview ***/

$title = get_sub_field('title');
$button = get_sub_field('button');
$posts = get_sub_field('posts'); ?>

<div class="category-overview">
    <?php if ( $title!='' ){ ?>
        <h2 class="category-overview__title">
            <?php if ( !empty($button) ){ ?>
                <a class="builtin" href="<?= $button['url']; ?>"><?= $title; ?></a>
            <?php } else { ?>
                <?= $title; ?>
            <?php } ?>
        </h2>
    <?php } ?>

    <?php if ( !empty($posts) ){ ?>
        <div class="category-overview__wrap">
            <?php $i=0; foreach( $posts as $post ){ $i++;
                if ( $i==1 ){
                    set_query_var('modifier', 'post--horizontal');
                } else if ( $i!=1 && is_category() ){
                    set_query_var('modifier', 'post--small');
                } else {
                    set_query_var('modifier', '');
                } ?>

                <div class="category-overview__item">
                    <?php get_template_part( 'parts/content/post' ); ?>
                </div>
            <?php } wp_reset_query(); ?>
        </div>
    <?php } ?>

    <?php if ( !empty($button) ){ ?>
        <div class="category-overview__button">
            <a class="button button--arrow" href="<?= $button['url']; ?>"><?= $button['title']; ?></a>
        </div>
    <?php } ?>
</div>