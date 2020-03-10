<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package purebodyawareness
 */

?>


<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container foot-container">
        <section class="foot-1 col-sm-4">
            <a href="https://greatergood.org">
                <div id="foot-logo"></div>
            </a>
            <p>GreaterGood.org is a registered 501(c)3 public charity. Our Tax ID number is 20-4846675.</p>
            <a href="https://greatergood.org/donate" class="ui-action-button solid foot-button track-click"
               data-link-location="footer" data-campaign-title="no campaign">Donate</a>
            <p class="copyright-hide">Copyright © 2020 | <a href="https://greatergood.org/privacy" class="privacy-link">Privacy</a>
            </p>
        </section>
        <section class="foot-2 col-sm-5">
            <div class="row">
                <div class="col-md-3 blank">
                </div>
                <div class="col-xs-6 col-md-4 foot-nav">
                    <h4>Nav</h4>
                    <ul>
                        <li id="menu-item-7245"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7245"><a
                                    href="https://greatergood.org/catalog-2018/">Gift Catalog</a></li>
                        <li id="menu-item-26"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a
                                    href="https://greatergood.org/about-us/">About Us</a></li>
                        <li id="menu-item-25"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a
                                    href="https://greatergood.org/what-we-do/">What We Do</a></li>
                        <li id="menu-item-14377"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14377"><a
                                    href="https://greatergood.org/donate-to-ggo/">Donate</a></li>
                        <li id="menu-item-14376"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14376"><a
                                    href="https://greatergood.org/fundraise-for-ggo/">Fundraise</a></li>
                        <li id="menu-item-56"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a
                                    href="https://greatergood.org/blog/">Blog</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-4 foot-smedia">
                    <h4>Social</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/www.GreaterGood.org" target="_blank"><i
                                        class="fa fa-facebook fa-2" aria-hidden="true"></i>&nbsp;Facebook</a></li>
                        <li><a href="https://www.instagram.com/greatergoodorg" target="_blank"><i
                                        class="fa fa-instagram fa-2" aria-hidden="true"></i>&nbsp;Instagram</a></li>
                        <li><a href="https://www.twitter.com/greatergoodorg" target="_blank"><i
                                        class="fa fa-twitter fa-2" aria-hidden="true"></i>&nbsp;Twitter</a></li>
                        <li><a href="https://www.youtube.com/channel/UCwk-A6mohpMlCodB9Sk9TDg" target="_blank"><i
                                        class="fa fa-youtube-play fa-2" aria-hidden="true"></i>&nbsp;YouTube</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="foot-3 col-sm-3">
            <h4>Contact Us</h4>
            <form id="ajax-contact" method="post" action="/mailer.php">
                <input type="text" id="name" name="name" placeholder="name" required><br>
                <input type="email" id="email" name="email" placeholder="email" required><br>
                <textarea id="message" name="message" placeholder="message" required></textarea><br>
                <input type="submit" value="Send">
            </form>
            <div id="form-messages"></div>
        </section>
    </div>

    <div class="foot-4-border-bleed"><p>Copyright © 2020 | <a href="https://greatergood.org/privacy"
                                                              class="privacy-link">Privacy</a></p></div>
    <div class="container foot-container">
        <section class="foot-4 col-sm-12">
            <div class="col-md-1 foot-sub-1">
                <a href="https://greatergood.org">Greatergood.org</a>
            </div>
            <div class="col-md-11 foot-sub-2">


            </div>
        </section>
    </div>
</footer>
<!-- /footer -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjMT-A7aiQhWE36XCEoJZFO5T68RscAWQ"></script>
<!-- Instagram Feed JS -->


<script type='text/javascript'>
    /* <![CDATA[ */
    //var sb_instagram_js_options = {"sb_instagram_at": "", "font_method": "svg"};
    /* ]]> */
</script>
<script type='text/javascript' src='https://greatergood.org/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.12.2'></script>
<script type='text/javascript' src='https://greatergood.org/wp-content/plugins/page-links-to/js/new-tab.min.js?ver=3.1.2'></script>
<?php wp_footer(); ?>
</body>
</html>