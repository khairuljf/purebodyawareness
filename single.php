<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package purebodyawareness
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'single');
                the_post_navigation();
                get_template_part('template-parts/pagination');

                //wpbeginner_numeric_posts_nav();
            endwhile; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
