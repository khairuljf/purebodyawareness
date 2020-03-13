<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */
$donate_bg = get_post_meta(get_the_ID(), 'donate_bg', true);
$donate_bg_class = $donate_bg ? 'has-donate-bg' : 'no-donate-bg';
$donate_btn = get_post_meta(get_the_ID(), 'donate_btn', true);
$donate_btn_url = get_post_meta(get_the_ID(), 'donate_btn_url', true);

$donate_class = get_post_meta(get_the_ID(), 'donate_class', true);
//var_dump($donate_class);

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


                <div class="wp-block-cover <?php echo $donate_class . ' ' . $donate_bg_class; ?>"
                     style="margin: 10px auto; background-image:url(<?php echo $donate_bg; ?>);">
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

                <?php get_template_part('template-parts/related-posts'); ?>

            </div>

        </div>

    </section>
    <!-- /section -->

</main>