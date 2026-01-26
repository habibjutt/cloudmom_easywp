<?php /*** Content / Press overview ***/

$image = get_sub_field('image'); ?>

<div class="press-overview">
    <?php if ( !empty($image) ){ ?>
        <picture class="press-overview__image">
            <img src="<?= $image['sizes']['medium_large']; ?>" alt="<?= $image['alt']; ?>">
        </picture>
    <?php } ?>

    <?php if ( have_rows('blocks') ): ?>
        <dl class="press-overview__block">
            <?php while ( have_rows('blocks') ): the_row();
                $block_title = get_sub_field('title'); ?>

                <dt class="press-overview__block-header">
                    <h3 class="press-overview__block-title"><?= $block_title; ?></h3>
                </dt>
                <dd class="press-overview__block-content">
                    <?php if ( have_rows('posts') ): ?>
                        <ul class="press-overview__posts">
                            <?php while ( have_rows('posts') ): the_row();
                                $post_image = get_sub_field('image');
                                $post_link = get_sub_field('link');
                                $post_link_2 = get_sub_field('link_2'); ?>

                                <li class="press-overview__post">
                                    <?php if ( !empty($post_image) ){ ?>
                                        <picture class="press-overview__post-image">
                                            <img src="<?= $post_image['sizes']['thumbnail']; ?>" alt="<?= $post_image['alt']; ?>">
                                        </picture>
                                    <?php } ?>

                                    <p class="press-overview__post-links">
                                        <?php if ( !empty($post_link) ){ ?>
                                            <a href="<?= $post_link['url']; ?>" <?= $post_link['target']!='' ? 'target="'. $post_link['target'] .'"' : ''; ?>>
                                                <?= $post_link['title']; ?>
                                            </a>
                                        <?php } ?>

                                        <?php if ( !empty($post_link_2) ){ ?>
                                            <a href="<?= $post_link_2['url']; ?>" <?= $post_link_2['target']!='' ? 'target="'. $post_link_2['target'] .'"' : ''; ?>>
                                                <?= $post_link_2['title']; ?>
                                            </a>
                                        <?php } ?>
                                    </p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </dd>
            <?php endwhile; ?>
        </dl>
    <?php endif; ?>
</div>