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
        <div class="ui-hero-slide animated center <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>"
             style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/reading.jpg');z-index:1;">
            <div class="ui-hero-slide-overlay fx-main-color-background-color-" style="display: none;"></div>
            <div class="container">
                <div class="ui-hero-slide-container -version center">
                    <div class="container">
                        <div class="ui-hero-slide-content">
                            <div class="ui-hero-slide-content-text">
                                <h1 class="ui-hero-slide-content-headline" style="color: ;">Blog</h1>
                                <div class="ui-hero-slide-title-background black opacity-5" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
