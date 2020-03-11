<?php

/*
 * template name:About Us
 * */


get_header();
?>



<?php


$FirstSectionImg = get_post_meta(get_the_ID(), 'about_top_img',true);
$about_1st_title = get_post_meta(get_the_ID(), 'about_1st_title',true);
$about_top_content = get_post_meta(get_the_ID(), 'about_top_content',true);


?>

    <main role="main">
        <!-- section -->
        <section>

            <div id="flex-component-0" class="ui-media-panel media-left" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo" style="background-image:url('<?php echo $FirstSectionImg  ?>');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            <?php echo $about_1st_title ?> </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                                <?php echo $about_top_content ?>
                        </div>


                        <div class="ui-media-panel-action-buttons">
                            <div class="ui-media-panel-action-button">
                                <a href="https://greatergood.org/catalog/"
                                   class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    Give to Your Cause</a>


                            </div>
                            <div class="ui-media-panel-action-button">
                                <a href="https://greatergood.org/fundraise-for-ggo/"
                                   class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                   target="_blank">
                                    Fundraise with Us</a>


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
                                <h1 class="ui-banner-content-headline">To date, GreaterGood.org has given over $250
                                    million in cash and in-kind grants.</h1>

                                <p class="ui-banner-content-paragraph">
                                    <strong>View our Annual Report</strong> for fiscal years 2017 and 2018 and see all
                                    the good we've accomplished thanks to our incredible donors and partners! </p>
                            </div>

                            <div class="ui-banner-content-action-buttons">
                                <div class="ui-banner-content-action-button">
                                    <a href="http://greatergood.org/documents/GGO-FY1718-AR.pdf"
                                       class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                       target="_blank">
                                        View Our Impact</a>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div id="flex-component-2" class="ui-media-panel media-right" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/HaitiLKM.jpg');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            Our Partnership with GreaterGood.com </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                            <p><strong>GreaterGood strives to connect a passionate audience with simple online tools to
                                    make the world a better place. They turn your desire to make a difference into
                                    tangible, documented support for charities that help people, save pets, and improve
                                    the planet. By connecting millions of caring people like you, GreaterGood has
                                    created an online community with real power to change the world.</strong></p>
                            <p>GreaterGood.com is proud to have given more than $50 million in cash grants to non-profit
                                charities around the world through GreaterGood.org since 1999.</p>
                            <p>Millions have received help and assistance because of your efforts: hungry families fed,
                                pets rescued, rainforests saved, breast cancer caught and treated, children helped to
                                achieve a brighter future, and so much more.</p>
                            <p>With so many simple, easy ways to be involved – from a free click to a direct donation
                                that funds a specific program – your smallest actions online matter.</p>
                        </div>


                        <div class="ui-media-panel-action-buttons">
                            <div class="ui-media-panel-action-button">
                                <a href="https://store.greatergood.com/collections/253-gifts-that-give-more"
                                   class="ui-action-button outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                   target="_blank">
                                    Browse Gifts That Give More™</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="flex-component-3" class="ui-media-panel media-left" style="background-color: #F6F6F6">

                <div class="ui-media-panel-media-pane">

                    <div class="ui-media-panel-photo"
                         style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/Rachael-Hurst-landscape-LGutierrez-SBuenos-Aires-Aug16-1a-copy.jpg');">
                        <div class="ui-media-panel-photo-overlay fx-none-color-background-color-05"></div>
                    </div>


                </div>

                <div class="container">

                    <div class="ui-media-panel-content-pane">

                        <h2 class="ui-media-panel-header" style="color:#000">
                            Our Financials </h2>

                        <div class="ui-hr ui-media-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>

                        <div class="ui-media-panel-paragraph" style="color:#000">
                            <p><a name="Financials"></a>We want you to know how your money is spent, and we only support
                                projects that demonstrate impact. We are audited yearly by an independent firm, and we
                                make our annual 990 statements public.</p>
                            <p>Download our most recent Audited Financials and IRS 990 forms here:</p>
                            <ul>
                                <li><a href="/wp-content/uploads/2019/05/2017-GGO-Form-990-Public-Disclosure-Copy.pdf">FYE2018
                                        IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2018/10/2017-0630-GreaterGood.org-Audit.pdf">FYE2017
                                        Audited Financials</a></li>
                                <li><a href="/wp-content/uploads/2018/10/2016-Form-990-Public-Disclosure-Copy.pdf">FYE2017
                                        IRS Form 990</a></li>
                                <li><a href="https://greatergood.org/wp-content/uploads/2017/10/FYE2016-GGO-990.pdf">FYE2016
                                        IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY15.pdf">FYE2015 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY14.pdf">FYE2014 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY13.pdf">FYE2013 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY12.pdf">FYE2012 IRS Form 990</a></li>
                                <li><a href="/wp-content/uploads/2016/11/990-FY11.pdf">FYE2011 IRS Form 990</a></li>
                            </ul>
                        </div>

                        <div class="ui-media-panel-statistic-grid">
                            <div class="row">
                                <div class="ui-media-panel-statistic-grid-item col-md-6">
                                    <div class="ui-statistic-grid-item">

                                        <div class="ui-statistic-grid-item-label">
                                            Spent on Programs in FY 2018
                                        </div>

                                        <div class="ui-statistic-grid-item-value fx-main-color-text">
                                            97.4%
                                        </div>

                                    </div>
                                </div>
                                <div class="ui-media-panel-statistic-grid-item col-md-6">
                                    <div class="ui-statistic-grid-item">

                                        <div class="ui-statistic-grid-item-label">
                                            Given in Grants in FY 2018
                                        </div>

                                        <div class="ui-statistic-grid-item-value fx-main-color-text">
                                            $43.6MM
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div id="team-panel-0d0cd88d5fd8b9cd47e25892e1f35d3c" class="ui-team-panel"
                 data-hash="0d0cd88d5fd8b9cd47e25892e1f35d3c">
                <div class="container">
                    <h2 class="ui-team-panel-header">Meet Our Staff</h2>
                    <div class="ui-hr ui-team-hr">
                        <hr class="fx-main-color-background-color-10"/>
                    </div>
                    <div class="ui-team-panel-grid">
                        <div class="row">

                            <div id="ui-team-panel-grid-item-cd4ca80fbe5cf071eee709e41ee18777"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/lizbaker.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Liz Baker</h3>
                                    <p class="ui-team-panel-title">Chief Executive Officer</p>


                                </div>

                                <script type="text/template" id="team-template-cd4ca80fbe5cf071eee709e41ee18777"
                                        class="team-template">
                                    <div id="expander-content-cd4ca80fbe5cf071eee709e41ee18777"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Liz Baker</h3>
                                                <p class="expander-content-title">Chief Executive Officer</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:lizbaker@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Liz</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Liz Baker joined
                                                    GreaterGood.org as CEO in 2012 working to protect people, pets & the
                                                    planet. Liz has overseen the creation of Greatergood.org signature
                                                    programs that address multiple issues ranging from hunger (Operation
                                                    Sandwich), education (Girls Right to Opportunity Worldwide, Girls'
                                                    Voices, and A Safe Ride to School), land conservation (Project
                                                    Wildcat and Madrean Discovery Expeditions) and animal welfare (Cats
                                                    R Cool, One Picture Saves a Life, Rescue Rebuild, Rescue Bank) and
                                                    veterans (Pets & Vets). <br/><br/>
                                                    In her previous role as Executive Director of the Petfinder.com
                                                    Foundation, Liz worked to distribute grants to adoption partners
                                                    across the U.S. Liz has also worked for Petfinder.com as Vice
                                                    President of Partner Relations, at Family Education Network as Vice
                                                    President of Digital Sales and Marketing, and at MeetingMakers.com
                                                    as Vice President of Operations. Liz lives in Tucson, Arizona with
                                                    her husband Doug, two daughters, 2 adopted pit bulls and 2 adopted
                                                    cats. From time to time, coyotes jump her five-foot fence and spend
                                                    the afternoon playing in the backyard with her dogs, reminding her
                                                    that we shouldn’t let barriers get in the way of our dreams.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-156dad50b97fe0a7f10de9562a26ac2e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Steve-Minter-e1524443502277-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Steve Minter</h3>
                                    <p class="ui-team-panel-title">Chief Operating Officer</p>


                                </div>

                                <script type="text/template" id="team-template-156dad50b97fe0a7f10de9562a26ac2e"
                                        class="team-template">
                                    <div id="expander-content-156dad50b97fe0a7f10de9562a26ac2e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Steve Minter</h3>
                                                <p class="expander-content-title">Chief Operating Officer</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft"></p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-5751bec93174164d39ac690be92edd47"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/09/anon-profile-pic-bun-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jemimah Okantey</h3>
                                    <p class="ui-team-panel-title">Chief Financial Officer</p>


                                </div>

                                <script type="text/template" id="team-template-5751bec93174164d39ac690be92edd47"
                                        class="team-template">
                                    <div id="expander-content-5751bec93174164d39ac690be92edd47"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jemimah Okantey</h3>
                                                <p class="expander-content-title">Chief Financial Officer</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Prior to joining
                                                    GreaterGood.org, Jemimah Okantey spent 12 years working for
                                                    GreaterGood.com in accounting. Since she has been involved with
                                                    GreaterGood.org since its inception in 2007, her experience and
                                                    familiarity with the organization is unique and valuable asset.
                                                    <br/><br/>
                                                    In her free time, Jemimah is involved in her local community working
                                                    with a youth and teen development recreation program.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-8ac9652e8c436510b280c6f3221c11ff"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/noahhorton1.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Noah Horton</h3>
                                    <p class="ui-team-panel-title">Chief Marketing Officer</p>


                                </div>

                                <script type="text/template" id="team-template-8ac9652e8c436510b280c6f3221c11ff"
                                        class="team-template">
                                    <div id="expander-content-8ac9652e8c436510b280c6f3221c11ff"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Noah Horton</h3>
                                                <p class="expander-content-title">Chief Marketing Officer</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:noahhorton@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Noah</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Noah Horton began working at
                                                    GreaterGood.org at the beginning of 2013. Prior to his work with
                                                    GreaterGood, he served as Assistant Director for Petfinder
                                                    Foundation, where he helped foster corporate and charitable
                                                    relationships to help end the euthanasia of adoptable pets. At
                                                    GreaterGood.org, he is continuing his work creating lasting and
                                                    productive partnerships that work toward our mission of protecting
                                                    people, pets, and the planet. Noah lives in Tucson, AZ with his
                                                    lovely wife, their cat Raja, and their dog Willow. </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-c750c53b6a7bba9d888bded17331228b"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/elizabeth_bio-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Elizabeth Asher</h3>
                                    <p class="ui-team-panel-title">Founder and Director - Rescue Bank Program</p>


                                </div>

                                <script type="text/template" id="team-template-c750c53b6a7bba9d888bded17331228b"
                                        class="team-template">
                                    <div id="expander-content-c750c53b6a7bba9d888bded17331228b"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Elizabeth Asher</h3>
                                                <p class="expander-content-title">Founder and Director - Rescue Bank
                                                    Program</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:elizabethasher@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Elizabeth</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Elizabeth Asher is a
                                                    co-founder and the Executive Director of Rescue Bank, a
                                                    GreaterGood.org signature program. Beginning in 2006, Elizabeth led
                                                    the team that grew Rescue Bank first to regional stature in the Gulf
                                                    Coast area, and then to a national presence starting in 2011. She is
                                                    responsible for maintaining strategic focus, guiding the delivery
                                                    team leads and managing governance and legal affairs.
                                                    <br/><br/>
                                                    Elizabeth’s animal welfare experience covers more than 30 years of
                                                    volunteering for rescue, foster and feral cat feeding, forming
                                                    rescue non-profits and serving on non-profit Boards. As Chair of the
                                                    Animal Law Section, Houston Bar Association, Elizabeth inaugurated
                                                    legal seminars for the rescue community, now an annual event for
                                                    rescues, shelters and public officials.
                                                    <br/><br/>
                                                    Prior to starting her legal career, Elizabeth studied criminal
                                                    justice and served as a Victim Witness Coordinator for the Harris
                                                    County Probation Department. Her dogs, Buddy, Zelda and Lavender,
                                                    and her cats, Gabriel and Rafael, help maintain the house while she
                                                    works on Rescue Bank.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-ca543980dc52a8537a987f67dd28656e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/jenfermon.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jennifer Fermon</h3>
                                    <p class="ui-team-panel-title">Director of Impact</p>


                                </div>

                                <script type="text/template" id="team-template-ca543980dc52a8537a987f67dd28656e"
                                        class="team-template">
                                    <div id="expander-content-ca543980dc52a8537a987f67dd28656e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jennifer Fermon</h3>
                                                <p class="expander-content-title">Director of Impact</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:jennifer@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Jennifer</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Jennifer Fermon is Director
                                                    of Impact for GreaterGood.org, formerly SVP of Strategic Development
                                                    at Seattle-based CharityUSA.com, LLC. Jennifer is keenly interested
                                                    in the creative intersection of on and offline technologies with
                                                    big-picture problem solving and policy to get at the guts of our
                                                    most pressing humanitarian and environmental concerns.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-4a53400ba31269e89e17acbb303cc58e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/dafnyvogel.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Dafny Vogel</h3>
                                    <p class="ui-team-panel-title">Director of Digital Donor Engagement</p>


                                </div>

                                <script type="text/template" id="team-template-4a53400ba31269e89e17acbb303cc58e"
                                        class="team-template">
                                    <div id="expander-content-4a53400ba31269e89e17acbb303cc58e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Dafny Vogel</h3>
                                                <p class="expander-content-title">Director of Digital Donor
                                                    Engagement</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:dafny@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Dafny</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Dafny Vogel joined
                                                    GreaterGood.org after over 7 years working in ad operations at
                                                    GreaterGood.com. During Dafny’s tenure, first as a team member and
                                                    then as manager, she helped grow the company’s publishing side of
                                                    the business by turning the initial network advertising efforts into
                                                    a multi-million dollar revenue line. Her knack for data analysis and
                                                    marketing experience helps GreaterGood.org in its overall marketing
                                                    strategy and donor relationships.<br/><br/>
                                                    Born and raised in the island of Cebu in the Philippines, Dafny has
                                                    first-hand experience living with limited resources. While Dafny is
                                                    passionate about all the programs and global causes that
                                                    GreaterGood.org supports, she will always have a soft spot for
                                                    school programs for girls. She feels very fortunate to have been
                                                    able to attain a good education, and she would love to see other
                                                    girls all over the world have the same opportunities she was
                                                    given.<br/><br/>
                                                    Dafny calls the Seattle area home with her husband, Stuart. They
                                                    enjoy hiking the great Pacific Northwest trails and riding around on
                                                    their motorcycle. While you can find her in Seattle all summer long
                                                    reading and dining with friends, she is also known to wander off to
                                                    different parts of the globe. Dafny finds inspiration and lessons
                                                    from all her travels, whether it’s haggling at the markets of
                                                    Bangkok, getting lost in the back alleys of Prague, or partaking in
                                                    Munich’s Oktoberfest celebrations. No matter if she’s at home or on
                                                    the road, Dafny is looking forward to helping more people around the
                                                    world.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-629f676e47fd348121e6fa3957e828b4"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2017/04/17814166_10107723819286131_561074266_n-300x400.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jim Kober</h3>
                                    <p class="ui-team-panel-title">Director of Content</p>


                                </div>

                                <script type="text/template" id="team-template-629f676e47fd348121e6fa3957e828b4"
                                        class="team-template">
                                    <div id="expander-content-629f676e47fd348121e6fa3957e828b4"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jim Kober</h3>
                                                <p class="expander-content-title">Director of Content</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:jimkober@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Jim</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Jim has worked with
                                                    nonprofits since he was an undergrad at the University of Arizona.
                                                    He holds a BA in Creative Writing and a Master’s in Public
                                                    Administration. The opportunity to help bring about positive change
                                                    on an international level with GreaterGood.org is one that Jim is
                                                    incredibly grateful for and inspired by every day. <br/><br/>A
                                                    native Arizonan, he has called Tucson home for 26 years. Prior to
                                                    his work at GreaterGood.org, Jim served for two years as the
                                                    Executive Director of the Native American Advancement Foundation.
                                                    Outside of work, Jim enjoys hiking the many mountain ranges
                                                    surrounding Tucson, reading, and spending time with friends and
                                                    family.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-2d216342f634caf10fc124e71f48145c"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/03/Denise-St-Jean-HeadShot-.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Denise St. Jean</h3>
                                    <p class="ui-team-panel-title">Public Relations Director</p>


                                </div>

                                <script type="text/template" id="team-template-2d216342f634caf10fc124e71f48145c"
                                        class="team-template">
                                    <div id="expander-content-2d216342f634caf10fc124e71f48145c"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Denise St. Jean</h3>
                                                <p class="expander-content-title">Public Relations Director</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:dsj@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Denise</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Denise St. Jean has
                                                    strategically and successfully executed PR campaigns over the years
                                                    for nonprofit and corporate organizations.<br/><br/>Denise’s PR
                                                    history in animal welfare and the pet space includes Guide Dogs for
                                                    the Blind, Wings of Rescue, Mini Therapy Horses, Grazin' Pig Acres,
                                                    Halo, Purely for Pets, Cloud Star pet products, and the PBS TV
                                                    series “Shelter Me.” In the human welfare vertical, Denise's
                                                    experience includes the Avon Breast Cancer 3-Days and Tanqueray’s
                                                    American AIDS Rides. Additional highlights of her career include
                                                    everything from integrated marketing campaigns for big brands like
                                                    General Motors and Diet Coke, to smaller brands like See's Candies
                                                    and POPSUGAR. <br/><br/>On a personal note, Denise grew up in a
                                                    house where they nurtured all creatures, great and small, her mom
                                                    ran a dog rescue and her sister is a veterinarian. She currently
                                                    lives in San Diego, Calif. with her dog Crumpet.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-62dbcfcc715a97711e1ec018ba556c90"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/10/rowena-headshot.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Rowena Koenig</h3>
                                    <p class="ui-team-panel-title">Director of Partnerships</p>


                                </div>

                                <script type="text/template" id="team-template-62dbcfcc715a97711e1ec018ba556c90"
                                        class="team-template">
                                    <div id="expander-content-62dbcfcc715a97711e1ec018ba556c90"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Rowena Koenig</h3>
                                                <p class="expander-content-title">Director of Partnerships</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:Rowenakoenig@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Rowena</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Rowena has helped visionary
                                                    organizations change the world by connecting them with the
                                                    supporters and champions who make change possible. Prior to joining
                                                    GreaterGood.org as Director of Partnerships, she worked with
                                                    nonprofits including the Sierra Club, Animal Defenders
                                                    International, and the Constitutional Rights Foundation. Based in
                                                    Los Angeles, she enjoys hiking trips with her husband and their
                                                    gentle, giant dog, and backyard gardening in the company of a small
                                                    flock of rescued hens.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-e3b4cccb2485118cb4fbdb0d7080b6ad"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/patriciacogley.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Patricia Cogley</h3>
                                    <p class="ui-team-panel-title">Director of Girls' Voices</p>


                                </div>

                                <script type="text/template" id="team-template-e3b4cccb2485118cb4fbdb0d7080b6ad"
                                        class="team-template">
                                    <div id="expander-content-e3b4cccb2485118cb4fbdb0d7080b6ad"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Patricia Cogley</h3>
                                                <p class="expander-content-title">Director of Girls' Voices</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:patriciacogley@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Patricia</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Patricia Cogley comes to
                                                    GreaterGood.org with a background in philanthropy and international
                                                    education, and experience scaling award-winning social impact
                                                    programs for corporations and large non-profits. She loves designing
                                                    people-centered programs to scale, with a laser-focus on long-term
                                                    sustainable impact. Recognized for being the “heart and mind” behind
                                                    Adobe Youth Voices, Adobe’s signature philanthropy initiative, she
                                                    led a program that inspired STEM and creative skills among 250,000
                                                    young people in 70 countries. Previous to Adobe she developed
                                                    YouthLink, a digital media program for young people in the Bay Area,
                                                    and recent winner of the President’s National Arts and Humanities
                                                    Youth Program Awards. She believes in combining breadth and depth in
                                                    social impact programs, creating authentic and rewarding
                                                    partnerships, and building on people’s innate altruism, creativity,
                                                    and interest in making a difference. She is delighted to bring her
                                                    passion to the GreaterGood.org community to develop our impact
                                                    framework, amplify our signature programs, and create more
                                                    opportunities for impact storytelling among the GreaterGood.org
                                                    community. She holds a Masters in International Education and Human
                                                    Rights from University of San Francisco, and a B.A. in American
                                                    Studies from Wesleyan University. When she is not supporting
                                                    creative social innovation projects, she is hiking in the woods,
                                                    cooking a big meal for her friends, or teaching her rescue dog and
                                                    cat to get along. </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-d0a18f86b4832b16cfc55fd79075a662"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/susanrosenberg.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Susan Rosenberg</h3>
                                    <p class="ui-team-panel-title">Director of International Animal Programs</p>


                                </div>

                                <script type="text/template" id="team-template-d0a18f86b4832b16cfc55fd79075a662"
                                        class="team-template">
                                    <div id="expander-content-d0a18f86b4832b16cfc55fd79075a662"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Susan Rosenberg</h3>
                                                <p class="expander-content-title">Director of International Animal
                                                    Programs</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:susan.rosenberg@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Susan</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">You may know Susan from Petco
                                                    and Petco Foundation, where Susan spent almost 16 years. Her passion
                                                    for animals was discovered at a very young age when their neighbor
                                                    reported to her mother that little 8 year old Susan was creating her
                                                    own zoo in the family’s backyard. When her mother went out to
                                                    investigate, she found that Susan was carefully taking care of many
                                                    unwanted and abandoned neighborhood animals with her weekly
                                                    allowance. She even rescued a few that didn’t really need it, so her
                                                    mother promptly returned their neighbor’s cat stating that ‘Susan
                                                    really doesn’t like cats to be left outside by their family so she
                                                    took yours.’ A life in animal welfare was her destiny.<br/><br/>
                                                    Spending eight years working side by side with Paul Jolly, Petco
                                                    Foundation Executive Director (retired), Susan learned an
                                                    instrumental lesson for passion, hard work, dedication and a “get it
                                                    done” work ethic. Working tirelessly to make a difference is what
                                                    you will always hear about Susan, which is why we just had to get
                                                    her on our team. Susan prides herself as being able to give funding
                                                    away as fast as it can be raised. A popular public speaker, FEMA
                                                    certified, Ready San Diego Sector Chair, marathon shoe shopper, CA
                                                    Humane Academy graduate, fundraising award winner and an expert in
                                                    handling disaster events that include animals, Susan manages several
                                                    exciting and rewarding programs.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-45f3a95240d6f3f7cba8b1a538dd5b1b"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/denisebash.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Denise Bash</h3>
                                    <p class="ui-team-panel-title">Director of Disaster Response</p>


                                </div>

                                <script type="text/template" id="team-template-45f3a95240d6f3f7cba8b1a538dd5b1b"
                                        class="team-template">
                                    <div id="expander-content-45f3a95240d6f3f7cba8b1a538dd5b1b"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Denise Bash</h3>
                                                <p class="expander-content-title">Director of Disaster Response</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:denisebash@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Denise</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Denise works closely with our
                                                    partner organizations to develop and fund programs that support
                                                    people, pets and the planet. After working for years in not for
                                                    profit management, Denise has a passion for empowering grass roots
                                                    organizations. She also has an extensive background in animal
                                                    disaster response and leads GreaterGood.org’s efforts to assist our
                                                    partners in natural and manmade calamity. She is the co-founder of
                                                    our signature program Rescue Rebuild.<br/><br/>
                                                    Denise spends a lot of her personal time active in her community.
                                                    She volunteers for Animal Lifeline, an organization she founded in
                                                    2006 which focuses on animal rescue and spay and neuter. Denise
                                                    lives with her family and pets in Doylestown, Pennsylvania.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-56ecac23334f0e7cfb7dc80896cf5663"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/tomvandevender.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Tom Van Devender</h3>
                                    <p class="ui-team-panel-title">Director of Biodiversity Programs</p>


                                </div>

                                <script type="text/template" id="team-template-56ecac23334f0e7cfb7dc80896cf5663"
                                        class="team-template">
                                    <div id="expander-content-56ecac23334f0e7cfb7dc80896cf5663"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Tom Van Devender</h3>
                                                <p class="expander-content-title">Director of Biodiversity Programs</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:vandevender@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Tom</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Thomas R. Van Devender was
                                                    the Senior Research Scientist at the Arizona-Sonora Desert Museum
                                                    for 25 years, where he conducted research on a broad range of
                                                    natural history topics. He has published well over a hundred
                                                    publications on a range of topics, including natural history,
                                                    paleoecology, desert grasslands, desert tortoise ecology, local
                                                    floras, ethnobotany, herpetofaunas and the Madrean Archipelago. Tom
                                                    is interested in the natural history of many areas in Sonora,
                                                    especially the Madrean the Sky Island mountain ranges, the la
                                                    Frontera zone within 100 km of the Arizona border, the Yécora area
                                                    in the Sierra Madre Occidental, and tropical deciduous forest in the
                                                    Álamos area.<br/><br/>
                                                    In May 2015, Tom began as the Director of Biodiversity Programs at
                                                    GreaterGood.org, where he organizes biodiversity inventories to
                                                    Sonoran Sky Islands in the Madrean Discovery Expeditions (MDE)
                                                    program and manages a Predator Conservation Program. From 2009 to
                                                    2014, Tom was the Manager of the Madrean Archipelago Biodiversity
                                                    Assessment (MABA) project at Sky Island Alliance. MABA documented
                                                    the diversity of animals and plants in the 35 isolated Sky Island
                                                    ranges and complexes in Sonora, Mexico. These biological records and
                                                    high-resolution images are available to support conservation
                                                    activities in the region. Tom has organized ten binational
                                                    expeditions with large volunteer groups of taxonomic specialists,
                                                    land managers, college professors and students, local residents,
                                                    photographers, and journalists to make new observations in
                                                    high-diversity areas in Sky Island ranges in Sonora.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-10e39d61afb4ffbd675ea23abf0457c2"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/IMG_3479-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Mario Cirett</h3>
                                    <p class="ui-team-panel-title">Madrean Discovery Expeditions Program Manager</p>


                                </div>

                                <script type="text/template" id="team-template-10e39d61afb4ffbd675ea23abf0457c2"
                                        class="team-template">
                                    <div id="expander-content-10e39d61afb4ffbd675ea23abf0457c2"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Mario Cirett</h3>
                                                <p class="expander-content-title">Madrean Discovery Expeditions Program
                                                    Manager</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft"></p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-cc508618785edd4a76cd7a29b7d6a672"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/brynadonnelly.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Bryna Donnelly</h3>
                                    <p class="ui-team-panel-title">Director of Rescue Rebuild, Family & Pet Projects</p>


                                </div>

                                <script type="text/template" id="team-template-cc508618785edd4a76cd7a29b7d6a672"
                                        class="team-template">
                                    <div id="expander-content-cc508618785edd4a76cd7a29b7d6a672"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Bryna Donnelly</h3>
                                                <p class="expander-content-title">Director of Rescue Rebuild, Family &
                                                    Pet Projects</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:brynadonnelly@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Bryna</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Dr. Bryna Donnelly is the
                                                    Director of Safe Haven, GreaterGood.org’s domestic violence shelter
                                                    renovation program. She is also the cofounder of GreaterGood.org’s
                                                    animal shelter renovation program, Rescue Rebuild. Before leaving
                                                    her job as a college biology professor in 2012, she traveled during
                                                    school breaks with college students rehabilitating animal shelters
                                                    in need with Rescue Rebuild. Teaching volunteers how they can enrich
                                                    the lives of animals and their caretakers with time and a little
                                                    hard work is her passion. She now brings that love of animals and
                                                    desire to help women and veterans to GreaterGood.org’s Safe Haven
                                                    program. Bryna has renovated over 125 shelters and will now be
                                                    expanding that to help provide shelters with lifesaving food and
                                                    supplies. Bryna currently lives in East Greenville, Pennsylvania
                                                    with her three dogs and very patient boyfriend.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-56182ea224eb4d31fb4dd6b97bd507ea"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/suevilsack.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Sue Vilsack</h3>
                                    <p class="ui-team-panel-title">National Programs and Logistics Director - Rescue
                                        Bank Program</p>


                                </div>

                                <script type="text/template" id="team-template-56182ea224eb4d31fb4dd6b97bd507ea"
                                        class="team-template">
                                    <div id="expander-content-56182ea224eb4d31fb4dd6b97bd507ea"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Sue Vilsack</h3>
                                                <p class="expander-content-title">National Programs and Logistics
                                                    Director - Rescue Bank Program</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:suevilsack@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Sue</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Sue Vilsack started with
                                                    Rescue Bank in late 2011, soon becoming the National Programs and
                                                    Logistics Director. She works with name brand manufacturers and
                                                    manages the process for transporting the donations they offer to our
                                                    regional distribution centers. She oversees our processes for
                                                    registering recipient groups and assuring equitable distribution of
                                                    donated product.<br/><br/>
                                                    Sue has been rescuing mastiffs and other large breeds since the
                                                    90’s, focusing recently on raising funds for other mastiff rescues
                                                    across the US. Her experience includes work as a corporate
                                                    paralegal, volunteering as a Girl Scout leader, building a service
                                                    business in Florida, helping run a motorcycle shop, and providing
                                                    accounting and administration services for small business
                                                    owners.<br/><br/>
                                                    Sue enjoys reading, gardening (spending hours planting beautiful
                                                    flowers and then forgetting to water them), sea shelling and garage
                                                    sales. She currently resides in Kingwood, Texas with several
                                                    mastiffs and continues her search for that elusive natural cleaner
                                                    that removes drool from walls.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-868f028d551c8e7d0ad98266d3f58c0e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/01/20141206_170128-300x329.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Brooke Nowak</h3>
                                    <p class="ui-team-panel-title">Director of People and Planet Programs</p>


                                </div>

                                <script type="text/template" id="team-template-868f028d551c8e7d0ad98266d3f58c0e"
                                        class="team-template">
                                    <div id="expander-content-868f028d551c8e7d0ad98266d3f58c0e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Brooke Nowak</h3>
                                                <p class="expander-content-title">Director of People and Planet
                                                    Programs</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">For the past six years,
                                                    Brooke was part of the Executive leadership team of the Southern
                                                    Arizona based nonprofit, TMM Family Services. Prior to joining the
                                                    nonprofit world, Brooke was part of the corporate team of Fox
                                                    Restaurant Concepts during the development of the company. In 2011,
                                                    Brooke moved to Nairobi, Kenya to volunteer in the Kenyan
                                                    government’s crisis center for kids removed from the homes due to
                                                    abuse as well as for children considered “lost”. Her experiences in
                                                    Africa are what helped Brooke recognize that her true calling is to
                                                    serve.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-e9afa5ec631379e7607d92191353ffdc"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/zachbaker.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Zach Baker</h3>
                                    <p class="ui-team-panel-title">Director of Rescue Rebuild, Animal Shelter
                                        Projects</p>


                                </div>

                                <script type="text/template" id="team-template-e9afa5ec631379e7607d92191353ffdc"
                                        class="team-template">
                                    <div id="expander-content-e9afa5ec631379e7607d92191353ffdc"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Zach Baker</h3>
                                                <p class="expander-content-title">Director of Rescue Rebuild, Animal
                                                    Shelter Projects</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:zachbaker@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Zach</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Zach Baker began working with
                                                    Rescue Rebuild in April 2016, after having volunteered with the
                                                    program for 5 years. Zach graduated from Delaware Valley University
                                                    in 2011 with a degree in Business Administration; and after working
                                                    in various carpentry positions, opened his own home improvement
                                                    business which he operated for 4 years.<br/><br/>
                                                    Zach has had a love of animals since childhood having grown up with
                                                    cats and dogs; he is very excited to be able to combine his passion
                                                    for animals and his carpentry expertise. Zach currently lives in
                                                    Fountainville, PA with his beautiful wife Ashley and their two cats.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-62944025b750575e7ab117f03142e27f"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/melissavecera.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Melissa Vecera</h3>
                                    <p class="ui-team-panel-title">Director of In-Kind Operations</p>


                                </div>

                                <script type="text/template" id="team-template-62944025b750575e7ab117f03142e27f"
                                        class="team-template">
                                    <div id="expander-content-62944025b750575e7ab117f03142e27f"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Melissa Vecera</h3>
                                                <p class="expander-content-title">Director of In-Kind Operations</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:melissavecera@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Melissa</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Prior to joining the
                                                    GreaterGood.org team, she was on the Petfinder shelter outreach team
                                                    for four years, where she managed the nationwide Adoption Options
                                                    conference series. In her role as Shelter Outreach Specialist, she
                                                    managed all aspects of the strategic direction and successful
                                                    implementation of the program. She traveled to nearly 70 different
                                                    cities across the country to bring the latest animal welfare
                                                    knowledge to local communities, reaching thousands of animal welfare
                                                    professionals in-person. In addition to managing Adoption Options,
                                                    she traveled to regional and national animal welfare conferences,
                                                    presenting to crowds ranging from 30-1,300 people.<br/><br/>
                                                    She has 10 years of animal welfare volunteer experience, including
                                                    writing press releases and attending meet-and-greet events on behalf
                                                    of the Mid-Atlantic Great Dane Rescue League, Inc., and hands-on
                                                    shelter experience at the MD SPCA. She calls Maryland home, and
                                                    shares it with her dachshund named Lily, her forever foster cat,
                                                    Betty, and her grumpy hedgehog named Olive.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-0ee13879d6b22e0a28c33688bb26934e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/07/sara-headshot-300x319.jpeg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Sára Varsa</h3>
                                    <p class="ui-team-panel-title">Director of Special Projects</p>


                                </div>

                                <script type="text/template" id="team-template-0ee13879d6b22e0a28c33688bb26934e"
                                        class="team-template">
                                    <div id="expander-content-0ee13879d6b22e0a28c33688bb26934e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Sára Varsa</h3>
                                                <p class="expander-content-title">Director of Special Projects</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:svarsa@greatergood.org"
                                                           class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                           target="_blank">
                                                            Email Sara</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">S&aacute;ra has joined the
                                                    GreaterGood family as the Director of Special Projects. She most
                                                    recently served as the Vice President for the Humane Society of the
                                                    United State’s Animal Rescue Team. She oversaw hundreds of responses
                                                    to man-made and natural disasters that resulted in the rescue of
                                                    thousands of creatures from cats and dogs to exotic and farm
                                                    animals. She trained and consulted law enforcement agencies, animal
                                                    shelters, and animal advocates on everything from how to identify
                                                    animal cruelty all the way to ICS in disaster response. Her
                                                    professional experience in animal welfare as the Director of
                                                    Operations at a limited admission shelter, and for many years in the
                                                    veterinary service field all began at a young age when she was
                                                    encouraged to pursue her love of animals while working with horses.
                                                    <br/><br/>
                                                    Sára shares her home with her two young children, and a rescue dog
                                                    and cat. She feels most connected hiking in the woods or seeing the
                                                    world through the ears of a horse while riding on a trail.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-7d7a0d9f5c03d0d35826e60c3878d231"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/seancherry.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Sean Cherry</h3>
                                    <p class="ui-team-panel-title">Senior Digital Marketing Manager</p>


                                </div>

                                <script type="text/template" id="team-template-7d7a0d9f5c03d0d35826e60c3878d231"
                                        class="team-template">
                                    <div id="expander-content-7d7a0d9f5c03d0d35826e60c3878d231"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Sean Cherry</h3>
                                                <p class="expander-content-title">Senior Digital Marketing Manager</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:seancherry@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Sean</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">After working in Real Estate,
                                                    Sean decided to switch his career path to a more fulfilling and
                                                    rewarding endeavor. He has a deep passion for positively
                                                    contributing to causes on a global level and GreaterGood.org was the
                                                    perfect opportunity to fulfill this desire.<br/><br/>
                                                    Previously, he conducted on-site low-income housing research in over
                                                    100 markets in 35 states across the country. Outside of work, you
                                                    may find him daydreaming in a remote location.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-bdc6ccb80630b3f6678e2dfa37ccdf6a"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2017/09/IMG_3724-300x344.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Ashlee Marinez</h3>
                                    <p class="ui-team-panel-title">Senior Email Marketing Manager</p>


                                </div>

                                <script type="text/template" id="team-template-bdc6ccb80630b3f6678e2dfa37ccdf6a"
                                        class="team-template">
                                    <div id="expander-content-bdc6ccb80630b3f6678e2dfa37ccdf6a"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Ashlee Marinez</h3>
                                                <p class="expander-content-title">Senior Email Marketing Manager</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:ashleemarinez@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Ashlee</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Ashlee received her Bachelor
                                                    of Arts degree in Communications from the University of Arizona.
                                                    After interning with the Native American Advancement Foundation for
                                                    a year, wanting to work for a nonprofit was a clear choice! She has
                                                    now worked her way up to Senior Email Marketing Manager.
                                                    <br/><br/>
                                                    Having lived in Tucson most of her life, when she’s not at the
                                                    GreaterGood offices she can be found enjoying local Tucson events,
                                                    catching a concert with friends, or lounging by the pool.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-73cbf2a17ac1d2374cf80ea36a5f700a"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/brittanyjohn.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Brittany John</h3>
                                    <p class="ui-team-panel-title">Manager of Education Programs</p>


                                </div>

                                <script type="text/template" id="team-template-73cbf2a17ac1d2374cf80ea36a5f700a"
                                        class="team-template">
                                    <div id="expander-content-73cbf2a17ac1d2374cf80ea36a5f700a"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Brittany John</h3>
                                                <p class="expander-content-title">Manager of Education Programs</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:brittanyjohn@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Brittany</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Brittany joined Greater Good
                                                    after receiving her master’s degree in International Development,
                                                    with an emphasis on social impact investing, from the University of
                                                    Arizona. She is excited to join the GreaterGood team as the Manager
                                                    of Education Programs. In this new role, Brittany administers
                                                    signature programs such as Girls' Voices, literacy programs, the
                                                    Mirwais Mena bus program in Afghanistan providing safe
                                                    transportation to school for girls, and the Mae Tao Clinic for
                                                    Burmese refugees.<br/><br/>
                                                    She previously worked as the Finance Manager for International
                                                    Studies Association (Non Profit), an academic organization that
                                                    worked to connect political scientists around the world. Her
                                                    experience in international development work includes the creation
                                                    of an impact assessment for a uniquely modeled entrepreneurship &
                                                    leadership institute in Benin, West Africa. The purpose of the
                                                    analysis was to better understand how a particular education model
                                                    (built on principles of small business development and leadership)
                                                    was responding to the incredibly high rates of unemployment among
                                                    educated people, as well as how the school was tackling poverty in
                                                    Benin as compared to traditional educational models.<br/><br/>
                                                    Brittany holds a certification in social impact investing from the
                                                    Monterey Institute for International Studies for her ability to
                                                    understand and more appropriately evaluate the true effectiveness of
                                                    investments on effected livelihoods and communities. Additionally,
                                                    her experience as an investment analyst advisor for the Global
                                                    Alliance for Clean Cookstoves expanded her understanding of the
                                                    importance of increasing awareness and demand for the use of clean
                                                    cookstoves in developing countries, as it relates to the
                                                    environment, fossil fuel use and health (especially for women and
                                                    children).<br/><br/>
                                                    Brittany is committed to approaching her work with compassion as
                                                    well as a sedulous fervor to address root causes of injustice and
                                                    inequities in a creative and innovative manner. She deeply values
                                                    integrity and loyalty to those with whom she works and hopes to
                                                    build indelible bridges between our world and the world of those who
                                                    are impacted by the GreaterGood’s projects to create a more
                                                    equitable and connected planet.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-63a1dbfba802f7d981e46c22c0d9b9ae"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/Kathy-and-Springer.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Kathy Poritzky</h3>
                                    <p class="ui-team-panel-title">Operations Manager - Rescue Bank Program</p>


                                </div>

                                <script type="text/template" id="team-template-63a1dbfba802f7d981e46c22c0d9b9ae"
                                        class="team-template">
                                    <div id="expander-content-63a1dbfba802f7d981e46c22c0d9b9ae"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Kathy Poritzky</h3>
                                                <p class="expander-content-title">Operations Manager - Rescue Bank
                                                    Program</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:kathy@rescuebank.org"
                                                           class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                           target="_blank">
                                                            Email Kathy</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">At Rescue Bank, Kathy’s role
                                                    is to process all recipient applications and liaise with the
                                                    recipients and affiliates to make sure it is a smooth process. She
                                                    also works with Pedigree for Shelters program, providing the food
                                                    from our donors to area Shelters. Prior to joining GreaterGood.org’s
                                                    Rescue Bank, she worked in the Telephone electronics and Oil and Gas
                                                    industry, her role was in accounting and logistics. Kathy is a
                                                    passionate animal lover, she works with local rescues to transport
                                                    stranded animals to the rescues. She has never met an animal that
                                                    she has not fallen in love with. Kathy is the proud owner of
                                                    Springer and Reddick her two baby boys!</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-c0df856a9c7c1c0cba5c8d0db1607c5e"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Melanie-bio-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Melanie Meadows</h3>
                                    <p class="ui-team-panel-title">Affiliates Manager - Rescue Bank Program</p>


                                </div>

                                <script type="text/template" id="team-template-c0df856a9c7c1c0cba5c8d0db1607c5e"
                                        class="team-template">
                                    <div id="expander-content-c0df856a9c7c1c0cba5c8d0db1607c5e"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Melanie Meadows</h3>
                                                <p class="expander-content-title">Affiliates Manager - Rescue Bank
                                                    Program</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:melaniemeadows@greatergood.org"
                                                           class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color track-click"
                                                           target="_blank">
                                                            Email Melanie</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">At Rescue Bank, Melanie’s
                                                    role is to liaise with the warehouses that store and distribute
                                                    donations of animal food to ensure that the food is getting to the
                                                    shelters and rescues that need it.

                                                    Prior to joining Rescue Bank, she worked in the oil and gas industry
                                                    in the fields of health, safety, and environment and social
                                                    responsibility.
                                                    Melanie is passionate about animal welfare and has volunteered in
                                                    shelters, fostered pets, and maintained shelter websites to promote
                                                    the adoption of long-term cats and dogs.

                                                    She is Mom to the two best dogs in the world-Toby and Tyler, and a
                                                    gorgeous American Bobtail cat called Bobbie!
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-3921e0218cf9cb2fc585a755fb3409c6"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/christie-bio-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Christie Rogero</h3>
                                    <p class="ui-team-panel-title">Program Manager - The Jackson Galaxy Project</p>


                                </div>

                                <script type="text/template" id="team-template-3921e0218cf9cb2fc585a755fb3409c6"
                                        class="team-template">
                                    <div id="expander-content-3921e0218cf9cb2fc585a755fb3409c6"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Christie Rogero</h3>
                                                <p class="expander-content-title">Program Manager - The Jackson Galaxy
                                                    Project</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:christierogero@greatergood.org"
                                                           class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color track-click"
                                                           target="_blank">
                                                            Email Christie</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Christie Rogero has worked in
                                                    the animal welfare field since 2004, after spending the earlier part
                                                    of her professional career working in nonprofit theatre
                                                    administration. At Philadelphia-area animal welfare organizations
                                                    she managed mobile spay/neuter programs and developed multi-year,
                                                    targeted, feline spay/neuter plans to reduce shelter intake and
                                                    euthanasia. Christie also worked extensively on model
                                                    Trap-Neuter-Return (TNR) legislation for local municipalities, and
                                                    on several community cat initiatives to expand training
                                                    opportunities and TNR resources for community cat caregivers. In
                                                    addition, she managed the Pets for Life Camden program and later
                                                    served as the coordinator for the Pets for Life Philadelphia
                                                    program, providing access to veterinary services in some of the most
                                                    under-resourced neighborhoods in the country. In 2015, she joined
                                                    The Jackson Galaxy Project, where she managed and helped to develop
                                                    the program's signature initiative, Cat Pawsitive. <br/><br/>
                                                    Christie serves on the advisory board of the Harcum College
                                                    Veterinary Technology program, and she and her husband are the proud
                                                    parents of several indoor cats and a small colony of community cats.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-56ec81c89ae1dc774e379ebc826516ec"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/09/tammy_miller_headshot-300x288.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Tammy Miller</h3>
                                    <p class="ui-team-panel-title">Coordinator of The Jackson Galaxy Project and Cat
                                        Pawsitive</p>


                                </div>

                                <script type="text/template" id="team-template-56ec81c89ae1dc774e379ebc826516ec"
                                        class="team-template">
                                    <div id="expander-content-56ec81c89ae1dc774e379ebc826516ec"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Tammy Miller</h3>
                                                <p class="expander-content-title">Coordinator of The Jackson Galaxy
                                                    Project and Cat Pawsitive</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:tammymiller@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Tammy</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">After spending over ten years
                                                    in the Design and Architecture field, Tammy Miller transitioned her
                                                    career to animal welfare after being inspired as a volunteer and
                                                    foster parent at Philadelphia Animal Welfare Society (PAWS). In
                                                    2015, she began a seasonal kitten care position at Philly's open
                                                    intake shelter, ACCT Philly. She quickly discovered a deep love for
                                                    shelter felines and advocating for them. A year later, she became
                                                    the shelter’s Feline Programs Coordinator. In this role, she worked
                                                    on several processes and programs to help manage capacity for care,
                                                    shorten length of stay, and improve the quality of life for the cats
                                                    living at the shelter. ACCT Philly proudly participated in Cat
                                                    Pawsitive Pro in 2017 with Tammy as Team Leader. Today, she is
                                                    thrilled to be working for GreaterGood.org to help shelters across
                                                    the country discover the value of positive reinforcement training
                                                    through the Cat Pawsitive Program!

                                                    Tammy and her husband still love to foster cats and are guardians of
                                                    a small pride of indoor kitties.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-76a61a216b3fe76a0e1c5b071e90d3bc"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/01/matt-rr-headshot-300x274.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Matthew Russick</h3>
                                    <p class="ui-team-panel-title">Program Manager - Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-76a61a216b3fe76a0e1c5b071e90d3bc"
                                        class="team-template">
                                    <div id="expander-content-76a61a216b3fe76a0e1c5b071e90d3bc"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Matthew Russick</h3>
                                                <p class="expander-content-title">Program Manager - Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:matthewrussick@greatergood.org"
                                                           class="ui-action-button solid fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                                                           target="_blank">
                                                            Email Matt</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">As a volunteer and a
                                                    contractor for 3 years, Matthew knew what he was getting into when
                                                    he joined Rescue Rebuild full-time! His diverse background in all
                                                    types of construction and heavy equipment operating has uniquely
                                                    prepared him for every type of project that Rescue Rebuild gets
                                                    into. He has built countless catios, play yards, and cat rooms. He
                                                    gained his nickname “Lucky” because he has a knack for being quite
                                                    the opposite. He has the record for having changed the most flat
                                                    tires on the Rescue Rebuild trailer!</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-39b60d436dcf53b98914524de4d6a7a8"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/01/kim-rr-headshot-300x285.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Kimberly Spina</h3>
                                    <p class="ui-team-panel-title">Program Manager - Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-39b60d436dcf53b98914524de4d6a7a8"
                                        class="team-template">
                                    <div id="expander-content-39b60d436dcf53b98914524de4d6a7a8"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Kimberly Spina</h3>
                                                <p class="expander-content-title">Program Manager - Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">An animal lover to the max.
                                                    In fact, if you ever can’t find her during a Rescue Rebuild build,
                                                    go check the cat room. Chances are, you will find her there. At
                                                    every shelter that Rescue Rebuild renovates, she plays this fun game
                                                    where she finds a dog that she wants to take home and vows that if
                                                    it hasn’t found a furever family by the time the build is over, she
                                                    will fill out the adoption papers herself. Luckily, for her own sake
                                                    and the sanity of her roommate, this has worked out in her favor so
                                                    far. Learning all the tools, toys, and construction projects as she
                                                    goes, she has already become the expert at chain link and is the
                                                    only one in the group who is allowed to teach the volunteers!</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-d8ecc20711a6e6aca89a02141f7eaed7"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/karlaball.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Karla Ball</h3>
                                    <p class="ui-team-panel-title">Grants Administrator</p>


                                </div>

                                <script type="text/template" id="team-template-d8ecc20711a6e6aca89a02141f7eaed7"
                                        class="team-template">
                                    <div id="expander-content-d8ecc20711a6e6aca89a02141f7eaed7"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Karla Ball</h3>
                                                <p class="expander-content-title">Grants Administrator</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:karla.ball@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Karla</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Karla Ball is the Grants
                                                    Administrator for GreaterGood.org. She works closely with the
                                                    Program Directors to move grants toward approval in a timely and
                                                    efficient manner. After many years in the business workplace, Karla
                                                    is thrilled to be back in the nonprofit sector. Karla was previously
                                                    Coordinator of a 24-hour Helpline – a crisis line where she
                                                    recruited, trained and managed volunteers. She received the
                                                    Governor’s Volunteer Leader award for this work.<br/><br/>
                                                    Karla loves giving back. She is involved in a variety of volunteer
                                                    roles in her community including reading with children, substitute
                                                    teaching for a private elementary school, and serving in a local
                                                    hospital and her church.<br/><br/>
                                                    Karla lives in Sioux Falls, SD with her husband and two cats, Kitty
                                                    and Bunny. She is affectionately known as Grandma Kitty to two
                                                    darling little ones, Quinn and Stella.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-5d7f639926aa4f2137672b0debc6a9e3"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/04/00000PORTRAIT_00000_BURST20190403110614595-e1554321649452-300x309.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Bonnie Aguilar</h3>
                                    <p class="ui-team-panel-title">Donor Relations Manager</p>


                                </div>

                                <script type="text/template" id="team-template-5d7f639926aa4f2137672b0debc6a9e3"
                                        class="team-template">
                                    <div id="expander-content-5d7f639926aa4f2137672b0debc6a9e3"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Bonnie Aguilar</h3>
                                                <p class="expander-content-title">Donor Relations Manager</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:bonnieaguilar@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Bonnie</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Bonnie Aguilar joined
                                                    GreaterGood.org after 7 years at GreaterGood.com in Seattle,
                                                    Washington. She began her tenure working in the buying office,
                                                    transitioned to social media, then finally to Promotions Operations
                                                    Manager, planning the company’s promotional calendars and sourcing
                                                    freebies.

                                                    In March 2019, Bonnie, her wife and furchildren have since relocated
                                                    to Tucson, Arizona.

                                                    As an enthusiast of music, books, the outdoors and travel, Bonnie
                                                    enjoys spending her free time reading, exploring new places, and
                                                    taking her Harley out on the open road.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-1ecfb8595aa49ecbed0660fcee80400f"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/09/rachel_headshot-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Rachel Hiebert</h3>
                                    <p class="ui-team-panel-title">Program Manager, Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-1ecfb8595aa49ecbed0660fcee80400f"
                                        class="team-template">
                                    <div id="expander-content-1ecfb8595aa49ecbed0660fcee80400f"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Rachel Hiebert</h3>
                                                <p class="expander-content-title">Program Manager, Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:rachelhiebert@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Rachel</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">A new Arizona desert
                                                    transplant, Rachel joined Rescue Rebuild after her move from
                                                    Alberta, Canada where she owned a roofing company. She is very
                                                    excited to do something meaningful with her construction experience!
                                                    Married to GreaterGood.org’s very own Bonnie Aguilar, together they
                                                    have two dogs and a cat. When Rachel isn’t on or planning a build,
                                                    she enjoys adventuring with her wife, music, reading, spending time
                                                    with friends, and riding her motorcycle.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-6ae40c8f57e3ed770b1810fe29dfff77"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Hannah-Seaman-250x250.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Hannah Seaman</h3>
                                    <p class="ui-team-panel-title">Media Marketing Manager</p>


                                </div>

                                <script type="text/template" id="team-template-6ae40c8f57e3ed770b1810fe29dfff77"
                                        class="team-template">
                                    <div id="expander-content-6ae40c8f57e3ed770b1810fe29dfff77"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Hannah Seaman</h3>
                                                <p class="expander-content-title">Media Marketing Manager</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:hannahseaman@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Hannah</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Hannah joined the
                                                    GreaterGood.org team as a Program Assistant in September of 2017.
                                                    She earned her Bachelor’s degree from Hampshire College in Amherst,
                                                    Massachusetts, where she studied analog and digital photography,
                                                    graphic design, computer animation, theater design, and sculpture.
                                                    Upon graduation in 2013, she moved back to her hometown of Tucson,
                                                    Arizona, and put her artistic eye to use as a Floral Designer –
                                                    enjoying an outlet for her creativity, without adding to her
                                                    ever-growing collection of artistic clutter.<br/><br/>

                                                    Though she still does floral design for the events of friends and
                                                    family, Hannah has decided to leave the corporate and business
                                                    worlds in favor of working for a larger purpose. She volunteered for
                                                    eight years at the Arizona-Sonora Desert Museum – caring for animals
                                                    and educating the public on the natural history of the Sonoran
                                                    Desert with a strong conservational message – and is excited to
                                                    apply her skills, once more, to a worthy cause. <br/><br/>

                                                    When not at the GreaterGood offices, she can usually be found
                                                    spending her time among several well-loved cats and tortoises.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-90cd6e69404b4f297b4720bfae0d288a"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Marina-Maskaykina-e1524694551459-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Marina Maskaykina</h3>
                                    <p class="ui-team-panel-title">Marketing Coordinator</p>


                                </div>

                                <script type="text/template" id="team-template-90cd6e69404b4f297b4720bfae0d288a"
                                        class="team-template">
                                    <div id="expander-content-90cd6e69404b4f297b4720bfae0d288a"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Marina Maskaykina</h3>
                                                <p class="expander-content-title">Marketing Coordinator</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:marina@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Marina</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Marina studied Psychology and
                                                    Studio Art during her time at the University of Arizona, where she
                                                    also worked at the Disabilities Resource Center. Her previous work
                                                    experience ranges from working in the public services sector, to the
                                                    corporate marketing world, to childcare and more. She brings her
                                                    knowledge in marketing, graphic design, and media to GreaterGood.org
                                                    and is grateful to be a part of such an amazing team.
                                                    <br/><br/>
                                                    When Marina is not at the GreaterGood offices, she can be found in
                                                    the pottery studio or, more likely, hanging out with her two cats,
                                                    Peanut and Banjo.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-d1f0f33a018794e8c31a053a76501fdd"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Danielle-Bennett-300x299.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Danielle Bennett</h3>
                                    <p class="ui-team-panel-title">Administrative and Bookkeeping Assistant</p>


                                </div>

                                <script type="text/template" id="team-template-d1f0f33a018794e8c31a053a76501fdd"
                                        class="team-template">
                                    <div id="expander-content-d1f0f33a018794e8c31a053a76501fdd"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Danielle Bennett</h3>
                                                <p class="expander-content-title">Administrative and Bookkeeping
                                                    Assistant</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:danielle@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Danielle</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft"></p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-6ef7d1ce0acef3082d3717fe252bc7e1"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/02/group2-final-3-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Lexi Browne</h3>
                                    <p class="ui-team-panel-title">Marketing Coordinator</p>


                                </div>

                                <script type="text/template" id="team-template-6ef7d1ce0acef3082d3717fe252bc7e1"
                                        class="team-template">
                                    <div id="expander-content-6ef7d1ce0acef3082d3717fe252bc7e1"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Lexi Browne</h3>
                                                <p class="expander-content-title">Marketing Coordinator</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:lexibrowne@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Lexi</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Lexi graduated with a
                                                    Bachelor's in Sustainable Built Environmental Sciences from the
                                                    University of Arizona, Spring 2018. She’s been fortunate enough to
                                                    adopt two pups from her hometown shelter in Hailey, Idaho where she
                                                    lived most of her life and learned to appreciate the environment.
                                                    Although she now resides in Tucson she loves visiting her family and
                                                    friends in both Idaho and California. Growing up she was a part of
                                                    Girl Scouts, volunteered at the Hunger Coalition, played the violin
                                                    and participated in track, tennis and horseback riding. With extra
                                                    time on her hands she’s passionate about exercising, cooking,
                                                    playing with her dogs and traveling to be submerged in different
                                                    cultures. Something on her bucket list is to visit all of the
                                                    continents at least once. A few of her favorite trips include
                                                    visiting a panda reserve in China, seeing the Best Friends Animal
                                                    Sanctuary in Utah and studying abroad in Scandinavia. She admires
                                                    the vision and goals that GreaterGood represents and is so excited
                                                    to be a part of the team.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-65b95ae3c0e8ba4565dc3aebdec6a160"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/03/IMG_0005-300x282.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Czarina Nafarrate</h3>
                                    <p class="ui-team-panel-title">Content and Program Coordinator</p>


                                </div>

                                <script type="text/template" id="team-template-65b95ae3c0e8ba4565dc3aebdec6a160"
                                        class="team-template">
                                    <div id="expander-content-65b95ae3c0e8ba4565dc3aebdec6a160"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Czarina Nafarrate</h3>
                                                <p class="expander-content-title">Content and Program Coordinator</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:czarinanafarrate@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Czarina</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">From tall tales at sleepovers
                                                    to on-air stories about mental illness, Czarina has always loved to
                                                    tell a story. A graduate from the University of Arizona, Czarina
                                                    pursued a bachelor’s degree in Journalism in hopes of seeking truth
                                                    and sharing it with the world.
                                                    Since then Czarina has taught English in France, gotten lost
                                                    backpacking through the UK, and achieved her lifelong dream of
                                                    visiting Frida Kahlo’s Casa Azul in Mexico City. Her past jobs
                                                    include social media and marketing manager and content producer.
                                                    Czarina is excited to draw from her past experiences for an
                                                    organization whose message she whole-heartedly believes in.
                                                    Czarina lives in Tucson with her puppy, Nikolaj. In her free time,
                                                    you can find her writing poetry, watching reruns of The Office, or
                                                    performing with her cast members at Tucson Improv Movement.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-d08e1224ad8f795c29dcf64cf46e8098"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/03/kalli-headshot.png');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Kalli Spackeen</h3>
                                    <p class="ui-team-panel-title">Office Manager and Assistant</p>


                                </div>

                                <script type="text/template" id="team-template-d08e1224ad8f795c29dcf64cf46e8098"
                                        class="team-template">
                                    <div id="expander-content-d08e1224ad8f795c29dcf64cf46e8098"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Kalli Spackeen</h3>
                                                <p class="expander-content-title">Office Manager and Assistant</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:kallispackeen@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Kalli</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Kalli has always had a
                                                    passion for giving back and trying to make the world a little
                                                    brighter of a place. Aside from working at GreaterGood.org, Kalli
                                                    also volunteers at another local nonprofit, Tu Nidito, where she
                                                    facilitates a support group for children that are experiencing
                                                    grief. She has lived in Tucson her whole life and is happy that she
                                                    found a place where her passion for giving back is universally
                                                    shared.

                                                    Kalli lives in Tucson with her longtime boyfriend and their newest
                                                    addition, a little boy named Milo. On the weekends you can find her
                                                    walking Sabino Canyon or at home relaxing with her little
                                                    family. </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-9902953797f6870406edb6e3d84fb4e3"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/01/ellie-headshot-300x300.jpeg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Ellie Snyder</h3>
                                    <p class="ui-team-panel-title">Junior Copywriter & Program Assistant</p>


                                </div>

                                <script type="text/template" id="team-template-9902953797f6870406edb6e3d84fb4e3"
                                        class="team-template">
                                    <div id="expander-content-9902953797f6870406edb6e3d84fb4e3"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Ellie Snyder</h3>
                                                <p class="expander-content-title">Junior Copywriter & Program
                                                    Assistant</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:elliesnyder@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Ellie</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Ellie left the endless icy
                                                    winters of Montana to attend the University of Arizona, graduating
                                                    with a degree in English and Creative Writing Spring 2019. During
                                                    her time at the U of A she read for the university’s graduate
                                                    literary magazine Sonora Review, tutored writing, and worked as
                                                    Editorial Assistant for the University of Arizona Press. Upon
                                                    graduating she began work with Lawyers & Judges Publishing in
                                                    Tucson, doing all things from typesetting and editing new books to
                                                    packing orders. She’s thrilled to become a part of the GreaterGood
                                                    team and to contribute her Englishy skills wherever possible. In her
                                                    free time, Ellie can be found between the pages of a novel, vibing
                                                    to newly discovered music, or dancing downtown.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-1dbc6b9ecd0a0b4f8cd89583b59ed433"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/05/casey-headshot.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Casey Paholski</h3>
                                    <p class="ui-team-panel-title">Program Assistant, Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-1dbc6b9ecd0a0b4f8cd89583b59ed433"
                                        class="team-template">
                                    <div id="expander-content-1dbc6b9ecd0a0b4f8cd89583b59ed433"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Casey Paholski</h3>
                                                <p class="expander-content-title">Program Assistant, Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>

                                                <div class="ui-team-panel-action-buttons">
                                                    <div class="ui-team-panel-action-button fx-btn">
                                                        <a href="mailto:caseypaholski@greatergood.org"
                                                           class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                                           target="_blank">
                                                            Email Casey</a>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Casey started volunteering
                                                    with Rescue Rebuild in 2103 when he was a freshman in college. Ever
                                                    since he has been making it a point to go on a few builds every
                                                    year. To date, he has been on 12 trips and has adopted 3 pups from
                                                    shelters on the way: Lilly, Daisy, and Flint.

                                                    Casey graduated from Delaware Valley University in 2017 with a B.S.
                                                    in Conservation and Wildlife Management. Before coming on with
                                                    GreaterGood.org, he worked as a Park Ranger after college and did
                                                    wildlife mitigation in Atlanta, Georgia.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-31385df8c649fb3e8fdd4eec7ada5605"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/IMG_0658-1-300x280.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Ryan McFarland</h3>
                                    <p class="ui-team-panel-title">Program Assistant, Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-31385df8c649fb3e8fdd4eec7ada5605"
                                        class="team-template">
                                    <div id="expander-content-31385df8c649fb3e8fdd4eec7ada5605"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Ryan McFarland</h3>
                                                <p class="expander-content-title">Program Assistant, Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">An all-around handy-man and
                                                    Eagle Scout, Ryan has a lifetime of experience working with his
                                                    hands. He’s done it all when it comes to construction projects,
                                                    giving him the skills of a construction worker with the heart of a
                                                    true animal lover. Ryan first met the crew in 2017 when Rescue
                                                    Rebuild came to the Florida Keys SPCA after Hurricane Irma, where
                                                    Ryan’s wife is the Director of Operations. He semi-jokingly asked if
                                                    they were hiring. Two years later, they were and Ryan jumped at the
                                                    opportunity to be a part of the team! Before Rescue Rebuild, Ryan
                                                    attended Delaware Valley University receiving a Bachelor of Science
                                                    in Ornamental Horticulture and Design. Ryan owned and operated his
                                                    own business, 2nd Nature, until he joined Rescue Rebuild full time
                                                    in 2019.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-5a60046e02b3666c66ae3c9151ed7bcf"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/2020-01-Montclair-Township-Montclair-NJ-16-300x249.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Nate Borger</h3>
                                    <p class="ui-team-panel-title">Program Assistant, Rescue Rebuild</p>


                                </div>

                                <script type="text/template" id="team-template-5a60046e02b3666c66ae3c9151ed7bcf"
                                        class="team-template">
                                    <div id="expander-content-5a60046e02b3666c66ae3c9151ed7bcf"
                                         class="expander-content expander-content-0d0cd88d5fd8b9cd47e25892e1f35d3c expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Nate Borger</h3>
                                                <p class="expander-content-title">Program Assistant, Rescue Rebuild</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Nate is the newest member of
                                                    the Rescue Rebuild team. He is currently living outside of Los
                                                    Angeles, CA but is from Bethlehem, PA. Nate first worked with the
                                                    team in 2013 after transferring to Delaware Valley University. He
                                                    went on almost every trip he could during his time in school and
                                                    picked up his construction knowledge along the way. Nate graduated
                                                    with a degree in Wildlife and Conservation Management and soon after
                                                    began working with a bird removal company. He worked his way up to
                                                    an Assistant Manager Position where he honed his training skills and
                                                    even got to catch and release a few hawks. Nate moved out to
                                                    California with his girlfriend, so that she could pursue her dream
                                                    of Veterinary School. Adapting to the warmer weather, Nate looks
                                                    forward to being on the road again and finding a new adventure every
                                                    day!</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>
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

                            <div id="ui-team-panel-grid-item-ab4ed6771a81df23cf47f8dfa01ba124"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/davidyaskulka.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">David Yaskulka</h3>
                                    <p class="ui-team-panel-title">Board Chair</p>


                                </div>

                                <script type="text/template" id="team-template-ab4ed6771a81df23cf47f8dfa01ba124"
                                        class="team-template">
                                    <div id="expander-content-ab4ed6771a81df23cf47f8dfa01ba124"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">David Yaskulka</h3>
                                                <p class="expander-content-title">Board Chair</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">David Yaskulka’s career is
                                                    devoted to helping grow environmentally and socially responsible
                                                    businesses. He joined Nature’s Logic as CEO in 2019, expanding the
                                                    brand’s mission to become a voice for sustainability. Nature’s
                                                    Logic™ is the pioneer creators of 100% all-natural pet food with no
                                                    synthetic vitamins. Prior, at Halo, Purely for Pets, he was Vice
                                                    President Marketing Communications and then Vice President Social
                                                    Investment and Engagement, forging partnerships with GGO and
                                                    Freekibble.com gaining multiple marketing award nods.
                                                    <br/><br/>
                                                    Yaskulka helped grow social mission companies such as eBay for
                                                    Charity and Investors’ Circle. His strategies are featured in over a
                                                    dozen books including <em>Internet Riches</em> and <em>Secrets of
                                                        the eBay Millionaires</em>. He’s also held leadership roles in
                                                    education, technology, and conservation nonprofits.
                                                    <br/><br/>
                                                    A graduate of Williams College, David and his wife Debbie, a special
                                                    needs educator, share their Long Valley, NJ home with sons Noah and
                                                    Ben, dogs Maya and Sampson, and cats Erebos and Zebulon.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-a54662a07be622f3ccaf553d19758d3a"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/davidsamuelson.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">David Samuelson</h3>
                                    <p class="ui-team-panel-title">Board Vice Chair</p>


                                </div>

                                <script type="text/template" id="team-template-a54662a07be622f3ccaf553d19758d3a"
                                        class="team-template">
                                    <div id="expander-content-a54662a07be622f3ccaf553d19758d3a"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">David Samuelson</h3>
                                                <p class="expander-content-title">Board Vice Chair</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">David Samuelson is currently
                                                    Head of Enterprise for Age of Learning, the creators of ABCmouse.com
                                                    Early Learning Academy. David’s 25-year career in the U.S. and
                                                    global education sector began with educational publishing and
                                                    software development at MECC, the company behind The Oregon Trail,
                                                    where he served as VP and Executive Producer. That led to 15 years
                                                    at Pearson, the largest global education company, with executive
                                                    roles including VP of Product Strategy, CMO of the $2 billion U.S.
                                                    Schools division, and President of Global Schools. He also served as
                                                    Achieve3000’s first CMO. Most recently, David was EVP and General
                                                    Manager for Capstone, a global publisher of children’s books and
                                                    software. Before transitioning to education, David had a successful
                                                    career in theatre and television, winning an Emmy as a producer of
                                                    children’s programming.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-5e6122ab8899a1d9b11afb23821d2d7f"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/09/John-Gert-sized-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">John Gehrt</h3>
                                    <p class="ui-team-panel-title">Board Treasurer</p>


                                </div>

                                <script type="text/template" id="team-template-5e6122ab8899a1d9b11afb23821d2d7f"
                                        class="team-template">
                                    <div id="expander-content-5e6122ab8899a1d9b11afb23821d2d7f"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">John Gehrt</h3>
                                                <p class="expander-content-title">Board Treasurer</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">John Gehrt has held senior
                                                    executive management positions with retail, direct marketing,
                                                    manufacturing, transportation, distribution Internet, and NFP
                                                    organizations and is currently the managing director Quick Start
                                                    Shared Services, LLC., John has over 40 years’ experience working at
                                                    executive and board level with companies ranging in size from
                                                    startup to the Fortune 500. John has taught Strategic Planning,
                                                    Finance and Statistics in adult education advanced degree programs.
                                                    John holds a BA in Economics from the University of Washington and
                                                    an MBA from the University of Puget Sound.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-3348872b76d29e4bc090eabf66a55dff"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/juliachristophersen.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Julia Christophersen</h3>
                                    <p class="ui-team-panel-title">Board Secretary</p>


                                </div>

                                <script type="text/template" id="team-template-3348872b76d29e4bc090eabf66a55dff"
                                        class="team-template">
                                    <div id="expander-content-3348872b76d29e4bc090eabf66a55dff"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Julia Christophersen</h3>
                                                <p class="expander-content-title">Board Secretary</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Julia Christophersen is the
                                                    Chief E-Commerce Officer for CharityUSA.com, LLC. Julia has spent
                                                    more than twelve years developing a comprehensive knowledge of
                                                    online e-commerce, business development, and Web-based marketing.
                                                    Julia combines her background in marketing and finance to the
                                                    benefit of GreaterGood.org.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-54a8a74a7660eaa2418441fd183d3642"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/01/JGP-About-Us-Photo-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jackson Galaxy</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-54a8a74a7660eaa2418441fd183d3642"
                                        class="team-template">
                                    <div id="expander-content-54a8a74a7660eaa2418441fd183d3642"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jackson Galaxy</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Jackson Galaxy is the host
                                                    and executive producer of Animal Planet's long running hit show My
                                                    Cat From Hell. Jackson, an animal advocate and cat behavior and
                                                    wellness consultant, is also a two-time New York Times best-selling
                                                    author with more than 25 years of experience working with cats and
                                                    their guardians.
                                                    <br/><br/>
                                                    Popularly known as the "Cat Daddy," Jackson is on a mission to
                                                    educate people about cats and deepen the human and cat bond, while
                                                    reducing the number of animals that end up in shelters. True to this
                                                    goal, Jackson started The Jackson Galaxy Project
                                                    (www.thejacksongalaxyproject.org), which seeks to better the lives
                                                    of at-risk animals by transforming the places they live and helping
                                                    the people who care for them.
                                                    <br/><br/>
                                                    Through this work, he supports important causes for animals in need,
                                                    and runs the Cat Pawsitive program - which uses positive
                                                    reinforcement training to make adoptable cats feel comfortable and
                                                    confident in the shelter environment, and help them find their
                                                    forever homes.
                                                    <br/><br/>
                                                    In 2017, Jackson joined the GreaterGood.org family, adding The
                                                    Jackson Galaxy Project to GreaterGood.org's array of signature
                                                    programs.

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-fc9aa810c5da344792d1f8c9deac9ac8"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/greghesterberg.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Greg Hesterberg</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-fc9aa810c5da344792d1f8c9deac9ac8"
                                        class="team-template">
                                    <div id="expander-content-fc9aa810c5da344792d1f8c9deac9ac8"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Greg Hesterberg</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Greg Hesterberg was chairman
                                                    of two statewide consumer and environmental organizations (MaryPIRG
                                                    and PIRGIM) while in college. After twenty years running a
                                                    successful publishing firm, Greg enjoys finding innovative ways to
                                                    make the world a better place. Greg's two cats for many years, Tony
                                                    and Junior, have passed on. In November of 2007 Greg adopted two
                                                    sister kittens, Callie and Chloe. Their younger brother was the last
                                                    one of the litter waiting to be adopted, and Greg couldn't leave him
                                                    behind; so now Callie and Chloe spend their days playing with each
                                                    other as well as their brother Casey.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-fa7f14b7597b37e97f8107a6305d3919"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/evehiggs.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Eve Higgs</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-fa7f14b7597b37e97f8107a6305d3919"
                                        class="team-template">
                                    <div id="expander-content-fa7f14b7597b37e97f8107a6305d3919"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Eve Higgs</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">With more than 20 years’
                                                    branding and marketing experience, Eve Higgs has had the pleasure of
                                                    leading corporate marketing teams in the software and services
                                                    sectors. Her work includes brand, acquisition and retention
                                                    strategies, and corporate and product launches. Eve is currently the
                                                    Director of Corporate Marketing for Market Leader, providing
                                                    innovative online technology and marketing solutions for more than
                                                    150,000 real estate professionals across the United States and
                                                    Canada. Eve holds degrees in Speech Communications and Germanics
                                                    from the University of Washington.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-a416de79f3cafbe74d269ca846665679"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2016/09/kimberlyklintworth.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Kimberly Klintworth</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-a416de79f3cafbe74d269ca846665679"
                                        class="team-template">
                                    <div id="expander-content-a416de79f3cafbe74d269ca846665679"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Kimberly Klintworth</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Kimberly Klintworth enjoyed a
                                                    26-year career in television broadcasting, reporting and anchoring
                                                    for ABC and CBS affiliates in Rochester, NY, Pittsburgh, PA and Salt
                                                    Lake City, UT. But Kimberly’s favorite years were as host and
                                                    co-producer of “Profiles in Caring”, a non-profit TV series
                                                    highlighting humanitarian work worldwide. Kimberly and her team
                                                    traveled to some of the most remote places in the world, bringing
                                                    attention to the hard work and life-changing efforts of ordinary
                                                    people doing extraordinary things.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-e89d4ca3bce5ef7849726c5dc35f09c6"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Janis-Rosenthal.png');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Janis Rosenthal</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-e89d4ca3bce5ef7849726c5dc35f09c6"
                                        class="team-template">
                                    <div id="expander-content-e89d4ca3bce5ef7849726c5dc35f09c6"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Janis Rosenthal</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Janis Rosenthal has been
                                                    involved in animal welfare for over 30 years, supporting many
                                                    organizations by mobilizing at the grassroots level, producing
                                                    fundraising and outreach events, and designing and funding matching
                                                    programs. She also supports the “unsung heroes” of the rescue world,
                                                    individuals who work tirelessly but have little or no means to
                                                    fundraise on their own. She has served on several boards of
                                                    directors, most recently Soi Dog Foundation USA. Janis and her
                                                    husband Jeff have sponsored flight volunteers for over 90 “freedom
                                                    flights,” bringing 400+ dogs rescued from the meat trade to find
                                                    their forever homes in the US and Canada.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-cb3553649bbb64a38d7bbc6170b18c44"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Julie-Ryan-e1524443890515-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Julie Ryan</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-cb3553649bbb64a38d7bbc6170b18c44"
                                        class="team-template">
                                    <div id="expander-content-cb3553649bbb64a38d7bbc6170b18c44"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Julie Ryan</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft">Dr. Julie Ryan Johnson is
                                                    passionate about Shelter Medicine and has been a shelter
                                                    veterinarian for over 25 years and was the director of a large
                                                    government shelter. She served as President of the Southern
                                                    California Veterinary Medical Association and is the CE Co-Chair for
                                                    the California VMA. Dr. Ryan Johnson is a member of ASV (Association
                                                    of Shelter Veterinarians) and SAWA (Society of Animal Welfare
                                                    Administrators). Dr. Ryan Johnson also serves as the CVMA disaster
                                                    coordinator for Orange County, California and is one of the founding
                                                    members of southern California’s Large Animal Response Team (LART).
                                                    She enjoys riding Alainn, the horse she bred for dressage, hiking
                                                    out on trails with friends and dogs and paddleboard surfing out in
                                                    the ocean. She is married to small animal practitioner Dr Gary
                                                    Johnson, and co-owner of Dana Niguel Veterinary Hospital and Laguna
                                                    Niguel Veterinary Hospital.</p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-76704ccfce0bb203d1342c9003c53ef0"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2018/04/Jam-Stewart-1-300x300.png');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jam Stewart</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-76704ccfce0bb203d1342c9003c53ef0"
                                        class="team-template">
                                    <div id="expander-content-76704ccfce0bb203d1342c9003c53ef0"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jam Stewart</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary"></p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary-noleft"></p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>

                            <div id="ui-team-panel-grid-item-eb4d73ff709d5111ba90d03c2b386547"
                                 class="ui-team-panel-grid-item expander-trigger col-sm-3">
                                <div class="ui-team-panel-image"
                                     style="background-image:url('https://greatergood.org/wp-content/uploads/2019/09/jeff-zuba-bio-300x300.jpg');"></div>

                                <div class="ui-team-panel-content">
                                    <h3 class="ui-team-panel-name">Jeffery R. Zuba, D.V.M.</h3>
                                    <p class="ui-team-panel-title">Board Member</p>


                                </div>

                                <script type="text/template" id="team-template-eb4d73ff709d5111ba90d03c2b386547"
                                        class="team-template">
                                    <div id="expander-content-eb4d73ff709d5111ba90d03c2b386547"
                                         class="expander-content expander-content-5aec3f6067e1e429155287b261a5212d expander-hidden ui-team-panel-expander">
                                        <div class="expander-content-arrow"></div>
                                        <div class="expander-content-container row">
                                            <div class="content-left col-md-6">
                                                <h3 class="expander-content-name">Jeffery R. Zuba, D.V.M.</h3>
                                                <p class="expander-content-title">Board Member</p>
                                                <p class="expander-content-left-summary">Jeffery R. Zuba obtained his
                                                    Doctor of Veterinary Medicine degree from the University of
                                                    Wisconsin’s School of Veterinary Medicine. Following graduate school
                                                    in virology and immunology, he completed his residency in Zoo and
                                                    Wildlife Medicine at San Diego Zoo Global. Dr. Zuba then received an
                                                    appointment as Clinical Professor in Zoo Medicine at Colorado State
                                                    University. For the past 27 years, Dr. Zuba has been a staff
                                                    veterinarian at the San Diego Zoo Safari Park. Professional
                                                    highlights include being a faculty member for the EnviroVet
                                                    Institute (an ecosystem veterinary health program); an affiliate
                                                    instructor at the Wildlife Health Center at the UC-Davis; the
                                                    Director of Veterinary Programs for the US Fish and Wildlife
                                                    Service’s California Condor Reintroduction Program; Veterinary
                                                    Coordinator for the Condor Release Program in Baja, Mexico; and the
                                                    Veterinary Advisor for both the AZA’s California Condor and White
                                                    Rhinoceros Species Survival Plans. Dr. Zuba consults and lectures
                                                    internationally on a wide range of subjects including
                                                    mega-vertebrate anesthesia and conservation medicine and serves as a
                                                    scientific advisor for several conservation and educational
                                                    institutions. Dr. Zuba is an inventor and founder of a company which
                                                    creates and manufactures specialized mega-vertebrate anesthetic
                                                    equipment. He is also a principal investigator of a team of
                                                    international veterinarians who developed anesthetic and
                                                    laparoscopic protocols to perform the first ever surgical
                                                    contraception procedures in free-ranging African elephants as an
                                                    alternative to the controversial use of culling for population
                                                    control.</p>


                                            </div>
                                            <div class="content-right col-md-6">
                                                <p class="expander-content-summary"></p>

                                            </div>
                                        </div>
                                    </div>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ui-banner center"
                 style="background-image:url('https://greatergood.org/wp-content/uploads/2016/08/floodimage-1500x647.jpg');">

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
                                    <a href="https://greatergood.org/blog/"
                                       class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color"
                                       target="_blank">
                                        Read Our Blog</a>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- /section -->
    </main>
<?php

get_footer();
?>