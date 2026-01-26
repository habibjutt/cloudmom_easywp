<?php get_header(); ?>

<section class="page-404 container container--jc-center">
    <div class="col col--8 col--md-12 col--sm-12 col--xs-12 text-center">
        <h1 class="page-404__title">Page not found</h1>
        <p class="page-404__subtitle h4">It looks like nothing was found at this location.</p>
        <a class="page-404__button button" href="<?= get_home_url(); ?>" title="To the home page">To the home page</a>
    </div>
</section>

<?php get_footer(); ?>