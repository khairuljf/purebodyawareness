<?php

/*
 * Template Name: Press Template
 * */

get_header();
global $pureopt; ?>
    <main role="main">
        <!-- section -->
        <section>

            <?php get_template_part( './template-parts/header' ); ?>

            <div id="flex-component-0" class="ui-hero medium" style="display: none">

                <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide  animated center"
                         style="background-image:url('<?php if (has_post_thumbnail()) {
                             the_post_thumbnail_url();
                         } ?>');z-index:1;">


                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">
                                        <div class="ui-hero-slide-content-text">
                                            <h1 class="ui-hero-slide-content-headline" style="color: #ffffff;">
                                                <?php
                                                $bannerTitle = get_post_meta(get_the_ID(), 'banner_title', true);
                                                echo $bannerTitle;
                                                ?>

                                            </h1>
                                            <div class="ui-hero-slide-title-background black opacity-5"></div>

                                            <p class="ui-hero-slide-content-paragraph" style="color: #ffffff;"> <?php $bannerSubtitle = get_post_meta(get_the_ID(), 'banner_subtitle', true);
                                                echo $bannerSubtitle; ?> </p>
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

            <div id="flex-component-1" class="ui-press-grid">
                <div class="press-grid-container">
                    <h3 class="press-grid-header"></h3>




                    <div class="press-grid-content-row">
                        <?php
                        $args = array(
                            'post_type' => 'press',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'orderby' => 'title',
                            'order' => 'ASC'
                        );

                        $pressLoop = new WP_Query($args);

                        while ($pressLoop->have_posts()) : $pressLoop->the_post(); ?>

                        <div style="background-color: #e1e0e0" class="press-grid-item">
                            <div class="press-grid-item-image-wrapper"><?php if(has_post_thumbnail()){the_post_thumbnail('post-thumbnail', ['class' => 'press-grid-item-content-img']);} ?></div>
                            <h3 style="color: #000000" class="press-grid-item-header"><?php $title = get_the_title();echo esc_html($title) ?> </h3>

                            <p style="color: #000000" class="press-grid-item-body"><?php echo get_the_content(); ?></p>

                            <?php $pressReadUrl = get_post_meta(get_the_ID(), 'press_read_url', true); ?>

                            <a style="color: #1e73be" class="press-grid-item-link" href=" <?php echo esc_url($pressReadUrl) ?> " target="_blank">Read More</a>
                        </div>

                        <?php endwhile;
                        wp_reset_postdata(); ?>

                    </div>



                </div>
            </div>
            <div style="background-color: #ffffff" id="video-gallery_1147edca207ad6846a6875355ba33058"
                 class="ui-video-gallery-component" data-hash="_1147edca207ad6846a6875355ba33058">
                <div class="container">
                    <h2 class="ui-video-gallery-header"><font size="6">Videos</font></h2>
                    <div class="ui-hr ui-video-gallery-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="row">


                        <script>
                            var _1147edca207ad6846a6875355ba33058 = {};
                        </script>

                        <div class="ui-video-gallery" id="ui-video-gallery-_1147edca207ad6846a6875355ba33058">
                            <div id="4de590b62e02f3076905a2b40fd83641"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="4de590b62e02f3076905a2b40fd83641" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="GreaterGood.org Joins Forces with George to the Rescue" width="275"
                                            height="155" src="https://www.youtube.com/embed/dWXPhyk43uA?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">GreaterGood.org Joins Forces with George to the
                                        Rescue</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20191025",
                                            "favorite": false,
                                            "title": "GreaterGood.org Joins Forces with George to the Rescue",
                                            "caption": "GreaterGood.org joined George and his team, and presented the shelter with a giant $10.000 check to help them continue with improvements, and make the shelter better than it ever was before.",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"GreaterGood.org Joins Forces with George to the Rescue\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/dWXPhyk43uA?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['4de590b62e02f3076905a2b40fd83641'] = vid;
                                    </script>

                                </div>
                            </div>
                            <div id="edf038e4f633833d990873271fe4a115"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="edf038e4f633833d990873271fe4a115" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="Renovation for Animal Shelter And Rescue Dogs | George to the Rescue"
                                            width="275" height="155"
                                            src="https://www.youtube.com/embed/K4BWLdmB0GY?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">Rescue Rebuild on George to the Rescue</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20191025",
                                            "favorite": false,
                                            "title": "Rescue Rebuild on George to the Rescue",
                                            "caption": "Bryan surprises the Montclair Township Community Animal Shelter with a check for $10,000",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"Renovation for Animal Shelter And Rescue Dogs | George to the Rescue\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/K4BWLdmB0GY?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['edf038e4f633833d990873271fe4a115'] = vid;
                                    </script>

                                </div>
                            </div>
                            <div id="f49523a20d0139f61df679ae11206f64"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="f49523a20d0139f61df679ae11206f64" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="Cat Pawsitive on Good Morning America" width="275" height="155"
                                            src="https://www.youtube.com/embed/8nxfoCQX-VI?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">Cat Pawsitive on Good Morning America</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20180411",
                                            "favorite": false,
                                            "title": "Cat Pawsitive on Good Morning America",
                                            "caption": "Good Morning America featured a segment on Cat Pawsitive for #NationalPetDay on April 11, 2018.",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"Cat Pawsitive on Good Morning America\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/8nxfoCQX-VI?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['f49523a20d0139f61df679ae11206f64'] = vid;
                                    </script>

                                </div>
                            </div>
                            <div id="208f380dbc58b2bbfb5bfc8bbbbbed0f"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="208f380dbc58b2bbfb5bfc8bbbbbed0f" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="Cats Are Learning How To High Five  - CONAN on TBS" width="275"
                                            height="155" src="https://www.youtube.com/embed/JWitX0gDk0k?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">Cat Pawsitive on Conan Tonight</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20180501",
                                            "favorite": false,
                                            "title": "Cat Pawsitive on Conan Tonight",
                                            "caption": "Conan imagined all the paw-sibilities of a cat who can high-five.",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"Cats Are Learning How To High Five  - CONAN on TBS\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/JWitX0gDk0k?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['208f380dbc58b2bbfb5bfc8bbbbbed0f'] = vid;
                                    </script>

                                </div>
                            </div>
                            <div id="8fc9c70e6ce1c2fd069a247002728c8d"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="8fc9c70e6ce1c2fd069a247002728c8d" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="Pedigree&#039;s Shelter Hero of the Year 2014 - Bryna Donnelly"
                                            width="275" height="155"
                                            src="https://www.youtube.com/embed/Rk89Z9v61jw?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">Pedigree's Shelter Hero of the Year Award</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20141204",
                                            "favorite": true,
                                            "title": "Pedigree's Shelter Hero of the Year Award",
                                            "caption": "Bryna Donnelly received the Pedigree Shelter Hero of the Year Award in 2014, recognizing her efforts in making our Rescue Rebuild program the most successful shelter rebuild program in the nation.",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"Pedigree&#039;s Shelter Hero of the Year 2014 - Bryna Donnelly\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/Rk89Z9v61jw?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['8fc9c70e6ce1c2fd069a247002728c8d'] = vid;
                                    </script>

                                </div>
                            </div>
                            <div id="e915b5eec79f73d813b4f93dab5a1655"
                                 class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
                                <div class="ui-video-gallery-content">
                                    <a name="video-modal" data-hash="_1147edca207ad6846a6875355ba33058"
                                       data="e915b5eec79f73d813b4f93dab5a1655" style="position:absolute">
                                        <div class="framecover"
                                             style="position:absolute; z-index:2; height:155px; width:275px">
                                        </div>
                                    </a>
                                    <iframe title="Purina Donates to GreaterGood.org to Help with Hurricane Pet Relief Efforts"
                                            width="275" height="155"
                                            src="https://www.youtube.com/embed/1KVHwQZIUso?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <p class="ui-video-gallery-category"></p>
                                    <p class="ui-video-gallery-title">Purina Donates to GreaterGood.org</p>
                                    <p class="ui-video-gallery-name"></p>
                                    <p class="ui-video-gallery-age"></p>

                                    <script>
                                        var vid = {
                                            "name": "",
                                            "age": "",
                                            "filter": "",
                                            "filter_secondary": "",
                                            "date": "20180105",
                                            "favorite": false,
                                            "title": "Purina Donates to GreaterGood.org",
                                            "caption": "Purina promoted our hurricane relief efforts in their 2017 #DogThanking campaign. Thanks to the thousands of people who participated, Purina donated $25,000 to GreaterGood.org, helping us save hundreds of pets.",
                                            "vid_or_image": "video",
                                            "video": "<iframe title=\"Purina Donates to GreaterGood.org to Help with Hurricane Pet Relief Efforts\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/1KVHwQZIUso?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>",
                                            "image": false
                                        };
                                        _1147edca207ad6846a6875355ba33058['e915b5eec79f73d813b4f93dab5a1655'] = vid;
                                    </script>

                                </div>
                            </div>

                            <div id="myModal" class="modal">
                                <div id="video-modal-content" class="modal-content">
                                    <span style="color: crimson" class="close">&times;</span>
                                    <h2 id="modal-video-title"></h2>
                                    <div id="modal-video-holder">
                                    </div>
                                    <p id="modal-video-caption"></p>
                                </div>
                            </div>
                        </div>

                        <div id="imageModal" class="modal">
                            <div id="image-modal-content" class="modal-content">
                                <span style="color: crimson" class="close">&times;</span>
                                <h2 id="modal-image-title"></h2>
                                <div id="modal-image-holder"></div>
                                <p id="modal-image-caption"></p>
                            </div>
                        </div>

                    </div>

                    <div class="ui-video-gallery-load-more-button-wrapper">
                        <button class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color ui-video-gallery-load-more-button">
                            LOAD MORE
                        </button>
                    </div>

                </div>
            </div>

            <div id="flex-component-3" class="ui-hero small" style="display: none">

                <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

                <div class="ui-hero-slides regular-version" data-speed="6000">
                    <div class="ui-hero-slide  animated center"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2018/01/Small-Hero-for-Logo-Landing-Page-No-Gaps-1500x600.jpg');z-index:1;">

                        <div class="ui-hero-slide-overlay fx-main-color-background-color-07"></div>


                        <div class="container">
                            <div class="ui-hero-slide-container regular-version center">
                                <div class="container">
                                    <div class="ui-hero-slide-content">


                                        <div class="ui-hero-slide-content-text">
                                            <h1 class="ui-hero-slide-content-headline" style="color: #ffffff;">Download
                                                GreaterGood.org Signature Program Logos</h1>

                                        </div>


                                        <div class="ui-hero-slide-content-action-buttons">
                                            <div class="ui-hero-slide-content-action-button">
                                                <a href="https://greatergood.org/home/logos-for-partners/"
                                                   class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                   target="_blank">
                                                    Download Logo Packs</a>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <?php get_template_part( './template-parts/call-to-action' ); ?>


        </section>
        <!-- /section -->
    </main>


<?php get_footer(); ?>