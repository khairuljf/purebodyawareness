<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package purebodyawareness
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> >
<head>


    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Protecting People, Pets, and the Planet">

    <style>
    </style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel='stylesheet' id='sb-font-awesome-css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all'/>
    <link rel='stylesheet' id='bwg_googlefonts-css'  href='https://fonts.googleapis.com/css?family=Ubuntu&#038;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' media='all'/>



    <?php wp_head(); ?>
</head>
<body <?php body_class('home page-template page-template-flex page-template-flex-php page page-id-12 page-parent fade-in-page home-2-2-2'); ?> >


<!-- find me in plugins -->
<header class="base-header fx-main-color-background-color-10 clear" role="banner">
    <div class="container-fluid main-nav-dropdown">
        <div class="base-header-logo">

                <?php the_custom_logo(); ?>

        </div>
        <div class="base-header-toggle"></div>

        <nav class="base-header-nav" role="navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
        </nav>

    </div>
</header>
