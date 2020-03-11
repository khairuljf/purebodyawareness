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
    <meta charset="UTF-8">
    <title>Home &mdash; GreaterGood.org : GreaterGood.org</title>
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


    <!-- This site is optimized with the Yoast SEO plugin v12.0 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="GreaterGood.org is dedicated to protecting people, pets, and the planet. Our Signature Programs focus on pet rescue, education, and wildlife conservation."/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Home &mdash; GreaterGood.org"/>
    <meta property="og:description"
          content="GreaterGood.org is dedicated to protecting people, pets, and the planet. Our Signature Programs focus on pet rescue, education, and wildlife conservation."/>
    <meta property="og:url" content="https://greatergood.org/"/>
    <meta property="og:site_name" content="GreaterGood.org"/>
    <meta property="og:image" content="https://greatergood.org/wp-content/uploads/2018/08/PPP-Hero.jpg"/>
    <meta property="og:image:secure_url" content="https://greatergood.org/wp-content/uploads/2018/08/PPP-Hero.jpg"/>
    <meta property="og:image:width" content="1500"/>
    <meta property="og:image:height" content="570"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="GreaterGood.org is dedicated to protecting people, pets, and the planet. Our Signature Programs focus on pet rescue, education, and wildlife conservation."/>
    <meta name="twitter:title" content="Learn More About GreaterGood.org"/>
    <meta name="twitter:site" content="@greatergoodorg"/>
    <meta name="twitter:image" content="https://greatergood.org/wp-content/uploads/2018/07/twitter-banner.jpg"/>
    <meta name="twitter:creator" content="@greatergoodorg"/>

    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='//use.fontawesome.com'/>
    <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <meta property="fb:admins" content="YOUR USER ID"/>
    <meta property="og:title" content="Home"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://greatergood.org/"/>
    <meta property="og:site_name" content="Greater Good"/>
    <meta property="og:image" content="http://greatergood.org/wp-content/uploads/2016/12/15235675_10154392933127639_6836373726370515782_o.jpg"/>
<!--    <link rel='stylesheet' id='crp-tc-buttons-css'href='https://greatergood.org/wp-content/plugins/grid-kit-premium/css/crp-tc-buttons.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='crp-font-awesome-css'href='https://greatergood.org/wp-content/plugins/grid-kit-premium/css/fontawesome/font-awesome.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='crp-preloader-css'href='https://greatergood.org/wp-content/plugins/grid-kit-premium/css/crp-preloader.css?ver=5.2.5' media='all'/>-->
    <link rel='stylesheet' id='sb_instagram_styles-css'  href='https://greatergood.org/wp-content/plugins/instagram-feed/css/sb-instagram.min.css?ver=1.12.2' media='all'/>
    <link rel='stylesheet' id='sb-font-awesome-css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all'/>
<!--    <link rel='stylesheet' id='bwg_fonts-css'  href='https://greatergood.org/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts.css?ver=0.0.1' media='all'/>-->
<!--    <link rel='stylesheet' id='sumoselect-css' href='https://greatergood.org/wp-content/plugins/photo-gallery/css/sumoselect.min.css?ver=3.0.3' media='all'/>-->
<!--    <link rel='stylesheet' id='mCustomScrollbar-css' href='https://greatergood.org/wp-content/plugins/photo-gallery/css/jquery.mCustomScrollbar.min.css?ver=1.5.35' media='all'/>-->
    <link rel='stylesheet' id='bwg_googlefonts-css'  href='https://fonts.googleapis.com/css?family=Ubuntu&#038;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' media='all'/>
