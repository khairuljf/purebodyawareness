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

                <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide fixed animated center"
                         style="background-image:url('<?php echo $partnership_banner_bg; ?>');z-index:1;">

                        <div class="ui-hero-slide-overlay fx-black-color-background-color-04"></div>


                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">

                                        <div class="ui-hero-slide-content-attachment">
                                            <?php if (has_post_thumbnail): ?>
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

                <div id="flex-component-1" class="ui-content-panel center" style="background-color: #ffffff">
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
            <div id="flex-component-2" class="ui-editorial">
                <div class="container">
                    <div class="ui-editorial-content">
                        <h1 style="text-align: center; color: #0097ce;">Ways You Can Partner With GreaterGood.org:</h1>
                    </div>
                </div>
            </div>
            <div class="ui-drawer center"
                 style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/ggo-blue.png');">


                <div class="container">
                    <div class="ui-drawer-container">

                        <div class="ui-drawer-content">
                            <!-- 01 -->
                            <div class="ui-drawer-content-text ">
                                <h1 class="ui-drawer-content-headline accordion-toggle">
                                    1. Engage Your Customers
                                    <i class="fa fa-angle-down"></i>
                                </h1>
                            </div>
                            <!-- 01 -->


                            <!-- Add bootstrap col stuff here -->
                            <div class="ui-drawer-content-text accordion-panel ">
                                <div class="accordion-content">

                                    <h4 class="ui-drawer-content-sub-headline "></h4>

                                    <div class="">
                                    </div>
                                    <div class=""></div>


                                    <div class=" ">
                                        <div class="ui-drawer-content-paragraph ">
                                            <p style="text-align: left;">Partnering with GreaterGood.org is simple. Just
                                                pick the cause area you want to support, contact us to learn the ways
                                                you can help, and fundraise at your level and on your schedule.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="ui-drawer-content-action-button ">
                                            <a href="mailto:partnerships@greatergood.org"
                                               class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                               target="_blank">
                                                Contact Us</a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Add bootstrap col stuff here -->

                        </div>
                    </div>

                </div>

            </div>
            <div class="ui-emergency-action" style="background-color:#32aad8">

                <div class="ui-emergency-action-content">
		<span style="color:#ffffff" class="ui-emergency-action-text">
			<strong>
																</strong>
								</span>
                </div>
            </div> <!-- end ui-emergency-action-->
            <div class="ui-drawer center"
                 style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/ggo-blue.png');">

                <div style="background-color : #ffffff; opacity: 0.3" class="ui-drawer-overlay"></div>

                <div class="container">
                    <div class="ui-drawer-container">

                        <div class="ui-drawer-content">
                            <!-- 01 -->
                            <div class="ui-drawer-content-text ">
                                <h1 class="ui-drawer-content-headline accordion-toggle">
                                    2. Sponsor a Program
                                    <i class="fa fa-angle-down"></i>
                                </h1>
                            </div>
                            <!-- 01 -->


                            <!-- Add bootstrap col stuff here -->
                            <div class="ui-drawer-content-text accordion-panel ">
                                <div class="accordion-content">

                                    <h4 class="ui-drawer-content-sub-headline "></h4>

                                    <div class="">
                                    </div>
                                    <div class=""></div>


                                    <div class=" ">
                                        <div class="ui-drawer-content-paragraph ">
                                            <p style="text-align: left;">Our programs are able to help so many thanks to
                                                our partners and donors. Your company can be the next we thank for fully
                                                funding a project! You can completely fund a project at the level you
                                                want, starting from as little as $300.</p>
                                            <p style="text-align: left;">Choose from:</p>
                                            <p style="text-align: left;">1. Fund a Rescue Rebuild renovation</p>
                                            <p style="text-align: left;">2. Fund the next Madrean Discovery
                                                Expedition</p>
                                            <p style="text-align: left;">3. Fund a year of school for a girl</p>
                                            <p style="text-align: left;">To learn more, contact our partnerships team
                                                and make sure to specify that you&#8217;d like to sponsor a project.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="ui-drawer-content-action-button ">
                                            <a href="mailto:partnerships@greatergood.org"
                                               class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                               target="_blank">
                                                Contact Us</a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Add bootstrap col stuff here -->

                        </div>
                    </div>

                </div>

            </div>
            <div class="ui-emergency-action" style="background-color:#64c0ea">

                <div class="ui-emergency-action-content">
		<span style="color:#ffffff" class="ui-emergency-action-text">
			<strong>
																</strong>
								</span>
                </div>
            </div> <!-- end ui-emergency-action-->
            <div class="ui-drawer center"
                 style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/ggo-blue.png');">

                <div style="background-color : #ffffff; opacity: 0.5" class="ui-drawer-overlay"></div>

                <div class="container">
                    <div class="ui-drawer-container">

                        <div class="ui-drawer-content">
                            <!-- 01 -->
                            <div class="ui-drawer-content-text ">
                                <h1 class="ui-drawer-content-headline accordion-toggle">
                                    3. Engage Your Employees
                                    <i class="fa fa-angle-down"></i>
                                </h1>
                            </div>
                            <!-- 01 -->


                            <!-- Add bootstrap col stuff here -->
                            <div class="ui-drawer-content-text accordion-panel ">
                                <div class="accordion-content">

                                    <h4 class="ui-drawer-content-sub-headline "></h4>

                                    <div class="">
                                    </div>
                                    <div class=""></div>


                                    <div class=" ">
                                        <div class="ui-drawer-content-paragraph ">
                                            <p style="text-align: left;">Create an atmosphere of caring in your company
                                                by encouraging employees to donate and fundraise. Start a team
                                                fundraiser and give together.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="ui-drawer-content-action-button ">
                                            <a href="https://give.greatergood.org/campaign/greatergood-orgs-peer-to-peer-fundraiser/c201705"
                                               class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                               target="_blank">
                                                Start Fundraising</a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Add bootstrap col stuff here -->

                        </div>
                    </div>

                </div>

            </div>
            <div class="ui-emergency-action" style="background-color:#ffffff">

                <div class="ui-emergency-action-content">
		<span style="color:#ffffff" class="ui-emergency-action-text">
			<strong>
																</strong>
								</span>
                </div>
            </div> <!-- end ui-emergency-action-->
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
            </div>
            </div>

            </div>
            <div id="flex-component-10" class="ui-content-panel center" style="background-color: #f6f6f6">
                <div class="container ui-content-panel-container">
                    <div class="ui-content-panel-content">

                        <div class="ui-content-panel-texts">
                            <?php if (!empty($ititle)): ?>

                                <h2 class="ui-content-panel-header anisur" style="color:#000">
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