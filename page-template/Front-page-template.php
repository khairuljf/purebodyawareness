<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

/*
 * template name:HomePage
 * */

get_header();
?>


<?php
$bannerTitle = get_post_meta(get_the_ID(), 'banner_title', true);
$pageTitle   = get_the_title();
$bannerTitle ? $bannerTitle : $pageTitle;
$bannerSubTitle   = get_post_meta(get_the_ID(), 'banner_subtitle', true);
$bannerButtonName = get_post_meta(get_the_ID(), 'banner_button_name', true);

if (empty($bannerButtonName)) {
    $bannerButtonName = 'LEARN MORE';
}
$bannerButtonUrl = get_post_meta(get_the_ID(), 'banner_button_url', true);

$banner_image = get_the_post_thumbnail_url();

?>

<?php

global $pureopt;

?>
    <main role="main">
        <!-- section -->
<?php
while (have_posts()) :
    the_post(); ?>
        <section>

            <div id="flex-component-0" class="ui-hero medium">
                <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->
                <div class="ui-hero-slides regular-version" data-speed="10000">
                    <div class="ui-hero-slide  animated center" style="<?php if ($banner_image) { ?>
                            background-image:url('<?php echo $banner_image ?>');
                    <?php } else { ?>
                            background: #ddd;
                    <?php } ?>z-index:1;">

                        <div class="ui-hero-slide-overlay fx-black-color-background-color-03"></div>
                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">


                                        <div class="ui-hero-slide-content-text">

                                            <h1 class="ui-hero-slide-content-headline"
                                                style="color: #ffffff;"><?php echo $bannerTitle ?></h1>

                                            <?php if ($bannerSubTitle): ?>
                                                <p class="ui-hero-slide-content-paragraph" style="color: #ffffff;">
                                                    <strong><?php echo $bannerSubTitle ?></strong></p>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($bannerButtonUrl): ?>
                                            <div class="ui-hero-slide-content-action-buttons">
                                                <div class="ui-hero-slide-content-action-button">
                                                    <a href="http://bit.ly/37YHSgM"
                                                       class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                       target="_blank"><?php echo $bannerButtonName ?></a>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- This is where the front end gets rendered and stuff... -->
            <div class="ui-flexible-grid-tool">
                <div class="flexible-grid-tool-background"
                     style="background-image: url(<?php echo $pureopt['GreaterGoodbackgroud']['url'] ?>); background-attachment: unset;">

                    <div class="container">

                        <?php if ($pureopt['GreaterGood']): ?>
                            <h1 class="flexible-grid-headline"><?php echo $pureopt['GreaterGood'] ?></h1>
                        <?php endif; ?>

                        <div class="flexible-grid-cta-section clearfix">

                            <div class="flexible-grid-all-ctas centered">


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #0097ce">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['onesection-mediaa']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text" style="color: #ffffff;">
                                            <?php echo $pureopt['onesection-title'] ?>
                                        </p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #ffffff;"> <?php echo $pureopt['onesection-desc'] ?></p>
                                        <a href="<?php echo esc_url(get_page_link($pureopt['onesection-page'])); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #ffb000; color: #000">Learn More</a>

                                    </div>
                                </div>


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #000">
                                    <div class="flexible-grid-item-image rollover-image"
                                         style="background-image: url(<?php echo $pureopt['twosection-mediaa']['url'] ?>)">

                                        <div class="flexible-grid-item-rollover-content">
                                            <p class="flexible-grid-item-text title-text rollover-text"
                                               style="color: #ffffff;"><?php echo $pureopt['twosection-title'] ?></p>
                                            <p class="flexible-grid-item-text rollover-text" style="color: #ffffff;">
                                                <?php echo $pureopt['twosection-desc'] ?></p>
                                            <a href="<?php echo esc_url(get_page_link($pureopt['twosection-page'])); ?>"
                                               class="ui-action-button flexible-grid-item-button rollover-button"
                                               data-product="" style="background-color: #ffb000; color: #000">Learn
                                                More</a>
                                        </div>

                                        <div class="flexible-grid-item-overlay opacity-40"
                                             style="background-color: #000"></div>

                                    </div>
                                    <div class="flexible-grid-item-inner rollover-mobile">
                                        <p class="flexible-grid-item-text title-text"
                                           style="color: #ffffff;"> <?php echo $pureopt['twosection-desc'] ?></p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #ffffff;"> <?php echo $pureopt['twosection-desc'] ?></p>
                                        <a href="<?php echo esc_url(get_page_link($pureopt['twosection-page'])); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #ffb000; color: #000">Learn More</a>
                                    </div>
                                </div>


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #0097ce">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['thirdsection-mediaa']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text"
                                           style="color: #ffffff;"><?php echo $pureopt['thirdsection-testt'] ?></p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #ffffff;"><?php echo $pureopt['thirdsection-desc'] ?></p>
                                        <a href="<?php echo esc_url(get_page_link($pureopt['third-page'])); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #ffb000; color: #000">Learn More</a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div id="flex-component-2" class="ui-editorial">
                <div class="container">
                    <div class="ui-editorial-content">
                    </div>
                </div>
            </div>
            <!-- This is where the front end gets rendered and stuff... -->
            <div class="ui-flexible-grid-tool">
                <div
                        class="flexible-grid-tool-background" style="background-color: #64bcdf;">

                    <div class="container">

                        <h1 class="flexible-grid-headline"><?php echo $pureopt['chapionSection'] ?></h1>

                        <div class="flexible-grid-cta-section clearfix">

                            <div class="flexible-grid-all-ctas centered">


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #ff3d00">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['conesection-mediaa']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text"
                                           style="color: #000;"><?php echo $pureopt['conesection-title'] ?></p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #000;"><?php echo $pureopt['conesection-desc'] ?></p>
                                        <a href="<?php echo esc_url(get_page_link($pureopt['conesection-page'])); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #ffffff; color: #000">Donate Now</a>
                                    </div>
                                </div>


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #ffb000">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['ctwosection-mediaa']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text"
                                           style="color: #000000;"><?php echo $pureopt['ctwosection-title'] ?></p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #000000;"><?php echo $pureopt['ctwosection-desc'] ?></p>
                                        <a href="<?php echo $pureopt['ctwosection-page'] ?>"
                                           class="ui-action-button flexible-grid-item-button"
                                           data-product="26" style="background-color: #ffffff; color: #000">Fundraise
                                            Now</a>
                                    </div>
                                </div>


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #0097ce">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['cthirdsection-mediaa']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text"
                                           style="color: #000000;"><?php echo $pureopt['cthirdsection-testt'] ?></p>
                                        <p class="flexible-grid-item-text"
                                           style="color: #000000;"><?php echo $pureopt['cthirdsection-desc'] ?></p>
                                        <a href="<?php echo esc_url(get_page_link($pureopt['cthirdsection-page'])); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #ffffff; color: #000">Learn More</a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="ui-banner center"
                 style="background-image:url('<?php echo $pureopt['impactbg']['url'] ?>');">

                <div class="ui-banner-overlay fx-black-color-background-color-05"></div>

                <div class="container">
                    <div class="ui-banner-container">

                        <div class="ui-banner-content">

                            <div class="ui-banner-content-text">
                                <h1 class="ui-banner-content-headline">
                                    <?php echo $pureopt['impactTitle'] ?>
                                </h1>

                                <p class="ui-banner-content-paragraph">
                                    <?php echo $pureopt['impactDesct'] ?>
                                </p>
                            </div>

                            <div class="ui-banner-content-action-buttons">
                                <div class="ui-banner-content-action-button">
                                    <a href=" <?php echo $pureopt['impactpdf'] ?>"
                                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                       target="_blank">View Our Impact</a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div id="flex-component-5" class="ui-logo-panel ui-panel-component">

                <div class="container">
                    <div class="ui-logo-panel-container">

                        <h2 class="ui-logo-panel-header">
                            <?php echo $pureopt['FeaturedTitle']; ?>
                        </h2>

                        <div class="ui-hr ui-logo-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-logo-panel-logo-grid">

                            <?php

                            $galleryItems = explode(',', $pureopt['Featuredgallery']);


                            foreach ($galleryItems as $item) {


                                ?>
                                <div class="ui-logo-panel-logo-grid-item">
                                    <a href="<?php echo site_url() ?>/press/" target="_blank">
                                        <img src="<?php echo wp_get_attachment_image_src($item, 'full')[0]; ?>"/>
                                    </a>
                                </div>
                            <?php }

                            ?>

                        </div>

                    </div>
                </div>
            </div>
            <div class="ui-emergency-action" style="background-color:#ffffff">

                <div class="ui-emergency-action-content">
                    <span style="color:#ffffff" class="ui-emergency-action-text">
                        <strong></strong>
					</span>
                    <a href="<?php echo esc_url(get_page_link($pureopt['Featuredtarget'])); ?>"
                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                       target="_blank">View All our Press Coverage</a>


                </div>
            </div> <!-- end ui-emergency-action-->
            <div class="ui-banner center"
                 style="background-image:url('<?php echo $pureopt['FeaturedfooterImge']['url'] ?>');">


                <div class="container">
                    <div class="ui-banner-container">

                        <div class="ui-banner-content">

                            <div class="ui-banner-content-text">
                                <h1 class="ui-banner-content-headline"></h1>

                                <p class="ui-banner-content-paragraph">
                                </p>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div id="flex-component-8" class="ui-logo-panel ui-panel-component">

                <div class="container">
                    <div class="ui-logo-panel-container">

                        <h2 class="ui-logo-panel-header">
                            <?php echo $pureopt['ProudlypartnerTitle'] ?>
                        </h2>

                        <div class="ui-hr ui-logo-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-logo-panel-logo-grid">

                            <?php
                            $galleryItems = explode(',', $pureopt['Proudlgallery']);
                            foreach ($galleryItems as $item) {
                                ?>
                                <div class="ui-logo-panel-logo-grid-item">
                                    <a href="#"
                                       target="_blank">
                                        <img src="<?php echo wp_get_attachment_image_src($item, 'full')[0]; ?>"/>
                                    </a>
                                </div>

                            <?php }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- This is where the front end gets rendered and stuff... -->
            <div class="ui-flexible-grid-tool">
                <div
                        class="flexible-grid-tool-background"
                        style="background-image: url(<?php echo $pureopt['abbgimg']['url'] ?>); background-attachment: unset;">

                    <div class="container">

                        <h1 class="flexible-grid-headline"></h1>

                        <div class="flexible-grid-cta-section clearfix">

                            <div class="flexible-grid-all-ctas right">


                                <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #000000">
                                    <div class="flexible-grid-item-image regular-image"
                                         style="background-image: url(<?php echo $pureopt['abimg']['url'] ?>)">
                                    </div>
                                    <div class="flexible-grid-item-inner regular-inner">
                                        <p class="flexible-grid-item-text title-text" style="color: #ffffff;">
                                            <?php echo $pureopt['abTitle'] ?>
                                        </p>
                                        <p class="flexible-grid-item-text" style="color: #ffffff;">
                                            <?php
                                            echo $pureopt['abdesc'];
                                            ?>
                                        </p>
                                        <a href="<?php echo esc_url( get_page_link( $pureopt['abLearn'] ) ); ?>"
                                           class="ui-action-button flexible-grid-item-button" data-product=""
                                           style="background-color: #0097ce; color: #ffffff">Learn How</a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </section>
        <!-- /section -->
<?php endwhile; ?>
    </main>


<?php
get_footer();
