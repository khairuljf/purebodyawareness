<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

$post_donate_button_section = get_post_meta(get_the_ID(), 'post_donate_button_section', true);

$donate_bg = get_post_meta(get_the_ID(), 'donate_bg', true);
$donate_btn_url = get_post_meta(get_the_ID(), 'donate_btn_url', true);
$donate_btn = get_post_meta(get_the_ID(), 'donate_btn', true);
$donate_bg_url = $donate_bg ? $donate_bg : '';
?>
<div class="col-md-6">
    <a href="<?php echo esc_url(get_the_permalink()); ?>"
       title="<?php echo esc_html(get_the_title()); ?>" class="post-list-item-anchor">
        <article class="post-list-article">

            <div class="post-list-item"
                 style="background-image:url('<?php if (has_post_thumbnail(get_the_ID())) {
                     echo the_post_thumbnail_url();
                 } ?>')"></div>


            <div class="post-list-item-info">

                <div class="post-list-item-date"> <?php echo date('l,' . 'F' . 'j'); ?> <!--Friday, March 6 --></div>

                <div class="ui-hr blog-item-hr">
                    <hr class="fx-main-color-background-color-10"/>
                </div>

                <h2><?php echo get_the_title(); ?></h2>

                <p class="post-list-item-excerpt"><?php echo get_the_excerpt(); ?></p>

                <?php if ($post_donate_button_section): ?>

                    <div class="wp-block-cover" style="background-image:url('<?php echo esc_url($donate_bg_url); ?>');">
                        <div class="wp-block-cover__inner-container">
                            <div class="wp-block-button aligncenter"><a
                                        class="wp-block-button__link has-background has-vivid-cyan-blue-background-color"
                                        href="<?php echo esc_url($donate_btn_url); ?>"><?php echo $donate_btn; ?></a></div>
                        </div>
                    </div>


                <?php endif; ?>

            </div>

        </article>
    </a>
</div>