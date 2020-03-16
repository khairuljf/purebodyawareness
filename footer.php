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


<?php

global $pureopt;


?>

<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container foot-container">
        <section class="foot-1 col-sm-4">
            <a href="https://greatergood.org">
                <div id="foot-logo" style="background: url('<?php echo  $pureopt['footer-log']['url'] ?>') center center;background-size: contain!important;"></div>
            </a>
            <p><?php echo  $pureopt['footer-desc'] ?></p>
            <a href="<?php echo  $pureopt['footer-donate-link'] ?>" class="ui-action-button solid foot-button track-click"
               data-link-location="footer" data-campaign-title="no campaign">Donate</a>
            <p class="copyright-hide"><?php echo  $pureopt['copyright-text'] ?> | <a href="<?php echo  $pureopt['privacy-link'] ?>" class="privacy-link">Privacy</a>
            </p>
        </section>
        <section class="foot-2 col-sm-5">
            <div class="row">
                <div class="col-md-3 blank">
                </div>
                <div class="col-xs-6 col-md-4 foot-nav">
                    <h4>Nav</h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </div>
                <div class="col-xs-6 col-md-4 foot-smedia">
                    <h4>Social</h4>
                    <ul>
                        <?php

                        if($pureopt['facebook']){ ?>
                            <li><a href="<?php echo $pureopt['facebook'] ?>" target="_blank"><i
                                        class="fa fa-facebook fa-2" aria-hidden="true"></i>&nbsp;Facebook</a></li>
                       <?php } ?>
                        <?php
                        if($pureopt['instagram']){ ?>
                        <li><a href="<?php echo $pureopt['instagram'] ?>" target="_blank"><i
                                    class="fa fa-instagram fa-2" aria-hidden="true"></i>&nbsp;Instagram</a></li>
                        <?php } ?>
                        <?php
                        if($pureopt['twitter']){ ?>
                        <li><a href="<?php echo $pureopt['twitter'] ?>" target="_blank"><i
                                    class="fa fa-twitter fa-2" aria-hidden="true"></i>&nbsp;Twitter</a></li>
                        <?php } ?>
                        <?php
                        if($pureopt['youtube']){ ?>
                        <li><a href="<?php echo $pureopt['youtube'] ?>" target="_blank"><i
                                    class="fa fa-youtube-play fa-2" aria-hidden="true"></i>&nbsp;YouTube</a></li>
                        <?php } ?>

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
                <a href="<?php echo site_url() ?>"><?php echo site_url() ?></a>
            </div>
            <div class="col-md-11 foot-sub-2">


            </div>
        </section>
    </div>
</footer>
<!-- /footer -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjMT-A7aiQhWE36XCEoJZFO5T68RscAWQ"></script>
<!-- Instagram Feed JS -->

<?php wp_footer(); ?>
</body>
</html>