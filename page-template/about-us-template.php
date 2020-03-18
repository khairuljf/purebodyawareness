<?php
/*
 * Template Name: About Us
 * */

get_header();

$FirstSectionImg = get_post_meta(get_the_ID(), 'about_top_img',true);
$about_1st_title = get_post_meta(get_the_ID(), 'about_1st_title',true);
$about_top_content = get_post_meta(get_the_ID(), 'about_top_content',true);

// about us CTA
$aboutCta_title = get_post_meta(get_the_ID(), 'aboutCta_title',true);

$aboutCta_section = get_post_meta(get_the_ID(), 'aboutCta_section', true);
$cta_title = get_post_meta(get_the_ID(), 'cta_title', true);
$cta_subtitle = get_post_meta(get_the_ID(), 'cta_subtitle', true);
$cta_button_name = get_post_meta(get_the_ID(), 'cta_button_name', true);
$cta_button_url = get_post_meta(get_the_ID(), 'cta_button_url', true);

$cta_button_name2 = get_post_meta(get_the_ID(), 'cta_button_name2', true);
$cta_button_url2 = get_post_meta(get_the_ID(), 'cta_button_url2', true);

$cta_bg_img = get_post_meta(get_the_ID(), 'cta_bg_img', true);
$cta_show_overlay = get_post_meta(get_the_ID(), 'cta_show_overlay', true);
$cta_overlay = get_post_meta(get_the_ID(), 'cta_overlay', true);
$addClass = get_post_meta(get_the_ID(), 'addClass', true);
$isAddClass = $addClass ? $addClass : '';
$cta_bg_img ? $cta_bg_img : '';

// khairul

$about_fist_title  =  get_post_meta(get_the_ID(), 'about_1st_title', true);
$about_fist_desc  =  get_post_meta(get_the_ID(), 'about_top_content', true);
$about_fist_btnurl1  =  get_post_meta(get_the_ID(), 'btnurl1', true);
$about_fist_btnurl2  =  get_post_meta(get_the_ID(), 'btnurl2', true);
$about_top_img  =  get_post_meta(get_the_ID(), 'about_top_img', true);


