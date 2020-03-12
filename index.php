<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

get_header();
?>
<?php get_template_part('template-parts/blog-header'); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main blog-rel ui-blog-search-form-submit">
            <section class="container blog-container">

                <div class="blog-search">
                    <form role="search" method="get" id="searchform" class="searchform" action="">
                        <div>
                            <label class="screen-reader-text" for="s">Search for:</label>
                            <input type="text" value="" name="s" id="s">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>

                <?php
                echo '<div class="row">';
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/content', get_post_type());

                    endwhile;
                    echo "</div>";
//                    the_posts_navigation();
                    pagination_bar();
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer();
