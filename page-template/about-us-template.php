<?php
/*
 * template name:About Us
 * */

get_header();

$FirstSectionImg = get_post_meta(get_the_ID(), 'about_top_img',true);
$about_1st_title = get_post_meta(get_the_ID(), 'about_1st_title',true);
$about_top_content = get_post_meta(get_the_ID(), 'about_top_content',true);
?>

    <main role="main">
        <!-- section -->
        <section>

            <?php get_template_part('template-parts/two-column'); ?>

            <div id="flex-component-0" class="ui-media-panel media-left" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo" style="background-image:url('<?php echo $FirstSectionImg  ?>');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            <?php echo $about_1st_title ?> </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                                <?php echo $about_top_content ?>
                        </div>


                        <div class="ui-media-panel-action-buttons">
                            <div class="ui-media-panel-action-button">
                                <a href="https://greatergood.org/catalog/"
                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    Give to Your Cause</a>


                            </div>
                            <div class="ui-media-panel-action-button">
                                <a href="https://greatergood.org/fundraise-for-ggo/"
                                   class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                   target="_blank">
                                    Fundraise with Us</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <?php get_template_part('template-parts/call-to-action'); ?>
            <div id="flex-component-2" class="ui-media-panel media-right" style="background-color: #F6F6F6">
                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/HaitiLKM.jpg');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            Our Partnership with GreaterGood.com </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                            <p><strong>GreaterGood strives to connect a passionate audience with simple online tools to
                                    make the world a better place. They turn your desire to make a difference into
                                    tangible, documented support for charities that help people, save pets, and improve
                                    the planet. By connecting millions of caring people like you, GreaterGood has
                                    created an online community with real power to change the world.</strong></p>
                            <p>GreaterGood.com is proud to have given more than $50 million in cash grants to non-profit
                                charities around the world through GreaterGood.org since 1999.</p>
                            <p>Millions have received help and assistance because of your efforts: hungry families fed,
                                pets rescued, rainforests saved, breast cancer caught and treated, children helped to
                                achieve a brighter future, and so much more.</p>
                            <p>With so many simple, easy ways to be involved – from a free click to a direct donation
                                that funds a specific program – your smallest actions online matter.</p>
                        </div>


                        <div class="ui-media-panel-action-buttons">
                            <div class="ui-media-panel-action-button">
                                <a href="https://store.greatergood.com/collections/253-gifts-that-give-more"
                                   class="ui-action-button outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    Browse Gifts That Give More™</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="flex-component-3" class="ui-media-panel media-left" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/Rachael-Hurst-landscape-LGutierrez-SBuenos-Aires-Aug16-1a-copy.jpg');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            Our Financials </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                            <p><a name="Financials"></a>We want you to know how your money is spent, and we only support
                                projects that demonstrate impact. We are audited yearly by an independent firm, and we
                                make our annual 990 statements public.</p>
                            <p>Download our most recent Audited Financials and IRS 990 forms here:</p>
                            <ul>
                                <li><a href="/wp-content/uploads/2019/05/2017-GGO-Form-990-Public-Disclosure-Copy.pdf">FYE2018
                                        IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2018/10/2017-0630-GreaterGood.org-Audit.pdf">FYE2017
                                        Audited Financials</a></li>
                                <li><a href="/wp-content/uploads/2018/10/2016-Form-990-Public-Disclosure-Copy.pdf">FYE2017
                                        IRS Form 990</a></li>
                                <li><a href="https://greatergood.org/wp-content/uploads/2017/10/FYE2016-GGO-990.pdf">FYE2016
                                        IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY15.pdf">FYE2015 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY14.pdf">FYE2014 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY13.pdf">FYE2013 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY12.pdf">FYE2012 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY11.pdf">FYE2011 IRS Form 990</a></li>
                            </ul>
                        </div>

                        <div class="ui-media-panel-statistic-grid">
                            <div class="row">
                                <div class="ui-media-panel-statistic-grid-item col-md-6">
                                    <div class="ui-statistic-grid-item">

                                        <div class="ui-statistic-grid-item-label">
                                            Spent on Programs in FY 2018
                                        </div>

                                        <div class="ui-statistic-grid-item-value fx-main-color-text">
                                            97.4%
                                        </div>

                                    </div>
                                </div>
                                <div class="ui-media-panel-statistic-grid-item col-md-6">
                                    <div class="ui-statistic-grid-item">

                                        <div class="ui-statistic-grid-item-label">
                                            Given in Grants in FY 2018
                                        </div>

                                        <div class="ui-statistic-grid-item-value fx-main-color-text">
                                            $43.6MM
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div id="team-panel-0d0cd88d5fd8b9cd47e25892e1f35d3c" class="ui-team-panel"
                 data-hash="0d0cd88d5fd8b9cd47e25892e1f35d3c">
                <div class="container">
                    <h2 class="ui-team-panel-header">Meet Our Staff</h2>
                    <div class="ui-hr ui-team-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="ui-team-panel-grid">
                        <div class="row">



                            <?php

                            $args = array(
                                'post_type' => 'meet-our-staff',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                            );

                            $staffs = new WP_Query($args);

                            while ($staffs->have_posts()) : $staffs->the_post();

                            $position = get_post_meta(get_the_ID(), 'sb_postion', true);
                            $s_email = get_post_meta(get_the_ID(), 'sb_email', true);

                            ?>

                                <div id="ui-team-panel-grid-item-cd4ca80fbe5cf071eee709e41ee18777"
                                     class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                    <div class="ui-team-panel-image"
                                         style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/lizbaker.jpg');"></div>

                                    <div class="ui-team-panel-content">
                                        <h3 class="ui-team-panel-name"><?php the_title() ?></h3>
                                        <p class="ui-team-panel-title"><?php echo $position ?></p>


                                    </div>

                                    <script type="text/template" id="team-template-cd4ca80fbe5cf071eee709e41ee18777"
                                            class="team-template">
                                        <div id="expander-content-cd4ca80fbe5cf071eee709e41ee18777"
                                             class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                            <div class="expander-content-arrow"></div>
                                            <div class="expander-content-container row">
                                                <div class="content-left col-md-6">
                                                    <h3 class="expander-content-name"><?php the_title() ?></h3>
                                                    <p class="expander-content-title"><?php echo $position ?></p>
                                                    <p class="expander-content-left-summary"></p>

                                                    <div class="ui-team-panel-action-buttons">
                                                        <div class="ui-team-panel-action-button fx-btn">
                                                            <a href="mailto:<?php echo $s_email ?>"
                                                               class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                               target="_blank">
                                                                Email <?php the_title() ?></a>


                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="content-right col-md-6">

                                                 <div class="expander-content-summary-noleft">
                                                        <?php the_content(); ?>
                                                 </div>

                                                </div>
                                            </div>
                                        </div>
                                    </script>
                                </div>

                          <?php  endwhile;
                            wp_reset_postdata();

                            ?>


                        </div>
                    </div>
                </div>
            </div>

            <div id="team-panel-5aec3f6067e1e429155287b261a5212d" class="ui-team-panel"
                 data-hash="5aec3f6067e1e429155287b261a5212d">
                <div class="container">
                    <h2 class="ui-team-panel-header">Meet Our Board</h2>
                    <div class="ui-hr ui-team-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="ui-team-panel-grid">
                        <div class="row">

                            <?php

                            $args = array(
                                'post_type' => 'meet-our-board',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                            );

                            $boards = new WP_Query($args);

                            while ($boards->have_posts()) : $boards->the_post();

                                $position = get_post_meta(get_the_ID(), 'sb_postion', true);
                                $s_email = get_post_meta(get_the_ID(), 'sb_email', true);

                            ?>
                                <div id="ui-team-panel-grid-item-ab4ed6771a81df23cf47f8dfa01ba124"
                                     class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                    <div class="ui-team-panel-image"
                                         style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/davidyaskulka.jpg');"></div>

                                    <div class="ui-team-panel-content">
                                        <h3 class="ui-team-panel-name"><?php the_title(); ?></h3>
                                        <p class="ui-team-panel-title"><?php echo $position ?></p>


                                    </div>

                                    <script type="text/template" id="team-template-ab4ed6771a81df23cf47f8dfa01ba124"
                                            class="team-template">
                                        <div id="expander-content-ab4ed6771a81df23cf47f8dfa01ba124"
                                             class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                            <div class="expander-content-arrow"></div>
                                            <div class="expander-content-container row">
                                                <div class="content-left col-md-6">
                                                    <h3 class="expander-content-name"><?php the_title(); ?></h3>
                                                    <p class="expander-content-title"><?php echo $position ?></p>
                                                    <p class="expander-content-left-summary"></p>
                                                </div>
                                                <div class="content-right col-md-6">
                                                    <div class="expander-content-summary-noleft">
                                                        <?php the_content(); ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </script>
                                </div>
                         <?php   endwhile;
                            wp_reset_postdata();

                            ?>



                        </div>
                    </div>
                </div>
            </div>


            <?php get_template_part('template-parts/call-to-action'); ?>
            <div class="ui-banner center"
                 style="background-image:url('https://greatergood.org/wp-content/uploads/2016/08/floodimage-1500x647.jpg');">

                <div class="ui-banner-overlay fx-main-color-background-color-05"></div>

                <div class="container">
                    <div class="ui-banner-container">

                        <div class="ui-banner-content">

                            <div class="ui-banner-content-text">
                                <h1 class="ui-banner-content-headline">See updates from our staff and partners</h1>

                                <p class="ui-banner-content-paragraph">
                                </p>
                            </div>

                            <div class="ui-banner-content-action-buttons">
                                <div class="ui-banner-content-action-button">
                                    <a href="https://greatergood.org/blog/"
                                       class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                       target="_blank">
                                        Read Our Blog</a>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- /section -->
    </main>
<?php

get_footer();
?>
