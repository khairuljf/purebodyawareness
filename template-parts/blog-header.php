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

        <?php if(!is_single()): ?>
        <div class="ui-hero-slide animated center <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>"
             style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/reading.jpg');z-index:1;">
            <?php elseif(is_single()): ?>
            <div class="ui-hero-slide animated center <?php echo has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail'; ?>"
                 style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');z-index:1;">
                <?php endif; ?>
            
            <div class="ui-hero-slide-overlay fx-main-color-background-color-" style="display: none;"></div>
            <div class="container">
                <div class="ui-hero-slide-container -version center">
                    <div class="container">
                        <div class="ui-hero-slide-content">
                            <div class="ui-hero-slide-content-text">
                                <?php if(!is_single()): ?>
                                <h1 class="ui-hero-slide-content-headline" style="color: ;">Blog</h1>
                                <?php endif; ?>
                                <div class="ui-hero-slide-title-background black opacity-5" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
