<?php
/*
 * Template Name: Catelog
 * */

get_header();

$gift_now     = get_post_meta(get_the_ID(), 'gift_now', true);
$gift_now_url = get_post_meta(get_the_ID(), 'gift_now_url', true);

// Image & content section
$left_img = get_post_meta(get_the_ID(),'left_img', true);
$section_title = get_post_meta(get_the_ID(),'section_title', true);
$section_desc = get_post_meta(get_the_ID(),'section_desc', true);
$section_button = get_post_meta(get_the_ID(),'section_button', true);
$section_button_URL = get_post_meta(get_the_ID(),'section_button_URL', true);

// cta
$section_bg_1st = get_post_meta(get_the_ID(),'section_bg_1st', true);
$section_call_title = get_post_meta(get_the_ID(),'section_call_title', true);
$section_cta_writer = get_post_meta(get_the_ID(),'section_cta_writer', true);

// cta2
$section_bg_2nd = get_post_meta(get_the_ID(),'section_bg_2nd', true);
$section_call_title_2nd = get_post_meta(get_the_ID(),'section_call_title_2nd', true);
$section_cta_writer2 = get_post_meta(get_the_ID(),'section_cta_writer2', true);

?>
    <main role="main">
        <!-- section -->

        <?php
        while (have_posts()) :
            the_post(); ?>

            <section>

                <div id="flex-component-0" class="ui-hero medium">

                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">

                    <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

                    <div class="ui-hero-slides regular-version" data-speed="6000">
                        <div class="ui-hero-slide  animated center"
                             style="background-image:url('<?php the_post_thumbnail_url(); ?>');z-index:1;">
                            <div class="container">
                                <div class="ui-hero-slide-container regular-version center">
                                    <div class="container">
                                        <div class="ui-hero-slide-content">


                                            <div class="ui-hero-slide-content-text">
                                                <h1 style="font-family: 'Lobster'"
                                                    class="ui-hero-slide-content-headline"
                                                    style="color: #ffffff;"><?php the_title() ?></h1>
                                            </div>
                                            <div class="ui-hero-slide-content-action-buttons">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                </div>
                </div>

                </div>
                <div id="flex-component-1" class="ui-content-panel center" style="background-color: #ffffff">
                    <div class="container ui-content-panel-container">
                        <div class="ui-content-panel-content">

                            <?php

                            the_content();

                            ?>


                        </div>
                    </div>
                </div>
                </div>
                <div id="flex-component-2" class="ui-media-panel media-left" style="background-color: #d8edf4">

                    <div class="ui-media-panel-media-pane">

                        <div class="ui-media-panel-photo"
                             style="background-image:url('<?php echo $left_img ?>');">
                            <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                        </div>


                    </div>

                    <div class="container">

                        <div class="ui-media-panel-content-pane">

                            <h2 class="ui-media-panel-header" style="color:#000">
                                <?php echo $section_title ?> </h2>

                            <div class="ui-hr ui-media-panel-hr">
                                <hr class="fx-main-color-background-color-10"/>
                            </div>

                            <div class="ui-media-panel-paragraph" style="color:#000">
                                <?php echo $section_desc ?>
                            </div>


                            <div class="ui-media-panel-action-buttons">
                                <div class="ui-media-panel-action-button">
                                    <a href="<?php echo $section_button_URL ?>"
                                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                       target="_blank">
                                        <?php echo $section_button ?></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- This is where the front end gets rendered and stuff... -->
                <div class="ui-flexible-grid-tool">
                    <div class="flexible-grid-tool-background" style="background-color: #8ed7ed;">

                        <div class="container">

                            <h1 class="flexible-grid-headline"><a id="pets"></a>Gifts for the Pet Lover in Your Life
                            </h1>

                            <div class="flexible-grid-cta-section clearfix">
                                <div class="flexible-grid-all-ctas centered">
                                <?php

                                $args = array(
                                    'post_type' => 'gifts-for-pet',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC'
                                );

                                $pressLoop = new WP_Query($args);

                                while ($pressLoop->have_posts()) : $pressLoop->the_post();

                                $button_name = get_post_meta(get_the_ID(),'gift_now', true);
                                $button_url = get_post_meta(get_the_ID(),'gift_now_url', true);

                                    ?>


                                        <div class="flexible-grid-item-wrapper image-wrapper"
                                             style="background-color: #0097ce">
                                            <div class="flexible-grid-item-image regular-image"
                                                 style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                                            </div>
                                            <div class="flexible-grid-item-inner regular-inner">
                                                <p class="flexible-grid-item-text title-text"
                                                   style="color: #000;"><?php echo the_title(); ?></p>
                                                <p class="flexible-grid-item-text"
                                                   style="color: #000;"><?php echo the_content(); ?></p>
                                                <a href="<?php echo $button_url; ?>" class="ui-action-button flexible-grid-item-button"

                                                   style="background-color: #ffb000; color: #000"><?php echo $button_name; ?></a>
                                            </div>
                                        </div>



                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                                    </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="ui-banner center"
                     style="background-image:url('<?php echo $section_bg_1st  ?>');">

                    <div class="ui-banner-overlay fx-black-color-background-color-05"></div>

                    <div class="container">
                        <div class="ui-banner-container">

                            <div class="ui-banner-content">

                                <div class="ui-banner-content-text">
                                    <h1 class="ui-banner-content-headline"></h1>

                                    <p class="ui-banner-content-paragraph">
                                    <h1 style="color:white;"><?php echo $section_call_title ?></h1>
                                    <h2 style="color:white;"><?php echo $section_cta_writer ?></h2>                    </p>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                <!-- This is where the front end gets rendered and stuff... -->
                <div class="ui-flexible-grid-tool">
                    <div
                            class="flexible-grid-tool-background" style="background-color: #f9bd9f;">

                        <div class="container">

                            <h1 class="flexible-grid-headline"><a id="people"></a>Gifts for the Humanitarian in Your
                                Life</h1>

                            <div class="flexible-grid-cta-section clearfix">

                                <div class="flexible-grid-all-ctas centered">

            <?php

            $args = array(
                'post_type' => 'humanitarian',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );

            $pressLoop = new WP_Query($args);

            while ($pressLoop->have_posts()) : $pressLoop->the_post();

                $button_name = get_post_meta(get_the_ID(),'gift_now', true);
                $button_url = get_post_meta(get_the_ID(),'gift_now_url', true);

                ?>


                                    <div class="flexible-grid-item-wrapper image-wrapper"
                                         style="background-color: #dd3333">
                                        <div class="flexible-grid-item-image regular-image"
                                             style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                                        </div>
                                        <div class="flexible-grid-item-inner regular-inner">
                                            <p class="flexible-grid-item-text title-text" style="color: #000;"><?php the_title() ?></p>
                                            <p class="flexible-grid-item-text" style="color: #000;"><?php the_content(); ?></p>
                                            <a href="<?php echo $button_url ?>"
                                               class="ui-action-button flexible-grid-item-button"
                                               data-product="2019256336" style="background-color: #ffb000; color: #000"><?php echo $button_name ?></a>
                                        </div>
                                    </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>


                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="ui-banner center"
                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/01/Two-Yound-Boys-Showing-Off-New-Books_©Harvard-Community-Unit-School-District-50_Bernies-Book-Bank_GGO-Book-Program-e1580239636754-1500x671.jpg');">

                    <div class="ui-banner-overlay fx-black-color-background-color-05"></div>

                    <div class="container">
                        <div class="ui-banner-container">

                            <div class="ui-banner-content">

                                <div class="ui-banner-content-text">
                                    <h1 class="ui-banner-content-headline"></h1>

                                    <p class="ui-banner-content-paragraph">
                                    <h1 style="color:white;"><?php echo $section_call_title_2nd ?></h1>
                                    <h2 style="color:white;"><?php echo $section_cta_writer2 ?></h2>                    </p>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                <!-- This is where the front end gets rendered and stuff... -->
                <div class="ui-flexible-grid-tool">
                    <div
                            class="flexible-grid-tool-background" style="background-color: #a0d67a;">

                        <div class="container">

                            <h1 class="flexible-grid-headline"><a id="planet"></a>Gifts for the Environmentalist in Your
                                Life</h1>

                            <div class="flexible-grid-cta-section clearfix">

                                <div class="flexible-grid-all-ctas left">

            <?php

            $args = array(
                'post_type' => 'environmentalist',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );

            $pressLoop = new WP_Query($args);

            while ($pressLoop->have_posts()) : $pressLoop->the_post();

                $button_name = get_post_meta(get_the_ID(),'gift_now', true);
                $button_url = get_post_meta(get_the_ID(),'gift_now_url', true);

                ?>

                                    <div class="flexible-grid-item-wrapper image-wrapper"
                                         style="background-color: #35ad43">
                                        <div class="flexible-grid-item-image regular-image"
                                             style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                                        </div>
                                        <div class="flexible-grid-item-inner regular-inner">
                                            <p class="flexible-grid-item-text title-text" style="color: #000;"><?php the_title() ?></p>
                                            <p class="flexible-grid-item-text" style="color: #000;"><?php the_content(); ?></p>
                                            <a href="<?php echo $button_url ?>"
                                               class="ui-action-button flexible-grid-item-button"
                                               data-product="2019256336" style="background-color: #ffb000; color: #000"><?php echo $button_name ?></a>
                                        </div>
                                    </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>



                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </section>

        <?php


        endwhile; // End of the loop.
        ?>

        ?>


        <!-- /section -->
    </main>

<?php get_footer();
