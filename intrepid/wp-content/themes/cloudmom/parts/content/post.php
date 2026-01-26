<?php /*** Content / Post ***/ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post '. $modifier); ?>>
    <figure class="post__media-wrap">
        <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>" title="Read more: <?php the_title(); ?>">
                <picture class="post__image">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?= get_the_title(); ?>">
                </picture>
            </a>
        <?php else: ?>
           <!--  <a href="<?php the_permalink(); ?>" title="Read more: <?php the_title(); ?>">
                <picture class="post__image">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/no-image.jpg">
                </picture>
            </a> -->
        <?php endif; ?>
    </figure>

    <div class="post__content">
        <h4 class="post__title">
            <a class="builtin" href="<?php the_permalink(); ?>" title="Read more: <?php the_title(); ?>"><?php the_title(); ?></a>
        </h4>

        <div class="post__excerpt">
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
</article>
