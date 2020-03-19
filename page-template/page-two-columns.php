<?php

/*
 * Template Name: Two Column Template
 * */

get_header();

?>
    <main role="main">
<?php
while (have_posts()) :
    the_post(); ?>
        <?php if (is_page('what-we-do')) {
            get_template_part('template-parts/header');
        } ?>
        <?php get_template_part('template-parts/two-column') ?>
<?php endwhile; ?>
    </main>


<?php get_footer(); ?>