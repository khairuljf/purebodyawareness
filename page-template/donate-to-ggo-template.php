<?php

/*
 * template name:Donate to go
 * */
get_header();

$only_banner_img = get_post_meta(get_the_ID(), 'only_banner_img', true);
$donate_footer_title = get_post_meta(get_the_ID(), 'donate_footer_title', true);
$donate_footer_title_desc = get_post_meta(get_the_ID(), 'donate_footer_title_desc', true);
$donate_footer_btn1_name = get_post_meta(get_the_ID(), 'donate_footer_btn1_name', true);
$donate_footer_btn1_url = get_post_meta(get_the_ID(), 'donate_footer_btn1_url', true);
$donate_footer_btn2_name = get_post_meta(get_the_ID(), 'donate_footer_btn1_name', true);
$donate_footer_btn2_url = get_post_meta(get_the_ID(), 'donate_footer_btn1_url', true);


?>
<main role="main">
    <!-- section -->
    <section>

        <div id="flex-component-0" class="ui-hero small">

            <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

            <div class="ui-hero-slides regular-version" data-speed="6000">
                <div class="ui-hero-slide  animated center" style="background-image:url('');z-index:1;">

                    <div class="ui-hero-slide-overlay fx-highlight-1-color-background-color-09"></div>


                    <div class="container">
                        <div class="ui-hero-slide-container regular-version center">
                            <div class="container">
                                <div class="ui-hero-slide-content">

                                    <div class="ui-hero-slide-content-attachment">

                                        <div class="ui-hero-slide-content-attachment-image">
                                            <img src="<?php echo $only_banner_img ?>"/>
                                        </div>

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

        <?php get_template_part('template-parts/two-column') ?>


        <div class="ui-banner center" style="background-image:url('');">

            <div class="ui-banner-overlay fx-main-color-background-color-09"></div>

            <div class="container">
                <div class="ui-banner-container">

                    <div class="ui-banner-content">

                        <div class="ui-banner-content-text">
                            <h1 class="ui-banner-content-headline"><?php echo $donate_footer_title ?></h1>

                            <p class="ui-banner-content-paragraph"><?php echo $donate_footer_title_desc ?> </p>
                        </div>

                        <div class="ui-banner-content-action-buttons">
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $donate_footer_btn1_url ?>"
                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank"><?php echo $donate_footer_btn1_name ?></a>


                            </div>
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $donate_footer_btn2_url ?>"
                                   class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank"><?php echo $donate_footer_btn2_name ?></a>


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