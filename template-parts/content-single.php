<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */
$donate_bg_class = $donate_bg ? 'has-donate-bg' : 'no-donate-bg';
$donate_btn = get_post_meta(get_the_ID(), 'donate_btn', true);
$donate_btn_url = get_post_meta(get_the_ID(), 'donate_btn_url', true);

?>

<?php get_template_part('template-parts/blog-header') ?>
<main role="main" class="blog-rel">
    <!-- section -->
    <section class="container">
        <!-- article -->
        <article id="post-15804"
                 class="post type-post status-publish format-standard has-post-thumbnail hentry category-animal-medical-cases category-animals category-australia-bushfires category-planet category-project-peril">

            <div class="post-content">

                <hr class="top-blog-hr">

                <ul class="blog-cat">
                    <?php
                    //
                    $categories = get_the_category();
                    $separator = ', ';
                    $output = '';
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                        }
                        echo trim($output, $separator);
                    }
                    ?>
                </ul>

                <h1> <?php echo get_the_title(); ?></h1>

                <?php echo get_the_content(); ?>


                <div class="wp-block-cover <?php echo $donate_bg_class; ?>" style="margin: 10px auto; background-image:url(<?php echo $donate_bg; ?>);">
                    <div class="wp-block-cover__inner-container">
                        <div class="wp-block-button aligncenter">
                            <a class="wp-block-button__link has-background has-vivid-cyan-blue-background-color"
                               href=" <?php echo esc_url($donate_btn_url); ?> "> <?php echo $donate_btn; ?> </a></div>
                    </div>
                </div>

            </div>

        </article>

        <div class="related-row">

            <h1 class="related-title">Related Posts</h1>

            <hr class="related-hr">

            <div class="row">


                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/03/06/elephants-affected-by-coronavirus-but-not-for-the-reasons-you-think/"
                       title="Elephants Affected by Coronavirus, But Not for the Reasons You Think"
                       class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/03/elephant-coronavirus.jpg')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Friday, March 6</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    Elephants Affected by Coronavirus, But Not for the Reasons You Think </h2>

                                <p class="post-list-item-excerpt">
                                    As tourism drops due to coronavirus fears, rescue elephants at risk of
                                    starvation. </p>

                            </div>

                        </article>
                    </a>

                </div>
                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/03/03/one-picture-saves-a-life-contest-chooses-finalists/"
                       title="One Picture Saves a Life Contest Chooses Finalists" class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/03/opsal-contest-fb-share.png')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Tuesday, March 3</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    One Picture Saves a Life Contest Chooses Finalists </h2>

                                <p class="post-list-item-excerpt">
                                    In partnership with Boehringer Ingelheim Animal Health USA Inc., we are pleased to
                                    announce our One Picture Saves a Life Photo Contest finalists! </p>

                            </div>

                        </article>
                    </a>

                </div>
                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/02/27/josies-escape/" title="Josie&#8217;s Escape"
                       class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/josie-dog.jpg')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Thursday, February 27</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    Josie&#8217;s Escape </h2>

                                <p class="post-list-item-excerpt">
                                    Abandoned with her four puppies, Josie needed to make a great escape! </p>

                            </div>

                        </article>
                    </a>

                </div>
                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/02/20/7-reason-we-love-our-pets/"
                       title="7 Reasons We Love our Pets" class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/0F5A7606.jpg')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Thursday, February 20</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    7 Reasons We Love our Pets </h2>

                                <p class="post-list-item-excerpt">
                                    Pets truly are our best friends. </p>

                            </div>

                        </article>
                    </a>

                </div>
                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/02/19/rescued-sea-turtle-finds-way-back-home/"
                       title="Rescued Sea Turtle Finds Way Back Home" class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/terri-the-sea-turtle.jpg')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Wednesday, February 19</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    Rescued Sea Turtle Finds Way Back Home </h2>

                                <p class="post-list-item-excerpt">
                                    Terri, a juvenile green sea turtle has returned to her ocean home after eight months
                                    of rehabilitation. Rescued off the coast of Florida, Terri the sea turtle was in
                                    need of help. She was suffering from anemia and fibropapillomatosis, a disease
                                    specific to sea turtles characterized by benign but ultimately debilitating
                                    epithelial tumors. The Force [&hellip;] </p>

                            </div>

                        </article>
                    </a>

                </div>
                <div class="col-sm-6">

                    <a href="https://greatergood.org/blog/2020/02/13/the-perfect-gift-for-your-valentine/"
                       title="The Perfect Gift for Your Valentine" class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('https://greatergood.org/wp-content/uploads/2020/02/valentine-puppies.jpg')"></div>


                            <div class="post-list-item-info">

                                <div class="post-list-item-date">Thursday, February 13</div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2>
                                    The Perfect Gift for Your Valentine </h2>

                                <p class="post-list-item-excerpt">
                                    This year, the average American will spend $142 on a Valentine&#8217;s Day gift for
                                    their significant other. Why not skip the flowers and chocolates this year and give
                                    your sweetheart a gift that will keep on giving?! Our Gifts of Hope are the perfect
                                    way to say, &#8220;I love you and what matters most to [&hellip;] </p>

                            </div>

                        </article>
                    </a>

                </div>
            </div>

        </div>

    </section>
    <!-- /section -->

</main>