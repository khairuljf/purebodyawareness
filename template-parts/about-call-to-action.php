<?php
/**
 * Template part for displaying about us call to action
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

$cta_section = get_post_meta(get_the_ID(), 'aboutCta_section', true);
$cta_active = get_post_meta(get_the_ID(), 'about_cta_active', true);
$cta_title = get_post_meta(get_the_ID(), 'aboutCta_title', true);
$cta_subtitle = get_post_meta(get_the_ID(), 'aboutCta_subtitle', true);
$cta_button_name = get_post_meta(get_the_ID(), 'aboutCta_button_name', true);
$cta_button_url = get_post_meta(get_the_ID(), 'aboutCta_button_url', true);

$cta_bg_img = get_post_meta(get_the_ID(), 'aboutCta_bg_img', true);
$cta_show_overlay = get_post_meta(get_the_ID(), 'about_cta_show_overlay', true);
$cta_overlay = get_post_meta(get_the_ID(), 'about_cta_overlay', true);
$addClass = get_post_meta(get_the_ID(), 'aboutAddClass', true);
$isAddClass = $addClass ? $addClass : '';
$cta_bg_img ? $cta_bg_img : '';

if ($cta_active) { ?>
    <div class="ui-banner center mh360 <?php if(!empty($isAddClass)) {echo $isAddClass;} ?>" style="background-image:url(<?php echo $cta_bg_img; ?>);">
        <?php //var_dump($cta_overlay); wp_die(); ?>
        <?php if($cta_show_overlay && $cta_overlay): ?>

        <div class="ui-banner-overlay fx-main-color-background-color-09" style="background-color: <?php echo $cta_overlay; ?>"></div>
        <?php endif; ?>

        <div class="container">
            <div class="ui-banner-container">

                <div class="ui-banner-content">

                    <div class="ui-banner-content-text">

                        <?php if (!empty($cta_title)): ?>
                            <h1 class="ui-banner-content-headline"><?php echo esc_html($cta_title) ?></h1>
                        <?php endif ?>

                        <?php if (!empty($cta_subtitle)): ?>
                            <p class="ui-banner-content-paragraph">
                                <?php echo esc_html($cta_subtitle) ?></p>
                        <?php endif ?>

                    </div>
                        <div class="ui-banner-content-action-buttons">
                            <?php if($cta_button_url): ?>
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $cta_button_url ?>"
                                   class="cta_outline_btn ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    <?php echo $cta_button_name; ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if($cta_button_url2): ?>
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $cta_button_url2 ?>"
                                   class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    <?php echo $cta_button_name2; ?>
                                </a>
                            </div>
                            <?php endif; ?>

                        </div>

                </div>

            </div>
        </div>

    </div>
<?php } ?>



<div class="ui-banner center" style="display: none; background-image:url('https://greatergood.org/wp-content/uploads/2016/08/floodimage-1500x647.jpg');">

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
                        <a href="https://greatergood.org/blog/" class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color" target="_blank">
                            Read Our Blog</a>


                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
