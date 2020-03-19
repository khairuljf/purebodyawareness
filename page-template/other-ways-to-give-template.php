
<?php

/*
 * template name:Other way to go
 * */

get_header();

$two_column_group = get_post_meta(get_the_ID(), 'other_way_group', true);

// footer option

$donate_footer_title = get_post_meta(get_the_ID(), 'donate_footer_title', true);
$donate_footer_title_desc = get_post_meta(get_the_ID(), 'donate_footer_title_desc', true);
$donate_footer_btn1_name = get_post_meta(get_the_ID(), 'donate_footer_btn1_name', true);
$donate_footer_btn1_url = get_post_meta(get_the_ID(), 'donate_footer_btn1_url', true);
$donate_footer_btn2_name = get_post_meta(get_the_ID(), 'donate_footer_btn1_name', true);
$donate_footer_btn2_url = get_post_meta(get_the_ID(), 'donate_footer_btn1_url', true);

?>
<main role="main">
    <!-- section -->
    <?php
    while (have_posts()) :
    the_post(); ?>
    <section>

        <div id="flex-component-0" class="ui-hero small">

            <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

            <div class="ui-hero-slides regular-version" data-speed="6000">
                <div class="ui-hero-slide  animated center"
                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/01/Small-Hero-for-Logo-Landing-Page-1500x600.jpg');z-index:1;">

                    <div style="background-color : #64bcdf; opacity: 0.8" class="ui-hero-slide-overlay"></div>


                    <div class="container">
                        <div class="ui-hero-slide-container regular-version center">
                            <div class="container">
                                <div class="ui-hero-slide-content">

                                    <div class="ui-hero-slide-content-attachment">


                                        <div class="ui-hero-slide-content-attachment-image">
                                            <img src="<?php echo get_the_post_thumbnail_url() ?>"/>
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
        </div>
        </div>

        </div>
        <div id="flex-component-1" class="ui-action-panel ui-panel-component">
            <div class="container">
                <div class="ui-action-panel-container">

                    <div class="ui-action-panel-content">

                        <?php

                        foreach ((array)$two_column_group as $key => $entry) :

                            $title = $group_img = $desc = $btn_name = $btn_url = '';

                            if (isset($entry['accordion_title'])) {
                                $title = $entry['accordion_title'];
                            }
                            if (isset($entry['group_img'])) {
                                $group_img = $entry['group_img'];
                            }
                            if (isset($entry['accordion_desc'])) {
                                $desc = $entry['accordion_desc'];
                            }

                            if (isset($entry['btn_name'])) {
                                $btn_name = $entry['btn_name'];
                            }
                            if (isset($entry['btn_url'])) {
                                $btn_url = $entry['btn_url'];
                            }

                        ?>
                        <div class="ui-action-grid-item">

                            <div class="ui-action-grid-item-photo"
                                 style="background-image:url('<?php echo $group_img ?>')"></div>

                            <div class="ui-action-grid-item-info">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h2 class="ui-action-grid-item-header"><?php echo $title ?> </h2>

                                        <p class="ui-action-grid-item-paragraph">
                                            <?php echo $desc ?> </p>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="ui-action-grid-item-action-buttons">
                                            <div class="ui-action-grid-item-action-button">
                                                <a href="<?php echo $btn_url ?>"
                                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                   target="_blank"><?php echo $btn_name ?></a>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>

            </div>

        </div>
        </div>
        <div class="ui-banner center" style="background-image:url('');">

            <div class="ui-banner-overlay fx-main-color-background-color-09"></div>

            <div class="container">
                <div class="ui-banner-container">

                    <div class="ui-banner-content">

                        <div class="ui-banner-content-text">
                            <h1 class="ui-banner-content-headline"><?php echo $donate_footer_title ?></h1>

                            <p class="ui-banner-content-paragraph">
                               <?php echo $donate_footer_title_desc ?> </p>
                        </div>

                        <div class="ui-banner-content-action-buttons">
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $donate_footer_btn1_url ?>"
                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    <?php echo $donate_footer_btn1_name ?></a>


                            </div>
                            <div class="ui-banner-content-action-button">
                                <a href="<?php echo $donate_footer_btn2_url ?>"
                                   class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    <?php echo $donate_footer_btn1_name ?></a>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </section>
    <?php endwhile; ?>
    <!-- /section -->
</main>

<?php
get_footer();
?>