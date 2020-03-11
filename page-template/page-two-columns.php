<?php

/*
 * Template Name: Two Column Template
 * */

get_header();

$two_column_group = get_post_meta(get_the_ID(), 'two_column_repeat_group', true);


//    if ( isset( $entry['two_column_btn_link'] ) ) {
//        $link = $entry['two_column_btn_link'];
//    }


?>
    <main role="main">
        <!-- section -->
        <section>

            <?php get_template_part('./template-parts/header'); ?>

            <?php
            foreach ((array)$two_column_group as $key => $entry) :

                $two_column_title = $two_column_desc = $two_column_btn = $two_column_btn_link = $two_column_image = $two_column_image_align = $two_column_customClass = '';

                if (isset($entry['two_column_btn_link'])) {
                    $btnLink = $entry['two_column_btn_link'];
                }

                if (!empty($entry['two_column_customClass'])) {
                    $customClass = $entry['two_column_customClass'];
                }

                if (isset($entry['two_column_image_align'])) {
                    $alignment = $entry['two_column_image_align'];
                }

                if($alignment == 'media-left') {
                    $alignClass = 'fx-main-color-background-color-10 fx-main-color-border-color';

                }else {
                    $alignClass = 'fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color';
                }

                $i = 0;
                ?>

                <div id="flex-component-<?php echo $i++; ?>" class="ui-media-panel <?php echo $customClass; echo $alignment; ?>"
                     style="background-color: #F6F6F6">

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


                            <?php
                            if (!empty($entry['two_column_btn'])): ?>
                                <div class="ui-media-panel-action-buttons">
                                    <div class="ui-media-panel-action-button">
                                        <a href="<?php echo $btnLink; ?>"
                                           class="ui-action-button solid <?php echo $alignClass; ?>" target="_blank">
                                    <?php echo $entry['two_column_btn']; ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
        </section>
        <!-- /section -->
    </main>


<?php get_footer(); ?>