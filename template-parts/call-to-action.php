<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

$cta_active = get_post_meta(get_the_ID(), 'cta_active', true);
$cta_title = get_post_meta(get_the_ID(), 'cta_title', true);
$cta_subtitle = get_post_meta(get_the_ID(), 'cta_subtitle', true);
$cta_button_name = get_post_meta(get_the_ID(), 'cta_button_name', true);
$cta_button_url = get_post_meta(get_the_ID(), 'cta_button_url', true);
$cta_bg_img = get_post_meta(get_the_ID(), 'cta_bg_img', true);
$cta_show_overlay = get_post_meta(get_the_ID(), 'cta_show_overlay', true);

$cta_bg_img ? $cta_bg_img : '';

?>
<?php
if ($cta_active) { ?>
    <div class="ui-banner center" style="background-image:url(<?php echo $cta_bg_img; ?>);">

        <div class="ui-banner-overlay fx-main-color-background-color-09"></div>

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
                    <?php if (!empty($cta_button_url)): ?>
                        <div class="ui-banner-content-action-buttons">
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $cta_button_url ?>"
                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    <?php echo $cta_button_name; ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>

    </div>
<?php }