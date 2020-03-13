<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */

get_header();
?>

    <main role="main" class="blk-menu">
        <section class="container category-page">
            <h1>Posts categorized under: Adoptable Pets</h1>
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
    </main>

<?php get_footer();