<!--    <link rel='stylesheet' id='bwg_frontend-css'  href='https://greatergood.org/wp-content/plugins/photo-gallery/css/styles.min.css?ver=1.5.35' media='all'/>-->
<!--    <link rel='stylesheet' id='share-this-share-buttons-sticky-css'  href='https://greatergood.org/wp-content/plugins/sharethis-share-buttons/css/mu-style.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='gks-tc-buttons-css' href='https://greatergood.org/wp-content/plugins/yoo-slider/css/gks-tc-buttons.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='gks-font-awesome-css'  href='https://greatergood.org/wp-content/plugins/yoo-slider/css/fontawesome/font-awesome.css?ver=5.2.5'  media='all'/>-->
<!--    <link rel='stylesheet' id='gks-owl-carousel-css'   href='https://greatergood.org/wp-content/plugins/yoo-slider/css/viewer/owl-carousel/assets/owl.carousel.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='gks-owl-layout-css'   href='https://greatergood.org/wp-content/plugins/yoo-slider/css/viewer/owl-carousel/layout.css?ver=5.2.5' media='all'/>-->
<!--    <link rel='stylesheet' id='gks-owl-animate-css'  href='https://greatergood.org/wp-content/plugins/yoo-slider/css/viewer/owl-carousel/animate.css?ver=5.2.5'  media='all'/>-->
<!--    <link rel='stylesheet' id='gks-main-front-css'  href='https://greatergood.org/wp-content/plugins/yoo-slider/css/gks-main-front.css?ver=5.2.5' media='all'/>-->
    <link rel='stylesheet' id='theme-css'  href='https://greatergood.org/wp-content/themes/greatergood-theme/src/css/styles.css?ver=1.0' media='all'/>
<!--    <link rel='stylesheet' id='theme-css'  href='https://greatergood.org/wp-content/themes/greatergood-theme/src/css/styles.css?ver=1.0' media='all'/>-->
    <script type='text/javascript'  src='https://greatergood.org/wp-content/themes/greatergood-theme/src/js/scripts.min.js?ver=1.0.0'></script>
    <script type='text/javascript' src='https://use.fontawesome.com/4b99ea32a0.js?ver=1.0.0'></script>
<!--    <script type='text/javascript'  src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/crp-main-front.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/crp-helper.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/crp-social.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/crp-preloader.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/froogaloop2.min.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/grid-kit-premium/js/crp-rater.js?ver=5.2.5'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/photo-gallery/js/jquery.sumoselect.min.js?ver=3.0.3'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/photo-gallery/js/jquery.mobile.min.js?ver=1.3.2'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/photo-gallery/js/jquery.mCustomScrollbar.concat.min.js?ver=1.5.35'></script>-->
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/photo-gallery/js/jquery.fullscreen-0.4.1.min.js?ver=0.4.1'></script>-->
    <script type='text/javascript'>
        /* <![CDATA[ */
        var bwg_objectsL10n = {
            "bwg_field_required": "field is required.",
            "bwg_mail_validation": "This is not a valid email address.",
            "bwg_search_result": "There are no images matching your search.",
            "bwg_select_tag": "Select Tag",
            "bwg_order_by": "Order By",
            "bwg_search": "Search",
            "bwg_show_ecommerce": "Show Ecommerce",
            "bwg_hide_ecommerce": "Hide Ecommerce",
            "bwg_show_comments": "Show Comments",
            "bwg_hide_comments": "Hide Comments",
            "bwg_restore": "Restore",
            "bwg_maximize": "Maximize",
            "bwg_fullscreen": "Fullscreen",
            "bwg_exit_fullscreen": "Exit Fullscreen",
            "bwg_search_tag": "SEARCH...",
            "bwg_tag_no_match": "No tags found",
            "bwg_all_tags_selected": "All tags selected",
            "bwg_tags_selected": "tags selected",
            "play": "Play",
            "pause": "Pause",
            "is_pro": "",
            "bwg_play": "Play",
            "bwg_pause": "Pause",
            "bwg_hide_info": "Hide info",
            "bwg_show_info": "Show info",
            "bwg_hide_rating": "Hide rating",
            "bwg_show_rating": "Show rating",
            "ok": "Ok",
            "cancel": "Cancel",
            "select_all": "Select all",
            "lazy_load": "0",
            "lazy_loader": "https:\/\/greatergood.org\/wp-content\/plugins\/photo-gallery\/images\/ajax_loader.png",
            "front_ajax": "0"
        };
        /* ]]> */
    </script>
