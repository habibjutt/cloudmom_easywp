<?php /*** Section / Categories overview ***/

$field_params = '';
$sidebar_title = 'Categories';

if ( is_category() ){
    $field_params = get_queried_object();
    $sidebar_title = 'Topics';
}
$categories = get_field('categories_overview', $field_params); ?>

<?php if ( !empty($categories) ): ?>
    <!-- Section / Categories overview -->
    <section class="section-categories-overview">
        <div id="sidebar-container" class="section-categories-overview__container container">
            <aside id="sidebar" class="section-categories-overview__sidebar col col--2 col--lg-12 col--md-12 col--sm-12 col--xs-12">
                <?php if ( is_category() ){ ?>
                    <?php get_template_part( 'parts/sidebar' ); ?>

                <?php } else { ?>
                    <nav class="sidebar">
                        <p class="sidebar__title"><?= $sidebar_title; ?></p>

                        <div class="sidebar__select">Select a Category or Topic</div>
                        
                        <ul class="sidebar__list">
                            <?php foreach ( $categories as $item ){ ?>
                                <li class="sidebar__item">
                                    <a href="<?= $item['button']['url']; ?>"><?= $item['title']; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                    
                <?php } ?>
            </aside>
            
            <div class="section-categories-overview__wrap col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
                <?php while ( have_rows('categories_overview', $field_params) ): the_row(); ?>
                    <div class="section-categories-overview__item">
                        <?php get_template_part( 'parts/content/category-overview' ); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <aside class="section-categories-overview__ads-wrap col col--2 col--sm-12 col--xs-12">
                <div class="section-categories-overview__ad"
                    <aside class="padd-non">
                        <div style=": 100%;height: 100%;">

                            <a href="#" class="cstm_popup">
                                <img src="http://cloudmom.com/wp-content/uploads/2025/11/GW-0507A-AD-Design.png" alt="">
                            </a>

                            <!-- Popup container -->
                            <div id="popup_container" class="popup_container">
                                <div class="popup_content">
                                    <span class="close_btn">&times;</span>
                                    <iframe id="popup_iframe" src="http://cloudmom.com/wp-content/uploads/2025/11/GW-0507A-AD-Design.png" width="100%" height="100%" frameBorder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                    

                        </div>
                    </aside>
                </div>
                <div class="section-categories-overview__ad">
                    <aside class="padd-non">
                        <div style=": 100%;height: 100%;">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979720520106977"
                                 crossorigin="anonymous"></script>
                            <!-- Homepage Middle -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:160px;height:600px"
                                 data-ad-client="ca-pub-3979720520106977"
                                 data-ad-slot="7775946457"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </aside>
                </div>
                <div class="section-categories-overview__ad">
                   <aside class="padd-non">
                        <div style=": 100%;height: 100%;">
                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979720520106977"
                                 crossorigin="anonymous"></script>
                            <!-- Homepage Bottom -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:160px;height:600px"
                                 data-ad-client="ca-pub-3979720520106977"
                                 data-ad-slot="5594551961"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </aside>
                </div>
            </aside>
        </div>
    </section>
<?php endif; ?>