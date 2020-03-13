<?php

/*
 * Template Name: Fund-raise Template
 * */

get_header();

$two_column_group = get_post_meta(get_the_ID(), 'two_column_repeat_group', true);
$banner_overlay_color = get_post_meta(get_the_ID(), 'banner_overlay_color', true);
$i = 1;

?>

    <main role="main">
        <section>
            <div id="flex-component-0" class="ui-hero small">

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide  animated center" style="z-index:1;">

                        <div class="ui-hero-slide-overlay fx-main-color-background-color-08" style="background-color: <?php if($banner_overlay_color) { echo $banner_overlay_color;} ?>"></div>


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

                <?php
                foreach ((array)$two_column_group as $key => $entry) :

                    $two_column_title = $two_column_desc = $banner_overlay_color = $two_column_btn = $two_column_btn_link = $two_column_btn2 = $two_column_btn_link2 = $two_column_image = $two_column_image_align = $two_column_customClass = '';

                    if (isset($entry['banner_overlay_color'])) {
                        $btnLink = $entry['banner_overlay_color'];
                    }

                    if (!empty($entry['two_column_customClass'])) {
                        $customClass = $entry['two_column_customClass'];
                    }

                    if (isset($entry['two_column_btn_link'])) {
                        $btnLink = $entry['two_column_btn_link'];
                    }
                    if (isset($entry['two_column_btn_link2'])) {
                        $btnLink2 = $entry['two_column_btn_link2'];
                    }


                    if (isset($entry['two_column_image_align'])) {
                        $alignment = $entry['two_column_image_align'];
                    }

                    if ($alignment == 'media-left') {
                        $alignClass = 'fx-main-color-background-color-10 fx-main-color-border-color';

                    } else {
                        $alignClass = 'fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color';
                    }

                    ?>

                    <div id="flex-component-<?php echo $i++; ?>" class="ui-media-panel <?php echo $customClass.' '; echo $alignment; ?>"
                         style="background-color: #F6F6F6;">

                        <div class="ui-media-panel-media-pane">

                            <?php if (isset($entry['two_column_image'])): ?>
                                <div class="ui-media-panel-photo"
                                     style="background-image:url('<?php echo $entry['two_column_image']; ?>');">
                                    <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                                </div>
                            <?php endif; ?>


                        </div>

                        <div class="container">

                            <div class="ui-media-panel-content-pane">

                                <?php if (!empty($entry['two_column_title'])) : ?>
                                    <h2 class="ui-media-panel-header"
                                        style="color:#000"> <?php echo $entry['two_column_title']; ?></h2>
                                <?php endif; ?>

                                <div class="ui-hr ui-media-panel-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <?php if (!empty($entry['two_column_desc'])): ?>
                                    <div class="ui-media-panel-paragraph" style="color:#000">
                                        <?php echo $entry['two_column_desc']; ?>
                                    </div>
                                <?php endif; ?>


                                <div class="ui-media-panel-action-buttons">
                                    <?php if (!empty($entry['two_column_btn'])): ?>

                                        <div class="ui-media-panel-action-button">
                                            <a href="<?php echo $btnLink; ?>"
                                               class="ui-action-button solid <?php echo $alignClass; ?>"
                                               target="_blank">
                                                <?php echo $entry['two_column_btn']; ?></a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($entry['two_column_btn2'])): ?>
                                        <div class="ui-media-panel-action-button">
                                            <a href="<?php echo $btnLink2; ?>"
                                               class="ui-action-button outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color track-download"
                                               target="_blank">
                                                <?php echo $entry['two_column_btn2']; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

                <?php get_template_part('./template-parts/call-to-action'); ?>

            </div>
        </section>
    </main>


<?php get_footer(); ?>