<!--    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/photo-gallery/js/scripts.min.js?ver=1.5.35'></script>-->
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpgmza_google_api_status = {"message": "Enqueued", "code": "ENQUEUED"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://greatergood.org/wp-content/plugins/wp-google-maps/wpgmza_data.js?ver=5.2.5'></script>
    <link rel='https://api.w.org/' href='https://greatergood.org/wp-json/'/>
    <link rel="alternate" type="application/json+oembed" href="https://greatergood.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreatergood.org%2F"/>
    <link rel="alternate" type="text/xml+oembed" href="https://greatergood.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreatergood.org%2F&#038;format=xml"/>
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
        .fx-highlight-1-color-background-color-10 {
            background-color: rgba(255, 176, 0, 1);
            color: #000;
        }

        .ui-action-button.outline.fx-highlight-1-color-background-color-10 {
            background-color: rgba(0, 0, 0, 0);
            color: #ffb000;
        }

        .ui-action-button.white-outline.fx-highlight-1-color-background-color-10 {
            background-color: rgba(0, 0, 0, 0);
            color: white;
            border-color: white;
        }

        .ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-left-summary,
        .ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-summary {
            color: #000;
        }

        .ui-team-panel-expander.fx-highlight-1-color-background-color-10 .expander-content-arrow {
            border-bottom: 10px solid rgba(255, 176, 0, 1);
        }

        .ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-left-summary,
        .ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-container .expander-content-summary {
            color: #fff;
        }

        .ui-team-panel-expander.fx-main-color-background-color-10 .expander-content-arrow {
            border-bottom: 10px solid rgba(0, 151, 206, 1);
        }

        .fx-highlight-1-color-background-color-09 {
            background-color: rgba(255, 176, 0, 0.9);
            color: #000;
        }

        .fx-highlight-1-color-background-color-08 {
            background-color: rgba(255, 176, 0, 0.8);
            color: #000;
        }

        .fx-highlight-1-color-background-color-07 {
            background-color: rgba(255, 176, 0, 0.7);
            color: #000;
        }

        .fx-highlight-1-color-background-color-06 {
            background-color: rgba(255, 176, 0, 0.6);
            color: #000;
        }

        .fx-highlight-1-color-background-color-05 {
            background-color: rgba(255, 176, 0, 0.5);
            color: #000;
        }

        .fx-highlight-1-color-background-color-04 {
            background-color: rgba(255, 176, 0, 0.4);
            color: #000;
        }

        .fx-highlight-1-color-background-color-03 {
            background-color: rgba(255, 176, 0, 0.03);
            color: #000;
        }

        .fx-highlight-1-color-background-color-02 {
            background-color: rgba(255, 176, 0, 0.2);
            color: #000;
        }

        .fx-highlight-1-color-background-color-01 {
            background-color: rgba(255, 176, 0, 0.1);
            color: #000;
        }

        .fx-highlight-1-color-border-color {
            border-color: rgba(255, 176, 0, 1);
        }

        .fx-highlight-1-color-text {
            color: rgba(255, 176, 0, 1) !important;
        }

        .fx-main-color-background-color-10 {
            background-color: rgba(0, 151, 206, 1);
            color: #fff;
        }

        .ui-action-button.white-outline.fx-main-color-background-color-10 {
            background-color: rgba(0, 0, 0, 0);
            color: white;
            border-color: white;
        }

        .fx-main-color-background-color-09 {
            background-color: rgba(0, 151, 206, 0.9);
            color: #fff;
        }

        .fx-main-color-background-color-08 {
            background-color: rgba(0, 151, 206, 0.8);
            color: #fff;
        }

        .fx-main-color-background-color-07 {
            background-color: rgba(0, 151, 206, 0.7);
            color: #fff;
        }

        .fx-main-color-background-color-06 {
            background-color: rgba(0, 151, 206, 0.6);
            color: #fff;
        }

        .fx-main-color-background-color-05 {
            background-color: rgba(0, 151, 206, 0.5);
            color: #fff;
        }

        .fx-main-color-background-color-04 {
            background-color: rgba(0, 151, 206, 0.4);
            color: #fff;
        }

        .fx-main-color-background-color-03 {
            background-color: rgba(0, 151, 206, 0.3);
            color: #fff;
        }

        .fx-main-color-background-color-02 {
            background-color: rgba(0, 151, 206, 0.2);
            color: #fff;
        }

        .fx-main-color-background-color-01 {
            background-color: rgba(0, 151, 206, 0.1);
            color: #fff;
        }

        .fx-main-color-border-color {
            border-color: rgba(0, 151, 206, 1);
        }

        .fx-main-color-text {
            color: rgba(0, 151, 206, 1);
        }

        .gform_button {
            background-color: rgba(255, 176, 0, 1);
            color: white;
            font-weight: 500;
        }
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
