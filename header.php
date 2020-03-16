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
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Protecting People, Pets, and the Planet">
    <style> @import url('https://fonts.googleapis.com/css?family=Varela+Round'); </style>
    <style>h1, h2 {
            font-family: 'Varela Round', sans-serif;
        }</style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link rel='stylesheet' id='sb-font-awesome-css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all'/>

    <link rel='stylesheet' id='bwg_googlefonts-css'  href='https://fonts.googleapis.com/css?family=Ubuntu&#038;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' media='all'/>
    <link rel='stylesheet' id='theme-css'  href='https://greatergood.org/wp-content/themes/greatergood-theme/src/css/styles.css?ver=1.0' media='all'/>
    <script type='text/javascript'  src='https://greatergood.org/wp-content/themes/greatergood-theme/src/js/scripts.min.js?ver=1.0.0'></script>
    <script type='text/javascript' src='https://use.fontawesome.com/4b99ea32a0.js?ver=1.0.0'></script>


    <style type="text/css" id="wp-custom-css">
        .illustration img {
            width: 100%;
            display: block;
        }

        @media only screen and (max-width: 767px) {
            figure.alignleft, img.alignleft, figure.alignright, img.alignright {
                float: none;
            }
        }        </style>

    <!-- color overrides -->
    <style>
        /*.fx-highlight-1-color-background-color-10 {*/
        /*    background-color: rgba(255, 176, 0, 1);*/
        /*    color: #000;*/
        /*}*/

        /*.ui-action-button.outline.fx-highlight-1-color-background-color-10 {*/
        /*    background-color: rgba(0, 0, 0, 0);*/
        /*    color: #ffb000;*/
        /*}*/

        /*.ui-action-button.white-outline.fx-highlight-1-color-background-color-10 {*/
        /*    background-color: rgba(0, 0, 0, 0);*/
        /*    color: white;*/
        /*    border-color: white;*/
        /*}*/

        /*.ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-left-summary,*/
        /*.ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-summary {*/
        /*    color: #000;*/
        /*}*/

        /*.ui-team-panel-expander.fx-highlight-1-color-background-color-10 .expander-content-arrow {*/
        /*    border-bottom: 10px solid rgba(255, 176, 0, 1);*/
        /*}*/

        /*.ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-left-summary,*/
        /*.ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-summary {*/
        /*    color: #fff;*/
        /*}*/

        /*.ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-arrow {*/
        /*    border-bottom: 10px solid rgba(0, 151, 206, 1);*/
        /*}*/

        /*.fx-highlight-1-color-background-color-09 {*/
        /*    background-color: rgba(255, 176, 0, 0.9);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-08 {*/
        /*    background-color: rgba(255, 176, 0, 0.8);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-07 {*/
        /*    background-color: rgba(255, 176, 0, 0.7);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-06 {*/
        /*    background-color: rgba(255, 176, 0, 0.6);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-05 {*/
        /*    background-color: rgba(255, 176, 0, 0.5);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-04 {*/
        /*    background-color: rgba(255, 176, 0, 0.4);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-03 {*/
        /*    background-color: rgba(255, 176, 0, 0.03);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-02 {*/
        /*    background-color: rgba(255, 176, 0, 0.2);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-background-color-01 {*/
        /*    background-color: rgba(255, 176, 0, 0.1);*/
        /*    color: #000;*/
        /*}*/

        /*.fx-highlight-1-color-border-color {*/
        /*    border-color: rgba(255, 176, 0, 1);*/
        /*}*/

        /*.fx-highlight-1-color-text {*/
        /*    color: rgba(255, 176, 0, 1) !important;*/
        /*}*/

        /*.fx-main-color-background-color-10 {*/
        /*    background-color: rgba(0, 151, 206, 1);*/
        /*    color: #fff;*/
        /*}*/

        /*.ui-action-button.white-outline.fx-main-color-background-color-10 {*/
        /*    background-color: rgba(0, 0, 0, 0);*/
        /*    color: white;*/
        /*    border-color: white;*/
        /*}*/

        /*.fx-main-color-background-color-09 {*/
        /*    background-color: rgba(0, 151, 206, 0.9);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-08 {*/
        /*    background-color: rgba(0, 151, 206, 0.8);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-07 {*/
        /*    background-color: rgba(0, 151, 206, 0.7);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-06 {*/
        /*    background-color: rgba(0, 151, 206, 0.6);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-05 {*/
        /*    background-color: rgba(0, 151, 206, 0.5);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-04 {*/
        /*    background-color: rgba(0, 151, 206, 0.4);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-03 {*/
        /*    background-color: rgba(0, 151, 206, 0.3);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-02 {*/
        /*    background-color: rgba(0, 151, 206, 0.2);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-background-color-01 {*/
        /*    background-color: rgba(0, 151, 206, 0.1);*/
        /*    color: #fff;*/
        /*}*/

        /*.fx-main-color-border-color {*/
        /*    border-color: rgba(0, 151, 206, 1);*/
        /*}*/

        /*.fx-main-color-text {*/
        /*    color: rgba(0, 151, 206, 1);*/
        /*}*/

        /*.gform_button {*/
        /*    background-color: rgba(255, 176, 0, 1);*/
        /*    color: white;*/
        /*    font-weight: 500;*/
        /*}*/
    </style>

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
