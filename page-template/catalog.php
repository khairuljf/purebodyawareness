<?php
/*
 * Template Name: Catelog
 * */

get_header();

$gift_now = get_post_meta(get_the_ID(), 'gift_now',true);
$gift_now_url = get_post_meta(get_the_ID(), 'gift_now_url',true);

var_dump($gift_now);
wp_die();

?>
<main role="main">
    <!-- section -->
    <section>

        <div id="flex-component-0"  class="ui-hero medium">

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">

            <!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->

            <div class="ui-hero-slides regular-version" data-speed="6000">
                <div class="ui-hero-slide  animated center" style="background-image:url('https://greatergood.org/wp-content/uploads/2019/11/PPP-2019-darker-e1573689159320-1500x773.jpg');z-index:1;">





                    <div class="container">
                        <div class="ui-hero-slide-container regular-version center">
                            <div class="container">
                                <div class="ui-hero-slide-content">


                                    <div class="ui-hero-slide-content-text">
                                        <h1 style="font-family: 'Lobster'" class="ui-hero-slide-content-headline" style="color: #ffffff;"><font color="white">Give a Gift of Hope</font></h1>

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
        <div id="flex-component-1"  class="ui-content-panel center"  style="background-color: #ffffff">
            <div class="container ui-content-panel-container">
                <div class="ui-content-panel-content">

                    <div class="ui-content-panel-texts">
                        <h2 class="ui-content-panel-header" style="color:#000">
                            Whatever the Occassion, You Can Give a Gift That Gives Back				</h2>

                        <div class="ui-hr ui-content-panel-hr">
                            <hr class="fx-main-color-background-color-10" />
                        </div>


                        <div class="ui-content-panel-paragraph" style="color:#000">
                            <div class="ui-content-panel-paragraph-content" style="color:#000">
                                <p>Is your loved one <em>impossible</em> to shop for? Are you looking for a unique gift that has a positive impact? Consider making a donation in your loved one&#8217;s name! Whether your loved one is an animal lover, a people-person, or an eco-warrior, our gift guide has that perfect something for them. Ditch the wrapping paper and send a meal, a week of school, or plant a tree in their honor.</p>
                                <p>Plus, you can honor them with a free customizable digital card with every donation.</p>
                                <p style="font-weight:bold;">Browse our catalog of impactful gifts, or jump to a section:</p>
                                <p><a href="#pets" style="font-weight:bold;">Gifts for the Pet Lover</a><br />
                                    <a href="#people" style="font-weight:bold;">Gifts for the Humanitarian</a><br />
                                    <a href="#planet" style="font-weight:bold;">Gifts for the Environmentalist</a></p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        </div><div id="flex-component-2"  class="ui-media-panel media-left" style="background-color: #d8edf4">

            <div class="ui-media-panel-media-pane">

                <div class="ui-media-panel-photo" style="background-image:url('https://greatergood.org/wp-content/uploads/2020/01/2014-05-Metro-12-1500x1125.jpg');">
                    <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                </div>


            </div>

            <div class="container">

                <div class="ui-media-panel-content-pane">

                    <h2 class="ui-media-panel-header" style="color:#000">
                        A Gift That Gives Back Month After Month			</h2>

                    <div class="ui-hr ui-media-panel-hr">
                        <hr class="fx-main-color-background-color-10" />
                    </div>

                    <div class="ui-media-panel-paragraph" style="color:#000">
                        <p>Become a Protector! Join our community of monthly donors or give the gift of hope year-round to a loved one. GreaterGood.org counts on our Protectors to sustain our efforts, so we can accomplish our mission month after month. You choose where your monthly gift goes: to helping people, pets, the planet, or all of the above.</p>
                    </div>


                    <div class="ui-media-panel-action-buttons">
                        <div class="ui-media-panel-action-button">
                            <a href="http://bit.ly/2CFk2cV" class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color" target="_blank">
                                Join the Club</a>


                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- This is where the front end gets rendered and stuff... -->
        <div class="ui-flexible-grid-tool">
            <div
                    class="flexible-grid-tool-background" style="background-color: #8ed7ed;">

                <div class="container">

                    <h1 class="flexible-grid-headline"><a id="pets"></a>Gifts for the Pet Lover in Your Life</h1>

                    <div class="flexible-grid-cta-section clearfix">

                        <?php

                        $args = array(
                            'post_type' => 'gifts-for-pet',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'orderby' => 'title',
                            'order' => 'ASC'
                        );

                        $pressLoop = new WP_Query($args);

                        while ($pressLoop->have_posts()) : $pressLoop->the_post();

                        ?>

                        <div class="flexible-grid-all-ctas centered">
                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #0097ce">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/10/Apollos-Nose-Through-Fence-in-the-Sunlight-SASFAPR-1-copy.png)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;"><?php echo the_title(); ?></p>
                                    <p class="flexible-grid-item-text" style="color: #000;"><?php echo the_content(); ?></p>
                                    <a href="<?php echo $gift_now_url;?>" class="ui-action-button flexible-grid-item-button" data-product="2019256336" style="background-color: #ffb000; color: #000"><?php echo $gift_now; ?></a>
                                </div>
                            </div>

                        </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>


                </div>
            </div>
        </div>
        <div class="ui-banner center" style="background-image:url('https://greatergood.org/wp-content/uploads/2020/01/3-LeeAnnB-1500x1000.jpg');">

            <div class="ui-banner-overlay fx-black-color-background-color-05"></div>

            <div class="container">
                <div class="ui-banner-container">

                    <div class="ui-banner-content">

                        <div class="ui-banner-content-text">
                            <h1 class="ui-banner-content-headline"></h1>

                            <p class="ui-banner-content-paragraph">
                            <h1 style="color:white;">“It’s not how much we give, but how much love we put into giving.”</h1> <h2 style="color:white;">—Mother Teresa</h2>					</p>
                        </div>


                    </div>

                </div>
            </div>

        </div>
        <!-- This is where the front end gets rendered and stuff... -->
        <div class="ui-flexible-grid-tool">
            <div
                    class="flexible-grid-tool-background" style="background-color: #f9bd9f;">

                <div class="container">

                    <h1 class="flexible-grid-headline"><a id="people"></a>Gifts for the Humanitarian in Your Life</h1>

                    <div class="flexible-grid-cta-section clearfix">

                        <div class="flexible-grid-all-ctas centered">


                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2015/11/GGO-West-Africa-Diabetes.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Help Where It's Most Needed</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Support our people programs that need it the most!</p>
                                    <a href="https://give.greatergood.org/campaign/help-where-its-most-needed-give-a-gift-for-all-catalog-2019/c256336" class="ui-action-button flexible-grid-item-button" data-product="2019256336" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/Sabeena-S-GV-Reading-copy.png)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Education with Girls' Voices</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Support quality education for Girls' Voices scholars around the world!</p>
                                    <a href="https://give.greatergood.org/campaign/girls-voices-give-the-gift-of-education-catalog-2019/c256340" class="ui-action-button flexible-grid-item-button" data-product="2019256340" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2016/11/worldhunger.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give a Meal to End World Hunger</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Together, we can feed hungry people near and far and end world hunger!</p>
                                    <a href="https://give.greatergood.org/campaign/fight-world-hunger-catalog-2019/c256354" class="ui-action-button flexible-grid-item-button" data-product="2019256354" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/01/ppl-disaster-21318899_10159321671830080_4386472362964937913_o.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Hope in Hard Times to People and Animals</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Give to our disaster relief efforts to ensure the safety of those affected by natural disasters.</p>
                                    <a href="https://give.greatergood.org/campaign/disaster-relief-give-hope-through-hard-times-catalog-2019/c256341" class="ui-action-button flexible-grid-item-button" data-product="2019256341" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2015/09/GGO-Chickens1.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Nourishment with Egg-Laying Hens</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Egg-laying hens provide much-need protein and an opportunity to start a business.</p>
                                    <a href="https://give.greatergood.org/campaign/egg-laying-hens-for-people-in-haiti-catalog-2019/c256355" class="ui-action-button flexible-grid-item-button" data-product="2019256355" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2018/10/Photo-6-Tina-pads-2-scroll.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Reusable Pads to Keep Girls in School</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Many girls miss school due to lack of sanitary products. Help keep them in school year-round.</p>
                                    <a href="https://give.greatergood.org/campaign/reusable-pads-to-keep-girls-in-school-catalog-2019/c256359" class="ui-action-button flexible-grid-item-button" data-product="2019256359" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/91048_1000_2.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give the Gift of a Safe Childbirth</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Support the only birthing clinic on the Thai/Burma border that provides pre and post natal care.</p>
                                    <a href="https://give.greatergood.org/campaign/the-gift-of-safe-childbirth-catalog-2019/c256357" class="ui-action-button flexible-grid-item-button" data-product="2019256357" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/Mae-Tao-Clinic-Kids-Food.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Food to Burmese Refugees</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Help keep children healthy and full, so they can grow strong and stay alert in school.</p>
                                    <a href="https://give.greatergood.org/campaign/food-for-burmese-refugees-catalog-2019/c256356" class="ui-action-button flexible-grid-item-button" data-product="2019256356" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/AdobeStock_162467022-copy.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give Mammograms to Women in Need</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Breast cancer is a leading cause of death for women around the world. Give preventative care today.</p>
                                    <a href="https://give.greatergood.org/campaign/mammograms-for-women-in-need-catalog-2019/c256358" class="ui-action-button flexible-grid-item-button" data-product="2019256358" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/Man-in-Hawaiin-Shirt-Gets-Backpack-1-copy.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give a Good Pack to a Veteran and their Pet</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">With a Good Pack, a veteran will receive critical supplies so they and their pet can stay full, warm, and healthy.</p>
                                    <a href="https://give.greatergood.org/campaign/backpacks-for-veterans-and-their-pets-catalog-2019/c256348" class="ui-action-button flexible-grid-item-button" data-product="2019256348" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #dd3333">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/01/Home-for-the-Holidays-Hero.png)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Help Vets and Pets Stay Out of the Cold</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Help our Rescue Rebuild team keep veterans and their pets together.</p>
                                    <a href="https://give.greatergood.org/campaign/rescue-rebuild-give-the-gift-of-a-home-for-the-holidays-catalog-2019/c256339" class="ui-action-button flexible-grid-item-button" data-product="2019256339" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="ui-banner center" style="background-image:url('https://greatergood.org/wp-content/uploads/2020/01/Two-Yound-Boys-Showing-Off-New-Books_©Harvard-Community-Unit-School-District-50_Bernies-Book-Bank_GGO-Book-Program-e1580239636754-1500x671.jpg');">

            <div class="ui-banner-overlay fx-black-color-background-color-05"></div>

            <div class="container">
                <div class="ui-banner-container">

                    <div class="ui-banner-content">

                        <div class="ui-banner-content-text">
                            <h1 class="ui-banner-content-headline"></h1>

                            <p class="ui-banner-content-paragraph">
                            <h1 style="color:white;">“We make a living by what we get. We make a life by what we give.”</h1> <h2 style="color:white;">—Winston Churchill</h2>					</p>
                        </div>


                    </div>

                </div>
            </div>

        </div>
        <!-- This is where the front end gets rendered and stuff... -->
        <div class="ui-flexible-grid-tool">
            <div
                    class="flexible-grid-tool-background" style="background-color: #a0d67a;">

                <div class="container">

                    <h1 class="flexible-grid-headline"><a id="planet"></a>Gifts for the Environmentalist in Your Life</h1>

                    <div class="flexible-grid-cta-section clearfix">

                        <div class="flexible-grid-all-ctas left">


                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/Liz-Makings-36766615025_a3a2ef52eb_k.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Help Where It's Most Needed</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Support our planet programs that need it the most — from habitat protection to saving endangered species!</p>
                                    <a href="https://give.greatergood.org/campaign/help-where-its-most-needed-give-a-gift-for-all-catalog-2019/c256336" class="ui-action-button flexible-grid-item-button" data-product="2019256336" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/Rachael-Hurst-landscape-LGutierrez-SBuenos-Aires-Aug16-1a.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give the Gift of Conservation with Madrean Discovery Expeditions</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Help us protect the Sky Islands!</p>
                                    <a href="https://give.greatergood.org/campaign/madrean-discovery-expeditions-give-the-gift-of-conservation-catalog-2019/c256342" class="ui-action-button flexible-grid-item-button" data-product="2019256342" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/stock-asian-elephant-site.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Give the Gift of Protection with Project Peril</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Protect species on the brink of extinction and their habitat.</p>
                                    <a href="https://give.greatergood.org/campaign/project-peril-give-the-gift-of-protection-catalog-2019/c256343" class="ui-action-button flexible-grid-item-button" data-product="2019256343" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/11/AdobeStock_227308714-1.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Plant a Tree with Project Peril</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Give the gift of reforestation! Help plant trees where they are needed most.</p>
                                    <a href="https://give.greatergood.org/campaign/project-peril-plant-a-tree-catalog-2019/c256362" class="ui-action-button flexible-grid-item-button" data-product="2019256362" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2018/10/AdobeStock_178415737.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Save the Bee with Project Peril</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Bees are one of the most important creatures on our planet. Help protect them.</p>
                                    <a href="https://give.greatergood.org/campaign/project-peril-help-save-the-bee-catalog-2019/c256363" class="ui-action-button flexible-grid-item-button" data-product="2019256363" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2017/11/Adopt-a-Giraffe-Square.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Save the Giraffe with Project Peril</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Protect this majestic creature and its habitat from the threat of extinction.</p>
                                    <a href="https://give.greatergood.org/campaign/project-peril-save-the-giraffe-catalog-2019/c256364" class="ui-action-button flexible-grid-item-button" data-product="2019256364" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/08/AdobeStock_129679708.jpeg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Save the Oceans with Project Peril</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Protect the coral reefs and fight against plastic pollution in the ocean.</p>
                                    <a href="https://give.greatergood.org/campaign/project-peril-protect-the-oceans-catalog-2019/c257474" class="ui-action-button flexible-grid-item-button" data-product="2019257474" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2016/11/projectwildcat.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Protect Big Cats with Project Wildcat</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Protect keystone species of predator cats in the Sonoran desert and preserve biodiversity in the process.</p>
                                    <a href="https://give.greatergood.org/campaign/project-wildcat-catalog-2019/c257475" class="ui-action-button flexible-grid-item-button" data-product="2019257475" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>



                            <div class="flexible-grid-item-wrapper image-wrapper" style="background-color: #35ad43">
                                <div class="flexible-grid-item-image regular-image" style="background-image: url(https://greatergood.org/wp-content/uploads/2019/01/lovebananas-Chailert-Bell-with-Elephants-Hero.jpg)">
                                </div>
                                <div class="flexible-grid-item-inner regular-inner">
                                    <p class="flexible-grid-item-text title-text" style="color: #000;">Save Abused Elephants with the Love & Bananas Fund</p>
                                    <p class="flexible-grid-item-text" style="color: #000;">Protect these gentle giants and help fund an elephant sanctuary in Thailand.</p>
                                    <a href="https://give.greatergood.org/campaign/love-and-bananas-save-elephants-from-abuse-catalog-2019/c256361" class="ui-action-button flexible-grid-item-button" data-product="2019256361" style="background-color: #ffb000; color: #000">Give Now</a>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>

    </section>
    <!-- /section -->
</main>

<?php get_footer();