?>

    <main role="main">
        <!-- section -->

        <section>

            <div id="flex-component-0" class="ui-media-panel media-left" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo" style="background-image:url('<?php echo $about_top_img ?>');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000"><?php echo $about_fist_title ?>	</h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10">
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                           <?php

                           echo $about_fist_desc;

                           ?>
                        </div>


                        <div class="ui-media-panel-action-buttons">
                            <div class="ui-media-panel-action-button">
                                <a href="<?php echo $about_fist_btnurl1 ?>" class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color" target="_blank">
                                    Give to Your Cause</a>
                            </div>
                            <div class="ui-media-panel-action-button">
                                <a href="<?php echo $about_fist_btnurl1 ?>" class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color" target="_blank">
                                    Fundraise with Us</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <?php get_template_part('template-parts/about-call-to-action'); ?>

            <?php get_template_part('template-parts/two-column'); ?>


            <div id="team-panel-0d0cd88d5fd8b9cd47e25892e1f35d3c" class="ui-team-panel"
                 data-hash="0d0cd88d5fd8b9cd47e25892e1f35d3c">
                <div class="container">
                    <h2 class="ui-team-panel-header">Meet Our Staff</h2>
                    <div class="ui-hr ui-team-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="ui-team-panel-grid">
                        <div class="row">



                            <?php

                            $args = array(
                                'post_type' => 'meet-our-staff',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                            );

                            $staffs = new WP_Query($args);

                            while ($staffs->have_posts()) : $staffs->the_post();

                            $position = get_post_meta(get_the_ID(), 'sb_postion', true);
                            $s_email = get_post_meta(get_the_ID(), 'sb_email', true);


                            ?>


                                <div id="ui-team-panel-grid-item-cd4ca80fbe5cf071eee709e41ee18777"
                                     class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                    <div class="ui-team-panel-image"
                                         style="background-image:url('<?php has_post_thumbnail() ? the_post_thumbnail_url() : '' ?>');"></div>

                                    <div class="ui-team-panel-content">
                                        <h3 class="ui-team-panel-name"><?php the_title() ?></h3>
                                        <p class="ui-team-panel-title"><?php echo $position ?></p>


                                    </div>

                                    <script type="text/template" id="team-template-cd4ca80fbe5cf071eee709e41ee18777"
                                            class="team-template">
                                        <div id="expander-content-cd4ca80fbe5cf071eee709e41ee18777"
                                             class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                            <div class="expander-content-arrow"></div>
                                            <div class="expander-content-container row">
                                                <div class="content-left col-md-6">
                                                    <h3 class="expander-content-name"><?php the_title() ?></h3>
                                                    <p class="expander-content-title"><?php echo $position ?></p>
                                                    <p class="expander-content-left-summary"></p>

                                                    <div class="ui-team-panel-action-buttons">
                                                        <div class="ui-team-panel-action-button fx-btn">
                                                            <a href="mailto:<?php echo $s_email ?>"
                                                               class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                               target="_blank">
                                                                Email <?php the_title() ?></a>


                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="content-right col-md-6">

                                                 <div class="expander-content-summary-noleft">
                                                        <?php the_content(); ?>
                                                 </div>

                                                </div>
                                            </div>
                                        </div>
                                    </script>
                                </div>

                          <?php  endwhile;
                            wp_reset_postdata();

                            ?>


                        </div>
                    </div>
                </div>
            </div>

            <div id="team-panel-5aec3f6067e1e429155287b261a5212d" class="ui-team-panel"
                 data-hash="5aec3f6067e1e429155287b261a5212d">
                <div class="container">
                    <h2 class="ui-team-panel-header">Meet Our Board</h2>
                    <div class="ui-hr ui-team-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="ui-team-panel-grid">
                        <div class="row">

                            <?php

                            $args = array(
                                'post_type' => 'meet-our-board',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC'
                            );

                            $boards = new WP_Query($args);

                            while ($boards->have_posts()) : $boards->the_post();

                                $position = get_post_meta(get_the_ID(), 'sb_postion', true);
                                $s_email = get_post_meta(get_the_ID(), 'sb_email', true);

                            ?>
                                <div id="ui-team-panel-grid-item-ab4ed6771a81df23cf47f8dfa01ba124"
                                     class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                    <div class="ui-team-panel-image"
                                         style="background-image:url('<?php has_post_thumbnail() ? the_post_thumbnail_url() : '' ?>');"></div>

                                    <div class="ui-team-panel-content">
                                        <h3 class="ui-team-panel-name"><?php the_title(); ?></h3>
                                        <p class="ui-team-panel-title"><?php echo $position ?></p>


                                    </div>

                                    <script type="text/template" id="team-template-ab4ed6771a81df23cf47f8dfa01ba124"
                                            class="team-template">
                                        <div id="expander-content-ab4ed6771a81df23cf47f8dfa01ba124"
                                             class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                            <div class="expander-content-arrow"></div>
                                            <div class="expander-content-container row">
                                                <div class="content-left col-md-6">
                                                    <h3 class="expander-content-name"><?php the_title(); ?></h3>
                                                    <p class="expander-content-title"><?php echo $position ?></p>
                                                    <p class="expander-content-left-summary"></p>
                                                </div>
                                                <div class="content-right col-md-6">
                                                    <div class="expander-content-summary-noleft">
                                                        <?php the_content(); ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </script>
                                </div>
                         <?php   endwhile;
                            wp_reset_postdata();

                            ?>



                        </div>
                    </div>
                </div>
            </div>

            <?php get_template_part('template-parts/call-to-action'); ?>


        </section>
        <!-- /section -->
    </main>
<?php

get_footer();
?>
