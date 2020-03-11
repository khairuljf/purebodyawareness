<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

$addBannerClass = get_post_meta(get_the_ID(), 'addBannerClass', true);
$isAddBannerClass = $isAddBannerClass ? $isAddBannerClass : '';

?>

<div class="ui-hero medium <?php echo $isAddBannerClass; ?>">
    <div class="ui-hero-slides -version" data-speed="">
        <div class="ui-hero-slide animated center <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail';  ?>"
             style="background-image:url('<?php if (has_post_thumbnail()) {
                 the_post_thumbnail_url();
             } ?>');z-index:1;">
            <div class="ui-hero-slide-overlay fx-main-color-background-color-"></div>
            <div class="container">
                <div class="ui-hero-slide-container -version center">
                    <div class="container">
                        <div class="ui-hero-slide-content">
                            <div class="ui-hero-slide-content-text">
                                <h1 class="ui-hero-slide-content-headline" style="color: ;">
                                    <?php
                                    $bannerTitle = get_post_meta(get_the_ID(), 'banner_title', true);
                                    $pageTitle = get_the_title();
                                    echo ($bannerTitle) ? $bannerTitle : $pageTitle;
                                    ?>
                                </h1>
                                <div class="ui-hero-slide-title-background black opacity-5"></div>
                                <?php $bannerSubtitle = get_post_meta(get_the_ID(), 'banner_subtitle', true);
                                if($bannerSubtitle){ ?>
                                <p class="ui-hero-slide-content-paragraph"
                                   style="color: #ffffff;"> <?php echo $bannerSubtitle; ?> </p>
                                <?php } ?>

                                <?php
                                $banner_button_name = get_post_meta(get_the_ID(), 'banner_button_name', true);
                                $banner_button_url = get_post_meta(get_the_ID(), 'banner_button_url', true);
                                $filter_banner_button_url = !empty($banner_button_url) ? $banner_button_url : '#';

                                if($banner_button_name){ ?>

                                <div class="ui-hero-slide-content-action-buttons">

                                    <a class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color track-click" href="<?php echo esc_url($filter_banner_button_url); ?>"><?php echo $banner_button_name; ?></a>
                                </div>

                                <?php } ?>
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
