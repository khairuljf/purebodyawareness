<?php

/*
 * Template Name: Partnership Template
 * */

get_header();

$addBannerClass = get_post_meta(get_the_ID(), 'addBannerClass', true);

$ititle = get_post_meta(get_the_ID(), 'ititle', true);
$idesc = get_post_meta(get_the_ID(), 'idesc', true);
$ibtn = get_post_meta(get_the_ID(), 'ibtn', true);
$iurl = get_post_meta(get_the_ID(), 'iurl', true);

$atitle = get_post_meta(get_the_ID(), 'atitle', true);
$partnership_banner_bg = get_post_meta(get_the_ID(), 'partnership_banner_bg', true);
$partnership_parallax_bg = get_post_meta(get_the_ID(), 'partnership_parallax_bg', true);
$adesc = get_post_meta(get_the_ID(), 'adesc', true);

?>
    <main role="main">
        <!-- section -->
        <section>

            <div id="flex-component-0" class="ui-hero small">

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide fixed animated center"
                         style="background-image:url('<?php echo $partnership_banner_bg; ?>');z-index:1;">

                        <div class="ui-hero-slide-overlay fx-black-color-background-color-04"></div>


                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">

                                        <div class="ui-hero-slide-content-attachment">
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="ui-hero-slide-content-attachment-image">
                                                    <?php the_post_thumbnail(array(580, 169)); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>


                                        <div class="ui-hero-slide-content-action-buttons">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $i = 1; ?>
                <div id="flex-component-<?php $i++; ?>" class="ui-content-panel center"
                     style="background-color: #ffffff">
                    <div class="container ui-content-panel-container">
                        <div class="ui-content-panel-content">

                            <div class="ui-content-panel-texts">
                                <?php if (!empty($atitle)) : ?>
                                    <h2 class="ui-content-panel-header" style="color:#000">
                                        <?php echo $atitle; ?>
                                    </h2>
                                <?php endif; ?>


                                <div class="ui-hr ui-content-panel-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <?php if (!empty($adesc)) : ?>
                                    <div class="ui-content-panel-paragraph" style="color:#000">
                                        <div class="ui-content-panel-paragraph-content" style="color:#000">
                                            <?php echo wpautop($adesc); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>


                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <?php if (!empty($accordion_main_title)): ?>
                <div id="flex-component-<?php $i = 0;
                $i++; ?>" class="ui-editorial">
                    <div class="container">
                        <div class="ui-editorial-content">
                            <h1 style="text-align: center; color: #0097ce;"><?php echo $accordion_main_title; ?></h1>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="partnership_accordion_wrapper">

                <?php
                $partner_accordion_group = get_post_meta(get_the_ID(), 'partner_accordion_group', true);
                $accordion_main_title = get_post_meta(get_the_ID(), 'accordion_main_title', true);
                $accordion_title = get_post_meta(get_the_ID(), 'accordion_title', true);
                $accordion_desc = get_post_meta(get_the_ID(), 'accordion_desc', true);
                $accordion_btn = get_post_meta(get_the_ID(), 'accordion_btn', true);
                $accordion_url = get_post_meta(get_the_ID(), 'accordion_url', true);
                $i = 1;

                ?>
                <?php foreach ((array)$partner_accordion_group as $key => $entry) :

                    $accordion_title = $accordion_desc = $accordion_btn = $accordion_url = '';

                    if (!empty($entry['accordion_title'])) {
                        $accord_title = $entry['accordion_title'];
                    }

                    if (!empty($entry['accordion_desc'])) {
                        $accord_desc = $entry['accordion_desc'];
                    }

                    if (!empty($entry['accordion_btn'])) {
                        $accord_btn = $entry['accordion_btn'];
                    }

                    if (!empty($entry['accordion_url'])) {
                        $accord_btn_url = $entry['accordion_url'];
                    }



                    ?>
                    <div class="ui-drawer center"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/ggo-blue.png');">


                        <div class="container">
                            <div class="ui-drawer-container">

                                <div class="ui-drawer-content">
                                    <?php if ($accord_title): ?>
                                        <div class="ui-drawer-content-text ">
                                            <h1 class="ui-drawer-content-headline accordion-toggle">
                                                <?php echo $i++ .'.'; ?> <?php echo $accord_title ?>
                                                <i class="fa fa-angle-down"></i>
                                            </h1>
                                        </div>
                                    <?php endif; ?>


                                    <!-- Add bootstrap col stuff here -->
                                    <div class="ui-drawer-content-text accordion-panel ">
                                        <div class="accordion-content">

                                            <h4 class="ui-drawer-content-sub-headline "></h4>

                                            <div class=""></div>
                                            <div class=""></div>


                                            <?php if($accord_desc): ?>
                                            <div class=" ">
                                                <div class="ui-drawer-content-paragraph ">
                                                    <?php echo $accord_desc ?>
                                                </div>
                                            </div>
    <?php endif; ?>

                                            <?php if($accord_btn && $accord_btn_url) : ?>
                                            <div>
                                                <div class="ui-drawer-content-action-button ">
                                                    <a href="mailto:<?php echo esc_url($accord_btn_url); ?>"
                                                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                       target="_blank"><?php echo $accord_btn; ?></a>
                                                </div>
                                            </div>
    <?php endif; ?>

                                        </div>
                                    </div>
                                    <!-- Add bootstrap col stuff here -->

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="ui-emergency-action" style="background-color:#32aad8">

                        <div class="ui-emergency-action-content"><span style="color:#ffffff"
                                                                       class="ui-emergency-action-text"><strong></strong></span>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>


            <div id="flex-component-9" class="ui-hero small">

                <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide fixed animated center"
                         style="background-image:url('<?php echo $partnership_parallax_bg ?>');z-index:1;">


                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">


                                        <div class="ui-hero-slide-content-text">
                                            <h1 class="ui-hero-slide-content-headline" style="color: #ffffff;"></h1>

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

            <div id="flex-component-10" class="ui-content-panel center" style="background-color: #f6f6f6">
                <div class="container ui-content-panel-container">
                    <div class="ui-content-panel-content">

                        <div class="ui-content-panel-texts">
                            <?php if (!empty($ititle)): ?>

                                <h2 class="ui-content-panel-header" style="color:#000">
                                    <?php echo $ititle; ?> </h2>
                            <?php endif; ?>

                            <div class="ui-hr ui-content-panel-hr">
                                <hr class="fx-main-color-background-color-10"/>
                            </div>


                            <?php if (!empty($idesc)) : ?>
                                <div class="ui-content-panel-paragraph" style="color:#000">
                                    <div class="ui-content-panel-paragraph-content" style="color:#000">
                                        <?php echo wpautop($idesc); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($ibtn)) : ?>

                            <div class="ui-content-panel-action-buttons">
                                <div class="ui-content-panel-action-button fx-btn">
                                    <a href="mailto:<?php echo esc_url($iurl); ?>"
                                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                       target="_blank"><?php echo $ibtn; ?></a>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- /section -->
    </main>


<?php get_footer(); ?>